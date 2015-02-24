<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> database();
		$this -> load -> model('model_news');
		$this -> load -> model('model_login');
	}
	function index(){
            //$data['name']=$this->session->userdata('name');
            $data['page_title'] = 'ข่าวสาร - บริการวิชาการ ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
			$data['user'] = $this->session->userdata('uname');
            $this -> template -> write_view('content', 'view_admin', $data);
            $this -> template -> render();
            //$this->output->enable_profiler(TRUE);

	}
	function pr()
	{ 			
                if($this->session->userdata('session_id') =="")
                {?>
                    <META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?=base_url()?>p/login">	
                <?php
                }else{
                    $this->load->library('pagination');

                    $config['base_url'] = 'http://www.ict.up.ac.th/alumni/admin/pr';
                    $config['total_rows'] = 200;
                    $config['per_page'] = 10; 

                    $this->pagination->initialize($config); 

                    
                    $data['page_title'] = 'จัดการข่าวสาร | ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
                    $this -> template -> write_view('content', 'bn_list_news', $data);
                    $this -> template -> render();
                    //$this->output->enable_profiler(TRUE);
                }
	}
	function pr_it()
	{ 			
                if($this->session->userdata('session_id') =="")
                {?>
                    <META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?=base_url()?>p/login">	
                <?php
                }else{
                    $this->load->library('pagination');

                    $config['base_url'] = 'http://www.ict.up.ac.th/alumni/admin/pr_it';
                    $config['total_rows'] = 200;
                    $config['per_page'] = 10; 

                    $this->pagination->initialize($config); 

                    
                    $data['page_title'] = 'จัดการข่าวสาร IT | ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
                    $this -> template -> write_view('content', 'bn_list_news_it', $data);
                    $this -> template -> render();
                    //$this->output->enable_profiler(TRUE);
                }
	}
	public function bn_add_news()
	{
                $data['page_title'] = 'จัดการข่าวสาร | ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
				$data['user'] = $this->session->userdata('uname');
                $this -> template -> write_view('content', 'bn_add_news', $data);
                $this -> template -> render();
                //$this->output->enable_profiler(TRUE);

	}
	public function bn_add_news_it()
	{
                $data['page_title'] = 'จัดการข่าวสาร IT | ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
				$data['user'] = $this->session->userdata('uname');
                $this -> template -> write_view('content', 'bn_add_news_it', $data);
                $this -> template -> render();
                //$this->output->enable_profiler(TRUE);

	}
	public function save_news()
	{   
                if($this->input->post('title')=="" || $this->input->post('detail_shortly')=="" || $this->input->post('detail')==""){
                ?>
                    <script type="text/javascript">
                        alert('กรุณากรอกข้อมูลให้ครบถ้วน');
                        history.back();
                    </script>
                <?php
                die();
                }
                //ทำการสร้างไฟล์ text ของข่าวสาร
                $arr_file = array(
                    'category' => '2',
                    'topic' => $this->input->post('title'),
                    'headline' => $this->input->post('detail_shortly'),
                    'posted_file' => date("dYHis"),
                    'post_date' => date("Y-m-d H:i:s"),
                    'update_date' => date("Y-m-d H:i:s"),
                    'post_by' => $this->session->userdata('uname'),
                    'pageview' => 1
                );
                
		$Filename = $arr_file['posted_file'].".txt";
		$txt_name = "asset/newsdata/".$Filename."";
		$txt_open = @fopen("$txt_name", "w");
		@fwrite($txt_open, "".$this->input->post('detail')."");
		@fclose($txt_open);
                
                //echo $this->input->post('detail');
                $this -> model_news -> add_news($arr_file['category'],$arr_file['topic'],$arr_file['headline'],$arr_file['posted_file'],$arr_file['post_date'],$arr_file['update_date'],$arr_file['pageview'],$arr_file['post_by']);

                ?>
                <script language="javascript">
                    alert('ประกาศข่าวเรียบร้อย');
                    window.location = '<?=base_url()?>admin/pr';
                </script>
                <?php
                       // $this->output->enable_profiler(TRUE);

	}
	public function save_news_it()
	{   
                if($this->input->post('title')=="" || $this->input->post('detail_shortly')=="" || $this->input->post('detail')==""){
                ?>
                    <script type="text/javascript">
                        alert('กรุณากรอกข้อมูลให้ครบถ้วน');
                        history.back();
                    </script>
                <?php
                die();
                }
                //ทำการสร้างไฟล์ text ของข่าวสาร
                $arr_file = array(
                    'category' => '3',
                    'topic' => $this->input->post('title'),
                    'headline' => $this->input->post('detail_shortly'),
                    'posted_file' => date("dYHis"),
                    'post_date' => date("Y-m-d H:i:s"),
                    'update_date' => date("Y-m-d H:i:s"),
                    'post_by' => $this->session->userdata('uname'),
                    'pageview' => 1
                );
                
		$Filename = $arr_file['posted_file'].".txt";
		$txt_name = "asset/newsdata/".$Filename."";
		$txt_open = @fopen("$txt_name", "w");
		@fwrite($txt_open, "".$this->input->post('detail')."");
		@fclose($txt_open);
                
                //echo $this->input->post('detail');
                $this -> model_news -> add_news_it($arr_file['category'],$arr_file['topic'],$arr_file['headline'],$arr_file['posted_file'],$arr_file['post_date'],$arr_file['update_date'],$arr_file['pageview'],$arr_file['post_by']);

                ?>
                <script language="javascript">
                    alert('ประกาศข่าวเรียบร้อย');
                    window.location = '<?=base_url()?>admin/pr_it';
                </script>
                <?php
                       // $this->output->enable_profiler(TRUE);

	}
	public function del_news(){
            $this->db->delete('web_news', array('id' => $_GET['id'])); 
            ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?=base_url()?>admin/pr">
        <?php
        //$this->output->enable_profiler(TRUE);
	 }

}
?>