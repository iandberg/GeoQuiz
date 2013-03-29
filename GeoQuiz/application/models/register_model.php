<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model 
{

	public function add_user($reg_array) 
	{	
		if($this->db->insert('users', $reg_array))
			return TRUE;
		else
			return FALSE;
	}


	public function email_dupe_check($email) 
	{
		$email_search = array('email' => $email);
	
		$query = $this->db->get_where('users', $email_search);

		if($query->num_rows() > 0)
			return TRUE;
		else
			return FALSE;
	}
}
/* End of file */
/* File location: */