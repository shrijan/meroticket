<?php
/**
* @author 
* @website 
* @email 
* @copyright 
* @license 
**/

class Ticket extends AppModel {

	var $name = 'Ticket';
	var $primaryKey = 'tickets_id';
	var $validate = array(
		'ticket_name'=>array(
			'rule'=>'notEmpty',
			'message'=>'Enter ticket name'
		),
		'price'=>array(
			'rule'=>array('numeric'), 
			'message'=>'Enter price of ticket'         
		)
	);
}
?>