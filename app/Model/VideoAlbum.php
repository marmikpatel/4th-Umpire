<?php
	class VideoAlbum extends AppModel {
		public $useTable = 'video_gallery_album';
		public $name='VideoAlbum';

		public $hasMany= array('Video'=>array(
			 					'className'=>'Video',
			 					'foreignKey'=>'video_gallery_albumid'
			 				 ));

		public function getdata($teamid)
		{

			$album_data=$this->find('all',array('conditions'=>array('VideoAlbum.team_id'=>$teamid)));
			return $album_data; 

		}

		public function getimages($albumid)
		{
			// $images=$this->find('all');
			$images=$this->find('all',array('conditions'=>array('VideoAlbum.id'=>$albumid)));
			return $images;
		}


	}
?>