<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	private $view_data = array();
	
	public function index()
	{

		if (isset($this->session->userdata['score'])) // if coming from the quiz, when saving score while logged out
		{
			switch ($this->process_login())
			{	
				case 'valid_false':
		
					break;
		
				case 'db_true':
				
					redirect(base_url('quiz/save_score'));
					break;
			
				case 'db_false':
		
					$this->view_data['error_message'] = "We couldn't find you in our records.";
					break;
			}

		}


		elseif ($this->input->post()) // regular login procedure
		{
			switch ($this->process_login())
			{	
				case 'valid_false':
		
					break;
		
				case 'db_true':
				
					redirect(base_url('quiz'));
					break;
			
				case 'db_false':
		
					$this->view_data['error_message'] = "We couldn't find you in our records.";
					break;
			}
		}

		$this->load->view('login', $this->view_data);
	}


	private function process_login() 
	{	
		$this->load->helper('security');		
		$this->load->library('form_validation');
		$this->load->model('login_model');

		if ($this->form_validation->run('login/process_login') == FALSE) 
		{
			return 'valid_false';
		}
		else 
		{

			$userdata = $this->login_model->check_user($this->input->post('email'),
													 $this->input->post('password'));
	
			if ($userdata) 
			{				
			
				$sessiondata = array('id' => $userdata->row('id'),
									'username' => $userdata->row('username'),
									'logged_in' => TRUE);

				$this->session->set_userdata($sessiondata);

				return 'db_true';
			}
			else 
			{					
				return 'db_false';
			}
		}
	}
	
	
	public function logout()
	{
		
		$this->session->sess_destroy();
		
		redirect(base_url('home'));
	}
	
	public function cancel()
	{
		$this->session->sess_destroy();
	
		redirect(base_url('login'));
	}
	
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */