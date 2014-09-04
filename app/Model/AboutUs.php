<?php
	class AboutUs extends AppModel {
		public $useTable = 'about_us';
		public $name='AboutUs';

		public $hasOne = array(
        		'Image' => array(
			       'className' => 'Image',
			       'foreignKey'=>'aboutusid'
		        )
		    );


	
		public function getdata($team_id){

	        $conditions = array('AboutUs.team_id' => $team_id);
	        return $this->find('first', compact('conditions'));
    			
		}

		
	}
?>