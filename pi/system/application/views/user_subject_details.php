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
foreach($subj_title as $row) : 
		$subj = $row->SUBJECT_NAME;
endforeach;

		
?>


<table class="style1" style="width: 70%;"><tbody>
<tr><td width="50%" class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label41" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: bold; 
text-decoration: underline; z-index: 1; left: 0px; top: 330px; width: 
217px; height: 19px;">Available Books on<?php echo $subj?> :</span>
</font></td><td width="75%">&nbsp; </td></tr></table></tbody>
<br/><br/>
<table id="ctl00_MSPlace_GVr" style="color: Black; background-color: White; border: 2px none rgb(153, 153, 153); font-size: small; font-weight: normal; border-collapse: collapse; z-index: 1; left: 0px; top: 0px; height: 147px; width: 500px;" border="2" cellpadding="3" cellspacing="0" rules="all">
<tbody><tr style="color: White; background-color: Black; border-style:ridge; font-weight: bold;" valign="middle" align="center">
			<th scope="col">id</th>
			<th scope="col">Title</th>
			<th scope="col">Publisher</th>
			<th scope="col">Details</th>
</tr>
 
<?php  
		
		foreach($subj_title as $row) : 
		$id = $row->BOOK_ID;
		$title = $row->TITLE;
		$publisher = $row->PUBLISHER;

		echo '<tr style="border: 1px solid Black;">';
		echo '<td>';echo $id;echo '</td>';
		echo '<td>';echo $title;echo '</td>';
		echo '<td>';echo $publisher;echo '</td>';
		echo '<td>';echo anchor("membersArea/edition_details/$id", "All editions of $title");echo '</td>';
		echo '</tr>';
	
	endforeach; 
?>

<tr style="background-color: rgb(204, 204, 204);">
			<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
</tr></tbody></table>

</div>
<div id = "footer"></div>