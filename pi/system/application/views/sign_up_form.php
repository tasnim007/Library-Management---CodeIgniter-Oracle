<!--
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
-->	
<script src="http://localhost/pi/js/pass_strength.js"></script>	
<script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "dd-M-yy" }).val()
       });
</script>
   
<div id = "header"></div>
<div id = "picture"></div>
<div id = "signForm">
    <?php

       echo form_open('welcome/create_user_welcome');
        echo "<br>";
        echo "Name : ".form_input('name','');
        
        echo 'Username : '.form_input('user_name','');
        
        echo "Password : &nbsp;&nbsp;";
        //echo form_password('password','');
?>		
		<div id="register">
					
					<input name="password" id="password" type="password"/>
					<span id="result"></span>
		</div>	
<?php		
        echo "Retype Password : &nbsp;&nbsp;";
        echo form_password('password1','');
        echo "User-Type : &nbsp;&nbsp;";
        echo form_input('user_type','');
        echo "Email : &nbsp;&nbsp;";
        echo form_input('email_address','');
        echo "Level : &nbsp;&nbsp;";
        echo form_input('lvl','');
        echo "Term : &nbsp;&nbsp;";
        echo form_input('trm','');
        echo "Address : &nbsp;&nbsp;";
        echo form_input('address','');
        echo "Phone : &nbsp;&nbsp;";
        echo form_input('phone_number','');
        echo "Date-of-birth : &nbsp;&nbsp;";
		$data = array(
              'name'        => 'dob',
              'id'          => 'datepicker', 
			  
            );

		echo form_input($data);

		echo form_submit('submit','Submit');

        ?>

        <?php echo validation_errors('<p class = "errors">');?>
</div>
<div id = "footer"></div>
