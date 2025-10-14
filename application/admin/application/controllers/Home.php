<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Home extends CI_Controller {
      
    
       function __construct(){
		
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        error_reporting(0);
        $this->load->library('form_validation');
        $this->load->model('Login_Model');
		
		$this->load->helper('security');
		$this->load->helper('result');
		$this->load->helper('url');
		$this->load->library(array('session'));	
		$customer_logged_in=$this->session->userdata('customer_logged_in');
		
	}
		
    public function index(){
     
      
		$this->load->model("Model_home");
		$this->load->model("Result_Model");
	$data["fetch_data"] = $this->Model_home->fetch_data();
		
	$data['gussing']=$this->Model_home->getluckynumber();
   
		$this->load->view('home/header',$data);	
		$this->load->view('home/index',$data);
		$this->load->view('home/footer',$data);
	
     
    }  
    
    
    
    public function jodi_chart(){
         $data['id']=$this->uri->segment('3'); 
         $data['bazar']=$this->uri->segment('4'); 
           
        	$this->load->model("Model_home");
		$data["fetch_data"] = $this->Model_home->fetch_data();
			$this->load->view('home/header',$data);	
		$this->load->view('user/jodi_chart',$data);
		$this->load->view('home/footer',$data);
		
        
        
    }
   public function panel_chart(){
           $data['id']=$this->uri->segment('3'); 
           $data['bazar']=$this->uri->segment('4'); 
           
        	$this->load->model("Model_home");
		$data["fetch_data"] = $this->Model_home->fetch_data();
			$this->load->view('home/header',$data);	
		$this->load->view('user/panel_chart',$data);
			$this->load->view('home/footer',$data);
		
        
        
    }
}