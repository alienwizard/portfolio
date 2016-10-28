<?php
/* Template name: CV*/

 get_header(); ?>

<article class="full-page">
<div id="canvas"></div>

<div class="cont-wrap">



<div class="leftInfo">
<h1 class="title">Johan Wendin</h1>
<p class="info">Web developer based in Stockholm with a passion for user interaction and user experience design</p>
<div class="top-section">
<div class="me">

</div>

</div>
<div id="past-experiences">
	<h2>Past Experiences</h2>
		<ul>
				<li>
						<h3>Mediahelp 2014 - (current employment)</h3>
						<p>Web developer, mainly working with HTML, CSS, Javascript and PHP. Also in charge of website design and project management, and Google analytics</p>
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
				<h3>Good understanding of Google Analytics. link to certificate below</h3>
				<a href="https://www.google.com/partners/#p_certification_html;cert=3">Google Analytics certified</a>
		</li>
		<li><h3>Photoshop: </h3></li>
		<li><h3>Basic Knowledge of ADobe Premier. Used in project with friends and in some courses at upper secondary school</h3></li>
		<li>
				<h3>Programming languages</h3>
				<p>PHP mostly in a Wordpress environment</p>
				<p>Very experienced with Javascript, mostly with the Jquery library and React</p>
				<p>basic knowledge of Java from a few courses at school and some small projects at home</p>
				<p>Knowlege of the C++ programming language</p>

		</li>
		<li>
				<h3>Other</h3>
				<p>The HMTL markup language is like the second alphabet of my life. Experience of using a variety of HTML 5 tags and attributes. I have experience building my HTML with Jade.</p>
				<p>CSS and CCS3 usually compiled from a SASS. I have worked with a variety of psuedo elements and other CSS3 features. I always write sites with responsive designs using the CSS3 Media querys</p>
				<p>Currently building all my projects with SASS. Webpack compiles all my SASS into minified css for the browser.</p>
        <p>Very experienced with JQuery. All my projects have Jquery in the front-end</p>
				<p>MySQL with Wordpress and also with </p>
				<p>Experienced with Node.js</p>
				<p>Working knowledge of React. This is currently my favorite technology to work with on my spare time</p>
				<p>Angular.js is nothing i have been using at work, but i think its a exciting technology and i have been doing a few projects at home and getting to know the technology a bit more</p>
        <p>
				<a href="https://github.com/alienwizard">Git</a>
        <p></p>
				<p>Grunt is something that i used alot before as my task runner, but i've recently started using Webpack more and more</p>
        <p>Webpack</p>
		</li>

	</ul>
  <h2>Project</h2>
  <ul>
    <li>
      <h3>Other</h3>
      <p>Arbetet varade mellan maj/juni någon gång till slutet av augusti. Kunden hade själv marknadsfört hemsidan på facebook tidigare och sett resultat från detta och kände nu att de behövde en lite uppfräschning av hemsidan för att kunna driva trafiken till något som ska kunna generera leads! En viktig punk för sidan var att driva trafiken till instagram och få folk kopplade till verksamheten, så att de sedan kan nås enkelt av marknadsföringen. Det ska även vara enkelt att nå säljarna via hemsidan. Den första kontakten med säljarna ska inte vara mer än några klick bort vart du än befinner dig på sidan.</p></li>
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
