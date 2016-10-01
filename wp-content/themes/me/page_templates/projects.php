<?php /* Template name: referenser */ 

get_header();

?>

<article id="referenser">
<div id="canvas"></div>

<div class="container" ">

		<ul id="cat-wrap">
			<li id="hemsidor" ><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Hemsidor</span></li>
			<li id="spel" ><i class="fa fa-smile-o" aria-hidden="true"></i><span>Spel</span></li>
			<li id="all" ><i class="fa fa-globe" aria-hidden="true"></i><span>Alla Projekt</span></li>
		</ul>
	
<?php if(have_posts()){ ?>

<?php while(have_posts()){
	the_post();
	the_content();

}; ?>

<?php wp_reset_postdata(); ?>


	<?php }; ?>

	<div id="ajax-response">

	<?php $args = array('post_type' => 'referens', 'posts_per_page' => -1); ?>

	<?php $the_query = new WP_Query($args); ?>

	<?php while($the_query->have_posts()){
		$the_query->the_post();
		?>
		<div class="referens-item">
		<div class="ref-img">
		<img src="<?php the_post_thumbnail_url('large'); ?>"/>
		</div>
		<div class="ref-text">
		<?php 

		the_title('<h2>','</h2>');
		the_excerpt();
		?>
		</div>
			<div class="clearfix"></div>

		</div>


	<?php	}; ?>


	</div>

</div>


</article>

<?php get_footer(); ?>