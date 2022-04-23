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
?>