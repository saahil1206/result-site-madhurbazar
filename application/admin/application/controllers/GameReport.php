<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GameReport extends CI_Controller {

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

		$this->load->Model('User_Model');
		$this->load->Model('Report_Model');
		$this->load->helper('result');
       
        $userId=$this->session->userdata('userid');
        $searchbutton=$this->input->post('searchdata');
        if(isset($searchbutton)){
        	$fromdate=$this->input->post('fromdate');
        	$todate=$this->input->post('todate');

        	$bazarname=$this->input->post('bazarname');
            $categoryname=$this->input->post('bazarcategory');
            $data['ticket']=$this->Report_Model->getTicketSearched($fromdate,$todate,$bazarname,$categoryname,$userId);
        }else{
		$data['ticket']=$this->Report_Model->getTicket($userId);
		
		}
		$data['balance']=$this->User_Model->userAccount($userId);
		$this->load->model('Bazar_Model');
		$data['b']=$this->Bazar_Model->getAllBazar($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
        $this->load->view('user/header',$data);
        //$this->load->view('user/Nav',$data);
		$this->load->view('user/gamereport',$data);
		$this->load->view('user/footer');

    }

    public function cancleTicket(){
    	date_default_timezone_set('Asia/Kolkata');
		$date3=date("Y-m-d h:i:s A", time());
		$date4=date("Y-m-d", time());
		
		
    	$id=$this->input->post('id_edit');
    	$bazar=$this->input->post('bazar');
    	$bazar_cat=$this->input->post('bazar_cat');
    	
    		$this->load->model('Transaction_Model');
    		
    		$this->db->select('*');
    		$this->db->where('id',$id);
    		
    		 $query = $this->db->get('game_ticket');
             $row2= $query->row();
    		$customerid=$row2->customer_id;
    		$ticketbalance=$row2->purchase_amount;
    		$ticketId=$row2->ticket_id;
    			$this->db->select('*');
    		$this->db->where('game_user_id',$customerid);
    		
    		 $query = $this->db->get('game_user_account');
             $row3= $query->row();
    		$customerbalance=$row3->creditrefrence;
    		$closingBalance=$ticketbalance+$customerbalance;
    		
    			$passbookData = array(
					  'game_user_id'=>$customerid,
					  'tran_id'=>'',
					  'datafrom'=>$customerid,
					  'datato'=>'',
					  'debit'=>0,
					  'credit'=>'$ticketbalance',
					  'closing'=>$closingBalance,
					  'description'=>'Ticket purchase of Aakda'.$ticketId,
					  'date'=>$date4,
					  'createdby'=>(string)$_SESSION['username'],

				);
			
    	$this->Transaction_Model->updateUserBalance($customerid,$closingBalance);	
    	
  
    $this->load->model('Bazar_Model');
    if($this->Bazar_Model->checkBazarTime($bazar,$bazar_cat)){
    $this->db->set('ticket_status',2);
    $this->db->where('id',$id);
    $this->db->update('game_ticket');
    		}
    redirect('GameReport/index');
    }



}


?>