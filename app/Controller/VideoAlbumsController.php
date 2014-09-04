<?php 
	class VideoAlbumsController extends AppController{
		public $name = 'VideoAlbums';
		public $helpers= array('Html' , 'Form');
		public $uses=array('VideoAlbum');

		public function index()
		{

			$teamid='1';
			$album=$this->VideoAlbum->getdata($teamid);
			$this->set('album',$album);

		}

		public function album_videos($albumid)
		{

			$album_img=$this->VideoAlbum->getimages($albumid);
			$this->set('album_img',$album_img);
		}
	}
?>