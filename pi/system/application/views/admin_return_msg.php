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
	$user_id = $this->input->post('borrower_id');
	//print_r($ret);
	
	
	
	foreach($ret as $row) : 
		$book_id = $row->BOOK_ID;
		$edition = $row->EDITION_NO;
	endforeach;
	
	$inner_sql = "select TITLE from book where book_id = $book_id ";
	$s = $this->db->query($inner_sql);
	foreach ($s->result() as $dest) {
		$title = $dest->TITLE;
		}
		
	$inner_sql = "select USER_NAME from users where user_id = $user_id ";
	$s = $this->db->query($inner_sql);
	foreach ($s->result() as $dest) {
		$name = $dest->USER_NAME;
		}

	echo "<b>Title:</b> $title</br>";
	echo "<b>Edition:</b> $edition</br></br>";
	echo "Recieved from</br></br>";
	echo "<b>User Name:</b> $name</br>"; 
	echo "<b>User Id:</b> $user_id";		
	


?>


</div>
<div id = "footer"></div>