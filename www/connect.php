<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'kiitmun';

// Create connection
$dbh = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
// Check connection
if(!$dbh)
{
  header('LOCATION:error.html');
  exit;
}
 ?>