<?php
class model_alumninight extends CI_Model {
	function __construct() {
		parent::__construct();
		//$this->load->database();
	}
	function addregister($name,$tel,$email,$major,$book_type,$num_table,$num_chair) {
		if($book_type==1){
			$num_book = $num_table;
		}else if ($book_type==2){
			$num_book = $num_table;
		}else{
			$num_book = 0;
		}
		$date = date_create();
		$timestamp = date_timestamp_get($date);
		$data = array(
                        'name' => $name,
                        'tel' => $tel,
                        'email' => $email,
						'major' => $major,
						'book_type' => $book_type,
						'num_book' => $num_book,
						'name_id' => $timestamp,
						'date_book' => date('Y-m-d H:i:s'),
						'pay_status' => "1"
                );
 		$this->db->insert('alumni_register', $data);

 		if(@$num_chair>0){
	 		$i=1;
	 		foreach(@$num_chair as $value){
	 			if(@$num_chair[@$i]!= ""){
			 		@$data_name = array(
			                        'name_id' => @$timestamp,
			                        'name' => @$num_chair[@$i]
			                );
			 		$this->db->insert('alumni_register_name', @$data_name);
		 		}
		 		$i++;
	 		}
	 	}
  	}
	function chk_regis(){
		
		$query = $this->db->query('select *  from alumni_register where alumni_register.date_book < "2014-11-27 00:00:00" ');
		return $query ->num_rows();
	}
	function chk_regis_58(){
		
		$query = $this->db->query('select *  from alumni_register where alumni_register.date_book > "2014-11-27 00:00:00" ');
		return $query ->num_rows();
	}
	function report_regis(){
		$this->db->select('*');
		$this->db->from('alumni_register');
		$this->db->where('date_book <', '2014-11-27 00:00:00'); 
        return $query = $this->db->get()->result();
	}
	function report_regis_58(){
		$this->db->select('*');
		$this->db->from('alumni_register');
		$this->db->where('date_book >', '2014-11-27 00:00:00'); 
        return $query = $this->db->get()->result();
	}
}
?>