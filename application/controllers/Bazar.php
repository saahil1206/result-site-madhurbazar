<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bazar extends CI_Controller {
    
    
       function __construct(){
		
        parent::__construct();
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->load->model('Login_Model');
		$this->load->model('Bazar_Model');
		$this->load->helper('security');
		$this->load->helper('result');
		$this->load->library(array('session'));	
		$customer_logged_in=$this->session->userdata('customer_logged_in');
		
	
		$access_level=$this->session->userdata('access_level');
		
	if(!$customer_logged_in  ){
            redirect('Login/index');
    }
    if($access_level!=1 ){
            redirect('Login/logOut');
    }
		
	
    }
    public function index(){
     
       $userId=$this->session->userdata('userid');
		//$this->load->model('Bazar_Model');
		$data['b']=$this->Bazar_Model->getBazarData();
		$this->load->model('User_Model');
		$data['balance']=$this->User_Model->userAccount($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_bazar',$data);
		$this->load->view('admin/footer');
     
    }  
    
    	public function addbazar()
	{
		
		$createBazar=$this->input->post('createBazar');
		if(isset($createBazar)){
		$this->form_validation->set_rules('gameName', 'Bazar Name', 'trim|required');
        $this->form_validation->set_rules('openTime', 'Open Time', 'trim|required');
        $this->form_validation->set_rules('closeTime', 'Close Time', 'trim|required');
        $this->form_validation->set_rules('daysofplay', 'days play', 'trim|required');
      $this->form_validation->set_rules('openblocktime', 'Open block time', 'trim|required');
		$this->form_validation->set_rules('closeblocktime', 'Close block time', 'trim|required');
       
        $this->form_validation->set_rules('bazarStatus', 'bazarStatus', 'trim|required'); 
		if ($this->form_validation->run() == TRUE) {
	            $gameName=$this->input->post('gameName');

                $openTime=$this->input->post('openTime');
                $closeTime=$this->input->post('closeTime');
                $bazarStatus=$this->input->post('bazarStatus');
                $daysofplay=$this->input->post('daysofplay');
                $openblocktime=$this->input->post('openblocktime');
				$closeblocktime=$this->input->post('closeblocktime');
				
				$Sunday=$this->input->post('Sunday');
				$Monday=$this->input->post('Monday');
				$Tuesday=$this->input->post('Tuesday');
				$Wednesday=$this->input->post('Wednesday');
				$Thursday=$this->input->post('Thursday');
				$Friday=$this->input->post('Friday');
				$Saturday=$this->input->post('Saturday');
				
				 
				$bazarData=array(
					'bazar_name'=>$gameName,
					'open_time'=>$openTime,
					'close_time'=>$closeTime,
					'total_days'=>$daysofplay,
					'open_block_time'=>$openblocktime,
					'close_block_time'=>$closeblocktime,
					'status'=>$bazarStatus,
					
					'createdby'=>(string)$_SESSION['username'],
					


				);
				$gameid=$this->Bazar_Model->addBazar($bazarData);
				$daysData=array(
				    'GAME_Bazar_id'=>$gameid,
					'monday'=>$Monday,
					'tuesday'=>$Tuesday,
					'wednesday'=>$Wednesday,
					'thursday'=>$Thursday,
					'friday'=>$Friday,
					'saturday'=>$Saturday,
					'sunday'=>$Sunday,
				);
				//print_r($daysData);
				//exit;
				$gamestatus=$this->Bazar_Model->addBazarDays($daysData);
				if($gamestatus){
				$data['success_message']='bazar added successfully';
				redirect('Bazar/index');
				}else{
				$data['danger_message']='bazar not added successfully';	
				}
		}
		}
        $userId=$this->session->userdata('userid');
		$this->load->model('Bazar_Model');
		$data['b']=$this->Bazar_Model->getBazarData();
		$this->load->model('User_Model');
		$data['balance']=$this->User_Model->userAccount($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/add_bazar',$data);
		$this->load->view('admin/footer');
	}
	
	public function deleteBazar(){
		        $gameid=$this->uri->segment(3);
	            $gamestatus=$this->Bazar_Model->deleteBazar($gameid);
				if($gamestatus){
				$data['success_message']='bazar deleted successfully';
				redirect('Bazar/index');
				}else{
				$data['danger_message']='bazar deleted successfully';	
				redirect('Bazar/index');
				}	
	}
	public function editbazar()
	{
		$gameid=$this->uri->segment(3);
		$createBazar=$this->input->post('editBazar');
		if(isset($createBazar)){
		$this->form_validation->set_rules('gameName', 'gameName', 'trim|required');
        $this->form_validation->set_rules('openTime', 'openTime', 'trim|required');
        $this->form_validation->set_rules('closeTime', 'closeTime', 'trim|required');
        $this->form_validation->set_rules('daysofplay', 'daysofplay', 'trim|required');
        $this->form_validation->set_rules('openblocktime', 'closeblocktime', 'trim|required');
		$this->form_validation->set_rules('closeblocktime', 'closeblocktime', 'trim|required');
        
        $this->form_validation->set_rules('bazarStatus', 'bazarStatus', 'trim|required'); 
		if ($this->form_validation->run() == TRUE) {
	            $gameName=$this->input->post('gameName');

                $openTime=$this->input->post('openTime');
                $closeTime=$this->input->post('closeTime');
                $bazarStatus=$this->input->post('bazarStatus');
                $daysofplay=$this->input->post('daysofplay');
                 $openblocktime=$this->input->post('openblocktime');
				$closeblocktime=$this->input->post('closeblocktime');
				
				$Sunday=$this->input->post('Sunday');
				$Monday=$this->input->post('Monday');
				$Tuesday=$this->input->post('Tuesday');
				$Wednesday=$this->input->post('Wednesday');
				$Thursday=$this->input->post('Thursday');
				$Friday=$this->input->post('Friday');
				$Saturday=$this->input->post('Saturday');
				
				 
				$bazarData=array(
					'bazar_name'=>$gameName,
					'open_time'=>$openTime,
					'close_time'=>$closeTime,
					'total_days'=>$daysofplay,
					'open_block_time'=>$openblocktime,
					'close_block_time'=>$closeblocktime,
					'status'=>$bazarStatus,
					
					'createdby'=>(string)$_SESSION['username'],
					


				);
				//echo $gameid;
				//exit;
				$this->Bazar_Model->updateBazar($gameid,$bazarData);
			
				$daysData=array(
				    'GAME_Bazar_id'=>$gameid,
					'monday'=>$Monday,
					'tuesday'=>$Tuesday,
					'wednesday'=>$Wednesday,
					'thursday'=>$Thursday,
					'friday'=>$Friday,
					'saturday'=>$Saturday,
					'sunday'=>$Sunday,
				);
				
			//	print_r($daysData);
			//	exit;
				$gamestatus=$this->Bazar_Model->updateBazardays($gameid,$daysData);
				if($gamestatus){
				$data['success_message']='bazar added successfully';
				redirect('Bazar/index');
				}else{
				$data['danger_message']='bazar not added successfully';	
				}
		}
		}
        $userId=$this->session->userdata('userid');
		$this->load->model('Bazar_Model');
		$data['bazar']=$this->Bazar_Model->getBazarById($gameid);
		$data['bazardays']=$this->Bazar_Model->getBazarDaysById($gameid);
		$this->load->model('User_Model');
		$data['balance']=$this->User_Model->userAccount($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_bazar',$data);
		$this->load->view('admin/footer');
	}
}