<!DOCTYPE HTML SYSTEM "about:legacy-compat">
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login form</title>		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/form.css" />
		
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.6.1.min.js"></script>
	
    </head>
	
	<body>
	
		<div id = "picture"></div>

	
		<div id="wrapper"> 



		
		
		<?php $attributes = array('id' => 'form');
				echo form_open('welcome/validate_welcome', $attributes); ?>


		<div class="field">  
				<label for="state">Account Type</label>	
				<select class="state" name="state">
					
					<option class="droplist" value="student"  <?php echo set_select('state', 'student'); ?> >Student</option>
					<option class="droplist" value="teacher" <?php echo set_select('state', 'teacher'); ?> >Teacher</option>
					<option class="droplist" value="librarian" <?php echo set_select('state', 'librarian'); ?> >Librarian</option>
				</select>
				<?php echo form_error('state');   ?>  
			</div>
		</br></br>
		<div class="field">  
                <label for="name">User Name</label>  
                <input class="input" id="name" name="username" type="text" value="<?php echo set_value('username'); ?>" />
                <p class="hint">Enter your User Name.</p>
				<?php echo form_error('username');   ?>           
            </div>			
					
			<div class="field" id="register">  
                <label for="password">Password</label>  
                <input class="input" id="password" name="password" type="password" value="<?php echo set_value('password'); ?>" />
                <p class="hint">Enter your Password.</p>
				<?php echo form_error('password');   ?> 
            </div> </br></br>
			<input type="submit" name="submit" class="submit" value="Login"></br></br>
		
		</form>
		<?php $attributes = array('id' => 'form');
				echo form_open('welcome/sign_up_welcome', $attributes); ?>
				
		<div id = "no_acc">
			Don't have an account?
		</div>	
		<input type="submit" name="submit" class="submit" value="Create Account"></br></br>
		<?php
			/*echo "Dont have an account? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo anchor('welcome/sign_up_welcome','Create Account');*/
		?>
		</form>
</div>		
<?php //$this->load->view('common/footer'); ?>	

</body> <!-- closing body -->
</html> 