
<div class="showcase owl-showcase owl-carousel owl-theme">
	<?php 
		$args = array(
			'post_type' 			=> 'slide',
			'posts_per_page' 	=> 10,
		);

		$slides = new WP_Query($args);
		
		while ($slides->have_posts()) :
			$slides->the_post();
			?>
				<div class="showcase" style="background-image: url(<?php echo get_field('image'); ?>)">
					<div class="conteudo">
						<div class="row">
							<div class="col-md-8">
								<h1><?php the_title(); ?></h1>
								<h3><?php echo get_field('subtitle'); ?></h3>
								<a href="<?php echo get_field('link'); ?>" class="btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
				</div>
			<?php 
		endwhile;
		wp_reset_query();
	?>
</div>