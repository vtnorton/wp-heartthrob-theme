<?php get_header(); ?>
<?php 
	$paged = 1;

  if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
  elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
?>
<div class="conteudo">
  <div class="container posts">
    <?php 
      $args = array(
        'posts_per_page'    => 12,
        'order'             => 'date',
        'paged'             => $paged
      );
      $query = new WP_Query($args);
    ?>
    <?php if ($query->have_posts()) : ?>
      <?php while($query->have_posts()): $query->the_post(); ?>
        <?php get_template_part('partials/post','item'); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <div class="conteudo text-center">
    <div class="row">
      <div class="col-md-12">
        <div id="pagination" class="hide">
          <?php echo paginate_links(array(
            'current' => $paged,
          )); ?>
        </div>
        <div class="load-more-text">Carregando mais...</div>
        <div class="load-more-text-no hide">Não há mais itens.</div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
