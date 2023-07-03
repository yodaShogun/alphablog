<?php
	require '../vendor/autoload.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../public/assets/css/main.css"> 
		<noscript><link rel="stylesheet" href="../public/assets/css/noscript.css" /></noscript>
		<title>AlphaAcademyHT</title>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.php" class="logo"><strong>Welcome</strong> <span>Genius</span></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<?php  require './includes/menu.php' ?>
				
				<!-- Main -->
					<div id="main" class="alt">
						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Contact Us</h1>
									</header>
									<span class="image main"><img src="../public/images/map.jpg" alt="" /></span>
								</div>
							</section>
					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<header class="major">
									<h2>Contact us</h2>
								</header>

								<form method="post" id="contact-form">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="subject">Subject</label>
											<input type="text" name="subject" id="subject" />
										</div>
										<div class="field">
											<label for="message">Notes</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>

										<div class="field half text-right">
											<ul class="actions">
												<li><button type="submit"  class="primary" >Send Message</button></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">alphacademyht@gmail.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>+509 4488 1918</span>
										<br>
										<!-- <span>+1 333 5550 3366</span> -->
									</div>
								</section>
								<!-- <section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>212 Barrington Court <br> New York, ABC 10001 <br> United States of America</span>
									</div>
								</section> -->
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							
							<ul class="copyright">
								<li>Copyright © 2023 AlphaAcademyHT</li>
							</ul>
						</div>
					</footer>


			</div>

		<!-- Scripts -->
		<?php require './includes/script.php' ?>
		<script src="../public/assets/js/contact.js"></script>
	</body>
</html>