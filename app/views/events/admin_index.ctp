<?php
/**
* @author 
* @website 
* @email 
* @copyright 
* @license 
**/

echo $this->Form->create('Event',array('action'=>'index'));
echo $this->Form->input('event_titles',array('label'=>'STEP 1: INSERT EVENT TITLE'));
echo '<p>Get Ticket</p>';
//echo $this->Form->input('event_des',array('label'=>'STEP 2: ADD EVENT DESCRIPTIONS','type'=>'textarea'));
echo $tinymce->input('event_des', array('type'=>'textarea','label'=>'test'), array(
          'theme'                             => 'advanced',
          'theme_advanced_toolbar_location'   => 'top',
          'theme_advanced_toolbar_align'      => 'left',
          'theme_advanced_statusbar_location' => 'bottom',
		  'width'=>'930'
        )); 
//echo $this->Html->fieldset('Insert starting date');
echo '<fieldset>';
echo '<legend> starting date </legend>';
echo $this->Form->input('start_dates', array(
    'type' => 'datetime',
    'dateFormat' => 'DMY',
    'minYear' => date('Y'),
    'maxYear' => date('Y')+4,
    'timeFormat' => '24',
    'selected' => date('Y-m-d H:i:s'),
    'attributes' => array(),
    'empty' => FALSE
        )
);
echo '</fieldset>';
echo '<fieldset>';
echo '<legend> End date </legend>';
echo $this->Form->input('end_dates', array(
    'type' => 'datetime',
    'dateFormat' => 'DMY',
    'minYear' => date('Y') ,
    'maxYear' => date('Y')+4,
    'timeFormat' => '24',
    'selected' => date('Y-m-d H:i:s'),
    'attributes' => array(),
    'empty' => FALSE
      )
);
echo '</fieldset>';
echo '<h1>Step 5: Add Where</h1>';
echo '<fieldset>';
echo '<legend>Location </legend>';
echo $this->Form->input('event_addresses',array('label'=>'Address 1'));
echo $this->Form->input('event_suburb',array('label'=>'Event Suburb'));
echo $this->Form->input('event_postcode',array('label'=>'Event Postcode'));
echo '</fieldset>';
echo $this->Form->end('Add Event');

?>