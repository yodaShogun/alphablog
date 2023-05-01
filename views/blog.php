<?php
	require '../vendor/autoload.php';
	use src\data\PostDao;
	$articleDao = new PostDao();
	$blogQuery = $articleDao->allPosts();
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
							<?php while($blog = $blogQuery->FETCH(PDO::FETCH_OBJ)) { ?> 
								<article>
									<span class="image">
										<img src="../public/uploads/blog/<?=$blog->title?>/<?=$blog->cover?>" alt="" />
									</span>
									<header class="major">
										<h3><?=$blog->title?></h3>

										<p><br> <span><?=$blog->fname?> <?=$blog->lname?></span> | <span><?=$blog->publish_date?></span> | <span>0</span></p>

										<div class="major-actions">
											<a href="blog-details.php?id=<?=$blog->article?>" target="_blank" class="button small next scrolly">Read Blog</a>
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