	<?php error_reporting(0);?>
<?php require_once('Include/Sessions.php'); ?>
<?php require_once('Include/functions.php') ?>
<?php 
	if ( isset($_GET['id']) ) {
		$post_id = $_GET['id'];
		$post_title = "";
		$sql = "SELECT * FROM cms_post WHERE post_id = '$post_id'";
		$exec = Query($sql);
		if ($title = mysqli_fetch_assoc($exec)) {
			$post_title = $title['title'];
		}
	}
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
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Job Details				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span> <a href="blog-single.php"> Job Details</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
                <?php echo SuccessMessage(); ?>
				<?php echo Message(); ?>
				<?php
					if( isset($_GET['id'])) {
						$query = "SELECT * FROM cms_post WHERE post_id = '$_GET[id]'";
						$exec = Query($query);
						if (mysqli_num_rows($exec) > 0) {
							while ($post = mysqli_fetch_assoc($exec) ) {
								$post_id = $post['post_id'];
								$post_date = $post['post_date_time'];
								$post_title = $post['title'];
								$post_category = $post['category'];
								$post_author = $post['author'];
								$post_image = $post['image'];
								$post_content = $post['post']; 
								$role = $post['role'];
								$post_location = $post['location'];
								$quali = $post['qualification'];
								$deadline = $post['deadline'];
							?>
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
																		
								</div>
								<div class="col-lg-3  col-md-3 meta-details">
									
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#"><?php echo $post_author; ?></a> <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo formatDate(htmlentities($post_date)); ?></a> <span class="lnr lnr-calendar-full"></span></p>
										<ul class="social-links col-lg-12 col-md-12 col-6">
										</ul>																				
									</div>
								</div>
								<div class="col-lg-9 col-md-9">
									<h3 class="mt-20 mb-20"><?php echo htmlentities($post_title); ?></h3>
									<p class="excert">
										<p>Job Category: <a href="index.php?category=<?php echo $post_category ?>"><?php echo htmlentities($post_category);?></a></p>
										<p>Qualification: <a href="index.php?qualification=<?php echo $quali ?>"><?php echo htmlentities($quali);?></a></p>
										<p>Location: <a href="index.php?location=<?php echo $post_location ?>"><?php echo htmlentities($post_location);?></a></p>
										<strong><p>Job Role: <a href="#"><?php echo htmlentities($role);?></a></p></strong>
										<p style="text-align:justify;"><?php echo nl2br($post_content); ?></p>
									</p>
								<a href="https://www.facebook.com/"><button style="border: 2px dotted blue; padding:5px 10px; color:blue">Share</button> </a>
								<button style="border: 2px dotted red; padding:5px 10px; color:red" >Share</button> 
								<a href="https://www.whatsapp.com/"><button style="border: 2px dotted green; padding:5px 10px; color:green" >Share</button>
								<a href="https://www.twitter.com/"><button style="border: 2px dotted blue; padding:5px 10px; color:blue">Tweet</button> 
								</div>
							</div>
							<div class="navigation-area">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="thumb">
											<a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
										</div>
										<div class="arrow">
											<a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
										</div>
										<div class="detials">
											<p>Prev Post</p>
											<a href="#"><h4>Space The Final Frontier</h4></a>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
										<div class="detials">
											<p>Next Post</p>
											<a href="#"><h4>Telescopes 101</h4></a>
										</div>
										<div class="arrow">
											<a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
										</div>
										<div class="thumb">
											<a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
										</div>										
									</div>									
								</div>
							</div>
								<?php
							}
						}
					}else {
						Redirect_To('index.php');
					}
				?>
				
				<!----  COMMENT SECTION--->
								<?php 
								$sql = "SELECT COUNT(*) FROM comment";
					$exec = Query($sql);
					$rowCount = mysqli_fetch_array($exec);
					$totalRow = array_shift($rowCount);	
					?>
							<div class="comments-area">
								<h4><?php echo $totalRow ;?> Comments</h4>
								<div class="comment-list">
										<?php
					$sql = "SELECT * FROM comment WHERE post_id = '$_GET[id]'";
					$exec = Query($sql);
					if (mysqli_num_rows($exec) > 0) {
						while ($comments = mysqli_fetch_assoc($exec)) {
							$c_email = $comments['email'];
							$c_dateTime = $comments['date_time'];
							$c_comment = $comments['comment'];
							?>
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div style="" class="thumb">
                                                <img src="Assets/Images/user-default.png" style="border-radius:50%" alt="" height="70px" width="80px">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#"><?php echo $c_email; ?></a></h5>
                                                <p class="date"><?php echo $c_dateTime; ?></p>
                                                <p class="comment">
                                                    <?php echo $c_comment; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reply-btn">
                                               <a href="#comment" class="btn-reply text-uppercase">reply</a> 
                                        </div>
                                    </div>
											<?php
						}
					}else {
							echo "No Comments Yet";
						}
				?>

									</div>	                                       				
							</div>
						
							
							<div id="comment" class="comment-form">
								<h4>Leave a Comment</h4>
								<form method="POST" action="comment.php?>'">
									<div class="form-group form-inline">
									  <div class="form-group col-lg-6 col-md-12 name">
									    <input type="text" class="form-control" name="email" id="name" placeholder="Enter Your name..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Name'">
									  </div>										
									</div>
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="comment" placeholder="Your comment here..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your comment here'" required=""></textarea>
									</div>
									<div class="form-group">
									<input type="submit" name="submit" class="primary-btn text-uppercase" value="Post Comment">
									</div>
									<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
								</form>
							</div>
							
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
							$sql = "SELECT * FROM cms_post ORDER BY post_date_time DESC LIMIT 5";
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
								<div class="single-sidebar-widget ads-widget">
									<a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
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
									<a href="#" style="border:2px solid orange;border-radius:5px;">More Job Categories</a>
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