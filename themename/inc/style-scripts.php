<?php 
	add_action( 'wp_enqueue_scripts', 'style_scripts' );
	function style_scripts() {
		wp_enqueue_style('heartthrob', get_template_directory_uri() . '/framework/heartthrob/heartthrob.css');
		wp_enqueue_style('heartthrob', get_template_directory_uri() . '/framework/heartthrob/heartthrob.grids.css');
		wp_enqueue_style('jqModal', get_template_directory_uri() . '/framework/jqModal/jqModal.css');
		wp_enqueue_style('fontawesome', get_template_directory_uri() . '/framework/fontawesome/css/all.min.css');
		wp_enqueue_style('fontawesome-brands', get_template_directory_uri() . '/framework/fontawesome/css/brands.min.css');
		wp_enqueue_style('owl-carousel-style', get_template_directory_uri() . '/framework/owl.carousel/assets/owl.carousel.min.css');
		wp_enqueue_style('owl-theme', get_template_directory_uri() . '/framework/owl.carousel/assets/owl.theme.default.min.css');
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

		wp_enqueue_script('filterable', get_template_directory_uri() . '/framework/filter/js/filterable.min.js', array('jquery'), '1.10', true);
		wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/framework/owl.carousel/owl.carousel.min.js', array('jquery'), '1.0', true);
		wp_enqueue_script('jqModal', get_template_directory_uri() . '/framework/jqModal/jqModal.min.js', array('jquery'), '1.0', true);
		wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);
	};
?>