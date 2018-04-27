<?php
session_start();
include("config.php");
$emailid  = $_POST['emailid'];
$password  = $_POST['password'];


$selectLoginQuery = "select * from mstr_login where emailid = '".$emailid."' and password = '".$password."' ";
 
$rs = mysql_query($selectLoginQuery) or die(mysql_error());
$c=mysql_num_rows($rs);
$row = mysql_fetch_array($rs);
if($c==1)
{
	$_SESSION['emailid'] = $emailid;
	$_SESSION['type'] = $row[type];	
	header("location:login.php?msg=Logged in Successfully!");
}
else
{
	header("location:login.php?msg=Sorry!...Invalid User");
}
?>