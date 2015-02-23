<?php 
class event_model extends CI_Model {


	function event_model(){

		parent::__construct();
		

	}
	function checkspace($data,$date,$time)
	{
		$query=$this->db->select('No_of_places')->from('event')->where('date',$date)->where('time',$time)->get();

		$checkspace=$query->result();
		$Bookedspace=0;    
   		foreach($checkspace as $row){
   			$Bookedspace +=$row->No_of_places;
		}

		if($Bookedspace + $data <= 6)
		{
			return true;
		}
	}

	function GetUserName($Email)
	{
		$query=$this->db->select('username')->from('user')->where('EmailId',$Email)->get();
		foreach($query->result() as $row){
   			$username =$row->username;
		}
		return $username;
	} 
	
	
	
	function Book($data,$date,$time)
	{
		$EmailId= $this->session->userdata("SESSION_DATA");
		$username=$this->GetUserName($EmailId);

		$new_spce_insert_data=array (
			'username' =>$username,
			'date' =>$date,
			'Time' =>$time,
			 'EmailId' =>$EmailId,
			 'No_of_places' =>$data
		);
		$this->db->set('Booked_At', 'NOW()', FALSE);
		$insert=$this->db->insert('event',$new_spce_insert_data);
		return $insert;
	}

	

	
}

?>