<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	private $view_data = array();


	public function index()
	{
		
		$this->load->helper('url');
		
		if ($this->input->post())
		{
			switch ($this->process_register())
			{
				case 'valid_false':

					break;

				case 'dupe_email':
			
					$this->view_data['error_message'] = "Email already exists";
					break;
			
				case 'db_true':
			
					$this->view_data['success_message'] = "<strong>Thanks!</strong> You're registered!<span> <a href='login'>Log in now</a></span>";
					break;
				
				case 'db_false':
			
					$this->view_data['error_message'] = "Database error! registration unsuccessful";				
					break;
			}
		}

		$this->load->view('register', $this->view_data);
		
	}
	
	
	public function process_register()
	{
		$this->load->library('form_validation');
		$this->load->model('register_model');

		if ($this->form_validation->run('register/process_register') == FALSE) 
		{
			return 'valid_false';
		}
		else 
		{
			if ($this->register_model->email_dupe_check($this->input->post('email'))) 
			{ //check for dupe email
				return 'dupe_email';
			}

			else 
			{				
				$timestamp = date('Y-m-d h:i:s');
				
				$reg_data = array('email' => $this->input->post('email'),
								'username' => $this->input->post('username'),
								'password' => md5($this->input->post('password') . $timestamp),
								'created_at' => $timestamp
								);

				if ($this->register_model->add_user($reg_data))
					return 'db_true';
				else
					return 'db_false';
			}
		}
	
	}
	
		public function cancel()
		{
			$this->session->sess_destroy();
		
			$this->load->view('register');
		}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */