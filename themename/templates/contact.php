<?php
     /* 
    Template Name: Contact
    */
?>
<?php get_header(); ?>
	<article class="conteudo">
		<h1><?php the_title(); ?></h1>
		<div class="row">
			<div class="col-md-6">
				<h2>TALK TO US:</h2>
				<?php echo do_shortcode('[contact-form-7 id="365" title="Página de contato (en)"]'); ?>
			</div>
			<div class="col-md-6">
				<h2>HOW TO GET</h2>

				<div class="responsive-youtube" style="padding: 0 0 80%">
					<iframe src="https://www.google.com/maps/embed" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				
				<div class="space-long"></div>
				<p><i class="fa-solid fa-envelope"></i>email adress</p>
				<p><i class="fa-solid fa-phone"></i>+55 phone</p>
				<p><i class="fa-solid fa-location-dot"></i>address</p>
		</div>
	</article>
<?php get_footer(); ?>