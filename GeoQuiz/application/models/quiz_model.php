<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz_model extends CI_Model 
{


	public function get_quiz($game)
	{
			$query = "SELECT countries.name, countries.code, countries.game_id FROM countries 
					JOIN games ON countries.game_id = games.id 
					WHERE games.game_name = '" . $game . "' ";
					
			$sql = $this->db->query($query);
		
			return $sql->result();

	}

	public function save_quiz_score($data)
	{

		$this->db->insert('game_sessions', $data); 
	
	}


}