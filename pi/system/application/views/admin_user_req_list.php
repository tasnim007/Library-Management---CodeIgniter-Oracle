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
<div id ="sidepaneright"></div>
<div id ="signForm">

	

<h2>List of Borrow Requests:</h2>

<?php
if (!isset($user_data))	echo "No request";
else {
?>

<table id="ctl00_MSPlace_GVr" style="color: Black; background-color: White; border: 2px none rgb(153, 153, 153); font-size: small; font-weight: normal; border-collapse: collapse; z-index: 1; left: 0px; top: 0px; height: 147px; width: 500px;" border="2" cellpadding="3" cellspacing="0" rules="all">
<tbody><tr style="color: White; background-color: Black; border-style:ridge; font-weight: bold;" valign="middle" align="center">
			
			<th scope="col">Request id</th>
			<th scope="col">Proposed User name</th>
			<th scope="col">Details</th>
</tr>
 
<?php  

		foreach($user_data as $row) : 
		$name = $row->USER_NAME;
		$id = $row->USER_ID;
		/*$inner_sql = "select user_name from users where user_id = $id ";
		$s = $this->db->query($inner_sql);
		foreach ($s->result() as $dest) {
			$name = $dest->USER_NAME;
			}*/
		
				

		echo '<tr style="border: 1px solid Black;">';
		echo	'<td>';echo	$id;echo '</td>';
		echo '<td>';echo $name;echo '</td>';
		echo '<td>';echo anchor("admin/user_req_details/$id", "Details");echo '</td>';
		echo '</tr>';
	
	endforeach; 
?>

<tr style="background-color: rgb(204, 204, 204);">
			<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
</tr></tbody></table>

<?php
}
?>	
</div>
<div id = "footer"></div>