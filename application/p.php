<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class p extends CI_Controller {
public $session = "";
	function __construct() {
		parent::__construct();
		$this -> load -> database();
		$this -> load -> model('model_news');
		$this -> load -> model('model_login');
	}
	public function index()
	{
		$data['page_title'] = 'ข่าวสาร - บริการวิชาการ ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
		$this -> template -> write_view('content', 'view_index', $data);
		$this -> template -> render();
	}
	public function login()
	{
		$data['page_title'] = 'ข่าวสาร - บริการวิชาการ ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
		$this -> template -> write_view('content', 'view_login', $data);
		$this -> template -> render();
	}
	public function chk_login()
	{
            $uname = $this->input->post('uname');
            $upass = $this->input->post('upass');
            if(is_numeric($uname)){
            ?>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <script>
                            alert("ขออภัย คุณกรอกข้อมูลผิดรูปแบบ !!!!!");
                    </script>
                    <META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?=base_url()?>p/login">
            <?php
            }else{
                                    //Login if not in web_admin sql
                                    if($upass){
                                    $server = "dcup-01.up.local"; //dc1-nu
                                    $user = $uname."@up.local";

                                    // connect to active directory
                                            $ad = ldap_connect($server);
                                            if(!$ad){
                                                    die("Connect not connect to ".$server);
                                                    ?>
                                                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                                    <script type="text/javascript">
                                                            alert("ไม่สามารถติดต่อ server มหาลัยเพื่อตรวจสอบรหัสผ่านได้");
                                                    </script>
                                                    <META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?=base_url()?>p/login">
                                                    <?php
                                            }else{ 
                                                    $b = @ldap_bind($ad,$user,$upass);
                                                    if(!$b){	
                                                    ?>
                                                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                                        <script type="text/javascript">
                                                                alert("ขออภัย !!!! ข้อมูลของท่านไม่ถูกต้อง");
                                                        </script>
                                                        <META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?=base_url()?>p/login">
                                                    <?php
                                                    }else{ 
                                                        ?>
                                                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                                        <script type="text/javascript">
                                                                alert("ยินดีต้อนรับ คุณ <?=$uname?>");
                                                        </script>
                                                        <META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?=base_url()?>p/login">
                                                        <?php
                                                    }
                                            }
                                    }else{
                                    ?>
                                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                            <script type="text/javascript">
                                                    alert("ไม่สามารถเข้าสู่ระบบได้ กรุณารหัสผ่านอีกครั้ง !!");
                                            </script>
                                            <META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?=base_url()?>p/login">	
                                    <?php
                                    }
            }
        }
}
?>