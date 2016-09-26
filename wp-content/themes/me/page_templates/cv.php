<?php
/* Template name: CV*/

 get_header(); ?>

<article>
	
<div class="cont-wrap">

<h1 class="title">Johan Wendin</h1>

<div class="leftInfo">
<div class="top-section">
<div class="me">

</div>

</div>
<div id="past-experiences">
	<h3>Past Experiences</h3>
		<ul>
				<li>Mediahelp 2014--</li>
				<li>Roskilde Festival</li>
				<li>Coop forum</li>
			</ul>	
</div>
<div id="education" class="cv-item">
<h3>Education</h3>
	<ul>
		<li></li>
		<li></li>
	</ul>
</div>
<div id="skills">
	<h3>Skills</h3>
</div>
</div>
<div class="right-contact">
	<?php the_field('kontaktuppgifter'); ?>
</div>

	<div class="cont-row">
					<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							//
							// Post Content here
							the_content();
			?>
			<?php
			//
			} // end while
			} // end if
			?>
	</div>
</div>

</article>


<?php get_footer(); ?>