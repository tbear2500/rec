

<?php

    $DEBUG = true;

    if ($DEBUG) {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }

    define('SITE_ROOT', '/rec');

    include (__DIR__."/db.php");

?>
