<?php

mb_internal_encoding('UTF-8');

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'sys/autoload.php';
require 'controllers/BankController.php';

spl_autoload_register('__autoload');

$_SETTINGS = parse_ini_file("sys/settings.ini", true);

?>