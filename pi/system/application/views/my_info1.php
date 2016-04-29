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

        echo '<br><br><br>';

         echo anchor('membersArea/my_info_marea','My info');   
        echo anchor('membersArea/update_info_marea','Updte info');
		echo anchor('membersArea/pass_update','Update Password');
		echo anchor('membersArea/user_all_books','All Books');
        echo anchor('membersArea/search_marea','Search');
        echo anchor('membersArea/history_marea','History');
        echo anchor('membersArea/due_marea','Due Status');
        echo anchor('membersArea/logout_marea','logout');
    ?>
</div>
<div id ="sidepaneright"></div>
<div id ="signForm"><h1><?php echo $msg; ?> :</h1>
    <?php
        foreach($ress as $result)echo "<table>
                <tr><td>Username :</td>  <td>".$result['USER_NAME']."</td></tr>".
                "<tr><td>Password :</td>  <td>".$result['PASSWORD']."</td></tr>".
                "<tr><td>Name :</td>  <td>".$result['NAME']."</td></tr>".
                "<tr><td>User type :</td>  <td>".$result['USER_TYPE']."</td></tr>".
                "<tr><td>Email Address :</td>  <td>".$result['EMAIL_ADDRESS']."</td></tr>".
                "<tr><td>Level :</td>  <td>".$result['LVL']."</td></tr>".
                "<tr><td>Term :</td>  <td>".$result['TRM']."</td></tr>".
                "<tr><td>Address :</td>  <td>".$result['ADDRESS']."</td></tr>".
                "<tr><td>Phone :</td>  <td>".$result['PHONE_NUMBER']."</td></tr>".
                "<tr><td>Date of birth :</td>  <td>".$result['DATE_OF_BIRTH']."</td></tr>".
                "</table>";
    ?>

</div>
<div id = "footer"></div>