<?php 
	class AdminsController extends AppController{
		public $name = 'Admins';
		public $uses=  array('Admin');
		public $helpers= array('Html' , 'Form');


		public function index ()
		{

			if(!empty($this->request->data))
			{
				$find=$this->Admin->getdata($this->request->data);
				//echo "<pre>"; print_r($find); exit;
				foreach ($find as $key => $value) {
					//echo "<pre>"; print_r($value); exit;
					$this->Session->write('admin',$value['Admin']['id']);

				}
			$this->redirect(array('controller' =>'Home','action' => 'admin_home'));


			}
			
		}

		public function logout()
		{
			 $this->Session->delete('admin');
			 $this->redirect(array('controller'=>'Home','action'=>'index'));

		}
	}	

?>