<?php

class event extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	
	}

function book()
		{

			$this->load->model('event_model');
			if( $_GET["tag"] )
	 		{

				$segments = explode('/', $_GET["tag"]);
				$numSegments = count($segments); 
			
				$date= $segments[0].'-'.$segments[1].'-'.$segments[2];
				$time=$segments[3];
				if(!is_numeric($_POST['No_of_space']) or $_POST['No_of_space'] <1 or $_POST['No_of_space'] >6) 
				{
					$this->session->set_flashdata( 'message', 'Invalid Space Request' );
					redirect("user/Available/$segments[0]/$segments[1]/$segments[2]/$segments[3]");
				}
				else
				{
					if($this->event_model->checkspace($_POST['No_of_space'],$date,$time))
					{
						if($this->event_model->Book($_POST['No_of_space'],$date,$time))
						{
						  
						  $this->session->set_flashdata( 'message', 'Successfully added' );
						  
						   redirect("user/Available/$segments[0]/$segments[1]/$segments[2]/$segments[3]");
						}
						
						else
						{
							
							$this->session->set_flashdata( 'message', 'Error in Adding Event' );
						  	redirect("user/Available/$segments[0]/$segments[1]/$segments[2]/$segments[3]");
						}
					}
					
					else
					{
						$this->session->set_flashdata( 'message', 'No spce is Available to add this event' );
						redirect("user/Available/$segments[0]/$segments[1]/$segments[2]/$segments[3]");
					}
				}
			}
		
		}

}
