<?php get_header(); ?>
<article class="full-page referens single">
<div id="canvas"></div>
	
<div class="cont-wrap">
	<div class="cont-row">
					<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); ?>
							<?php
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