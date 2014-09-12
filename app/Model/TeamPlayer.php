<?php
	class TeamPlayer extends AppModel {
		public $useTable = 'team_player';
		public $name='TeamPlayer';


		
		public $belongsTo = array(
        		
		        'player'=> array(
		        	'className'=>'Player',
		        	'foreignKey'=>'playerid'

		        	// 'conditions'=>'Player.id => TeamPlayer.playerid'
		        	)		    );


		

	
		public function getdata($team_id){



	        $conditions = array('TeamPlayer.teamid' => $team_id);
	        // $order = array('id' => 'desc');
	        return $this->find('all', compact('conditions'));

    			
		}
		
		
	}
?>