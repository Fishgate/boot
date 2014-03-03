<?php

/**
 * General project variables, pretty much included on every page
 * 
 * @author Kyle Vermeulen <kyle@source-lab.co.za>
 */

define('DB_HOST',         '');
define('DB_USERNAME',     '');
define('DB_PASSWORD',     '');
define('DB_USERS_TABLE',  '');

/**
* Autoloader to initiate classes
*/
function __autoload($className) {
    require_once "./Classes/$className.php";
}

?>
