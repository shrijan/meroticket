<?php
/**
* @author 
* @website 
* @email 
* @copyright 
* @license 
**/

class Event extends AppModel {

	var $name = 'Event';
	var $primaryKey = 'eventsID';
	var $validate = array(
		'event_titles'=>array(
			'Please enter event titles.'=>array(
				'rule'=> 'notEmpty',
				'message' => 'Please enter your titles'
			)
		),
		'event_des'=>array(
			'rule'=>'notEmpty', 
			'message'=>'Enter event description'         
		)
	);
//	var $hasOne = array(
//		'users'=>array(
//			'className'=>'users'
//		)
//	);
//	var $hasMany = array(
//		'customers'=>array(
//			'className'=>'customers'
//		),
//		'tickets'=>array(
//			'tickets'=>'tickets'
//		)
//	);
	
//	var $validate = array(
//		'event_titles' => array(
//				'rule' => 'notEmpty',
//				'message' => 'This Event is Missing a Title'
//		),
//		'event_des' => array(
//			'rule' => 'notEmpty',
//			'message' => 'This Event is Missing a Event Description'	
//		)/*,
//		'start_dates' => array(
//			'event_start_date_cannot_be_empty' => array(
//			'rule' => 'notEmpty',
//			'message' => 'This Event is Missing Event Start Date'
//			)
//		),
//		'end_dates' => array(
//			'event_end_date_cannot_be_empty' => array(
//			'rule' => 'notEmpty',
//			'message' => 'This Event is Missing Event End Date'
//			)
//		),
//		'event_addresses' => array(
//			'event_must_have_address' => array(
//			'rule' => 'notEmpty',
//			'message' => 'This Event is Missing Event Address'
//			)
//		),
//		'event_postcode' => array(
//			'event_must_have_postcode' => array(
//			'rule' => 'notEmpty',
//			'message' => 'Please Enter the Post Code'
//			)
//		)
//		/*,
//		'event_des' = array(
//			'event_description_cannot_be_empty' => array(
//			 'rule' => 'notEmpty',
//			 'message' => 'This Event is Missing a Event Description'
//			)
//		),
//		'start_dates' = array(
//			'event_start_date_cannot_be_empty' => array(
//				
//			),
//			'event_start_date_cannot_be_greater_than_end_date' => array(
//			
//			)
//		),
//		'end_dates' = array(
//			'event_end_date_cannot_be_empty' => array(
//			
//			),
//			'event_end_date_cannot_be_less_than_start_date' => array(
//			
//			)
//		),
//		'event_addresses' = array(
//		
//		),
//		'event_suburb' = array(
//		
//		),
//		'event_postcode' = array(
//		
//		)*/
//		
//	);
}
?>