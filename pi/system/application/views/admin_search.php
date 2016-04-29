<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style_search.css" />
 <script type="text/javascript">
  /*  function selectDropdown(){
        var dropdownValue=document.getElementById("dropdown").value;
        document.getElementById('namee').innerHTML = dropdownValue+" : ";

    }*/
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

    //   include("side_menu.php");
    ?>
</div>
<!--<div id ="sidepaneright"></div>-->
<div id ="signForm">
    <?php
        echo form_open('membersArea/search_for_user_Handler');
        echo "Enter search type :  ";
        $op['book'] = 'Book';
        $op['thesis'] = 'Thesis';
        
        $op['journal'] = 'Journal';
        echo form_dropdown('search_type',$op);

       
        echo "<br><br>Enter search by :  ";
        echo "<select id=\"dropdown\" name=\"dropdown\" onchange=\"selectDropdown()\">";

        echo "<option value = 'Title'>Title</option>";
        echo "<option value = 'Author'>Author</option>";
        echo "<option value = 'Publisher'>Publisher</option>";
        echo "<option value = 'Subject name'>Subject Name</option>";
        echo "</select>";
       echo "<br><br>";

       echo "<table><tr valign = 'top'><td id = 'namee'><b>Title</b> :</td><td></td><td></td></tr></table>";
	  
      // echo form_input('title_in')."</td></tr></table><br>";
	  // echo form_submit('submit','Search');
    ?>
	<div class="form-wrapper">
					<input name="title_in" type="text" id="search" placeholder="Search here"  >
					</div>
			<div >		
					<input type="submit" value="go" id="submit1">
			</div>
	
</div>
<div id = "footer"></div>