<?php
error_reporting( E_ALL );
ini_set('display_errors', 1);


$SRVROOT = __DIR__.'/';
$WEBROOT = dirname($_SERVER['PHP_SELF']).'/';

function IMPORT($File) {
    global $SRVROOT;
    require_once $SRVROOT.$File;
}

IMPORT('config.php');
IMPORT('include/classes/class.php');
IMPORT('style/header.php');
IMPORT('style/content.php');
IMPORT('style/footer.php');


