 <?php
        

 //echo "<pre>"; print_r($data); exit;
?>
<?php if($this->Session->check('admin')){ ?>


                          <a href="<?php echo $this->Html->url(array(
                          'controller' => 'News',
                          'action' => 'addnews')); ?>">
                          Add news</a>
<?php }  ?>
<table table table-hover>


<?php foreach ($data as $data) :
//echo "<pre>"; print_r($data); exit;

?>


<tr>
<?php if($this->Session->check('admin')){ ?>
  <td rowspan="3">
<?php } else { ?>
  <td rowspan="2">
    <?php } ?>
  
	   <img src=<?php echo '/4th-Umpire/'.$data['Image']['url']; ?> alt="icon">
</td>
	<td> <h2><?php echo  $data['News']['title'] ;?></h2> </td>
</tr>

<tr>
	<td><b><?php echo $this->Text->truncate($data['News']['desc'],
                                               500,
                                              array(
                                                  'ellipsis' => '...',
                                                  'exact' => false
                                              )
                                          );
?></b>
		<a href="<?php echo $this->Html->url(array(
                          'controller' => 'News',
                          'action' => 'view_news_desc',$data['News']['id'])); ?>">
                          Read More...</a></td>
</tr>
<?php if($this->Session->check('admin')){ ?>
<tr>
	<td>
		<a href="<?php echo $this->Html->url(array(
                          'controller' => 'News',
                          'action' => 'removenews',$data['News']['id'])); ?>">Remove</a>

                     
        <a href="<?php echo $this->Html->url(array(
                          'controller' => 'News',
                          'action' => 'updatenews',$data['News']['id'])); ?>">Update</a>
                     
	</td>
</tr>
<?php } ?>

<?php endforeach ;?>

</table>








