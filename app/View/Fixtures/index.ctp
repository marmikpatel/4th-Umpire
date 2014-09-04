<?php if($this->Session->check('admin')){ ?>
	<?php echo $this->Html->link("ADD",array('controller'=>'Fixtures','action'=>'admin_add')); }	?>
<div>
	<table class="table table-hover">
	
			<tr>
				<th>Date</th>
				<th>Opponant Team</th>
				<th>Venue</th>
				<th>Result</th>
			</tr>
			<?php
		foreach ($fixture as $key => $value) { ?>
			<tr>
				<td><?php echo $value['Fixture']['datetime'];  ?></td>
				<td><?php echo $value['Team']['team_name'];  ?></td>
				<td><?php echo $value['Fixture']['venue'];  ?></td>
				<td><?php echo $this->Html->link($value['Result']['score'],array('controller'=>'Fixtures','action'=>'fixture_stat',$value['Fixture']['id'])); ?></td>
				<?php if($this->Session->check('admin')){ ?>

				<td>	<p><?php echo $this->Html->link("Edit",array('controller'=>'Fixtures','action'=>'admin_edit',$value['Fixture']['id'])); ?></p>
						<p>Delete</p></td>
				<?php  }?>
			</tr>


	<?php
		}
	?>
	</table>
</div>