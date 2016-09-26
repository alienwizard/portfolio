<?php get_header(); ?>
<article>
	
<div class="cont-wrap">

<h1 class="title">Arbete</h1>
<section class="project-section">
	<div class="project"></div>
	<div class="project"></div>
	<div class="project"></div>
	<div class="project"></div>
	<div class="project"></div>
	<div class="project"></div>
	<div class="project"></div>
	<div class="project"></div>
	<div class="project"></div>
</section>

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