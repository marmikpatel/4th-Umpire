
<table table table-hover>

<?php foreach ($image as $image) {
		//echo "<pre>";print_r($image);exit;
?>

<tr>
	<td><?php echo $this->Html->link($image['Image']['url'],array('controller'=>'TeamPlayers','action'=>'player_desc',$image['Image']['playerid'])); ?></td>
</tr>
<?php }?>

</table>








