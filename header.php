
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/main.css" />
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/aos.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../bootstrap/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="<?php bloginfo('template_url'); ?>/assets/js/ie-emulation-modes-warning.js"></script>

		<!--<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


		    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		  	<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
		  	<link href="css/embededTypes.css" rel="stylesheet" type="text/css">
		    <link href="css/main.css" rel="stylesheet" type="text/css">
		  	<link rel="stylesheet" type="text/css" href="styles.css">
		    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		    <link rel="stylesheet" href="/resources/demos/style.css">
				<link rel="stylesheet" href="aos.css">

		    <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
		    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
				<script src="https://code.jquery.com/jquery-3.4.0.js"></script>

		  	<link href="css/main.css" rel="stylesheet" type="text/css">


	<?php
    wp_get_archives('type=monthly&format=link');
    wp_head();
  ?>

	<script src="https://code.jquery.com/jquery-3.4.0.js"></script>
	<script src="<?php bloginfo('tameplate_url')?>/assets/js/aos.js"></script>
	<script type="text/javascript">
			AOS.init();
	</script>

</head>

<header>


	<nav class="navbar-header navbar navbar-expand-md navbar-dark fixed-top icono"></a>
		<nav class="navbar-header navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php wp_nav_menu(array(
				'theme_location' => 'Paginas',
				'container' => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id' => 'navbarTogglerDemo01',
				'items_wrap' => '<ul class="navbar-nav mr-auto mt-2 mt-lg-0">%3$s</ul>',
				'menu_class' => 'nav-item'
			) ); ?>


	<!--		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="#">Hidden brand</a>
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
			 -->
		</nav>
	</nav>


</header>
