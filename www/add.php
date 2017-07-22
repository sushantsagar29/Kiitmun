<?php
#receiving ajax request
#only for validation of usrname and password
if(count($_POST)<3){
	echo "don't fuck around with oc portal";
	exit();
}
foreach($_POST as $key=>$value)
{
if (($value=="")or(NULL===$value))
{
echo "Please fill all the fields";
exit;
}//end of if
else
{
$data[$key]=$value;
}//end of else
}//end of foreach

$st="";

require_once('connect.php');//connecting to the server

$query = "insert into ocnews(news,date,author) values(?,?,?)";	
$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$excute=$sth->execute(array($data['news'],$data['date'],$data['author']));
if(!$excute ){
	echo "Error in connection"."\n";
	exit;
}
	$st.="OK";
	echo $st;
?>