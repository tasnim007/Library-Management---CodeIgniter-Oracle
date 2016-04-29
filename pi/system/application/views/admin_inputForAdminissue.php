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
     echo form_open('admin/admin_issue_handler');
     echo "Borrower : ".form_input('borrower','');
     echo "Borrower-id : ".form_input('borrower-id','');

     echo "Book-id : ".form_input('book-id','');
     echo "edition-no : ".form_input('edition-no','');
     echo "accsession-no : ".form_input('accsession-no','');

     for($i = 1;$i <=31 ; ++$i)$option_day[$i] = $i;
    for($i = 2012;$i <=2032 ; ++$i)$option_year[$i] = $i;
    $option_month = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');

    echo "<br><br>Issue date :";
    echo form_dropdown('from',$option_day).form_dropdown('month',$option_month).form_dropdown('year',$option_year);
    echo "<br><br>Return date :  ";
    echo form_dropdown('return',$option_day).form_dropdown('month',$option_month).form_dropdown('year',$option_year);
    echo form_submit('submit','submit');
   ?>
</div>
<div id = "footer"></div>