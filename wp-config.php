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
define( 'DB_NAME', 'test_wordpress' );

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
define( 'AUTH_KEY',         '[81i9BkQa) =^%d%89SR=OwE02UyV)0C^kC{,nej+?BVaej}_p]rA6sXts+.b$6b' );
define( 'SECURE_AUTH_KEY',  '< ,8GQ&Nz$`eQ=JAbG)MFemYaufCT#VYEAp7oaD3NpE7iCWJ`wXQR!sm cfT_k@6' );
define( 'LOGGED_IN_KEY',    'M*Tz|N*K6c{aY&uSvV$jvS B5ToNSo`!YG!0S!@kN{I.[9|pn1rw#}]2l1FT!dU?' );
define( 'NONCE_KEY',        '[;4/@d=ZsJ}LdA|8``X)xps=0a7gsDk(E2ddhf^rH_0l2?9BDGMyzC?Ka.7}#HV6' );
define( 'AUTH_SALT',        'uh-Dq.7^r+B~jwGW^$j/^]s;Iqu:;r6n?Cw5zfXjQ>RFg%1HRDK_SN=lc>6R-e9Z' );
define( 'SECURE_AUTH_SALT', 'AERe)0DQ6$cODq0@?hWw]H8aa_U8v%;2j ,ZPq}=Yy7e~YH3u#% `Jt,^*v=+iMm' );
define( 'LOGGED_IN_SALT',   'm!E_nooP }nB&^@z~7+%GiMbMppL((whfM^lWPIC!eyxw$(d]9X0t%SF9CVuRJ.N' );
define( 'NONCE_SALT',       '&g%B/+_rF+7T|;[W:sBkgG![I9bTMI}K+Scox,)!Q[!,g2*=f_4<y8?lE!FoO}n4' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
