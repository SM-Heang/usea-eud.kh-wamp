<?php 
	$page = 'about_kh';
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

	$_SESSION['page']= $page;
	$_SESSION['right']= 'history-logo-kh';
	
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
						<a href="#">ប្រវត្តិសាកលវិទ្យាល័យ និងអត្ថន័យរបស់និមិត្តសញ្ញា</a>
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
					<div class="row title-text">
						ប្រវត្តិសាកលវិទ្យាល័យ និងអត្ថន័យរបស់និមិត្តសញ្ញា
					</div>
				</div>
				<div id="content-detail">
					<div class="content-history-detail">
						<?php  
							$stmt= $conn->prepare("SELECT * from usea_article WHERE article_id =25");
							$stmt->execute();
							$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
							// echo "<pre>";
							// print_r($result);
							// echo "</pre>";
						foreach ($result as $key => $value) { ?>
						<p>
							<?php echo $value['article_description_kh'];?>
						</p>
						<?php } ?>
					</div>
				</div>
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

