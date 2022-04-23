<div class="testimonies">
	<div class="container">
		<h2><strong>Testimony</strong></h2>
		<div class="owl-testimonies owl-carousel owl-theme">
			<?php 
				$args = array(
					'post_type' 			=> 'testimonies',
					'posts_per_page' 	=> 5,
					'orderby'					=> 'rand'
				);
	
				$testimonies = new WP_Query($args);
				
				while ($testimonies->have_posts()) :
					$testimonies->the_post();
					?>
						<div class="depoimento">
							<div class="pessoa">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="">
								<div class="nome">
									<h3><?php echo get_field('person_name'); ?></h3>
									<h4><?php echo get_field('company'); ?></h4>
								</div>
							</div>
							<p><?php echo get_field('contant'); ?></p>
						</div>
					<?php 
				endwhile;
				wp_reset_query();
			?>
		</div>
	</div>
</div>