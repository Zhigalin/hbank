<?php

session_start();

mb_internal_encoding('UTF-8');

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'controllers/AbstractController.php';
require 'sys/autoload.php';

spl_autoload_register('__autoload');

$_SETTINGS = parse_ini_file("sys/settings.ini", true);

require 'sys/environment.inc';
require 'sys/operators.inc';
require 'lang/'.$_SETTINGS['general']['lang'].'.lang';
require 'sys/pages.inc';

?>