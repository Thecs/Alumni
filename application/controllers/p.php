﻿<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class p extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> database();
		$this -> load -> model('model_news');
		$this -> load -> model('model_login');
	}
	function index()
	{
		$data['page_title'] = 'ข่าวสาร - บริการวิชาการ ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
		$this -> template -> write_view('content', 'view_index', $data);
		$this -> template -> render();
        //$this->output->enable_profiler(TRUE);
	}
	public function login()
	{
		$data['page_title'] = 'ข่าวสาร - บริการวิชาการ ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
		$this -> template -> write_view('content', 'view_login', $data);
		$this -> template -> render();
	}
	public function manage()
	{
            $uname = $this->input->post('uname');
            $upass = md5($this->input->post('upass'));
            if(is_numeric($uname)){
            ?>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <script>
                            alert("ขออภัย คุณกรอกข้อมูลผิดรูปแบบ !!!!!");
                    </script>
                    <META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?=base_url()?>p/login">
            <?php
            }else{
				 $checkuse=$uname;
				 //$ll=$_SESSION['sessionID'];
				 //Login ผ่าน
				 require_once("asset/lib/nusoap.php");
				 $username = $uname;
				 $password = $upass; 
				 $num_rows = $this -> model_login -> chk_admin($username,$password);
				 
				 if($num_rows>0){
					//$this->output->enable_profiler(TRUE);
				 	$data_log = array(
						'user_data'=>$uname,
						'uname' => $uname,
						'last_login' => date("Y-m-d H:i:s"), 
						'ip_address' => $_SERVER['REMOTE_ADDR'], 
						'logged_in' => TRUE
					);
					$this -> session -> set_userdata($data_log);
					$this -> model_login -> insert_log($data_log['uname'],$data_log['last_login'],$data_log['ip_address']);
					?>
					<META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?=base_url()?>admin">
					<?php		
				 }else{
				 /*$wsdl = "https://ws.up.ac.th/mobile/AuthenService.asmx?WSDL";
				 $soapaction = "http://tempuri.org/Login";
				 print "<pre>";
				 
				 $client = new nusoap_client('https://ws.up.ac.th/mobile/AuthenService.asmx?WSDL', true);
				 $user=base64_encode($username);
				 $pass=base64_encode($password);
				 $document = '<Login xmlns="http://tempuri.org/">';
				 $document .= '<username>'.$user.'</username>';
				 $document .= '<password>'.$pass.'</password>';
				 $document .= '</Login>';
				 $mysoapmsg = $client->serializeEnvelope($document,'',array(),'document', 'literal');
				 $response = $client->send($mysoapmsg, $soapaction);
				 $session = $response['LoginResult'];
					echo $client;die();
					if($session == ""){*/
						?>
						<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						<script>
								alert("ขออภัย ไม่มีข้อมูลของคุณ !!!!!");
						</script>
						<META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?=base_url()?>p/login">										
					<?php 						
				}
			}
		}
        
        
        public function admin() 
        {
            $data['page_title'] = 'ผู้ดูแลระบบ | ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
            $this -> template -> write_view('content', 'view_admin', $data);
            $this -> template -> render();
        }
        public function logout()
        {
			$this->session->unset_userdata('user_data');
			$this->session->unset_userdata('uname');
			$temp = $this->session->userdata('uname');
			$this->session->sess_destroy();
			$this->session->set_userdata('session_id', $temp);
            ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?=base_url()?>">
            <?php
            
        }
        function readnews(){
            $query_webnews_index = $this -> model_news -> read_news($_GET['p']);
            foreach ($query_webnews_index->result() as $row){
				$data['title'] = $row->topic;
				$data['headline'] = $row->headline;
				$data['posted_file'] = $row->posted_file;
				$data['post_date'] = $row->post_date;
				$data['pageview'] = $row->pageview;
				$data['post_by'] = $row->post_by;
            }
			$this->model_news->up_date_read_news($row->pageview+1,$_GET['p']);
            include_once 'asset/date_thai.php';
            $data['post_date']=DateThai($data['post_date']);
            $data['page_title'] = 'ข่าวประชาสัมพันธ์ : '.$data['title'];
            $this -> template -> write_view('content', 'readnews', $data);
            $this -> template -> render();
            //$this->output->enable_profiler(TRUE);
        }
        function staff(){
            $data['page_title'] = 'ติดต่อเจ้าหน้าที่';
            $this -> template -> write_view('content', 'staff', $data);
            $this -> template -> render();
        }
		function news_show(){
			$data['new_show'] = $this -> model_news -> news_show();
			
			$data['page_title'] = 'ข่าวประชาสัมพันธ์';
            $this -> template -> write_view('content', 'view_news_show', $data);
            $this -> template -> render();
		}
		function alumni_db(){
			$data['new_show'] = $this -> model_news -> news_show();
			$data['page_title'] = 'ฐานข้อมูลศิษย์เก่า | ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
            $this -> template -> write_view('content', 'view_alumni_db', $data);
            $this -> template -> render();
		}
		 function popup(){
			$this->load->view('view_popup');
		}
        
}
?>