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

				if(!empty($this->request->data)){
					if(!empty($this->request->data['News']['title']) and
									!empty($this->request->data['News']['desc'])) {
						$data= $this->request->data;
						$team_id='1'; //
	                   $path=$this->News->getimage();
				     	// echo "<pre>"; print_r($path);exit;
						$this->News->addnews($team_id,$data,$path);	
						$this->Session->setFlash('News added succesfully!');
			        	$this->redirect(array('controller' => 'News','action' => 'index'));
  				
			       		
	                }else{
	                	$this->Session->setFlash(__('Both fields are mandatory!'));
						$this->redirect(array('controller'=>'News','action'=>'addnews'));
					}
				}			
			
		}

		public function updatenews($newsid){
				if(!empty($this->request->data)){

					if(!empty($this->request->data['News']['title']) and
									!empty($this->request->data['News']['desc'])) {
						$data= $this->request->data;


						if (!empty($this->request->data['News']['image']['name']) and
										!empty($this->request->data['News']['image']['type'])) {


		                   $path=$this->News->getimage();
						}
							$this->News->updatenews($newsid,$data);
		                    $this->Session->setFlash(__('News Updated succesfully!'));
		                    $this->redirect(array('controller'=>'News','action'=>'index'));
					}else{
	                	$this->Session->setFlash(__('Both fields are mandatory!'));
						$this->redirect(array('controller'=>'News','action'=>'addnews'));
					}
				}else{
					$this->set('data',$this->News->view_news_desc($newsid));
				}
			
			

			
		}

		public function view_news_desc($newsid){
			$this->set('data',$this->News->view_news_desc($newsid));
		}

		public function removenews($newsid){

				$this->Image->deleteAll(array('Image.newsid' => $newsid));
				$this->News->deleteAll(array('News.id' => $newsid));
				$this->Session->setFlash(__('News removed succesfully!'));
	            $this->redirect(array('controller'=>'News','action'=>'index'));

		}

		
	}
?>