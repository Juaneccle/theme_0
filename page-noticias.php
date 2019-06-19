<?php

/*
Template Name: template noticias
*/
 ?>

<?php
  get_header();
 ?>

    <div class="row">
      <h2 class="titulo-pag-noticia"><?php the_title(); ?></h2>

    </div>

  <div class="container">
    <?php
      // LLamar a los post del apartado Nosotros
      $args = array (
        'post_type'              => array( 'Noticia' ),
        'post_status'            => array( 'publish' ),
        'order'                  => 'ASC',
        'posts_per_page'         => '5',
      );
      // The Query
      $noticias = new WP_Query( $args );
      // The Loop
      if ( $noticias->have_posts() ) {
        while ( $noticias->have_posts() ) {
          $noticias->the_post();?>

          <div class="row">
            <div class="card text-center card-noticias hvr-underline-from-center">
              <div class="card-header">
              </div>
              <div class="card-body card-body-noticia">




                <h5 class="card-title titulo-carta-noticia"><?php the_title(); ?></h5>
                <p class="card-text"><?php the_content(); ?></p>
                <a href="<?php the_permalink();?>" class="btn btn-primary boton-noticias">Ver mas...</a>
                <?php
                // if ( has_post_thumbnail() ) {
                //   the_post_thumbnail('post-thumbnails', array( 'class' => 'img-noticias-wp'));}
                //
                ?>
              </div>
              <div class="card-footer text-muted text-footer-noticias">

                <p> <?php echo the_date(); ?> </p>
                <p> <?php echo the_author(); ?> </p>
                <p> <?php echo the_category(); ?> </p>

              </div>
            </div>
          </div>

          <?php
              }
            } else {
              // no posts found
            }
            // Restore original Post Data
            wp_reset_postdata();
    ?>

    </div>

 <?php
   get_footer();
  ?>
