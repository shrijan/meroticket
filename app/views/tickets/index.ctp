<?php
	echo '<h1>Create tickets for each price, sales date, or other options.</h1>';
	echo $this->Form->create('Ticket',array('action'=>'index'));
	echo $this->Form->input('ticket_name',array('label'=>'Ticket Name'));
	echo $this->Form->input('price',array('label'=>'price','style'=>'width:100px'));
	echo $this->Form->end('save');
?>