<h1> Registration</h1>

<?php

echo $form->create('User',array('action'=>'register'));
echo $form->input('u_Fname',array('label'=>'First Name'));
//echo $form->input('u_Lname',array('label'=>'Last Name'));
//echo $form->input('Address');
//echo $form->input('Contactinfo',array('label'=>'Phone Number'));
//echo $form->input('email',array('label'=>'Email'));
echo $form->input('Password');
echo $form->input('Password_confirm',array('type'=>'password'));
echo $form->submit('Register');
?>