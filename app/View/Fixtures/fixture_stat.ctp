<?php
	// echo "<pre>"; print_r($home_team_ball);
	// echo "<pre>"; print_r($home_team_bat);
	// echo "<pre>"; print_r($away_team_ball);
	// echo "<pre>"; print_r($away_team_bat);
	// echo "<pre>"; print_r($home_team_name);
	// echo "<pre>"; print_r($away_team_name); exit;
?>
<div>
	<h2><?php echo $home_team_name; ?> </h2>
	
	<table class="table table-hover">
		<tr>
				<th>Players</th>
				<th></th>
				<th>R</th>
				<th>B</th>
				<th>4s</th>
				<th>6s</th>
				<th>SR</th>
		</tr>
		<?php foreach ($home_team as $key => $value) {
				//echo "<pre>"; print_r($value[$key]['FixtureBat'][$key]['detail']); exit;
		 ?>
		 <tr>
		 	<td><?php echo $value['0']['Player']['first_name']; ?></td>
		 	<td><?php echo $value['0']['FixtureBat']['0']['detail'];?></td>
		 	<td><?php echo $value['0']['FixtureBat']['0']['run']?></td>
		 	<td><?php echo $value['0']['FixtureBat']['0']['balls']?></td>
		 	<td><?php echo $value['0']['FixtureBat']['0']['4s']?></td>
		 	<td><?php echo $value['0']['FixtureBat']['0']['6s']?></td>
		 	<td><?php echo $value['0']['FixtureBat']['0']['sr']?></td>
		 </tr>
		<?php }?>
	</table>

	<table class="table table-hover">
		<tr>
				<th>Players</th>
				<th>O</th>
				<th>M</th>
				<th>R</th>
				<th>W</th>
				<th>Econ</th>
				<th>Extras</th>
		</tr>
		<?php foreach ($home_team as $key => $value) {?>
		 <tr>
		 	<td><?php echo $value['0']['Player']['first_name']; ?></td>
		 	<td><?php echo $value['0']['FixtureBall']['0']['o'];?></td>
		 	<td><?php echo $value['0']['FixtureBall']['0']['m']?></td>
		 	<td><?php echo $value['0']['FixtureBall']['0']['r']?></td>
		 	<td><?php echo $value['0']['FixtureBall']['0']['w']?></td>
		 	<td><?php echo $value['0']['FixtureBall']['0']['econ']?></td>
		 	<td><?php echo $value['0']['FixtureBall']['0']['extra']?></td>
		 </tr>
		<?php }?>
	</table>


	<h2><?php echo $away_team_name; ?> </h2>
	
	<table class="table table-hover">
		<tr>
				<th>Players</th>
				<th></th>
				<th>R</th>
				<th>B</th>
				<th>4s</th>
				<th>6s</th>
				<th>SR</th>
		</tr>
		<?php foreach ($away_team as $key => $value) {
				//echo "<pre>"; print_r($value[$key]['FixtureBat'][$key]['detail']); exit;
		 ?>
		 <tr>
		 	<td><?php echo $value['0']['Player']['first_name']; ?></td>
		 	<td><?php echo $value['0']['FixtureBat']['0']['detail'];?></td>
		 	<td><?php echo $value['0']['FixtureBat']['0']['run']?></td>
		 	<td><?php echo $value['0']['FixtureBat']['0']['balls']?></td>
		 	<td><?php echo $value['0']['FixtureBat']['0']['4s']?></td>
		 	<td><?php echo $value['0']['FixtureBat']['0']['6s']?></td>
		 	<td><?php echo $value['0']['FixtureBat']['0']['sr']?></td>
		 </tr>
		<?php }?>
	</table>

	<table class="table table-hover">
		<tr>
				<th>Players</th>
				<th>O</th>
				<th>M</th>
				<th>R</th>
				<th>W</th>
				<th>Econ</th>
				<th>Extras</th>
		</tr>
		<?php foreach ($away_team as $key => $value) {?>
		 <tr>
		 	<td><?php echo $value['0']['Player']['first_name']; ?></td>
		 	<td><?php echo $value['0']['FixtureBall']['0']['o'];?></td>
		 	<td><?php echo $value['0']['FixtureBall']['0']['m']?></td>
		 	<td><?php echo $value['0']['FixtureBall']['0']['r']?></td>
		 	<td><?php echo $value['0']['FixtureBall']['0']['w']?></td>
		 	<td><?php echo $value['0']['FixtureBall']['0']['econ']?></td>
		 	<td><?php echo $value['0']['FixtureBall']['0']['extra']?></td>
		 </tr>
		<?php }?>
	</table>
</div>