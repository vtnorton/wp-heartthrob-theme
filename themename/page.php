<?php 
	get_header(); 
		if (have_posts()) : while (have_posts()) :
				the_post(); ?>
				<article class="container">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</article>
			<?php endwhile; endif; 
	get_footer(); 
?>
