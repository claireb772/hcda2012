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
define( 'DB_NAME', 'hcda2012bdd' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'e5>s?[^<D~qXs.>zs|Bj8(U=}3I~zse<rObq_sFrY{riXqJ6fVtS~beC:9MqzUM1' );
define( 'SECURE_AUTH_KEY',  'ga&#iAds ks gmB.)FGO3{2tTK.TprdkOy*RD?+0!^xSNwQooFS|yr@G?</KOiIg' );
define( 'LOGGED_IN_KEY',    'm[~D&o+Sr4C73Ca!F5Z_dgrQ1sx2}XRG_52c-h_%[g>CLh1o>#<.Bme|}9vkt]cD' );
define( 'NONCE_KEY',        'ek9VG`VsNz???[i  Yc@?{:xPQ/<udcO[s{#bq8WH_&<tYf)c<z.JU^]qlIGbj-m' );
define( 'AUTH_SALT',        'FGa}A^fhNa94Hs~gCqqnR}/a^4z[l9R#~dqs,2rIN*lowqacfg@<,T[mN2qxs_z!' );
define( 'SECURE_AUTH_SALT', '91bjbz>rJ/tmv(0.A`P<8;2x+|g0M8SRu_.d4]4)) +U^A;(K;w#&s:u2?g1kh38' );
define( 'LOGGED_IN_SALT',   ' fn#DqDs%Et9|[XUP(0bi,nT0vW4qS+Mr|hdIRP8m4@8QXelwv$`/#c<n$x^4N64' );
define( 'NONCE_SALT',       '#]alNBmDrP`_Sq!*a1E Y~VzNs.wCeGgrGj_*yI`b]Xo1{W[oQld]S&@`yJW$J!8' );
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
