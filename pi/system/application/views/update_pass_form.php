<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/form.css" />

<script type="text/javascript">
$(document).ready(function($){
			
					$('#accordion-4').dcAccordion({
						eventType: 'hover',
						autoClose: true,
						saveState: true,
						disableLink: true,
						menuClose: false,
						speed: 'slow',
						showCount: false
					});
					
});
</script>

<div id = "header"></div>
<div id = "picture"></div>
<div id = "sidepane">

    <?php

      include("side_menu.php");
    ?>
</div>
<div id ="sidepaneright"></div>
<div id = "signForm">
    <?php

    /*    echo form_open('membersArea/updatePassword');
        echo "</br></br>";

       echo "<table><tr valign = 'top'><td>Old Password :</td> <td>".form_password('password','')."</td><br></tr>";
       echo "<tr valign = 'top'><td>New Password :</td>";
       echo "<td>".form_password('npassword','')."</td></tr>";
       echo "<tr valign = 'top'><td>Retype Password : </td>";
       echo "<td>".form_password('repassword','')."</td></tr></table>";
       echo form_submit('submit','Submit');*/
 
    ?>
	
	<div id="wrapper4"> 



		
		
		<?php $attributes = array('id' => 'form');
				echo form_open('membersArea/updatePassword', $attributes); ?>


		
		</br></br>
		
		<div class="field" id="register">  
                <label for="password">Old Password</label>  
                <input class="input" id="password" name="password" type="password" value="<?php echo set_value('password'); ?>" />
                <p class="hint">Enter your old Password.</p>
				<?php echo form_error('password');   ?> 
            </div> 
			
		<div class="field" id="register">  
                <label for="npassword">New Password</label>  
                <input class="input" id="npassword" name="npassword" type="password" value="<?php echo set_value('npassword'); ?>" />
                <p class="hint">Enter your New Password.</p>
				<?php echo form_error('npassword');   ?> 
            </div> 	
			
			
			<div class="field" id="register">  
                <label for="repassword">New Password</label>  
                <input class="input" id="repassword" name="repassword" type="password" value="<?php echo set_value('repassword'); ?>" />
                <p class="hint">Retype New Password.</p>
				<?php echo form_error('repassword');   ?> 
            </div> 
			
			
			</br></br>
		
		
			<input type="submit" name="submit" class="submit" value="Submit"></br></br>
		
		</form>
		
</div>
   
	
	
</div>
<div id = "footer"></div>
