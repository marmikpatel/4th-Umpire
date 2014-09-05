<div>
<?php   
			echo $this->Form->create("fixtureBall", array(
                                            'url' => array('controller' => 'AdminFixtures', 
                                                             'action' => 'admin_fixt_home_bat',$fixtureid)
                                    ));
?>
	<h2><?php echo $home_team['Team']['team_name'].' '.'Batting Statistics'; ?></h2>
	<div id="HomeTeam">
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
			<td><input name=<?php echo 'Home'.$i."playername" ?> value="" type="text"></td>
			<td><input name=<?php echo 'Home'.$i."desc" ?> value="" type="text"></td>
			<td><input name=<?php echo 'Home'.$i."run" ?> value="" type="text"></td>
			<td><input name=<?php echo 'Home'.$i."ball" ?> value="" type="text"></td>
			<td><input name=<?php echo 'Home'.$i."4s" ?> value="" type="text"></td>
			<td><input name=<?php echo 'Home'.$i."6s" ?> value="" type="text"></td>
		</tr>
		<?php } ?>
	</table>
	<input type="hidden" value=<?php echo $fixtureid; ?> id="fid" />
	<div id="AwayTeam">
	

	</div>
	<input type="submit" value="Submit" class="submit"/>
	</form>
		<div class="add_table">ADD Away Team Data</div>

	</div>

</div>

<script type="text/javascript">
$(document).ready(function() {
	var ajaxurl = '<?php echo Router::Url(array('controller' => 'AdminFixtures', 'action' => 'admin_fixt_away_bat')); ?>';
	$('.add_table').click(function (){
		fixtureid=$('#fid').val();	
		data="fixtureid="+fixtureid;
		//url="admin_fixt_away_bat";
		$.ajax({
			url:ajaxurl,
			data:data,
			dataType:"html",
			type:"post",
			success:function(response){
				$('#AwayTeam').append(response);
				$(".add_table").css("display", "none");
			},
			error:function(response){}
		});
	});

	 

});
</script>
<STYLE TYPE="text/css">
.add_table
{
	background-color: windowframe;
    color: white;
    display: block;
    height: 40px;
    line-height: 40px;
    text-decoration: none;
    width: 100px;
    text-align: center;
    margin-top: 9px;
}
</STYLE>