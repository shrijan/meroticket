<?php
/**
* @author 
* @website 
* @email 
* @copyright 
* @license 
**/

class TicketsController extends AppController {

	var $name= 'Tickets';
	//var $helpers = array('Js');
	var $components = array('RequestHandler');
	function index() {
		if(!empty($this->data)){
			if($this->Ticket->save($this->data)){
				if($this->RequestHandler->isAjax()){
					$this->render('success','ajax');
					
					$this->Ticket->id = $this->Ticket->getLastInsertId();
					pr($this->Ticket->read());
				}else{
					$this->Session->setFlash('Message sent');
					$this->redirect(array('action'=>'index'));
				}
				
			}
		}
	}
	function admin_index(){	
	}
	function validate_form(){
		if($this->RequestHandler->isAjax()){
			//echo $this->validateErrors($this->Ticket);
			$this->data['Ticket'][$this->params['form']['field']] = $this->params['form']['value'];
			$this->Ticket->set($this->data);
			if($this->Ticket->validates()){
				$this->autoRender = FALSE;
			}else{
				$error = $this->validateErrors($this->Ticket);
				$this->set('error',$error[$this->params['form']['field']]);
			}
		}
	}
	function view() {
		
	}

	
}
?>