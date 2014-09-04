<?php
	class ImageAlbum extends AppModel {
		public $useTable = 'image_gallery_album';
		public $name='ImageAlbum';

		public $hasMany= array('Image'=>array(
			 					'className'=>'Image',
			 					'foreignKey'=>'gallery_albumid'
			 				 ));

		public function getdata($teamid)
		{

			$album_data=$this->find('all',array('conditions'=>array('ImageAlbum.team_id'=>$teamid)));
			return $album_data; 

		}

		public function getimages($albumid)
		{
			// $images=$this->find('all');
			$images=$this->find('all',array('conditions'=>array('ImageAlbum.id'=>$albumid)));
			return $images;
		}


	}
?>