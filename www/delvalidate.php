<?php
// Turn off all error reporting
error_reporting(0);

if(count($_POST)<15){
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

if(strlen($postdata['cv'])<1){
$response .= "Empty CV"."<br />";
$check = 0;
}
if(strlen($postdata['accom'])<1){
$response .= "Empty Acoomodation"."<br />";
$check = 0;
}

if($postdata['seconddel'] == "show")
{
$postdata['secname'] = 		filter_var($postdata['secname'],FILTER_SANITIZE_STRING);
$postdata['secemail'] = 	filter_var($postdata['secemail'],FILTER_SANITIZE_EMAIL);
$postdata['seccontact'] = 	filter_var($postdata['seccontact'],FILTER_SANITIZE_NUMBER_INT);
$postdata['secgender'] = 	filter_var($postdata['secgender'],FILTER_SANITIZE_STRING);
$postdata['secaddress'] =	filter_var($postdata['secaddress'],FILTER_SANITIZE_STRING);
$postdata['secnation'] = 	filter_var($postdata['secnation'],FILTER_SANITIZE_STRING);
$postdata['seccollege'] = 	filter_var($postdata['seccollege'],FILTER_SANITIZE_STRING);
$postdata['seccourse'] = 	filter_var($postdata['seccourse'],FILTER_SANITIZE_STRING);
$postdata['secsyear'] = 	filter_var($postdata['secsyear'],FILTER_SANITIZE_STRING);
$postdata['seccv'] = 		filter_var($postdata['seccv'],FILTER_SANITIZE_STRING);
$postdata['secaccom'] = 	filter_var($postdata['secaccom'],FILTER_SANITIZE_STRING);

if((strlen($postdata['secname'])<1) or !(ctype_alpha(str_replace(" ", "",$postdata['secname'])))){
$response .= "Empty/Invalid Second delegate's name"."<br />";
$check = 0;
}
if((!filter_var($postdata['secemail'],FILTER_VALIDATE_EMAIL)) or (strlen($postdata['secemail']) <1) ){
$response .= "Empty/Invalid Second delegate's email"."<br />";
$check = 0;
}

if((strlen($postdata['seccontact'])!==10) or !(ctype_digit($postdata['seccontact']))){
$response .= "Empty/Invalid Second delegate's contact no"."<br />";
$check = 0;
}
if((strlen($postdata['secgender'])<1) or !(ctype_alpha(str_replace(" ", "",$postdata['secgender'])))){
$response .= "Empty/Invalid Second delegate's gender"."<br />";
$check = 0;
}
if(strlen($postdata['secaddress'])<1){
$response .= "Empty Second delegate's address"."<br />";
$check = 0;
}
if((strlen($postdata['secnation'])<1) or !(ctype_alpha(str_replace(" ", "",$postdata['secnation'])))){
$response .= "Empty/Invalid Second delegate's nationality"."<br />";
$check = 0;
}
if(strlen($postdata['seccollege'])<1){
$response .= "Empty Second delegate's Name of Institute"."<br />";
$check = 0;
}
if(strlen($postdata['seccourse'])<1){
$response .= "Empty Second delegate's Course/Stream"."<br />";
$check = 0;
}
if(strlen($postdata['secsyear'])<1){
$response .= "Empty Second delegate's Year of Study"."<br />";
$check = 0;
}

if(strlen($postdata['seccv'])<1){
$response .= "Empty Second delegate's CV"."<br />";
$check = 0;
}
if(strlen($postdata['secaccom'])<1){
$response .= "Empty Second delegate's Acoomodation"."<br />";
$check = 0;
}
}
else
{
$postdata['secname'] = 		"";
$postdata['secemail'] = 	"";
$postdata['seccontact'] = 	"";
$postdata['secgender'] = 	"";
$postdata['secaddress'] =	"";
$postdata['secnation'] = 	"";
$postdata['seccollege'] = 	"";
$postdata['seccourse'] = 	"";
$postdata['secsyear'] = 	"";
$postdata['seccv'] = 		"";
}


$postdata['preference1'] = 		filter_var($postdata['preference1'],FILTER_SANITIZE_STRING);
$postdata['count11'] = 		filter_var($postdata['count11'],FILTER_SANITIZE_STRING);
$postdata['count12'] = 		filter_var($postdata['count12'],FILTER_SANITIZE_STRING);
$postdata['preference2'] = 		filter_var($postdata['preference2'],FILTER_SANITIZE_STRING);
$postdata['count21'] = 		filter_var($postdata['count21'],FILTER_SANITIZE_STRING);
$postdata['count22'] = 		filter_var($postdata['count22'],FILTER_SANITIZE_STRING);
$postdata['preference2'] = 		filter_var($postdata['preference2'],FILTER_SANITIZE_STRING);
$postdata['count31'] = 		filter_var($postdata['count31'],FILTER_SANITIZE_STRING);
$postdata['count32'] = 		filter_var($postdata['count32'],FILTER_SANITIZE_STRING);

$postdata['heard'] = 		filter_var($postdata['heard'],FILTER_SANITIZE_STRING);
if($postdata['hear'] == "ca")
{
	$postdata['ca'] = 		filter_var($postdata['ca'],FILTER_SANITIZE_STRING);
}
else
{
$postdata['ca'] = "";
}

$postdata['motivate'] = 		filter_var($postdata['motivate'],FILTER_SANITIZE_STRING);
if(strlen($postdata['motivate'])<1){
$response .= "Please write about your motivation"."<br />";
$check = 0;
}


if($check == 0)
{
	echo $response;
	exit;
}

require_once('connect.php');//connecting to the server

//insert details of the new ca
$query = "INSERT INTO delegate( name,email,contact,gender,address,nation,college,course,syear,cv,accom,
								secname,secemail,seccontact,secgender,secaddress,secnation,seccollege,seccourse,secsyear,seccv,secaccom,
								preference1,count11,count12,preference2,count21,count22,preference3,count31,count32,heard,ca,motivate) 
			VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?)";
				
$sth = $dbh->prepare($query);
$excute=$sth->execute(array($postdata['name'],$postdata['email'],$postdata['contact'],$postdata['gender'], $postdata['address'], $postdata['nation'],
							$postdata['college'],$postdata['course'], $postdata['syear'], $postdata['cv'],$postdata['accom'],
							$postdata['secname'],$postdata['secemail'],$postdata['seccontact'],$postdata['secgender'], $postdata['secaddress'],
							$postdata['secnation'],	$postdata['seccollege'],$postdata['seccourse'], $postdata['secsyear'], $postdata['seccv'],$postdata['secaccom'],
							$postdata['preference1'],$postdata['count11'],$postdata['count12'],$postdata['preference2'],$postdata['count21'],$postdata['count22'],
							$postdata['preference3'],$postdata['count31'],$postdata['count32'],$postdata['heard'],$postdata['ca'],$postdata['motivate']));
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
	$email_message .= "T: www.twitter.com/kiitmun\n";
	$email_message .= "L : in.linkedin.com/in/kiitmun\n";
	$email_message .= "G: plus.google.com/+kiitmun\n";
	$email_message .= "M : 0091-9674455274 | 0091-7504878807 | 0091-9692549623\n";
	
	$to = $postdata['email'] ;
    $subject = "Delegate registration for KIIT International MUN 2015";
    $headers = "From: KIIT International MUN <contact@kiitmun.org>\r\n";
    $headers .= "Reply-To: contact@kiitmun.org \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1" . "\r\n";

    mail($to, $subject, $email_message, $headers,"-f contact@kiitmun.org");
		
echo "OK";
?>