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
<div id ="signForm"><h1 align="center">Due Status :</h1></br></br>

<?php
	if(sizeof($ress)>0){
    echo "<table border = \"1\" BorderColor = \"black\" align = \"center\">";
    echo "<tr><th>Book</th><th>Due</th><th>Issue Date</th><th>Return Date</th><th>Is Returned</th></tr>";
    foreach($ress as $result){
		if($result['DUE'] > 0){
			echo "<tr><td>".$result['TITLE']."</td><td>".$result['DUE']."</td><td>".$result['ISSUE_DATE']."</td><td>".
            $result['RETURN_DATE']."</td><td align = 'center'>";
			if($result['IS_RETURNED'] == 1) echo "Yes";
			else echo "Not Yet";
			echo "</td></tr>";
			}

    }
    echo "</table>";
}
else echo "No Due"; 
?>
</div>
<div id = "footer"></div>