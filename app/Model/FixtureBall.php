<?php
	class FixtureBall extends AppModel {
		public $useTable = 'fixture_ball_details';
		public $name='FixtureBall';
		//public $recursive=1;

		public $hasOne= array('Team'=>array(
			 					'className'=>'Team',
			 					'foreignKey'=>'team_id'
			 				 					));

		// public $belongsTo=array('Player'=>array(
		// 							'className'=>'Player',
		// 							'foreignKey'=>'playerid'),
		// 						'Fixture'=>array(
		// 							'className'=>'Fixture',
		// 							'foreignKey'=>'fixtureid'));
	}
?>