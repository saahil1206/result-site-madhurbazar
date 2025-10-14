<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminAgent extends CI_Controller {

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
       if($access_level!=1 and $access_level!=2 and $access_level!=3  and $access_level!=4 ){
            redirect('Login/logOut');
    }
    } 

	public function index()
	{

		$this->load->Model('User_Model');
		$this->load->Model('Report_Model');
		$this->load->helper('result');
		$this->load->model('Account_Model');
        $access_level=$this->session->userdata('access_level');
        $userId=$this->session->userdata('userid');
        $searchbutton=$this->input->post('searchdata');
        if(isset($searchbutton)){
        	$fromdate=$this->input->post('fromdate');
        	$todate=$this->input->post('todate');
           
            
            
           	$data['player']=$this->Account_Model->getagent($_SESSION['userid']);
           	$data['fromdate']=$fromdate;
           	$data['todate']=$todate;
           
        }else{
         	$data['player']=$this->Account_Model->getagent($_SESSION['userid']);
		
        }
        
       // $data['b']=$this->Bazar_Model->getBazar($userId);
        //$data['bazar']=$this->Bazar_Model->getBazarById($gameid);
        // $this->load->model('Account_Model');
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
        $this->load->view('admin/header',$data);
        //$this->load->view('user/Nav',$data);
		$this->load->view('admin/admin_agent',$data);
		$this->load->view('admin/footer');

    }



}


?>