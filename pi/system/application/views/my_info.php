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
<div id ="signForm">
   
	
	
<?php

foreach($ress as $row) : 
$id = $row->USER_ID;			
$user_name = $row->USER_NAME;
$full_name = $row->NAME;		
$level = $row->LVL;
$term =	$row->TRM;
$email  =	$row->EMAIL_ADDRESS;
$address =	$row->ADDRESS;
$phn =	$row->PHONE_NUMBER;
$dob =	$row->DATE_OF_BIRTH;
if($row->USER_TYPE == 's')
	$type = "Student";
else $type = "teacher";

endforeach;
	
?>


<h2>Personal info :</h2>

<table class="style1" style="width: 70%;"><tbody>
<tr><td width="25%" class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label41" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: bold; 
text-decoration: underline; z-index: 1; left: 0px; top: 330px; width: 
217px; height: 19px;">User Details :</span>
</font></td><td width="75%">&nbsp; </td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Full Name:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $full_name;?>
</span></font></td></tr>


<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">User Name:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $user_name;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Type:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $type;?>
</span></font></td></tr>

<?php if ($type == "Student"){
?>
<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Level :</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $level;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Term:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $term;?>
</span></font></td></tr>

<?php
}
?>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Email:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $email;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Address:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $address;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Phone:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $phn;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Date of Birth:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $dob;?>
</span></font></td></tr>
</tbody></table>

<br/>	

</div>
<div id = "footer"></div>