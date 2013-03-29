<?php

$config = array(
   'register/process_register' => array(
							array(
									'field' => 'username',
									'label' => 'Username',
									'rules' => 'trim|required|min_length[2]|xss_clean'
								 ),
							array(
									'field' => 'email',
									'label' => 'Email',
									'rules' => 'trim|required|valid_email'
								 ),
							array(
									'field' => 'password',
									'label' => 'Password',
									'rules' => 'trim|required|min_length[6]|matches[passconf]'
								 ),
							array(
									'field' => 'passconf',
									'label' => 'Password Confirmation',
									'rules' => 'trim|required'
								)
							),
							
  'login/process_login' => array(
							array(
									'field' => 'email',
									'label' => 'Email',
									'rules' => 'valid_email|required'
								 ),
							array(
									'field' => 'password',
									'label' => 'Password',
									'rules' => 'required'
								 )
							)
							
	   );

?>