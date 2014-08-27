<?php //echo "<pre>"; print_r($fixture); exit; ?>
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
				<td><?php echo $this->Html->link($value['Result']['score'],array('controller'=>'Fixtures','action'=>'fixture_stat',$value['Fixture']['id'])); ?>
			</tr>


	<?php
		}
	?>
	</table>
</div>