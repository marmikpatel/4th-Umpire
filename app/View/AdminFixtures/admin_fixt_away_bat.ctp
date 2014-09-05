<h2><?php echo $away_team." "."Balling Statistics"; ?></h2>
<table id="myTable">
		<tr>
			<th>Player Name</th>
			<th></th>
			<th>Run(R)</th>
			<th>Ball(b)</th>
			<th>4s</th>
			<th>6s</th>
		</tr>
		<?php for ($i=0; $i <11 ; $i++) { ?>
			<tr class=<?php echo $i;?>>
			<td><input name=<?php echo 'Away'.$i."playername" ?> value="" type="text"></td>
			<td><input name=<?php echo 'Away'.$i."desc" ?> value="" type="text"></td>
			<td><input name=<?php echo 'Away'.$i."run" ?> value="" type="text"></td>
			<td><input name=<?php echo 'Away'.$i."ball" ?> value="" type="text"></td>
			<td><input name=<?php echo 'Away'.$i."4s" ?> value="" type="text"></td>
			<td><input name=<?php echo 'Away'.$i."6s" ?> value="" type="text"></td>


		</tr>
		 <?php } ?>
		<input name=<?php echo 'id' ?> value=<?php echo $away_id;  ?> type="hidden">

</table>