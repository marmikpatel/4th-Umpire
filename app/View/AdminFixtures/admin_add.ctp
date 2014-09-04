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
                                                                  'action' => 'admin_add')
                                    ));
       ?>

	<fieldset>
        <div>
             <p>
                <label>Date :</label>
                <input name="datepicker" id="datepicker" value="" type="text">
             </p> 
             <p>
                <label>Venue :</label>
                <input name="venue" id="venue" value=""  type="text">
             </p>
             <p>
                <label>Opponant Team :</label>
                <input name="opponant_team" id="opponant_team" value="" type="text">
             </p> 
             <p>
                <label>Result :</label>
                <input name="result" id="result" value="" type="text">
             </p> 
             <p>
                <label>Winner Team :</label>
                <input name="winner" id="winner" value="" type="text">
             </p>
             <p>
                <input type="submit" value="Sign In Now" class="submit"/>
             </p>
               
        </div>
    </fieldset>
</form>
</div>

