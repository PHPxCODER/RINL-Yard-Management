<div class="mini-footer"><font color="white">&copy;
    <?php echo date("Y"); ?>
    <?=$settings->copyright; ?>
       <br>
       <?php
  function getUserIpAddr(){
  if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      //ip from share internet
      $ip = $_SERVER['HTTP_CLIENT_IP'];
  }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      //ip pass from proxy
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }else{
      $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}
gethostbyaddr($_SERVER['REMOTE_ADDR']);

// API URL for IPAPI.is
// $api_url = 'https://api.ipapi.is/?q=' .getUserIpAddr();
// $api_url = 'https://api.ipapi.is/?q=162.218.156.0';
// $api_url = 'https://api.ipapi.is/?key=a7ca1d7606dbde8d';


// Fetch JSON data from the API URL
// $json_data = file_get_contents($api_url);

// Decode JSON data into a PHP object
// $data_object = json_decode($json_data);

// Check if the 'asn' object exists in the JSON response
// if (isset($data_object->asn)) {
//     $asn = $data_object->asn;
//     $company = $data_object->company;
    // Display specific information from the 'asn' object
    echo "<b>For Security Purposes We Store Your Internet Protocol Address (IP Address).<br>";
    // echo "Your ISP is ".$company->name." (AS".$asn->asn.")."; 
// } else {
//     echo "ASN Information not found in the API response.";
// }
?></font>