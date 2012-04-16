<?php
/**
* @author 
* @website 
* @email 
* @copyright 
* @license 
**/

class UsersController extends AppController {

	var $name= 'Users';

	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add');
		
		if($this->action == 'add'){
			$this->Auth->authenticate = $this->User;
		}
		
		//debug($this->Auth->login());
	}
	function login(){
  
			if($this->Session->check('Auth.User')){

				 $this->redirect(array('controller'=>'Events','action'=>'index','admin'=>true)); 
			}
  
		
	}
	function logout(){
		$this->redirect($this->Auth->logout());
	}
	function index() {
		//$this->set('lgin',$lgin);
	}

	function view() {
		
	}
	function admin_index(){
		
		
	}



	function add(){

		if(!empty($this->data)){
			
			$this->User->Create();
			
			if($this->User->save($this->data)){
					$this->Session->setFlash(__('The user has been saved',TRUE));
					$this->redirect(array('action' => 'index'));
			}else{
			
				$db_exits = $this->User->invalidFields();
				if(array_key_exists('unique',$db_exits) && (sizeof($db_exits)==1))
				$this->Session->setFlash(__('The user aleardy exits in our database',TRUE));
				else
				$this->Session->setFlash(__('The user could not be saved.Please, try again',TRUE));
			}
		}
	}

}
?>