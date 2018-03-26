<?php

    // Assign file paths to PHP constants
    // __FILE__ returns the current path to this file (initialize.php)
    // dirname() returns the current path to the parent directory
    define('PRIVATE_PATH', dirname(__FILE__)); // 'private' directory
    define('PROJECT_PATH', dirname(PRIVATE_PATH)); // project root directory
    define('PUBLIC_PATH', PROJECT_PATH . '/public'); // 'public' directory
    define('SHARED_PATH', PRIVATE_PATH . '/shared'); // 'private/shared' directory

    require_once('functions.php');


?>