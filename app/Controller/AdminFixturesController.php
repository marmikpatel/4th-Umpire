<?php 
	class AdminFixturesController extends AppController{
		public $name = 'AdminFixtures';
		public $helpers= array('Html' , 'Form');
		public $uses=array('Fixture','Player','Team','FixtureBall','FixtureBat');

		public function admin_add()
		{
		
			if(!empty($this->request->data))
			{
				//echo "<pre>"; print_r($this->request->data); exit;
				$oppont_team=$this->Fixture->adddata($this->request->data);
				//echo "<pre>"; print_r($oppont_team); exit;
				if(!empty($oppont_team))
				{
					$this->Session->setFlash("Data Saved");
					$fixture_id=$this->Fixture->getLastInsertId();
						$this->redirect(array('controller' =>'AdminFixtures','action' => 'admin_fixt_ball_stat',$fixture_id));	
				}
				

			}	
		}


		public function admin_edit($fixtureid)
		{
			$find=$this->Fixture->editdata($fixtureid);
			$this->set('fixturedata',$find);
			$this->set('fixtureid',$fixtureid);
			if(!empty($this->request->data))
			{
				
				$this->Fixture->updatedata($fixtureid,$this->request->data);
				$this->redirect(array('controller' =>'AdminFixtures','action' => 'admin_editfixt_ball_stat',$fixtureid));	

			}

		}

		public function admin_editfixt_ball_stat($fixtureid)
		{
			$find=$this->Fixture->edit_home_ball_view($fixtureid);
			$home_team=$this->FixtureBall->getballinfo($fixtureid);
			foreach ($find as $key => $value) {
				$home_team_name=$value['Team1']['team_name'];
			}
			$this->set('home_team_name',$home_team_name);
			$this->set('fixtureid',$fixtureid);
			$this->set('home_team',$home_team);
			if(!empty($this->request->data))
			{
				$this->FixtureBall->edithome_ball($fixtureid,$this->request->data);
			}
		}

		public function admin_fixt_ball_stat($fixture_id)
		{
				$this->set('fixtureid',$fixture_id);
				$home_team=$this->Team->find('first',array('conditions'=>array('Team.id'=>'1'),
															'fields'=>array('Team.team_name,Team.id')));
				$this->set('home_team',$home_team);
				if(!empty($this->request->data))
				{
					//echo "<pre>"; print_r($this->request->data); exit;
					foreach ($this->request->data as $key => $value) {
						$substr=substr($key,0,4);
						if($substr=="Home")
						{
							$home[$key]=$value;
						} 
						if($substr=="Away")
						{
							$away[$key]=$value;
						}
						
					}
					$this->FixtureBall->home_ball_stat($home,$fixture_id,$home_team['Team']['id']);
				
					$this->FixtureBall->away_ball_stat($away,$fixture_id,$this->request->data['id']);
					$this->redirect(array('controller' =>'AdminFixtures','action' => 'admin_fixt_home_bat',$fixture_id));	


				//	echo "<pre>"; print_r($home_stat); exit;
				}
				
		}

		public function admin_fixt_away_ball()
		{
			$this->layout = 'ajax';
			$find=$this->Fixture->findaway($this->request->data['fixtureid']);
			
			
			$away_team=$this->Team->find('first',array('conditions'=>array('Team.id'=>$find['Fixture']['opponent_id']),
															'fields'=>array('Team.team_name,Team.id')));
			$this->set('away_team',$away_team['Team']['team_name']);
			$this->set('away_id',$away_team['Team']['id']);
		}


		public function admin_fixt_home_bat($fixtureid)
		{
			$this->set('fixtureid',$fixtureid);
			$home_team=$this->Team->find('first',array('conditions'=>array('Team.id'=>'1'),
															'fields'=>array('Team.team_name,Team.id')));
			$this->set('home_team',$home_team);
			if(!empty($this->request->data))
			{
				foreach ($this->request->data as $key => $value) {
						$substr=substr($key,0,4);
						if($substr=="Home")
						{
							$home[$key]=$value;
						} 
						if($substr=="Away")
						{
							$away[$key]=$value;
						}						
				}
				$this->FixtureBat->home_bat_stat($home,$fixtureid,$home_team['Team']['id']);
				
				$this->FixtureBat->away_bat_stat($away,$fixtureid,$this->request->data['id']);
			}
		}

		public function admin_fixt_away_bat()
		{
			$this->layout="ajax";
			$find=$this->Fixture->findaway($this->request->data['fixtureid']);
			$away_team=$this->Team->find('first',array('conditions'=>array('Team.id'=>$find['Fixture']['opponent_id']),
															'fields'=>array('Team.team_name,Team.id')));

			$this->set('away_team',$away_team['Team']['team_name']);
			$this->set('away_id',$away_team['Team']['id']);

		}


	}
?>