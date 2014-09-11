<div>
	<table>
	<tr>
		<td><?php echo $this->Html->link("Fixture list",array('controller'=>'AdminFixtures','action'=>'admin_edit',$fixtureid)); 	?></td>
	</tr>
	</table>
<h2><?php echo $home_team; ?></h2>
<table>
	<tr>
		<td><?php echo $this->Html->link("Balling Statistics",array('controller'=>'AdminFixtures','action'=>'admin_editfixt_ball_stat',$fixtureid)); ?></td>
		<td><?php echo $this->Html->link("Batting Statistics",array('controller'=>'AdminFixtures','action'=>'admin_edit_home_bat',$fixtureid)); ?></td>
	</tr>
</table>
<h2><?php echo $away_team; ?></h2>
<table>
	<tr>
		<td><?php echo $this->Html->link("Balling Statistics",array('controller'=>'AdminFixtures','action'=>'admin_edit_away_ball',$fixtureid)); ?></td>
		<td><?php echo $this->Html->link("Batting Statistics",array('controller'=>'AdminFixtures','action'=>'admin_edit_away_bat',$fixtureid)); ?></td>	
</tr>
</table>
</div>