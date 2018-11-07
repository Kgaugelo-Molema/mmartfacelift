
<?php
$error_message = "";
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@mmarthouse.co.za";
    $email_cc = "";
    $email_subject = "Art Collection Enquiry";
 
    function died($error) {
        // your error code can go here
        $result = "These errors appear below.<br /><br />";
        $result .= $error."<br />";
        return $result;
    }
 
 
    // validation expected data exists
    if(!isset($_POST['email'])) {
        $error_message = died('Error sending the enquiry.');       
    }
 
    if(strlen($error_message) == 0) { 
        $email_from = $_POST['email']; // required    
    }
       
    if(strlen($error_message) > 0) {
        $error_message = died($error_message);
    }
    
    $email_message = "I am interested in your art collection.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    if(strlen($error_message) == 0) {
        //$email_message .= "Name: ".clean_string($first_name)."\n";
        $email_message .= "Email: ".clean_string($email_from)."\n";
        //$email_message .= "Message: ".clean_string($comments)."\n";
    }
 
    // create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'cc: '.$email_from."\r\n" .
    'bcc: '.$email_cc."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    if(strlen($error_message) == 0) 
        @mail($email_to, $email_subject, $email_message, $headers);  
    
 } 
?>