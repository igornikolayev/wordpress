	<footer class="footer">
		<p class="footer__head">Say Hi, Get In Touch</p>
		<div class="footer__icon">
			<ul class="footer__icon__list">
			    <li class="footer__icon__list__item"><a class="footer__icon__list__item__link" href="#">f</a></li>
			    <li class="footer__icon__list__item"><a class="footer__icon__list__item__link" href="#">t</a></li>
			    <li class="footer__icon__list__item"><a class="footer__icon__list__item__link" href="#">g</a></li>
			    <li class="footer__icon__list__item">
			     	<a class="footer__icon__list__item__links" href="#">
				   		<div class="footer__icon__list__item__circle"></div>
			     		<div class="footer__icon__list__item__circle"></div>
			 		</a>
			 	</li>
			    <li class="footer__icon__list__item"><a href="#" class="footer__icon__list__item__link-you_tube">You Tube</a></li>
			</ul>
		</div>
		<div class="footer__navigation">
		  	<ul class="footer__navigation__list">
		  		<li class="footer__navigation__list__item"><a href="#">Contact</a></li>
		  		<li class="footer__navigation__list__item"><a href="#">Twitter</a></li>
		  		<li class="footer__navigation__list__item"><a href="#">Press</a></li>
		  		<li class="footer__navigation__list__item"><a href="#">Support</a></li>
		  		<li class="footer__navigation__list__item"><a href="#">Developers</a></li>
		  		<li class="footer__navigation__list__item"><a href="#">Privacy</a></li>
		  	</ul>
		 </div> 
	</footer>
	<script>
		function showslide(i){
			var x = document.getElementsByClassName("featerure__menu-scroll__output__item");
			for (var h = 0; h < x.length; h++) {
				x[h].style.display="none";
			}
			x[i].style.display="block";
		}
	</script>
 <?php wp_footer(); ?>
</html>