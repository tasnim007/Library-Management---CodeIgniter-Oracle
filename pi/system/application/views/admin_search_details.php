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
<?php
foreach($title as $row) : 
		$title = $row->TITLE;
		$publisher = $row->PUBLISHER;
		$id = $row->BOOK_ID;
endforeach;		
	$ed = $this->uri->segment(3);
?>


<table class="style1" style="width: 70%;"><tbody>
<tr><td width="70%" class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label41" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: bold; 
text-decoration: underline; z-index: 1; left: 0px; top: 330px; width: 
217px; height: 19px;">Details of  "<?php echo $title?>" <?php echo " Edition: $ed ";?> in the Library:</span>
</font></td><td width="75%">&nbsp; </td></tr></table></tbody>


 
<?php  
	foreach($edition as $row) : 
		$edition = $row->EDITION_NO;
		$isbn = $row->ISBN;
		$no_of_copy = $row->NO_OF_COPY;
		$no_of_available_copy = $row->NO_OF_AVAILABLE_COPY;
		$publish_date = $row->PUBLISH_DATE;
		$arrival_date = $row->ARRIVAL_DATE;
	endforeach; 
?>



<table class="style1" style="width: 50%;"><tbody>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Title:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $title;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Edition:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $edition;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Publisher:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $publisher;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">ISBN:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $isbn;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Publish Date:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $publish_date;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Arrival Date:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $arrival_date;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Total Copy in the Library:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $no_of_copy;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Available Copy in the Library:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $no_of_available_copy;?>
</span></font></td></tr></br></br>


</br></br>
</br></br>

<table class="style1" style="width: 50%;"><tbody>
<tr><td width="70%" class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label41" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: bold; 
text-align:center; text-decoration: underline;  z-index: 1; left: 0px; top: 330px; width: 
217px; height: 19px;">Location :</span>
</font></td><td width="75%">&nbsp; </td></tr>

<table id="ctl00_MSPlace_GVr" style="color: Black; background-color: White; border: 2px none rgb(153, 153, 153); font-size: small; font-weight: normal; border-collapse: collapse; z-index: 1; left: 0px; top: 0px; height: 147px; width: 500px;" border="2" cellpadding="3" cellspacing="0" rules="all">
<tbody><tr style="color: White; background-color: Black; border-style:ridge; font-weight: bold;" valign="middle" align="center">
			<th scope="col">Accession NO</th>
			<th scope="col">Location ID</th>
			<th scope="col">Almira ID</th>
			<th scope="col">Row ID</th>
			<th scope="col">Column ID</th>
			<th scope="col">Availability</th>
</tr>

<?php
		$sql = "select * from accession where book_id = $id and edition_no = $edition ";
        $r = $this->db->query($sql);
		//print_r($r);
        if($r->num_rows() > 0) {
				foreach ($r->result() as $loc) {
					//if($loc->num_rows() > 0) {
						$accession = $loc->ACCESSION_ID;
						$loc_id = $loc->LOCATION_ID;
						$is = $loc->IS_AVAILABLE;
						if($is == 1) $avail = "Yes";
						else	$avail = "No";
						//echo $loc_id; echo $is;
						$inner_sql = "select * from location where location_id = $loc_id ";
						$s = $this->db->query($inner_sql);
						foreach ($s->result() as $dest) {
							//if($dest->num_rows() > 0) {
								//almira_id,column_id,row_id
								$almira = $dest->ALMIRA_ID;
								$row = $dest->ROW_ID;
								$column = $dest->COLUMN_ID;
						
						}
						echo '<tr style="border: 1px solid Black;">';
						echo '<td>';echo $accession;echo '</td>';
						echo '<td>';echo $loc_id;echo '</td>';
						echo '<td>';echo $almira;echo '</td>';
						echo '<td>';echo $row;echo '</td>';
						echo '<td>';echo $column;echo '</td>';
						echo '<td>';echo $avail;echo '</td>';
						echo '</tr>';
						}
						}
					
?>


<tr style="background-color: rgb(204, 204, 204);">
			<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
</tr></tbody></table>					
					






<?php

//	
	
?>
</div>
<div id = "footer"></div>