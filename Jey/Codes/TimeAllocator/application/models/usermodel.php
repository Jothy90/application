<?php 
class usermodel extends CI_Model {


	function usermodel(){

		parent::__construct();
		

	}

	
	function loginvalidate() {

		$this->db->where('EmailId', $this->input->post('emailid'));
		$this->db->where('Password', md5($this->input->post('password')));
		$query=$this->db->get('user');
		if($query->num_rows >0)
		{
			return true;
		}
     }

	
function check_if_email_exists($email)
{
$this->db->where('EmailId', $email);
$result = $this->db->get('user');
if($result->num_rows()>0){
return false; //username taken
}
else
{
return true;
}
}
	 function create_user()
	 {
		//this->load->library('form_validation');
		
		//$this->form_validation->set_rules('email', 'email', 'call_back_check_if_email_exists');
		
		$new_user_insert_data=array (
			'Full_Name' =>$this->input->post('name'),
			'Address' =>$this->input->post('address'),
			'City' =>$this->input->post('city'),
			'Sex' =>$this->input->post('sex'),
			'EmailId' =>$this->input->post('email'),
			'username' =>$this->input->post('username'),
			'Password' =>md5($this->input->post('password'))
			
		);
		$this->db->set('Registered_Date', 'NOW()', FALSE);
		$insert=$this->db->insert('user',$new_user_insert_data);
		return $insert;
	 
	 }
	 
	 function Availablespace($date,$time)
	{
		$query=$this->db->select('No_of_places')->from('event')->where('date',$date)->where('time',$time)->get();

		$checkspace=$query->result();
		$Bookedspace=0;    
   		foreach($checkspace as $row){
   			$Bookedspace +=$row->No_of_places;
		}

		if($Bookedspace>5)
		{
			return 0;
		}
		else
		{
			return 6- $Bookedspace;
		}
	}

	 
	/* function getAvailable($date,$time)
	{
		$query=$this->db->select_sum('No_of_places')->from('event')->where('date',$date)->where('time',$time)->get();

		$checkspace=$query->result();
		$Bookedspace=0;    
   		foreach($checkspace as $row){
   			$Bookedspace +=$row->No_of_places;
		}
		
		if($Bookedspace >5)
		{
			return 0;
		}
		else
		{
			return 6-$Bookedspace;
		}

		
		
	}*/

/*	 function getAvailable($date,$time)
	{
		$query=$this->db->select_sum('No_of_places')->from('event')->where('date',$date)->where('time',$time)->get();
		$Booked=$query->result();
		
		if((6 - $Booked) < 1)
		{
		return 0;
		}
		else
		{
		return (6 - $Booked);
		}
		
	}*/



	
}

?>