<?php
require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if(isset($user) && $user->isLoggedIn()){
  Redirect::to($us_url_root."users/account.php");
}
if (!securePage($_SERVER['PHP_SELF'])){die();}
$hooks = getMyHooks();
includeHook($hooks,'pre');
$email = Input::get('email');
if(isset($user) && $user->isLoggedIn()){
  Redirect::to($us_url_root."account.php");
}

$em = $db->query("SELECT * FROM email")->first();

if($em->email_login == "yourEmail@gmail.com"){
  echo "<br><h3 align='center'>".lang("ERR_EM_VER")."</h3>";
  die();
}
$error_message = null;
$errors = array();
$email_sent=FALSE;

$token = Input::get('csrf');
if(Input::exists()){
    if(!Token::check($token)){
        include($abs_us_root.$us_url_root.'usersc/scripts/token_error.php');
    }
}
$eventhooks =  getMyHooks(['page'=>'forgotPassword']);
includeHook($eventhooks,'body');


if (Input::get('forgotten_password')) {

    $fuser = new User($email);
    //validate the form
    $validate = new Validate();
    $msg1 = lang("GEN_EMAIL");

    $validation = $validate->check($_POST,array('email' => array('display' => $msg1,'valid_email' => true,'required' => true,),));

    includeHook($hooks,'post');
    if(isset($hookData['validation'])){
      $validation = $hookData['validation'];
    }
    if(isset($hookData['fuser'])){
      $fuser = $hookData['fuser'];
    }

    if($validation->passed()){
        if($fuser->exists()){
          $vericode=randomstring(15);
          $vericode_expiry=date("Y-m-d H:i:s",strtotime("+$settings->reset_vericode_expiry minutes",strtotime(date("Y-m-d H:i:s"))));
          $db->update('users',$fuser->data()->id,['vericode' => $vericode,'vericode_expiry' => $vericode_expiry]);
            //send the email
            $options = array(
              'fname' => $fuser->data()->fname,
              'email' => rawurlencode($email),
              'vericode' => $vericode,
              'reset_vericode_expiry' => $settings->reset_vericode_expiry
            );
            $subject = lang("PW_RESET");
            $encoded_email=rawurlencode($email);
            $body =  email_body('_email_template_forgot_password.php',$options);
            $email_sent=email($email,$subject,$body);
            logger($fuser->data()->id,"User","Requested password reset.");
            if(!$email_sent){
                $errors[] = lang("ERR_EMAIL");
            }
        }else{
            sleep(2); //pretend to send
            logger("","Password Reset","Attempted password reset on ".$email);
            $email_sent = true;
        }
    }else{
        //display the errors
        $errors = $validation->errors();
    }
}
?>
<br><div class="jumbotron">
<div id="page-wrapper">
<div class="container">
<?php

if($email_sent){
    require $abs_us_root.$us_url_root.'users/views/_forgot_password_sent.php';
}else{
    require $abs_us_root.$us_url_root.'users/views/_forgot_password.php';
}

includeHook($hooks,'bottom');

?>
</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div><!-- /jumbotron -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->

<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
