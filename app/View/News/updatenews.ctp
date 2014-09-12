 <?php
        
  /*if ($this->Session->read('User.position') =='teamadmin') {*/
      // echo $this->Form->create('News',array('method'=>'POST'),'type'=>'file'); 
       echo $this->Form->create('News', array(
                              'url' => array('controller'=>'News','action'=>'updatenews',
                               $data['News']['id']),'type'=>'file'));
                          

      echo $this->Form->input('title',array(
                          'label'=>'Title :','value'=> $data['News']['title'],'type'=>'textarea','rows'=>'1','cols'=>'20'));
      echo $this->Form->input('desc',array(
                          'label'=>'Description :','value'=> $data['News']['desc'],'type'=>'textarea','rows'=>'4','cols'=>'50'));
      echo $data['Image']['url'];
      echo $this->Form->input('image',array(
                          'type'=>'file'));
      echo $this->Form->input('Update',array(
                          'label'=>'','type'=>'submit'));
      echo $this->Form->end();
 /* } */
?>