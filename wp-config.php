<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'WP-woocommerce-test');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '5+g)unb6=J!}10vml]MXKQ`(*W05X*6tf04iA[HC# _87Z$snBJBByyEr&9/CHu:');
define('SECURE_AUTH_KEY', '&VIEY_(w?XNIrJ~op}nyW3~Lbd$9/G(S^Js>%`IDtZepXo{AL&SGg4>WRUg6UlJ!');
define('LOGGED_IN_KEY', '~D,RYO_G5yHRE:T^nk(Z.mkecat.X7?&&3U,t::2D2[GYP6zC}s$pKFz?G$kkyzx');
define('NONCE_KEY', '*70.`/[Q?/8j-d4,mzOfU;0vFBq!kJVd ?tDZzZrY{<?Bu&?bE}s*5>-#i3y[Isk');
define('AUTH_SALT', '[W]+;)(q0vTV#z.+.2=<=)X/%7A`i0g3rs$t^.,ngAuvpBM>OG[)&t,10<}V8/4y');
define('SECURE_AUTH_SALT', 'ul`(OO{0.<dlVVPw,CJ.^zV,;aesvZoH*Gl;r#sjyUT-XO1efQI?`_>./26^&;>>');
define('LOGGED_IN_SALT', 'C@$bNg)a-f<]a=-mDb-h_q)]@NsPPsZ.,:71s9us6`s][{ZU mhs<`AtdN0`gIgW');
define('NONCE_SALT', 'TqQ<p6wf+BMI;iudDc?I2QuU=hej, -g`#Wah_%p.13ZwD|F=LvGQ4uY}7#WB?sX');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

