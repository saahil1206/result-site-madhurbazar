<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class AdminPlReport extends CI_Controller {

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

		$this->load->Model('User_Model');
        $this->load->Model('Report_Model');
        $this->load->Model('Account_Model');
		$this->load->helper('result');
		 $userId=$this->session->userdata('userid');
        $access_level=$this->session->userdata('access_level');
       if($access_level==1){
		 $data['Acount']=$this->Account_Model->allUserbyAccount2();
		}elseif($access_level==4){
			$data['Acount']=$this->Account_Model->allUserbyAccount($userId);
		}elseif($access_level==3){
			$data['Acount']=$this->Account_Model->allUserbyAccount($userId);
		}
       
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
		$data['balance']=$this->User_Model->userAccount($userId);
		$this->load->model('Bazar_Model');
        //$data['b']=$this->Bazar_Model->getAllBazar($userId);
        $this->load->model('Bazar_Model');
        $data['b']=$this->Bazar_Model->getAllBazarData();
        
		$data['username']=$this->User_Model->userAccountinfo($userId);
        $this->load->view('admin/header',$data);
        //$this->load->view('user/Nav',$data);
		$this->load->view('admin/pl_report',$data);
		$this->load->view('admin/footer');

    }



}


?>