<?php
  get_header();
 ?>
 <div class="container imagen-nosotros">
   <div class="row">
       <?php
       if ( has_post_thumbnail() ) {
         the_post_thumbnail('post-thumbnails', array( 'class' => 'thumnail-nosotros'));}?>
    </div>
</div>

<div class="container contenedor-scroll-nosotros">
  <nav id="navbar-example2" class="navbar navbar-light bg-light">
  <a class="navbar-brand brand-nosotros" href="#">Nosotros</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link nav-link-nosotros" href="#fat">Contactanos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-link-nosotros" href="#mdo">Trayectoria</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle dropdown-toggle-nosotros" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mas...</a>
      <div class="dropdown-menu dropdown-menu-nosotros">

        <?php
          // LLamar a los post del apartado Nosotros
          $args = array (
            'post_type'              => array( 'Nosotros' ),
            'post_status'            => array( 'publish' ),
            'order'                  => 'ASC',
            'posts_per_page'         => '5',
          );
          // The Query
          $postNosotros = new WP_Query( $args );
          // The Loop
          if ( $postNosotros->have_posts() ) {
            while ( $postNosotros->have_posts() ) {
              $postNosotros->the_post();?>
              <a class="dropdown-item dropdown-item-nosotros" href="#one"><?php the_title() ?></a>
              <?php
                  }
                } else {
                  // no posts found
                }
                // Restore original Post Data
                wp_reset_postdata();
        ?>
      </div>
    </li>
  </ul>
</nav>
<div class="textos-nosotros" data-spy="scroll" data-target="#navbar-example2" data-offset="0">
  <!-- <h4 id="fat">Contacanos</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <h4 id="mdo">Trayectoria</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.2</p>
  <h4 id="one">Equipo</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <h4 id="two">Auspiciadores</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <h4 id="three">Ubicación</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->

    <?php
      // LLamar a los post del apartado Nosotros
      $args = array (
        'post_type'              => array( 'Nosotros' ),
        'post_status'            => array( 'publish' ),
        'order'                  => 'ASC',
        'posts_per_page'         => '5',
      );
      // The Query
      $postNosotros = new WP_Query( $args );
      // The Loop
      if ( $postNosotros->have_posts() ) {
        while ( $postNosotros->have_posts() ) {
          $postNosotros->the_post();?>
          <h4 id="fat"><?php the_title() ?></h4>
          <!-- <?php the_post_thumbnail('medium') ?> -->
          <p class="contenido-temas-nosotros"><?php echo get_the_excerpt(); ?></p>

          <?php
              }
            } else {
              // no posts found
            }
            // Restore original Post Data
            wp_reset_postdata();
          ?>
  </div>
</div>

<?php
  get_footer();
?>
