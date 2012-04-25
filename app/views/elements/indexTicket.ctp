<?php
    echo($this->requestAction('tickets/indexTicket'));
	echo $this->Html->script('validation',FALSE);
	echo $this->Html->css('event','stylesheet',array('inline'=>FALSE));
?>
	
	<div id="success"></div>
	<div id='popUpbox'>
	<?php
	echo '<h1>Create tickets for each price, sales date, or other options.</h1>';
	echo $this->Form->create('Ticket',array('action'=>'indexTicket'));
	echo $this->Form->input('ticket_name',array('label'=>'Ticket Name','id'=>'ticket_name'));
	echo $this->Form->input('price',array('label'=>'price','style'=>'width:100px','id'=>'price'));
	echo $this->Js->submit('Save',array(
		'before'=>$this->Js->get('#sending')->effect('fadeIn'),
		'success'=>$this->Js->get('#sending')->effect('fadeOut'),
		'update'=>'#success'
	));
	echo $this->Form->end();
	echo $this->Js->writeBuffer();

?>
	<div id="sending" style="display:none;background-color:lightgreen"> Sending ... </div>
</div>