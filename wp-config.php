<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'lisa_seror');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^MKWFwD$sM2-_ueNtF`NMZNVkeh^b5II,IDt=)7:cF@ObW7tL}[Lu*LS)E91+==H');
define('SECURE_AUTH_KEY',  '3^SA<qSu~Su*WuiP}X[H%iC`=lHIgD1&F3c9tn6dr_3zW vv[V/8P%#0z`xj>dX<');
define('LOGGED_IN_KEY',    'La{#J)3*R&QJqD+{KYxB{TV#)-BaWocH$AY)RQr}.1+.T?cYllB}iF4XJ|N#h<AO');
define('NONCE_KEY',        'XdR-;:l`cCV`izh1uLRm>shtxUb:Jpptfz21VL$J%fH(D-Ec$lFC}=FiHUf9zZ%`');
define('AUTH_SALT',        '1PuP_3y{ps-c/cp#I/|kes1~vZpSgr/<*3Ayl;fl}iMWMtWjp%#BQtu8VeT8RU|,');
define('SECURE_AUTH_SALT', 'Qk>{@$ DM-mt0{pP?*W|Dlgf|9`=fO%0*uEQ7WES&/_}S(/}5|q%<cRq3uL70IR2');
define('LOGGED_IN_SALT',   'Ot6gZ^S`mQTG(YDDXsr=9vZLc?`-dxxX8=]:W&[`%u_U8=u=E[7h(qEx)&63LEYa');
define('NONCE_SALT',       ')8m7-*C0|sGJerv{O531GiUk%]mh4~I:SV1I/r~#kR7G]8r*[_t7+<|`Xn@36,{,');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ls_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');