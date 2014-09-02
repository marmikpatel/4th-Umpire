<?php
	class Admin extends AppModel {
		public $useTable = 'admin';
		public $name='Admin';

		public $hasOne= array('User'=>array(
			 					'className'=>'User',
			 					'foreignKey'=>'adminid'
			 				 					));



		public function getdata($data)
		{
			//echo "<pre>"; print_r(); exit;
			// $find=$this->find('all');
			
			$find=$this->find('all',array('conditions'=>array(
											'AND'=>array(
												array('User.username'=>$data['login']),
												array('User.password'=>$data['pass'])
										))));

			if(!empty($find))
			{
				return $find;
			}
			else
			{
				echo "false";
			}
		}
	}
?>