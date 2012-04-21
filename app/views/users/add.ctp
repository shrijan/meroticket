<h1> Registration</h1>

<?php

echo $form->create('User',array('action'=>'add'));
echo $form->input('u_Fname',array('label'=>'First Name',array('style'=>array('width'=>'300','class'=>'firstname'))));
echo $form->input('u_Lname',array('label'=>'Last Name'));
echo $form->input('Address');
echo $form->input('Contactinfo',array('label'=>'Phone Number'));
echo $form->input('email',array('label'=>'Email'));
echo $form->input('Password',array('type'=>'password'));
echo $form->input('Password_confirm',array('type'=>'password'));
echo $form->hidden('utypeid',array('value'=>1));
echo $form->submit('Login');
?>