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
									<h1>Blog</h1>
								</header>
							</div>
						</section>

						<!-- Blog posts -->
						<section class="tiles">
							<article>
								<span class="image">
									<img src="../public/images/blog-1-720x480.jpg" alt="" />
								</span>
								<header class="major">
									<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h3>

									<p>John Doe  &nbsp;/&nbsp;  12/06/2020 10:30  &nbsp;/&nbsp;  114</p>

									<div class="major-actions">
										<a href="blog-details.php" class="button small next">Read Blog</a>
									</div>
								</header>
							</article>
							<article>
								<span class="image">
									<img src="../public/images/blog-2-720x480.jpg" alt="" />
								</span>
								<header class="major">
									<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h3>

									<p>John Doe  &nbsp;/&nbsp;  12/06/2020 10:30  &nbsp;/&nbsp;  114</p>

									<div class="major-actions">
										<a href="blog-details.php" class="button small next">Read Blog</a>
									</div>
								</header>
							</article>
							<article>
								<span class="image">
									<img src="../public/images/blog-3-720x480.jpg" alt="" />
								</span>
								<header class="major">
									<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h3>

									<p>John Doe  &nbsp;/&nbsp;  12/06/2020 10:30  &nbsp;/&nbsp;  114</p>

									<div class="major-actions">
										<a href="blog-details.php" class="button small next">Read Blog</a>
									</div>
								</header>
							</article>
							<article>
								<span class="image">
									<img src="../public/images/blog-4-720x480.jpg" alt="" />
								</span>
								<header class="major">
									<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h3>

									<p>John Doe  &nbsp;/&nbsp;  12/06/2020 10:30  &nbsp;/&nbsp;  114</p>

									<div class="major-actions">
										<a href="blog-details.php" class="button small next">Read Blog</a>
									</div>
								</header>
							</article>
							<article>
								<span class="image">
									<img src="../public/images/blog-5-720x480.jpg" alt="" />
								</span>
								<header class="major">
									<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h3>

									<p>John Doe  &nbsp;/&nbsp;  12/06/2020 10:30  &nbsp;/&nbsp;  114</p>

									<div class="major-actions">
										<a href="blog-details.php" class="button small next">Read Blog</a>
									</div>
								</header>
							</article>
							<article>
								<span class="image">
									<img src="../public/images/blog-6-720x480.jpg" alt="" />
								</span>
								<header class="major">
									<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h3>

									<p>John Doe  &nbsp;/&nbsp;  12/06/2020 10:30  &nbsp;/&nbsp;  114</p>

									<div class="major-actions">
										<a href="blog-details.php" class="button small next">Read Blog</a>
									</div>
								</header>
							</article>
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