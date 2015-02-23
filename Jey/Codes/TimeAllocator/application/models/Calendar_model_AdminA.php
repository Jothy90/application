<?php 
class Calendar_model_AdminA extends CI_Model {

var $conf;
	function Calendar_model_AdminA(){

		parent::__construct();
		$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$segments = explode('/', $urlArray);
		$numSegments = count($segments); 

		$this->conf=array(
			'start_day' => 'monday',
			'show_next_prev'=>true,
			'next_prev_url' => base_url().'index.php/Admin/AdminAfterLogin'
			);
		$date = (!isset($_GET['month']) && !isset($_GET['year'])) ? time() : strtotime($_GET['month'] . '/1/' . $_GET['year']); 

        $day = date('d', $date);
        if($numSegments >6) 
        {
        	$month = $segments[6]; 
        	$year = $segments[5]; 
    	}
    	else
    	{
    		$month=date('m', $date);
    		$year=date('Y', $date);
    	}
		$this->conf['template'] = '

   {table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar">{/table_open}

   {heading_row_start}<tr>{/heading_row_start}

   {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>

   {/heading_previous_cell}
   {heading_title_cell}<th colspan="{colspan}" >{heading}</th>{/heading_title_cell}
   {heading_next_cell}<th ><a href="{next_url}">&gt;&gt;</a></th>

   {/heading_next_cell}

   {heading_row_end}</tr>{/heading_row_end}

   {week_row_start}<tr>{/week_row_start}
   {week_day_cell}<td >{week_day}</td>{/week_day_cell}
   {week_row_end}</tr>{/week_row_end}

   {cal_row_start}<tr class="days">{/cal_row_start}
   {cal_cell_start}<td class="day" >{/cal_cell_start}

   {cal_cell_content}
   		<div class="day_content"><a href= "http://localhost/TimeAllocator/index.php/Admin/AdminDetailReport/'.$year.'/'.$month.'/{day}"> {day} </div>
   		<div class="content"> {content} </div>
   {/cal_cell_content}
   {cal_cell_content_today}
   		<div class="day_today"><a href= "http://localhost/TimeAllocator/index.php/Admin/AdminDetailReport/'.$year.'/'.$month.'/{day}">{day} </div>
   		<div class="content"> {content} </div>
   {/cal_cell_content_today}

   {cal_cell_no_content}
   		<div class="day_num"> <a href= "http://localhost/TimeAllocator/index.php/Admin/AdminDetailReport/'.$year.'/'.$month.'/{day}"> {day} </div>
   {/cal_cell_no_content}
   {cal_cell_no_content_today}
   		<div class="day_today"><a href= "http://localhost/TimeAllocator/index.php/Admin/AdminDetailReport/'.$year.'/'.$month.'/{day}"> {day} </div>
   {/cal_cell_no_content_today}

   {cal_cell_blank}&nbsp;{/cal_cell_blank}

   {cal_cell_end}</td>{/cal_cell_end}
   {cal_row_end}</tr>{/cal_row_end}

   {table_close}</table>{/table_close}
';

	}

	/*
	function get_calendar_data($year, $month) {

		$query=$this->db->select('date,casenumber')->from('casedetails')->like('date',"$year-$month",'after')->get();

		$cal_data =array();

		foreach ($query->result() as $row) {
			 $cal_data[intval(substr($row->date,8,2))] ="";
		}

			return $cal_data;
     	
     }

*/


	function generate($year, $month){
		if (!$year) {
        $year = date('Y');
    	}
	    if (!$month) {
	        $month = date('m');
	    }
		
		$this->load->library('calendar',$this->conf);

		//$cal_data=$this->get_calendar_data($year,$month);

		return $this->calendar->generate($year, $month);
	}
/*
	function getdata($year,$month,$day){
		$query=$this->db->select('lawyername,casenumber')->from('casedetails')->where('date',"$year-$month-$day")->get();
		$cal_data1 =array();
		$count=1;

		foreach ($query->result() as $row) {
			$cal_data1[$count]['lawyername']=$row->lawyername;
			$cal_data1[$count]['casenumber']=$row->casenumber;
			$count++;
		}

		return $cal_data1;
	}

   



	function getEvents($time){
		
		$today = date("Y/n/j", time());
		$current_month = date("n", $time);
		$current_year = date("Y", $time);
		$current_month_text = date("F Y", $time);
		$total_days_of_current_month = date("t", $time);
		
		$events = array();
		
		$query = $this->db->query("
		SELECT DATE_FORMAT(date,'%d') AS day,
		casenumber,lawyername,clientname
		FROM casedetails 
		WHERE date BETWEEN  '$current_year/$current_month/01' 
						AND '$current_year/$current_month/$total_days_of_current_month'");
		
		foreach ($query->result() as $row_event)
		{					
			$events[intval($row_event->day)][] = $row_event;
		}
		$query->free_result();  
		return $events;						
	}
	*/
}

?>