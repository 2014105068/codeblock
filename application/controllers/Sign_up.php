<?
	class Sign_up extends CI_Controller {
		
		function __construct()
		{
		  parent::__construct();
		  $this->load->database();
		  $this->load->helper(array("url", "date"));
		  $this->load->model("Sign");
		  //$this->load->library('pagination');
		}
		
		public function index()
		{
			$this->join();
		}
		
		public function join()
		{
			$this->load->view("registration");
		}
		
		/*public function email_check()
		{
			$email=$_POST['email'];
			
			$check="SELECT * from member WHERE email='$email'";
			$result=$mysqli->db->query($check);
			if($result->num_rows==1)
			{
				echo "중복된 이메일주소";
				echo "<a href=main>시발</a>";
				//return 1;
				exit();
			}
			else
			{
				echo "중복된 이메일주소";
				echo "<a href=sign_up>시발</a>";
				//return 0;
				exit();
			}
		}*/
		
		public function reg()
		{
			$nickname=$_POST['nickname'];
			$pwd=$_POST['pwd'];
			$pwc=$_POST['pwc'];
			$email=$_POST['email'];
			
			if($pwd!=$pwc) //비밀번호 확인이 일치하지 않을경우
			{
				echo "비밀번호가 일치하지 않습니다.";
				echo "<a href=sign_up>back page</a>";
				exit();
			}
			if($nickname==NULL || $pwd==NULL || $email==NULL)
			{
				echo "빈 칸을 모두 채워주세요.";
				echo "<a href=sign_up>back page</a>";
				exit();
			}
				$data=array(
						'nickname'	=>$this->input->post("nickname",true),
						'email'	=>$this->input->post("email",true),
						'pwd'	=>$this->input->post("pwd",true)
					);

			$result=$this->Sign->addmember($data);
			print "<script type=\"text/javascript\">alert('회원가입이 완료되었습니다.');</script>"; 
			redirect("/main");
		}
		
		public function email_check()
		{
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
			{
				echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> 이메일이 아닙니다</label>';
			}
			
			else
			{
				if($this->Sign->checkM($_POST['email']))
				{
					echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>이미 등록된 이메일입니다.</label>';
				}
				else
				{
					echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span>사용 가능한 이메일입니다.</label>';
				}
			}
		}
	}
?>