<?php

class Admin_insert extends Controller{

	function add_item_larea(){

        $data['main_content'] = 'admin_book_entry';
        $this->load->view('includes/template',$data);
    }

    function insert_item(){
	
	/*$title = $this->input->post('title');
		$publisher = $this->input->post('publisher');
		$subject = $this->input->post('subject');
		$edition = $this->input->post('edition');
		$isbn = $this->input->post('isbn');
		$publish_date = $this->input->post('publish_date');
		$almira_id = $this->input->post('almira_id');
		$row_id = $this->input->post('row_id');
		$column_id = $this->input->post('column_id');
		$author =  $this->input->post('author');
		
		echo $title."</br>".$publisher."</br>".$subject."</br>".$edition."</br>".$isbn."</br>".$publish_date."</br>".$almira_id."</br>".$row_id."</br>".$column_id."</br>";
		print_r($author);*/
	
	$this->form_validation->set_rules('title','Book Title','required');
	$this->form_validation->set_rules('author','Author','required');
	$this->form_validation->set_rules('publisher','Publisher','required');
	$this->form_validation->set_rules('subject','Subject','required');
	$this->form_validation->set_rules('edition','Edition','required');
	$this->form_validation->set_rules('isbn','ISBN','required');
	$this->form_validation->set_rules('publish_date','Publish Date','required');
	$this->form_validation->set_rules('almira_id','Almira ID','required');
	$this->form_validation->set_rules('row_id','Row ID','required');
	$this->form_validation->set_rules('column_id','Column  ID','required');
	
	if($this->form_validation->run() == false)
			$this->add_item_larea();
    else{
	/*	$this->load->model('admin_insert');
        $this->admin_insert->insert_book();*/
	
		$title = $this->input->post('title');
		$publisher = $this->input->post('publisher');
		$subject = $this->input->post('subject');
		$edition = $this->input->post('edition');
		$isbn = $this->input->post('isbn');
		$publish_date = $this->input->post('publish_date');
		$almira_id = $this->input->post('almira_id');
		$row_id = $this->input->post('row_id');
		$column_id = $this->input->post('column_id');
		
		
		
		$conn = oci_connect('system', '86SW00z7', 'localhost/ORCL');
		
		$query = "begin
				proc_input_book(:bind1, :bind2,:bind3,:bind4,:bind5,:bind6,:bind7,:bind8,:bind9, :bind10);
				end;";

		$s = oci_parse($conn, $query);

		oci_bind_by_name($s, ":bind1", & $title);
		oci_bind_by_name($s, ":bind2", & $publisher);
		oci_bind_by_name($s, ":bind3", & $subject);
		oci_bind_by_name($s, ":bind4", & $edition);
		oci_bind_by_name($s, ":bind5", & $isbn);
		oci_bind_by_name($s, ":bind6", & $publish_date);
		oci_bind_by_name($s, ":bind7", & $almira_id);
		oci_bind_by_name($s, ":bind8", & $row_id);
		oci_bind_by_name($s, ":bind9", & $column_id);
		oci_bind_by_name($s, ":bind10", & $out_flag, 5); // 5 is the return length
	  
		$r = oci_execute($s);
		//echo $out_flag;
		
		if($out_flag==0){
			//echo	"Title existed";
			$data['mes'] = "Title existed";
		}
		else{
			//proc_input_author(in_author_name IN VARCHAR2,in_book_id IN INTEGER)
			//echo "New book";
			
			$author = $this->input->post('author');
			$individual_author = explode(",",$author);
			$count = count($individual_author);
			
			for($i = 0; $i<$count; $i++){
				
				$sql="begin
					proc_input_author(:bind1, :bind2);
				end;";
				
				$s = oci_parse($conn,$sql );
				
				oci_bind_by_name($s, ":bind1", & $individual_author[$i]);
				oci_bind_by_name($s, ":bind2", & $out_flag);
				
				oci_execute($s);
				}
		
		//echo "New book and author added";	
		$data['mes'] = "New book and author added";
			
		
		}
		
		$data['main_content'] = 'admin_add';
        $this->load->view('includes/template',$data);

	}
	}
}
?>
