<?php
	require '../vendor/autoload.php';
	use src\data\PostDao;
	$articleDao = new PostDao();
	$blogQuery = $articleDao->recentsPosts();
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
				<?php require './includes/menu.php' ?>			

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Devise</h1>
							</header>
							<div class="content">
								<p>“Alpha, ingénierie avec de nouvelles perspectives”</p>
								<ul class="actions">
									<li><a href="contact.php" class="button next scrolly">Contact us</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">
							<!-- About us -->
							<section>
								<div class="inner">
									<header class="major">
										<h2>About us</h2>
									</header>
									<p>L'académie a pour mission de connecter et d’encadrer les professionnels ingénieures favorisant la maîtrise de leur domaine pour servir valablement leur communauté et le monde.</p>
									<ul class="actions">
										<li><a href="about-us.php" class="button next">Read more</a></li>
									</ul>
								</div>
							</section>

							<!-- Blog Posts -->
							<section class="tiles">
								<?php while($blog = $blogQuery->FETCH(PDO::FETCH_OBJ)) { ?> 
									<article>
										<strong class="image"> 
											<img src="../public/uploads/blog/<?=$blog->title?>/<?=$blog->cover?>" alt=""/> 
										</strong>
										<header class="major">
											<h3><?=$blog->title?></h3>

											<p><br> <span><?=$blog->fname?> <?=$blog->lname?></span> | <span><?=$blog->publish_date?></span> </p>

											<div class="major-actions">
												<a href="blog-details.php?id=<?=$blog->article?>" target="_blank" class="button small next scrolly"> More </a>
											</div>
										</header>
									</article>
								<?php } ?>
							</section>
					</div>

				<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<ul class="icons">
							<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/alphaacademyht/" target="_blank" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						</ul>
						<ul class="copyright">
							<li>Copyright © 2023 AlphaAcademyHT </li>
						</ul>
					</div>
				</footer>
			</div>

		<!-- Scripts -->
		<?php  require './includes/script.php' ?>
	</body>
</html>