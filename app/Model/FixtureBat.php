<?php
	class FixtureBat extends AppModel {
		public $useTable = 'fixture_bat_details';
		public $name='FixtureBat';

		public $hasOne= array('Team'=>array(
			 					'className'=>'Team',
			 					'foreignKey'=>'team_id'
			 				 					));

		public $belongsTo=array('Player'=>array(
									'className'=>'Player',
									'foreignKey'=>'playerid'),
								'Fixture'=>array(
									'className'=>'Fixture',
									'foreignKey'=>'fixtureid'));


		public function home_bat_stat($home,$fixtureid,$teamid)
		{
			
			$i=0;
			$j=0;
			foreach ($home as $key => $value) {
				if($i%6==0)
				{
					if(!empty($value))
					{
						
						$find_pid=$this->Player->find('first',array('conditions'=>array('Player.first_name'=>$home[$key]),
																	'fields'=>array('Player.id')));
						$data[$j]['team_id']=$teamid;
						$data[$j]['fixtureid']=$fixtureid;
						$data[$j]['playerid']=$find_pid['Player']['id'];
						$detail='Home'.$j.'desc';
						$data[$j]['detail']=$home[$detail];
						$run='Home'.$j.'run';
						$data[$j]['run']=$home[$run];
						$ball='Home'.$j.'ball';
						$data[$j]['balls']=$home[$ball];
						$four='Home'.$j.'4s';
						$data[$j]['4s']=$home[$four];
						$six='Home'.$j.'6s';
						$data[$j]['6s']=$home[$six];
						$sr=($home[$run]/$home[$ball])*100;
						$data[$j]['sr']=$sr;
						$this->create();
						$this->save($data[$j]);
						$j++;
					}

				}
				$i++;

			}
			
		}

		public function away_bat_stat($away,$fixtureid,$teamid)
		{
			$i=0;
			$j=0;
			foreach ($away as $key => $value) {
				if($i%6==0)
				{
					if(!empty($value))
					{
						
						$find_pid=$this->Player->find('first',array('conditions'=>array('Player.first_name'=>$away[$key]),
																	'fields'=>array('Player.id')));
						$data[$j]['team_id']=$teamid;
						$data[$j]['fixtureid']=$fixtureid;
						$data[$j]['playerid']=$find_pid['Player']['id'];
						$detail='Away'.$j.'desc';
						$data[$j]['detail']=$away[$detail];
						$run='Away'.$j.'run';
						$data[$j]['run']=$away[$run];
						$ball='Away'.$j.'ball';
						$data[$j]['balls']=$away[$ball];
						$four='Away'.$j.'4s';
						$data[$j]['4s']=$away[$four];
						$six='Away'.$j.'6s';
						$data[$j]['6s']=$away[$six];
						$sr=($away[$run]/$away[$ball])*100;

						$data[$j]['sr']=$sr;
						$this->create();
						$this->save($data[$j]);
						
						$j++;
					}

				}
				$i++;

			}
		}

		
	}
?>