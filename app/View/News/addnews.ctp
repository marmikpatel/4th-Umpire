 <?php
        

  /*if ($this->Session->read('User.position') =='teamadmin') {*/
    echo $this->Form->create('News', array(
                              'url' => array('controller' => 'News','action' => 'addnews'),
                               'type'=>'file'));
                          // pass teamid as a params

      echo $this->Form->input('title',array(
                          'label'=>'Title :','type'=>'textarea','rows'=>'1','cols'=>'20'));
      echo $this->Form->input('desc',array(
                          'label'=>'Description :','type'=>'textarea','rows'=>'4','cols'=>'50'));
      echo $this->Form->input('image',array(
                          'type'=>'file'
                            ));
      echo $this->Form->input('add',array(
                          'label'=>'','type'=>'submit'));
      echo $this->Form->end();
 /* } */
?>