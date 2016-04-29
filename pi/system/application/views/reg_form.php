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
	<div id="wrapper1"> 

	
		<?php $attributes = array('id' => 'form');
				echo form_open('welcome/create_user_welcome', $attributes); ?>
			
			</br></br>
			
			<div class="field">  
                <label for="name">Full Name</label>  
                <input class="input" id="name" name="name" type="text" value="<?php echo set_value('name'); ?>" />
                <p class="hint">Enter your Full name.</p>
				<?php echo form_error('name');   ?>           
            </div>	

			<div class="field">  
                <label for="user_name">User Name</label>  
                <input class="input" id="user_name" name="user_name" type="text" value="<?php echo set_value('user_name'); ?>" />
                <p class="hint">Enter a user name.</p>
				<?php echo form_error('user_name');   ?>           
            </div>		
					
			<div class="field" id="register">  
                <label for="password">Password</label>  
                <input class="input" id="password" name="password" type="password" value="<?php echo set_value('password'); ?>" />
                <span id="result"></span>
				<?php echo form_error('password');   ?> 
            </div> 
			
			<div class="field" id="register">  
                <label for="password1">Retype Password</label>  
                <input class="input" id="password1" name="password1" type="password" value="<?php echo set_value('password1'); ?>" />
                <span id="result"></span>
				<?php echo form_error('password1');   ?> 
            </div> 
			
			<div class="field">  
                <label for="email">Email</label>  
                <input class="input" id="email" name="email_address" type="text" value="<?php echo set_value('email_address'); ?>" />
                <p class="hint">Enter your valid email.</p>
				<?php echo form_error('email_address');   ?>                        
            </div>
			
			<div class="field">  
				<label for="gender">Select Type</label>	
				<div class = "gender-fields">
				<input type="radio" class="radio" name="user_type" value="s" <?php echo set_radio('gender', 's'); ?>> Student
				<input type="radio" class="radio" name="user_type" value="t" <?php echo set_radio('gender', 't'); ?>> Teacher	
				<p class="hint">Select your type. </p>
				<?php echo form_error('user_type');   ?>  
				</div>									
			</div> 
			
			<div class="field">  
				<label for="lvl">Level</label>	
				<select class="state" name="lvl">
					<option class="droplist" ></option>
					<option class="droplist" value="1" <?php echo set_select('lvl', '1'); ?> >1</option>
					<option class="droplist" value="2" <?php echo set_select('lvl', '2'); ?> >2</option>
					<option class="droplist" value="3" <?php echo set_select('lvl', '3'); ?> >3</option>
					<option class="droplist" value="4" <?php echo set_select('lvl', '4'); ?> >4</option>
				</select>
				<p class="hint">Only for sudent.</p>
				<?php echo form_error('lvl');   ?>  
			</div>
			
			<div class="field">  
				<label for="trm">Term</label>	
				<select class="state" name="trm">
					<option class="droplist" ></option>
					<option class="droplist" value="1" <?php echo set_select('trm', '1'); ?> >1</option>
					<option class="droplist" value="2" <?php echo set_select('trm', '2'); ?> >2</option>
				</select>
				<p class="hint">Only for sudent. </p>
				<?php echo form_error('trm');   ?>  
			</div>

			

			<div class="field">  
                <label for="address">Address</label>  
                <input class="input" id="address" name="address" type="text" value="<?php echo set_value('address'); ?>" />
                <p class="hint">Enter Your address. </p>
				<?php echo form_error('address');   ?>                        
            </div>

			<div class="field">  
                <label for="phn">Contact NO</label>  
                <input class="input" id="phone_number" name="phone_number" type="text" value="<?php echo set_value('phone_number'); ?>" />
                <p class="hint">Enter Your contact Number. </p>
				<?php echo form_error('phone_number');   ?>                        
            </div>
			
			<div class="field">  
                <label for="dob">Date of Birth</label>  
                <input class="input" id="datepicker" name="dob" type="text" value="<?php echo set_value('dob'); ?>" />
                <p class="hint">Enter Your date of Birth. </p>
				<?php echo form_error('dob');   ?>                        
            </div>
			
			 
			
			
				
			<input type="submit" name="submit" class="submit" value="Submit"></br></br>
		</form>
		
<?php //$this->load->view('common/footer'); ?>	


	</div>  <!-- /wrapper  -->
	</body> <!-- closing body -->
</html> 