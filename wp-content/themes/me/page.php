<?php get_header(); ?>
<article>
	
<div class="cont-wrap">
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