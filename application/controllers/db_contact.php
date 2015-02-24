<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class db_contact extends CI_Controller {
public $session = "";
	function __construct() {
		parent::__construct();
		$this -> load -> database();
		$this -> load -> model('model_news');
		$this -> load -> model('model_login');
	}
	function index()
	{
		$data['page_title'] = ':: ฐานข้อมูลศิษย์เก่า :: ข่าวสาร - บริการวิชาการ ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
		///$data['id'] = @$_GET['id'];
		$this -> template -> write_view('content', 'view_db_contact', $data);
		$this -> template -> render();
        //$this->output->enable_profiler(TRUE);
	}
        
}
?>