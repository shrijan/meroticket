<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application model for Cake.
 *
 * This is a placeholder class.
 * Create the same file in app/app_model.php
 * Add your application-wide methods to the class, your models will inherit them.
 *
 * @package       cake
 * @subpackage    cake.cake.libs.model
 */
class AppModel extends Model {
	
	function isUnique($params,$id=""){
		if (!is_array($params)) {
            trigger_error(__METHOD__ . ' - $params must be an array', E_USER_ERROR);
        }
        
        // @var array $query    Array to $this->hasAny() against
        $query = array();
        
        // Set Recursive Seach mode.
        $this->recursive = -1;
        
        // Loop array of params building our our query array.
        foreach ($params as $field => $value)
        {

            $query[$this->name . '.' . $field] = $value;
        }

        // Check to see if we need to query against an id
        if (empty($id))
            $fields[$this->name.'.id'] = "!= NULL"; 
        else
            $fields[$this->name.'.id'] = "!= {$id}";
            
        // Run the query.
        if ($this->hasAny($query)) {
		
            // $this->invalidate('unique_'.$field); 
            return false;
        }
        else 
		
            return true;            
        
	}
	
}
