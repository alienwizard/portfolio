<?php get_header(); ?>
<article>
<nav></nav>
	
<div class="cont-wrap">

<section class="fullH" id="1">

<div id="me" class="img-scroll" style="background-image:url('<?php bloginfo('template_url'); ?>/img/johan.jpg');">
	<h1>Johan Wendin's Portfolio och annat</h1>
	<p>Wordpress lärde mig stava till excerpt</p>
</div>

</section>

<section  class="fullH" id="2">
<div class="project-scroll animated" style="background-image:url('<?php bloginfo('template_url'); ?>/img/screenshot_tmsab.png');">
	<h1 class="animated">Traktor och Maskin i Sörmland AB</h1>
	<h3>Hemsideutveckling och projektledning</h3>
	<p>Projekt om jag drev från början till slut. Jag skötte all kundkontatk samt all utveckling</p>
</div>
</section>

<section  class="fullH" id="3">
<div class="project-scroll " style="background-image:url('<?php bloginfo('template_url'); ?>/img/screenshot_tmsab.jpg');">
	<h1>Traktor och Maskin i Sörmland AB</h1>
	<p></p>
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
<section id="about">
	<h1>Kontakta gärna mig om allt möjligt</h1>
</section>
<section id="kontakt">
<form>
	<input type="text" name="">
	<input type="text" name="">
	<input type="text" name="">
	<textarea></textarea>
	<input type="submit" name="">
</form>
	
</section>

</article>
</div>


<?php get_footer(); ?>