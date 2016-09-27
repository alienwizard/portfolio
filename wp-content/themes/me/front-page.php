<?php get_header(); ?>
<article>
<div class="prog-container">
<nav id="page-prog">
		<li id="sec-1"><span>Introduktion</span></li>
		<li id="sec-2"><span>TMSAB</span></li>
		<li id="sec-3"><span>UFS</span></li>
		<li id="sec-4"><span>Kontakta mig</span></li>
</nav>
<span class="bar active"></span>
<span class="bar unactive"></span>
</div>
	
<div class="cont-wrap">

<section class="fullH" id="one">

<div id="me" class="img-scroll" style="background-image:url('<?php bloginfo('template_url'); ?>/img/johan.jpg');">
	<h1>Johan Wendin's Portfolio och annat</h1>
	<p>Wordpress, PHP, HTML, CSS, Javascript, Java, SQL, Node.js</p>
</div>

</section>

<section  class="fullH" id="two">
<div class="project-scroll animated" style="background-image:url('<?php bloginfo('template_url'); ?>/img/screenshot_tmsab.png');">
<div class="text animated">
	<h1 class="">Traktor och Maskin i Sörmland AB</h1>
	<h3>Hemsideutveckling och projektledning</h3>
	<p>Projekt om jag drev från början till slut. Jag skötte all kundkontatk samt all utveckling</p>
	<a href="tmsab.se">Gå till hemsidan</a>
	</div>
</div>
</section>

<section  class="fullH" id="three">
<div class="project-scroll animated" style="background-image:url('<?php bloginfo('template_url'); ?>/img/screenshot_ufs.png');">
<div class="text animated">
	<h1>UFS i Uppsala</h1>
	<p>Även här skötte jag hela projektet från start till mål, samt även uppföljande analys med Google analytics och Tag manager</p>
	<a href="ufs.nu">Gå till hemsidan</a>
	</div>
</div>
</section>


	<div class="cont-row">
					<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							//
							// Post Content here
							//the_content();
			?>
			<?php
			//
			} // end while
			} // end if
			?>
	</div>
</div>
<div class="cont-wrap">
<div class="bot-section">
<section id="about">
	<h1>Kontakta gärna mig om allt möjligt</h1>
	<p>Fyll i formuläret för så återkommer jag så fort jag kan. Det går även bra att följa mig på Twitter eller linkedin och höra av sig där!</p>

	<div class="social-row">
		<i class="fa fa-linkedin" aria-hidden="true"></i>
		<i class="fa fa-twitter" aria-hidden="true"></i>
	</div>

</section>
<section id="kontakt">
<form>
	<input type="text" name="" placeholder="Namn">
	<input type="text" name="" placeholder="Telefon">
	<input type="text" name="" placeholder="E-post">
	<textarea></textarea>
	<input type="submit" name="">
</form>
	
</section>
</div>

</article>
</div>


<?php get_footer(); ?>