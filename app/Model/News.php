<?php
	class News extends AppModel {
		public $useTable = 'News';
		public $name='News';

		public $hasOne = array(
        		'Image' => array(
			       'className' => 'Image',
			       'foreignKey'=>'newsid'
		        )
		    );


	
		public function getdata($team_id){

	        $conditions = array('News.team_id' => $team_id);
	        // $order = array('id' => 'desc');
	        return $this->find('all', compact('conditions'));
    			
		}

		public function updatenews($newsid,$data){

			$news_title=$data['News']['title'];
            $news_desc=$data['News']['desc'];
            $news_imgurl=$data['News']['image'];
            $this->updateAll(
                    array('News.title' => "'$news_title'",'desc' => "'$news_desc'"),
                    array('News.id' => $newsid));
            if (!empty($news_imgurl)) {
 					$this->Image->updateAll(
                    array('Image.url' => "'$news_imgurl'"),
                    array('Image.newsid' => $newsid));       
           	}
 


		}

		public function view_news_desc($news_id){

	        $conditions = array('News.id' => $news_id);
	       	return $this->find('first', compact('conditions'));
		}

		public function addnews($team_id,$data){
					 
				$newsdata['News']['team_id']=$team_id;
	            $newsdata['News']['title']=$data['News']['title'];
	            $newsdata['News']['desc']=$data['News']['desc'];
	            $this->save($newsdata);

	            $imagedata['Image']['url']=$data['News']['image'];
	            $imagedata['Image']['teamid']=$team_id;
	            $imagedata['Image']['newsid']=$this->getLastInsertID();
	            $this->Image->save($imagedata);

	            $this->updateAll(
   					array('News.imageid' => $this->Image->getLastInsertID()),
    				array('News.id' => $this->getLastInsertID()));

		}

	}
?>