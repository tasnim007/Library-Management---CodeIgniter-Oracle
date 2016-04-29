<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{

         /*   $data['main_content'] = 'login_form';
            $this->load->view('includes/template',$data);*/
			$this->load->view('login');
        }

        function validate_welcome(){
            
			$type = $this->input->post('state');
            $this->load->model('userHandler');
            $res = $this->userHandler->validate();

           if($type == "librarian"){
			   if($res){
				$data['user_id'] = $res;
				 $data['is_logged_in'] = true;
				$this->session->set_userdata($data);

				redirect('admin/home_admin');
				}
				else{

                $data['msg'] = "Wrong Username or password.You need to ";
                $this->load->view('includes/header.php');
                $this->load->view('wrongLogin.php',$data);
                $this->load->view('includes/footer.php');
            }
				}
			
			else{
			if ($res){

                $data['username'] = $this->input->post('username');
                $data['is_logged_in'] = true;
                $data['user_id'] = $res;

                $this->session->set_userdata($data);

                redirect('membersArea/home_marea');
            }
            else{

                $data['msg'] = "Wrong Username or password.You need to ";
                $this->load->view('includes/header.php');
                $this->load->view('wrongLogin.php',$data);
                $this->load->view('includes/footer.php');
            }
			}
        }

        function sign_up_welcome(){

          /* $data['main_content'] = 'sign_up_form';
            $this->load->view('includes/template',$data);*/
			 $this->load->view('reg_form');
        }

        function create_user_welcome(){

            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('user_name','User Name','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required|min_length[4]');
            $this->form_validation->set_rules('password1','Retype Password','trim|required|min_length[4]|matches[password]');
            $this->form_validation->set_rules('user_type','User type','trim|required');
            $this->form_validation->set_rules('email_address','Email','trim|required|valid_email');
            $this->form_validation->set_rules('lvl','Level','trim');
            $this->form_validation->set_rules('trm','Term','trim');
            $this->form_validation->set_rules('address','Address','trim|required');
            $this->form_validation->set_rules('phone_number','Phone','trim|required');
			$this->form_validation->set_rules('dob','Date of Birth','trim|required');

            if($this->form_validation->run() == false)$this->sign_up_welcome();
            else{
                $this->load->model('userHandler');
                $this->userHandler->create_user();
            }

        }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */