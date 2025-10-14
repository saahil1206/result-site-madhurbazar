<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminBalanceReport extends CI_Controller {

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
    function __construct(){
		
        parent::__construct();
        $this->load->helper(array('form', 'url','result'));

        $this->load->library('form_validation');
        $this->load->model('Login_Model');
        $this->load->helper('security');
		$this->load->library(array('session'));	
		$customer_logged_in=$this->session->userdata('customer_logged_in');
       	$access_level=$this->session->userdata('access_level');
           if(!$customer_logged_in  ){
            redirect('Login/index');
		}
		if($access_level!=1 and $access_level!=2 and $access_level!=3  and $access_level!=4){
            redirect('Login/logOut');
    }
    } 

	public function index()
	{
		$access_level=$this->session->userdata('access_level');
        //$gameid=$this->uri->segment(3);
        $userId=$this->session->userdata('userid');
		$this->load->model('Bazar_Model');
		$this->load->model('Account_Model');
       // $data['b']=$this->Bazar_Model->getBazar($userId);
		//$data['bazar']=$this->Bazar_Model->getBazarById($gameid);
		if($access_level==1){
		 $data['Acount']=$this->Account_Model->allUserbyAccount2();
		}elseif($access_level==4){
			$data['Acount']=$this->Account_Model->allUserbyAccount($userId);
		}elseif($access_level==3){
			$data['Acount']=$this->Account_Model->allUserbyAccount($userId);
		}elseif($access_level==2){
			$data['Acount']=$this->Account_Model->allUserbyAccount($userId);
		}
		$this->load->model('User_Model');
		$this->load->model('Report_Model');
		$this->load->model('Login_Model');
		 $searchbutton=$this->input->post('balancesearch');
        
     if(isset($searchbutton)){
        	$fromdate=$this->input->post('datefrom');
			$todate=$this->input->post('dateto');
			$username=$this->input->post('username');

		if($username=='selectall'){

		$data['passbook']=$this->Report_Model->getAdminPassbooksearchall($username,$fromdate,$todate);
		}else{	
		$accessid=$this->Login_Model->checkAccessLevel($username);
	      if($accessid==5){		
		  $data['passbook']=$this->Report_Model->getAdminPassbooksearch2($username,$fromdate,$todate);
		  
		  }else if($accessid==4){
			$data['passbook']=$this->Report_Model->getAdminPassbooksearch2($username,$fromdate,$todate);
		 
		  }else if($accessid==3){
            $data['passbook']=$this->Report_Model->getAdminPassbooksearch2($username,$fromdate,$todate);
		 
		  }else if($accessid==1){
		     $data['passbook']=$this->Report_Model->getAdminPassbooksearch2($username,$fromdate,$todate); 
		  }

		} 
        }else{
			
			if($access_level==1){
		    $data['passbook']=$this->Report_Model->getAdminPassbook2($userId);
			}else if($access_level==4){
				$data['passbook']=$this->Report_Model->getAdminPassbook2($userId);
			}else if($access_level==3){
				$data['passbook']=$this->Report_Model->getAdminPassbook2($userId);
			}
	   }
		
		$data['balance']=$this->User_Model->userAccount($userId);
	    $data['username']=$this->User_Model->userAccountinfo($userId);
        $this->load->view('admin/header',$data);
        //$this->load->view('user/Nav',$data);
		$this->load->view('admin/bal_report',$data);
		$this->load->view('admin/footer');

    }



}


?>