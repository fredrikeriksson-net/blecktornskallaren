<?php get_header(); ?>

<?php 
if( have_posts() ):
	while( have_posts() ):
		the_post(); 
?>

<section class="content">

	<h2>
		<a href="<?php the_permalink(); ?> "> <?php the_title(); ?></a>
	</h2>
			
	<p><?php the_content(); ?></p>

</section>

<?php
	endwhile;
	else:
	echo "<p> Page är tom </p>";
	endif;
?>

<?php get_footer(); ?>
