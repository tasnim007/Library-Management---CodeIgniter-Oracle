<?php

class Admin extends Controller{

	 function __construct(){

        parent::Controller();
        $this->is_logged_in();
    }

    function is_logged_in(){

        $nam = $this->session->userdata('fname');
        $admin_id = $this->session->userdata('adminid');
        if($this->session->userdata('is_logged_in') == false)redirect('welcome/index');
        
    }

    function home_admin(){

        $data['main_content'] = 'admin_home';
        $this->load->view('includes/template',$data);
    }
    function add_item_larea(){

        $data['main_content'] = 'admin_book_entry';
        $this->load->view('includes/template',$data);
    }
    function pass_item_larea(){

        $this->load->model('adminHandler');
        $this->adminHandler->add_item_Handler();
    }
    function history_larea(){

        $data['main_content'] = 'admin_show_trans_history_options';
        $this->load->view('includes/template',$data);
    }
    function search_larea(){

       
        $this->load->model('adminHandler');
        $this->adminHandler->search_adminHandler();
    }
    function admin_issue_handler(){


        $this->load->model('adminHandler');
        $this->adminHandler->issue_adminHandler();
    }
 
    function search_input_larea(){

        $data['main_content'] = 'admin_inputForAdminSearch';
        $this->load->view('includes/template',$data);
    }
    function issue_larea(){

        $data['main_content'] = 'admin_inputForAdminissue';
        $this->load->view('includes/template',$data);
    }
    
    function forward_history_admin(){

        $this->load->model('adminHandler');
        $this->adminHandler->transactionHandler();
    }
    function due_larea(){

        $this->load->model('adminHandler');
         $this->adminHandler->dueHandler();
		
		// $data['main_content'] = 'admin_showDue';
       // $this->load->view('includes/template',$data);
    }
	
	function logout_larea(){
        $this->session->sess_destroy();
        $data['msg'] = "You have logged out ";
        $this->load->view('includes/header');
        $this->load->view('wrongLogin',$data);
        $this->load->view('includes/footer');
    }
	
	/***********/
	
	function user_info(){
		$this->load->model('adminHandler');
        $data['user_data'] = $this->adminHandler->user_info_handler();		
		$data['main_content'] = 'admin_user_info';
        $this->load->view('includes/template',$data);
	}
	
	function user_details(){
		$this->load->model('adminHandler');
        $data['user_details'] = $this->adminHandler->user_info_details();
				
		$data['main_content'] = 'admin_user_details';
        $this->load->view('includes/template',$data);
	}
	
	
	function subjectwise_books(){
		$this->load->model('adminHandler');
        $data['sub_data'] = $this->adminHandler->subjectwise_books();		
		$data['main_content'] = 'admin_subjectwise_books';
        $this->load->view('includes/template',$data);
	}
	
	function subject_details(){
		$this->load->model('adminHandler');	
        $data['subj_title'] = $this->adminHandler->subjectwise_books_title();
				
		$data['main_content'] = 'admin_subject_details';
        $this->load->view('includes/template',$data);
	}
	
	function edition_details(){
		$this->load->model('adminHandler');	
        $data['edition'] = $this->adminHandler->book_edition();
		$data['title'] = $this->adminHandler->book_title();
				
		$data['main_content'] = 'admin_edition_details';
        $this->load->view('includes/template',$data);
	}
	
	
	function approve_borrow_req(){
		$this->load->model('adminHandler');
        $data['user_data'] = $this->adminHandler->borrow_req_table();		
		$data['main_content'] = 'admin_borrow_req_list';
        $this->load->view('includes/template',$data);
	
	}
	
	function borrow_details(){
		$this->load->model('adminHandler');
        $data['user_data'] = $this->adminHandler->borrow_req_details();	
		$data['main_content'] = 'admin_borrow_details';
        $this->load->view('includes/template',$data);
	}
	
