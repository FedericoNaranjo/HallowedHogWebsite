<?php
 
if(true) 
{
  
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "the_juicinator@hotmail.com";
 
    $email_subject = "Ask Hitlers Mustache: Question recieved!";
 
 
 
     
 
    $name = $_POST['name']; // name
 
    $email_from = $_POST['email']; // email
 
    $question = $_POST['question']; // question
 
     
 
    $email_message = "Question details below.\n\n";
 
     
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    } 
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Question: ".clean_string($question)."\n";
 
     
 
     
 
//Return Address
$returnAddress="From: ".($_POST['email']); 

$headers = 'From: '.'HallowedHogAdvice@terribleAdvice.ca'."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
$headers .= "X-Priority: 1 (Highest)\n";
        $headers .= "X-MSMail-Priority: High\n";
        $headers .= "Importance: High\n";
		
@mail($email_to, $email_subject, $email_message, $headers);  
 
 
?>
 <!--Success Page below--> 
<?php include("sent.php");?>

 


 
 
 
<?php
 
}
 
?>