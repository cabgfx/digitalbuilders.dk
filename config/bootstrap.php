<?php
if ($_SERVER['REMOTE_ADDR']=='127.0.0.1' || $_SERVER['REMOTE_ADDR']=='10.211.55.3' || ereg("^192", $_SERVER['REMOTE_ADDR']) ) {
    require_once 'environments/development.php';

} elseif ($_SERVER['SERVER_NAME']=='db.dukeux.com') {
    require_once 'environments/staging.php';    

} else {
    require_once 'environments/production.php';
}

define('DB_NAME',     $WP_ENVIRONMENT['db_name']);
define('DB_USER',     $WP_ENVIRONMENT['db_user']);
define('DB_PASSWORD', $WP_ENVIRONMENT['db_password']);
define('DB_HOST',     $WP_ENVIRONMENT['db_host']);

define('WPLANG',      $WP_ENVIRONMENT['wp_lang']);

define('WP_DEBUG',    $WP_ENVIRONMENT['wp_debug']);

define('WPBP_ENV',    $WP_ENVIRONMENT['name']);
?>