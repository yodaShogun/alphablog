<?php
	require '../vendor/autoload.php';
	use src\data\PostDao;
	$articleDao = new PostDao();
	if(isset($_GET['id']) && $_GET['id']!=null)
		$blogQuery = $articleDao->readOnePosts($_GET['id']);
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../public/assets/css/main.css"> 
		<noscript><link rel="stylesheet" href="../public/assets/css/noscript.css" /></noscript>
		<script src="https://cdn.tiny.cloud/1/t8hponv3e19wmiohmz1iq7imsynz4yy9sywi1vtkmloejwf7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
						<?php while($details = $blogQuery->FETCH(PDO::FETCH_OBJ)) {?>
							<section id="one" >
								<div class="inner">
									<header class="major">
										<h1><?=$details->title?></h1>
										<h4><i class="fa fa-user"></i> <?=$details->fname?> <?=$details->lname?> &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar"></i> <?=$details->publish_date?>   &nbsp;&nbsp;&nbsp;&nbsp;</h4>
									</header>
									<span class="image main"><img src="../public/uploads/blog/<?= $details->title?>/<?=$details->cover?>" alt="" /></span>
									<div style="background-color: #E2A020;">
										<?php echo html_entity_decode($details->content); ?>
									</div>
								</div>
							</section>
						<?php }?>	
					</div>
					<section id="contact">
						<div class="inner">
							<section>
								<header class="major">
									<h2>Leave a Comment</h2>
								</header>

								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name">
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email">
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>

										<div class="field half text-right">
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="primary"></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-info"></span>
										<h3>Lorem ipsum dolor sit amet.</h3>
										<span>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur. Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-share"></span>
										<h3>Share</h3>

										<p style="position: relative;">
											<a href="#" style="position: relative;" class="icon alt fa-twitter"><span class="label">Twitter</span></a> &nbsp;
											<a href="#" style="position: relative;" class="icon alt fa-facebook"><span class="label">Facebook</span></a> &nbsp;
											<a href="#" style="position: relative;" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a> &nbsp;
											<a href="#" style="position: relative;" class="icon alt fa-behance"><span class="label">Behance</span></a>
										</p>
									</div>
								</section>
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
		<script src="../public/assets/js/utils/readpost.js"></script>
	</body>
</html>