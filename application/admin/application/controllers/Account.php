<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
    
    
       function __construct(){
		
        parent::__construct();
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->load->model('Login_Model');
		
		$this->load->helper('security');
		$this->load->helper('result');
		$this->load->library(array('session'));	
		$customer_logged_in=$this->session->userdata('customer_logged_in');
		
	
		$access_level=$this->session->userdata('access_level');
		
    if(!$customer_logged_in  ){
            redirect('Login/index');
    }
   
    if($access_level!=1 and $access_level!=2 and $access_level!=4 and $access_level!=3  ){
            redirect('Login/logOut');
    }
		
	
    }
	
	 public function updatetimeStatus(){
     $id=$this->uri->segment(3);
    $status=$this->uri->segment(4);
     $data = array(
                 'updateTime' => $status,
                 
            );

            $this->db->where('id', $id);
            $this->db->update('game_user_personal', $data);
            
            
             $this->session->set_flashdata('message_name', ' updated successfully');
                
                redirect('Account/index');
  }
  
  
    public function updateaddeditStatus(){
     $id=$this->uri->segment(3);
    $status=$this->uri->segment(4);
     $data = array(
                 'aeresult' => $status,
                 
            );

            $this->db->where('id', $id);
            $this->db->update('game_user_personal', $data);
            
            
             $this->session->set_flashdata('message_name', ' updated successfully');
                
                redirect('Account/index');
  }
  
  
  
	public function index(){

    $userid=$this->uri->segment('3');
    $accessid=$this->uri->segment('4');
  
   
    $userIdData=$this->session->userdata('userid');
    $this->load->model('Account_Model');
		//$data['b']=$this->Bazar_Model->getBazar($userId);
		$this->load->model('User_Model');
    $data['username']=$this->User_Model->userAccountinfo($userIdData);
   
    $data['balance']=$this->User_Model->userAccount($userIdData);
    if(isset($userid)){
      $userid=$userid;
      
      //echo $userid;
     // exit;
      $data['ActionStatus']='nodisplay';
      $data['Acount']=$this->Account_Model->allUserAccount($userid);
      
      
    }else{
      $userid2=$this->session->userdata('userid');
      $data['ActionStatus']='display';
      $data['Acount']=$this->Account_Model->allUserAccount($userid2);
      
    }
   // $data['Acount']=$this->Account_Model->allUserAccount($userid);
    
    //$data['Acount']=$this->Account_Model->allUserAccount($userid);
	
    
   
		$this->load->view('admin/header',$data);
		$this->load->view('admin/client',$data);
		$this->load->view('admin/footer');
		
	}
	
    public function userCommission(){
    
    $userId=$this->session->userdata('userid');
    $this->load->model('Account_Model');
    //$data['b']=$this->Bazar_Model->getBazar($userId);
    $this->load->model('User_Model');
    $data['balance']=$this->User_Model->userAccount($userId);
    $data['Acount']=$this->Account_Model->allUserCommission($userId);
    $data['username']=$this->User_Model->userAccountinfo($userId);
		
    $this->load->view('admin/header',$data);
    $this->load->view('admin/com_re',$data);
    $this->load->view('admin/footer');
    
  }
  
  public function editCommission(){
    $userId=$this->session->userdata('userid');
	$edit_id=$this->uri->segment('3');
    $createAccount=$this->input->post('updateComission');
   
       if(isset($createAccount)){
          $this->load->model('Bazar_Model');
    $this->load->model('Transaction_Model');
    $access_level=$this->session->userdata('access_level');
    
    $userId=$this->session->userdata('userid');
    
    if($access_level==1){
     
      $databazar=$this->Bazar_Model->getBazarData();
    }else{
        
      
        $databazar=$this->Bazar_Model->getBazar($userId);   
    }
             $this->form_validation->set_rules('aakdaCommision', 'aakdaCommision', 'trim|required');
        $this->form_validation->set_rules('panaCommision', 'panaCommision', 'trim|required');
        $this->form_validation->set_rules('partnerShip', 'partnerShip', 'trim|required');
		$this->form_validation->set_rules('aakdaRate', 'aakdaRate', 'trim|required'); 

		$this->form_validation->set_rules('singlePana', 'singlePana', 'trim|required');
        $this->form_validation->set_rules('doublePana', 'doublePana', 'trim|required');
        $this->form_validation->set_rules('tripplePana', 'tripplePana', 'trim|required');
        $this->form_validation->set_rules('jodiRate', 'jodiRate', 'trim|required');
        
         if ($this->form_validation->run() == TRUE) {  
              if($_SESSION['access_level']==1){
                $wincom=$this->input->post('winCommision');
            }else{
               $wincom=0; 
            } 
           $dataCommission=array(
              
               'aakda_com'=>$this->input->post('aakdaCommision'),
               'pana_com'=>$this->input->post('panaCommision'),
               'partnership'=>$this->input->post('partnerShip'),
               'aakdarate'=>$this->input->post('aakdaRate'),
               'singlepanarate'=>$this->input->post('singlePana'),
               'doublepanarate'=>$this->input->post('doublePana'),
               'triplepanarate'=>$this->input->post('tripplePana'),
               'jodirate'=>$this->input->post('jodiRate'),
               'wincom'=>$wincom,
               'createdby'=>(string)$_SESSION['username'],
            );
            $this->db->where('game_user_id',$this->input->post('user_id'));
            $this->db->delete('game_user_bazar');
            
            
            
            
         
            $this->db->where('com_id',$this->input->post('com_id'));
            $this->db->update('game_user_commission',$dataCommission);
             $datab=array();
            
            foreach ($databazar->result() as $row3)
            {
            	$bazart='bazar_'.$row3->id;
            	$bazaryu=$this->input->post($bazart);
                if(isset($bazaryu)){

                     $datab[]=$row3->id;
            
                }
            }
           
         date_default_timezone_set('Asia/Kolkata');
		 $date3=date("Y-m-d h:i:s A", time());
		 $date4=date("Y-m-d", time());
         
         foreach( $datab as $value){
          $gameUserBazar=array(
               'game_user_id'=>$this->input->post('user_id'),
               'game_bazar_id'=>$value,
               'createdby'=>(string)$_SESSION['username'],
               
         );
         $this->load->model('Account_Model');
          $this->Account_Model->addUserGame($gameUserBazar);

         }
            redirect('Account/userCommission');
         }    
      }
      
     $this->load->model('Bazar_Model');
    $this->load->model('Transaction_Model');
    $access_level=$this->session->userdata('access_level');
    
    $userId=$this->session->userdata('userid');
    
    if($access_level==1){
      $data['bazar']=$this->Bazar_Model->getBazar($edit_id);
      $data['bazarall']=$this->Bazar_Model->getBazarData();
      $databazar=$this->Bazar_Model->getBazarData();
    }else{
        
        $data['bazarall']=$this->Bazar_Model->getBazar($userId);
        $data['bazar']=$this->Bazar_Model->getBazar($edit_id);
        $databazar=$this->Bazar_Model->getBazar($userId);   
    }
	 
	  
     
    $this->load->model('Account_Model');
    $this->load->model('User_Model');
 
	$data['Account']=$this->Account_Model->getAccountType();
		//$data['userName']=$this->Account_Model->getUserName();
    $data['username']=$this->User_Model->userAccountinfo($userId);
    $access_level=$this->session->userdata('access_level');
		if($access_level==1){
		     $data['Commissionedit']=$this->Account_Model->getAccountCommission($edit_id);
      $data['Acount']=$this->Account_Model->allUserbyAccount2();
     }elseif($access_level==4){
          $data['Commissionedit']=$this->Account_Model->getAccountCommission($edit_id);
       $data['Commission']=$this->Account_Model->getAccountCommission($userId);
       $data['Acount']=$this->Account_Model->allUserbyAccount($userId);
     }elseif($access_level==3){
          $data['Commissionedit']=$this->Account_Model->getAccountCommission($edit_id);
        $data['Commission']=$this->Account_Model->getAccountCommission($userId);     
       $data['Acount']=$this->Account_Model->allUserbyAccount($userId);
     }
     elseif($access_level==2){
          $data['Commissionedit']=$this->Account_Model->getAccountCommission($edit_id);
        $data['Commission']=$this->Account_Model->getAccountCommission($userId);     
       $data['Acount']=$this->Account_Model->allUserbyAccount($userId);
     }
     
      $this->load->model('Bazar_Model');
    $this->load->model('Transaction_Model');
    $access_level=$this->session->userdata('access_level');
    
    $userId=$this->session->userdata('userid');
    
    if($access_level==1){
      $data['bazar']=$this->Bazar_Model->getBazar($edit_id);
      $data['bazarall']=$this->Bazar_Model->getBazarData();
      
    }else{
        
        $data['bazarall']=$this->Bazar_Model->getBazar($userId);
        $data['bazar']=$this->Bazar_Model->getBazar($edit_id);
    }
		$this->load->model('User_Model');
		$data['balance']=$this->User_Model->userAccount($userId);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_com',$data);
		$this->load->view('admin/footer'); 
      
  }
	public function addAccount(){
    date_default_timezone_set('Asia/Kolkata');
		$date3=date("Y-m-d h:i:s A", time());
		$date4=date("Y-m-d", time());
    $this->load->model('Bazar_Model');
    $this->load->model('Transaction_Model');
    $access_level=$this->session->userdata('access_level');
    $userId=$this->session->userdata('userid');
    
      if($access_level==1){
		$databazar=$this->Bazar_Model->getBazarData();
		$data['bazar']=$this->Bazar_Model->getBazarData();
      }else{
        $data['bazar']=$this->Bazar_Model->getBazar($userId);
        $databazar=$this->Bazar_Model->getBazar($userId);
      }
      
    $this->load->model('Account_Model');
    $this->load->model('User_Model');
      $createAccount=$this->input->post('createAccount');
      if(isset($createAccount)){
        $this->form_validation->set_rules('clientName', 'User Name Min length 6', 'trim|required|min_length[3]|max_length[25]|is_unique[game_user_personal.username]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[3]|max_length[25]');
        $this->form_validation->set_rules('confirmPassword', 'confirmPassword', 'trim|required|min_length[3]|max_length[25]|matches[password]');
        $this->form_validation->set_rules('fullName', 'fullName', 'trim|required');
        $this->form_validation->set_rules('exposerLimit', 'exposerLimit', 'trim|required');
		$this->form_validation->set_rules('openingBalance', 'openingBalance', 'trim|required');
       

        $this->form_validation->set_rules('accounttype', 'accounttype', 'trim|required');
        //$this->form_validation->set_rules('referedby', 'referedby', 'trim|required');
        $this->form_validation->set_rules('aakdaCommision', 'aakdaCommision', 'trim|required');
        $this->form_validation->set_rules('panaCommision', 'panaCommision', 'trim|required');
        $this->form_validation->set_rules('partnerShip', 'partnerShip', 'trim|required');
		$this->form_validation->set_rules('aakdaRate', 'aakdaRate', 'trim|required'); 

		$this->form_validation->set_rules('singlePana', 'singlePana', 'trim|required');
        $this->form_validation->set_rules('doublePana', 'doublePana', 'trim|required');
        $this->form_validation->set_rules('tripplePana', 'tripplePana', 'trim|required');
        $this->form_validation->set_rules('jodiRate', 'jodiRate', 'trim|required');
		//$this->form_validation->set_rules('winCommision', 'winCommision', 'trim|required');
        
                 
        if ($this->form_validation->run() == TRUE) {
        $datab=array();
         foreach ($databazar->result() as $row3)
            {
            	$bazart='bazar_'.$row3->id;
            	$bazaryu=$this->input->post($bazart);
                if(isset($bazaryu)){

                     $datab[]=$row3->id;
            
                }
            }
               $bazcount=count($datab);
        if($bazcount>=1){

          
          if($access_level==1){
          $ticketId=$this->Transaction_Model->TicketNumber();
	         $dataPersonal=array(
              'fullname'=>$this->input->post('fullName'),
              'username'=>$this->input->post('clientName'),
              'password'=>md5($this->input->post('password')),
              'city'=>$this->input->post('city'),
              'phonenumber'=>$this->input->post('Phone'),
              'blocked_status'=>1,
              'transaction_status'=>1,
             
              'createby'=>(string)$_SESSION['username'],
	         );
            
            $this->load->model('Account_Model');
            $game_user_id=$this->Account_Model->addUserPersonaL($dataPersonal);
            if($_SESSION['access_level']==1){
            $refered=$this->input->post('refered');
            $referedby=$this->input->post('referedby');
            }else{
            $refered=0;
            $referedby=''; 
            }
            $dataAccount=array(
               'game_user_id'=>$game_user_id,
               'game_group_id'=>$this->input->post('accounttype'),
               'creditrefrence'=>$this->input->post('openingBalance'),
               'exposurelimit'=>$this->input->post('exposerLimit'),
               'referedpercent'=>$refered,
               'referedby'=>$referedby,
               'createdby'=>(string)$_SESSION['username'],

            );
            $this->Account_Model->addUserAccount($dataAccount);
            if($_SESSION['access_level']==1){
                $wincom=$this->input->post('winCommision');
            }else{
               $wincom=0; 
            }    
            $dataCommission=array(
               'game_user_id'=>$game_user_id,
               'aakda_com'=>$this->input->post('aakdaCommision'),
               'pana_com'=>$this->input->post('panaCommision'),
               'partnership'=>$this->input->post('partnerShip'),
               'aakdarate'=>$this->input->post('aakdaRate'),
               'singlepanarate'=>$this->input->post('singlePana'),
               'doublepanarate'=>$this->input->post('doublePana'),
               'triplepanarate'=>$this->input->post('tripplePana'),
               'jodirate'=>$this->input->post('jodiRate'),
               'wincom'=>$wincom,
               'createdby'=>(string)$_SESSION['username'],
            );
            
            $this->Account_Model->addUserCommission($dataCommission);
            $dataMaster=array(
               'userid'=>$game_user_id,
               'createdby'=>$_SESSION['userid'],
               
            );
            
            $this->Account_Model->addUserMaster($dataMaster);
            $passbookData = array(
              'game_user_id'=>$game_user_id,
              'tran_id'=>$ticketId.'_'.$game_user_id,
              'datafrom'=>$_SESSION['userid'],
              'datato'=>$game_user_id,
              'debit'=>0,
              'credit'=>$this->input->post('openingBalance'),
              'closing'=>$this->input->post('openingBalance'),
              'description'=>'opening new account',
              'date'=>$date4,
              'createdby'=>(string)$_SESSION['username'],
  
          );
          $closingbalance=$this->User_Model->userAccount($userId)-$this->input->post('openingBalance');
          $passbookData2 = array(
            'game_user_id'=>$_SESSION['userid'],
            'tran_id'=>$ticketId.'_'.$_SESSION['userid'],
            'datafrom'=>$_SESSION['userid'],
            'datato'=>$game_user_id,
            'debit'=>$this->input->post('openingBalance'),
            'credit'=>0,
            'closing'=>$closingbalance,
            'description'=>'opening new account',
            'date'=>$date4,
            'createdby'=>(string)$_SESSION['username'],

          );

          $this->db->insert('user_passbook',$passbookData);
          $this->db->insert('user_passbook',$passbookData2);
          //$this->Transaction_Model->updateUserBalance($_SESSION['userid'],$closingbalance);
            $datab=array();
            foreach ($databazar->result() as $row3)
            {
            	$bazart='bazar_'.$row3->id;
            	$bazaryu=$this->input->post($bazart);
                if(isset($bazaryu)){

                     $datab[]=$row3->id;
            
                }
            }
            
         date_default_timezone_set('Asia/Kolkata');
		 $date3=date("Y-m-d h:i:s A", time());
		 $date4=date("Y-m-d", time());
         
         foreach( $datab as $value){
          $gameUserBazar=array(
               'game_user_id'=>$game_user_id,
               'game_bazar_id'=>$value,
               'createdby'=>(string)$_SESSION['username'],
               
         );
          $this->Account_Model->addUserGame($gameUserBazar);

         }
          $this->session->set_flashdata('message_name', 'account added successfully');
          redirect('Account/index');

        }else{
          
          if( $this->input->post('openingBalance') <=$this->User_Model->userAccount($userId) and $this->input->post('openingBalance')>0){
               $this->load->model('Account_Model');
             $dataCommission=$this->Account_Model->getAccountCommission($userId);
             
             	$aakda_com=$dataCommission->aakda_com;
                $pana_com=$dataCommission->pana_com;
                $partnership=$dataCommission->partnership;
                $aakdarate=$dataCommission->aakdarate;
                $singlepanarate=$dataCommission->singlepanarate;
                $doublepanarate=$dataCommission->doublepanarate;
                $triplepanarate=$dataCommission->triplepanarate;
                $jodirate=$dataCommission->jodirate;
                
               
             if($this->input->post('aakdaCommision')<=$aakda_com and $this->input->post('panaCommision')<=$pana_com and $this->input->post('partnerShip')<=$partnership
             and $this->input->post('aakdaRate')<=$aakdarate and $this->input->post('singlePana')<=$singlepanarate and $this->input->post('doublePana')<=$doublepanarate and
            $this->input->post('tripplePana')<=$triplepanarate and $this->input->post('jodiRate')<=$jodirate
             ){
                
	         
	  
	         
             $ticketId=$this->Transaction_Model->TicketNumber();
	        
	         
	         
	         $dataPersonal=array(
              'fullname'=>$this->input->post('fullName'),
              'username'=>$this->input->post('clientName'),
              'password'=>md5($this->input->post('password')),
              'city'=>$this->input->post('city'),
              'phonenumber'=>$this->input->post('Phone'),
              'blocked_status'=>1,
              'transaction_status'=>1,
             
              'createby'=>(string)$_SESSION['username'],
	         );
            
           
            $game_user_id=$this->Account_Model->addUserPersonaL($dataPersonal);
            $dataAccount=array(
               'game_user_id'=>$game_user_id,
               'game_group_id'=>$this->input->post('accounttype'),
               'creditrefrence'=>$this->input->post('openingBalance'),
               'exposurelimit'=>$this->input->post('exposerLimit'),
               'referedpercent'=>$this->input->post('refered'),
               'referedby'=>$this->input->post('referedby'),
               'createdby'=>(string)$_SESSION['username'],

            );
            $this->Account_Model->addUserAccount($dataAccount);
            $dataCommission=array(
               'game_user_id'=>$game_user_id,
               'aakda_com'=>$this->input->post('aakdaCommision'),
               'pana_com'=>$this->input->post('panaCommision'),
               'partnership'=>$this->input->post('partnerShip'),
               'aakdarate'=>$this->input->post('aakdaRate'),
               'singlepanarate'=>$this->input->post('singlePana'),
               'doublepanarate'=>$this->input->post('doublePana'),
               'triplepanarate'=>$this->input->post('tripplePana'),
               'jodirate'=>$this->input->post('jodiRate'),
               'wincom'=>$this->input->post('winCommision'),
               'createdby'=>(string)$_SESSION['username'],
            );
            
            $this->Account_Model->addUserCommission($dataCommission);
            $dataMaster=array(
               'userid'=>$game_user_id,
               'createdby'=>$_SESSION['userid'],
               
            );
            
            $this->Account_Model->addUserMaster($dataMaster);
            $passbookData = array(
              'game_user_id'=>$game_user_id,
              'tran_id'=>$ticketId.'_'.$game_user_id,
              'datafrom'=>$_SESSION['userid'],
              'datato'=>$game_user_id,
              'debit'=>0,
              'credit'=>$this->input->post('openingBalance'),
              'closing'=>$this->input->post('openingBalance'),
              'description'=>'opening new account',
              'date'=>$date4,
              'createdby'=>(string)$_SESSION['username'],
  
          );
          $closingbalance=$this->User_Model->userAccount($userId)-$this->input->post('openingBalance');
          $passbookData2 = array(
            'game_user_id'=>$_SESSION['userid'],
            'tran_id'=>$ticketId.'_'.$_SESSION['userid'],
            'datafrom'=>$_SESSION['userid'],
            'datato'=>$game_user_id,
            'debit'=>$this->input->post('openingBalance'),
            'credit'=>0,
            'closing'=>$closingbalance,
            'description'=>'opening new account',
            'date'=>$date4,
            'createdby'=>(string)$_SESSION['username'],

          );

          $this->db->insert('user_passbook',$passbookData);
          $this->db->insert('user_passbook',$passbookData2);
          
           $clbalance=$this->User_Model->userAccount($_SESSION['userid'])-$this->input->post('openingBalance');
                 
                
                  $this->db->set('creditrefrence',$clbalance);
                  $this->db->where('game_user_id',$_SESSION['userid']);
	              $this->db->update('game_user_account');
	              
          //$this->Transaction_Model->updateUserBalance($_SESSION['userid'],$closingbalance);
            $datab=array();
            foreach ($databazar->result() as $row3)
            {
            	$bazart='bazar_'.$row3->id;
            	$bazaryu=$this->input->post($bazart);
                if(isset($bazaryu)){

                     $datab[]=$row3->id;
            
                }
            }
            
         date_default_timezone_set('Asia/Kolkata');
		 $date3=date("Y-m-d h:i:s A", time());
		 $date4=date("Y-m-d", time());
         
         foreach( $datab as $value){
          $gameUserBazar=array(
               'game_user_id'=>$game_user_id,
               'game_bazar_id'=>$value,
               'createdby'=>(string)$_SESSION['username'],
               
         );
          $this->Account_Model->addUserGame($gameUserBazar);

         }
        $this->session->set_flashdata('message_name', 'account added successfully'); 
          redirect('Account/index');
             }else{
       $this->session->set_flashdata('message_danger', 'check commission details !Account not added');
      }  
      }else{
       $this->session->set_flashdata('message_danger', 'insufficient Fund !Account not added');
      }
      
      
    }
        }else{
           $this->session->set_flashdata('message_danger', 'Select bazar !Account not added');
        }
        }
       
      }
	  $userId=$this->session->userdata('userid');
		
    $this->load->model('Account_Model');
    $this->load->model('User_Model');
		$data['Account']=$this->Account_Model->getAccountType();
		//$data['userName']=$this->Account_Model->getUserName();
    $data['username']=$this->User_Model->userAccountinfo($userId);
    $access_level=$this->session->userdata('access_level');
		if($access_level==1){
      $data['Acount']=$this->Account_Model->allUserbyAccount2();
     }elseif($access_level==4){
       $data['Commission']=$this->Account_Model->getAccountCommission($userId);
       $data['Acount']=$this->Account_Model->allUserbyAccount($userId);
     }elseif($access_level==3){
        $data['Commission']=$this->Account_Model->getAccountCommission($userId);     
       $data['Acount']=$this->Account_Model->allUserbyAccount($userId);
     }
     elseif($access_level==2){
        $data['Commission']=$this->Account_Model->getAccountCommission($userId);     
       $data['Acount']=$this->Account_Model->allUserbyAccount($userId);
     }
		$this->load->model('User_Model');
		$data['balance']=$this->User_Model->userAccount($userId);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/add_acc',$data);
		$this->load->view('admin/footer');
		
	}
	
	
	
	public function deposit()
  {
    $withdraw=$this->input->post('depositSave');
    if(isset($withdraw)){
        
    $this->form_validation->set_rules('accessidD', 'accessidD', 'trim|required');
     $this->form_validation->set_rules('id_editD', 'id_editD', 'trim|required');
       $this->form_validation->set_rules('myamtD', 'myamtD', 'trim|required');
        $this->form_validation->set_rules('mybalD', 'mybalD', 'trim|required');
   
     $this->form_validation->set_rules('admin_id_editD', 'admin_id_editD', 'trim|required');
       $this->form_validation->set_rules('userD', 'userD', 'trim|required');
        $this->form_validation->set_rules('userbalD', 'userbalD', 'trim|required');
         $this->form_validation->set_rules('amtD', 'amtD', 'trim|required');
          $this->form_validation->set_rules('remarkD', 'remarkD', 'trim|required');
   
    if ($this->form_validation->run() == TRUE){
    
        $accessidD=$this->input->post('accessidD');
        $id_editD=$this->input->post('id_editD');
        $myamtD=$this->input->post('myamtD');
        $mybalD=$this->input->post('mybalD');
        
        $admin_id_editD=$this->input->post('admin_id_editD');
        $userD=$this->input->post('userD');
        $userbalD=$this->input->post('userbalD');
        $amtD=$this->input->post('amtD');
        $remarkD=$this->input->post('remarkD');
        if(isset($remarkD)){
           $remarkD=$remarkD; 
        }else{
            $remarkD='';
        }
       
        
        if($accessidD==1){
             
             $this->db->set('modifiedby',$_SESSION['username']);
             $this->db->set('creditrefrence',$userbalD);
             $this->db->where('game_user_id',$id_editD);
             $this->db->update('game_user_account');
             
               date_default_timezone_set('Asia/Kolkata');
		   $date3=date("Y-m-d h:i:s A", time());
		   $date4=date("Y-m-d", time());
         //$this->load->model('Bazar_Model');
           $this->load->model('Transaction_Model');
           $ticketId=$this->Transaction_Model->TicketNumber();
           $passbookData = array(
              'game_user_id'=>$id_editD,
              'tran_id'=>$ticketId.'_'.$id_editD,
              'datafrom'=>$id_editD,
              'datato'=>$admin_id_editD,
              'debit'=>0,
              'credit'=>$amtD,
              'closing'=>$userbalD,
              'description'=>$remarkD,
              'date'=>$date4,
              'modifiedby'=>(string)$_SESSION['username'],
  
          );
          
           $passbookData2 = array(
              'game_user_id'=>$admin_id_editD,
              'tran_id'=>$ticketId.'_'.$id_editD,
              'datafrom'=>$id_editD,
              'datato'=>$admin_id_editD,
              'debit'=>$amtD,
              'credit'=>0,
              'closing'=>$mybalD,
              'description'=>$remarkD,
              'date'=>$date4,
              'modifiedby'=>(string)$_SESSION['username'],
  
          );
          $this->db->insert('user_passbook',$passbookData);
          $this->db->insert('user_passbook',$passbookData2);
           $this->session->set_flashdata('message_name', 'deposited done successfully');
     redirect('Account/index'); 
        }else{
            if($amtD<=$myamtD and $amtD>0){
             $this->db->set('modifiedby',$_SESSION['username']);
             $this->db->set('creditrefrence',$mybalD);
             $this->db->where('game_user_id',$admin_id_editD);
             $this->db->update('game_user_account'); 
           
             $this->db->set('modifiedby',$_SESSION['username']);
             $this->db->set('creditrefrence', $userbalD);
             $this->db->where('game_user_id',$id_editD);
             $this->db->update('game_user_account'); 
             
              date_default_timezone_set('Asia/Kolkata');
		   $date3=date("Y-m-d h:i:s A", time());
		   $date4=date("Y-m-d", time());
         //$this->load->model('Bazar_Model');
           $this->load->model('Transaction_Model');
           $ticketId=$this->Transaction_Model->TicketNumber();
           $passbookData = array(
              'game_user_id'=>$id_editD,
              'tran_id'=>$ticketId.'_'.$id_editD,
              'datafrom'=>$id_editD,
              'datato'=>$admin_id_editD,
              'debit'=>0,
              'credit'=>$amtD,
              'closing'=>$userbalD,
              'description'=>$remarkD,
              'date'=>$date4,
              'modifiedby'=>(string)$_SESSION['username'],
  
          );
          
           $passbookData2 = array(
              'game_user_id'=>$admin_id_editD,
              'tran_id'=>$ticketId.'_'.$id_editD,
              'datafrom'=>$id_editD,
              'datato'=>$admin_id_editD,
              'debit'=>$amtD,
              'credit'=>0,
              'closing'=>$mybalD,
              'description'=>$remarkD,
              'date'=>$date4,
              'modifiedby'=>(string)$_SESSION['username'],
  
          );
          $this->db->insert('user_passbook',$passbookData);
          $this->db->insert('user_passbook',$passbookData2);
          
           $this->session->set_flashdata('message_name', 'deposited done successfully');
     redirect('Account/index');
            }else{
      $this->session->set_flashdata('message_danger', 'deposited not done  successfully ! insufficient fund');
     redirect('Account/index');
            }
        }
        
        
           
    }
    redirect('Account/index');
    }
  }
  public function withdraw()
  {
    $withdraw=$this->input->post('WithdrwalSave');
    if(isset($withdraw)){
        
    $this->form_validation->set_rules('accessidW', 'accessidW', 'trim|required');
     $this->form_validation->set_rules('id_editW', 'id_editW', 'trim|required');
       $this->form_validation->set_rules('myamtW', 'myamtW', 'trim|required');
        $this->form_validation->set_rules('mybalW', 'mybalW', 'trim|required');
   
     $this->form_validation->set_rules('admin_id_editW', 'admin_id_editW', 'trim|required');
       $this->form_validation->set_rules('userW', 'userW', 'trim|required');
        $this->form_validation->set_rules('userbalW', 'userbalW', 'trim|required');
         $this->form_validation->set_rules('amtW', 'amtW', 'trim|required');
          $this->form_validation->set_rules('remarkW', 'remarkW', 'trim|required');
   
    //$this->form_validation->set_rules('amtD', 'Amount', 'trim|required');
       
    if ($this->form_validation->run() == TRUE){
        $accessidW=$this->input->post('accessidW');
        $id_editW=$this->input->post('id_editW');
        $myamtW=$this->input->post('myamtW');
        $mybalW=$this->input->post('mybalW');
        
        $admin_id_editW=$this->input->post('admin_id_editW');
        $userW=$this->input->post('userW');
        $userbalW=$this->input->post('userbalW');
        $amtW=$this->input->post('amtW');
        $remarkW=$this->input->post('remarkW');
        if(isset($remarkW)){
           $remarkW=$remarkW; 
        }else{
            $remarkW='';
        }
        if($accessidW==1){
             if($amtW<=$userbalW and $amtW>0){
             $this->db->set('modifiedby',$_SESSION['username']);
             $this->db->set('creditrefrence',$userbalW);
             $this->db->where('game_user_id',$id_editW);
             $this->db->update('game_user_account');
             
             date_default_timezone_set('Asia/Kolkata');
		   $date3=date("Y-m-d h:i:s A", time());
		   $date4=date("Y-m-d", time());
         //$this->load->model('Bazar_Model');
        $this->load->model('Transaction_Model');
        $ticketId=$this->Transaction_Model->TicketNumber();
           $passbookData = array(
              'game_user_id'=>$id_editW,
              'tran_id'=>$ticketId.'_'.$id_editW,
              'datafrom'=>$id_editW,
              'datato'=>$admin_id_editW,
              'debit'=>$amtW,
              'credit'=>0,
              'closing'=>$userbalW,
              'description'=>$remarkW,
              'date'=>$date4,
              'modifiedby'=>(string)$_SESSION['username'],
  
          );
          
           $passbookData2 = array(
              'game_user_id'=>$admin_id_editW,
              'tran_id'=>$ticketId.'_'.$id_editW,
              'datafrom'=>$id_editW,
              'datato'=>$admin_id_editW,
              'debit'=>0,
              'credit'=>$amtW,
              'closing'=>$mybalW,
              'description'=>$remarkW,
              'date'=>$date4,
              'modifiedby'=>(string)$_SESSION['username'],
  
          );
          $this->db->insert('user_passbook',$passbookData);
          $this->db->insert('user_passbook',$passbookData2);
           $this->session->set_flashdata('message_name', 'Withdrawl done');
            redirect('Account/index');
        }else{
            $this->session->set_flashdata('message_danger', 'Withdrawl failed ! entered must be less than available balance');
            redirect('Account/index');
        }    
        }else{
            if($amtW<=$userW and  $amtW>0 ){
             $this->db->set('modifiedby',$_SESSION['username']);
             $this->db->set('creditrefrence',$mybalW);
             $this->db->where('game_user_id',$admin_id_editW);
             $this->db->update('game_user_account'); 
           
             $this->db->set('modifiedby',$_SESSION['username']);
             $this->db->set('creditrefrence', $userbalW);
             $this->db->where('game_user_id',$id_editW);
             $this->db->update('game_user_account'); 
             
             date_default_timezone_set('Asia/Kolkata');
		   $date3=date("Y-m-d h:i:s A", time());
		   $date4=date("Y-m-d", time());
         //$this->load->model('Bazar_Model');
        $this->load->model('Transaction_Model');
        $ticketId=$this->Transaction_Model->TicketNumber();
           $passbookData = array(
              'game_user_id'=>$id_editW,
              'tran_id'=>$ticketId.'_'.$id_editW,
              'datafrom'=>$id_editW,
              'datato'=>$admin_id_editW,
              'debit'=>$amtW,
              'credit'=>0,
              'closing'=>$userbalW,
              'description'=>$remarkW,
              'date'=>$date4,
              'modifiedby'=>(string)$_SESSION['username'],
  
          );
          
           $passbookData2 = array(
              'game_user_id'=>$admin_id_editW,
              'tran_id'=>$ticketId.'_'.$id_editW,
              'datafrom'=>$id_editW,
              'datato'=>$admin_id_editW,
              'debit'=>0,
              'credit'=>$amtW,
              'closing'=>$mybalW,
              'description'=>$remarkW,
              'date'=>$date4,
              'modifiedby'=>(string)$_SESSION['username'],
  
          );
          $this->db->insert('user_passbook',$passbookData);
          $this->db->insert('user_passbook',$passbookData2);
             $this->session->set_flashdata('message_name', 'Withdrawl done');
            redirect('Account/index');
        }else{
            $this->session->set_flashdata('message_danger', 'Withdrawl failed ! entered must be less than available balance');
            redirect('Account/index');
        } 
        }
        
        
           
        
      $this->session->set_flashdata('message_name', 'Withdrawl done successfully');
     redirect('Account/index');
    }
    redirect('Account/index');
    }
        
  }

   public function credit()
  {
    
    $creditsave=$this->input->post('creditsave');
    if(isset($creditsave)){
    $this->form_validation->set_rules('ocredit', 'New Credit', 'trim|required');
    $this->form_validation->set_rules('ncredit', 'old  Credit', 'trim|required');
        
    if ($this->form_validation->run() == TRUE) {
               $id=$this->input->post('id_edit');
               
              $ocredit=$this->input->post('ocredit');
              $ncredit=$this->input->post('ncredit');
               
              $this->db->set('exposurelimit',$ncredit);
              $this->db->set('modifiedby',$_SESSION['username']);
              $this->db->where('game_user_id',$id);
              $this->db->update('game_user_account');
              $this->session->set_flashdata('message_name', 'credit updated successfully');
     redirect('Account/index');
              
    }
     redirect('Account/index');
    }
     redirect('Account/index');
  }
  public function changepassword()
  {
    $changepassword=$this->input->post('changepassword');
    if(isset($changepassword)){
    $this->form_validation->set_rules('npassword', 'Password', 'trim|required');
    $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[npassword]');
        
    if ($this->form_validation->run() == TRUE) {
             
              $id=$this->input->post('id_edit');
              $password=$this->input->post('npassword');
              $cpassword=$this->input->post('cpassword');
        
          $this->db->set('password',md5($password));
           $this->db->set('modifiedby',$_SESSION['username']);
          
          $this->db->where('id',$id);
          $this->db->update('game_user_personal');
         $this->session->set_flashdata('message_name', 'password updated successfully');
        redirect('Account/index');
    }
     redirect('Account/index');
    }
     redirect('Account/index');    
  }
   public function getAccessLevel($userid){
      $this->db->where('game_user_id',$userid);
      $query = $this->db->get('game_user_account');
      $row2= $query->row();
      return  $row2->game_group_id;
  }
  
  public function getUserid($useridd){
      $accesstry=$this->getAccessLevel($useridd);
      
      $dataid=array();
      $dataid2=array();
      if($accesstry==5){
          $dataid[]=$useridd;
      }else if($accesstry==4){
          $this->db->where('createdby',$useridd);
          $query = $this->db->get('game_customer_createdby');
          foreach($query->result() as $row){
             $dataid[]=$row->userid;
          }
      }else if($accesstry==3){
         
          $this->db->where('createdby',$useridd);
          $query = $this->db->get('game_customer_createdby');
          $userdataid=array();
          foreach($query->result() as $row2){
          $userdataid[]=$row2->userid;
          }
        
          foreach($userdataid as $valid){
             if($this->getAccessLevel($valid)==4){
                  $this->db->where('createdby',$valid);
                    $query = $this->db->get('game_customer_createdby');
                    foreach($query->result() as $row3){
                       $dataid[]=$row3->userid;
                    }
             }
            
             
          }
        $dataid=array_merge($userdataid,$dataid);
        
         
      }
      
       $dataid=array_unique($dataid);
      
      return $dataid;
      
  }
  public function updateSearchStatus(){
     $id=$this->uri->segment(3);
    $status=$this->uri->segment(4);
     $data = array(
                 'searchField' => $status,
                 
            );

            $this->db->where('id', $id);
            $this->db->update('game_user_personal', $data);
            
            
             $this->session->set_flashdata('message_name', 'date updated successfully');
                
                redirect('Account/index');
  }
  
  public function changeDatestatus(){
      $changeDatestatus=$this->input->post('updateDate');
      if($changeDatestatus){
            $this->form_validation->set_rules('id_edit', 'id_edit', 'trim|required');
            $this->form_validation->set_rules('clientname', 'clientname', 'trim|required');
            $id_edit=$this->input->post('id_edit');
            $startdate=$this->input->post('startdate');
            $enddate=$this->input->post('enddate');
            
            $data = array(
                 'startDate' => $startdate,
                 'endDate' => $enddate,
            );

            $this->db->where('id', $id_edit);
            $this->db->update('game_user_personal', $data);
            
            
             $this->session->set_flashdata('message_name', 'date updated successfully');
                
                redirect('Account/index');
     }
  }
  public function changestatus()
  {
    $changeStatus=$this->input->post('changestatus');
    if($changeStatus){
         $this->form_validation->set_rules('id_edit', 'id_edit', 'trim|required');
         $this->form_validation->set_rules('clientname', 'clientname', 'trim|required');
        
            if ($this->form_validation->run() == TRUE) {
            $id_edit=$this->input->post('id_edit');
            $clientname=$this->input->post('clientname');
   
            $loginstatus=$this->input->post('loginstatus');
   
            $gamestatus=$this->input->post('gamestatus');
    
            $closestatus=$this->input->post('closestatus');
            $ids=$this->getUserid($id_edit);
            if($closestatus=='on'){
              
                $this->db->where('id',$id_edit);
                $this->db->delete('game_user_personal');
                
                 $this->db->where('game_user_id',$id_edit);
                $this->db->delete('game_user_commission');
                
                
                 
                 $this->db->where('game_user_id',$id_edit);
                $this->db->delete('game_user_bazar');
                
                $this->db->where('game_user_id',$id_edit);
                $this->db->delete('game_user_account');
                
                  $this->db->where('customer_id',$id_edit);
                $this->db->delete('game_tripple_pana');
              
                 $this->db->where('customer_id',$id_edit);
                $this->db->delete('game_ticket');
                   
                $this->db->where('customer_id',$id_edit);
                $this->db->delete('game_single_digit');
                 $this->db->where('userid',$id_edit);
                $this->db->delete('game_customer_createdby');
                 $this->db->where('customer_id',$id_edit);
                $this->db->delete('double_pana');
                   $this->db->where('coustomer_id',$id_edit);
                $this->db->delete('jodi');
                      $this->db->where('customer_id',$id_edit);
                $this->db->delete('single_pana');
                       $this->db->where('game_user_id',$id_edit);
                $this->db->delete('user_passbook');
                
                
                 
                 if($ids){
                $this->db->where_in('id',$ids);
           
                $this->db->delete('game_user_personal');
                 $this->db->where_in('game_user_id',$ids);
           
                $this->db->delete('game_user_commission');
                $this->db->where_in('game_user_id',$ids);
           
                $this->db->delete('game_user_bazar');
                
                
              
                
                
                $this->db->where_in('game_user_id',$ids);
           
                $this->db->delete('game_user_account');
                
                
             
                $this->db->where_in('customer_id',$ids);
           
                $this->db->delete('game_tripple_pana');
                
                
                  
                
                $this->db->where_in('customer_id',$ids);
           
                $this->db->delete('game_ticket');
                
                
                  
                $this->db->where_in('customer_id',$ids);
           
                $this->db->delete('game_single_digit');
                
             
                
                $this->db->where_in('userid',$ids);
           
                $this->db->delete('game_customer_createdby');
                
                
               
                
                
                $this->db->where_in('customer_id',$ids);
           
                $this->db->delete('double_pana');
                
                
               
                
                $this->db->where_in('coustomer_id',$ids);
           
                $this->db->delete('jodi');
                
                
             
                
                 $this->db->where_in('customer_id',$ids);
           
                $this->db->delete('single_pana');
                
                
          
                
                 $this->db->where_in('game_user_id',$ids);
           
                $this->db->delete('user_passbook');
                
                 }
         
                
                
                $this->session->set_flashdata('message_name', 'account deleted successfully');
                
                redirect('Account/index');
                
                
                
            }
            
            if($loginstatus=='on'){
                $loginstatus=1;
            }else{
                $loginstatus=0;
            }
            
            if($gamestatus=='on'){
                $gamestatus=1;
            }else{
                $gamestatus=0;
            }
            
            $data = array(
               'blocked_status' =>$loginstatus,
               'transaction_status' =>$gamestatus
            );
           $ids=$this->getUserid($id_edit);
           $this->db->where('id',$id_edit);
           
           $this->db->update('game_user_personal', $data);
           if($ids){
           $this->db->where_in('id',$ids);
           
           $this->db->update('game_user_personal', $data);
           }
           $this->session->set_flashdata('message_name', 'status updated successfully');
           redirect('Account/index');
           //$this->session->set_flashdata('message_name', 'status updated successfully');
       
            }
    }    
  
  }

  public function deleteUser() {
    $id_edit = $this->input->post('id');
    if($id_edit) {
      $data = array(
        'deleted_at' => date("Y-m-d h:i:s A", time()),
      );
      $personal_query = $this->db->query("select id from game_user_personal where id = $id_edit");
      if($personal_query->num_rows() > 0) {
        $this->db->where('id', $id_edit)->update('game_user_personal', $data);
      }
      $commission_query = $this->db->query("select game_user_id from game_user_commission where game_user_id = $id_edit");
      if($commission_query->num_rows() > 0) {
        $this->db->where('game_user_id',$id_edit)->update('game_user_commission', $data);
      }
      $u_bazar_query = $this->db->query("select game_user_id from game_user_bazar where game_user_id = $id_edit");
      if($u_bazar_query->num_rows() > 0) {
        $this->db->where('game_user_id',$id_edit)->update('game_user_bazar', $data);
      }
      $u_account_query = $this->db->query("select game_user_id from game_user_account where game_user_id = $id_edit");
      if($u_account_query->num_rows() > 0) {
        $this->db->where('game_user_id',$id_edit)->update('game_user_account', $data);
      }
      $tripple_pana_query = $this->db->query("select customer_id from game_tripple_pana where customer_id = $id_edit");
      if($tripple_pana_query->num_rows() > 0) {
        $this->db->where('customer_id',$id_edit)->update('game_tripple_pana', $data);
      }
    
      $game_ticket_query = $this->db->query("select customer_id from game_ticket where customer_id = $id_edit");
      if($game_ticket_query->num_rows() > 0) {
        $this->db->where('customer_id',$id_edit)->update('game_ticket', $data);
      }
      $single_digit_query = $this->db->query("select customer_id from game_single_digit where customer_id = $id_edit");
      if($single_digit_query->num_rows() > 0) {
        $this->db->where('customer_id',$id_edit)->update('game_single_digit', $data);
      }
      $customer_createdby_query = $this->db->query("select userid from game_customer_createdby where userid = $id_edit");
      if($customer_createdby_query->num_rows() > 0) {
        $this->db->where('userid',$id_edit)->update('game_customer_createdby', $data);
      }
      $double_pana_query = $this->db->query("select customer_id from double_pana where customer_id = $id_edit");
      if($double_pana_query->num_rows() > 0) {
        $this->db->where('customer_id',$id_edit)->update('double_pana', $data);
      }
      $jodi_query = $this->db->query("select coustomer_id from jodi where coustomer_id = $id_edit");
      if($jodi_query->num_rows() > 0) {
        $this->db->where('coustomer_id',$id_edit)->update('jodi', $data);
      }
      $single_pana_query = $this->db->query("select customer_id from single_pana where customer_id = $id_edit");
      if($single_pana_query->num_rows() > 0) {
        $this->db->where('customer_id',$id_edit)->update('single_pana', $data);
      }
      $user_passbook_query = $this->db->query("select game_user_id from user_passbook where game_user_id = $id_edit");
      if($user_passbook_query->num_rows() > 0) {
        $this->db->where('game_user_id',$id_edit)->update('user_passbook', $data);
      }
      echo 'ok';
    }
  }
}
