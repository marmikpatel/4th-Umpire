<?php 
	class PlayersController extends AppController{
		public $name = 'Players';
		public $helpers= array('Html' , 'Form');
		public $uses=array('Player','Image');

	
		public function index(){
			
			$team_id='1'; 
			$data=$this->Player->getdata($team_id); 

			$this->set('data',$data);

			// get image // join in model 
			foreach ($data as $data) {

				$image[] = $this->Image->find('first',array('conditions'=>array(
											'Image.playerid'=>$data['Player']['id'])));

			}

			$this->set('image',$image);
				
		}

		
		public function player_desc($pid)
		{
			$data=$this->Player->player_desc($pid); 
			$this->set('data',$data);

			// get image // join in model 
			$image = $this->Image->find('first',array('conditions'=>array(
											'Image.playerid'=>$data['Player']['id'])));
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
	                  	 $path=$this->Player->getimage();
	                		 // echo "<pre>"; print_r($path);exit;


						$this->Player->addplayer($team_id,$data,$path);	
						$this->Session->setFlash('Player added succesfully!');
			        	$this->redirect(array('controller' => 'TeamPlayers','action' => 'index'));
  				
			       		
	                }else{
	                	$this->Session->setFlash(__('All fields are mandatory!'));
						$this->redirect(array('controller'=>'Players','action'=>'addplayer'));
					}
				}
			// }
		

		}

		public function editplayer(){

		}

		public function deleteplayer(){

		}

	}
?>