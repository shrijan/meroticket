<?php
/**
* @author 
* @website 
* @email 
* @copyright 
* @license 
**/

class User extends AppModel {

	var $name = 'User';
	var $primaryKey = 'uid';
//	var $hasMany = array(
//	 	'events'=>array(
//			'className'=>'events'
//		),
//		'tickets'=>array(
//			'className'=>'tickets'
//		),
//		'customers'=>array(
//			'customers'=>'customers'
//		)
//	 );
//	 var $hasOne = array(
//	 	'userbankinfos'=>array(
//			'className'=>'userbankinfos'
//		)
//	 );
	var $validate = array(
		'u_Fname'=>array(
			'Please enter your Firstname.'=>array(
				'rule'=> 'notEmpty',
				'message' => 'Please enter your Firstname'
			)
		),
		'u_Lname'=>array('Please enter your Lastname'=>array(
				'rule'=>'notEmpty',
				'Message'=>'Please enter your Lastname'
			)
		),
		'Address'=>array('Please enter your Valid Address with street number'=>array(
				'rule'=>'notEmpty',
				'Message'=>'Please enter your Valid Address with street number'
			)
		),
		'Contactinfo'=>array('Please enter your Valid Phone number'=>array(
				'rule'=>array('phone',null,'us'),
				'Message'=>'Please enter your Phone Number'
			)
		),
		'email' => array(
				'rule' => array('email', true),
				'message' => 'Please supply a valid email address.'
		),
		'Password'=>array(
			'The password must be between 5 and 15 characters'=>array(
				'rule' => array('between',5,15),
				'message'=> 'The password name should be between 5 and 15 characters.'
			),
			'The passwords do not match' => array(
				'rule' => 'matchPasswords',
				'message' => 'The passwords do not match'
			)
		)
		
	);
	function beforeValidate(){
		$unique_check = array(
			'email' => $this->data['User']['email']
		);
		if(!$this->isUnique($unique_check)){
			$this->invalidate('unique','User already exits in database');
		}
			
	}
	function matchPasswords($data){
		if($data['Password'] == $this->data['User']['Password_confirm']){
			return TRUE;
		}
		$this->invalidate('Password_confirm','The passwords do not match');
		return false;
	}
	function hashPasswords($data){
		if(isset($this->data['User']['Password'])){
			$this->data['User']['Password'] = Security::hash($this->data['User']['Password'],null,true);
			return $data;
		}
		return $data;
	}
	function beforeSave(){
		$this->hashPasswords(NULL,TRUE);
		return TRUE;
		
	}
}
?>