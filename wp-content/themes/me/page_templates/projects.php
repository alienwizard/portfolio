<?php /* Template name: referenser */ 

get_header();

?>

<article id="referenser">
	<nav>
		<ul>
			<li>Hemsidor</li>
			<li>Spel</li>
			<li>Alla Projekt</li>
		</ul>
	</nav>
<div class="container">
	
<?php if(have_posts()){ ?>

<?php while(have_posts()){
	the_post();
	the_content();

}; ?>

<?php wp_reset_postdata(); ?>


	<?php }; ?>

	<?php $args = array('post_type' => 'referens', 'posts_per_page' => -1); ?>

	<?php $the_query = new WP_Query($args); ?>

	<?php while($the_query->have_posts()){
		$the_query->the_post();
		?>
		<div class="referens-item">
		<img src="<?php the_post_thumbnail_url('large'); ?>"/>
		<?php 

		the_title('<h2>','</h2>');
		the_excerpt();
		?>
		<div class="end-icon"><i class="fa fa-folder-open" aria-hidden="true"></i></div>
		</div>


	<?php	}; ?>

</div>


</article>

<?php get_footer(); ?>