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

        echo form_open('membersArea/update_info_Handler');
        echo "<br><table>";
        foreach($ress as $result){
        echo "<tr valign = 'top'><td>Name : </td><td>".form_input('name',$result['NAME'])."</td></tr>";
     echo '<tr valign = \'top\'><td>Username : </td><td>'.form_input('user_name',$result['USER_NAME'])."</td></tr>";

        echo "<tr valign = 'top'><td>User-Type : </td><td>";
        echo form_input('user_type',$result['USER_TYPE'])."</td></tr>";
        echo "<tr valign = 'top'><td>Email : </td><td>";
        echo form_input('email_address',$result['EMAIL_ADDRESS'])."</td></tr>";
        echo "<tr valign = 'top'><td>Level : </td><td>";
        echo form_input('lvl',$result['LVL'])."</td></tr>";
        echo "<tr valign = 'top'><td>Term : </td><td>";
        echo form_input('trm',$result['TRM'])."</td></tr>";
        echo "<tr valign = 'top'><td>Address : </td><td>";
        echo form_input('address',$result['ADDRESS'])."</td></tr>";
        echo "<tr valign = 'top'><td>Phone : </td><td>";
        echo form_input('phone_number',$result['PHONE_NUMBER'])."</td></tr>";
        echo "<tr valign = 'top'><td>Date-of-birth : </td><td>";
        for($i = 1;$i <=31 ; ++$i)$option_day[$i] = $i;
        for($i = 1988;$i <=2008 ; ++$i)$option_year[$i] = $i;
         $option_month['Jan'] = 'Jan';
        $option_month['Feb'] = 'Feb';
        $option_month['Mar'] = 'Mar';
        $option_month['Apr'] = 'Apr';
        $option_month['May'] = 'May';
        $option_month['Jun'] = 'Jun';
        $option_month['Jul'] = 'Jul';
        $option_month['Aug'] = 'Aug';
        $option_month['Sep'] = 'Sep';
        $option_month['Oct'] = 'Oct';
        $option_month['Nov'] = 'Nov';
        $option_month['Dec']= 'Dec';

        echo form_dropdown('day',$option_day).form_dropdown('month',$option_month).form_dropdown('year',$option_year)."</td></tr>";
        
        }
        echo "</table>";echo "<br>".form_submit('submit','Submit');
        ?>
</div>
<div id = "footer"></div>
