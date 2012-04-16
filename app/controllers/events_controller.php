<?php
/**
* @author 
* @website 
* @email 
* @copyright 
* @license 
**/

class EventsController extends AppController {

	var $name= 'Events';
	var $helpers = array('Javascript','Tinymce','Html');

	function index() {
	
	if($this->Session->check('Auth.User')){
		$this->redirect(array('controller'=>'Events','action'=>'index','admin'=>true)); 
	}else{
		$this->redirect(array('controller'=>'Users','action'=>'login'));
	}
		
		
	}
	function admin_index(){
		
		
	}

	function view() {
		
	}

	
}
?>