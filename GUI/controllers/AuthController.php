<?php

class AuthController extends AbstractController {

	public function __construct($params) {
		global $_ENV;
		global $_SETTINGS;
		global $_LANG;
		global $PAGES;
		
		$this->params = array_merge($params, $_ENV, $_SETTINGS, $_LANG, $PAGES);
	}

	protected function render($str) {
		#Nope
	}
	
	public function loginAction() {
		global $_OPERATORS;
		
		if (!isset($_SESSION['email'])) {
			if (isset($this->params['email']) && isset($this->params['password']) && isset($_OPERATORS[$this->params['email']])) {
				if ($_OPERATORS[$this->params['email']] === $this->params['password']) {
					$_SESSION['email'] = $this->params['email'];
					$_SESSION['password'] = $this->params['password'];
					
					if(@$this->params['exaction'] !== 'create' && @$this->params['exaction'] !== 'insert' && @$this->params['exaction'] !== 'update' && @$this->params['exaction'] !== 'delete') {
						header("Location: ".$_SERVER['HTTP_REFERER'],TRUE,302);
					} else {
						header("Location: index.php",TRUE,302);
					}
				} else {
					$this->params['page_title'] = $this->params['wrong_password_text'];
					View::render('auth/nopasswd', $this->params);
				}
			} else {
				#$this->params['page_title'] = $this->params['wrong_mail_text'];
				#View::render('auth/nomail', $this->params);
				$this->params['page_title'] = $this->params['please_log_in_text'];
				$str = View::render('auth/login', $this->params);
			}
		} elseif (isset($_SESSION['password'])) {
			if ($_OPERATORS[$_SESSION['email']] === $_SESSION['password']) {
				if(@$this->params['exaction']!=='create' && @$this->params['exaction']!=='update' && @$this->params['exaction']!=='delete') {
					header("Location: ".$_SERVER['HTTP_REFERER'],TRUE,302);
				} else {
					header("Location: index.php",TRUE,302);
				}
			} else {
				$this->params['page_title'] = $this->params['wrong_password_text'];
				View::render('auth/nopasswd', $this->params);
			}
		} else {
			$this->params['page_title'] = $this->params['please_log_in_text'];
			$str = View::render('auth/login', $this->params);
		}
	}

	public function exitAction() {
		session_unset();
		header("Location: index.php",TRUE,302);
	}
}

?>