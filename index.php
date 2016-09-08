<?php get_header(); ?>

<?php 
if( have_posts() ):
	while( have_posts() ):
		the_post(); 
?>

	<section class="content">
			
	<h3>
		<?php the_title(); ?>
	</h3>
			
		<?php the_content(); ?>
		
		<p class="post-info">
				<?php the_time("F j, Y - H:i"); ?>

			</p>

	</section>

<?php
	endwhile;
	else:
	echo "<p> Det finns inga aktuella nyheter </p>";
	endif;
?>
		
	

<?php get_footer(); ?>
