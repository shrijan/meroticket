

<?php
     if(!$logged_in){
	 ?>
	 <h1> Login</h1>
	 <?php
		echo $this->Session->flash('auth');
		echo $this->Form->create('User',array('action'=>'login'));
		echo $this->Form->input('u_Fname',array('label'=>'Name'));
		echo $this->Form->input('Password',array('type'=>'password'));
		echo $this->Form->end('Login');
	 }
	 
?>