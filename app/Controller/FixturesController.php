<?php 
	class FixturesController extends AppController{
		public $name = 'Fixtures';
		public $helpers= array('Html' , 'Form');
		public $uses=array('Fixture');

		public function index()
		{
			
		}

	}
?>