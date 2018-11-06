<?
	class C extends CI_Controller {
		
		function __construct()
		{
		  parent::__construct();
		  //$this->load->database();
		  //$this->load->helper(array("url", "date"));
		  //$this->load->library('pigination');
		}
		
		public function index()
		{
			$this->C_code();
		}
		
		public function C_code()
		{
			$this->load->view("coding_c");
		}
	}
?>