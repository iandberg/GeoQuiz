<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scores extends CI_Controller {

	public function index()
	{
// 		$this->output->enable_profiler(TRUE);
		$this->load->model('scores_model');
		$this->load->library('table');
		
		$table_data = $this->scores_model->get_scores();

		
		$this->table->set_heading('Username', 'Quiz', 'Score', 'Date');
		
		$this->view_data['scores'] = $this->table->generate($table_data);

		$this->load->view('scores', $this->view_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */