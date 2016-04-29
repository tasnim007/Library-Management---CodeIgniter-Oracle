<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/form.css" />

<div id = "header"></div>
<div id = "picture"></div>

<div id = "log">
    <?php

        
       /* $option['student'] = 'Student';
       
        $option['teacher'] = 'Teacher';
         $option['librarian'] = 'Librarian';
        $select = $option['student'];
        echo form_open('welcome/validate_welcome');
        echo "Account type : &nbsp;&nbsp;";
        echo form_dropdown('list',$option,"Student",'Student');
        echo "<br><br><br>";
        echo "Username : &nbsp;&nbsp;";
        echo form_input('username','');
        echo "Password : &nbsp;&nbsp;";
        echo form_password('password','');
        echo form_submit('submit','Log-in');
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<br><br>";
        echo "Dont have an account? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo anchor('welcome/sign_up_welcome','Create Account');*/
		
		echo form_open('welcome/validate_welcome');
	?>	
	<div id="wrapper">
		<div class="field">  
				<label for="state">Account Type</label>	
				<select class="state" name="state">
					<option class="droplist" ></option>
					<option class="droplist" value="student" <?php echo set_select('state', 'student'); ?> >Student</option>
					<option class="droplist" value="teacher" <?php echo set_select('state', 'teacher'); ?> >Teacher</option>
					<option class="droplist" value="librarian" <?php echo set_select('state', 'librarian'); ?> >Librarian</option>
				</select>
				<?php echo form_error('state');   ?>  
			</div>
		
		<div class="field">  
                <label for="name">User Name</label>  
                <input class="input" id="name" name="username" type="text" value="<?php echo set_value('username'); ?>" />
                <p class="hint">Enter your User Name.</p>
				<?php echo form_error('username');   ?>           
            </div>			
					
			<div class="field" id="register">  
                <label for="password">Password</label>  
                <input class="input" id="password" name="password" type="password" value="<?php echo set_value('password'); ?>" />
                <span id="result"></span>
				<?php echo form_error('password');   ?> 
            </div> 
			<input type="submit" name="submit" class="submit" value="Submit">
    
</div></div>

<div id = "footer"></div>
