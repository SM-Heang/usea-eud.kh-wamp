<?php
$page = 'about_kh';
// $page = 'about';
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
$_SESSION['page'] = $page;

$_SESSION['right'] = 'event-s-kh';

include_once '../include/header.php';
include_once '../../connection/db.connection.php';
?>

<!-- Start Web Location -->
<div>
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
						<a href="events.php">ព្រឹត្តិការណ៍</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Web Location -->
	<?php
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$sql = "SELECT * FROM usea_events WHERE event_status = 'past' AND event_id =$id ORDER BY event_date DESC";
						$stmt = $conn->prepare($sql);
						$stmt->execute();
						$temp = $stmt->fetch(PDO::FETCH_ASSOC);
						
					}
					?>
	<!-- Main Content-->
	<div class="container">
		<div class="row">
			<!-- Start Content-->
			<div class="col-xxl-9">
				<div class="container" style="background-color:#002060;">
					<div class="row title-text" style="color: white; font-size: 16pt; padding: 5pt;">
						ព្រឹត្តិការណ៍កន្លងទៅ
					</div>
				</div>

				<!-- =====> Start Events <===== -->
				<div class="row animate-box mt-3 mb-5" id="events">
						<div class="event_title">
							<?php echo $temp['event_title_kh']?>
						</div>
						<div class="event_detail">
							<?php echo $temp['event_description_kh'];?>
						</div>
				</div>
				<!-- =====> End Events <===== -->
			</div>

			<!-- Start Right Content-->
			<?php
			include_once "../include/right-content.php";
			?>
			<!-- End Main Content-->

			<?php
			include_once '../include/buttom-content.php';
			include_once '../include/footer.php';
			?>