<?php
class model_alumnusdb extends CI_Model {
	function __construct() {
		parent::__construct();
		//$this->load->database();
	}
        
	function select_show_news() {
	$query = $this->db->query("select * from web_news where category =  2 order by id DESC limit 0,14 ");	
			return $query;
	}
	function select_show_news_it() {
	$query = $this->db->query("select * from web_news where category =  3 order by id DESC limit 0,14 ");	
			return $query;
	}
	function select_news() {
		$query = $this->db->query("select * from web_news order by id DESC");	
                return $query;
	}
	function select_news_it() {
		$query = $this->db->query("select * from web_news where category = 3  order by id DESC");	
                return $query;
	}
    function add_news($category,$topic,$headline,$posted_file,$post_date,$update_date,$pageview,$post_by) {
		$data = array(
                    'category' => $category,
                    'topic' => $topic,
                    'headline' => $headline,
                    'posted_file' => $posted_file,
                    'post_date' => $post_date,
                    'update_date' => $update_date,
                    'pageview' => $pageview,
                    'post_by' => $post_by
                );
	$this->db->insert('web_news', $data); 
	}
	function add_news_it($category,$topic,$headline,$posted_file,$post_date,$update_date,$pageview,$post_by) {
		$data = array(
                    'category' => $category,
                    'topic' => $topic,
                    'headline' => $headline,
                    'posted_file' => $posted_file,
                    'post_date' => $post_date,
                    'update_date' => $update_date,
                    'pageview' => $pageview,
                    'post_by' => $post_by
                );
	$this->db->insert('web_news', $data); 
	}
    function read_news($p) {
		$query = $this->db->query("select * from web_news where id = '".$p."'");	
        return $query;
	}
	function up_date_read_news($pageview,$p) {
		$query = $this->db->query("update web_news SET web_news.pageview = '".$pageview."' where web_news.id = '".$p."' ");	
	}
	function news_show() {
		$query = $this->db->query("select * from web_news order by id DESC");	
		return $query;
	}
	function addalumnus_stu($username,$regisdata_nameth/*,$nameeng*/,$regisdata_degree,$regisdata_major,$regisdata_congrat,$regisdata_schoolof,$regisdata_position,$regisdata_nameplacework,$regisdata_idplacework,$regisdata_mooplacework,$regisdata_buildingplacework,$regisdata_floorplacework,$regisdata_alleyplacework,$regisdata_streetplacework,$regisdata_districplacework,$regisdata_ampurplacework,$regisdata_provinceplacework,$regisdata_postcodeplacework,$regisdata_telplacework,$regisdata_faxplacework,$regisdata_emailplacework) {
		
		$data_stu = array(
                    'alumnus_stuid' => @$username,
                    'alumnus_regisdata_nameth' => @$regisdata_nameth,
                    //'alumnus_nameeng' => $nameeng,
                    'alumnus_regisdata_degree' => @$regisdata_degree,
                    'alumnus_regisdata_major' => @$regisdata_major,
					'alumnus_regisdata_congrat' => @$regisdata_congrat,
                    'alumnus_regisdata_schoolof' => @$regisdata_schoolof
                );
	$this->db->insert('alumnusstu_tb', $data_stu); 

		$data_work = array(
                    'alumnus_stuid' => @$username,
                    'alumnus_position' => @$regisdata_position,
                    'alumnus_nameplacework' => @$regisdata_nameplacework,
                    'alumnus_idplacework' => @$regisdata_idplacework,
                    'alumnus_mooplacework' => @$regisdata_mooplacework,
                    'alumnus_buildingplacework' => @$regisdata_buildingplacework,
                    'alumnus_floorplacework' => @$regisdata_floorplacework,
                    'alumnus_alleyplacework' => @$regisdata_alleyplacework,
                    'alumnus_streetplacework' => @$regisdata_streetplacework,
                    'alumnus_districtplacework' => @$regisdata_districplacework,
                    'alumnus_ampurplacework' => @$regisdata_ampurplacework,
                    'alumnus_provinceplacework' => @$regisdata_provinceplacework,
                    'alumnus_postcodeplacework' => @$regisdata_postcodeplacework,
                    'alumnus_telplacework' => @$regisdata_telplacework,
                    'alumnus_faxplacework' => @$regisdata_faxplacework,
                    'alumnus_emailplacework' => @$regisdata_emailplacework,
                );

	$this->db->insert('alumnuswork_tb', $data_work); 
	}
}
?>