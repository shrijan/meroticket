<?php
 echo $this->Form->create('images',array('type' => 'file')); 
 echo $this->Form->file('filedata');
 echo $this->Html->image('/app/webroot/img/uploads/small/'.$image_path);
 echo $this->Form->end('Submit');
?>