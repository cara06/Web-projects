<?php
session_start();
include("config.php");
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$gender = $_POST['gender'];
$bdate = $_POST['bdate'];
$address =$_POST['address'];
$house = $_POST['house'];
$contactno = $_POST['contactno'];
$username = $_POST['username'];
$set_year = $_POST['set_year'];
$emailid= $_POST['emailid'];
$profilephoto =  "Upload/".$_FILES['photo']['name'];

$password=$_POST['password'];
$rpassword=$_POST['rpassword'];

if($password == $rpassword)
{
 if(move_uploaded_file($_FILES['photo']['tmp_name'],$profilephoto))
   {
   
   										  
	$insertloginQuery = "insert into mstr_login(username,password,type) 
	                                   values ('".$username."','".$password."','user')";
   
	$insertQuery = "insert into mstr_profile(first_name,middle_name,last_name,gender,Dob,address,house,
	                                       contact_no,emailid,profile_photo,username,set_year)
											values('".$firstname."', '".$middlename."','".$lastname."',
									               '".$gender."','".$bdate."','".$address."','".$house."',
											      '".$contactno."','".$emailid."','".$profilephoto."',
									               '".$username."','".$set_year."' )";
	
	$sql1 = "select username from mstr_login where username = '$username'";
    $result1 = mysql_query($sql1) or die ("Couldn't execute query.");										  
    
	$num1=mysql_num_rows($result1);
	
	if($num1 == 1)
	{
		header("location:registration.php?msg=Sorry, User already exists !");
	}
	else
	{
		
		if((mysql_query($insertloginQuery)) && (mysql_query($insertQuery)))
		  {
			$_SESSION['username']=$username;
			header("location:login.php?msg=Registered Successfully");	  
		   }
		else
		 {
			header("location:login.php?msg=Not registered");
		  }
       }
	 }  
  else
  {
    echo "Error in uploading photo";
   }
 }  
else
 {
   echo "Error:Password mismatch";
  }
?>