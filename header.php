<!DOCTYPE html>
<html lang="lt">

<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>geramada</TITLE></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all"/>
	
	<script type='text/javascript' src='jquery.js'></script>
		
	<?php wp_head(); ?>
</head>
	
<body>
	<header class="header">
		<nav>
			<ul>
				<li><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></li>
			</ul>
		</nav>
	</header>
	
	<main>