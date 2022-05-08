<div class="post-item item">
	<?php if(!empty(get_the_post_thumbnail_url())) : ?>
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
	<?php endif; ?>
	<a href="<?php the_permalink(); ?>">
		<h1><?php html_entity_decode(the_title()); ?></h1>
	</a>
	<small>
		<i>
			<?php echo "Escrito por " . get_the_author() . " em " . get_the_date(); ?>
		</i>
		<br />
		<?php
			$terms = get_the_category();
			$categories = '';
			if ( ! empty($terms) ) {
				$i = 0;
				$terms_out = array();
				foreach ( $terms as $term ){
					$terms_out[] = '<a href="' .esc_url(get_category_link( $term->term_id ) ).'">'.esc_html($term->name).'</a>';
					if (++$i == 3) break;
				}
				$categories .= join( ', ', $terms_out );
			}
		?>
		<i><?php echo $categories; ?></i>
	</small>
	<p><?php echo wp_first_paragraph_excerpt($post->ID) ?></p>
	<div class="flexible"></div>
	<a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Continue lendo</a>
</div>