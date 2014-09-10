
<div>
<?php	 echo $this->Form->create("fixtureball", array(
                                                  'url' => array('controller' => 'AdminFixtures', 
                                                                  'action' => 'admin_editfixt_ball_stat',$fixtureid)
                                    ));
?>
<h2><?php echo $home_team_name;  ?></h2>
<h3>Balling Statistics</h3>
	<table class="table table-hover">
		<tr>
				<th>Players</th>
				<th>O</th>
				<th>M</th>
				<th>R</th>
				<th>W</th>
				<th>Extras</th>
		</tr>
		<?php foreach ($home_team as $key => $value) {
				if($value['FixtureBall']['team_id']=='1'){ ?>	

		<tr>
				<td><input name=<?php echo $key.'player'; ?> id="player" value='<?php echo $value['Player']['first_name'];  ?>' type="text"></td>
				<td><input name=<?php echo $key.'over'; ?> id="over" value='<?php echo $value['FixtureBall']['o'];  ?>' type="text"></td>
				<td><input name=<?php echo $key.'match'; ?> id="match" value='<?php echo $value['FixtureBall']['m'];  ?>' type="text"></td>
				<td><input name=<?php echo $key.'run'; ?> id="run" value='<?php echo $value['FixtureBall']['r'];  ?>' type="text"></td>
				<td><input name=<?php echo $key.'wickets'; ?> id="wickets" value='<?php echo $value['FixtureBall']['w'];  ?>' type="text"></td>
				<td><input name=<?php echo $key.'extra'; ?> id="extra" value='<?php echo $value['FixtureBall']['extra'];  ?>' type="text"></td>
		</tr>				
		<?php } } ?>
	</table>
	<input type="submit" value="Submit" class="submit"/>

</form>
</div>