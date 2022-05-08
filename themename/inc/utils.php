<?php
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 3);
	function special_nav_class ($classes, $item) {
		if (in_array('current-menu-item', $classes) ){
			$classes[] = 'active ';
		}
		return $classes;
	}

	add_filter('get_the_archive_title', function ($title) {
			if(is_category()) {
					$title = single_cat_title('', false);
			}else if(is_tag()){
					$title = single_tag_title('', false);
			}
			return $title;
	});

	function wp_first_paragraph_excerpt($id = null) {
		if( !$id ) {
				global $post;
				$id = get_the_id();
		}
		$content = get_post_field( 'post_content', $id );
		$content = apply_filters( 'the_content', strip_shortcodes( $content ) );

		$excerpt = strip_tags( $content, '<p></p>' );

		$excerpt = force_balance_tags( $excerpt );
		$excerpt = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $excerpt );
		$excerpt = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $excerpt );
		$excerpt = substr( $excerpt, 0, strpos( $excerpt, '</p>' ) + 4 );
		$excerpt = strip_tags( $excerpt );

		$pos = strpos($excerpt, '.');
		if($pos === false) {
				return $excerpt;
		} else {
				return substr($excerpt, 0, $pos + 1);
		}
	}

	function vtn_get_cast_cover($id) {
		$url = get_the_post_thumbnail_url( $id, 'full' );
	}
?>