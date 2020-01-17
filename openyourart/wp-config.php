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
define( 'DB_NAME', 'openyourart' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'cecile' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'cecilou' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ':56ekad.7 :~HBT%QI7=6u+o.9[; k^R2~zJ`mJ!hQe8h:O6=Ip}y?MNot6<vu%2' );
define( 'SECURE_AUTH_KEY',  '#1u@_isIZzqDZz|rL@r+&sp`xLKkO={-A5ya4/3;1iz#2[Sw;eQ5:&n]-~>`r M!' );
define( 'LOGGED_IN_KEY',    'e S3TB;83$C|HJ[fh^qv`k8,4[TW[+8ymt$niX-Ss*LZs1)5>S1m`rJ%eI58,pXY' );
define( 'NONCE_KEY',        'LV$+OGvWD*VZjldRii/N!!x<zjf>ZOTP;EtA5)CGo_U]V9-),[M:P`R26~9@U:c[' );
define( 'AUTH_SALT',        'c=<&@!NdQso1{}tNiE;+DspT#_X`u<m#i+A*X~Lde$Z]: (1o8oTEYMZmWB*is:$' );
define( 'SECURE_AUTH_SALT', ';zv%,?&Q:kW{^mJ-J-UXPk_IHv*/$g|/:?5ADNRDI@2nekMUo<XRuIKX<jMu.@iI' );
define( 'LOGGED_IN_SALT',   'g<JGzA/6Nj1%v-; [gG()1^#j;}9LqQ&L|+},P8iN]!,UG`$v%#ZoA&O5,T2*_=A' );
define( 'NONCE_SALT',       '2LL u27u3<bAL[wFkTEG]H7sy=ld3I/^ciJhRl]$5}d:U~b6evn6bQ{3{OEj!.pY' );
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
