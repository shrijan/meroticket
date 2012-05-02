
<?php
/**
* @author 
* @website 
* @email 
* @copyright 
* @license 
**/
echo $this->Html->script('event',FALSE);
echo $this->Html->css('event','stylesheet',array('inline'=>FALSE));
echo $this->Form->create('Event',array('action'=>'admin_index'));
echo $this->Form->input('event_titles',array('label'=>'STEP 1: INSERT EVENT TITLE'));
echo '<div class="ticketlink">Mero ticket</div>';


//echo $this->Form->input('event_des',array('label'=>'STEP 2: ADD EVENT DESCRIPTIONS','type'=>'textarea'));
echo $tinymce->input('event_des', array('type'=>'textarea','label'=>'STEP 2: Please Enter Event Description'), array(
          'theme'                             => 'advanced',
          'theme_advanced_toolbar_location'   => 'top',
          'theme_advanced_toolbar_align'      => 'left',
          'theme_advanced_statusbar_location' => 'bottom',
		  'width'=>'930'
        )); 
//echo $this->Html->fieldset('Insert starting date');
echo '<fieldset>';
 	echo '<legend> Select Event Type </legend>';
	echo $this->Form->select
			(
				'eventsTypeID',
				$categories,
				null,
				array(),
				FALSE
			);
	//echo $this->Form->input('eventsTypeID', array('type' => 'select'));
echo '</fieldset>';
echo '<fieldset>';

echo '<legend> starting date </legend>';
/*echo $this->Form->input('start_dates', array(
    'type' => 'datetime',
    'dateFormat' => 'DMY',
    'minYear' => date('Y'),
    'maxYear' => date('Y')+4,
    'timeFormat' => '24',
    'selected' => date('Y-m-d H:i:s'),
    'empty' => FALSE
        )
);*/

echo $this->Form->input('start_dates', array(
		'type'=> 'datetime', 
		 'dateFormat' => 'DMY',
		  'minYear' => date('Y'), 
		  'maxYear' => date('Y')+4,
		  'timeFormat' => '24',
   		 'selected' => date('Y-m-d H:i:s'),
    	'empty' => FALSE
		  )
);
echo '</fieldset>';
echo '<fieldset>';
echo '<legend> End date </legend>';
echo $this->Form->input('end__dates', array(
    'type' => 'datetime',
    'dateFormat' => 'DMY',
    'minYear' => date('Y') ,
    'maxYear' => date('Y')+4,
    'timeFormat' => '24',
    'selected' => date('Y-m-d H:i:s'),
   // 'attributes' => array(),
    'empty' => FALSE
      )
);
echo '</fieldset>';
echo '<h1>Step 5: Add Where</h1>';
echo '<fieldset>';
echo '<legend>Location </legend>';
echo $this->Form->input('event_addresses',array('label'=>'Address'));
echo $this->Form->input('event_suburbs',array('label'=>'Event Suburb'));
echo $this->Form->input('event_postcodes',array('label'=>'Event Postcode'));
echo '</fieldset>';
echo '<fieldset>';
//echo $this->Form->input('Event_pictures',array('label'=>'Upload Event Pictures'));

echo '<ul>';
   echo '<li>';
         echo $this->Form->label('Image/images', 'Upload Event Image 1:' );
         echo $this->Form->file('Image/filedata1');
   echo '</li>';
   echo '<li>';
         echo $this->Form->label('Image/images', 'Upload Event Image 2:' );
         echo $this->Form->file('Image/filedata2');
   echo '</li>';
   echo '<li>';
         echo  $this->Form->label('Image/images', 'Upload Event Image 3:' );
         echo $this->Form->file('Image/filedata3');
   echo '</li>';
   echo '<li>';
         echo $this->Form->label('Image/images', 'Upload Event Image 4:' );
         echo $this->Form->file('Image/filedata4');
   echo '</li>';
echo '</ul>';
echo '</fieldset>';
echo $this->Form->end('Add Event');
//echo $this->element('indexTicket');
?>