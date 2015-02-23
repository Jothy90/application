<?php 
class adminmodel extends CI_Model {


	function adminmodel(){

		parent::__construct();
		

	}

	
	function loginvalidate() {

		$this->db->where('EmailId', $this->input->post('email'));
		$this->db->where('Password', md5($this->input->post('password')));
		$query=$this->db->get('admin_user');
		if($query->num_rows >0)
		{
			return true;
		}
     }
	function generateReport($date,$time)
	{
		$query=$this->db->select('*')->from('event')->where('date',$date)->where('time',$time)->get();

		$reportData=$query->result();
		return $reportData;
	}
/*	function getReportData($date,$time)
	{
		$query=$this->db->select('username', 'EmailId' , 'No_of_places')->from('event')->where('date',$date)->where('time',$time)->get();

		$checkspace=$query->result();
		
	}
*/


	
}

?>