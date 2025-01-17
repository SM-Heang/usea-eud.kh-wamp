<!-- =====> Start Footer <===== -->
<div class="container-fluid" id="footer-location">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 footer-links">
                <h4>Contact Us</h4>
                <p><strong>Address:</strong> Opposite Angkor High School, Siemreap Municipality, Kingdom of Cambodia</p>
                <ul>
                    <li><i class="fa-solid fa-phone" style="color: #ffffff;"></i> 063 900 090, 017386 678</li>
                    <li><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i> University of South-East Asia</li>
                    <li><i class="fa-brands fa-telegram"></i> https//t.me/university_of_south_east_asia</li>
                    <li><i class="fa-regular fa-envelope"></i> info@usea.edu.kh</li>
                    <li><i class="fa-solid fa-earth-americas"></i> www.usea.edu.kh</li>
                </ul>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 footer-links">
                <h4>Explore</h4>
                <ul>
                    <li><a href="#">Scholarship</a></li>
                    <li><a href="#">Career Center</a></li>
                    <li><a href="#">Facilities</a></li>
                    <li><a href="#">E-Library</a></li>
                    <li><a href="#">Alumni</a></li>
                    <li><a href="#">Student Service </a></li>
                </ul>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 footer-links">
                <h4>About US</h4>
                <ul>
                    <li><a href="#">History & Logo Meaning</a></li>
                    <li><a href="#">President Message</a></li>
                    <li><a href="#">Vision, Mission & Core Value</a></li>
                    <li><a href="#">University Structure</a></li>
                    <li><a href="#">Recognition</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



		
		<div class="container">
			<div class="col-xxl-12 text-center copyright">
				<p>Copyright © 2006 University of South-East Asia, All rights reserved. </p>
			</div>
		</div>

	<!-- =====> End Footer <===== -->
</div>

	<div class="gototop js-top" id="goto">
		<a href="#top" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="../js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="../js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="../js/simplyCountdown.js"></script>
	
	<!-- fontawesome icon  -->
	<script src="https://kit.fontawesome.com/9db7cd6c46.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.item-link').click(function(){
				$(this).next('.sub-menu').slideToggle();
			});
		});
	</script>
	<script>
		$('.owl-carousel').owlCarousel({
    loop:true,
    nav:false,
	dots: false,
	autoplay: true,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
	</script>

	<!-- mobile hamburger dropdown script  -->
	<script>
		$(document).ready(function(){
			$('.hamburger').click(function(){				
				$('.mobile-menu').slideToggle();
			});
		});
		$(document).ready(function(){
			$('.right-menu-mobile').click(function(){				
				$('.right-content-mobile__about').slideToggle();
			});
		});
	</script>
	
	<script>
		$(document).ready(function(){
			$('.dropdown-parent > a').click(function(){
				$(this).parent().siblings().find('div').fadeOut(500);
				$(this).next('div').stop(true, false, true).fadeToggle(500);
				return false;

			});
		});
	</script>
	<script>
		var loader = document.getElementById("fh5co-hero");
		window.addEventListener("load", function(){
			loader.style.display = "none";
		})
	</script>
	<!-- scroll animation -->
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

	<!-- Custom JS -->
	<script src="../js/main.js"></script>
	<script>
		
		const cardsAnnouncement = document.querySelector("#announcement");
		const cardsUpcomingEvents = document.querySelector("#upcoming-events");
		const cardsPastEvents = document.querySelector("#past-events");
		const tabs = document.querySelectorAll(".tabs-links");
		tabs.forEach((tab) => {
		tab.addEventListener("click", () => {
			tabs.forEach(tab=>{tab.classList.remove('active')});
			tab.classList.add("active");
		});
		});
	</script>
	</body>
</html>