<?php
	function register_menu() {
		register_nav_menu('main-nav', __( 'Menu principal' ));
		register_nav_menu('lang-nav', __( 'Menu de idiomas' ));
	}
	add_action( 'init', 'register_menu' );
?>