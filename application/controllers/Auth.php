<?php
class Auth extends CI_Controller{

    public function register(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('email','email',['required','email']);
		$this->form_validation->set_rules('department_name','department_name','required');
		$this->form_validation->set_rules('phone','phone','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('created_at','created_at','required');
		;

       if($this->form_validation->run() == false){
            $this->load->view('register');
        }else{

        		$this->load->model('Auth_model');
        		$formArray = array();
        		$formArray['name'] = $this->input->post('name');
				$formArray['email'] = $this->input->post('email');
				$formArray['department_name'] = $this->input->post('d_name');
				$formArray['phone'] = $this->input->post('m_no');
				$formArray['password'] =md5($this->input->post('password'));
				$formArray['created_at'] = date(format:'Y-m-d H:i:s');
			$this->Auth_model->create($formArray);

				$this->session->set_flashdata('msg','your account has been created sucessfully ');
			redirect( uri: base_url().'index.php/Auth/register');
        }
    }
    public function login(){
		$this->load->view('login');
	}
	public function Dashboard(){
		$this->load->view('Dashboard');
	}

	public function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('d_name','d_name','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run()){
           
			$d_name = $this->input->post('d_name');
			$password =md5($this->input->post('password'));

			$this->load->model('Auth_model');
			if($this->main_model->can_login($username,$password)){
				$session_data = array(
					'd_name' => $d_name
				);
				$this->session->set_userdata($session_data);
				redirect(base_url(),'index.php/Auth/Dashboard');
			}
			else{
				$this->session->set_flashdata('error','Invalid Username Or Password.');
				redirect(base_url(),'index.php/Auth/login_validation');
			}
        }else{
        		$this->login();
        }
	}

	function enter(){
		if($this->session->userdata('username') != ''){
			echo '<h2>welcome' .$this->session->userdata('username') . '</h2>';
			echo '<h3>Log Out' .$this->session->userdata('username') . '</h3>';

		}
		else{
			redirect(base_url().Auth/login_validation);
		}
	}
	function logout(){
		$this->session->unset_userdata('username');
		redirect(base_url().'Auth/login');
	}
	
}
?>
