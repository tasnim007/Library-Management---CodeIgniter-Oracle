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
    Search result:
	
	<?php
	if(sizeof($ress)>0){
    echo "<table border = \"1\" BorderColor = \"black\" align = \"center\">";
    echo "<tr><th>User ID</th><th>User Name</th><th>Due</th></tr>";
	//print_r($ress);
    foreach($ress as $result){
		if($result['DUE'] > 0){
			$id = $result['USER_ID'];
			$sql = "select user_name from users where user_id ='$id'";
            $res = $this->db->query($sql);
			//print_r($res);
            $name = $res->result_array();
				//$nm = $res['USER_NAME'];
			echo "<tr><td>".$result['USER_ID']."</td><td>".$name['USER_NAME']."</td><td>".$result['DUE']."</td>";
			/*if($result['IS_RETURNED'] == 1) echo "Yes";
			else echo "Not Yet";*/
			echo "</tr>";
			}

    }
    echo "</table>";
}
else echo "No Due"; 
?>
	
</div>
<div id = "footer"></div>