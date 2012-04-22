<?php
class AppController extends Controller{
	var $components = array('Auth','Session');
	
	var $helpers = array('Js','Session');
	var $_User = array(); 
	function beforeFilter(){
	    $this->Auth->fields = array(
				'username' => 'u_Fname',
				'password' => 'Password'
				);
		
		$this->Auth->allow('index','view');
		$this->Auth->authError = "Please login to view the page";
		$this->Auth->loginError = "Incorrect username/password  Combination";
		$this->Auth->autoRedirect = FALSE;
	
		$this->set('logged_in', $this->_loggedIn());
		$this->set('username', $this->_username());
	}
	
	
	function _loggedIn(){
		$logged_in = FALSE;
//		echo '<pre>';
//		print_r($this->Auth);
//		echo '</pre>';
		if($this->Auth->User()){
			$logged_in = TRUE;
		}
		return $logged_in;
	}
	function _username(){
		$username = NULL;
		if($this->Auth->fields){
			$username = $this->Auth->user();
		}
		return $username;
	}
}
?>