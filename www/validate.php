<?php
session_start();
#receiving ajax request
#only for validation of usrname and password
if(count($_POST)<2){
	echo "don't fuck around with oc portal";
	exit();
}
foreach($_POST as $key=>$value)
{
if (($value=="")or(NULL===$value))
{
header('LOCATION:http://'.$_server['HTTP_REFERER']);
exit;
}//end of if
else
{
$postdata[$key]=$value;
}//end of else
}//end of foreach

$st="";

	if($postdata['uname'] == 'kiitmun'){
		if($postdata['pass'] == 'sexybitch'){
			$_SESSION['email'] = $postdata['uname'];
			echo '<meta http-equiv="refresh" content="0;index.php">';
			$st.="OK";
			exit;
		}
		else{
			$st.="The credentials entered are wrong. Please try again";
		}
	}
	else{
		$st.="The credentials entered are wrong. Please try again";
	}	
	echo $st;
?>