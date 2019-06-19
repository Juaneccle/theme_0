<?php

  /**
  *@desc A page. See single.php is for a blog post layout.
  */

  get_header();?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php  endwhile; else: ?> <?php
  endif;?>

  <div class="row">
    <div class = "col-md-12 par01">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carrusel01">
              <h1 class ="textoCar">Alberto Undurraga</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
              <button type="button" class="btn btn-outline-primary">Primary</button>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carrusel01">
              <h1 class ="textoCar">Alberto Undurraga</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
              <button type="button" class="btn btn-outline-primary">Primary</button>
            </div>
          </div>
            <div class="carousel-item">
              <div class="carrusel01">
                <h1 class ="textoCar">Alberto Undurraga</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <button type="button" class="btn btn-outline-primary">Primary</button>
              </div>
            </div>
        </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
  </div>

<!-- Offser md es la mejor practica para centrar, layaut drid-->

<!--
<nav>
  <?php(
  //  array(
  //    'container' => false,
  //    'items_wrap' => '<ul id="menu_top">%3$s</ul>',
  //    'theme_location' => 'menu'
  //  )); ?>
  </nav>
-->




  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 descripcion">
      <div class="TesxtoTema02">
        <h2>Explora a tu gusto</h2>
        <p class = "descripciones">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="col-md-3"></div>
    <div class = "col-md-12 par02">
      <div class="bloque01">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/donaciones.png">
        <p class = "separador">Donaciones</p>
        <p>450</p>
      </div>
      <div class="bloque01">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/usuarios.png">
        <p class = "separador">Usuarios</p>
        <p>91</p>
      </div>
      <div class="bloque01">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/peliculas.png">
        <p class = "separador">Peliculas</p>
        <p>55</p>
      </div>
      <div class="bloque01">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/directores.png">
        <p class = "separador">Directores</p>
        <p>87</p>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="container">
      <div class="descripcion02">
        <div class="TesxtoTema03">
          <h2 class="aos-init aos-animate" data-aos="fade-zoom-in">Explora a tu gusto</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="imagenFadeIn">
          <div class="aos-init aos-animate" data-aos="fade-zoom-in">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/fadeIn.png">
          </div>
        </div>
      </div>
      <div class="tituloCont03">
        <div class="hvr-underline-from-center">
          <h2 class="hvr-underline-from-center">Nuevos directores</h2>
        </div>
      </div>

      <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">


            <?php
              // WP_Query arguments
              $args = array (
                'post_type'              => array( 'noticia' ),
                'post_status'            => array( 'publish' ),
                'order'                  => 'ASC',
                'posts_per_page'         => '5',
              );

              // The Query
              $noticias = new WP_Query( $args );
              $active=0;
              // The Loop
              if ( $noticias->have_posts() ) {
                while ( $noticias->have_posts() ) {
                  $noticias->the_post();?>

                  <!-- INICIO CARRUSEL -->
                  <div class="carousel-item <?php if($active==0){echo 'active';} ?>">
                    <div class="carrusel02">
                      <!-- <p class="textoCar02"><?php the_post_thumbnail('medium') ?></p> -->
                      <h2 class="titulo-noticias">
                      <?php the_title(); ?>
                      </h2>
                      <?php the_excerpt(); ?>
                    </div>
                  </div>
                    <?php
                    $active++;
                    }
                  } else {
                    // no posts found
                  }

                  // Restore original Post Data
                  wp_reset_postdata();
                ?>
        </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
        </div>
  </div>




    <div class="row">
      <div class="col-md-12">
        <div class="backgrounCont03">
          <div class="tituloCont03">
            <div class="container">

            <h2 class="hvr-underline-from-center">Nuevos directores</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class = "col-md-12 cont3">

      <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
        <div class="">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
        </ol>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card" style="width: 18rem;">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/director01.png" class="card-img-top">
              <div class="card-body hvr-underline-from-center">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/director02.png" class="card-img-top">
              <div class="card-body hvr-underline-from-center">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/director03.png" class="card-img-top">
              <div class="card-body hvr-underline-from-center">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/director04.png" class="card-img-top">
              <div class="card-body hvr-underline-from-center">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
      <div class="carousel-item">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/director05.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/director02.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/director01.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/director03.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/director04.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/director05.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/director01.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/director02.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

<div class="test">
  
</div>

 <?php get_footer();
?>
