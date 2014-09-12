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
            $news_imgurl=$data['News']['image']['name'];

            if(!empty($news_imgurl)){

            $this->updateAll(
                    array('News.title' => "'$news_title'",'desc' => "'$news_desc'"),
                    array('News.id' => $newsid));
            $path=$this->getimage();

            $this->Image->updateAll(
                    array('Image.url' => "'$path'"),
                    array('Image.newsid' => $newsid));

            }else{
            $this->updateAll(
                    array('News.title' => "'$news_title'",'desc' => "'$news_desc'"),
                    array('News.id' => $newsid));

            }


            
 


		}

		public function view_news_desc($news_id){

	        $conditions = array('News.id' => $news_id);
	       	return $this->find('first', compact('conditions'));
		}

		public function addnews($team_id,$data,$path){

				$newsdata['News']['team_id']=$team_id;
	            $newsdata['News']['title']=$data['News']['title'];
	            $newsdata['News']['desc']=$data['News']['desc'];
	            $this->save($newsdata);


	            $imagedata['Image']['url']=$path;
	            	           	// echo "<pre>"; print_r($imagedata);exit;

	            $imagedata['Image']['teamid']=$team_id;
	            $imagedata['Image']['newsid']=$this->getLastInsertID();
	            $this->Image->save($imagedata);

	            $this->updateAll(
   					array('News.imageid' => $this->Image->getLastInsertID()),
    				array('News.id' => $this->getLastInsertID()));

		}



		public function getimage(){
			   
			  	$path = "img/newsphoto/";
			    $valid_formats = array("jpg", "png", "gif", "bmp","JPG");
			           if(isset($_FILES)){

			                $name = $_FILES['data']['name']['News']['image'];
			             	 $size = $_FILES['data']['size']['News']['image'];
			             	
			            if(strlen($name)){
			                    list($txt, $ext) = explode(".", $name);

			                    if(in_array($ext,$valid_formats)){
			                     
			                        if($size<(1024*1024)){
			                            $actual_image_name =$ext;
			                            $tmp = $_FILES['data']['tmp_name']['News']['image'];

			                            if(move_uploaded_file($tmp, $path.$actual_image_name)){
			                                $uploadedfile = $path.$actual_image_name;
			                                list($width,$height)=getimagesize($uploadedfile);
			                                if($width < 100)
			                                    $newwidth = 100;
			                               else
			                                    $newwidth=100;
			                               if($height < 300)
			                                    $newheight = 100;
			                               else
			                                   $newheight=100;
			                                if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG"){
			                                     $src = imagecreatefromjpeg($uploadedfile);
			                                  }else if($ext=="png") {
			                                      $src = imagecreatefrompng($uploadedfile);
			                                  }else {
			                                      $src = imagecreatefromgif($uploadedfile);
			                                  }
			                                  $tmp1 = @imagecreatetruecolor($newwidth,$newheight)
			                                     or die('Cannot Initialize new GD image stream');
			                                  imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
			                                  $filename1 = $path.$name;
			                                  if($ext=="jpg" || $ext=="jpeg" ||$ext=="JPG"){
			                                      imagejpeg($tmp1,$filename1,100);
			                                  }else if($ext=="png") {
			                                      imagepng($tmp1,$filename1);
			                                  }else {
			                                      imagegif($tmp1,$filename1);
			                                  }
			                                  imagedestroy($src);
			                                  imagedestroy($tmp1);
			                                  unlink($path.$actual_image_name);	
			                                  return $path.$name; 
			                                   

			                             }
			                             else
			                                 echo "failed";
			                         }
			                         else
			                             echo "Image file size max 1 MB";
			                     }
			                   else
			                       echo "Invalid file format..";
			               }
			               else
			                   echo "Please select image..!";
			               exit;
			           }
			  }
			    
                






		
	}
?>