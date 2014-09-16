<script type="text/javascript">
 $(document).ready(function() {
       // $( "#datepicker" ).datepicker();
        $( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
});

</script>

<?php //echo "<pre>"; print_r($player); exit; ?>
<div>
<?php	echo $this->Form->create('player', array(
                              'url' => array('controller'=>'Players','action'=>'edit_player',
                               $player['Player']['id']),'type'=>'file')); 
		
		echo $this->Form->input('first_name',array(
                          'label'=>'First Name:','value'=> $player['Player']['first_name'],'type'=>'text'));

		echo $this->Form->input('last_name',array(
                          'label'=>'last Name:','value'=> $player['Player']['last_name'],'type'=>'text'));
		echo $this->Form->input('bday',array(
                          'label'=>'Birthday:','value'=> $player['Player']['bday'],'type'=>'text','id'=>'datepicker'));

		echo $this->Form->input('email',array(
                          'label'=>'Email:','value'=> $player['Player']['email'],'type'=>'text'));
		echo $this->Form->input('phone_number',array(
                          'label'=>'Number:','value'=> $player['Player']['phone_number'],'type'=>'text'));
		echo "<img src= '/4th-Umpire/".$player['Image']['url']."'  alt='icon'> ";
		 echo $this->Form->input('Change_Image',array('type'=>'file'));

		echo $this->Form->end("Update");

?>

</div>