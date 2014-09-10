<?php
	//echo "<pre>"; print_r($fixturedata); exit;

?>
<script type="text/javascript">
 $(document).ready(function() {
       // $( "#datepicker" ).datepicker();
        $( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
});

</script>
<div>

<?php 
            echo $this->Form->create("fixture", array(
                                                  'url' => array('controller' => 'AdminFixtures', 
                                                                  'action' => 'admin_edit',$fixtureid)
                                    ));
?>
			<fieldset>
				<div>
					<?php foreach ($fixturedata as $key => $value) {
						//echo "<pre>"; print_r($value); exit;
					 ?>
					<p>
						<label>Date :</label>
						<input name="datepicker" id="datepicker" value='<?php echo $value['Fixture']['datetime'];  ?>' type="text">
					</p>
					<p>
                		<label>Venue :</label>
                		<input name="venue" id="venue" value='<?php echo $value['Fixture']['venue']; ?>'  type="text">
					</p>
					<p>
						<label>Opponant Team :</label>
                		<input name="opponant_team" id="opponant_team" value='<?php echo $value['Team']['team_name'];  ?>' type="text">
					</p>
					<p>
						<label>Result :</label>
                		<input name="result" id="result" value='<?php echo $value['Fixture']['score'];  ?>' type="text">
					</p>
					<p>
						<label>Winner Team :</label>
                		<input name="winner" id="winner" value='<?php echo $value['Winner']['team_name'];  ?>' type="text">
					</p>	
					
					<?php } ?>
					<p>
                		<input type="submit" value="Next" class="submit"/>
             		</p>
				</div>
			</fieldset>	
			</form>
</div>	