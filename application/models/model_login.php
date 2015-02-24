<?php
class model_login extends CI_Model {
	function __construct() {
		parent::__construct();
		//$this->load->database();
	}

	function insert_log($uname,$last_login,$ip_address) 
	{
		$data = array(
					'log_sessid' => $this->session->userdata('session_id'),
					'log_username' => $uname,
					'log_datetime' => $last_login, 
					'log_ipaddr' => $ip_address 
		);	
		$this->db->insert('log', $data);
	}
	function chk_admin($username,$password) 
	{
		$query = $this->db->query("select * from user_system where  user_system.user_name ='".$username."' and user_system.user_password = '".$password."' and user_type = 1  ");	
		return $query->num_rows();
	}
		
}
?>