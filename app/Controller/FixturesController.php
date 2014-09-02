<?php 
	class FixturesController extends AppController{
		public $name = 'Fixtures';
		public $helpers= array('Html' , 'Form');
		public $uses=array('Fixture','Player');

		public function index()
		{
			$teamid='1';
			$find=$this->Fixture->getdata($teamid);
			$this->set('fixture',$find);
		}

		public function fixture_stat($fixtureid)
		{
			
			$this->Fixture->unbindModel(array('hasOne'=>array('Result')));
			$fixture_stat=$this->Fixture->getfixture_ball($fixtureid);
			//echo "<pre>"; print_r($fixture_stat); exit;
			foreach ($fixture_stat as $key => $value) {
				$home_team_name=$value['Team1']['team_name'];
				$away_team_name=$value['Team']['team_name'];
				foreach ($value['FixtureBall'] as $k => $v) {
					//echo "<pre>"; print_r($v); exit;

					if($v['team_id']=='1')
					{
						$home_team[]=$this->Player->find('all',array(
																'conditions'=>array(
																	'Player.id'=>$v['playerid']),
																'fields'=>array('Player.first_name')
																)
														);
					}
					else
					{
						$away_team[]=$this->Player->find('all',array(
																'conditions'=>array(
																	'Player.id'=>$v['playerid']),
																'fields'=>array('Player.first_name')
																)
														);
					}
										

				}
				//echo "<pre>"; print_r($home_team); exit;
				/*foreach ($value['FixtureBat'] as $k1 => $v1) {
					if($v1['team_id']=='1')
					{
						$home_team_bat[]=$v1;
					}
					else
					{
						$away_team_bat[]=$v1;
					}
					$find_batPlayer[]=$this->Player->find('all',array(
																'conditions'=>array(
																	'Player.id'=>$v1['playerid']),
																'fields'=>array('Player.first_name')
																)
														);
					echo "<pre>"; print_r($find_batPlayer); exit;
				}*/

			}

			$this->set('home_team_name',$home_team_name);
			$this->set('away_team_name',$away_team_name);
			$this->set('home_team',$home_team);
			$this->set('away_team',$away_team);
			// $this->set('away_team_ball',$away_team_ball);
			// $this->set('away_team_bat',$away_team_bat);
		}


		public function admin_edit($fixtureid)
		{
			$find=$this->Fixture->editdata();

		}

		public function admin_add()
		{
		
			if(!empty($this->request->data))
			{
				echo "<pre>"; print_r($this->request->data); exit;
			}	
		}

	}
?>