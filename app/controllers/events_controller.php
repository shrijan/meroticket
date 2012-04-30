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
	var $helpers = array('Javascript','Tinymce','Html','Date');
	
	
	function index() {

	if($this->Session->check('Auth.User')){
		$this->redirect(array('controller'=>'Events','action'=>'index','admin'=>true)); 
		
	}else{
		$this->redirect(array('controller'=>'Users','action'=>'login'));
	}
		
		
	}
	function admin_index(){
		if(!empty($this->data)){
		 $dateStartfield = $this->data['Event']['start_dates'];
		 $dateEndfield = $this->data['Event']['end__dates'];
		
		 
		 $dateStartString = $dateStartfield['year'] . '-' .$dateStartfield['month'] . '-' . $dateStartfield['day']. ' ' .$dateStartfield['hour'] . ':' . $dateStartfield['min'];
		 
		  $dateEndString = $dateEndfield['year'] . '-' .$dateEndfield['month'] . '-' . $dateEndfield['day']. ' ' .$dateEndfield['hour'] . ':' . $dateEndfield['min'];
		 
		 
		$this->data['Event']['start_dates'] = $dateStartString;
		//pr($this->data['Event']['start_dates']);
		$this->data['Event']['end__dates']= $dateEndString;
		//pr($this->data['Event']['end_dates']);
		//pr($this->data['Event']['end_dates']);
		pr($this->data['Event']);
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