<?php
	$page = 'about';
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	$_SESSION['page']= $page;
	$_SESSION['right']= 'location';
	
    include_once '../include/header.php';
    include_once '../../connection/db.connection.php';
?>
<!-- Start Web Location -->
<div class="container">
		<div class="row">
			<div class="col-12 web-location">
				<ul>
					<li><a href="index.php">
						<i class="fa-solid fa-house"></i>
						<i class="fa-solid fa-caret-right"></i>
					</a>
					</li>
					<li>
						<a href="#">Location</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Web Location -->
  <!-- Main Content-->
	<div class="container">
		<div class="row">
			<!-- Start Content-->
			<div class="col-xxl-9">
				<div class="container title-bg">
					<div class="row title-txt">
                        Location
					</div>
				</div>
                <iframe style="margin-top:10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.9947965932015!2d103.86173831528116!3d13.350599510059675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311017793e991fc3%3A0x106790c63625b714!2sUniversity%20of%20South-East%20Asia%20(USEA)!5e0!3m2!1sen!2skh!4v1669794644464!5m2!1sen!2skh" width="965" height="590" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				
	</div>
			<!-- Start Right Content-->
            <?php
				include_once '../include/right-content.php';
			?>
		</div>
	</div>
	<!-- End Main Content-->
<?php
    include_once '../include/buttom-content.php';
    include_once '../include/footer.php';
?>