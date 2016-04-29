<?php

    class UserHandler extends Model{

        function UserHandler(){

            parent::Model();
        }
        function validate(){


            $type = $this->input->post('state');
           
            $var_name = $this->input->post('username');
            $var_pass = $this->input->post('password');
            if($type == "librarian"){
				$sql = "select librarian_id from librarian where user_name = '$var_name' and password = '$var_pass'";
				$res = $this->db->query($sql);
				$r = $res->row_array();
				if($res->num_rows()>0){
					return $r['LIBRARIAN_ID'];
            }
            else return 0;
			}
			else{
				$var_pass = $this->input->post('password');
				$sql = "select user_id from users where user_name = '$var_name' and password = '$var_pass'";
				
				$res = $this->db->query($sql);
				$r = $res->row_array();
				if($res->num_rows()>0){
					return $r['USER_ID'];
            }
            else return 0;
          // redirect('admin/home_admin');
         //  
		 } 
        }
        function create_user(){

            $name = $this->input->post('name');
            $user_name = $this->input->post('user_name');
            $password = $this->input->post('password');
            $user_type = $this->input->post('user_type');
            $email_address = $this->input->post('email_address');
            $lvl = $this->input->post('lvl');
            $trm = $this->input->post('trm');
            $address = $this->input->post('address');
            $phone_number = $this->input->post('phone_number');
			$dob = $this->input->post('dob');
           
			//echo $dob;
           $q = "INSERT INTO unapproved_users(user_name,password,name,user_type,email_address,lvl,trm,address,phone_number,date_of_birth)
                    VALUES('$user_name','$password','$name','$user_type','$email_address','$lvl','$trm','$address','$phone_number','$dob')";

            $ret = $this->db->query($q);
 
            if($ret == 1){
                $data['msg'] = "Thanks for Registration. Waiting for Admin's approval. ";
                $this->load->view('includes/header');
                $this->load->view('wrongLogin',$data);
                $this->load->view('includes/footer');
                }
            else{
				 $this->load->view('includes/header');
				 $this->load->view('sign_up_form.php');
				 $this->load->view('includes/footer');

				 }
        }
        function showMyInfo($id){

            $q = "Select * from users where user_id = '$id'";
            $res = $this->db->query($q);
            //$res = $r->result_array();
			//$res = $this->db->query($sql);
			if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$data[] = $row;
				}
				
				return $data;
				
		}

     
        }
        function userdata_update($id){

            $q = "Select * from users where user_id = '$id'";
            $r = $this->db->query($q);
            $res = $r->result_array();

            $data['ress'] = $res;
            $this->load->view('includes/header');
            $this->load->view('update_form.php',$data);
            $this->load->view('includes/footer');
        }

        function updateMyInfo($user_id){

            $name = $this->input->post('name');
            $user_name = $this->input->post('user_name');
            //$password = $this->input->post('password');
            $user_type = $this->input->post('user_type');
            $email_address = $this->input->post('email_address');
            $lvl = $this->input->post('lvl');
            $trm = $this->input->post('trm');
            $address = $this->input->post('address');
            $phone_number = $this->input->post('phone_number');
            $day = $this->input->post('day');
            $month = $this->input->post('month');
            $year = $this->input->post('year');
            $date = $day."-".$month."-".$year;

            $q = "UPDATE users set
                    user_name = '$user_name',name = '$name',user_type = '$user_type',email_address = '$email_address',lvl = '$lvl',trm = '$trm',address = '$address',phone_number = '$phone_number',date_of_birth = '$date'
                    where user_id = '$user_id'";


            $ret = $this->db->query($q);

            if($ret == 1){
                $data['msg'] = "Account updated successfully ";
                $this->load->view('includes/header');
                $this->load->view('updated_info',$data);
                $this->load->view('includes/footer');
                }
        }
  
        
		
/********************/


