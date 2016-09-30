<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta name="theme-color" content="#f5deb3">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:300,400,700" rel="stylesheet">
	<link rel="icon" sizes="192x192" href="<?php bloginfo('tempalte_url'); ?>/img/favicon.png">

</head>
<body>
<header>
	<nav>
	<ul>
		<li>
			<a href="<?php bloginfo('url'); ?>">Hem</a>
		</li>
		<li><a href="<?php bloginfo('url'); ?>/referensprojekt">Projekt</a></li>
		<li class="logo"><h3>JW</h3></li>
		<li><a href="<?php bloginfo('url'); ?>/cv">CV</a></li>
		<li><a href="<?php bloginfo('url'); ?>/kontakta-mig">Kontakta mig</a></li>
	</ul>
		
	</nav>

	<div class="responsivemenu">
		<div class="responsivelogo">
		<h3>JW</h3>
	</div>
		<div class="bars">
			<a></a>
		</div>
		<div class="popup">
			<div class="popcontainer">
				<a class="popclose"></a>
				<div class="popmenu">
					<ul>
		<li>
			<a href="<?php bloginfo('url'); ?>">Hem</a>
		</li>
		<li><a href="<?php bloginfo('url'); ?>/referensprojekt">Projekt</a></li>
		<li><a href="<?php bloginfo('url'); ?>/cv">CV</a></li>
		<li><a href="<?php bloginfo('url'); ?>/kontakta-mig">Kontakta mig</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
