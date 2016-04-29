
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style_search.css" />

	

<script type="text/javascript">
$(document).ready(function() {
	$(function() {
		$( "#search" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url: "<?php echo site_url('autocomplete/suggestions_author'); ?>",
				data: { term: $("#search").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 1
		});
	});
});
</script>


<div id = "header"></div>
<div id = "picture"></div>
<div id = "sidepane">
   
    <?php

     //  include("side_menu.php");
    ?>
</div>
<div id ="sidepaneright"></div>
<div id ="signForm">
    <?php
		echo "</br>"."</br>"."</br>"."</br>"."</br>";
		$hidden = array('type' => 'Author');
		echo form_open('admin/search_for_admin_Handler', '', $hidden);
	
    ?>
			<div class="form-wrapper">
							<input name="title_in" type="text" id="search" placeholder="Search here by Author"  >
			</div>
			<div >		
					<input type="submit" value="go" id="submit1">  
			</div>
			
	
</div>
<div id = "footer"></div>



