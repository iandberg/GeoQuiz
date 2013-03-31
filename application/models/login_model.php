<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model 
{

	public function check_user($email, $password) 
	{		
		$this->load->library('security');
		
		$email_search = array('email' => $email); 
				
		$query = $this->db->get_where('users', $email_search); // find matching record from email

		$password = md5($password . $query->row('created_at')); // encrypt password attempt
		
		if ($password == $query->row('password')) // compare encrypted password attempt with the one on record
			return $query;
		else
			return FALSE;

	}
}
/* End of file */
/* File location: */