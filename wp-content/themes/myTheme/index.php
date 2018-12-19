
<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');
?>
<?php define('WP_USE_THEMES', false); get_header(); ?>
	<section class="header__bottom">
		<div class="header__bottom__main">
			<h1>
				Perfect app landing page
			</h1>
			<h2>
				Duis bibendum diam
			</h2>
			<p>
				Donec elementum mollis magna id aliquet. Etiam eleifend urna eget sem sagittis feugiat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
			</p>
			<button type="submit" class="header__bottom__main__button">
				Download
			</button>
		</div>	
	</section>
	<?php
	$posts = get_posts( array(
) );

foreach( $posts as $post ){
	setup_postdata($post);
	
    the_title(); 
}

wp_reset_postdata(); // сброс
?>
	<section class="featerure">
		<div class="featerure__heading">
			<h1>Heading Feature title goes here</h1>
			<p>Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.</p>
		</div>
		<div class="featerure__menu-scroll">
			<div  class="list-group featerure__menu-scroll__list ">
				<div class="featerure__menu-scroll__list__item" id="one"  onclick="showslide(0)">
					<img src="<?php bloginfo('template_url') ?>/img/heart.png" alt="heart">  
					<p>Heading title one</p>
				</div>
				<div class="featerure__menu-scroll__list__item" onclick="showslide(1)">
					<img src="<?php bloginfo('template_url') ?>/img/suitcase.png" alt="suitcase">  
					<p>Heading title one</p>
				</div>
				<div class="featerure__menu-scroll__list__item"  onclick="showslide(2)">
					<img src="<?php bloginfo('template_url') ?>/img/leaf.png" alt="leaf"> 
					<p>Heading title one</p>
				</div>
				<div class="featerure__menu-scroll__list__item" onclick="showslide(3)">
					<img src="<?php bloginfo('template_url') ?>/img/frame.png" alt="frame" style="padding-right: 20px">  
					<p>Heading title one</p>
				</div>
				<div class="featerure__menu-scroll__list__item"  onclick="showslide(4)"> 
					<img src="<?php bloginfo('template_url') ?>//img/umbrela.png" alt="umbrela"> 
					<p>Heading title one</p>
				</div>
			</div>
			<div id="list" class="featerure__menu-scroll__output">

				<div class="featerure__menu-scroll__output__item">
					<img src="<?php bloginfo('template_url') ?>/img/heart.png" alt="heart">
					<h4 id="list-item-1">Heading Feature title goes here</h4>
					<p>Nunc accumsan hendrerit nunc, ac venenatis magna facilisis quis. Ut sit amet mi ac neque sodales facilisis. Nullam tempus fermentum lorem nec interdum. Ut id orci id sapien imperdiet vehicula. Etiam quis dignissim ante. Donec convallis tincidunt ligula, ac luctus mi interdum a.</p>
				</div>
				<div class="featerure__menu-scroll__output__item">
					<img src="<?php bloginfo('template_url') ?>/img/suitcase.png" alt="suitcase">
					<h4 id="list-item-2">Heading Feature title goes here</h4>
					<p>Nunc accumsan hendrerit nunc, ac venenatis magna facilisis quis. Ut sit amet mi ac neque sodales facilisis. Nullam tempus fermentum lorem nec interdum. Ut id orci id sapien imperdiet vehicula. Etiam quis dignissim ante. Donec convallis tincidunt ligula, ac luctus mi interdum a.</p>
				</div>
				<div class="featerure__menu-scroll__output__item">
					<img src="<?php bloginfo('template_url') ?>/img/leaf.png" alt="leaf">
					<h4 id="list-item-3">Heading Feature title goes here</h4>
					<p>Nunc accumsan hendrerit nunc, ac venenatis magna facilisis quis. Ut sit amet mi ac neque sodales facilisis. Nullam tempus fermentum lorem nec interdum. Ut id orci id sapien imperdiet vehicula. Etiam quis dignissim ante. Donec convallis tincidunt ligula, ac luctus mi interdum a.</p>
				</div>
				<div class="featerure__menu-scroll__output__item">
					<img src="<?php bloginfo('template_url') ?>/img/frame.png" alt="frame">
					<h4 id="list-item-4">Heading Feature title goes here</h4>
					<p>Nunc accumsan hendrerit nunc, ac venenatis magna facilisis quis. Ut sit amet mi ac neque sodales facilisis. Nullam tempus fermentum lorem nec interdum. Ut id orci id sapien imperdiet vehicula. Etiam quis dignissim ante. Donec convallis tincidunt ligula, ac luctus mi interdum a.</p>
				</div>
				<div class="featerure__menu-scroll__output__item">
					<img src="<?php bloginfo('template_url') ?>/img/umbrela.png" alt="umbrela">
					<h4 id="list-item-5">Heading Feature title goes here</h4>
					<p>Nunc accumsan hendrerit nunc, ac venenatis magna facilisis quis. Ut sit amet mi ac neque sodales facilisis. Nullam tempus fermentum lorem nec interdum. Ut id orci id sapien imperdiet vehicula. Etiam quis dignissim ante. Donec convallis tincidunt ligula, ac luctus mi interdum a.</p>
				</div>
			</div>
		</div>
	</section>
	<div class="phone_container">
		<div class="phone">
			<div class="phone__decribe">
				<p class="phone__decribe__head">Onec ultrices ultricies tellus perfect screens here</p>
				<div class="phone__decribe__line"></div>
				<p class="phone__decribe__second-header">Duis bibendum diam non erat facilisis tincidunt.</p>
				<p class="phone__decribe__main-decription">Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet. </p>
				<button class="header__bottom__main__button phone__decribe__button">Learn more</button>
			</div>
			<div class="phone__photo"></div>
		</div>
	</div>
	<div class="galerry">
		<div class="galerry__left-button" id="prev">
			<img src="<?php bloginfo('template_url') ?>/img/left-b.png" alt=""> 
		</div>
		<div class="galerry__main">
			<p class="galerry__main__head">Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet. </p>
			<div class="galerry__main__slider">
				<div class="galerry__main__slider__slide">
					<img src="<?php bloginfo('template_url') ?>/img/screen-galery.jpg" alt="">
					<p class="galerry__main__slider__slide__decription">
						Duis bibendum diam non erat facilaisis 
						tincidunt. Fusce leo neque, lacinia at 
						tempor vitae, porta at arcu.
					</p>
				</div>
				<div class="galerry__main__slider__slide">
					<img src="<?php bloginfo('template_url') ?>/img/screen-galery.jpg" alt="">
					<p class="galerry__main__slider__slide__decription">
						Duis bibendum diam non erat facilaisis 
						tincidunt. Fusce leo neque, lacinia at 
						tempor vitae, porta at arcu.
					</p>
				</div>
				<div class="galerry__main__slider__slide">
					<img src="<?php bloginfo('template_url') ?>/img/screen-galery.jpg" alt="">
					<p class="galerry__main__slider__slide__decription">
						<?php the_field('phone_text'); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="galerry__right-button" id="next" onclick="slider()">
			<img src="<?php bloginfo('template_url') ?>/img/right-b.png" alt="">
		</div>
	</div>
	<div class="phone_container ">
		<div class=" phone__second">
			<div class="phone__photo__second"></div>
			<div class="phone__decribe__second ">
				<p class="phone__decribe__head">Onec ultrices ultricies tellus perfect screens here</p>
				<div class="phone__decribe__line"></div>
				<p class="phone__decribe__second-header">Duis bibendum diam non erat facilisis tincidunt.</p>
				<p class="phone__decribe__main-decription">Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet. </p>
				<button class="header__bottom__main__button phone__decribe__button">Learn more</button>
			</div>
		</div>
	</div>
	<div class="saying">
		<p class="saying__header">What people say about us </p>
		<div class="saying__slider">
			<div class="saying__image"></div>
			<p class="saying__text">“ It’s official – I love this app, I couldn’t be without it now.”</p>
			<p class="saying__autor">- Ron Burgundy</p>
			<div class="saying__slider__circle">
				<button class="saying__slider__circle__items" id="button_circle-1"></button>
				<button class="saying__slider__circle__items" id="button_circle-2"></button>
				<button class="saying__slider__circle__items" id="button_circle-3"></button>
			</div>
		</div>
	</div>
	<div class="form">
		<div class="form__head">
			<div class="form__head__image"> <img src="<?php bloginfo('template_url') ?>/img/feedmail.png" alt=""></div>
			<div class="form__head__text">Subscribe our Newsletter</div>
		</div>
		<form action="index.html" method="get" accept-charset="utf-8">
			<input class="form__head__input" type="text" placeholder="your email address">
  			<button class="form__head__button">Submit</button>
		</form>
	</div>
<?php get_footer() ?>