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
        echo form_open('admin/search_larea');
        echo "Enter search type :  ";
        $opp['book'] = 'Book';
        $opp['thesis'] = 'Thesis';
        $opp['journal'] = 'Journal';
        $opp['subscriber'] = 'Subscriber';
        echo form_dropdown('search_type',$opp);

        echo "<br><br>Enter search by :  ";
        $opss['bookname'] = 'Bookname';
        $opss['author'] = 'Author';
        $opss['subscriber-name'] = 'Subscriber-name';
        $opss['subscriber-id'] = 'Subscriber-id';
        echo form_dropdown('search_by',$opss);
        echo form_submit('submit','submit');
    ?>
</div>
<div id = "footer"></div>