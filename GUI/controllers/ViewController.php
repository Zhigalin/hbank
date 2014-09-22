<?php

class View {
	
	public static function render($file, $params, $return = false) {
		
		$template = 'template/'.$file.'.tpl';
		
		extract($params);
		ob_start();
		include($template);
		if ($return) {
			return ob_get_clean();
		} else {
			echo ob_get_clean();
		}
		
	}

}

?>