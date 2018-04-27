<?php 
include ("config.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<title>BOSAM </title>
	
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/menu.css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<link rel="stylesheet" type="text/css" href="css/frsc.css"/>
	<link rel="stylesheet" type="text/css" href="css/login.css"/>
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


<!-- Text input-->
<div id="page">
    <div class="login-card">
    <h1>Login</h1><br>
		<form action="checkLogin.php" method="post">
			<input type="text" name="email" placeholder="Email">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" name="login" class="login login-submit" value="Login">
		</form>
		<div class="login-help">Not a user yet?  <a href="registration.php">Register</a>
		</div>
	</div>
</div>

 <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; BOSAM 2018</p>
		<p class="m-0 text-center text-white">Designed by &nbsp <a href="https://twitter.com/techhajiya"> Thomas Lois</a></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
