<?php
	class FixtureBat extends AppModel {
		public $useTable = 'fixture_bat_details';
		public $name='FixtureBat';

		public $hasOne= array('Team'=>array(
			 					'className'=>'Team',
			 					'foreignKey'=>'team_id'
			 				 					));

		
	}
?>