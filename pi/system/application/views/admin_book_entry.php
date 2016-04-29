<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/form.css" />

<script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "dd-M-yy" }).val()
       });
</script>
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
<div id = "sidepaneright"></div>
<div id = "signForm">
    <?php

     /*   echo form_open('admin_insert/insert_item');
        echo "<br>";
        echo "Book Title : ";
        echo form_input('title','');
        echo "Author : &nbsp;&nbsp;";
        echo form_input('author','');
        echo "Publisher : &nbsp;&nbsp;";
        echo form_input('publisher','');
        echo "Subject : &nbsp;&nbsp;";
        echo form_input('subject','');
        echo "Edition : &nbsp;&nbsp;";
        echo form_input('edition','');
        echo "ISBN : &nbsp;&nbsp;";
        echo form_input('isbn','');
        echo "Publish Date : &nbsp;&nbsp;";
		$data = array(
		  'name'        => 'publish_date',
		  'id'          => 'datepicker', 
		  
		);

		echo form_input($data);
        echo "Almira ID : &nbsp;&nbsp;";
        echo form_input('almira_id','');
        echo "Row ID : &nbsp;&nbsp;";
        echo form_input('row_id','');
        echo "Column ID : &nbsp;&nbsp;";
        echo form_input('column_id','');
        
        echo form_submit('submit','Submit');*/

    ?>
	
	<div id="wrapper2"> 

	
		<?php $attributes = array('id' => 'form');
				echo form_open('admin_insert/insert_item', $attributes); ?>
			
			</br></br>
			
			<div class="field">  
                <label for="name">Book Title</label>  
                <input class="input" id="title" name="title" type="text" value="<?php echo set_value('title'); ?>" />
                <p class="hint">Enter Book Title.</p>
				<?php echo form_error('title');   ?>           
            </div>	

			<div class="field">  
                <label for="author">Author</label>  
                <input class="input" id="author" name="author" type="text" value="<?php echo set_value('author'); ?>" />
                <p class="hint">Enter author name. If multiple author then separate them by comma. </p>
				<?php echo form_error('author');   ?>           
            </div>		
					
			
			
			<div class="field">  
                <label for="publisher">Publisher</label>  
                <input class="input" id="publisher" name="publisher" type="text" value="<?php echo set_value('publisher'); ?>" />
                <p class="hint">Enter Publisher name.</p>
				<?php echo form_error('publisher');   ?>                        
            </div>
			
			<div class="field">  
                <label for="subject">Subject</label>  
                <input class="input" id="subject" name="subject" type="text" value="<?php echo set_value('subject'); ?>" />
                <p class="hint">Enter subject name.</p>
				<?php echo form_error('subject');   ?>                        
            </div>
			
			<div class="field">  
                <label for="edition">Edition</label>  
                <input class="input" id="edition" name="edition" type="text" value="<?php echo set_value('edition'); ?>" />
                <p class="hint">Enter edition no.</p>
				<?php echo form_error('subject');   ?>                        
            </div>
			
			<div class="field">  
                <label for="isbn">ISBN</label>  
                <input class="input" id="isbn" name="isbn" type="text" value="<?php echo set_value('isbn'); ?>" />
                <p class="hint">Enter isbn no.</p>
				<?php echo form_error('isbn');   ?>                        
            </div>
			
			 <div class="field">  
                <label for="publish_date">Publish Date</label>  
                <input class="input" id="datepicker" name="publish_date" type="text" value="<?php echo set_value('publish_date'); ?>" />
                <p class="hint">Enter Publish Date. </p>
				<?php echo form_error('publish_date');   ?>                        
            </div>
			
			<div class="field">  
				<label for="almira_id">Almira ID</label>	
				<select class="state" name="almira_id">
					
					<option class="droplist" value="1" <?php echo set_select('almira_id', '1'); ?> >1</option>
					<option class="droplist" value="2" <?php echo set_select('almira_id', '2'); ?> >2</option>
					<option class="droplist" value="3" <?php echo set_select('almira_id', '3'); ?> >3</option>
					<option class="droplist" value="4" <?php echo set_select('almira_id', '4'); ?> >4</option>
				</select>
				<p class="hint">Enter almira id.</p>
				<?php echo form_error('almira_id');   ?>  
			</div>
			
			<div class="field">  
				<label for="row_id">Row ID</label>	
				<select class="state" name="row_id">
					
					<option class="droplist" value="1" <?php echo set_select('row_id', '1'); ?> >1</option>
					<option class="droplist" value="2" <?php echo set_select('row_id', '2'); ?> >2</option>
					<option class="droplist" value="3" <?php echo set_select('row_id', '3'); ?> >3</option>
					<option class="droplist" value="4" <?php echo set_select('row_id', '4'); ?> >4</option>
				</select>
				<p class="hint">Enter row id.</p>
				<?php echo form_error('row_id');   ?>  
			</div>
			
			<div class="field">  
				<label for="column_id">Column ID</label>	
				<select class="state" name="column_id">
					
					<option class="droplist" value="1" <?php echo set_select('column_id', '1'); ?> >1</option>
					<option class="droplist" value="2" <?php echo set_select('column_id', '2'); ?> >2</option>
					<option class="droplist" value="3" <?php echo set_select('column_id', '3'); ?> >3</option>
					<option class="droplist" value="4" <?php echo set_select('column_id', '4'); ?> >4</option>
				</select>
				<p class="hint">Enter column id.</p>
				<?php echo form_error('column_id');   ?>  
			</div>
			
			

		
			
				
			<input type="submit" name="submit" class="submit" value="Add This"></br></br>
		</form>
		
		</div>
	
</div>
<div id = "footer"></div>
