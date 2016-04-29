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
<div id ="signForm"><h1>Borrow history :</h1>

</br></br>

<?php
	if(sizeof($ress)>0){
    echo "<table border = \"1\" BorderColor = \"black\" align = \"center\">";
    echo "<tr><th>Book</th><th>Issue Date</th><th>Return Date</th><th>Is Returned</th></tr>";
    foreach($ress as $result){

        echo "<tr><td>".$result['TITLE']."</td><td>".$result['ISSUE_DATE']."</td><td>".
            $result['RETURN_DATE']."</td>";
		if($result['IS_RETURNED'] == 0)	{
			echo "<td align = 'center'>Not Yet</td></tr>";
			}
		else{
			echo "<td align = 'center'>Yes</td></tr>";
		}	
        
    }
    echo "</table>";
	}
else echo "Not Borrowed yet."; 

?>




</div>
<div id = "footer"></div>