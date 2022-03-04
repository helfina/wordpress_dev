<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'gk_wordpress_dev' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`[g^]Ob59[yQXMq)04__D]~k,sLSy]?~rL]DO:P!HKE5YwraIEf{||9!wtSCA0d(' );
define( 'SECURE_AUTH_KEY',  '2b-Zmbs%V=!Bj(hUk9hY**M.eA$<3%$vk2AR^UX(|o5%;j~_zxwpd/3hvP-JW<~b' );
define( 'LOGGED_IN_KEY',    '?5(H`+e >7D(PY>Rj3O%V~@O)h3fUtZ5)=8GbFs%2,|up}sEK]m4)cnRRN1?]iN2' );
define( 'NONCE_KEY',        '13N;C}|i%hQc7G.UfFMXd#n^k0}w<@sCFxETVnnNdl>~*+P6d@EP@-*csTvbI.i>' );
define( 'AUTH_SALT',        '3r_8^_G]pbizZ&2`Mxo7l!SkePDj[/~>t /,Tl<|R(l+JjeY[W#ee,j<&6~N1^Co' );
define( 'SECURE_AUTH_SALT', 'acOaU;7vMpv_v7ErNdrB`0[Rq8dn!%U9f,YB{Dh5oV=|?D2)U=>-eGr1WjYtVU.H' );
define( 'LOGGED_IN_SALT',   'e%U. <n#i,VsSxkYL;Ck}sObO q(#{I^:lS2{^>b>S+KkB*^w0**=BBT?q)OS5B8' );
define( 'NONCE_SALT',       'Eli6%JD-(0*Ki9PxdT(g-TE#YRh..)YUCsOO&$~,_6dr{U5oLODA 2Mf({C,YrIB' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
/*!TODO remettre a false quand on le met en prod*/
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
