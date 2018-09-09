<?php
$mysqli = new mysqli("localhost", "root", "","kalaiphpforms") or die("Error");
if (mysqli_connect_errno()){
printf("connect failed: %\n",mysqli_connect_error());
exit();
}
?>