	<?php require_once('Include/Sessions.php'); ?>
<?php require_once('Include/functions.php') ?>
<?php ConfirmLogin(); 

?>
<?php
 date_default_timezone_set('Africa/Lagos');
$time = time();
if ( isset( $_POST['post-submit'])) {
	$title = mysqli_real_escape_string($con, $_POST['post-title']);
	$category = mysqli_real_escape_string($con, $_POST['post-category']);
	$content = mysqli_real_escape_string($con, $_POST['area1']);
	$image = $_FILES['post-image']['name'];
	$deadline = mysqli_real_escape_string($con, $_POST['post-deadline']);
	$type = mysqli_real_escape_string($con, $_POST['post-type']);
	$location = mysqli_real_escape_string($con, $_POST['post-location']);
	$role = mysqli_real_escape_string($con, $_POST['role']);
	$quali = mysqli_real_escape_string($con, $_POST['quali']);
	$author = $_SESSION['username'];
	$dateTime = strftime('%Y-%m-%d',$time);
	$title_length = strlen($title);
	$content_lenght = strlen($content);
	$imageDirectory = "Upload/Image/" . basename($_FILES['post-image']['name']);
	if ( empty($title)) {
		$_SESSION['errorMessage'] = "Title Is Emtpy";
		Redirect_To('NewPost.php');
	}else if ( $title_length > 200) {
		$_SESSION['errorMessage'] = "Title Is Too Long";
		Redirect_To('NewPost.php');
	}else if ( empty($content)) {
		$_SESSION['errorMessage'] = "Content Is Empty";
		Redirect_To('NewPost.php');
	}else if ( $content_lenght > 10000) {
		$_SESSION['errorMessage'] = "Content Is Too Long";
		Redirect_To('NewPost.php');
	}else {
		$query = "INSERT INTO cms_post (post_date_time, title, category, author, image, post,deadline,location,type,qualification,role) 
		VALUES ('$dateTime', '$title', '$category', '$author', '$image', '$content','$deadline','$location','$type','$quali','$role')";
		$exec = Query($query);
		if ($exec) {
			move_uploaded_file($_FILES['post-image']['tmp_name'], $imageDirectory);
			$_SESSION['successMessage'] = "Post Added Successfully";
		}else {
			$_SESSION['errorMessage'] = "Something Went Wrong Please Try Again";

		}

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>New Post</title>
	<script src="jquery-3.2.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/style.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="nicEdit.js"></script>
</head>
<body>
<div class="heading">
	<a href="index.php"><p>Visit Blog</p></a>
</div>
<div class="container-fluid">
	<div class="main">
		<div class="row">
			<div class="col-sm-2">
				<ul id="side-menu" class="nav nav-pills nav-stacked">
					<li class=""><a href="Dashboard.php">
					<span = class="glyphicon glyphicon-th"></span>
					 &nbsp;Dashboard</a></li>
					<li class="active"><a href="NewPost.php">
					<span = class="glyphicon glyphicon-list"></span>
					&nbsp;New Post</a></li>
					<li class=""><a href="Categories.php">
					<span = class="glyphicon glyphicon-tags"></span>
					&nbsp;Categories</a></li>
					<li><a href="Categories.php">
					<span = class="glyphicon glyphicon-user"></span>
					&nbsp;Manage Admin</a></li>
					<li><a href="Admin.php">
					<span = class="glyphicon glyphicon-comment"></span>
					&nbsp;Comments</a></li>
					<li><a href="Blog.php">
					<span = class="glyphicon glyphicon-equalizer"></span>
					&nbsp;Live Blog</a></li>
					<li><a href="Lagout.php">
					<span = class="glyphicon glyphicon-log-out"></span>
					&nbsp;Logout</a></li>
				</ul>
			</div>
			<div class="col-xs-10">
				<div class="page-title"><h1>Add New Post</h1></div>
					<?php echo Message(); ?>
					<?php echo SuccessMessage(); ?>
					<form action="NewPost.php" method="POST" enctype="multipart/form-data">
						<fieldset>
							<div class="form-group">
								<labal for="post-title">Title</labal>
								<input type="text" name="post-title" class="form-control" id="post-title">
							</div>
							<div class="form-group">
								<labal for="post-category">Job Field</labal>
								<select class="form-control" name="post-category" id="post-category">
									<?php
										$sql = "SELECT * FROM cms_category ORDER BY cat_name ASC";
										$exec = Query($sql);
										while($row = mysqli_fetch_assoc($exec)){
											echo "<option>$row[cat_name]</option>";
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<labal for="post-image">Feature Image</labal>
								<input type="File" name="post-image" class="form-control">
							</div>
							<div style="background:color:pink" class="form-group">
							
                            <script type="text/javascript">
									bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
							</script>
								<labal for="post-content">Content</labal>
								<textarea rows="10" class="form-control" name="area1" id="area1">
									
								</textarea>
							</div>
							<div class="form-group">
								<labal for="post-image">Deadline</labal>
								<input type="date" name="post-deadline" class="form-control">
							</div>
							<div class="form-group">
								<labal for="post-category">Job Type</labal>
								<select class="form-control" name="post-type" id="post-type">
									<option value="Full-time">Full-time</option>
									<option value="Contract">Contract</option>
								</select>
							</div>
							<div class="form-group">
								<labal for="post-category">Location</labal>
								<select class="form-control" name="post-location" id="post-location">
									<option value="Abuja">Abuja</option>
									<option value="Abia">Abia</option>
									<option value="Adamawa">Adamawa</option>
									<option value="Akwa Ibom">Akwa Ibom</option>
									<option value="Anambra">Anambra</option>
									<option value="Bauchi">Bauchi</option>
									<option value="Bayelsa">Bayelsa</option>
									<option value="Benue">Benue</option>
									<option value="Borno">Borno</option>
									<option value="Crossriver">Crossriver</option>
									<option value="Delta">Delta</option>
									<option value="Ebonyi">Ebonyi</option>
									<option value="Enugu">Enugu</option>
									<option value="Gombe">Gombe</option>
									<option value="Kaduna">Kaduna</option>
									
								</select>
							</div>
							<div class="form-group">
								<labal for="post-title">Role</labal>
								<input type="text" name="role" class="form-control" id="role">
							</div>
							<div class="form-group">
								<labal for="post-title">Qualification</labal> <br>
								<input type="checkbox" name="quali" id="quali" value="MBA/MSc/MA"> MBA/MSc/MA
								<input type="checkbox" name="quali" id="quali" value="BA/Bsc/HND"> BA/Bsc/HND	
								<input type="checkbox" name="quali" id="quali" value="SSCE"> SSCE
							</div>
							<div class="form-group">
								<button name="post-submit" class="btn btn-primary form-control">Publish</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row" id="footer">
		<div class="col-sm-12">
		<hr>
			<p>All Rights Reserved 2019 | Theme By :  <a href="https://www.twitter.com/techhajiya">Techhajiya</p>
		<hr>
		</div>
	</div>
</div>
<script type="text/javascript" src="jquery.js"></script>
</body>
</html>