	function borrow_approve(){
		if(isset($_POST['approve'])){
			if($_POST['approve'] == 'Approve'){
					$this->load->model('adminHandler');
					$data['user_data'] = $this->adminHandler->approve_borrow_req();
					
					$this->approve_borrow_req();
					
				
				}
		}
		else if($_POST['reject'] == 'Reject'){
			$this->load->model('adminHandler');
			$this->adminHandler->reject_borrow_req();	
				
			$this->approve_borrow_req();
		}
			
		/*$hidden=$_POST['id'];
		print_r($hidden);
		echo $hidden;*/
	}
	
	
	function approve_new_user(){
		$this->load->model('adminHandler');
        $data['user_data'] = $this->adminHandler->approve_new_user();		
		$data['main_content'] = 'admin_user_req_list';
        $this->load->view('includes/template',$data);
	}
	
	function user_req_details(){
		
		$this->load->model('adminHandler');
        $data['user_data'] = $this->adminHandler->user_req_details();	
		$data['main_content'] = 'admin_new_user_details';
        $this->load->view('includes/template',$data);
	}
	
	function new_user_approve(){
		if(isset($_POST['approve'])){
			if($_POST['approve'] == 'Approve'){
					$this->load->model('adminHandler');
					$this->adminHandler->approve_new_req();
					
					$this->approve_new_user();
					
				
				}
		}
		else if($_POST['reject'] == 'Reject'){
			$this->load->model('adminHandler');
			$this->adminHandler->reject_new_req();	
				
			$this->approve_new_user();
		}
	}
	
	/*function search_admin(){

        $data['main_content'] = 'admin_search';
        $this->load->view('includes/template',$data);
    }*/
	
	function search_by_title(){

        $data['main_content'] = 'admin_search_by_title';
        $this->load->view('includes/template',$data);
    }
	
	 function search_by_author(){

        $data['main_content'] = 'admin_search_by_author';
        $this->load->view('includes/template',$data);
    }
	
	 function search_by_publisher(){

        $data['main_content'] = 'admin_search_by_publisher';
        $this->load->view('includes/template',$data);
    }
	
	 function search_by_subject(){

        $data['main_content'] = 'admin_search_by_subject';
        $this->load->view('includes/template',$data);
    }
	
	function search_for_admin_Handler(){

      $type = $this->input->post('type');
		$title_in = $this->input->post('title_in');
        $this->load->model('adminHandler');
        $data['result'] = $this->adminHandler->admin_searchHandler();
        //foreach($data['result'] as $ress)echo ($ress['BOOK_ID']." ".$ress['EDITION_NO']." ".$ress['ISBN']." ".$ress['NO_OF_COPY']." ".$ress['NO_OF_AVAILABLE_COPY']." ".$ress['PUBLISH_DATE']." ".$ress['ARRIVAL_DATE']."<br>");
        $this->load->view('includes/header.php');
        $this->load->view('admin_search_result.php',$data);
        $this->load->view('includes/footer.php');
    }
	
	function search_details(){
		$this->load->model('userHandler');	
        $data['edition'] = $this->adminHandler->book_edition();
		$data['title'] = $this->adminHandler->book_title();
				
		$data['main_content'] = 'admin_search_details';
        $this->load->view('includes/template',$data);
	}
	
	function return_larea(){

        $data['main_content'] = 'admin_inputFor_return';
        $this->load->view('includes/template',$data);
    }
	
	function admin_return_handler(){
		
		//echo $this->input->post('borrower_id');
		//echo $this->input->post('accession_id');
		
		$this->form_validation->set_rules('borrower_id','Borrower_Id','required');
		$this->form_validation->set_rules('accession_id','Accession_Id','required');
		
		if($this->form_validation->run() == false)
				$this->admin_return_handler();
		else{
			$this->load->model('adminHandler');	
			$data['ret'] = $this->adminHandler->book_return();
			$data['main_content'] = 'admin_return_msg';
			$this->load->view('includes/template',$data);
			//echo "xxxxxxxxxxxxxxxxxxxxx";
		}
	
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
