<?php 
	$page = 'about_kh';
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	$_SESSION['page']= $page;
	$_SESSION['right']= 'recognition-kh';
	
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
						<a href="partnership-local">ការទទួលស្គាល់</a>
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
                        ការទទួលស្គាល់
					</div>
				</div>	
				<?php 
					$sql ="SELECT * FROM usea_article WHERE categories_id= 7 AND keywords= 'Accreditaion'";
					$stmt= $conn->prepare($sql);
					$stmt->execute();
				?>
				 <hr class="mt-3 mb-5" style="color: var(--primary-color);">
				<div class="mt-2 d-flex">
					<img src="../../media/g1.jpg" width="180px" height="130px">
					<p class="txt_reco" style="margin-left: 10px; text-align: justify;">Goverment There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
				</div>
				<a href="../../media/goverment-recognition.rar" class="btn btn-sm px-3 py-1 event-btn" style="float: right; margin-top: 0px;" Download >ទាញយក</a>
				<br>
				<hr class="mt-5 mb-5" style="color: #002060;">

				<div class="mt-2 d-flex">
					<img src="../../media/m1.jpg" width="200px" height="150px">
					<p class="txt_reco" style="margin-left: 10px; text-align: justify;">MOEYS There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
				</div>
				<a href="../../media/moey-recognition.rar" class="btn btn-sm px-3 py-1 event-btn" style="float: right; margin-top: 0px;" Download >ទាញយក </a>
				<br>
				<hr class="mt-5 mb-5" style="color: #002060;">

				<div class="mt-2 d-flex">
					<img src="../../media/ACC.jpg" width="180px" height="130px">
					<p class="txt_reco" style="margin-left: 10px; text-align: justify;">ACC There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
				</div>
				<a href="../../media/ACC.jpg" class="btn btn-sm px-3 py-1 event-btn" style="float: right; margin-top: 0px;" Download >ទាញយក </a>
				<br>
				<hr class="mt-5 mb-5" style="color: #002060;">

				<div class="mt-2 d-flex">
					<img src="../../media/AUN.jpg" width="180px" height="130px">
					<p class="txt_reco" style="margin-left: 10px; text-align: justify;">AUN There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
				</div>
				<a href="../../media/AUN.jpg" class="btn btn-sm px-3 py-1 event-btn" style="float: right; margin-top: 0px;" Download >ទាញយក </a>
				<br>
				<hr class="mt-5 mb-5" style="color: #002060;">
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

