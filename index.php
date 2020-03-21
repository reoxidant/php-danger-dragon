<?php
require_once(__DIR__.'/lang/install.php');
require_once(__DIR__.'/config.php');
require_once(__DIR__.'/lib.php');
//classes
require_once(__DIR__.'/classes/Map.php');

require_once 'templates/header.php';
require_once 'templates/content.php';
require_once 'templates/footer.php';

checkErrors($ERRORS);
?>