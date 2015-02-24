<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller {
public $session = "";
	function __construct() {
		parent::__construct();
		$this -> load -> database();
		$this -> load -> model('model_news');
		$this -> load -> model('model_login');
	}
	function index()
	{
		$data['page_title'] = 'ข่าวสาร - บริการวิชาการ ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
		$this -> template -> write_view('content', 'view_register', $data);
		$this -> template -> render();
        //$this->output->enable_profiler(TRUE);
	}
	
        
}
?>