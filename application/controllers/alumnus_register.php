<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class alumnus_register extends CI_Controller {
public $session = "";
	function __construct() {
		parent::__construct();
		$this -> load -> database();
		$this -> load -> model('model_alumnusdb');
	}
	function index()
	{
		$data['page_title'] = ':: ฐานข้อมูลศิษย์เก่า :: ข่าวสาร - บริการวิชาการ ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร';
		$this -> template -> write_view('content', 'view_alumnus_register', $data);
		$this -> template -> render();
        //$this->output->enable_profiler(TRUE);
	}
	function addregis()
	{
		$data = array(
                    'username' => $this->input->post('username'),
                    'regisdata_nameth' => $this->input->post('regisdata_nameth'),
                    'nameeng' => $this->input->post('nameeng'),
                    'regisdata_degree' => $this->input->post('regisdata_degree'),
                    'regisdata_major' => $this->input->post('regisdata_major'),
                    'regisdata_schoolof' => "เทคโนโลยีสารสนเทศและการสื่อสาร",
                    'pageview' => $pageview,
                    'post_by' => $post_by
		);	
		
		$this -> model_alumnusdb -> add_news($arr_file['category'],$arr_file['topic'],$arr_file['headline'],$arr_file['posted_file'],$arr_file['post_date'],$arr_file['update_date'],$arr_file['pageview'],$arr_file['post_by']);
		?>
		<script language="javascript">
			alert('ประกาศข่าวเรียบร้อย');
			window.location = '<?=base_url()?>admin/pr';
		</script>
       	<?php	
		echo $this->input->post('username');die();
	} 
	function addalumnus()
	{
		$data_stu = array(
                    'username' => $this->input->post('username'),
                    'regisdata_nameth' => $this->input->post('regisdata_nameth'),
                    //'nameeng' => $this->input->post('nameeng'),
                    'regisdata_degree' => $this->input->post('regisdata_degree'),
                    'regisdata_major' => $this->input->post('regisdata_major'),
					'regisdata_congrat' => $this->input->post('regisdata_congrat'),
                    'regisdata_schoolof' => "เทคโนโลยีสารสนเทศและการสื่อสาร"
		);	

		$data_work = array(
                    'regisdata_position' => $this->input->post('regisdata_position'),
                    'regisdata_nameplacework' => $this->input->post('regisdata_nameplacework'),
                    'regisdata_idplacework' => $this->input->post('regisdata_idplacework'),
                    'regisdata_mooplacework' => $this->input->post('regisdata_mooplacework'),
                    'regisdata_buildingplacework' => $this->input->post('regisdata_buildingplacework'),
                    'regisdata_floorplacework' => $this->input->post('regisdata_floorplacework'),

                    'regisdata_alleyplacework' => $this->input->post('regisdata_alleyplacework'),
                    'regisdata_streetplacework' => $this->input->post('regisdata_streetplacework'),
                    'regisdata_districplacework' => $this->input->post('regisdata_districplacework'),
                    'regisdata_ampurplacework' => $this->input->post('regisdata_ampurplacework'),
                    'regisdata_provinceplacework' => $this->input->post('regisdata_provinceplacework'),
                    'regisdata_postcodeplacework' => $this->input->post('regisdata_postcodeplacework'),
                    'regisdata_telplacework' => $this->input->post('regisdata_telplacework'),
                    'regisdata_faxplacework' => $this->input->post('regisdata_faxplacework'),
                    'regisdata_emailplacework' => $this->input->post('regisdata_emailplacework')
		);	
		
		$this -> model_alumnusdb -> addalumnus_stu($data_stu['username'],
			@$data_stu['regisdata_nameth'],
			//$data_stu['nameeng'],
			$data_stu['regisdata_degree'],
			$data_stu['regisdata_major'],
			$data_stu['regisdata_schoolof']
	
			,$data_work['regisdata_position']
			,$data_work['regisdata_nameplacework']
			,$data_work['regisdata_idplacework']
			,$data_work['regisdata_mooplacework']
			,$data_work['regisdata_buildingplacework']
			,$data_work['regisdata_floorplacework']
			,$data_work['regisdata_alleyplacework']
			,$data_work['regisdata_streetplacework']
			,$data_work['regisdata_districplacework']
			,$data_work['regisdata_ampurplacework']
			,$data_work['regisdata_provinceplacework']
			,$data_work['regisdata_postcodeplacework']
			,$data_work['regisdata_telplacework']
			,$data_work['regisdata_faxplacework']
			,$data_work['regisdata_emailplacework']
		);
		?>

		<script language="javascript">
			<?php echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />"; ?>
			alert('เพิ่มข้อมูลศิษย์เก่าเรียบร้อย');
		</script>
        <meta http-equiv="refresh" content="0;url=<?=base_url()?>alumnidb"/>
       	<?php	
		//echo $this->input->post('username');die();
	}
	
        
}
?>