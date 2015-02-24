<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class alumninight extends CI_Controller {
public $session = "";
	function __construct() {
		parent::__construct();
		$this -> load -> database();
		$this -> load -> model('model_news');
		$this -> load -> model('model_login');
		$this -> load -> model('model_alumninight');
	}
	function index()
	{
		$data['row_count'] = $this -> model_alumninight -> chk_regis();
		$data['row_count_58'] = $this -> model_alumninight -> chk_regis_58();
		$data['report_regis'] = $this -> model_alumninight -> report_regis();
		$data['report_regis_58'] = $this -> model_alumninight -> report_regis_58();
		$data['page_title'] = 'ลงทะเบียนเข้าร่วมงาน "คืนสู่เหย้า ICT" ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
		$this -> template -> write_view('content', 'view_listregister', $data);
		$this -> template -> render();
        //$this->output->enable_profiler(TRUE);
	}
	function alumniregister()
	{
		$data['page_title'] = 'ลงทะเบียนเข้าร่วมงาน "คืนสู่เหย้า ICT" ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
		$this -> template -> write_view('content', 'view_alumninight', $data);
		$this -> template -> render();
        //$this->output->enable_profiler(TRUE);
	}
	function addregister()
	{
		$name = $this->input->post('book_name');
		$tel = $this->input->post('book_tel');
		$email = $this->input->post('book_email');
		$major = $this->input->post('book_major');
		$book_type = $this->input->post('book_type');
		if( $name == "" || $tel == "" || $email =="" || $major==""){
			?>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <script type="text/javascript">
				alert ("กรุณาระบุข้อมูลผู้จองให้ครบถ้วน");
				history.back();
			</script>
            <?php
			die();
		}else{
			
			if($book_type == 1){
				if(($this->input->post('num_table'))=="" ){
					?>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<script type="text/javascript">
						alert ("กรุณาระบุจำนวนโต๊ะที่จอง");
						history.back();
					</script>
					<?php
					die();

				}
			}else if($book_type == 2){
				if($this->input->post('textbox1')=="" && $this->input->post('textbox2')=="" && $this->input->post('textbox3')=="" && $this->input->post('textbox4')=="" && $this->input->post('textbox5')=="" && $this->input->post('textbox6')=="" && $this->input->post('textbox7')==""){
					?>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<script type="text/javascript">
						alert ("กรุณาระบุจำนวนที่นั่งที่จอง");
						history.back();
					</script>
					<?php
					die();
				}
			}
		}
		if($book_type==1){
			@$num_table = $this->input->post('num_table');
			$total = $num_table*2400;
		}else if ($book_type==2){
			for($i =1 ;$i<= 7;$i++){
				@$num_chair[$i] = $this->input->post('textbox'.$i);
			}
			$num_table = 0;
			for($a =1 ;$a<= 7;$a++){
				if(@$num_chair[$a] != ""){
					$num_table ++; 
				}
			}
			$total = $num_table*400;
			// echo $num_table;die();
		}
		$data['page_title'] = 'ลงทะเบียนเข้าร่วมงาน "คืนสู่เหย้า ICT" ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
		

		$this ->model_alumninight->addregister($name,$tel,$email,$major,$book_type,@$num_table,@$num_chair);
		?>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript">
        	alert ("ขอบคุณสำหรับการลงทะเบียนเข้าร่วมงาน กรุณาตรวจสอบสถานะโอนเงินที่หน้าเว็บไซต์อีกครั้ง\n\nยอดชำระสุทธิ<?="  ".number_format($total)." บาท"?>");
        </script>
		<META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?=base_url();?>alumninight"> 
        <?php
		die();
        //$this->output->enable_profiler(TRUE);
	}
	function coordinator()
	{
		$data['page_title'] = 'ผู้ประสานงาน "คืนสู่เหย้า ICT" ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
		$this -> template -> write_view('content', 'view_coordinator', $data);
		$this -> template -> render();
	}
        
}
?>