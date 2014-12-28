<?php

function __autoload($classname) {
	if( file_exists("controllers/{$classname}.php") ) {
		include_once "controllers/{$classname}.php";
	} else {
		$filename = "models/". $classname .".model";
		require_once($filename);
	}
}

?>