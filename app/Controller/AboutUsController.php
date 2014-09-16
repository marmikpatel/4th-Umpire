<?php 
	class AboutUsController extends AppController{
		public $name = 'AboutUs';
		public $helpers= array('Html' , 'Form');
		public $uses=array('AboutUs');

		public function index(){
			
			$team_id='1'; 
			$this->set('data',$this->AboutUs->getdata($team_id));
	
		}

		public function add_aboutus(){
			
		}

		public function update_aboutus(){
			
		}


	}
?>