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
	var $belongsTo = 'Eventscategory';
	
	var $validate = array(
		'event_titles'=>array(
			'Please enter event titles.'=>array(
				'rule'=> 'notEmpty',
				'message' => 'Please enter your titles'
			)
		),
		'event_des'=>array(
			'Please Enter the Event Description' => array(
			'rule'=>'notEmpty', 
			'message'=>'Enter Event Description'  
			)       
		),
		'eventsTypeID'=>array(
			'Please Select the Event Category' => array(
			'rule'=>'notEmpty',
			'message'=>'Please Select Event Type'
			)
		),
		'start_dates' => array(
			'event_start_date_cannot_be_empty' => array(
			'rule' => 'notEmpty',
			'message' => 'This Event is Missing Event Start Date'
			),
			'event_compare_with_end_date' => array(
			'rule' => 'compareDates',
			'message' => 'The Start Date Cannot be Greater than End date'
			)
		),
		'end__dates' => array(
			'event_end_date_cannot_be_empty' => array(
			'rule' => 'notEmpty',
			'message' => 'This Event is Missing Event End Date'
			),
			'event_compare_with_start_date' => array(
			'rule' => 'compareDates',
			'message' => 'The End Date Cannot be Smaller than end date'
			)
		),
		'event_addresses' => array(
			'event_must_have_address' => array(
			'rule' => 'notEmpty',
			'message' => 'This Event is Missing Event Address'
			)
		),
		'event_postcodes' => array(
			'event_must_have_postcode' => array(
			'rule' => 'notEmpty',
			'message' => 'Please Enter the Post Code'
			)
		),
		'event_suburbs' => array(
			'event_must_have_suburb' => array(
			'rule' => 'notEmpty',
			'message' => 'Please Enter the Suburb'
		)
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
	public function compareDates()
	{
		return strtotime($this->data[$this->alias]['start_dates'])<
		 strtotime($this->data[$this->alias]['end__dates']);
	}
}
?>