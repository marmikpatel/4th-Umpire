<button type="button">
                          <a href="<?php echo $this->Html->url(array(
                          'controller' => 'TeamPlayers',
                          'action' => 'addplayer')); ?>">
                          Add player</a></button>

<table table table-hover>
<?php foreach ($image as $image) {
?>

<tr>
<td><a href="<?php echo $this->Html->url(array(
                          'controller' => 'Players',
                          'action' => 'player_desc',$image['Image']['playerid'])) ?>">
                           <img src=<?php echo '/4th-Umpire/'.$image['Image']['url']; ?> alt="icon">
                          </a></td>

</tr>
<?php }?>

</table>








