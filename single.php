<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */

  get_header();?>

  <nav class="sideBar-categorias fixed-top">
    <div class="cont-side-cat">
      <div class="separador-side-cat"></div>
      <p class="hvr-forward texto-side-cat">Nevos</p>
      <p class="hvr-forward texto-side-cat">Más populares</p>
      <p class="hvr-forward texto-side-cat">Con más subscriptores</p>
      <p class="hvr-forward texto-side-cat">Más barato</p>
      <p class="hvr-forward texto-side-cat">Más caro</p>
      <p class="hvr-forward texto-side-cat">Drama</p>
      <p class="hvr-forward texto-side-cat">Terror</p>
      <p class="hvr-forward texto-side-cat">Comedia</p>
      <p class="hvr-forward texto-side-cat">Romance</p>
    </div>
  </nav>

<div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="row justify-content-md-center">
    <div class="col-md-8 imagen-single">
      <?php
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('post-thumbnails', array( 'class' => 'img-directores-wp-single'));}
       ?>
    </div>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-md-8 texto-single">
      <?php the_content();?>
      <div class="contenedor-detalles">
        <p class="detalle"> <?php echo get_the_date();?></p>
        <?php the_category(","); ?>
        <p class="detalle"> <?php the_author(); ?></p>
      </div>
    </div>
  </div>
    <?php endwhile; endif; ?>
</div>


<?php get_footer();

?>