function updateMyPass($user_id){

    $password = $this->input->post('password');
    $npassword = $this->input->post('npassword');
    $repassword = $this->input->post('repassword');
    $cham = "select password from users where user_id = '$user_id'";
    $e = $this->db->query($cham);
    $vall = $e->result_array();
    $chk = $vall[0]['PASSWORD'];
    if($chk == $password && $npassword == $repassword){

        $q = "UPDATE users set
                    password = '$npassword' where user_id = '$user_id'";
        $ret = $this->db->query($q);
        if($ret == 1){
            $data['msg'] = "Password updated successfully ";
            $this->load->view('includes/header');
            $this->load->view('updated_info',$data);
            $this->load->view('includes/footer');
        }
    }
	else{ ?>
	<script type = 'text/javascript'> alert("Password Mismatch"); </script>
<?php	
			$data['main_content'] = 'update_pass_form';
        $this->load->view('includes/template',$data);
	}
}


 function searchHandler(){

            $search_by = $this->input->post('type');
            //$search_by = $this->input->post('dropdown');

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

			
        function historyHandler($id){

            $sql = "select book.title,issue.issue_date,issue.return_date,issue.is_returned
                    from book,accession,issue where
                    book.book_id = accession.book_id and
                    accession.accession_id = issue.accession_id and
                    issue.user_id = '$id'";
            $res = $this->db->query($sql);
            $rees = $res->result_array();
            //foreach($rees as $result)echo $result['TITLE'];
            $data['ress'] = $rees;
            $this->load->view('includes/header');
            $this->load->view('my_history.php',$data);
            $this->load->view('includes/footer');
        }
		


/**********************/	
		
		
		
		/******************/
		/*****TASNIM********/
		/******************/
		
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

	function user_borrow_book(){
		$book_id = $this->uri->segment(3);
		$edition_no = $this->uri->segment(4);
		$accession_id = $this->uri->segment(5);
		$user_id = $this->uri->segment(6);
		
		//echo $id." ".$edition." ".$accession." ".$user_id; 
		$q = "INSERT INTO borrow_req(user_id,book_id,edition_no,accession_id)
                    VALUES($user_id,$book_id,$edition_no,$accession_id)";

         $ret = $this->db->query($q);
 
         if($ret == 1){
                $msg = "Your Reuest is under process";
				}else $msg = "Error!!";
		return $msg;
		
	}
	
	
	function user_borrow_this(){
		$book_id = $this->uri->segment(3);
		$edition_no = $this->uri->segment(4);
		$user_id = $this->uri->segment(5);
		

		
		$sql = "select * from accession where book_id = $book_id and edition_no = $edition_no and is_available = 1";
        $res = $this->db->query($sql);
        if($res->num_rows() > 0) {
				foreach ($res->result() as $row) {
					$accession_id = $row->ACCESSION_ID;
				}
				
			
		}
		
		//echo $accession_id;
		//print_r($res);
		
		
		$q = "INSERT INTO borrow_req(user_id,book_id,edition_no,accession_id)
                    VALUES($user_id,$book_id,$edition_no,$accession_id)";

         $ret = $this->db->query($q);
 
         if($ret == 1){
                $msg = "Your Reuest is under process";
				}else $msg = "Error!!";
		return $msg;
		
	}
	
	
	function dueHandler($id){

            $sql = "update issue set due = 
                    ( select sum(2*months_between(to_date(sysdate),to_date(return_date)))from issue group by user_id having user_id = '$id' ) where user_id
                    = '$id' and sysdate > issue.return_date"; 
            $res = $this->db->query($sql);
           // $rees = $res->result_array();

            $s1 = "select book.title,issue.due,issue.issue_date,issue.return_date,issue.is_returned
                    from book,accession,issue where
                    book.book_id = accession.book_id and
                    accession.accession_id = issue.accession_id and
                    issue.user_id = '$id'";
            $res1 = $this->db->query($s1);
            $rees1 = $res1->result_array();
            $data['ress'] = $rees1;
            $this->load->view('includes/header');
            $this->load->view('my_due.php',$data);
            $this->load->view('includes/footer');
        }


	
    }

?>
