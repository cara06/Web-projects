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
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Job Category				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="field.php"> Job by field</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
	

			<!-- Start info Area -->
			<section class="info-area pb-120">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 no-padding info-area-left">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						
						
							<div class="widget-wrap">
								
								<div class="single-sidebar-widget post-category-widget">
									<h4 class="category-title">Jobs by Field</h4>
									<ul class="cat-list">
										<?php 
							$sql = "SELECT cat_name FROM cms_category ORDER BY cat_name ASC";
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
								
								</div>						
							</div>
						
					</div>
				</div>	
			</section>
			<!-- End info Area -->	
				

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