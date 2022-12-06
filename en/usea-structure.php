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
						<a href="#">University Structure</a>
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
						University Structure
					</div>
				</div>
				<div id="content-detail">
					<div class="content-structure-detail">
						<p >USEA has the Board of Trustees governing the university for its final decision on academic and administrative matters. 
							The President is the authority in the university assisted by Assistant to the Vice President, advisors, academic board, 
							specialized committee and three Vice Presidents managing the assigned offices. USEA has the Board of Trustees governing 
							the university for its final decision on academic and administrative matters. The President is the authority in the university 
							assisted by Assistant to the Vice President, advisors, academic board, specialized committee and three Vice Presidents managing the assigned offices.</p>
						<img src="../media/image/usea-structure-2022.jpg" class="rounded mx-auto d-block" alt="president photo" width="820px" height="475">
					</div>
				</div>
			</div>
			<!-- Start Right Content-->
			<div class="col-xxl-3">
				<div class="right-content">
					<ul>
						<li><a href="history-logo.php">History & LOGO Meaning</a></li><br><hr>
						<li><a href="president-message.php">President Message</a></li><br><hr>
						<li><a href="vision-mision-corevalue.php">Vision, Mission & Core Value</a></li><br><hr>
						<li><a href="usea-structure.php"  class="active">University Structure</a></li><br><hr>
						<li><a href="recognition.php">Recognition</a></li><br><hr>
						<li><a href="upcoming-events.php">Events</a></li><br><hr>
						<li><a href="location.php">Location</a></li><br><hr>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Main Content-->

	<?php
		include_once 'include/buttom-content.php';
		include_once 'include/footer.php';
	?>

