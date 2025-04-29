<?php
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));
define('DB_USER', getenv('WORDPRESS_DB_USER'));
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix = 'wp_';

// ✅ Active la possibilité de créer un réseau multisite via l'interface WordPress
define('WP_ALLOW_MULTISITE', true);
// ✅ Active le mode multisite (Delete avant 'linstallation)
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost:7000' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

// ✅ A delete avant l'installation
define( 'AUTH_KEY', 'V.4Tm3Cc(G(6p(WZDj7*SM^4#t{v/t &^:MM$`#nbLGvB%FQI5q|H!+9M+cNm{4=' );
define( 'SECURE_AUTH_KEY', 'st<i[yp|<E;ua_|e|-`juNF`=Fd2ZlJGk#yeV-[o%h)W{C5FV6TME5J(-8P$~W2o' );
define( 'LOGGED_IN_KEY', 'NgP@AjZ}qYCQ6#SS{dg@q<nm$FWN5l1|8]gB`.3lbP]jeW@+%d6f@W>q~,S9/K%2' );
define( 'NONCE_KEY', 'N;]f9;gGp-|;ckAN,DbW$pR.KO}9%h8c|=NbHD@9n||R$QpE*1GO?|olok plt+}' );
define( 'AUTH_SALT', 'V/P_:Vh-TscD-;lA $.cqSrIE8kHfhaDeSKzK?WAVA:=Rc_K,3J+vw$C{S-A+juV' );
define( 'SECURE_AUTH_SALT', '9xrg/dH!D*_Uu9kIeQapDp3.R<>[14x6)!Hi[8ztcR[xsS|$O(;{GdI=OTC.tK1R' );
define( 'LOGGED_IN_SALT', '3Hxn=;+<w@n3x!DgVe^^z[K/Z%mjA^q`ThZR1`#,%0_/|Kc/ *{l=2$_7,Se| !_' );
define( 'NONCE_SALT', 'F7?F7MwF7J3z5s@1hHf[c|_+Er+2_Li5A|H-uw0:-7:G>|;c-~CW+`a.nOf%vvKB' );

// Augmenter la mémoire PHP pour éviter les erreurs de restauration WPvivid
@ini_set( 'memory_limit', '2048M' );
// define('WP_DEBUG', true);
// Chemin absolu vers WordPress
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
