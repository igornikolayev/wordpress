<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>smallapps</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Anonymous+Pro" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>

	<header id="header" class="header"><!-- /header -->
		<div class="header__top ">
			<div class="header__top__logotip ">
				Smallapps
			</div>
			<nav class="header__top__navigation ">
					<ul class="header__top__navigation__list ">
						<li class="header__top__navigation__list__item"><a href="#">Home</a></li>
						<li class="header__top__navigation__list__item"><a href="#">Featerus</a></li>
					 	<li class="header__top__navigation__list__item"><a href="#">Screenshot</a></li>
					 	<li class="header__top__navigation__list__item"><a href="#">Gallery</a></li>
					 </ul>
			</nav>
			<div class="header__top__feedback">
				<div class="header__top__feedback__phone ">	
					<img src="<?php bloginfo('template_url') ?>/img/phone.png" alt="phone">
					<p>800-123-456</p>
				</div>
				<div class="header__top__feedback__mail">
					<img src="<?php bloginfo('template_url') ?>/img/mail.png" alt="mail">
					<p>smallapps@gmail.com</p>
				</div>
			</div>
		</div>
	</header>
