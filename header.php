<!DOCTYPE HTML>
<html <?php language_attributes(); ?> >
	<head>
	<meta charset=" <?php bloginfo('charset'); ?> ">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			<?php wp_title('|', true, 'right'); ?>
			<?php bloginfo('name'); ?>
		</title>

	<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> >

	<div class="wrapper">

		<header class="mainHeader">
			<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url')?>/logo.png" title="<?php bloginfo('name');?>"></a>
			
			
				<?php

					// Huvudmenyn
					wp_nav_menu([
					'theme_location' => 'headerMenu',
					'container' => 'nav',
					'container_class' => 'mainMenu',
					]);

				?>
			
		<div class="clearfix"></div>
		
		</header>