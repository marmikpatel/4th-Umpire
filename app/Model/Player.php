<?php
	class Player extends AppModel {
		public $useTable = 'players';
		public $name='Player';

		public $hasMany= array('FixtureBall'=>array(
			 						'className'=>'FixtureBall',
			 						'foreignKey'=>'playerid'),
								'FixtureBat'=>array(
									'className'=>'FixtureBat',
									'foreignKey'=>'playerid')
								);	
		public $hasOne = array('Image' => array(
			       'className' => 'Image',
			       'foreignKey'=>'playerid',
			        // 'conditions'=>' Image.playerid = TeamPlayer.playerid'
			       //error : itz taking image.playerid=> teamplayer.id   :(

		        	),
					'TeamPlayer'=>array(
						'className'=>'TeamPlayer',
						'foreignKey'=>'playerid')
		        
		   );


		public function getplayer($teamid)
		{
			$find=$this->TeamPlayer->find('all',array('conditions'=>array('TeamPlayer.teamid'=>$teamid)));
			return $find;
		}

	}
?>