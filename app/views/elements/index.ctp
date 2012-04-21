<?php
	
    echo($this->requestAction('tickets/index'));
	echo $this->Html->script('validation',FALSE);?>
	<div id="success"></div>
	<?php
	echo '<h1>Create tickets for each price, sales date, or other options.</h1>';
	echo $this->Form->create('Ticket',array('action'=>'index'));
	echo $this->Form->input('ticket_name',array('label'=>'Ticket Name','id'=>'ticket_name'));
	echo $this->Form->input('price',array('label'=>'price','style'=>'width:100px','id'=>'price'));
	echo $this->Js->submit('Save',array(
		'before'=>$this->Js->get('#sending')->effect('fadeIn'),
		'success'=>$this->Js->get('#sending')->effect('fadeOut'),
		'update'=>'#success'
	));
	echo $this->Form->end();
?>
	<div id="sending" style="display:none;background-color:lightgreen"> Sending ... </div>
