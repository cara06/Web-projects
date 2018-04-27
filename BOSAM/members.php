<?php
session_start();
include("config.php");
$selectQuery = "select *from mstr_profile";
$resultSet = mysql_query($selectQuery) or die(mysql_error());
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BOSAM</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/frsc.css"/>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/menu.css" />
	<script type="text/javascript" src="js/menu.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/table.css"/>
	<link rel="stylesheet" type="text/css" href="css/table2.css" />
	<script type="text/javascript" src="js/table.js"></script>
	<script type="text/javascript" src="js/table2.js"></script>
  </head>
    
	<!-- Navigation -->
<header>
  <div class="header">
                <img style="margin:55px 0px 0px 100px;float:left;" width="160" height="140"src="images/baptistlogo.jpg" alt="School logo"/>
                <img style="margin:55px 100px 0px 20px;float:right;" src="images/bosam.jpg" width="160" height="140" alt="Bosam Logo"/>
                <h3 class="headtext"> &nbsp;<b>Baptist Old Students Association Marke</b> </h3>
                <h5 style="color:#A52A2A;text-align:right;margin:0 0px 0px 0px; font-size:22px; font-face:Cataneo BT"><i>...Unity and Assistance</i></h5>
             </div>
  <nav>
    <a href="index.html" style="text-decoration:none" >Home</a>
    <a href="about.html" style="text-decoration:none" >About Bosam</a>
	<a href="membership.html" style="text-decoration:none" class="current">Membership</a>
    <a href="dues.html" style="text-decoration:none" >Dues</a>
   <a href="gallery2.html" style="text-decoration:none" >Gallery</a>
    <a href="contact.html" style="text-decoration:none">Contact</a>
	 <a href="news.html" style="text-decoration:none">News</a>
  </nav>
</header>


    <main class="wrapper">
	  <section>
<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th>#</th>
      <th class="col-md-5 col-xs-5">Name / Surname</th>
      <th class="col-md-4 col-xs-4">Job</th>
      <th class="col-md-3 col-xs-3">City</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
  <?php
	$i = 1;
	while($record=mysql_fetch_array($resultSet))
	{
	?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td>&nbsp;&nbsp;<?php echo $record["first_name"];?></td>
      <td>&nbsp;<?php echo $record["last_name"] ;?></td>
      <td>&nbsp;<?php echo $record["contact_no"] ;?></td>
    </tr>
    <?php
	}//while closed	
	?>
  </tbody>
</table>
</section>
</main>