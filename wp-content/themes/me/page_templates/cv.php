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
	<h2>Past Experiences</h2>
		<ul>
				<li><h3>Mediahelp 2014 - ( current employment)</h3></li>
				<li>
						<h3>Roskilde Festival 2014</h3>
						<p>volunteer work at the festival</p>
				</li>
				<li>
						Coop forum
				</li>
			</ul>	
</div>
<div id="education" class="cv-item">
<h2>Education</h2>
	<ul>
		<li>
				<h3>The University of Skövde – Degree of Bachelor of Science with a major in Informatics (2011 – 2014)</h3>
				<p>With a focus on game development and game design</p>
<p>Including courses such as:</p>
<p>Interaction, Design and Usability (KB111G)</p>
<p>Game analysis 1 & 2 (ME123G & ME328G)</p>
		</li>
		<li>
				<h3>Fyrisskolan IT focused education (2008 - 2011)</h3>
				<p>Upper secondary school. Courses including: English A, English B and English C</p>
		</li>
	</ul>
</div>
<div id="skills">
	<h2>Skills</h2>
	<ul>
		<li><h3>Swedish</h3></li>
	</ul>
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