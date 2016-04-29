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

	//include("side_menu_admin.php");
    ?>
</div>
<div id ="sidepaneright"></div>
<div id ="signForm">



 
<?php  

	foreach($user_data as $row) : 
		
		$user_id = $row->USER_ID;
		$user_name = $row->USER_NAME;
		$name = $row->NAME;
		$password = $row->PASSWORD;
		$email = $row->EMAIL_ADDRESS;
		$address = $row->ADDRESS;
		$phn = $row->PHONE_NUMBER;
		$type = $row->USER_TYPE;
		$dob = $row->DATE_OF_BIRTH;
		$lvl = $row->LVL;
		$trm = $row->TRM;
	endforeach;
	
	
	

	//	echo $req_id." ".$user_id." ".$book_id." ".$edition_no." ".$accession_id;
		
?>

<table class="style1" style="width: 70%;"><tbody>
<tr><td width="70%" class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label41" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: bold; 
text-decoration: underline; z-index: 1; left: 0px; top: 330px; width: 
217px; height: 60px;">Request ID:   <?php echo $user_id; ?> :</span>
</font></td><td width="75%">&nbsp; </td></tr></table></tbody>




<table class="style1" style="width: 50%;"><tbody>


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
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Full Name:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $name;?>
</span></font></td></tr>

<?php
	if ($lvl != NULL){
?>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Level:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $lvl;?>
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
<?php echo $trm;?>
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
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Phone No:</span>
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




</br></br>





<tr style="background-color: rgb(204, 204, 204);">
			
</tr></tbody></table>			

<?php

//$hidden = $req_id;
$hidden = array('id' => $user_id);
//echo $req_id;
echo form_open('admin/new_user_approve', '', $hidden);
echo form_submit('approve','Approve');	
echo form_submit('reject','Reject');				

?>
</form>



</div>
<div id = "footer"></div>
