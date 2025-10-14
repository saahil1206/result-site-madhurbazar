<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    
       function __construct(){
		
        parent::__construct();
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->load->model('Login_Model');
		 $this->load->model('Account_Model');
	
		$this->load->helper('security');
		$this->load->helper('result');
		$this->load->library(array('session'));	
		$customer_logged_in=$this->session->userdata('customer_logged_in');
		
	
		$access_level=$this->session->userdata('access_level');
		
           if(!$customer_logged_in  ){
            redirect('Login/index');
		}
	
		if($access_level!=1 and $access_level!=2 and $access_level!=3  and $access_level!=4 and $access_level!=7){
            redirect('Login/logOut');
        }
		
	
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    
$access_level=$this->session->userdata('access_level');	    
if($access_level==4 ){
	    $searchbutton=$this->input->post('searchdata');
        if(isset($searchbutton)){
        	$fromdate=$this->input->post('fromdate');
        	$todate=$this->input->post('todate');
           
            
            
           	$data['player']=$this->Account_Model->getstockist2($_SESSION['userid']);
           	$data['fromdate']=$fromdate;
           	$data['todate']=$todate;
           
        }else{
         	$data['player']=$this->Account_Model->getstockist2($_SESSION['userid']);
		
        }
}else if($access_level==3){
    
      $searchbutton=$this->input->post('searchdata');
        if(isset($searchbutton)){
        	$fromdate=$this->input->post('fromdate');
        	$todate=$this->input->post('todate');
           
            
            
           	$data['player']=$this->Account_Model->getagent2($_SESSION['userid']);
           	$data['fromdate']=$fromdate;
           	$data['todate']=$todate;
           
        }else{
         	$data['player']=$this->Account_Model->getagent2($_SESSION['userid']);
		
        }
    
}
			$this->load->Model('User_Model');
		$this->load->Model('Report_Model');
		$this->load->helper('result');
        $access_level=$this->session->userdata('access_level');
        $userId=$this->session->userdata('userid');
        $searchbutton=$this->input->post('searchdata');
        if(isset($searchbutton)){
        	$fromdate=$this->input->post('fromdate');
        	$todate=$this->input->post('todate');
            $bazarname=$this->input->post('bazarname');
            $categoryname=$this->input->post('bazarcategory');
            $username=$this->input->post('username');
            
            
            $data['ticket']=$this->Report_Model->getTicketSearched2($fromdate,$todate,$bazarname,$categoryname,$username);
        }else{
         if($access_level==1){   

          $data['ticket']=$this->Report_Model->getAdminTicket();
        
         }else{
            $data['ticket']=$this->Report_Model->getAdminTicket2($userId);  
         }
		
        }
        $this->load->model('Account_Model');
       // $data['b']=$this->Bazar_Model->getBazar($userId);
        //$data['bazar']=$this->Bazar_Model->getBazarById($gameid);
         $this->load->model('Account_Model');
       // $data['b']=$this->Bazar_Model->getBazar($userId);
		//$data['bazar']=$this->Bazar_Model->getBazarById($gameid);
		if($access_level==1){
		 $data['Acount']=$this->Account_Model->allUserbyAccount2();
		}elseif($access_level==4){
			$data['Acount']=$this->Account_Model->allUserbyAccount($userId);
		}elseif($access_level==3){
			$data['Acount']=$this->Account_Model->allUserbyAccount($userId);
		}
		$data['balance']=$this->User_Model->userAccount($userId);
		$this->load->model('Bazar_Model');
			$data['b']=$this->Bazar_Model->getBazarData();
		$data['username']=$this->User_Model->userAccountinfo($userId);
		$userId=$this->session->userdata('userid');
		$this->load->model('Bazar_Model');
		$data['b']=$this->Bazar_Model->getAllBazarData();
		$this->load->model('User_Model');
		$data['balance']=$this->User_Model->userAccount($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/footer');
	}
		public function mastergame()
	{
	    
$access_level=$this->session->userdata('access_level');	    
if($access_level==4 ){
	    $searchbutton=$this->input->post('searchdata');
        if(isset($searchbutton)){
        	$fromdate=$this->input->post('fromdate');
        	$todate=$this->input->post('todate');
           
            
            
           	$data['player']=$this->Account_Model->getstockist2($_SESSION['userid']);
           	$data['fromdate']=$fromdate;
           	$data['todate']=$todate;
           
        }else{
         	$data['player']=$this->Account_Model->getstockist2($_SESSION['userid']);
		
        }
}else if($access_level==3){
    
      $searchbutton=$this->input->post('searchdata');
        if(isset($searchbutton)){
        	$fromdate=$this->input->post('fromdate');
        	$todate=$this->input->post('todate');
           
            
            
           	$data['player']=$this->Account_Model->getagent2($_SESSION['userid']);
           	$data['fromdate']=$fromdate;
           	$data['todate']=$todate;
           
        }else{
         	$data['player']=$this->Account_Model->getagent2($_SESSION['userid']);
		
        }
    
}
			$this->load->Model('User_Model');
		$this->load->Model('Report_Model');
		$this->load->helper('result');
        $access_level=$this->session->userdata('access_level');
        $userId=$this->session->userdata('userid');
        $searchbutton=$this->input->post('searchdata');
        if(isset($searchbutton)){
        	$fromdate=$this->input->post('fromdate');
        	$todate=$this->input->post('todate');
            $bazarname=$this->input->post('bazarname');
            $categoryname=$this->input->post('bazarcategory');
            $username=$this->input->post('username');
            
            
            $data['ticket']=$this->Report_Model->getTicketSearched2($fromdate,$todate,$bazarname,$categoryname,$username);
        }else{
         if($access_level==1){   

          $data['ticket']=$this->Report_Model->getAdminTicket();
        
         }else{
            $data['ticket']=$this->Report_Model->getAdminTicket2($userId);  
         }
		
        }
        $this->load->model('Account_Model');
       // $data['b']=$this->Bazar_Model->getBazar($userId);
        //$data['bazar']=$this->Bazar_Model->getBazarById($gameid);
         $this->load->model('Account_Model');
       // $data['b']=$this->Bazar_Model->getBazar($userId);
		//$data['bazar']=$this->Bazar_Model->getBazarById($gameid);
		if($access_level==1){
		 $data['Acount']=$this->Account_Model->allUserbyAccount2();
		}elseif($access_level==4){
			$data['Acount']=$this->Account_Model->allUserbyAccount($userId);
		}elseif($access_level==3){
			$data['Acount']=$this->Account_Model->allUserbyAccount($userId);
		}
		$data['balance']=$this->User_Model->userAccount($userId);
		$this->load->model('Bazar_Model');
			$data['b']=$this->Bazar_Model->getBazarData();
		$data['username']=$this->User_Model->userAccountinfo($userId);
		$userId=$this->session->userdata('userid');
		$this->load->model('Bazar_Model');
		$data['b']=$this->Bazar_Model->getAllBazarData();
		$this->load->model('User_Model');
		$data['balance']=$this->User_Model->userAccount($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/mastergame',$data);
		$this->load->view('admin/footer');
	}
	public function profile()
	{
		$userId=$this->session->userdata('userid');
		$this->load->model('Bazar_Model');
		$data['b']=$this->Bazar_Model->getAllBazarData();
		$this->load->model('User_Model');
		$data['balance']=$this->User_Model->userAccount($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
			$data['fullname']=$this->User_Model->fullname($userId);
			$data['phonenumber']=$this->User_Model->phone($userId);
			$data['city']=$this->User_Model->city($userId);
	
        
          
		$this->load->view('admin/header',$data);
		$this->load->view('admin/profile',$data);
		$this->load->view('admin/footer');
	}


	public function updateProfile(){

      $this->load->helper('form');
      $this->load->helper('security');
      $this->load->library('form_validation');
      $this->form_validation->set_rules('oldpin', 'old pin', 'trim|required|exact_length[4]');
      $this->form_validation->set_rules('newpin', 'new pin', 'trim|required|exact_length[4]');
      $this->form_validation->set_rules('repin', 'repin', 'trim|required|matches[newpin]');
      
 
            $old = $this->input->post('oldpin');
            $new = $this->input->post('newpin');
            $user_id = $this->session->userdata('userid');
        $result=$this->Login_Model->userAuthentication($this->session->userdata('username'),$old);
        if($result === true){
            
             $data=array('password'=>md5($new));
            $this->db->where('id',$user_id);

            $result= $this->db->update('game_user_personal',$data);
          if($result){
             $data['success_sms'] ="Sucessfully Updated ";
            }
          }else{
            $data['error_sms'] ="Old Password Does not Match";
          }
       
        $userId=$this->session->userdata('userid');
		$this->load->model('Bazar_Model');
		$data['b']=$this->Bazar_Model->getAllBazarData();
		$this->load->model('User_Model');
		$data['balance']=$this->User_Model->userAccount($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/profile',$data);
		$this->load->view('admin/footer');

}

}