<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jodifamily extends CI_Controller {

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
				 'customer_id'=>$this->input->post('client'),
				 'tran_id'=>$ticketId,
				 'bazar'=>$this->input->post('bazar'),
				 'bazar_type'=>(string)$this->input->post('bazar_cat'),
				 'date'=>(string)$date4,
				 'n128'=>$this->input->post('sp_1_0'),
'n129'=>$this->input->post('sp_2_0'),
'n120'=>$this->input->post('sp_3_0'),
'n130'=>$this->input->post('sp_4_0'),
'n140'=>$this->input->post('sp_5_0'),
'n123'=>$this->input->post('sp_6_0'),
'n124'=>$this->input->post('sp_7_0'),
'n125'=>$this->input->post('sp_8_0'),
'n126'=>$this->input->post('sp_9_0'),
'n127'=>$this->input->post('sp_0_0'),
'n290'=>$this->input->post('sp_1_1'),
'n246'=>$this->input->post('sp_2_1'),
'n247'=>$this->input->post('sp_3_1'),
'n248'=>$this->input->post('sp_4_1'),
'n258'=>$this->input->post('sp_5_1'),
'n259'=>$this->input->post('sp_6_1'),
'n278'=>$this->input->post('sp_7_1'),
'n279'=>$this->input->post('sp_8_1'),
'n289'=>$this->input->post('sp_9_1'),
'n235'=>$this->input->post('sp_0_1'),
'n579'=>$this->input->post('sp_1_2'),
'n589'=>$this->input->post('sp_2_2'),
'n670'=>$this->input->post('sp_3_2'),
'n680'=>$this->input->post('sp_4_2'),
'n690'=>$this->input->post('sp_5_2'),
'n457'=>$this->input->post('sp_6_2'),
'n467'=>$this->input->post('sp_7_2'),
'n468'=>$this->input->post('sp_8_2'),
'n478'=>$this->input->post('sp_9_2'),
'n569'=>$this->input->post('sp_0_2'),
'n137'=>$this->input->post('sp_1_3'),
'n138'=>$this->input->post('sp_2_3'),
'n139'=>$this->input->post('sp_3_3'),
'n149'=>$this->input->post('sp_4_3'),
'n159'=>$this->input->post('sp_5_3'),
'n150'=>$this->input->post('sp_6_3'),
'n160'=>$this->input->post('sp_7_3'),
'n134'=>$this->input->post('sp_8_3'),
'n135'=>$this->input->post('sp_9_3'),
'n136'=>$this->input->post('sp_0_3'),
'n380'=>$this->input->post('sp_1_4'),
'n345'=>$this->input->post('sp_2_4'),
'n256'=>$this->input->post('sp_3_4'),
'n257'=>$this->input->post('sp_4_4'),
'n267'=>$this->input->post('sp_5_4'),
'n268'=>$this->input->post('sp_6_4'),
'n340'=>$this->input->post('sp_7_4'),
'n350'=>$this->input->post('sp_8_4'),
'n360'=>$this->input->post('sp_9_4'),
'n370'=>$this->input->post('sp_0_4'),
'n678'=>$this->input->post('sp_1_5'),
'n679'=>$this->input->post('sp_2_5'),
'n689'=>$this->input->post('sp_3_5'),
'n789'=>$this->input->post('sp_4_5'),
'n780'=>$this->input->post('sp_5_5'),
'n790'=>$this->input->post('sp_6_5'),
'n890'=>$this->input->post('sp_7_5'),
'n567'=>$this->input->post('sp_8_5'),
'n568'=>$this->input->post('sp_9_5'),
'n578'=>$this->input->post('sp_0_5'),
'n146'=>$this->input->post('sp_1_6'),
'n147'=>$this->input->post('sp_2_6'),
'n148'=>$this->input->post('sp_3_6'),
'n158'=>$this->input->post('sp_4_6'),
'n168'=>$this->input->post('sp_5_6'),
'n169'=>$this->input->post('sp_6_6'),
'n179'=>$this->input->post('sp_7_6'),
'n170'=>$this->input->post('sp_8_6'),
'n180'=>$this->input->post('sp_9_6'),
'n145'=>$this->input->post('sp_0_6'),
'n470'=>$this->input->post('sp_1_7'),
'n390'=>$this->input->post('sp_2_7'),
'n346'=>$this->input->post('sp_3_7'),
'n347'=>$this->input->post('sp_4_7'),
'n348'=>$this->input->post('sp_5_7'),
'n349'=>$this->input->post('sp_6_7'),
'n359'=>$this->input->post('sp_7_7'),
'n369'=>$this->input->post('sp_8_7'),
'n379'=>$this->input->post('sp_9_7'),
'n389'=>$this->input->post('sp_0_7'),
'n236'=>$this->input->post('sp_1_8'),
'n156'=>$this->input->post('sp_2_8'),
'n157'=>$this->input->post('sp_3_8'),
'n167'=>$this->input->post('sp_4_8'),
'n230'=>$this->input->post('sp_5_8'),
'n178'=>$this->input->post('sp_6_8'),
'n250'=>$this->input->post('sp_7_8'),
'n189'=>$this->input->post('sp_8_8'),
'n270'=>$this->input->post('sp_9_8'),
'n190'=>$this->input->post('sp_0_8'),
'n489'=>$this->input->post('sp_1_9'),
'n480'=>$this->input->post('sp_2_9'),
'n490'=>$this->input->post('sp_3_9'),
'n356'=>$this->input->post('sp_4_9'),
'n357'=>$this->input->post('sp_5_9'),
'n358'=>$this->input->post('sp_6_9'),
'n368'=>$this->input->post('sp_7_9'),
'n378'=>$this->input->post('sp_8_9'),
'n450'=>$this->input->post('sp_9_9'),
'n460'=>$this->input->post('sp_0_9'),
'n245'=>$this->input->post('sp_1_10'),
'n237'=>$this->input->post('sp_2_10'),
'n238'=>$this->input->post('sp_3_10'),
'n239'=>$this->input->post('sp_4_10'),
'n249'=>$this->input->post('sp_5_10'),
'n240'=>$this->input->post('sp_6_10'),
'n269'=>$this->input->post('sp_7_10'),
'n260'=>$this->input->post('sp_8_10'),
'n234'=>$this->input->post('sp_9_10'),
'n280'=>$this->input->post('sp_0_10'),
'n560'=>$this->input->post('sp_1_11'),
'n570'=>$this->input->post('sp_2_11'),
'n580'=>$this->input->post('sp_3_11'),
'n590'=>$this->input->post('sp_4_11'),
'n456'=>$this->input->post('sp_5_11'),
'n367'=>$this->input->post('sp_6_11'),
'n458'=>$this->input->post('sp_7_11'),
'n459'=>$this->input->post('sp_8_11'),
'n469'=>$this->input->post('sp_9_11'),
'n479'=>$this->input->post('sp_0_11'),
'total'=>$this->input->post('totalAmt'),
				
				 'cancle_status'=>0,
				 'createdby'=>(string)$_SESSION['username']
				  );

                
				$TicketData=array(
					'ticket_id'=>$ticketId,
					'customer_id'=>$this->input->post('client'),
					'game_id'=>$this->input->post('bazar'),
					'game_type'=>(string)$this->input->post('bazar_cat'),
					'purchase_amount'=>$totalAmount,
					'date'=>$date4,
					'ticket_status'=>0,
					'game_patti_type'=>'SINGLE-002',
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
					  'description'=>'Ticket purchase of single patti'.$ticketId,
					  'date'=>$date4,
					  'createdby'=>(string)$_SESSION['username'],

				);
				if($totalAmount<$customerBalance  and $totalAmount<$customerExposerBalance){
				if($this->User_Model->userTransactionStatus($this->input->post('client'))){
					if($this->Bazar_Model->checkBazarTime($this->input->post('bazar'),$this->input->post('bazar_cat'))){
						$this->Transaction_Model->updateUserBalance($this->input->post('client'),$closingBalance);
						if($this->db->insert('user_passbook',$passbookData)){
		                   if($this->db->insert('single_pana',$AakdaData)){

                            $this->db->insert('game_ticket',$TicketData);
							
                        
						   }
						   $data['messagesuccess']='single patti Purchase Done';  
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
		$this->load->view('user/family',$data);
		$this->load->view('user/footer');

    }



}


?>