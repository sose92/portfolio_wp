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
define( 'DB_NAME', 'portfolio_wp' );

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
define( 'AUTH_KEY',         'Hfz0}sl{*P3Fl@ny#!4BxuQR:#y(}=v/5Hn6*(eXTZ>j[dEeG13f`G2VcXlJ, E~' );
define( 'SECURE_AUTH_KEY',  ' G.Re.8Tan}#IdJ*RF5mH0g2w}fDE>;[BvlN9s6TyFEmkFSNyyK!Go~]{AL!0`M9' );
define( 'LOGGED_IN_KEY',    'a.K68}C-;C-_$Z29h?WQoULvW+HWISN&Rcrpw9I6D{?--@my&0ZI(kvV-ev?7y+P' );
define( 'NONCE_KEY',        'n5PZLaZxU_El36q=h.g{2xf~`&Imq 2}l*1C%}teb~{IaLmJ~J3ezUh@f.p03e#>' );
define( 'AUTH_SALT',        ';Ncc)#{ A<)WSP!$L)4.w4mG%HZRr?%YR,@ql,~Zp=>.v%yH]8_>04D7^#rr_WPz' );
define( 'SECURE_AUTH_SALT', 'Rj;S&ml.6^+n$dt/P)RdEp} (=;CP6X{^SateFYskk#=?`[[`ChbTced}uyk>t@c' );
define( 'LOGGED_IN_SALT',   'GKz+^Wf6=SNnHTVMJ&f39,fm5B|Ax*wlu!{ zSs=+h^1WF{*SuOF[/h=k4gXO9,m' );
define( 'NONCE_SALT',       'puFV04w77w/jNFVHqeX(-z&>Hv-)/pA,!hF]u2BzaP#j(n`xnviPFhf99>JuQdmn' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
