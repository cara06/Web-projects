<?php require_once('Include/Sessions.php') ?>
<?php require_once('Include/functions.php') ?>
<?php ConfirmLogin(); 
/*
 * Format The Date
 */
 function formatDate($date){
	return date('d-m-Y',strtotime($date));
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<script src="jquery-3.2.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/style.css">
	<link rel="stylesheet" href="css/main.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<!-- Site Title -->
		<title>JobAlertsNG | Dashboard</title>
</head>
<body>
<div style="height:60px; background-color:#04091e;margin-bottom:10px;" class="heading">
	<a style="color:#fff; padding:10px" href="index.php"><h5 style="color:#fff;">Visit Blog</h5></a>
	<a style="color:#fff; margin-bottom:60px;" href="index.php"><h3 style="color:#fff;">Visit Blog</h3></a>
</div>
<div class="container-fluid">
	<div class="main" id="dashboard">
		<div class="row">
			<div class="col-sm-2">
				<ul id="side-menu" class="nav nav-pills nav-stacked">
					<li class="active"><a href="Dashboard.php">
					<span = class="glyphicon glyphicon-th"></span>
					 &nbsp;Dashboard</a></li>
					<li><a href="NewPost.php">
					<span = class="glyphicon glyphicon-list"></span>
					&nbsp;New Post</a></li>
					<li><a href="Categories.php">
					<span = class="glyphicon glyphicon-tags"></span>
					&nbsp;Categories</a></li>
					<li><a href="Admin.php">
					<span = class="glyphicon glyphicon-user"></span>
					&nbsp;Manage Admin</a></li>
					<li><a href="Comments.php">
					<span = class="glyphicon glyphicon-comment"></span>
					&nbsp;Comments</a></li>
					<li><a href="index.php">
					<span = class="glyphicon glyphicon-equalizer"></span>
					&nbsp;Live Blog</a></li>
					<li><a href="Lagout.php">
					<span = class="glyphicon glyphicon-log-out"></span>
					&nbsp;Logout</a></li>
				</ul>
			</div>
			<div class="col-xs-10">
				<div>
					<h1>Dashboard</h1>
					<?php echo SuccessMessage(); ?>
					<?php echo Message(); ?>
					<div class="table-responsive">
						
							<?php
							$sql = "SELECT * FROM cms_post ORDER BY post_date_time DESC LIMIT 20";
							$exec = Query($sql);
							$postNo = 1;
							if(mysqli_num_rows($exec) < 1	) {
								?>
									<p class="lead">You Have 0 Post For The Moment</p>
									<a href="NewPost.php"><button class="btn btn-info">Add Post</button></a>
								<?php
							}else{ ?>
							<table class="table table-hover">
							<tr>
								<th>S/N</th>
								<th>Post Date</th>
								<th>Title</th>
								<th>Author</th>
								<th>Category</th>
								<th>Actions</th>
								<th>Details</th>
							</tr>
							<?php
								while ($post = mysqli_fetch_assoc($exec)) {
									$post_id = $post['post_id'];
									$post_date = formatDate($post['post_date_time']);
									$post_title = $post['title'];
									$category = $post['category'];
									$author = "Admin";
									$image = $post['image'];
									?>
									<tr>
									<td><?php echo $postNo; ?></td>
									<td><?php echo $post_date; ?></td>
									<td><?php 
									if(strlen($post_title) > 25 ) {
										echo substr($post_title,0,25) . '...';
									}else {
										echo $post_title;
									}
					
									?></td>
									<td><?php echo $author; ?></td>
									<td><?php echo $category; ?></td>
									<td><?php echo "<a href='editpost.php?post_id=$post_id'>Edit</a> | <a href='deletepost.php?delete_post_id=$post_id'>Delete</a>"; ?></td>
									<td><a href="blog-single.php?id=<?php echo $post_id; ?>"><button class="btn btn-primary">Live Preview</button></a></td>
									</tr>
									<?php
									$postNo++;
								}
							}
							?>
						</table>
						
						
						
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="row navbar-inverse" id="footer">
	</div>
</div>
<!-- start footer Area -->		
			<footer class="footer-area ">
				<div class="container">
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <a href="https://colorlib.com" target="_blank" style="color:#04091e">Colorlib</a> <a href="https://themewagon.com" target="_blank" style="color:#04091e">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->

<script type="text/javascript" src="jquery.js"></script>
</body>
</html>