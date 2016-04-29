<?php

class Test extends Controller{

    function in(){
	
	/*	$this->load->model('test_model');
        $this->test_model->test_proc();*/
		
		
	$title = "Database Fundamentals";
	$publisher = "at&t";
	$subject = "Database";
	$edition = 4;
	$isbn = 130;
	$publish_date = "16-SEP-12";
	$almira_id = 1;
	$row_id = 1;
	$column_id = 1;
	
	$sql="begin
			proc_input_book(:bind1, :bind2,:bind3,:bind4,:bind5,:bind6);
		end;";
	$s = oci_parse($this->db->conn_id,$sql );
	oci_bind_by_name($s, ":bind1", $title);
	oci_bind_by_name($s, ":bind2", $publisher);
	oci_bind_by_name($s, ":bind3", $subject);
	oci_bind_by_name($s, ":bind4", $edition);
	oci_bind_by_name($s, ":bind5", $isbn);
	oci_bind_by_name($s, ":bind6", $publish_date);
	oci_bind_by_name($s, ":bind7", $almira_id);
	oci_bind_by_name($s, ":bind8", $row_id);
	oci_bind_by_name($s, ":bind9", $column_id);
	oci_bind_by_name($s, ":bind10", $out_flag, 5); // 5 is the return length
  
	oci_execute($s, OCI_DEFAULT);
	
	if($out_flag==0){
		echo	"Title existed";
	}
	else{
		echo "New book";
	}
	
	
	}
	
/*	$author = "schield";
	$gpa =$this->db->query("select func_is_author_found($author) as new from dual");
	print_r($gpa);
    
}*/

function test2(){
	$author = "schielde";
	$book_id = 23;
	//$gpa =$this->db->query("select func_is_author_found('$author') as new from dual");
	$gpa =$this->db->query("EXEC proc_input_author('$author','$book_id')");
	echo "<pre>";
	print_r($gpa);
	echo "</pre>";
}
}


?>
