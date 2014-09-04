<div>
	<?php 
            echo $this->Form->create("Login", array(
                                                  'url' => array('controller' => 'Admins', 
                                                                  'action' => 'index')
                                    ));
       ?>

	<fieldset>
        <div>
             <p>
                <label>Username :</label>
                <input name="login" id="login" value="" type="text">
             </p> 
             <p>
                <label class="labelclass">Password :</label>
                <input name="pass" id="pass" value=""  type="password">
             </p>
             <p>
                <input type="submit" value="Sign In Now" class="submit"/>
             </p>
               
        </div>
    </fieldset>
</form>
</div>