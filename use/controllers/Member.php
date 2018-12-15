<?
	class Member extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model("Member_m");
			$this->load->helper(array("url","date"));
			$this->load->library("pagination");
		}
		
		public function index()
		{
			$this->lists();
		}
		
		public function lists()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1=array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "";
			//$text1=urldecode($this->uri->segment(4));
			
			if($text1=="")
				$base_url = "/member/lists/page";
			else
				$base_url = "/member/lists/text1/$text1/page";
			$page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")), "/")+1;
			
			$config["per_page"] = 5;
			$config["total_rows"] = $this->Member_m->rowcount($text1);	// 전체 개수
			$config["uri_segment"] = $page_segment;		// 페이지가 있는 segment
			$config["base_url"] = $base_url;
			$this->pagination->initialize($config);		// 페이지네이션 초기화
			
			$data["page"] = $this->uri->segment($page_segment,0);
			$data["pagination"] = $this->pagination->create_links();
			
			$start = $data["page"];
			$limit = $config["per_page"];
			
			$data["text1"]=$text1;
			$data["list"]=$this->Member_m->getlist($text1,$start,$limit);
			
			$this->load->view("main_header");
			$this->load->view("member_list",$data);
			$this->load->view("main_footer");
		}
		
		public function view()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "";
			$text1=array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "";
			$page=array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : 0;
			
			$data["text1"]=$text1;
			$data["page"]=$page;
			$data["row"] = $this->Member_m->getrow($no);
			
			$this->load->view("main_header");
			$this->load->view("member_view",$data);
			$this->load->view("main_footer");
		}
		
		public function del()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "";
			$text1=array_key_exists("text1",$uri_array) ? "/text1/".urldecode($uri_array["text1"]) : "";
			$page=array_key_exists("page",$uri_array) ? "/page/".urldecode($uri_array["page"]) : 0;
			
			//$no=$this->uri->segment(4);
			$this->Member_m->deleterow($no);
			
			redirect("/member/lists/".$text1.$page);
		}
		
		public function add()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1=array_key_exists("text1",$uri_array) ? "/text1/".urldecode($uri_array["text1"]) : "";
			$page=array_key_exists("page",$uri_array) ? "/page/".urldecode($uri_array["page"]) : 0;
			
			$this->load->library("form_validation");
			
			$this->form_validation->set_rules("name","이름","required|max_length[20]");
			$this->form_validation->set_rules("uid","아이디","required|max_length[20]");
			$this->form_validation->set_rules("pwd","암호","required|max_length[20]");
			
			if ($this->form_validation->run()==FALSE)			//추가 버튼을 클릭한 경우 추가화면으로 이동
			{
				$this->load->view("main_header");
				$this->load->view("member_add");
				$this->load->view("main_footer");
			}
			else					//저장 버튼을 클릭한 경우
			{
				
				$tel1=$this->input->post("tel1",true);
				$tel2=$this->input->post("tel2",true);
				$tel3=$this->input->post("tel3",true);
				$tel=sprintf("%-3s%-4s%-4s",$tel1,$tel2,$tel3);
				
				$data=array(
					'name'	=>$this->input->post("name",true),
					'uid'	=>$this->input->post("uid",true),
					'pwd'	=>$this->input->post("pwd",true),
					'tel'	=>$tel,
					'rank'	=>$this->input->post("rank",true)
				);
				
				$result=$this->Member_m->insertrow($data);
				
				redirect("/member/lists/".$text1.$page);
			}
		}
		
		public function edit()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "";
			$text1=array_key_exists("text1",$uri_array) ? "/text1/".urldecode($uri_array["text1"]) : "";
			$page=array_key_exists("page",$uri_array) ? "/page/".urldecode($uri_array["page"]) : 0;
			
			$no=$this->uri->segment(4);
			
			$this->load->library("form_validation");
			
			$this->form_validation->set_rules("name","이름","required|max_length[20]");
			$this->form_validation->set_rules("uid","아이디","required|max_length[20]");
			$this->form_validation->set_rules("pwd","암호","required|max_length[20]");
			
			if($this->form_validation->run()==FALSE)
			{
				$this->load->view("main_header");
				$data["row"]=$this->Member_m->getrow($no);
				$this->load->view("member_edit",$data);
				$this->load->view("main_footer");
			}
			else					//저장 버튼을 클릭한 경우
			{
				
				$tel1=$this->input->post("tel1",true);
				$tel2=$this->input->post("tel2",true);
				$tel3=$this->input->post("tel3",true);
				$tel=sprintf("%-3s%-4s%-4s",$tel1,$tel2,$tel3);
				
				$data=array(
					'name'	=>$this->input->post("name",true),
					'uid'	=>$this->input->post("uid",true),
					'pwd'	=>$this->input->post("pwd",true),
					'tel'	=>$tel,
					'rank'	=>$this->input->post("rank",true)
				);
				
				$result=$this->Member_m->updaterow($data,$no);
				
				redirect("/member/lists/".$text1.$page);
			}
		}
	}
?>	