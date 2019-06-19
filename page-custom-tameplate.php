<?php
/*
  Template Name: Custome Name
*/
 ?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
<!-- Primer Post -->


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h2 class="titulo-blog">Novedades</h2>
      <p class="descripcion-blog">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="row">
        <div class="col-md-4 cuerpo-blog">
          <!-- img-directores-wp -->
         <img class="img-directores-wp"src="<?php echo get_template_directory_uri();?>/assets/img/director01.png">
        </div>
        <div class="col-md-8 cuerpo-blog">
          <a href="<?php the_permalink(); ?>"> <h2 class="sub-titulo-blog"><?php the_title(); ?></h2></a>
          <p class="texto-entradas"><?php the_excerpt();?></p>
        </div>
      </div>


      <?php endwhile; endif; ?>

<!-- Segundo Post -->
      <!-- <div class="row">
        <div class="col-md-4 cuerpo-blog">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/director01.png">
        </div>
        <div class="col-md-8 cuerpo-blog">
          <h2 class="sub-titulo-blog">Titulo 01</h2>
          <p class="texto-entradas">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div> -->
<!-- Tercer Post -->
      <!-- <div class="row">
        <div class="col-md-4 cuerpo-blog">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/director01.png">
        </div>
        <div class="col-md-8 cuerpo-blog">
          <h2 class="sub-titulo-blog">Titulo 01</h2>
          <p class="texto-entradas">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div> -->

    </div>
<!-- output_sideBar -->
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<div class="container">
  <div class="enumeracion-pags">
    <div class="contenedor-numeros">
      <div class="hvr-rectangle-in bloque-numero">
        <p class="numero">1</p>
      </div>
      <div class="hvr-rectangle-in bloque-numero">
        <p class="numero">2</p>
      </div>
      <div class="hvr-rectangle-in bloque-numero">
        <p class="numero">3</p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
