<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz extends CI_Controller {

	public function index()
	{
		$this->view_data['quiz'] = TRUE;
		
		$this->view_data['session'] = $this->session->all_userdata();
		
		if($this->input->post())
		{
			if($this->input->post('formtype') == 'save_score')
			{
				$this->save_score();
				redirect(base_url('scores'));
			}
		}
		
		$this->load->view('quiz', $this->view_data);
	}

	

	public function prepare_quiz($continent)
	{
		$this->load->model('quiz_model');
		$data_object = $this->quiz_model->get_quiz(str_replace('_', ' ', $continent));
		
		$j = 0;
		foreach ($data_object as $row)
		{
			$data[$j]['name'] = $row->name;
			$data[$j]['code'] = $row->code;
			$data[$j]['game_id'] = $row->game_id;
			$data[$j]['flag_width'] = $row->width;
			$j++;
		}
		
		shuffle($data);// randomize the questions

		echo json_encode($data);
	
	}
	
	
	public function save_score()
	{

		$this->load->model('quiz_model');

		if($this->input->post())
		{
			$this->session->set_userdata('game_id', $this->input->post('game_id'));
			$this->session->set_userdata('score', $this->input->post('score'));
		}

		if ($this->session->userdata('logged_in') == NULL)
		{
			redirect(base_url('login'));
		}

		elseif ($this->session->userdata('logged_in') == 1)
		{
			$score_data = array('user_id' => $this->session->userdata('id'),
								'game_id' => $this->session->userdata('game_id'),
								'score' => $this->session->userdata('score'));

			$this->quiz_model->save_quiz_score($score_data);	
		
			$this->session->unset_userdata('score');
			$this->session->unset_userdata('game_id');
			
			$this->view_data['quiz'] = TRUE; // to trigger the script partial
		
// 			$this->view_data['session'] = $this->session->all_userdata();
		
// 			$this->view_data['game_save_message'] = "Game Saved!";
// 			$this->load->view('quiz', $this->view_data);
		
			$this->session->set_flashdata('game_save', 1);
		
			redirect(base_url('quiz'));
		}
	}
	
	public function study_guide()
	{	
		$this->view_data['study_guide'] = TRUE;
		$this->load->view('study_guide', $this->view_data);
	}
	
	public function get_country_array()
	{
		$this->load->model('quiz_model');

		$countries = $this->quiz_model->get_country_array();
		
		$data = array();
		foreach($countries as $row)
		{
			$data[$row->code] = array($row->name, $row->width);
		}
		
		echo json_encode($data);
	}
	
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */