<script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "dd-M-yy" }).val()
       });
</script>
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
<div id = "sidepaneright"></div>
<div id = "signForm">
    <?php

        echo form_open('admin_insert/insert_item');
        echo "<br>";
        echo "Book Title : ";
        echo form_input('title','');
        echo "Author : &nbsp;&nbsp;";
        echo form_input('author','');
        echo "Publisher : &nbsp;&nbsp;";
        echo form_input('publisher','');
        echo "Subject : &nbsp;&nbsp;";
        echo form_input('subject','');
        echo "Edition : &nbsp;&nbsp;";
        echo form_input('edition','');
        echo "ISBN : &nbsp;&nbsp;";
        echo form_input('isbn','');
        echo "Publish Date : &nbsp;&nbsp;";
		$data = array(
		  'name'        => 'publish_date',
		  'id'          => 'datepicker', 
		  
		);

		echo form_input($data);
        echo "Almira ID : &nbsp;&nbsp;";
        echo form_input('almira_id','');
        echo "Row ID : &nbsp;&nbsp;";
        echo form_input('row_id','');
        echo "Column ID : &nbsp;&nbsp;";
        echo form_input('column_id','');
        
        echo form_submit('submit','Submit');

    ?>
</div>
<div id = "footer"></div>
