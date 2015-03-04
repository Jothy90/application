<?php

class user extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	
	}

	function GetUserName($Email)
	{
		$query=$this->db->select('username')->from('user')->where('EmailId',$Email)->get();
		foreach($query->result() as $row){
   			$username =$row->username;
		}
		return $username;
	} 
	

function UserHome($year=null,$month=null,$day=null)
	{
	
		$EmailId= $this->session->userdata("SESSION_DATA");
		$username=$this->GetUserName($EmailId);

		if($day==null) {
			$day=date("d");
		}
		if($year==null ) {
			$year=date("Y");
		}

		if($month==null) {
			$month=date("m");
		}


		$this->load->model('Calendar_model_User');
		$data['calendar']=$this->Calendar_model_User->generate($year,$month);
		//$data['daydetail']=$this->Calendar_model->getdata($year,$month,$day);
		$datedisplay =array();
		$datedisplay['year']=$year;
		$datedisplay['month']=$month;
		$datedisplay['date']=$day;
		$data['currentdate']=$datedisplay;
		
		$data['username']=$username;
		
		$this->load->view('UserHome' , $data);
	}

function UserProfile()
	{
	
		$EmailId= $this->session->userdata("SESSION_DATA");
		$ausername=$this->GetUserName($EmailId);
		
		$data['username']=$ausername;
		
		$this->load->view('UserProfile', $data);
	}	
	
	
	function UserTimeline()
	{
	
		$EmailId= $this->session->userdata("SESSION_DATA");
		$ausername=$this->GetUserName($EmailId);
		
		$data['username']=$ausername;
		
		$this->load->view('UserTimeline' , $data);
	}
function Available()
	{
		$this->load->view('Available');
	}

function userAddevent()
	{
		$this->load->model('usermodel');
		
		$EmailId= $this->session->userdata("SESSION_DATA");
		$ausername=$this->GetUserName($EmailId);
		
		$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $segments = explode('/', $urlArray);
        $numSegments = count($segments);
			
		$date= $segments[5].'-'.$segments[6].'-'.$segments[7];
		
		for($time=5; $time <= 22; $time++) { 
			$adata[$time]=$this->usermodel->Availablespace($date,$time);  //Availablespace
		}

		$data['Available']=$adata;
		$data['username']=$ausername;
		$this->load->view('userAddevent',$data);
	}
	
	function Pickdate()
	{
		$date= $_POST['sdate'];
		if($this->validateDate($date)==1)
		{
				$segments = explode('-', $date);
				$numSegments = count($segments); 
			
				$year= $segments[0];
				$month=$segments[1];
				$day=$segments[2];
			redirect("user/userAddevent/$year/$month/$day");
		}
		else
		{
			$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $segments = explode('/', $urlArray);
            $numSegments = count($segments); 
            $date= $segments[7];
            $month = $segments[6]; 
            $year = $segments[5]; 
            redirect("user/userAddevent/$year/$month/$date");
		}
	}
	
	function validateDate($date)
	{
    	$d = DateTime::createFromFormat('Y-m-d', $date);
    	return $d && $d->format('Y-m-d') == $date;
	}

	
	function UserLogin()
	{
		
		$this->load->view('login');
	}	
	function register()
	{
		$this->load->view('userregistration');
	}
	
	function validateRegister()
	{
	
		$this->load->model('usermodel');
		if($query=$this->usermodel->create_user())
		{
			redirect('user/UserLogin');
		}

		else
		{
			redirect('login/index');
		}
	
	}
	function validatelogin()
	{	
		$this->load->model('usermodel');
		$query=$this->usermodel->loginvalidate();

		if($query)
		{
			/*$data =array(
				'EmailId' =>$this->input->post('emailid')

				 
				); */
			//'is_logged_in' => true;
			$EmailID =$this->input->post('emailid');
			$this->session->set_userdata("SESSION_DATA",$EmailID);
			$this->session->set_userdata("SESSION_DATA",$is_logged_in);
			redirect('user/UserHome');
		}

		else
		{
			$this->session->set_flashdata( 'message', 'Email ID /Password is wrong.' );
			redirect('user/UserLogin');
		}
	
	}
	
	
	function check_if_email_exists($requested_email)
	{

		$this->load->model('usermodel');

			$email_not_in_use = $this->usermodel -> check_if_email_exists($requested_email);

			if($email_not_in_use){

			return TRUE;

			}else
			{
			return false;
			}

	}
	
	function userBeforeLogin($year=null,$month=null,$day=null)
	{
		
		
		if($day==null) {
			$day=date("d");
		}
		if($year==null ) {
			$year=date("Y");
		}

		if($month==null) {
			$month=date("m");
		}


		$this->load->model('Calendar_model_User_BeforeLogin');
		$data['calendar']=$this->Calendar_model_User_BeforeLogin->generate($year,$month);
		//$data['daydetail']=$this->Calendar_model->getdata($year,$month,$day);
		$datedisplay =array();
		$datedisplay['year']=$year;
		$datedisplay['month']=$month;
		$datedisplay['date']=$day;
		$data['currentdate']=$datedisplay;
	
		$this->load->view('userBeforeLogin' , $data);
		
		
		
	}
	

	function getEmailId()
	{
	$this->load->model('usermodel');
	$this->load->library('session');
	
	$array = $this->session->all_userdata();
	
	//$EmailId = $this->session->user_data('EmailId');
	}
	
	
}
