<?php
    require_once('db-connect.php');
    $sql = 'SELECT * FROM `project`';
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    /* var_dump($result); */

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Minimalist Portfolio</title>
		<link rel="stylesheet" href="styles.css" />

		<!-- locomotive-scroll -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.2.5/dist/locomotive-scroll.min.css"
		/>
		<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.2.5/dist/locomotive-scroll.min.js"></script>
	</head>
	<body id="js-scroll">
		<div class="wrapper">
			<div class="container">
				<!-- navbar -->
				<div class="navbar">
					<div class="navbar-container">
						<div class="site-title">by computer boy</div>
						<div class="site-type">Portfolio</div>
						<div class="site-year">2021</div>
					</div>
				</div>

				<!-- divider -->
				<div class="divider"></div>

				<!-- header -->
				<div class="header">
					<div class="header-container">
						<h1>Nathan Boutaud<br />Web<br />&nbsp;Designer</h1>
					</div>
				</div>

				<!-- hero-image -->
				<div class="hero-image">
					<div class="hero-image-container" data-scroll data-scroll-speed="2">
						<img src="images/hero-image.jpg" alt="" />
					</div>
				</div>

				<div class="whitespace"></div>

				<!-- sections -->
				<div class="section-header">
					<div class="section-header-container">
						<div class="section-title">about</div>
						<div class="section-order">/001</div>
					</div>
				</div>

				<div class="divider"></div>

				<!-- about -->
				<section class="about">
					<div class="about-container">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
							quasi sapiente nisi minus neque non explicabo, magni cumque enim
							aut!
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad,
							eaque nobis. Quidem sint ratione quos veniam!
						</p>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</section>

				<div class="whitespace"></div>

				<!-- projects -->
				<div class="section-header">
					<div class="section-header-container">
						<div class="section-title">projects</div>
						<div class="section-order">/002</div>
					</div>
				</div>

				<div class="divider"></div>

				<section class="project">
					<div class="project-container">
						<div>
							<nav class="menu">
								<div class="menu__item">
									<a class="menu__item-link">/ Coeur web</a>
									<img class="menu__item-img" src="images/project-one.jpeg" />
									<div class="marquee">
										<div class="marquee__inner">
											<span>Coeur web</span>
											<span>Coeur web</span>
											<span>Coeur web</span>
											<span>Coeur web</span>
										</div>
									</div>
								</div>

								<div class="divider"></div>

								<div class="menu__item">
									<a class="menu__item-link">/ Unlocked</a>
									<img class="menu__item-img" src="images/project-two.jpeg" />
									<div class="marquee">
										<div class="marquee__inner">
											<span>Unlocked</span>
											<span>Unlocked</span>
											<span>Unlocked</span>
											<span>Unlocked</span>
										</div>
									</div>
								</div>

								<div class="divider"></div>

								<div class="menu__item">
									<a class="menu__item-link">/ Offbeat Radio</a>
									<img class="menu__item-img" src="images/project-three.jpeg" />
									<div class="marquee">
										<div class="marquee__inner">
											<span>Offbeat Radio</span>
											<span>Offbeat Radio</span>
											<span>Offbeat Radio</span>
											<span>Offbeat Radio</span>
										</div>
									</div>
								</div>

								<div class="divider"></div>

								<div class="menu__item">
									<a class="menu__item-link">/ Brutal</a>
									<img class="menu__item-img" src="images/project-four.jpeg" />
									<div class="marquee">
										<div class="marquee__inner">
											<span>Brutal</span>
											<span>Brutal</span>
											<span>Brutal</span>
											<span>Brutal</span>
										</div>
									</div>
								</div>

								<div class="divider"></div>

								<div class="menu__item">
									<a class="menu__item-link">/ The Crew</a>
									<img class="menu__item-img" src="images/project-five.jpeg" />
									<div class="marquee">
										<div class="marquee__inner" aria-hidden="true">
											<span>The Crew</span>
											<span>The Crew</span>
											<span>The Crew</span>
											<span>The Crew</span>
										</div>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</section>

				<div class="whitespace"></div>

				<!-- clients -->
				<div class="section-header">
					<div class="section-header-container">
						<div class="section-title">clients</div>
						<div class="section-order">/003</div>
					</div>
				</div>

				<div class="divider"></div>

				<section class="clients">
					<div class="clients-container">
						<p>
							<br />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<br />
						</p>
					</div>
				</section>

				<div class="whitespace"></div>

				<!-- social  -->
				<div class="section-header">
					<div class="section-header-container">
						<div class="section-title">socials</div>
						<div class="section-order">/004</div>
					</div>
				</div>

				<div class="divider"></div>

				<section class="socials">
					<div class="socials-container">
						<div class="socials-id ln"><a href="">Linkedin</a></div>
						<div class="socials-id ig"><a href="">Instagram</a></div>
						<div class="socials-id ig"><a href="">Github</a></div>
						<div class="socials-id ig"><a href="">Dribbble</a></div>
					</div>
				</section>

				<div class="divider"></div>

				<!-- footer -->
				<div class="footer">
					<div class="navbar">
						<div class="navbar-container">
							<div class="site-title">created by computer boy</div>
							<div class="site-year">25.486656, 10.789071</div>
						</div>
					</div>
				</div>
				<br />
			</div>
		</div>

		<script>
			const scroll = new LocomotiveScroll({
				el: document.querySelector("#js-scroll"),
				smooth: true,
				smoothMobile: true,
				inertia: 0.75,
			});
		</script>
	</body>
</html>
