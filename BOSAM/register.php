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

<div id="page">
	<div class="login-card">
             <h3>Registration Form</h3><br>
		<form action="chkregistration.php" method="post">
		    <input type="text" name="fname" Placeholder="First Name***"/>
			<input type="text" name="mname" placeholder="Middle Name"/>
			<input type="text" name="lname" Placeholder="Last Name***"/>
			<input type="text" name="bdate" Placeholder="Birthday*** e.g 13/05/1990"/>
			<input type="radio" name="gender" value="Male"/>Male       
            <input type="radio" name="gender" value="Female"/>Female</td>
			<textarea name="address" cols="26" rows="5"  id="address" Placeholder="Contact Address***"></textarea>
            <select name="house" size="1"  id="house">
			   <option>Select House***</option>
			   <option value="Bado">Bado</option>
			   <option value="Ali Biyok">Ali Biyok</option>
			   <option value="KT Zamani">KT Zamani</option>
			   <option value="Stephen Awuku">Stephen Awuku</option>
            </select>
			<input type="text" name="contactno" Placeholder="Phone Number***"/>
			<input type="text" name="emailid" Placeholder="Email Address"/>
			<input type="text" name="set_year" Placeholder="Year of Graduation***"/>
			<input type="text" name="username" Placeholder="Username***"/>
			<input type="password" name="password" id="password" Placeholder="Password***"/>
			<input type="password" name="rpassword" id="rpassword" Placeholder="Confirm Password***"/>
			<input name="photo" type="file" id="photo" onclick=""  size="40"/>
			<input name="reset" type="reset" class="login login-submit" value="Reset" />
			<input name="Submit" type="submit" class="login login-submit"  value="Submit" />			 
		</form>		
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
