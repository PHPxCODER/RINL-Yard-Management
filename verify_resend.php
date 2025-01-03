<?php
require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if (!securePage($_SERVER['PHP_SELF'])){die();}

if(isset($user) && $user->isLoggedIn()){
  Redirect::to($us_url_root."users/account.php");
}
$query = $db->query("SELECT * FROM email");
$results = $query->first();
$act = $results->email_act;
$msg = lang("ERR_EM_VER");
if($act!=1) Redirect::to($us_url_root.'index.php?err='.$msg);
if($user->isLoggedIn()) $user->logout();

$token = Input::get('csrf');
if(Input::exists()){
    if(!Token::check($token)){
        include($abs_us_root.$us_url_root.'usersc/scripts/token_error.php');
    }
}

$email_sent=FALSE;

$errors = array();
if(Input::exists('post')){
    $email = Input::get('email');
    $fuser = new User($email);
    $check = $db->query("SELECT id FROM users WHERE email = ? AND email_verified = 1",[$email])->count();
    $validate = new Validate();
    $validation = $validate->check($_POST,array(
    'email' => array(
      'display' => lang("GEN_EMAIL"),
      'valid_email' => true,
      'required' => true,
    ),
    ));
    if($validation->passed()){ //if email is valid, do this

        if($fuser->exists()){
          if($check > 0){
            $string = lang("VER_SUC");
            Redirect::to($us_url_root."login?err=".$string);
          }
          $vericode=randomstring(15);
          $vericode_expiry=date("Y-m-d H:i:s",strtotime("+$settings->join_vericode_expiry hours",strtotime(date("Y-m-d H:i:s"))));
          $db->update('users',$fuser->data()->id,['vericode' => $vericode,'vericode_expiry' => $vericode_expiry]);
            //send the email
            $options = array(
              'fname' => $fuser->data()->fname,
              'email' => $email,
              'vericode' => $vericode,
              'join_vericode_expiry' => $settings->join_vericode_expiry
            );
            $encoded_email=rawurlencode($email);
            $subject = lang("EML_VER");
            $body =  email_body('_email_template_verify.php',$options);
            $email_sent=email($email,$subject,$body);
            logger($fuser->data()->id,"User","Requested a new verification email.");
            if(!$email_sent){
                $errors[] = lang("ERR_EMAIL");
            }
        }else{
            $errors[] = lang("ERR_EM_DB");
        }
    }else{
        $errors = $validation->errors();
    }
}

?>
<br><div class="jumbotron">
<div id="page-wrapper">
<div class="container">

<?php

if ($email_sent){
    require $abs_us_root.$us_url_root.'users/views/_verify_resend_success.php';
}else{
    require $abs_us_root.$us_url_root.'users/views/_verify_resend.php';
}

?>
</div>
</div>
</div>
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

  <!-- Place any per-page javascript here -->

<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
