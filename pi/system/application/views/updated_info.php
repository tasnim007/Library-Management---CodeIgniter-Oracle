
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

<div align="center" style="color:white"><?php echo $msg;?>  </div>

</div>
<div id = "footer"></div>