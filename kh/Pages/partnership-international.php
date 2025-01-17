<?php
		$page = 'partnership_local_kh';

	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	$_SESSION['page']= $page;
	$_SESSION['right_partnership']= 'partnership-international-kh';
	
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
						<a href="partnership-local">ដៃគូរសហការ</a>
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
					<div class="row title-text" style="color: white; font-size: 16pt; padding: 5pt;">
						ដៃគូរសហការ
					</div>
				</div>
				<div id="content-detail">
					<div class="content-president-detail">
					<?php  
							$sql = "SELECT * from usea_partnership WHERE partnership_type = 'international' ORDER BY signed_date DESC limit 10";
							if (isset($_GET['page'])) {
				    			if ($_GET['page']>1) {
				    		 	$sql .= " OFFSET ".  ($_GET['page']-1)*10;
				    			}
				   			 }
							$stmt= $conn->prepare($sql);
							$stmt->execute();
							$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
							// echo "<pre>";
							// print_r($result);
							// echo "</pre>";
						foreach ($result as $key => $value) { ?>
						<div class="col-xxl-12 mt-3" id="partnership-int">
							<img src="../../media/Partnership/<?php echo $value['partnership_logo']; ?>" width="125px" height="100px" >
								<p class="partnership-title"><?php echo $value['partnership_title_en'];?></p>
								<p class="partnership-date"><?php echo "<strong>MOU Signed</strong> : " .date('d M Y', strtotime($value['signed_date']));?></p>
								<div style="text-align: right;">
									<a href="partnership-international-detail.php?id=<?php echo $value['partnership_id'] ?>" class="btn btn-sm px-3 py-1 event-btn">អានបន្ថែម</a>
								</div>
						
						</div>
						
						<?php } ?>
						
					</div>
				</div>
			</div>
			<!-- Start Right Content-->
			<?php 
				include_once "../include/right-conent-partnership.php";
			 ?>
		</div>
		<!--Start Pagination -->
				<?php 
				 	$sql = "SELECT count(*) AS CountRecords FROM usea_partnership WHERE partnership_type = 'international' ";
				    $stmt = $conn->prepare($sql);
				    $stmt ->execute();
				    $temp = $stmt->fetch(PDO::FETCH_ASSOC);
				    $maxpage =1;
				    if ($temp) {
				    	$maxpage = ceil($temp['CountRecords']/10);
				    }
 				?>
                <ul class="pagination d-flex justify-content-center mt-3">
                    <li class="page-item">
                    <a class="page-link bg_btn btn m-0"><< ត្រឡប់</a>
                    </li>
                    <?php 
                    	for ($i=1; $i <=$maxpage ; $i++) { ?>
                    		
                    		<li class="page-item p-0"><a class="page-link 
                    		<?php 
                    			if (isset($_GET['page'])) {
                    				if ($i==$_GET['page']) {
                    					echo 'active';
                    				}
                    				}else{
                    					if ($i==1) {
                    						echo 'active';
                    					}
                    			}
                    		 ?>" href="partnership-international.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    	<?php } ?>

                    <a class="page-link bg_btn btn m-0" href="#">បន្ទាប់ >></a>
                    </li>
                </ul>
                <!--End Logic Pagination -->
	</div>
	<!-- End Main Content-->
<?php 
	include_once '../include/buttom-content.php';
	include_once '../include/footer.php';
?>

