<?php

class AdminHandler extends Model{

    function add_item_Handler(){

        //adding the new books whole book table will b shown
        
    }
    function transactionHandler(){
        
        $data['main_content'] = 'admin_all_transactions';
        $this->load->view('includes/template',$data);

    }
    function search_adminHandler(){

        $data['main_content'] = 'admin_search_result';
        $this->load->view('includes/template',$data);


    }
    function dueHandler(){
			$sql = "select sum(due) as DUE,user_id from issue group by user_id  ";
            $r = $this->db->query($sql);
             $res = $r->result_array();

            $data['ress'] = $res;
				//print_r($data);
			//return $data;
			
		
		$data['main_content'] = 'admin_showDue';
        $this->load->view('includes/template',$data);
		
		
       
    }
    function issue_adminHandler(){


    }
    function return_adminHandler(){
        
    }
	
	/**********/
	
	function user_info_handler(){
		
			$sql = "select user_id,user_name from users";
            $res = $this->db->query($sql);
            if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$data[] = $row;
				}
				//print_r($data);
			return $data;
		}
	}
	
	function user_info_details(){
		
		//$this->db->where('id', $this->uri->segment(3));
		$id = $this->uri->segment(3);
		$sql = "select * from users where user_id = $id";
            $res = $this->db->query($sql);
            if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$data[] = $row;
				}
				//print_r($data);
			return $data;
		}
	}
	
	function subjectwise_books(){
			
			$sql = "select subject_name from book group by subject_name";
            $res = $this->db->query($sql);
            if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$data[] = $row;
				}
				//print_r($data);
			return $data;
		}
	}
	
	function subjectwise_books_title(){
		$sub = $this->uri->segment(3);
		$sql = "select * from book where subject_name = '$sub'";
        $res = $this->db->query($sql);
        if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$data[] = $row;
				}
				//print_r($data);
			return $data;
		}
		}
		
	function book_edition(){
		$id = $this->uri->segment(3);
		$sql = "select * from edition where book_id = $id";
        $res = $this->db->query($sql);
        if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$data[] = $row;
				}
				//print_r($data);
			return $data;
		}
	}

	function book_title(){
		$id = $this->uri->segment(3);
		$sql = "select * from book where book_id = $id";
        $res = $this->db->query($sql);
        if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$data[] = $row;
				}
				
			return $data;
		}
	}	
	
	function borrow_req_table(){
		
			$sql = "select * from borrow_req";
            $res = $this->db->query($sql);
            if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$data[] = $row;
				}
				//print_r($data);
			return $data;
		}
	}
	
	function borrow_req_details(){
			$id = $this->uri->segment(3);
			$sql = "select * from borrow_req where borrow_req_id = $id";
            $res = $this->db->query($sql);
            if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$data[] = $row;
				}
				//print_r($data);
			return $data;
		}
	}
	
	function reject_borrow_req(){
		$hidden=$_POST['id'];
		$sql = "delete from borrow_req where borrow_req_id = $hidden";
        $res = $this->db->query($sql);
            
	}
	
	function approve_borrow_req(){
		$hidden=$_POST['id'];
		$sql = "select * from borrow_req where borrow_req_id = $hidden";
        $res = $this->db->query($sql);
        if($res->num_rows() > 0) {
			foreach ($res->result() as $row) {
				$req_id = $row->BORROW_REQ_ID;
				$user_id = $row->USER_ID;
				$book_id = $row->BOOK_ID;
				$edition_no = $row->EDITION_NO;
				$accession_id = $row->ACCESSION_ID;
			
				//$data[] = $row;
			}
				
			$conn = oci_connect('system', '86SW00z7', 'localhost/ORCL');
		//proc_borrow_new(in_book_id IN INTEGER,in_edition_no IN INTEGER,in_user_id IN INTEGER,in_accession_id IN INTEGER,out_flag OUT INTEGER)
			$query = "begin
					proc_borrow_new(:bind1, :bind2,:bind3,:bind4,:bind5);
					end;";

			$s = oci_parse($conn, $query);

			oci_bind_by_name($s, ":bind1", & $book_id);
			oci_bind_by_name($s, ":bind2", & $edition_no);
			oci_bind_by_name($s, ":bind3", & $user_id);
			oci_bind_by_name($s, ":bind4", & $accession_id);
			oci_bind_by_name($s, ":bind5", & $out_flag, 5); // 5 is the return length
		  
			$r = oci_execute($s);
			if($out_flag==1){
				$sql = "delete from borrow_req where borrow_req_id = $hidden";
				$res = $this->db->query($sql);
				$data =	"Approved Borrow Req no:".$req_id;
				
			}
			else	$data =	"Error for Req no:".$req_id;

			//echo $req_id." ".$user_id." ".$book_id." ".$edition_no." ".$accession_id;
			//echo $data;
			return $data;
		}
		
	}
	
	
	
	function approve_new_user(){
		$sql = "select * from unapproved_users";
            $res = $this->db->query($sql);
            if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$data[] = $row;
				}
				//print_r($data);
			return $data;
		}
	}
	
	
	function user_req_details(){
			$id = $this->uri->segment(3);
			$sql = "select * from unapproved_users where user_id = $id";
            $res = $this->db->query($sql);
            if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$data[] = $row;
				}
				//print_r($data);
			return $data;
		}
	}
	
	
	
	function reject_new_req(){
		$hidden=$_POST['id'];
		$sql = "delete from unapproved_users where user_id = $hidden";
        $res = $this->db->query($sql);
            
	}
	
	function approve_new_req(){
		$hidden=$_POST['id'];
		$sql = "select * from unapproved_users where user_id = $hidden";
        $res = $this->db->query($sql);
        if($res->num_rows() > 0) {
			foreach ($res->result() as $row) {
				
				$user_name = $row->USER_NAME;
				$name = $row->NAME;
				$password = $row->PASSWORD;
				$email = $row->EMAIL_ADDRESS;
				$address = $row->ADDRESS;
				$phn = $row->PHONE_NUMBER;
				$type = $row->USER_TYPE;
				$dob = $row->DATE_OF_BIRTH;
				$lvl = $row->LVL;
				$trm = $row->TRM;
			
			
				$q = "INSERT INTO users(user_name,password,name,user_type,email_address,lvl,trm,address,phone_number,date_of_birth)
                    VALUES('$user_name','$password','$name','$type','$email','$lvl','$trm','$address','$phn','$dob')";

				$ret = $this->db->query($q);
				
				if($ret == 1){
					$sql = "delete from unapproved_users where user_id = $hidden";
					$res = $this->db->query($sql);
                }
			
				//$data[] = $row;
			}
				
			
			//return $data;
		}
		
	}
	
	
	function admin_searchHandler(){

            $search_by = $this->input->post('type');
           // $search_by = $this->input->post('dropdown');

            $title = $this->input->post('title_in');

            if($search_by == 'Title'){
                $q = "select edition.book_id,edition.edition_no,edition.ISBN,no_of_copy,edition.no_of_available_copy,edition.publish_date,edition.arrival_date,book.title 
					  from book,edition
                      where edition.book_id = book.book_id and
					  book.title='$title'";
            }
            else if($search_by == 'Author'){

                $q = "select edition.book_id,edition.edition_no,edition.ISBN,no_of_copy,edition.no_of_available_copy,edition.publish_date,edition.arrival_date,book.title 
					from book,edition
                      where
                      book.book_id=edition.book_id and book.book_id in(
                            select book.book_id 
							from book,book_author,author where
                            book.book_id=book_author.book_id and
                            author.author_id=book_author.author_id and
                            author_name = '$title')";
            }
            else if($search_by == 'Publisher'){

                $q = " select edition.book_id,edition.edition_no,edition.ISBN,no_of_copy,edition.no_of_available_copy,edition.publish_date,edition.arrival_date,book.title 
					   from book,edition 
					   where book.book_id=edition.book_id and
                       book.publisher = '$title'";
            }
            else {

               $q = "select edition.book_id,edition.edition_no,edition.ISBN,no_of_copy,edition.no_of_available_copy,edition.publish_date,edition.arrival_date,book.title
					from book,edition where
                    edition.book_id =book.book_id and
					book.subject_name='$title'";
            }

            $res = $this->db->query($q);
			
			if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$data[] = $row;
				}
				
			return $data;
		}
    
        }
		
		function book_return(){
			$borrower = $this->input->post('borrower_id');
			$accession = $this->input->post('accession_id');
			$sql = "select * from accession where accession_id = $accession ";
            $res = $this->db->query($sql);
            if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$data[] = $row;
					//$due = $row->DUE;
				}
				/*if($due > 0){
					$data = "Dues not cleared";
				}*/
					//print_r($data);
				
			
			$sql = "update issue
					set is_returned = 1
					where accession_id = $accession and user_id = $borrower";
            $res = $this->db->query($sql);
			
			return $data;
			}
			
		}
	
	
	
	
	}
	
	
	


?>
