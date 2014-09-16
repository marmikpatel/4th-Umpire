<?php 
	class TeamPlayersController extends AppController{
		public $name = 'TeamPlayers';
		public $helpers= array('Html' , 'Form');
		public $uses=array('TeamPlayer','Image','Player');

	
		public function index(){
			
			$team_id='1'; 
			//$data=$this->TeamPlayer->getdata($team_id); 
			$data=$this->Player->getplayerinfo($team_id);
			//echo "<pre>"; print_r($data); exit;
			$this->set('data',$data);

			/*// get image // join in model 
			foreach ($data as $data) {
				$image[] = $this->Image->find('first',array('conditions'=>array(
											'Image.playerid'=>$data['player']['id'])));

			}

			$this->set('image',$image);*/

		}

		
		public function player_desc($pid)
		{
			$data=$this->TeamPlayer->player_desc($pid); 
			$this->set('data',$data);

			// get image // join in model 
			$image = $this->Image->find('first',array('conditions'=>array(
											'Image.playerid'=>$data['player']['id'])));
			$this->set('image',$image);



		}

		public function addplayer(){
				/*if ($this->Session->read('User.position') =='teamadmin') {*/
				if(!empty($this->request->data)){
					if(!empty($this->request->data['Player']['fname']) and
						!empty($this->request->data['Player']['lname'])and
							!empty($this->request->data['Player']['email'])and
								!empty($this->request->data['Player']['contact'])) {
						$data= $this->request->data;
						$team_id='1'; //
	                  	 $path=$this->TeamPlayer->getimage();

						$this->TeamPlayer->addplayer($team_id,$data,$path);	
						$this->Session->setFlash('Player added succesfully!');
			        	$this->redirect(array('controller' => 'TeamPlayers','action' => 'index'));
  				
			       		
	                }else{
	                	$this->Session->setFlash(__('All fields are mandatory!'));
						$this->redirect(array('controller'=>'TeamPlayers','action'=>'addplayer'));
					}
				}
			// }
		

		}

	}
?>