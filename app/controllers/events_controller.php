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

	//pr($this->data);
		if(!empty($this->data)){
		$this->Event->Create();
		$this->Event->set($this->data);
		//echo $this->Event->validates();
			if($this->Event->save($this->Event)){
			
					$this->Event->invalidFields();
					$this->Session->setFlash(__('The Event has been saved',TRUE));
					$this->redirect(array('controller'=>'Events','action' => 'index','admin'=>TRUE));
			}else{
			
				$db_exits = $this->Event->invalidFields();
				if(array_key_exists('unique',$db_exits) && (sizeof($db_exits)==1))
				$this->Session->setFlash(__('The Event aleardy exits in our database',TRUE));
				else
				$this->Session->setFlash(__('The Event Information could not be saved.Please, try again',TRUE));
			}
		}

		
	}

	function view() {
		
	}


}
?>