<!DOCTYPE HTML SYSTEM "about:legacy-compat">
<html>
	<head>
		<meta charset="UTF-8">
		<title>Form Validation - Gazpo.com</title>		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/form.css" />
		<link type="text/css" href="http://localhost/pi/css/jquery-ui-1.8.5.custom.css" rel="Stylesheet" />
		
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.6.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate-rules.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/pass_strength.js"></script>
		<script src="http://localhost/pi/js/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
		
		<script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "dd-M-yy" }).val()
       });
	</script>
		
    </head>
	
	<body>
	<div id = "picture"></div>
	<div id="wrapper"> 

		<?php $attributes = array('id' => 'form');
				echo form_open('welcome/create_user_welcome', $attributes); ?>
			
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
			
			

		
			
				
			<input type="submit" name="submit" class="submit" value="Submit"></br></br>
		</form>
		
<?php //$this->load->view('common/footer'); ?>	


	</div>  <!-- /wrapper  -->
	</body> <!-- closing body -->
</html> 