<?
	class Main extends CI_Controller {
		
		public function index()
		{
			$this->load->view("main");
		}
		
		public function login_pop()
		{
			$this->load->view("main_pop");
		}
	}
?>