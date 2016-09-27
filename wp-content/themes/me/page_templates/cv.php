<?php
/* Template name: CV*/

 get_header(); ?>

<article>
	
<div class="cont-wrap">



<div class="leftInfo">
<h1 class="title">Johan Wendin</h1>
<div class="top-section">
<div class="me">

</div>

</div>
<div id="past-experiences">
	<h2>Past Experiences</h2>
		<ul>
				<li>
						<h3>Mediahelp 2014 - (current employment)</h3>
						<p>Web developer, mainly working with wordpress and php. Also in charge of website design and project management, and Google analytics</p>
				</li>
				<li>
						<h3>Roskilde Festival 2014</h3>
						<p>volunteer work at the festival</p>
				</li>
				<li>
						<h3>Coop forum 2007</h3>
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
		<li>
				<h3>Swedish</h3>
		</li>
		<li>
				<h3>English</h3>
		</li>
		<li>
				<h3>Google Analytics</h3>
				<a href="https://www.google.com/partners/#p_certification_html;cert=3">Google Analytics certified</a>
		</li>
		<li><h3>Photoshop</h3></li>
		<li><h3>ADobe Premier</h3></li>
		<li><h3>ADobe Premier</h3></li>
		<li>
				<h3>Programming languages</h3>
				<p>PHP</p>
				<p>Javascript</p>
				<p>Java</p>
				<p>C++</p>

		</li>
		<li>
				<h3>Other</h3>
				<p>HMTL markup language</p>
				<p>CSS</p>
				<p>SASS</p>
				<p>SQL</p>
				<p>Node.js</p>
				<p>Angular.js</p>
				<a href="https://github.com/alienwizard">Git</a>
				<p>Grunt</p>
		</li>

	</ul>
</div>
</div>
<div class="right-contact">
<img src="<?php bloginfo('template_url');?>/img/johan2.jpg">
	<?php the_field('kontaktuppgifter'); ?>
	<a class="print" href="#" onclick="window.print();"><i class="fa fa-print" aria-hidden="true"></i><p>Skriv ut CV</p><div class="clearfix"></div></a>
</div>

<div class="clearfix"></div>

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