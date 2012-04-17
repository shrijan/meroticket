<?php
/**
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
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('Mero Ticket'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('menu');
		echo $this->Html->script('jquery-1.7.2.min');
		echo $scripts_for_layout;
		?>
		<?php
		echo $this->Js->writeBuffer(array('cache'=>true));
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="header-logo">
				<?php echo $this->Html->link($this->Html->image('logo.png',array('alt'=>'Mero ticket','width'=>'250px')),'#',
											array('target'=>'blank','escape'=>false));
				//<?php echo $this->Html->link(__('Mero Ticket', true), '#'); ?>
			</div>
			<div id="nav">
			<?php if($logged_in):?>
			
				<div id="user-nav">
				
				 	Welcome <?php echo $username['User']['u_Fname']?> <?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout'));?>
					
				</div>
				<ul>
				
					<li><?php echo $html->link('Add Event',array('controller'=>'events','action'=>'index'))?></li>
					<li><?php echo $html->link('User Profile',array('controller'=>'users','action'=>'index'))?></li>

				</ul>
			<?php else: ?>
					<?php echo $html->link('Register',array('controller'=>'users','action'=>'add'));?> or
					<?php echo $html->link('Login',array('controller'=>'users','action'=>'login'));?>
					<?php endif; ?>
			</div>
		</div>
		<div id="content">
			
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>