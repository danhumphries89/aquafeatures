<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title> <?php wp_title('|', true, 'right'); bloginfo( 'name' ); ?> </title>

<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/fonts.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/base.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js"></script>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/flexslider/jquery.flexslider-min.js"></script>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/flexslider/flexslider.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<?php
		//load the images needed for the slider
		if($handle = opendir('sliderImages')){
			while(false !== ($entry = readdir($handle))){
				if(strlen($entry) > 3){
					$items[] = $entry;
				}
			}
			closedir($handle);
		}
	?>
	<header class="main_header wrapper" id="top">
		<h1 class="title"> 
			<a href="localhost:8888/aquafeatures/" title="<?php bloginfo( 'name' ); ?>">
				<span><?php bloginfo('name'); ?></span>
			</a>
		</h1>

		<div class="menu_container">
			<?php wp_nav_menu( array('menu' => 'mainmenu' )); ?>
		</div>
	</header>

	<div class="content-list">
	<?php foreach($items as $key=>$item) : ?>

			<li id="page<?php echo $key; ?>" style="background-image: url(sliderImages/<?php echo $item; ?>);" class="sliderImage">
				<h2>Testing</h2>
			</li>
	<?php endforeach; ?>
	</div>