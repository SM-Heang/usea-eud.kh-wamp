<?php 
	$page = 'about_kh';
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	$_SESSION['page']= $page;
	$_SESSION['right'] = 'p-message-kh';
	
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
						<a href="#">សាររបស់សាកលវិទ្យាធិការ</a>
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
					<div class="row title-text">
					សាររបស់សាកលវិទ្យាធិការ
					</div>
				</div>
				<div id="content-detail">
					<div class="content-president-detail mt-3">
					<?php  
							$stmt= $conn->prepare("SELECT * from usea_article WHERE article_id =19");
							$stmt->execute();
							$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $key => $value) { ?>
						<!-- <img src="../media/image/president/Dr.MeanSothy.jpg" alt="president photo" width="240px" height="300px"> -->
						<p><?php echo $value['article_description_kh'];?></p>
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

