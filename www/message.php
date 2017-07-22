<?php
// Turn off all error reporting
error_reporting(0);

if(count($_POST)<4){
//this is to count how many values are sent in the post request
//if the user directly pings the page or uses other platform for pining the page with less values
	//header('LOCATION:http://www.kiitmun.org');
	$response =  "Don't fuck around with the form...";
	echo $response;
	exit;
}

$response = "";
$check = 1;
foreach($_POST as $key=>$value)
{
if(strpos($value, 'ransisco') !== FALSE)
{
//header('LOCATION:form.php');
$response =  "Don't fuck around... XSS and San Fransisco won't work...";
echo $response;
exit;
}//end of if
else
{
$value = trim($value);
$value = strip_tags($value);
$value = stripslashes($value);
$postdata[$key]=$value; //$postdata['email']
}	//end of else
}	//end of foreach

#the validation of all the inputs

$postdata['name'] = 	filter_var($postdata['name'],FILTER_SANITIZE_STRING);
$postdata['email'] = 	filter_var($postdata['email'],FILTER_SANITIZE_EMAIL);
$postdata['subject'] = 	filter_var($postdata['subject'],FILTER_SANITIZE_STRING);
$postdata['message'] = 	filter_var($postdata['message'],FILTER_SANITIZE_STRING);



if((strlen($postdata['name'])<1) or !(ctype_alpha(str_replace(" ", "",$postdata['name'])))){
$response .= "Empty/Invalid name"."<br />";
$check = 0;
}
if((!filter_var($postdata['email'],FILTER_VALIDATE_EMAIL)) or (strlen($postdata['email']) <1) ){
$response .= "Empty/Invalid email"."<br />";
$check = 0;
}
if(strlen($postdata['subject'])<1){
$response .= "Empty subject"."<br />";
$check = 0;
}
if(strlen($postdata['message'])<1){
$response .= "Empty message"."<br />";
$check = 0;
}


if($check == 0)
{
	echo $response;
	exit;
}


	//mailing script
	$name = $_POST['name']; // all fields are required
	$email_from = $_POST['email'];
	$message = $_POST['message'];
	$subject_mail = "Kiit International MUN Contact form";


	$email_message = " ";
	$email_message .= "Subject : ".$subject_mail."\n";
	$email_message .= "Name : ".$name."\n";
    $email_message .= "Email : ".$email_from."\n";
	$email_message .= "Message : ".$message."\n";
	

	$to = "contact@kiitmun.org" ;// has been hardcoded
    $subject = $subject_mail ;
	$headers = "From:".$email_from."\r\n";
    $headers .= "Reply-To:".$email_from."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1" . "\r\n";
	
	if(! mail($to, $subject, $email_message, $headers,"-f contact@kiitmun.org")){
	echo "Error. Please try again.";
	} 
	else
	{
		 echo "We just got your mail, We will be in touch with you soon !";
	}
	 
?>