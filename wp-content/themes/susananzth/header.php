<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <!-- Sustituyo el 'lang="es"' por ese llamado de wordpress donde obtiene el atributo de lenguaje de la instalación del wordpress. |
         I substitute the 'lang = "is"' for that wordpress call where it gets the language attribute of the wordpress installation-->
		<head>
				<meta charset="<?php bloginfo('charset'); ?>">
		    <!-- Sustituyo el "uft-8" por la función que trae la información de la instalacion de wordpress. |
		    		I substitute the "uft-8" for the function that brings the information of the wordpress installation.-->
		    <meta name="description" content="Empresa de dasarrollo de páginas web, tiendas online con diseño moderno, seguras y profesionales."/>
		    <meta name="author" content="Susana Piñero Rodríguez"/>
		    <meta name="keywords" content="desarrollo web, páginas web, e-commerce, ecommerce, tiendas online, store."/>
		    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
				<link rel="profile" href="http://gmpg.org/xfn/11">
				<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
				<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
				<script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
		    <?php wp_head(); ?>
		    <!-- Aquí llamo los script para cargar y ejecutar todas las funciones de cabecera. |
		         I call the script to load and execute all the header functions.-->
				<title> <?php wp_title(' | ', true, 'right') ?> <?php bloginfo('name'); ?> </title><!-- Susana's Theme WordPress | by Susana Piñero -->
		    <!-- Imprimo el título de wordpress, coloco un separador, verdadero para que se imprima, lo ajusto a la derecha. Con bloginfo, obtengo el titulo de la página. |
		    		I print the wordpress title, I put a separator, true to be printed, I adjust it to the right. With bloginfo, I get the title of the page. -->
		</head>
		<body id="body" <?php body_class(); ?>>
				<?php wp_body_open(); ?>
				<div id="layoutDefault">
						<div id="layoutDefault_content">
								<main>
										<nav class="navbar navbar-marketing navbar-expand-lg bg-transparent navbar-light fixed-top">
												<div class="container">
														<a class="navbar-brand text-white" href="#"></a>
														<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
														<div class="collapse navbar-collapse" id="navbarSupportedContent">
																<ul class="navbar-nav ml-auto mr-lg-5">
																		<?php wp_nav_menu( array(
																			'menu' => 'Menu-principal',
																			'theme_location' => 'header-menu',
																			'depth' => 2,
																			'container' => '',
																			'container_class' => '',
																			'menu_class' => 'nav navbar-nav',
																			'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
																			'walker' => new wp_bootstrap_navwalker())
																		);?>
																</ul>
														</div>
												</div>
										</nav>
