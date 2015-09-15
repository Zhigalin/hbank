<?php

class Entity {
	protected $id;
	
	public function __construct() {
		try {
			DB::init();
		} catch( Exception $e ) {
			LogHandling::logDBError($e);
			exit();
		}
	}
}

?>