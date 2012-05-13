<?php
class ImagesController extends AppController {


	var $name = 'Images';
	//var $helpers = array('Html', 'Form');
	var $components = array('imageupload');

function index()
	{
			
	}
function upload() {

	if (empty($this->data)) {
			$this->render();
	} else {
		
		$destination = realpath('../../app/webroot/img/uploads/') . '/';
		$image_path = $this->imageupload->upload_image_and_thumbnail($this->data, "filedata",573,80,"uploads",true);
		 $this->set(compact('image_path'));
		
		}
	}
}
?>