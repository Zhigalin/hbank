<?php

function __autoload($classname) {
    $filename = "models/". $classname .".model";
    require_once($filename);
}

?>