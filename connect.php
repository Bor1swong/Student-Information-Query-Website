<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);
if(!isset($_SESSION)){session_start();}
$C=include('config.php');
include('function.php');
$host=$C['DB_HOST'];
$db_user=$C['DB_USER'];  
$db_pass=$C['DB_PASSWORD'];  
$db_name=$C['DB_NAME'];  
header("Content-Type: text/html; charset=utf-8");  
$mysqli= new mysqli($host,$db_user,$db_pass,$db_name);  
if(mysqli_connect_errno($mysqli)) 
{ 
   echo "connect error: " . mysqli_connect_error(); 
}
$mysqli->set_charset("utf8");


?>