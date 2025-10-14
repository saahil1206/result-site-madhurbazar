<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BatController extends CI_Controller {
    
    
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
    if($access_level!=1 and $access_level!=2 and $access_level!=4 and $access_level!=3 ){
            redirect('Login/logOut');
    }
		
	
    }
    public function index(){
        $search=$this->input->post('search');
        if($search){
             $accountNumber=$this->input->post('username');
            $date=$this->input->post('date');
            $bazar=$this->input->post('bazar');
            $category=$this->input->post('category');
            $gamename=$this->input->post('gamename');
            $data['accountNumber']=$accountNumber;
            $data['gamename']=$gamename;
            $data['date']=$date;
            $data['category']=$category;
            $data['bazar']=$bazar;


        }
        $access_level=$this->session->userdata('access_level');
        $userId=$this->session->userdata('userid');
		//$this->load->model('Bazar_Model');
		$data['b']=$this->Bazar_Model->getBazarData();
		$this->load->model('User_Model');
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
		$data['username']=$this->User_Model->userAccountinfo($userId);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/bat_records',$data);
		$this->load->view('admin/footer');

    }
}