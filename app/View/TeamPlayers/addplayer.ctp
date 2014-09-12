 <?php
        

  /*if ($this->Session->read('User.position') =='teamadmin') {*/
    echo $this->Form->create('Player', array(
                             'url' => array('controller' => 'Players','action' => 'addplayer'),
                               'type'=>'file'));
                          // pass teamid as a params

      echo $this->Form->input('fname',array(
                          'label'=>'First Name :','type'=>'text')); 
      echo $this->Form->input('lname',array(
                          'label'=>'Last Name :','type'=>'text'));
      echo $this->Form->input('birthdate',array(
                          'label'=>'Date Of Birth :',
                          'type'=>"date"));
      echo $this->Form->input('email',array(
                          'label'=>'Email Id :','type'=>'text')); 
      echo $this->Form->input('contact',array(
                          'label'=>'Contact no. :','type'=>'text'));
 //Role and position are left
      echo $this->Form->input('image',array(
                          'type'=>'file'
                            ));
      echo $this->Form->input('add',array(
                          'label'=>'','type'=>'submit'));
      echo $this->Form->end();
 /* } */
?>