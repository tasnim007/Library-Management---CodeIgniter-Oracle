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

	include("side_menu_admin.php");
    ?>
</div>
<div id ="sidepaneright"></div>
<div id ="signForm">
   <?php
    /* $attributes = array('id' => 'form');
				echo form_open('admin/admin_return_handler', $attributes);
	 
	 */
     
   /*  echo "Borrower id : ".form_input('borrower_id','');
	echo "accsession no :".form_input('accession_id','');
    // echo "accsession no : ".form_input('accsession_id','');


   echo form_submit('submit','submit');*/
   ?>
   
 		<div id="wrapper4"> 



		
		
		<?php $attributes = array('id' => 'form');
				echo form_open('admin/admin_return_handler', $attributes); ?>


		
		</br></br>
		<div class="field">  
                <label for="borrower_id">Borrower Id</label>  
                <input class="input" id="borrower_id" name="borrower_id" type="text" value="<?php echo set_value('borrower_id'); ?>" />
                <p class="hint">Enter Borrower Id.</p>
				<?php echo form_error('borrower_id');   ?>           
            </div>			
					
			<div class="field">  
                <label for="accsession_id">Accession NO</label>  
                <input class="input" id="accsession_id" name="accsession_id" type="test" value="<?php echo set_value('accsession_id'); ?>" />
                <p class="hint">Enter Accession NO.</p>
				<?php echo form_error('accsession_id');   ?> 
            </div> </br></br>
			<input type="submit" name="submit" class="submit" value="Submit"></br></br>
		
		</form>
		
</div>
   
   
   
</div>
<div id = "footer"></div>