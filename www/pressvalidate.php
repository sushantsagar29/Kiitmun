<?php
// Turn off all error reporting
error_reporting(0);

if(count($_POST)<14){
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
if($key == "preference"){
	
}
else if(strpos($value, 'ransisco') !== FALSE)
{
//header('form.php');
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
$postdata['contact'] = 	filter_var($postdata['contact'],FILTER_SANITIZE_NUMBER_INT);
$postdata['gender'] = 	filter_var($postdata['gender'],FILTER_SANITIZE_STRING);
$postdata['address'] = 	filter_var($postdata['address'],FILTER_SANITIZE_STRING);
$postdata['nation'] = 	filter_var($postdata['nation'],FILTER_SANITIZE_STRING);
$postdata['college'] = 	filter_var($postdata['college'],FILTER_SANITIZE_STRING);
$postdata['course'] = 	filter_var($postdata['course'],FILTER_SANITIZE_STRING);
$postdata['syear'] = 	filter_var($postdata['syear'],FILTER_SANITIZE_STRING);
$postdata['cv'] = 		filter_var($postdata['cv'],FILTER_SANITIZE_STRING);
$postdata['accom'] = 	filter_var($postdata['accom'],FILTER_SANITIZE_STRING);

if((strlen($postdata['name'])<1) or !(ctype_alpha(str_replace(" ", "",$postdata['name'])))){
$response .= "Empty/Invalid name"."<br />";
$check = 0;
}
if((!filter_var($postdata['email'],FILTER_VALIDATE_EMAIL)) or (strlen($postdata['email']) <1) ){
$response .= "Empty/Invalid email"."<br />";
$check = 0;
}

if((strlen($postdata['contact'])!==10) or !(ctype_digit($postdata['contact']))){
$response .= "Empty/Invalid contact no"."<br />";
$check = 0;
}
if((strlen($postdata['gender'])<1) or !(ctype_alpha(str_replace(" ", "",$postdata['gender'])))){
$response .= "Empty/Invalid gender"."<br />";
$check = 0;
}
if(strlen($postdata['address'])<1){
$response .= "Empty address"."<br />";
$check = 0;
}
if((strlen($postdata['nation'])<1) or !(ctype_alpha(str_replace(" ", "",$postdata['nation'])))){
$response .= "Empty/Invalid nationality"."<br />";
$check = 0;
}
if(strlen($postdata['college'])<1){
$response .= "Empty Name of Institute"."<br />";
$check = 0;
}
if(strlen($postdata['course'])<1){
$response .= "Empty Course/Stream"."<br />";
$check = 0;
}
if(strlen($postdata['syear'])<1){
$response .= "Empty Year of Study"."<br />";
$check = 0;
}

if(strlen($postdata['accom'])<1){
$response .= "Empty Acoomodation"."<br />";
$check = 0;
}

if(strlen($postdata['cv'])<1){
$response .= "Empty CV"."<br />";
$check = 0;
}

if((!isset($_POST['preference']))  or (count($_POST['preference']) < 3)){
	$response .= "Council Preference selection not complete"."<br />";
	$check = 0;
}
else{
	$council_preference="";
	$council_preference = implode(',', $_POST['preference']);
}


if((strlen($postdata['position'])<1) or ($postdata['position'] == 'zero') ){
	$response .= "Position not selected"."<br />";
	$check = 0;
}
else{
	if($postdata['position'] == 'editor'){
		#yes/no for working as reporter escaped
		$postdata['reporterarticle'] = "";
		if((strlen($postdata['videoarticle'])<1)){
			$response .= "Empty Video article"."<br />";
			$check = 0;
		}
		if((strlen($postdata['editorarticle'])<1)){
			$response .= "Empty Editor article"."<br />";
			$check = 0;
		}
	}
	
	if($postdata['position'] == 'reporter'){
		$postdata['work_reporter'] = "";
		if((strlen($postdata['reporterarticle'])<1)){
			$response .= "Empty/Invalid Reporter article"."<br />";
			$check = 0;
		}
		if((strlen($postdata['videoarticle'])<1)){
			$response .= "Empty/Invalid Video article"."<br />";
			$check = 0;
		}
		$postdata['editorarticle'] = "";
	}

	if($postdata['position'] == 'photographer'){
		$postdata['work_reporter'] = "";
		$postdata['reporterarticle'] = "";
		$postdata['videoarticle'] = "";
		$postdata['editorarticle'] = "";
	}
		
}

$postdata['heard'] = 		filter_var($postdata['heard'],FILTER_SANITIZE_STRING);
if($postdata['hear'] == "ca"){
	$postdata['ca'] = 		filter_var($postdata['ca'],FILTER_SANITIZE_STRING);
}

if($check == 0)
{
	echo $response;
	exit;
}

require_once('connect.php');//connecting to the server

//insert details of the new ca
$query = "INSERT INTO press( name,email,contact,gender,address,nation,college,course,syear,accom,cv,
								position,preference,work_reporter,reporterarticle,videoarticle,editorarticle,
								heard,ca) 
			VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,? )";
				
$sth = $dbh->prepare($query);
$excute=$sth->execute(array($postdata['name'],$postdata['email'],$postdata['contact'],$postdata['gender'], $postdata['address'], $postdata['nation'],
							$postdata['college'],$postdata['course'], $postdata['syear'],$postdata['accom'], $postdata['cv'],$postdata['position'],
							$council_preference,$postdata['work_reporter'],$postdata['reporterarticle'],$postdata['videoarticle'],$postdata['editorarticle'],
							$postdata['heard'],$postdata['ca']));
if(!$excute ){
	echo "Error in connection"."<br/>"."Please try submitting the form again"."<br />";
	exit;
} 


//mailing script
	
	$email_message = "";
	$email_message .= "Dear ".$postdata['name'].",\n\n"; //dear name,
	$email_message .= "You shall be hearing from us with the allotment as and when they are released.\n\n";
	$email_message .= "Stay tuned to us on our social platforms and the website!\n\n";
	$email_message .= "Regards\n";
	$email_message .= "Secretariat\n";
	$email_message .= "KIIT International MUN 2015\n";
	$email_message .= "F: www.facebook.com/kiitmun\n";
	$email_message .= "T: www.twitter.com/kiitmun\n"
	$email_message .= "L : in.linkedin.com/in/kiitmun\n";
	$email_message .= "G: plus.google.com/+kiitmun\n";
	$email_message .= "M : 0091-9674455274 | 0091-7504878807 | 0091-9692549623\n";
	
	
	$to = $postdata['email'] ;
    $subject = "International Press application for KIIT International MUN 2015";
    $headers = "From: KIIT International MUN <contact@kiitmun.org>\r\n";
    $headers .= "Reply-To: contact@kiitmun.org \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1" . "\r\n";

    mail($to, $subject, $email_message, $headers,"-f contact@kiitmun.org");
		
echo "OK";
?>