<?php 
	class TeamPlayersController extends AppController{
		public $name = 'TeamPlayers';
		public $helpers= array('Html' , 'Form');
		public $uses=array('TeamPlayer','Image');

	
		public function index(){
			
			$team_id='1'; 
			$data=$this->TeamPlayer->getdata($team_id); 
			$this->set('data',$data);


			// get image // join in model 
			foreach ($data as $data) {
				$image[] = $this->Image->find('first',array('conditions'=>array(
											'Image.playerid'=>$data['player']['id'])));

			}

			$this->set('image',$image);
				
		}

		
		public function player_desc($pid)
		{
			$data=$this->TeamPlayer->desc($pid); 
			$this->set('data',$data);

			// get image // join in model 
			$image = $this->Image->find('first',array('conditions'=>array(
											'Image.playerid'=>$data['player']['id'])));
			$this->set('image',$image);



		}

	}
?>