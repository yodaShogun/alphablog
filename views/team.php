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
										<h1>Our team members</h1>
									</header>
									
									<div class="row">
										<div class="col-md-3 col-sm-6 co-xs-12 text-center">
											<img src="../public/images/author-image-1-646x680.jpg" class="img-responsive" alt="">	

											<h3>Johnny William</h3>

											<h4><em>CEO</em></h4>

											<ul class="icons">
												<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</div>

										<div class="col-md-3 col-sm-6 co-xs-12 text-center">
											<img src="../public/images/author-image-2-646x680.jpg" class="img-responsive" alt="">	

											<h3>Karry Pitcher</h3>

											<h4><em>CEO</em></h4>

											<ul class="icons">
												<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</div>

										<div class="col-md-3 col-sm-6 co-xs-12 text-center">
											<img src="../public/images/author-image-3-646x680.jpg" class="img-responsive" alt="">	

											<h3>Mary Cool</h3>

											<h4><em>CEO</em></h4>

											<ul class="icons">
												<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</div>

										<div class="col-md-3 col-sm-6 co-xs-12 text-center">
											<img src="../public/images/author-image-4-646x680.jpg" class="img-responsive" alt="">	

											<h3>Michael Soft</h3>

											<h4><em>CEO</em></h4>

											<ul class="icons">
												<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</div>

									</div>
								</div>
							</section>

					</div>

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
	</body>
</html>