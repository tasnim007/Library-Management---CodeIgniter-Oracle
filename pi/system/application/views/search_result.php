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
	$title = $this->input->post('title_in');
?>
<b>Search results for "<?php echo $title; ?>" :</b>
</br></br>
 
	
	
<?php
if (!isset($result))	echo "Sorry, No Such Data";
else {
?>

<table id="ctl00_MSPlace_GVr" style="color: Black; background-color: White; border: 2px none rgb(153, 153, 153); font-size: small; font-weight: normal; border-collapse: collapse; z-index: 1; left: 0px; top: 0px; height: 147px; width: 500px;" border="2" cellpadding="3" cellspacing="0" rules="all">
<tbody><tr style="color: White; background-color: Black; border-style:ridge; font-weight: bold;" valign="middle" align="center">
			
			<th scope="col">Book Title</th>
			<th scope="col">Edition</th>
			<th scope="col">ISBN</th>
			<th scope="col">Total Copy</th>
			<th scope="col">Available Copy</th>
			<th scope="col">Borrow</th>
			<th scope="col">Details</th>
</tr>
 
<?php  
	//edition.book_id,edition.edition_no,edition.ISBN,no_of_copy,edition.no_of_available_copy,edition.publish_date,edition.arrival_date,book.titl
		foreach($result as $row) : 
		$id = $row->BOOK_ID;
		$title = $row->TITLE;
		$isbn = $row->ISBN;
		$total = $row->NO_OF_COPY;
		$available = $row->NO_OF_AVAILABLE_COPY;
		$edition = $row->EDITION_NO;
		$user_id = $this->session->userdata('user_id');
		
		
		
				

		echo '<tr style="border: 1px solid Black;">';
		echo '<td>';echo $title;echo '</td>';
		echo '<td>';echo $edition;echo '</td>';
		echo '<td>';echo $isbn;echo '</td>';
		echo '<td>';echo $total;echo '</td>';
		echo '<td>';echo $available;echo '</td>';
		if($available > 0){
				echo '<td>';echo anchor("membersArea/user_borrow_this/$id/$edition/$user_id", "Borrow This");echo '</td>';
		}
		else{	echo '<td>';echo "Not Available";echo '</td>';}
		echo '<td>';echo anchor("membersArea/user_borrow_details/$id/$edition", "Details");echo '</td>';
		echo '</tr>';
	
	endforeach; 
?>

<tr style="background-color: rgb(204, 204, 204);">
			<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
</tr></tbody></table>

<?php
}
?>		
</div>
<div id = "footer"></div>