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
	var $components = array('RequestHandler');
	function index() {
	pr($this->params['form']);
		if(!empty($this->params['form'])){
		
			if($this->Ticket->save($this->data)){
				if($this->RequestHandler->isAjax()){
					$this->render('success','ajax');
					$this->Ticket->id = $this->Ticket->getLastInsertId();
				}else{echo 222343;
					$this->Session->setFlash('Message sent');
					$this->redirect(array('action'=>'index'));
				}
			}
		}
		else{
			
		}
	}
	function admin_index(){	
	}
	
	function validate_form(){
	
	echo 333;
		if($this->RequestHandler->isAjax()){
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