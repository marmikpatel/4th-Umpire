
<div>
<?php	 echo $this->Form->create("fixtureball", array(
                                                  'url' => array('controller' => 'AdminFixtures', 
                                                                  'action' => 'admin_edit_home_bat',$fixtureid)
                                    ));
?>
<h2><?php echo $home_team_name;  ?></h2>
<h3>Balling Statistics</h3>
	<table class="table table-hover">
		<tr>
				<th>Players</th>
				<th></th>
				<th>R</th>
				<th>B</th>
				<th>4s</th>
				<th>6s</th>
				
		</tr>
		<?php $i=0;
		 foreach ($home_team as $key => $value) {
		 		//echo "<pre>"; print_r($value); exit;
				if($value['FixtureBat']['team_id']==$homeid){ ?>	

		<tr>
				<td><input name=<?php echo $i.'player'; ?> id="player" value='<?php echo $value['Player']['first_name'];  ?>' type="text"></td>
				<td><input name=<?php echo $i.'detail'; ?> id="over" value='<?php echo $value['FixtureBat']['detail'];  ?>' type="text"></td>
				<td><input name=<?php echo $i.'run'; ?> id="match" value='<?php echo $value['FixtureBat']['run'];  ?>' type="text"></td>
				<td><input name=<?php echo $i.'balls'; ?> id="run" value='<?php echo $value['FixtureBat']['balls'];  ?>' type="text"></td>
				<td><input name=<?php echo $i.'4s'; ?> id="wickets" value='<?php echo $value['FixtureBat']['4s'];  ?>' type="text"></td>
				<td><input name=<?php echo $i.'6s'; ?> id="extra" value='<?php echo $value['FixtureBat']['6s'];  ?>' type="text"></td>
				<input name=<?php echo $i.'teamid'; ?> value='<?php echo $value['FixtureBat']['team_id']; ?>' type="hidden">
				<input name=<?php echo $i.'id'; ?> value='<?php echo $value['FixtureBat']['id']; ?>' type="hidden">
		</tr>				
		<?php $i++; } } ?>
	</table>
	<input type="submit" value="Submit" class="submit"/>

</form>
</div>