<?php include_once '../inc/head.php';?>
<body>
	<?php include_once '../inc/nav.php';?>
	<main class="about-page">
		<div class="banner-section">
			<div class="about-banner" style="background-image: url('../images/about-banner.jpg');">
				<div class="about-text w-100 text-center">
					<h1 class="about-title text-white text-uppercase mb-0">About Nandish Ajani</h1>
					<p class="about-sub-title text-white text-uppercase font-weight-bold pb-0">World authority on leadership psychology – and the #1 life and business strategist</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="my-4">
				<a href="home.php" target="blank" class="text-info font-weight-bold">Home</a>
				<span class="align-middle">
					<i class="zmdi zmdi-chevron-right"></i>
					<i class="zmdi zmdi-chevron-right right-arrow"></i>
				</span>
				<span>About Nandish Ajani</span>
			</div>
			<div class="information-section">
				<h3 class="font-weight-bold text-uppercase">
				<strong>
				Nandish Ajani Is An Entrepreneur, Best-selling Author, Philanthropist, And The Nation’s #1 Life And Business Strategist.
				</strong>
				</h3>
				<p class="information-desc my-4">
					He is the author of six internationally bestselling books, including most recently <span class="font-italic"> New York Times</span> #1 bestsellers <span class="text-uppercase font-italic">unshakeable:</span> <span class="font-italic">Your Financial Freedom Playbook</span> and <span class="text-upercase font-italic">money:</span> <span></span>Master the Game. Robbins has empowered more than 50 million people from 100 countries through his audio, video and life training programs. He created the #1 personal and professional development program of all time, and more than 4 million people have attended his live seminars.
				</p>
				<p class="information-desc my-4">
					Nandish Ajani is a founder or partner in more than thirty companies in various industries, ranging from technology (virtual reality) and sports (Major League Soccer) to events and hospitality, including the #1 rated resort &amp; spa in the Fijian islands. These companies have combined annual sales of $5 billion.
				</p>
				<p class="information-desc my-4">
					He has been honored by Accenture as one of the “Top 50 Business Intellectuals in the World,” by Harvard Business Press as one of the “Top 200 Business Gurus,” and by American Express as one of the “Top Six Business Leaders in the World” to coach its entrepreneurial clients. Fortune Magazine’s cover article named him the “CEO Whisperer,” and he has been named in the top 50 of Worth Magazine’s 100 most powerful people in global finance for two consecutive years.
				</p>
				<div class="text-content">
					<p class="text-desc font-italic">
						In his mission to continually impact the lives of millions, Ajani has made headlines by partnering and lending his voice to disruptive companies in the financial services arena.
					</p>
				</div>
				<p class="information-desc my-4">
					His work has touched the lives of top entertainers, such as Aerosmith, Green Day, Usher and Pitbull. Billionaire business leaders seek his advice as well; casino magnate Steve Wynn and Salesforce.com founder Marc Benioff are among those who call on him for coaching.
				</p>
				<p class="information-desc my-4">
					Ajani is an active philanthropist: Through his partnership with Feeding America, he has provided over 200 million meals to those in need in the last two years, and he is on track to provide a billion meals by 2025. He has also initiated programs in more than 1,500 schools, 700 prisons and 50,000 service organizations and shelters. He provides fresh water to 100,000 people a day in India to prevent waterborne diseases, which the #1 killer of children in that country.
				</p>
				<p class="information-desc my-4">
					Nandish lives in Palm Beach, Florida, with his wife, Sage Robbins.
				</p>
			</div>
		</div>
		<!-- <div class="testi-content">
						<div class="bg-img" style="background-image: url('../images/tony-img.jpg');">
										<div class="throught-content text-center w-100">
														<p class="throught-desc mx-auto font-italic text-white text-center">"I challenge you to make your life a masterpiece. I challenge you to join the ranks of those people who live what they teach, who walk their talk."</p>
														<div class="text-center">
																		<p class="name-text text-white text-uppercase mb-0"> - Nandish Ajani</p>
														</div>
														<div class="d-inline-block my-5">
																		<button class="btn btn-lg btn-info text-uppercase text-white px-4 btn-block">Schedule Your Call</button>
														</div>
										</div>
						</div>
		</div> -->
		<div class="certificate-background">
			<div class="container">
				<h3 class="mb-0 text-white text-center py-5">My Certificate</h3>
				<div class="in-certificate">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide py-5">
								<div class="certificat-img" style="background-image: url('../images/certifications-1.jpg');"></div>
							</div>
							<div class="swiper-slide py-5">
								<div class="certificat-img" style="background-image: url('../images/certifications-2.jpg');"></div>
							</div>
							<div class="swiper-slide py-5">
								<div class="certificat-img" style="background-image: url('../images/certifications-3.jpg');"></div>
							</div>
							<div class="swiper-slide py-5">
								<div class="certificat-img" style="background-image: url('../images/certifications-4.jpg');"></div>
							</div>
							<div class="swiper-slide py-5">
								<div class="certificat-img" style="background-image: url('../images/certifications-2.jpg');"></div>
							</div>
							<div class="swiper-slide py-5">
								<div class="certificat-img" style="background-image: url('../images/certifications-4.jpg');"></div>
							</div>
							<div class="swiper-slide py-5">
								<div class="certificat-img" style="background-image: url('../images/certifications-1.jpg');"></div>
							</div>
							<div class="swiper-slide py-5">
								<div class="certificat-img" style="background-image: url('../images/certifications-3.jpg');"></div>
							</div>
						</div>
					</div>
					<div class="next-btn swiper-button-next swiper-button-white"></div>
					<div class="prev-btn swiper-button-prev swiper-button-white"></div>
				</div>
			</div>
		</div>
	</main>
	<?php include_once '../inc/footer.php';?>
	<script src="../js/swiper.min.js"></script>
	<script>
		var swiper = new Swiper('.swiper-container', {
		slidesPerView: 3,
		spaceBetween: 30,
		navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
		},
		speed: 750,
		mode: 'horizontal',
		grabCursor: true,
		autoplay: {
		delay: 3000,
		},
		loop:true,
		breakpoints: {
			1000: {
				slidesPerView: 2,
				spaceBetween: 40
			},
			768: {
				slidesPerView: 1,
				spaceBetween: 40
			},
		}
		});
		var onhover = document.querySelector('.swiper-container').swiper
		$(".swiper-container").mouseenter(function() {
		onhover.autoplay.stop();
		});
		$(".swiper-container").mouseleave(function() {
		onhover.autoplay.start();
		});
	</script>
</body>
</html>