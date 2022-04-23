<header>
	<div class="container">
		<ul class="social"> 
			<li><a href="#" target="_blank" title="youtube" class="youtube"><i class="fa-brands fa-youtube"></i></a></li>
			<li><a href="#" target="_blank" title="linkedin" class="linkedin"><i class="fa-brands fa-linkedin"></i></a></li>
			<li><a href="#" target="_blank" title="soundcloud" class="soundcloud"><i class="fa-brands fa-soundcloud"></i></a></li>
			<li><a href="#" target="_blank" title="instagram" class="instagram"><i class="fa-brands fa-instagram"></i></a></li>
		</ul>
		<?php 
			// TODO: Add search form
			wp_nav_menu(array( 
				'theme_location' 		=> 'lang-nav',
				'menu_class' 				=> '', 
			)); 
		?>
	</div>
	<div class="container">
		<a href="<?php echo get_home_url(); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
		</a>
		<?php wp_nav_menu(array( 
			'theme_location' 		=> 'main-nav',
			'container' 				=> 'nav',
			'menu_class' 				=> '', 
		)); ?>
	</div>
</header>
