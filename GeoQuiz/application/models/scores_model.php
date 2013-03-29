<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scores_model extends CI_Model 
{

	public function get_scores()
	{

		$query = "SELECT t2.username, t3.game_name, t1.score, DATE_FORMAT(t1.created_at,'%m/%d/%Y') as date
					FROM geoquiz.game_sessions as t1
					JOIN geoquiz.users as t2 on t1.user_id = t2.id
					JOIN geoquiz.games as t3 on t1.game_id = t3.id
					ORDER BY t1.score DESC
					LIMIT 10";
					
		$scores = $this->db->query($query);
		
		return $scores;
	
	}

}




