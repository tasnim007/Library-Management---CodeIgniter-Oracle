<?php

class MembersArea extends Controller{

    function __construct(){

        parent::Controller();
        $this->is_logged_in();
    }

    function is_logged_in(){

        $nam = $this->session->userdata('username');
        $user_id = $this->session->userdata('user_id');
        if($this->session->userdata('is_logged_in') == false)redirect('welcome/index');
        
    }

    function home_marea(){
        $nam = $this->session->userdata('username');
        $data['main_content'] = 'home';
        $data['nm'] = $nam;
        $this->load->view('includes/template',$data);
    }
    function my_info_marea(){

        $this->load->model('userHandler');
        $data['ress'] = $this->userHandler->showMyInfo($this->session->userdata('user_id'));
		$data['main_content'] = 'my_info';
        $this->load->view('includes/template',$data);
		
    }
    function update_info_Handler(){

        $this->load->model('userHandler');
        $this->userHandler->updateMyInfo($this->session->userdata('user_id'));
    }
    function update_info_marea(){
        
        $this->load->model('userHandler');
        $this->userHandler->userdata_update($this->session->userdata('user_id'));
    }
    function search_for_user_Handler(){
		$type = $this->input->post('type');
		$title_in = $this->input->post('title_in');
		//echo $title;
		
        $this->load->model('userHandler');
        $data['result'] = $this->userHandler->searchHandler();
        //foreach($data['result'] as $ress)echo ($ress['BOOK_ID']." ".$ress['EDITION_NO']." ".$ress['ISBN']." ".$ress['NO_OF_COPY']." ".$ress['NO_OF_AVAILABLE_COPY']." ".$ress['PUBLISH_DATE']." ".$ress['ARRIVAL_DATE']."<br>");
        $this->load->view('includes/header.php');
        $this->load->view('search_result.php',$data);
        $this->load->view('includes/footer.php');
    }
	
	
/*    function search_marea(){

        $data['main_content'] = 'users_search';
        $this->load->view('includes/template',$data);
    }*/
	
	 function search_by_title(){

        $data['main_content'] = 'user_search_by_title';
        $this->load->view('includes/template',$data);
    }
	
	 function search_by_author(){

        $data['main_content'] = 'user_search_by_author';
        $this->load->view('includes/template',$data);
    }
	
	 function search_by_publisher(){

        $data['main_content'] = 'user_search_by_publisher';
        $this->load->view('includes/template',$data);
    }
	
	 function search_by_subject(){

        $data['main_content'] = 'user_search_by_subject';
        $this->load->view('includes/template',$data);
    }
	
    function history_marea(){

        $this->load->model('userHandler');
        $this->userHandler->historyHandler($this->session->userdata('user_id'));
    }
    function due_marea(){

        $this->load->model('userHandler');
        $this->userHandler->dueHandler($this->session->userdata('user_id'));
    }
    function logout_marea(){
        $this->session->sess_destroy();
        $data['msg'] = "You have logged out ";
        $this->load->view('includes/header');
        $this->load->view('wrongLogin',$data);
        $this->load->view('includes/footer');
    }
	
	
	/***************/
	
function updatePassword(){

        $this->load->model('userHandler');
        $this->userHandler->updateMyPass($this->session->userdata('user_id'));
    }

function pass_update(){

        $data['main_content'] = 'update_pass_form';
        $this->load->view('includes/template',$data);
    }

	
	/******************/
	
	
		/******************/
		/*****TASNIM********/
		/******************/
	
	function user_all_books(){
		$this->load->model('userHandler');
        $data['sub_data'] = $this->userHandler->subjectwise_books();		
		$data['main_content'] = 'user_subjectwise_books';
        $this->load->view('includes/template',$data);
	}
	
	function subject_details(){
		$this->load->model('userHandler');	
        $data['subj_title'] = $this->userHandler->subjectwise_books_title();
		$data['main_content'] = 'user_subject_details';
        $this->load->view('includes/template',$data);
	}
	
	function edition_details(){
		$this->load->model('userHandler');	
        $data['edition'] = $this->userHandler->book_edition();
		$data['title'] = $this->userHandler->book_title();
				
		$data['main_content'] = 'user_edition_details';
        $this->load->view('includes/template',$data);
	}
	
	function user_borrow_book(){
		$this->load->model('userHandler');
		$data['msg'] = $this->userHandler->user_borrow_book();
		$data['main_content'] = 'user_borrow_book';
        $this->load->view('includes/template',$data);
	}
	
	
	function user_borrow_this(){
		$this->load->model('userHandler');
		$data['msg'] = $this->userHandler->user_borrow_this();
		$data['main_content'] = 'user_borrow_book';
        $this->load->view('includes/template',$data);
	}
	
	function user_borrow_details(){
		$this->load->model('userHandler');	
        $data['edition'] = $this->userHandler->book_edition();
		$data['title'] = $this->userHandler->book_title();
				
		$data['main_content'] = 'user_search_details';
        $this->load->view('includes/template',$data);
	}
	
}

?>
