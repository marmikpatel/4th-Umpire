<?php 
	class ImageAlbumsController extends AppController{
		public $name = 'ImageAlbums';
		public $helpers= array('Html' , 'Form');
		public $uses=array('ImageAlbum');

		public function index()
		{

			$teamid='1';
			$album=$this->ImageAlbum->getdata($teamid);
			$this->set('album',$album);

		}

		public function album_images($albumid)
		{

			$album_img=$this->ImageAlbum->getimages($albumid);
			$this->set('album_img',$album_img);
		}
	}
?>