<?php 
	include_once 'include/header.php';
	include_once '../connection/db.connection.php';     
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
						<a href="partnership-local">Recognition</a>
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
			<div class="col-xxl-12">
				<div class="container" style="background-color:#002060;">
					<div class="row" style="color: white; font-size: 16pt; padding: 5pt;">
						Recognition
					</div>
				</div>
				<div id="content-detail">
					<div class="content-president-detail">
					<?php  
							$stmt= $conn->prepare("SELECT * from usea_article WHERE categories_id = 7 AND keywords = 'Accreditaion';");
							$stmt->execute();
							$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
							echo "<pre>";
							var_dump($result);
							echo "</pre>";
						 ?>
						
					</div>
				</div>
			</div>
			<!-- Start Right Content-->
		</div>
	</div>
	<!-- End Main Content-->
<?php 
	include_once 'include/buttom-content.php';
	include_once 'include/footer.php';
?>

