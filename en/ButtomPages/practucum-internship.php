<?php
    $page = 'practucum_internship';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['page'] = $page;
    $_SESSION['right'] = 'practucum-internship';

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
						<a href="#">Practucum/Internship</a>
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
				<div class="container" style="background-color:#002060;">
					<div class="row" style="color: white; font-size: 16pt; padding: 5pt;">
					Practucum / Internship
					</div>
				</div>
				
			</div>
			<!-- Start Right Content-->
			<?php
				include_once '../include/right-content-buttom.php';
			?>
		</div>
	</div>
	<!-- End Main Content-->



<?php
    include_once '../include/right-content-buttom.php';
    include_once '../include/footer.php';
?>




