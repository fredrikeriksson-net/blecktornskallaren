<?php 
//Custom template
/*
Template name: Sidebar
*/

get_header(); ?>

<?php 
if( have_posts() ):
	while( have_posts() ):
		the_post(); 
?>

<section class="sidebar">
	
	
<?php

					//wp_list_pages();
					wp_nav_menu([
					'theme_location' => 'sidebarMenu',
					'container' => 'nav',
					'container_class' => 'sideMenu',
					]);

				?>
	
</section>

<section class="content_page">

	<h2>
		<a href="<?php the_permalink(); ?> "> <?php the_title(); ?></a>
	</h2>
			
	<p><?php the_content(); ?></p>

</section>

<?php
	endwhile;
	else:
	echo "<p> Sidebar är tom </p>";
	endif;
?>


<div class="clearfix"></div>
	
<?php get_footer(); ?>
