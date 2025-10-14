<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Aakda extends CI_Controller {

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
        $this->load->helper(array('form', 'url'));

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
		 
		date_default_timezone_set('Asia/Kolkata');
		$date3=date("Y-m-d h:i:s A", time());
		$date4=date("Y-m-d", time());
		$currnttime=date('H:i:s',time());
		 $this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('security');
		$this->load->model('Transaction_Model');
		$this->load->model('Bazar_Model');
		$submit=$this->input->post('submit');
		if(isset($submit))
		{
		 	$this->form_validation->set_rules('singleAmt','AMOUNT', 'required');
			 if ($this->form_validation->run() != false)
			{
				$this->load->model('User_Model');
		        $customerBalance=$this->User_Model->userAccount($this->input->post('client'));

		        $customerExposerBalance=$this->User_Model->userAccountExposer($this->input->post('client'));
		        
				$ticketId=$this->Transaction_Model->TicketNumber();

				$totalAmount=$this->input->post('single0')+$this->input->post('single1')+$this->input->post('single2')+
				$this->input->post('single3')+$this->input->post('single4')+$this->input->post('single5')+$this->input->post('single6')
				+$this->input->post('single7')+$this->input->post('single8')+$this->input->post('single9');
				$closingBalance=$customerBalance-$totalAmount;
				
				$custid=$this->input->post('client');
				//echo $custid;
				$this->load->model('Account_Model');
                $datapercent=$this->Account_Model->getuserpercentage($custid);
               
				$AakdaData=array(
				 'customer_id'=>$this->input->post('client'),
				 'tran_id'=>$ticketId,
				 'bazar'=>$this->input->post('bazar'),
				 'bazar_type'=>(string)$this->input->post('bazar_cat'),
				 'single0'=>$this->input->post('single9'),
				 'single1'=>$this->input->post('single0'),
				 'single2'=>$this->input->post('single1'),
				 'single3'=>$this->input->post('single2'),
				 'single4'=>$this->input->post('single3'),
				 'single5'=>$this->input->post('single4'),
				 'single6'=>$this->input->post('single5'),
				 'single7'=>$this->input->post('single6'),
				 'single8'=>$this->input->post('single7'),
				 'single9'=>$this->input->post('single8'),
				 'total'=>$totalAmount,
				 'masterpercent'=>100-$datapercent['masterpercentage'],
					'agentpercent'=>100-$datapercent['agentpercentage'],
					'playerpercent'=>100-$datapercent['playerpercentage'],
				 'date'=>(string)$date4,
				 'cancle_status'=>0,
				 'created_by'=>(string)$_SESSION['username']
				  );

                
				$TicketData=array(
					'ticket_id'=>$ticketId,
					'customer_id'=>$this->input->post('client'),
					'game_id'=>$this->input->post('bazar'),
					'game_type'=>(string)$this->input->post('bazar_cat'),
					'purchase_amount'=>$totalAmount,
					'date'=>$date4,
					'ticket_status'=>0,
					'game_patti_type'=>'AAKDA-001',
					'masterpercent'=>100-$datapercent['masterpercentage'],
					'agentpercent'=>100-$datapercent['agentpercentage'],
					'playerpercent'=>100-$datapercent['playerpercentage'],
					'createdby'=>(string)$_SESSION['username'],


				);

				$passbookData = array(
					  'game_user_id'=>$this->input->post('client'),
					  'tran_id'=>$ticketId,
					  'datafrom'=>$this->input->post('client'),
					  'datato'=>'',
					  'debit'=>$totalAmount,
					  'credit'=>'0',
					  'closing'=>$closingBalance,
					  'description'=>'Ticket purchase of Aakda'.$ticketId,
					  'date'=>$date4,
					  'createdby'=>(string)$_SESSION['username'],

				);
			
			
				
			
				if($totalAmount<$customerBalance and $totalAmount<$customerExposerBalance ){
				
				if($this->User_Model->userTransactionStatus($this->input->post('client'))){
					if($this->Bazar_Model->checkBazarTime($this->input->post('bazar'),$this->input->post('bazar_cat'))){
						$this->Transaction_Model->updateUserBalance($this->input->post('client'),$closingBalance);
						if($this->db->insert('user_passbook',$passbookData)){
		                   if($this->db->insert('game_single_digit',$AakdaData)){

                            $this->db->insert('game_ticket',$TicketData);
							
                        
						   }
						   $data['messagesuccess']='Aakda Purchase Done';  
					}
				}else{
						$data['messagedanger']='bazar timed out'; 
					}
				}else{
					$data['messagedanger']='permission denied for Transaction'; 
				}
			}else{
				$data['messagedanger']='insufficent fund for Transaction'; 
			}
			}

         

        
		}	





		$gameid=$this->uri->segment(3);
		if(!isset($gameid)){
			$gameid=$this->input->post('bazar');
		}

		$bazarType=$this->uri->segment(4);
		if(!isset($bazarType)){
			$bazarType=$this->input->post('bazar_cat');
		}
		$data['gameid']=$gameid;
		$data['bazarType']=$bazarType;
        $userId=$this->session->userdata('userid');
		$this->load->model('Bazar_Model');
        $data['b']=$this->Bazar_Model->getBazar($userId);
		$data['bazar']=$this->Bazar_Model->getBazarById($gameid);
		$this->load->model('User_Model');
		$data['balance']=$this->User_Model->userAccount($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
        $this->load->view('user/header',$data);
        $this->load->view('user/Nav',$data);
		$this->load->view('user/aakda',$data);
		$this->load->view('user/footer');

	}
	
	



}


?>