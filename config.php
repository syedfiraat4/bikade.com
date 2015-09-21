<?php

@ini_set('upload_tmp_dir',dirname(__FILE__).'/oc-content/tmp'); if ( @ini_get('session.save_handler') === 'files' ) @ini_set('session.save_path',dirname(__FILE__).'/oc-content/tmp');

/**
 * The base MySQL settings of OSClass
 */
define('MULTISITE', 0);

/** MySQL database name for OSClass */
define('DB_NAME', 'i1148624_osc1');

/** MySQL database username */
define('DB_USER', 'i1148624_osc1');

/** MySQL database password */
define('DB_PASSWORD', 'W]Gb@~~qKa70~(6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Table prefix */
define('DB_TABLE_PREFIX', 'osc_');

define('REL_WEB_URL', '/');

define('WEB_PATH', 'http://bikade.com/');

?>