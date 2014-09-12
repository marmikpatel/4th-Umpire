<?php
	class Fixture extends AppModel {
		public $useTable = 'fixture';
		public $name='Fixture';
		/*public $hasOne= array('Result'=>array(
			 					'className'=>'Result',
			 					'foreignKey'=>'fixture_id'
			 				 					));*/
			

		public $belongsTo= array('Team'=>array(
									'className'=>'Team',
									'foreignKey'=>'opponent_id'
									),
								'Team1'=>array(
									'className'=>'Team',
									'foreignKey'=>'team_id'
									),
								'Winner'=>array(
									'className'=>'Team',
									'foreignKey'=>'winner_id'));


		

		public $hasMany=array('FixtureBall'=>array(
									'className'=>'FixtureBall',
									'foreignKey'=>'fixtureid',
									'dependent'=> true,),
							  'FixtureBat'=>array(
							  		'className'=>'FixtureBat',
							  		'foreignKey'=>'fixtureid',
							  		'dependent'=> true,));



		public function getdata($teamid)
		{
		
			 $n=$this->find('all',array('conditions'=>array('Fixture.team_id'=>$teamid)));
			 return $n;

		}

		public function getfixture_ball($fixtureid)
		{
			//echo "<pre>"; print_r($fixtureid); exit;
			/*$fixture_data=$this->find('all',array(
				'joins'=>array(
					array(
						'table'=>'fixture_ball_details',
						'alias'=>'fixtureBall',
						'type'=>'INNER',
						'conditions'=>array(
							'Fixture.id=fixtureBall.fixtureid'
						)
					)),
				'conditions'=>array('fixtureBall.fixtureid'=>$fixtureid),
				'fields'=>array('fixtureBall.*','Team.*')
				));*/
				//echo "<pre>"; print_r($this->recursive); exit;
	// $this->recursive=2;
			 $fixture_data=$this->find('all',array('conditions'=>array('Fixture.id'=>$fixtureid)));
				// App::import('Model','FixtureBall');
				// $fixtureBall = new FixtureBall;
				// $n=$fixtureBall->find('all');
				// $n=$this->FixtureBall->Player->find('all');
				// echo "<pre>"; print_r($n);
				// $this->recursive=2;
				//$fixture_data=$this->find('all');
				
				return $fixture_data;
		}


		public function editdata($fixtureid)
		{
			
			$find=$this->find('all',array('conditions'=>array('Fixture.id'=>$fixtureid)));
			return $find;
		}

		public function updatedata($fixtureid,$data)
		{
		//	echo "<pre>"; print_r($data); exit;
			$find_opponant=$this->Team->find('first',array('conditions'=>array('Team.team_name'=>$data['opponant_team'])));
			$find_winner=$this->Team->find('first',array('conditions'=>array('Team.team_name'=>$data['winner'])));
			$this->updateAll(array('Fixture.datetime'=>'"'.$data['datepicker'].'"',
									'Fixture.score'=>'"'.$data['result'].'"',
									'Fixture.venue'=>'"'.$data['venue'].'"',
									'Fixture.opponent_id'=>'"'.$find_opponant['Team']['id'].'"',
									'Fixture.winner_id'=>'"'.$find_winner['Team']['id'].'"'),
								array('Fixture.id'=>$fixtureid));
		}

		public function adddata($data)
		{
			$this->recursive=-1;
			
			$find_opponant=$this->Team->find('first',array('conditions'=>array('Team.team_name'=>$data['opponant_team'])));
			$find_winner=$this->Team->find('first',array('conditions'=>array('Team.team_name'=>$data['winner'])));
			$value['Fixture']['team_id']='1';
			$value['Fixture']['datetime']=$data['datepicker'];
			$value['Fixture']['venue']=$data['venue'];
			$value['Fixture']['opponent_id']=$find_opponant['Team']['id'];
			$value['Fixture']['score']=$data['result'];
			$value['Fixture']['winner_id']=$find_winner['Team']['id'];
			if($this->save($value))
			{
				return $find_opponant['Team']['team_name'];	
			}
			
			 
		}
		public function findaway($fid)
		{
			
			$find=$this->find('first',array('conditions'=>array('Fixture.id'=>$fid),
											'fields'=>array('Fixture.opponent_id')));
			return $find;
		}

		public function edit_ball_view($fixtureid)
		{

			$this->unbindModel(array('hasMany' => array('FixtureBall','FixtureBat')));

			$find=$this->find('all',array('conditions'=>array('Fixture.id'=>$fixtureid)));
			return $find;
		}

		public function fixture_delete($fixtureid)
		{
			$this->delete($fixtureid,true);
		}

		
		
	}
?>