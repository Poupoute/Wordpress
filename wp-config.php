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
define( 'DB_NAME', 'justinebaillet' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'justine.baillet' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'bRuprV6B' );

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
define( 'AUTH_KEY',         'HiqJTs8E=Q#j_6q`0TO0s#dhTc~Xw@#UQ^SsG&q70.Iw#:KPfj`DRP1U-bZeI7+Q' );
define( 'SECURE_AUTH_KEY',  'U0o|7u},8@#GD(U`TNmxG&Ecg1# O-tH+!aeZO;I!^%-*}j>_nxeCnCSxoz DtiI' );
define( 'LOGGED_IN_KEY',    '(,}SX;y<B=(@Z}?dFfCzkwt~vZ.jz&zqX[-h+i51r{{ZqwxWY@},)@wyp9xmk>`5' );
define( 'NONCE_KEY',        '=q1,|d35&$`(KPdKcPOc ~:.eAcsm+F:8cQt7c:q*qY|{hNkLN+s#H:~oa6B^5uB' );
define( 'AUTH_SALT',        'T7e&7!@S@h j=fVA]jm!qneUH|Pd9%[AJB+Q3WjrRXi=7&2;p7P4;+|]6o)P:o1g' );
define( 'SECURE_AUTH_SALT', 'LA4_#19@!jxO>&3*6QIV/~EaY+{U7d]>=_KAyNa%J,S=|Z{ w]78,( 98&(VJ21r' );
define( 'LOGGED_IN_SALT',   'LCR:80!&/%1drNslw$1nV&Nno_oq!4B-@-?O|tAoXgDLxkQ@]oaaO{*D?he_ L,V' );
define( 'NONCE_SALT',       'VTD7fE+;E;X%(`lhTbd9#|T?(CNTL|V{m$G?a|CPIWUuqD{Jgs-v=&?Z1Gh7pTRa' );
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
