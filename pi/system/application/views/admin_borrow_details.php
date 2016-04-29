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
/*foreach($title as $row) : 
		$title = $row->TITLE;
		$publisher = $row->PUBLISHER;
		$id = $row->BOOK_ID;
endforeach;	*/	
?>




 
<?php  
/*foreach($title as $row) : 
		$title = $row->TITLE;
		$publisher = $row->PUBLISHER;
		$id = $row->BOOK_ID;
endforeach;	
*/
	foreach($user_data as $row) : 
		$req_id = $row->BORROW_REQ_ID;
		$user_id = $row->USER_ID;
		$book_id = $row->BOOK_ID;
		$edition_no = $row->EDITION_NO;
		$accession_id = $row->ACCESSION_ID;
	endforeach;
	
	$inner_sql = "select USER_NAME from users where user_id = $user_id ";
	$s = $this->db->query($inner_sql);
	foreach ($s->result() as $dest) {
		$name = $dest->USER_NAME;
	}
	
	$inner_sql = "select * from edition where book_id = $book_id AND edition_no = $edition_no ";
	$s = $this->db->query($inner_sql);
	foreach ($s->result() as $dest) {
		$no_of_copy = $dest->NO_OF_COPY;
		$no_of_available_copy = $dest->NO_OF_AVAILABLE_COPY;
	}
	
	
	$inner_sql = "select * from book where book_id = $book_id ";
	$s = $this->db->query($inner_sql);
	foreach ($s->result() as $dest) {
		$title = $dest->TITLE;
		$publisher = $dest->PUBLISHER;
		$subject = $dest->SUBJECT_NAME;
	}
	
	$inner_sql = "select * from book_author where book_id = $book_id ";
	$s = $this->db->query($inner_sql);
	foreach ($s->result() as $dest) {
		$author_id = $dest->AUTHOR_ID;
		
		$in_inner_sql = "select * from author where author_id = $author_id ";
		$r = $this->db->query($in_inner_sql);
		foreach ($r->result() as $res) {
			$author_name[] = $res->AUTHOR_NAME;
		}
		
	}
	

	//	echo $req_id." ".$user_id." ".$book_id." ".$edition_no." ".$accession_id;
		
?>

<table class="style1" style="width: 70%;"><tbody>
<tr><td width="70%" class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label41" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: bold; 
text-decoration: underline; z-index: 1; left: 0px; top: 330px; width: 
217px; height: 60px;">Requested Book by  <?php echo $name." ( User ID: $user_id )"; ?> :</span>
</font></td><td width="75%">&nbsp; </td></tr></table></tbody>




<table class="style1" style="width: 50%;"><tbody>


<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Book Title:</span>
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
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Subject:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $subject;?>
</span></font></td></tr>


<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Author:</span>
</font></td>
<?php
	$tot = count($author_name);
	//echo $tot;
	for ($i = 0; $i < $tot; $i++){
?>
<td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 550px; height: 19px;">
<?php //echo ($i+1).". ".$author_name[$i]."</br>";?>
<?php echo $author_name[$i].",  ";?>

<?php } ?>

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
<?php echo $edition_no;?>
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
		$sql = "select * from accession where book_id = $book_id and edition_no = $edition_no ";
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

//$hidden = $req_id;
$hidden = array('id' => $req_id);
//echo $req_id;
echo form_open('admin/borrow_approve', '', $hidden);
echo form_submit('approve','Approve');	
echo form_submit('reject','Reject');				

?>




</div>
<div id = "footer"></div>
