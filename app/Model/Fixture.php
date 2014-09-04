<?php
	class Fixture extends AppModel {
		public $useTable = 'fixture';
		public $name='Fixture';
		public $hasOne= array('Result'=>array(
			 					'className'=>'Result',
			 					'foreignKey'=>'fixture_id'
			 				 					));
			

		public $belongsTo= array('Team'=>array(
									'className'=>'Team',
									'foreignKey'=>'opponent_id'
									// 'conditions'=>array('Team.id'=>'Fixture.team_id')
									),
								'Team1'=>array(
									'className'=>'Team',
									'foreignKey'=>'team_id'
									// 'conditions'=>array('Team.id'=>'Fixture.team_id')
									));


		

		public $hasMany=array('FixtureBall'=>array(
									'className'=>'FixtureBall',
									'foreignKey'=>'fixtureid'),
							  'FixtureBat'=>array(
							  		'className'=>'FixtureBat',
							  		'foreignKey'=>'fixtureid'));



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


		public function editdata()
		{
			
		}

	}
?>