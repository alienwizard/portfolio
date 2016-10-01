<?php 
/*Template name: kontakt*/


get_header(); ?>
<article>
<div id="canvas"></div>
<div class="cont-wrap">
<div class="bot-section">
<section id="about">
	<h1>Kontakta gärna mig om allt möjligt</h1>
	<p>Fyll i formuläret för så återkommer jag så fort jag kan. Det går även bra att följa mig på Twitter eller linkedin och höra av sig där!</p>

	<div class="social-row">
		<a href="https://www.linkedin.com/profile/preview?locale=sv_SE&trk=prof-0-sb-preview-primary-button"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		<a href="https://twitter.com/JohanW92"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	</div>

</section>
<section id="kontakt">
<?php echo do_shortcode('[contact-form-7 id="61" title="Contact form 1"]');?>	
</section>
<div class="clearfix"></div>
</div>

</article>
</div>


<?php get_footer(); ?>