<?php 
	class NewsController extends AppController{
		public $name = 'News';
		public $helpers= array('Html' , 'Form');
		public $uses=array('News','Image');

		public function index(){
			
			$team_id='1'; //
			$this->set('data',$this->News->getdata($team_id));
	
		}

		public function addnews(){

			/*if ($this->Session->read('User.position') =='teamadmin') {*/
				if(!empty($this->request->data)){
					if(!empty($this->request->data['News']['title']) and
									!empty($this->request->data['News']['desc'])) {
						$data= $this->request->data;
						$team_id='1'; //
						$this->News->addnews($team_id,$data);					
	                    $this->Session->setFlash(__('News added succesfully!'));
	                    $this->redirect(array('controller'=>'News','action'=>'index'));
	                }else{
	                	$this->Session->setFlash(__('Both fields are mandatory!'));
						$this->redirect(array('controller'=>'News','action'=>'addnews'));
					}
				}
			// }
			
			
		}

		public function updatenews($newsid){
			/*if ($this->Session->read('User.position') =='teamadmin') {*/
				if(!empty($this->request->data)){
					if(!empty($this->request->data['News']['title']) and
									!empty($this->request->data['News']['desc'])) {
						$data= $this->request->data;
						$this->News->updatenews($newsid,$data);
	                    $this->Session->setFlash(__('News Updated succesfully!'));
	                    $this->redirect(array('controller'=>'News','action'=>'index'));
					}else{
	                	$this->Session->setFlash(__('Both fields are mandatory!'));
						// $this->redirect(array('controller'=>'News','action'=>'addnews'));
					}
				}else{
					$this->set('data',$this->News->view_news_desc($newsid));
				}
			// }
			
			

			
		}

		public function view_news_desc($newsid){
			$this->set('data',$this->News->view_news_desc($newsid));
		}

		public function removenews($newsid){
			/*if ($this->Session->read('User.position') =='teamadmin') {*/

				$this->Image->deleteAll(array('Image.newsid' => $newsid));
				$this->News->deleteAll(array('News.id' => $newsid));
				$this->Session->setFlash(__('News removed succesfully!'));
	            $this->redirect(array('controller'=>'News','action'=>'index'));
   			// }


		}


	}
?>