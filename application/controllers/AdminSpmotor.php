<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSpmotor extends CI_Controller {

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
		if($access_level!=3 and $access_level!=4  ){
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
		 	$this->form_validation->set_rules('totalAmt','AMOUNT', 'required');
			 if ($this->form_validation->run() != false)
			{
				$this->load->model('User_Model');
		        $customerBalance=$this->User_Model->userAccount($this->input->post('client'));
		         $customerExposerBalance=$this->User_Model->userAccountExposer($this->input->post('client'));
		      
				$ticketId=$this->Transaction_Model->TicketNumber();

				$totalAmount=$this->input->post('totalAmt');
				$closingBalance=$customerBalance-$totalAmount;

				$AakdaData=array(
				 $this->input->post('client'),
				 $ticketId,
				 $this->input->post('bazar'),
				 $this->input->post('bazar_cat'),
				 $date4,
				 $this->input->post('sp_0_0'),$this->input->post('sp_1_0'),$this->input->post('sp_2_0'),
				 $this->input->post('sp_3_0'),$this->input->post('sp_4_0'),$this->input->post('sp_5_0'),$this->input->post('sp_6_0'),$this->input->post('sp_7_0'),
				 $this->input->post('sp_8_0'),$this->input->post('sp_9_0'),$this->input->post('sp_0_1'),$this->input->post('sp_1_1'),$this->input->post('sp_2_1'),
				 $this->input->post('sp_3_1'),$this->input->post('sp_4_1'),$this->input->post('sp_5_1'),$this->input->post('sp_6_1'),$this->input->post('sp_7_1'),
				 $this->input->post('sp_8_1'),$this->input->post('sp_9_1'),$this->input->post('sp_0_2'),$this->input->post('sp_1_2'),$this->input->post('sp_2_2'),
				 $this->input->post('sp_3_2'),$this->input->post('sp_4_2'),$this->input->post('sp_5_2'),$this->input->post('sp_6_2'),$this->input->post('sp_7_2'),
				 $this->input->post('sp_8_2'),$this->input->post('sp_9_2'),$this->input->post('sp_0_3'),$this->input->post('sp_1_3'),$this->input->post('sp_2_3'),
				 $this->input->post('sp_3_3'),$this->input->post('sp_4_3'),$this->input->post('sp_5_3'),$this->input->post('sp_6_3'),$this->input->post('sp_7_3'),
				 $this->input->post('sp_8_3'),$this->input->post('sp_9_3'),$this->input->post('sp_0_4'),$this->input->post('sp_1_4'),$this->input->post('sp_2_4'),
				 $this->input->post('sp_3_4'),$this->input->post('sp_4_4'),$this->input->post('sp_5_4'),$this->input->post('sp_6_4'),$this->input->post('sp_7_4'),
				 $this->input->post('sp_8_4'),$this->input->post('sp_9_4'),$this->input->post('sp_0_5'),$this->input->post('sp_1_5'),$this->input->post('sp_2_5'),
				 $this->input->post('sp_3_5'),$this->input->post('sp_4_5'),$this->input->post('sp_5_5'),$this->input->post('sp_6_5'),$this->input->post('sp_7_5'),
				 $this->input->post('sp_8_5'),$this->input->post('sp_9_5'),$this->input->post('sp_0_6'),$this->input->post('sp_1_6'),$this->input->post('sp_2_6'),
				 $this->input->post('sp_3_6'),$this->input->post('sp_4_6'),$this->input->post('sp_5_6'),$this->input->post('sp_6_6'),$this->input->post('sp_7_6'),
				 $this->input->post('sp_8_6'),$this->input->post('sp_9_6'),$this->input->post('sp_0_7'),$this->input->post('sp_1_7'),$this->input->post('sp_2_7'),
				 $this->input->post('sp_3_7'),$this->input->post('sp_4_7'),$this->input->post('sp_5_7'),$this->input->post('sp_6_7'),$this->input->post('sp_7_7'),
				 $this->input->post('sp_8_7'),$this->input->post('sp_9_7'),$this->input->post('sp_0_8'),$this->input->post('sp_1_8'),$this->input->post('sp_2_8'),
				 $this->input->post('sp_3_8'),$this->input->post('sp_4_8'),$this->input->post('sp_5_8'),$this->input->post('sp_6_8'),$this->input->post('sp_7_8'),
				 $this->input->post('sp_8_8'),$this->input->post('sp_9_8'),$this->input->post('sp_0_9'),$this->input->post('sp_1_9'),$this->input->post('sp_2_9'),
				 $this->input->post('sp_3_9'),$this->input->post('sp_4_9'),$this->input->post('sp_5_9'),$this->input->post('sp_6_9'),$this->input->post('sp_7_9'),
				 $this->input->post('sp_8_9'),$this->input->post('sp_9_9'),
                 $this->input->post('totalAmt')
				 
				  ,0,$_SESSION['username'],$_SESSION['username'],$date3,$date3
				  );
				$doubledetails=$this->Transaction_Model->generatequery('jodi',$AakdaData);
				
				
				$TicketData=array(
					'ticket_id'=>$ticketId,
					'customer_id'=>$this->input->post('client'),
					'game_id'=>$this->input->post('bazar'),
					'game_type'=>(string)$this->input->post('bazar_cat'),
					'purchase_amount'=>$totalAmount,
					'date'=>$date4,
					'ticket_status'=>0,
					'game_patti_type'=>'JODI-004',
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
					  'description'=>'Ticket purchase of Jodi '.$ticketId,
					  'date'=>$date4,
					  'createdby'=>(string)$_SESSION['username'],

				);
				
				
				if($totalAmount<$customerBalance  and $totalAmount<$customerExposerBalance){	
				if($this->User_Model->userTransactionStatus($this->input->post('client'))){
					if($this->Bazar_Model->checkBazarTime($this->input->post('bazar'),$this->input->post('bazar_cat'))){
						$this->Transaction_Model->updateUserBalance($this->input->post('client'),$closingBalance);
						if($this->db->insert('user_passbook',$passbookData)){
		                   if($this->db->query($doubledetails)){

                            $this->db->insert('game_ticket',$TicketData);
							
                                
						   }
						   $data['messagesuccess']='Jodi  Purchase Done';  
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
        $this->load->view('admin/header',$data);
        $this->load->view('admin/Nav',$data);
		$this->load->view('admin/spmotor',$data);
		$this->load->view('admin/footer');

    }



}


?>