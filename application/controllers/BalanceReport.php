<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BalanceReport extends CI_Controller {

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
		if($access_level!=5  ){
            redirect('Login/logOut');
		}
    } 

	public function index()
	{

        $gameid=$this->uri->segment(3);
        $userId=$this->session->userdata('userid');
		$this->load->model('Bazar_Model');
        $data['b']=$this->Bazar_Model->getBazar($userId);
        $data['bazar']=$this->Bazar_Model->getBazarById($gameid);
		$this->load->model('User_Model');
		$this->load->model('Report_Model');
		 $searchbutton=$this->input->post('balancesearch');
        
     if(isset($searchbutton)){
        	$fromdate=$this->input->post('datefrom');
        	$todate=$this->input->post('dateto');
          $data['passbook']=$this->User_Model->getbalanceSearched($userId,$fromdate,$todate);
        }else{
		$data['passbook']=$this->Report_Model->getPassbook($userId);
	   }
		
		$data['balance']=$this->User_Model->userAccount($userId);
	    $data['username']=$this->User_Model->userAccountinfo($userId);
        $this->load->view('user/header',$data);
        //$this->load->view('user/Nav',$data);
		$this->load->view('user/balancereport',$data);
		$this->load->view('user/footer');

    }



}


?>