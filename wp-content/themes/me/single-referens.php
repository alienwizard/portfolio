<?php get_header(); ?>
<article class="referens">
	
<div class="cont-wrap">
	<div class="cont-row">
					<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); ?>
							<img src="<?php the_post_thumbnail('large'); ?>"/>
							<?php
							//
							// Post Content here
							the_title();
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