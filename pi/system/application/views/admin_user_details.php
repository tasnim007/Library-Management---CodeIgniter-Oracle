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

foreach($user_details as $row) : 
$id = $row->USER_ID;			
$user_name = $row->USER_NAME;
$full_name = $row->NAME;		
$level = $row->LVL;
$term =	$row->TRM;
$email  =	$row->EMAIL_ADDRESS;
$address =	$row->ADDRESS;
$phn =	$row->PHONE_NUMBER;
$dob =	$row->DATE_OF_BIRTH;
if($row->USER_TYPE == 's')
	$type = "Student";
else $type = "teacher";

endforeach;
	
?>


<h2>Personal info :</h2>

<table class="style1" style="width: 70%;"><tbody>
<tr><td width="25%" class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label41" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: bold; 
text-decoration: underline; z-index: 1; left: 0px; top: 330px; width: 
217px; height: 19px;">User Details :</span>
</font></td><td width="75%">&nbsp; </td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Full Name:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $full_name;?>
</span></font></td></tr>


<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">User Name:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $user_name;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Type:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $type;?>
</span></font></td></tr>

<?php if ($type == "Student"){
?>
<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Level :</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $level;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Term:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $term;?>
</span></font></td></tr>

<?php
}
?>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Email:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $email;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Address:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $address;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Phone:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $phn;?>
</span></font></td></tr>

<tr>
<td class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label5" style="color: Black; font-family: Arial Narrow; font-weight: normal; text-decoration: 
none; z-index: 1; left: 0px; top: 0px; width: 217px; height: 19px;">Date of Birth:</span>
</font></td><td>
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Nam" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: normal; 
text-decoration: none; z-index: 1; left: 225px; top: 0px; width: 350px; height: 19px;">
<?php echo $dob;?>
</span></font></td></tr>
</tbody></table>

<br/>
<br/>

<tr><td width="25%" class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label41" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: bold; 
text-decoration: underline; z-index: 1; left: 0px; top: 330px; width: 
217px; height: 19px;">Dues :</span>
</font></td><td width="75%">&nbsp; </td></tr></br></br>

<?php
			//$id = $this->session->userdata('user_id');
			 $sql = "update issue set due = 
                    ( select sum(2*months_between(to_date(sysdate),to_date(return_date)))from issue group by user_id having user_id = '$id' ) where user_id
                    = '$id' and sysdate > issue.return_date"; 
            $res_faul = $this->db->query($sql);
           // $rees = $res->result_array();

            $s1 = "select book.title,issue.due,issue.issue_date,issue.return_date,issue.is_returned
                    from book,accession,issue where
                    book.book_id = accession.book_id and
                    accession.accession_id = issue.accession_id and
                    issue.user_id = '$id'";
            $res1 = $this->db->query($s1);
			 $rees1 = $res1->result_array();
			// print_r(rees1);
			 if(sizeof($rees1)>0){
				$i = 0;
				foreach($rees1 as $result){
					if ($result['DUE'] > 0){
						$i +=1;
					}
				}
				if($i > 0){
				 echo "<table border = \"1\" BorderColor = \"black\" align = \"center\">";
				echo "<tr><th>Book</th><th>Due</th><th>Issue Date</th><th>Return Date</th></tr>";
				foreach($rees1 as $result){
				if ($result['DUE'] > 0){
					echo "<tr><td>".$result['TITLE']."</td><td>".$result['DUE']."</td><td>".$result['ISSUE_DATE']."</td><td>".
					$result['RETURN_DATE']."</td></tr>";
						}
				}
    
    echo "</table>"; 
}else echo "No Due";
}
else echo "No Due";
?>





<br/>
<br/>
<tr><td width="25%" class="style8">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<font style="color: rgb(255, 255, 255); font-weight: bold;">
<span id="ctl00_MSPlace_Label41" style="color: rgb(0, 51, 0); font-family: Arial Narrow; font-weight: bold; 
text-decoration: underline; z-index: 1; left: 0px; top: 330px; width: 
217px; height: 19px;">Borrow History :</span>
</font></td><td width="75%">&nbsp; </td></tr></br></br>

<?php
		//$id = $this->session->userdata('user_id');
			$sql = "select book.title,issue.issue_date,issue.return_date,issue.is_returned
                    from book,accession,issue where
                    book.book_id = accession.book_id and
                    accession.accession_id = issue.accession_id and
                    issue.user_id = '$id'";
            $res = $this->db->query($sql);
            $ress = $res->result_array();
			//echo $id;
			//print_r($ress);
			
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
			else echo "Not Borrowed yet";

?>

	
</div>
<div id = "footer"></div>