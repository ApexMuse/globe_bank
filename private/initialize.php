<?php

    // Assign file paths to PHP constants
    // __FILE__ returns the current path to this file (initialize.php)
    // dirname() returns the current path to the parent directory
    define('PRIVATE_PATH', dirname(__FILE__)); // 'private' directory
    define('PROJECT_PATH', dirname(PRIVATE_PATH)); // project root directory
    define('PUBLIC_PATH', PROJECT_PATH . '/public'); // 'public' directory
    define('SHARED_PATH', PRIVATE_PATH . '/shared'); // 'private/shared' directory

    // Assign the root URL to a PHP constant
    // * Do not need to include the domain
    // * Use same document root as web server
    // * Can set a hardcoded value:
    //      define('WWW_ROOT', '/globe_bank/public');
    //      define('WWW_ROOT', '');
    // * Can dynamically find everything in URL up to "/public"
    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define('WWW_ROOT', $doc_root);

    require_once('functions.php');


?>