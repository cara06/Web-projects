<?php error_reporting(0);?>
<?php require_once('Include/Sessions.php'); ?>
<?php require_once('Include/functions.php') ?>
<?php
/*
 * Format The Date
 */
 function formatDate($date){
	return date('F j, Y',strtotime($date));
 }
?>
<?php require_once('Include/header.php') ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 style="" class="text-uppercase text-center">
								We Ensure You Never 
								Miss Out On Job Opportunities
							</h1>
							<p class="pt-10 pb-10 text-center">
								Get real-time job alerts straight to your mailbox!
							</p>
							<div class="single-footer-widget">
								<div class="" id="mc_embed_signup">
									 <form target="_blank" action="https://tinyletter.com/jobalertsNG" method="get">
									  <div class="input-group">
									    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
									    <div class="input-group-btn">
									      <button class="btn btn-default" type="submit">
									        Subscribe
									      </button>    
									    </div>
									    	<div class="info"></div>  
									  </div>
									</form> 
								</div>
							</div>
							<!-- <a href="#" class="primary-btn text-uppercase">Get Started</a> -->
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->
			


<!-- Start post-content Area -->
			<section style="margin-top:50px;" class="post-content-area">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-8 posts-list">
						<h4 style="background-color:orange; text-align:center; font-size:24px;padding:5px; width:70%; margin-left:70px;margin-bottom:20px;" class="category-title">Latest Posts</h4>
		<?php
					$page = 1;
					$query = "";
					if ( isset($_GET['search'])) {
						if ( empty($_GET['search'])) {
							Redirect_To('index.php');
						}else {
							$search = $_GET['search'];
							$query = "SELECT * FROM cms_post WHERE post_date_time LIKE '%$search%' OR title LIKE '%$search%' OR category LIKE '$search%' OR post LIKE '$search%' LIMIT 10";
						}
					}else if ( isset($_GET['category'])) {
						$query = "SELECT * FROM cms_post WHERE category = '$_GET[category]'";
					}else if ( isset($_GET['page'])){
						$page = $_GET['page'];
						$showPost = ($page * 5) - 5;
						if ($page <= 0) {
							$showPost = 0;
						}
						$query = "SELECT * FROM cms_post ORDER BY post_date_time DESC LIMIT $showPost,10	";

					}else{

						$query = "SELECT * FROM cms_post ORDER BY post_date_time DESC LIMIT 0,10	";						
					}

					$exec = Query($query) or die(mysqli_error($con));
					if( $exec ) {
						if (mysqli_num_rows($exec) > 0) {
							while ( $post = mysqli_fetch_assoc($exec) ) {
								$post_id = $post['post_id'];
								$post_date = $post['post_date_time'];
								$post_title = $post['title'];
								$post_category = $post['category'];
								$post_author = $post['author'];
								$post_image = $post['image'];
								$post_content = substr($post['post'], 0,250) . '...'; 
								$role = $post['role'];
								$post_location = $post['location'];

							?>
			
			
							<div class="single-post row" style="background-color:#fff; margin-top:2px;">
								<div class="col-lg-3  col-md-3 meta-details">
									
								</div>
								<div class="col-lg-9 col-md-9 ">
								
									<a class="posts-title" href="Blog-single.php?id=<?php echo $post_id;?>"><h3><?php echo htmlentities($post_title); ?></h3></a>
									<strong><a class="posts-title" href="Blog-single.php?id=<?php echo $post_id;?>"><p><span class="lnr lnr-chevron-right"></span><i class="lnr lnr-chevron-right"></i><?php echo htmlentities($role); ?></p></a></strong>
									<p style="margin-top:-30px;" class="excert">
										<br> <span class="lnr lnr-map-marker"></span><a href="index.php?location=<?php echo $post_location ?>"><?php echo htmlentities($post_location); ?></a>
										&nbsp &nbsp <span class="lnr lnr-calendar-full"></span><a href="#"> <?php echo formatDate(htmlentities($post_date)); ?></a>
										&nbsp &nbsp <span class="lnr lnr-user"></span> <a href="#"><?php echo htmlentities($post_author); ?></a>
									</p>
									
								</div>
					
							</div>
										<?php
							}

						}else {
							echo "<span class='lead'>No result<span>";
						}
					}else {

					}

				?>
				<?php  if(!isset($_GET['category'])) { ?>
				
				
				
				<nav  style="margin-top:-60px;" class="blog-pagination justify-content-center d-flex">
				<ul class="pagination ">
				<?php
					if ($page > 1) {
						?>
							<li>
								<a href="index.php?page=<?php echo $page - 1; ?>" class="page-link">
									<span aria-hidden="true">
		                                 <span class="lnr lnr-chevron-left"></span>
		                             </span>
								</a>
							</li>
						<?php
					}
					$sql = "SELECT COUNT(*) FROM cms_post";
					$exec = Query($sql);
					$rowCount = mysqli_fetch_array($exec);
					$totalRow = array_shift($rowCount);
					$postPerPage = ceil($totalRow / 5);

					for ($count = 1; $count <= $postPerPage; $count++){
						if ($page == $count) {
							?>
							<li class="page-item">
							<a href="index.php?page=<?php echo $count ?>" class="page-link"><?php echo $count ?></a></li>
							<?php
						}else {
							?>
							<li class="page-item">
								<a href="index.php?page=<?php echo $count ?>" class="page-link"><?php echo $count ?></a></li>
							<?php
						}
					}
					if($page < $postPerPage) {
						?>
						<li class="page-item">
							<a href="index.php?page=<?php echo $page + 1; ?>" class="page-link">
								<span aria-hidden="true">
		                            <span class="lnr lnr-chevron-right"></span> 
		                        </span>
							</a>
						</li>
						
						<?php
					}
				?>
				<?php
					}
				?>
				</ul>
						 </nav>	

								</div>
							
							
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								<div class="single-sidebar-widget search-widget">
									<form class="search-form" action="index.php" role="search" method="GET" autocomplete="off" >
			                            <input placeholder="Search Jobs" name="search" id="searchbox" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
			                            <button type="submit"><i class="fa fa-search"></i></button>
			                        </form>
								</div>
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Popular Jobs</h4>
									<div class="popular-post-list">
									<?php
							$sql = "SELECT * FROM cms_post ORDER BY post_date_time DESC LIMIT 10";
							$exec = Query($sql);
							while ($recentPost = mysqli_fetch_assoc($exec)) {
								$postID = $recentPost['post_id'];
								?>
										<div class="single-post-list d-flex flex-row align-items-center">
											
											<div class="details">
												<a href="blog-single.php?id=<?php echo $postID; ?>"><h6><?php echo $recentPost['title'] ?></h6></a>
												<p><?php echo formatDate($recentPost['post_date_time']) ?></p>
											</div>
										</div>
									<?php
										}
									?>										
									</div>
								</div>
								<div style="background-color:purple;padding:20px; text-align:center" class="single-sidebar-widget ads-widget">
									<h3 style="color:#fff">Give your CV a <br><strong> Professional Look</strong></h3><br>
									<button class="primary-btn wh" href="contact.php">Get Started</button>
								</div>
								<div class="single-sidebar-widget post-category-widget">
									<h4 class="category-title">Job Categories</h4>
									<ul class="cat-list">
										<?php 
							$sql = "SELECT cat_name FROM cms_category ORDER BY cat_name ASC LIMIT 8";
							$exec = Query($sql);
							if (mysqli_num_rows($exec) > 0) {
								while ($category = mysqli_fetch_assoc($exec)) {
									?>
										<li>
											<a href="index.php?category=<?php echo $category['cat_name'] ?>" class="d-flex justify-content-between"><?php echo $category['cat_name'] ?>
											</a>
											
										</li>
										<?php
								}
							}	
						?>													
									
									</ul>
									<a href="field.php" style="border:2px solid orange;border-radius:5px;">More Job Categories</a>
								</div>						
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
			

			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Want To Advertise With Us?</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="contact.php">Contact Us</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta-two Area -->
						
			<?php require_once('Include/footer.php') ?>