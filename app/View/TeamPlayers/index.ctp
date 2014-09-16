<STYLE TYPE="text/css">
	.album_list_img li
	{
		list-style-type: none;
		float: left;
		padding: 20px 95px;
	}
</STYLE>

<?php if($this->Session->check('admin')){ ?>

                          <a href="<?php echo $this->Html->url(array(
                          'controller' => 'TeamPlayers',
                          'action' => 'addplayer')); ?>">
                          Add player</a>
 <?php } ?>

<ul class="album_list_img">
<?php foreach ($data as $key=>$value) {
 // echo "<pre>"; print_r($value); exit;

  
?>


<li>
	<a href="<?php echo $this->Html->url(array(
                          'controller' => 'Players',
                          'action' => 'player_desc',$value['Player']['id'])) ?>">
                           <img src=<?php echo '/4th-Umpire/'.$value['Image']['url']; ?> alt="icon">
                          </a>
  <?php if($this->Session->check('admin')){ ?>
  <p>
        <?php echo $this->Html->link("Edit",array('controller'=>'Players','action'=>'edit_player',$value['Player']['id'])); ?>
            <?php echo $this->Html->link("Delete",array('controller'=>'Players','action'=>'deleteplayer',$value['Player']['id'])); ?>
        <?php  }?> </p>
</li>


<?php }?>

</ul>








