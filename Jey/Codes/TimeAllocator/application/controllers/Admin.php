<?php

class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	
	}

	
	function AdminBeforeLogin($year=null,$month=null,$day=null)
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


		$this->load->model('Calendar_model_AdminB');
		$data['calendar']=$this->Calendar_model_AdminB->generate($year,$month);
		//$data['daydetail']=$this->Calendar_model_AdminB->getdata($year,$month,$day);
		$datedisplay =array();
		$datedisplay['year']=$year;
		$datedisplay['month']=$month;
		$datedisplay['date']=$day;
		$data['currentdate']=$datedisplay;
		
		$this->load->view('AdminBeforeLogin' ,$data );
	}
	
	function validateDate($date)
	{
    	$d = DateTime::createFromFormat('Y-m-d', $date);
    	return $d && $d->format('Y-m-d') == $date;
	}
	
	function DatePicker()
	{
		$date= $_POST['sdate'];
		if($this->validateDate($date)==1)
		{
				$segments = explode('-', $date);
				$numSegments = count($segments); 
			
				$year= $segments[0];
				$month=$segments[1];
				$day=$segments[2];
			redirect("Admin/AdminDetailReport/$year/$month/$day");
		}
		else
		{
			$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $segments = explode('/', $urlArray);
            $numSegments = count($segments); 
            $date= $segments[7];
            $month = $segments[6]; 
            $year = $segments[5]; 
            redirect("Admin/AdminDetailReport/$year/$month/$date");
		}
	}
	
	function validatelogin()
	{	
		$this->load->model('adminmodel');
		$query=$this->adminmodel->loginvalidate();

		if($query)
		{
			$data =array(
				'EmailId' =>$this->input->post('email'),
				 
				);
			
			redirect('Admin/AdminAfterLogin');
		}

		else
		{
			$this->session->set_flashdata( 'message', 'Email ID /Password is wrong.' );
			redirect('Admin/AdminBeforeLogin');
		}
	
	}
	
	

function AdminAfterLogin($year=null,$month=null,$day=null)
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


		$this->load->model('Calendar_model_AdminA');
		$data['calendar']=$this->Calendar_model_AdminA->generate($year,$month);
		//$data['daydetail']=$this->Calendar_model_AdminA->getdata($year,$month,$day);
		$datedisplay =array();
		$datedisplay['year']=$year;
		$datedisplay['month']=$month;
		$datedisplay['date']=$day;
		$data['currentdate']=$datedisplay;
	
		$this->load->view('AdminAfterLogin',$data);
	}

function AdminDetailReport()
	{
		$this->load->model('adminmodel');
	
			$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			$segments = explode('/', $urlArray);
			$numSegments = count($segments); 
			if($numSegments >8)
			{
			$day= $segments[7];
            $month = $segments[6]; 
        	$year = $segments[5];
			$time = $segments[8]; 
			}
			else if ($numSegments ==8)
			{
			$day= $segments[7];
            $month = $segments[6]; 
        	$year = $segments[5];
			$time =5;
			}
			else
			{
				$day= date("d");;
				$month = date("m");; 
				$year = date("Y");;
				$time =5;
			}
			$date = $year.'-'.$month.'-'.$day;
			
			$data['Event'] = $this->adminmodel->generateReport($date,$time);
			
			$this->load->view('AdminDetailReport' , $data);
	}	
	
	
	function AdminLockScreen()
	{
		$this->load->view('AdminLockScreen');
	}	
		/*	function getData()
			{
			$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			$segments = explode('/', $urlArray);
			$numSegments = count($segments); 
			$day= $segments[7];
            $month = $segments[6]; 
        	$year = $segments[5];
			$time = $segments[8]; 
			
			$date = $segments[5].'-'.$segments[6].'-'.$segments[7];
			
			$data = $this->adminmodel->generateReport($date,$time);
			
			
			
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
	*/
	
}
