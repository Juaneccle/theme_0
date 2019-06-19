<div class="espacio"></div>
<div class="menu-sidebar">
<?php wp_nav_menu(array(
  'theme_location' => 'Menu secundario Sidebar',
  'container' => 'div',
  'container_class' => 'collapse navbar-collapse',
  'container_id' => 'navbarTogglerDemo01',
  'items_wrap' => '<ul class="navbar-nav mr-auto mt-2 mt-lg-0">%3$s</ul>',
  'menu_class' => 'nav-item'
) ); ?>
</div>
<div class="contenedor-sideBar">
  <div class="lista">
    <ul class="organizador-sideBar">
      <div class="separador-de-contenido"></div>
      <li>
        <a href="#" class="hvr-forward">Nosotros</a>
      </li>
      <li>
        <a href="#" class="hvr-forward">Donaciones</a>
      </li>
      <li>
        <a href="#" class="hvr-forward">Artistas</a>
      </li>
      <li>
        <a href="#" class="hvr-forward">Directores</a>
      </li>
      <li>
        <a href="#" class="hvr-forward">Contactos</a>
      </li>
      <li>
        <a href="#" class="hvr-forward">Nosotros</a>
      </li>
      <div class="separador-de-contenido"></div>
    </ul>
  </div>

  <form class="form-inline">
    <div class="form-group mx-sm-3 mb-2">
      <button type="submit" class="btn btn-primary mb-2">Buscar</button>
      <label for="inputPassword2" class="sr-only">Password</label>
      <input type="password" class="form-control" id="inputPassword2" placeholder="¿que buscas?">
    </div>
  </form>
</div>
