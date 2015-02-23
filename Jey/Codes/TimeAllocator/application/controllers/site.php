<?php

class site extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	
	}

	


	function home($year=null,$month=null,$day=null) {
		
		if($day==null) {
			$day=date("d");
		}
		if($year==null ) {
			$year=date("Y");
		}

		if($month==null) {
			$month=date("m");
		}


		$this->load->model('Calendar_model');
		$data['calendar']=$this->Calendar_model->generate($year,$month);
		$data['daydetail']=$this->Calendar_model->getdata($year,$month,$day);
		$datedisplay =array();
		$datedisplay['year']=$year;
		$datedisplay['month']=$month;
		$datedisplay['date']=$day;
		$data['currentdate']=$datedisplay;

		
		//var_dump($data);
		//die();
	  	 $this->load->view('Home',$data);
	   }

	
}
