<?php

defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);


class GaneOpen extends CI_Controller{
	function __construct(){
		
	parent::__construct();
    $this->load->model('Requirment');
     $this->load->model('Admin_modal');
   $this->load->library(array('session'));	
	
	}
	public function index(){


	$this->load->view('adminarea/head');	
	$user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
	$this->load->view('adminarea/nav',$user);	
	$this->load->view('adminarea/home');
	$this->load->view('adminarea/footer');
	}
	
	public function getbazarshowmodal(){
		$id=$this->input->post('id');
		
		
		$data=array('id'=>$id);
		$this->load->helper('user_data_helper');
		$this->load->view('adminarea/bazarshow',$data);
		
		}
    public function createcustomer(){

$this->load->library('form_validation');

      $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|max_length[12]');
      $this->form_validation->set_rules('amount', 'amount', 'trim|required|min_length[1]|max_length[12]|numeric');
      //$this->form_validation->set_rules('contact', 'contact', 'trim|required|min_length[10]|max_length[10]|numeric');
      //$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[5]|max_length[50]');
      $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[4]|max_length[12]');
       $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[4]|max_length[12]');
      $this->form_validation->set_rules('cnf_password', 'cnf_password', 'trim|required|min_length[4]|max_length[12]|matches[password]');
 if ($this->form_validation->run() == true)
                {
                         $name=$this->input->post('name');
                         $amount=$this->input->post('amount');
                          $contact=$this->input->post('contact');
                         //$address=$this->input->post('address');
                         $username=$this->input->post('username');
                         $password=$this->input->post('password');
                        $rowcount= $this->Admin_modal->checkusername($username);
               
               if( $rowcount==0){
                   
                   $data=array('name' =>$name,
                                'amount'=> $amount,
                                'contact'=>$contact,
                                'address'=>'test',
                                'status'=>1,
                                'username'=>$username,
                                'password'=>md5($password),
                                'mode'=>2,
                                'madeby'=>'admin',
                               );

                  $result= $this->db->insert('users',$data);
                  if($result){
                    redirect('Admin/customerrecord');
                  }

               }      


                }
	$this->load->view('adminarea/head');	
	$user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
	$this->load->view('adminarea/nav',$user);	
	$this->load->view('adminarea/createcustomer');
	$this->load->view('adminarea/footer');
	}
		public function creditUser(){
	   $this->load->library('form_validation');

      $this->form_validation->set_rules('credit', 'credit', 'trim|required');
     // $this->form_validation->set_rules('amount', 'amount', 'trim|required|min_length[1]|max_length[12]|numeric');
      //$this->form_validation->set_rules('contact', 'contact', 'trim|required|min_length[10]|max_length[10]|numeric');
      //$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[5]|max_length[50]');
     
 if ($this->form_validation->run() == true)
                {
                         $credit=$this->input->post('credit');
                         //$amount=$this->input->post('amount');
                         // $contact=$this->input->post('contact');
                          // $status=$this->input->post('status');
                        
                   
                   $data=array('amount' =>$credit );

                   $id_edit=$this->input->post('id_edit');
		    
		            $this->db->where('id',$id_edit);
                  $result= $this->db->update('users',$data);
                  if($result){
                    redirect('Admin/customerrecord');
                  }

                   


                } 
	}
	public function updateUser(){
	   $this->load->library('form_validation');

      $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|max_length[12]');
     // $this->form_validation->set_rules('amount', 'amount', 'trim|required|min_length[1]|max_length[12]|numeric');
      //$this->form_validation->set_rules('contact', 'contact', 'trim|required|min_length[10]|max_length[10]|numeric');
      //$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[5]|max_length[50]');
     
 if ($this->form_validation->run() == true)
                {
                         $name=$this->input->post('name');
                         //$amount=$this->input->post('amount');
                          $contact=$this->input->post('contact');
                           $status=$this->input->post('status');
                        
                   
                   $data=array('name' =>$name,
                               
                                'contact'=>$contact,
                                'address'=>'test',
                                'status'=>$status,
                                
                               );

                   $id_edit=$this->input->post('id_edit');
		    
		            $this->db->where('id',$id_edit);
                  $result= $this->db->update('users',$data);
                  if($result){
                    redirect('Admin/customerrecord');
                  }

                   


                } 
	}
	
	public function changepass(){
	    $this->load->library('form_validation');

     
       $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[4]|max_length[12]');
      $this->form_validation->set_rules('cnf_password', 'cnf_password', 'trim|required|min_length[4]|max_length[12]|matches[password]');
 if ($this->form_validation->run() == true)
                {
                       
                         $password=$this->input->post('password');
                     
                   
                   $data=array(
                                'password'=>md5($password)
                               );
                  $id_edit=$this->input->post('id_edit');
		    
		            $this->db->where('id',$id_edit);
                  $result= $this->db->update('users',$data);
                  if($result){
                    redirect('Admin/customerrecord');
                  }

                     


                }
	    
	}
	public function customerDelete(){
	    $sub_submit=$this->input->post('deleteuser');
	if(isset($sub_submit)){
		     
		    $id_edit=$this->input->post('id_edit');
		    
		     $this->db->where('id',$id_edit);
		    $query= $this->db->get('users');

            $row = $query->row();
            
            $customer=$row->username;
		    
		    //echo  $customer;
		    //exit;
		    $this->db->where('customer',$customer);
            $this->db->delete('com_tbl');
           
		    $this->db->where('id',$id_edit);
             $result= $this->db->delete('users');
            
           
          
            if($result){
                    redirect('Admin/customerrecord');
            }
		    
		} 
	    
	}
	
	public function deleteBazar(){
	     $sub_submit=$this->input->post('deleteuser');
	if(isset($sub_submit)){
		     
		    $id_edit=$this->input->post('id_edit');
		    
		    $this->db->where('id',$id_edit);
            $this->db->delete('bazar');
	    
	   redirect('admin/bazarrecord');
	   
	}
	}
	
	public function updateCom(){
	    $this->load->library('form_validation');

      
      $this->form_validation->set_rules('acomm', 'acomm', 'trim|required|min_length[1]|max_length[12]|numeric');
      $this->form_validation->set_rules('pcomm', 'pcomm', 'trim|required|min_length[1]|max_length[12]|numeric');
      $this->form_validation->set_rules('cpcomm', 'cpcomm', 'trim|required|min_length[1]|max_length[12]|numeric');
     
      $this->form_validation->set_rules('part', 'part', 'trim|required|min_length[1]|max_length[12]|numeric');
         $this->form_validation->set_rules('sindigrate', 'sindigrate', 'trim|required|min_length[1]|max_length[12]|numeric');
        $this->form_validation->set_rules('sinpanarate', 'sinpanarate', 'trim|required|min_length[1]|max_length[12]|numeric');
        $this->form_validation->set_rules('dblpanarate', 'dblpanarate', 'trim|required|min_length[1]|max_length[12]|numeric');
        $this->form_validation->set_rules('trialrate', 'trialrate', 'trim|required|min_length[1]|max_length[12]|numeric');
        $this->form_validation->set_rules('grouprate', 'grouprate', 'trim|required|min_length[1]|max_length[12]|numeric');
        $this->form_validation->set_rules('grouprate2', 'grouprate2', 'trim|required|min_length[1]|max_length[12]|numeric');
        $this->form_validation->set_rules('jodirate', 'jodirate', 'trim|required|min_length[1]|max_length[12]|numeric');

if ($this->form_validation->run() == true)
                {
                         $customer=$this->input->post('username');
                         $acom=$this->input->post('acomm');
                         $pcom=$this->input->post('pcomm');
                         $cpcom=$this->input->post('cpcomm');
                         $cdpcomm=$this->input->post('cdpcomm');
                         $part=$this->input->post('part');
                         $sindigrate=$this->input->post('sindigrate');
                         $sinpanarate=$this->input->post('sinpanarate');
                         $dblpanarate=$this->input->post('dblpanarate');
                         $trialrate=$this->input->post('trialrate');
                         $grouprate=$this->input->post('grouprate');
                         $grouprate2=$this->input->post('grouprate2');
                          $jodirate=$this->input->post('jodirate');
                        //$rowcount= $this->Admin_modal->checkusername2($customer);
               
              // if( $rowcount==0){
                   
                   $data=array(
                                'acom'=> $acom,
                                'pcom'=>$pcom,
                                'cpcom'=>$cpcom,
                                'cdpcomm'=>$cdpcomm,
                                'part'=>$part,
                                'sindig'=>$sindigrate,
                                'sinpan'=>$sinpanarate,
                                'douan'=>$dblpanarate,
                                'trapan'=>$trialrate,
                                'gropan'=>$grouprate,
                                'gropan2'=>$grouprate2,
                                'jodig'=>$jodirate,
                                'mode'=>0,
                                'comby'=>'admin'

                               );
                               
                   $id_edit=$this->input->post('id_edit');
		    
		           $this->db->where('id',$id_edit);
                  $result= $this->db->update('com_tbl',$data);
                  if($result){
                    redirect('Admin/comissionrecord');
                  }

              // }      


                }
	}
	
		public function comDelete(){
	     $sub_submit=$this->input->post('deleteuser');
	if(isset($sub_submit)){
		     
		    $id_edit=$this->input->post('id_edit');
		    
		    $this->db->where('id',$id_edit);
            $this->db->delete('com_tbl');
	    
	   redirect('admin/comissionrecord');
	   
	}
	}
    public function updateBazar(){
        $submit=$this->input->post('saveBazar');
     if(isset($submit)){
       $this->load->library('form_validation');
       $this->form_validation->set_rules('title', 'title', 'required');
       $this->form_validation->set_rules('opentime', 'opentime', 'required');
        $this->form_validation->set_rules('cate', 'category', 'required');
        $this->form_validation->set_rules('weekdays','weekdays','required');
        if ($this->form_validation->run() == TRUE)
                {
                   $data=array(
                    'bazar_name'=>$this->input->post('title'),
                    'time'=>$this->input->post('opentime'),
                    'category'=>$this->input->post('cate'),
                    'days'=>$this->input->post('weekdays'),
                    'status'=>1,

                 );
                    $id_edit=$this->input->post('id_edit');
		    
		            $this->db->where('id',$id_edit);
                   
                   $res=$this->db->update('bazar',$data);
                
                  if($res){
                         
                         redirect('Admin/bazarrecord');
                  }else{

                    redirect('Admin/createbazar');

                  }
                }
    }
    }
    


	public function customerrecord(){


	$this->load->view('adminarea/head');	
	$user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
	$this->load->view('adminarea/nav',$user);
	$mode =2;
    $this->load->model('Admin_modal', 'adminuser');
    $data['customerRecord'] = $this->adminuser->getuser($mode);
    $this->load->view('adminarea/customerrecord',$data);
	$this->load->view('adminarea/footer');
	}

	public function partpayment(){
		date_default_timezone_set('Asia/kolkata');
    $todate=date('Y-m-d H:i:s',time());
		$sub_submit=$this->input->post('username');
		if(isset($sub_submit)){
			
			$username=$this->input->post('username');
			$previousbal=$this->input->post('prevbal');
			$expense=$this->input->post('expense');
			$paid=$this->input->post('paid');
			$recive=$this->input->post('recive');
			$finalamt=$this->input->post('finalamt');
			
			
			$data=array(
			
			'userid'=>$this->input->post('username'),
			'PREVIOUSBAL'=>$this->input->post('prevbal'),
			'expense'=>$this->input->post('expense'),
			'paid'=>$this->input->post('paid'),
			'recive'=>$this->input->post('recive'),
			'finalamt'=>$this->input->post('finalamt'),
			'date'=>$todate
			);
			
			$res=$this->db->insert('part_payment',$data);
		}
		
		
		
	$user['h']=$this->Admin_modal->getcustomer(2);	
	$this->load->view('adminarea/head');	
	$user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
	$this->load->view('adminarea/nav',$user);
	
    $this->load->view('adminarea/partpayment');
	$this->load->view('adminarea/footer');
		
		
	}
	
	
	public function getpartdata(){
		
$id=$this->input->post('id');
		
		
		$data=array('id'=>$id);
		$this->load->helper('user_data_helper');
		$this->load->view('adminarea/partdata',$data);
		
	}
public function grouppanadata(){
$client_id=$_GET['name'];
        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
       
        $this->load->model('Admin_modal', 'adminuser');
        $this->load->model('Requirment');
        $bazarresult=$this->Requirment->getBazarTime();
        $bazz=$bazarresult->row();
        $bazar=$bazz->bazar_name; 
        $category=$bazz->category;
        $PayAjaxData = $this->Requirment->getgrpdata($bazar, $category,$client_id);

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;

foreach ($result as $row)
{
 
   $responce->rows[$i]['id']=$row->id;
            $responce->rows[$i]['cell']=array($row->customer_id,$row->date,$row->bazar,
                $row->type, $row->game_name,$row->aakda_no,$row->amount,$row->total_amount);
  $i++;
}
echo json_encode($responce);  
}
public function grouppanadata2(){
$client_id=$_GET['name'];
        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
       
        $this->load->model('Admin_modal', 'adminuser');
        $this->load->model('Requirment');
        $bazarresult=$this->Requirment->getBazarTime();
        $bazz=$bazarresult->row();
        $bazar=$bazz->bazar_name; 
        $category=$bazz->category;
        $PayAjaxData = $this->Requirment->getgrpdata2($bazar, $category,$client_id);

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;

foreach ($result as $row)
{
 
   $responce->rows[$i]['id']=$row->id;
            $responce->rows[$i]['cell']=array($row->customer_id,$row->date,$row->bazar,
                $row->type, $row->game_name,$row->aakda_no,$row->amount,$row->total_amount);
  $i++;
}
echo json_encode($responce);  
}
public function custdata(){

        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
        $mode =2;
        $this->load->model('Admin_modal', 'adminuser');
        $PayAjaxData = $this->adminuser->getuser($mode);

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;
foreach ($result as $row)
{
	$status=($row->status==1 ? 'active' :'deactive');
	 $responce->rows[$i]['id']=$row->id;
            $responce->rows[$i]['cell']=array($row->name,$row->amount,
                $row->contact,$status,$row->username);
	$i++;
}
echo json_encode($responce);


		
}
 


    public function comissionrecord(){

$this->load->model('Admin_modal', 'adminuser');
        $data['customerCommissionRecord'] = $this->adminuser->getcom();
	$this->load->view('adminarea/head');	
	$user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
	$this->load->view('adminarea/nav',$user);
	
    $this->load->view('adminarea/comissionrecord',$data);
	$this->load->view('adminarea/footer');
	}  

public function comdata(){

        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
       
        $this->load->model('Admin_modal', 'adminuser');
        $PayAjaxData = $this->adminuser->getcom();

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;
foreach ($result as $row)
{
 
   $responce->rows[$i]['id']=$row->id;
            $responce->rows[$i]['cell']=array($row->customer,$row->acom,
                $row->pcom, $row->cpcom,$row->cdpcomm,$row->part,$row->sindig,$row->sinpan,$row->douan,$row->trapan,$row->gropan,$row->gropan2,$row->jodig);
  $i++;
}
echo json_encode($responce);


    
}
public function partdata(){

        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
       
        $this->load->model('Admin_modal', 'adminuser');
        $PayAjaxData = $this->adminuser->getpart();

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;
foreach ($result as $row)
{
 
   $responce->rows[$i]['id']=$row->id;
            $responce->rows[$i]['cell']=array($row->userid,$row->PREVIOUSBAL,
                $row->expense, $row->paid,$row->recive,$row->finalamt,$row->date);
  $i++;
}
echo json_encode($responce);


    
}

public function comUpdate()
    {
            $id= $this->input->post('id');
           


           // $cust = $this->input->post('cust');


            $a_com = $this->input->post('a_com');
            $p_com = $this->input->post('p_com');
            $c_s_com = $this->input->post('c_s_com');
            $c_d_com = $this->input->post('c_d_com');
            $part = $this->input->post('part');
            $a_rate = $this->input->post('a_rate');
            $s_p_rate = $this->input->post('s_p_rate');
            $d_p_rate = $this->input->post('d_p_rate');
            $trail = $this->input->post('trail');
            $c_s_rate = $this->input->post('c_s_rate');
            
            $c_d_rate = $this->input->post('c_d_rate');
            $J_rate=$this->input->post('J_rate');
           
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('com_tbl', array('acom'=>$a_com,'pcom'=>$p_com,'cpcom'=>$c_s_com,'cdpcomm'=>$c_d_com,'part'=>$part,'sindig'=>$a_rate,'sinpan'=>$s_p_rate,'douan'=>$d_p_rate,'trapan'=>$trail,'gropan'=>$c_s_rate,'gropan2'=>$c_d_rate,'jodig'=>$J_rate));

           } 
		   
		   public function partUpdate()
    {
            $id= $this->input->post('id');
           


           // $cust = $this->input->post('cust');


            $a_com = $this->input->post('a_com');
            $p_com = $this->input->post('p_com');
            $c_s_com = $this->input->post('c_s_com');
            $c_d_com = $this->input->post('c_d_com');
            $part = $this->input->post('part');
            $a_rate = $this->input->post('a_rate');
            
           
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('part_payment', array('PREVIOUSBAL'=>$a_com,'expense'=>$p_com,'paid'=>$c_s_com,'recive'=>$c_d_com,'finalamt'=>$part));

           } 
	public function setcommission(){
$this->load->library('form_validation');

      
      $this->form_validation->set_rules('acomm', 'acomm', 'trim|required|min_length[1]|max_length[12]|numeric');
      $this->form_validation->set_rules('pcomm', 'pcomm', 'trim|required|min_length[1]|max_length[12]|numeric');
      $this->form_validation->set_rules('cpcomm', 'cpcomm', 'trim|required|min_length[1]|max_length[12]|numeric');
     
      $this->form_validation->set_rules('part', 'part', 'trim|required|min_length[1]|max_length[12]|numeric');
         $this->form_validation->set_rules('sindigrate', 'sindigrate', 'trim|required|min_length[1]|max_length[12]|numeric');
        $this->form_validation->set_rules('sinpanarate', 'sinpanarate', 'trim|required|min_length[1]|max_length[12]|numeric');
        $this->form_validation->set_rules('dblpanarate', 'dblpanarate', 'trim|required|min_length[1]|max_length[12]|numeric');
        $this->form_validation->set_rules('trialrate', 'trialrate', 'trim|required|min_length[1]|max_length[12]|numeric');
        $this->form_validation->set_rules('grouprate', 'grouprate', 'trim|required|min_length[1]|max_length[12]|numeric');
        $this->form_validation->set_rules('grouprate2', 'grouprate2', 'trim|required|min_length[1]|max_length[12]|numeric');
        $this->form_validation->set_rules('jodirate', 'jodirate', 'trim|required|min_length[1]|max_length[12]|numeric');

if ($this->form_validation->run() == true)
                {
                         $customer=$this->input->post('username');
                         $acom=$this->input->post('acomm');
                         $pcom=$this->input->post('pcomm');
                         $cpcom=$this->input->post('cpcomm');
                         $cdpcomm=$this->input->post('cdpcomm');
                         $part=$this->input->post('part');
                         $sindigrate=$this->input->post('sindigrate');
                         $sinpanarate=$this->input->post('sinpanarate');
                         $dblpanarate=$this->input->post('dblpanarate');
                         $trialrate=$this->input->post('trialrate');
                         $grouprate=$this->input->post('grouprate');
                         $grouprate2=$this->input->post('grouprate2');
                          $jodirate=$this->input->post('jodirate');
                        $rowcount= $this->Admin_modal->checkusername2($customer);
               
               if( $rowcount==0){
                   
                   $data=array('customer'=>$customer,
                                'acom'=> $acom,
                                'pcom'=>$pcom,
                                'cpcom'=>$cpcom,
                                'cdpcomm'=>$cdpcomm,
                                'part'=>$part,
                                'sindig'=>$sindigrate,
                                'sinpan'=>$sinpanarate,
                                'douan'=>$dblpanarate,
                                'trapan'=>$trialrate,
                                'gropan'=>$grouprate,
                                'gropan2'=>$grouprate2,
                                'jodig'=>$jodirate,
                                'mode'=>0,
                                'comby'=>'admin'

                               );

                  $result= $this->db->insert('com_tbl',$data);
                  if($result){
                    redirect('Admin/comissionrecord');
                  }

               }      


                }



	$this->load->view('adminarea/head');	
	$user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
	$this->load->view('adminarea/nav',$user);	
  $res['h']=$this->Admin_modal->getcustomer(2);
	$this->load->view('adminarea/setcommission',$res);
	$this->load->view('adminarea/footer');
	}
  public function createbazar(){
  $submit=$this->input->post('submit');
  if(isset($submit)){
       $this->load->library('form_validation');
       $this->form_validation->set_rules('title', 'title', 'required');
       $this->form_validation->set_rules('opentime', 'opentime', 'required');
        $this->form_validation->set_rules('cate', 'category', 'required');
        $this->form_validation->set_rules('weekdays','weekdays','required');
        if ($this->form_validation->run() == TRUE)
                {
                   $data=array(
                    'bazar_name'=>$this->input->post('title'),
                    'time'=>$this->input->post('opentime'),
                    'category'=>$this->input->post('cate'),
                    'days'=>$this->input->post('weekdays'),
                    'status'=>1,

                 );

                   $res=$this->db->insert('bazar',$data);
                
                  if($res){
                         
                         redirect('Admin/bazarrecord');
                  }else{

                    redirect('Admin/createbazar');

                  }
                }
              
  }

  $this->load->view('adminarea/head');  
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user); 
  $this->load->view('adminarea/createbazar');
  $this->load->view('adminarea/footer');
  }
  public function bazardata(){

        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
       
        $this->load->model('Admin_modal', 'adminuser');
        $PayAjaxData = $this->adminuser->bazarrecorddata();

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;

foreach ($result as $row)
{
 if($row->status==1){
              
              $status='active';
            }else{
              $status='deactive';
            }
   $responce->rows[$i]['id']=$row->id;
            $responce->rows[$i]['cell']=array($row->bazar_name,$row->time,
                $row->category, $row->days,$status);
  $i++;
}
echo json_encode($responce);


    
}
public function bazarUpdate()
    {
            $id= $this->input->post('id');
           


            $bazar = $this->input->post('bazar');


            $time = $this->input->post('time');
            $time=date('H:i:s',strtotime($time));
            $cat = $this->input->post('cat');
            $days = $this->input->post('days');
            $Status = $this->input->post('status');
            if($Status=='active'){
              
              $status=1;
            }else if($Status=='deactive'){
              $status=0;
            }
            
           
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('bazar', array('bazar_name'=>$bazar,'time'=>$time,'category'=>$cat,'status'=>$status,'days'=>$days));

           } 
  public function bazarrecord(){
        $this->load->model('Admin_modal', 'adminuser');
        $data['bazarRecord'] = $this->adminuser->bazarrecorddata();


  $this->load->view('adminarea/head');  
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user); 
  $this->load->view('adminarea/bazarrecord',$data);
  $this->load->view('adminarea/footer');
  }
   public function resultchart(){


  $this->load->view('adminarea/head');  
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user); 

  $this->load->view('adminarea/resultchart');
  $this->load->view('adminarea/footer');
  }
  public function resultdata(){

        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
       
        $this->load->model('Admin_modal', 'adminuser');
        $PayAjaxData = $this->adminuser->resultrecorddata();

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;

foreach ($result as $row)
{
 
   $responce->rows[$i]['id']=$row->id;
            $responce->rows[$i]['cell']=array($row->date,$row->game_name,
                $row->cat_name, $row->panano,$row->aakda);
  $i++;
}
echo json_encode($responce);


    
}
public function resultUpdate()
    {
            $id= $this->input->post('id');
           


            $date = $this->input->post('date');

            $date=date('Y-m-d H:i:s',strtotime($date));
            $game_name = $this->input->post('game_name');
         
            $cat_name = $this->input->post('cat_name');
            $panano = $this->input->post('panano');
            $aakda = $this->input->post('aakda');
            
           
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('result_tbl', array('date'=>$date,'game_name'=>$game_name,'cat_name'=>$cat_name,'panano'=>$panano,'aakda'=>$aakda));

           } 
  public function openresult(){

    $submit=$this->input->post('result_submit');
    date_default_timezone_set('Asia/kolkata');
    $date3=date('Y-m-d h:i:s',time());

               $this->load->library('form_validation');
               $this->form_validation->set_rules('date', 'date', 'required');
               $this->form_validation->set_rules('category', 'category', 'required');
               $this->form_validation->set_rules('type', 'type', 'required');
               $this->form_validation->set_rules('akdnumber', 'pana number', 'trim|required|min_length[3]|max_length[3]');

                if ($this->form_validation->run() == TRUE)
                {
                        $date=$this->input->post('date');
                        $category=$this->input->post('category');
                        $type=$this->input->post('type');
                        $number=$this->input->post('akdnumber');
                        $date=date('Y-m-d',strtotime($date));
                        $aakda=str_split($number);
                        $aakda=array_sum($aakda);
                        $aakda=str_split($aakda);
                        if(count($aakda)==1){
                          $aakda= $aakda[0];
                        }else{
                          $aakda= $aakda[1];
                        }

                    switch($type) {
                          case 'open':
                            $this->load->model('result_calculation');
                             $this->load->model('Requirment');
                            $singlepana=array(
	 128,129,120,130,140,123,124,125,126,127,
     290,246,247,248,258,259,278,279,289,280,
     235,579,589,670,680,690,457,467,468,478,
     569,137,138,139,149,159,150,160,134,135,
     380,345,256,267,268,340,350,360,370,678,
     679,689,789,780,790,890,567,568,578,146,
     147,148,158,168,169,179,170,180,145,470,
     390,346,347,348,349,359,369,379,389,236,
     156,157,167,230,178,250,189,270,190,489,
     480,490,356,357,358,368,378,450,460,245,
     237,238,239,249,240,269,260,234,136,560,
     570,580,590,456,367,458,459,469,479,257);


                            $doublepana=array(100,200,300,400,500,600,700,800,900,226,
							                  335,336,355,338,339,448,223,288,225,668,
											  344,499,445,446,366,466,377,440,388,488,
											  119,110,166,112,113,114,115,116,117,118,
											  399,660,599,455,447,449,477,556,449,677,
											  667,559,334,155,228,229,220,122,277,133,
											  224,144,299,588,688,779,699,799,880,557,
											  558,577,550,255,337,266,177,330,188,788,
											  233,199,244,669,778,770,889,899,566,990,
											  );

                            $triplepana=array(111,222,333,444,555,666,777,888,999,000);

                         if(in_array($number,$singlepana)){
							
                                       $this->db->select('username');
                                       $this->db->from('users');
                                       $this->db->where('mode',2);
                          $cust_user_id=$this->db->get();
$total_amount=0;
foreach($cust_user_id->result() as $rower){
                          $customer_id= $rower->username;
 
                        $amount1=$this->result_calculation->singlepanaamount($customer_id,$category,$type,$number,$date);

						
                         $amount2=$this->result_calculation->singlegrouppanaamount($customer_id,$category,$type,$number,$date);

                         $amount3=$this->result_calculation->aakdaamount($customer_id,$category,$type,$aakda,$date);
                  
                       $user_com= $this->Requirment->getComission($customer_id);

foreach($user_com->result() as $row){

$acom=$row->acom;
$pcom=$row->pcom;
$cpcom=$row->cpcom;
$cdpcomm=$row->cdpcomm;
$part=$row->part;
$akdarate=$row->sindig;
$singlepanarate=$row->sinpan;
$doublepanarate=$row->douan;
$triplepanarate=$row->trapan;
$groupsinglepanarate=$row->gropan;
$groupdoublepanarate=$row->gropan2;
$jodirate=$row->jodig;
}


$total_amount=$amount1*$singlepanarate+$amount2*$groupsinglepanarate+$amount3*$akdarate;



$query= $this->Requirment->get_user_data_login($customer_id);
$userdetail= $query->row();

$tranid=rand(111111,999999);

         $data1=array(
         'cust_id'=>(string)$customer_id,
         'previous_bal'=>$userdetail->amount,
         'widral_amt'=>0,
         'credit_amt'=>$total_amount,
         'final_bal'=>$userdetail->amount+$total_amount,
         'remark'=>'for'.$category.'-'.$type.'win',
         'tran_time'=>(string)$date3,
         'tran_id'=>$tranid
         ); 

         $data2=array('customerid'=>$customer_id,
                      'final_bal'=>$userdetail->amount+$total_amount
                    );
          $data3=array(
'game_name'=>$category,
'cat_name'=>$type,
'time'=>$date3,
'panano'=>$number,
'aakda'=>$aakda,
'aakda_rate'=>$akdarate,
'akdaa_amt'=>$amount3,
'aakda_amt_win'=>$amount3*$akdarate,
'single_pana'=>$number,
'single_pana_rate'=>$singlepanarate,
'single_pana_amt'=>$amount1,
'single_pana_win_amt'=>$amount1*$singlepanarate,
'double_pana'=>0,
'double_pana_rate'=>0,
'double_pana_amt'=>0,
'double_pana_win_amt'=>0,
'chart_single_pana'=>$number,
'chart_single_pana_rate'=>$groupsinglepanarate,
'chart_single_pana_amt'=>$amount2,
'chart_single_pana_win_amt'=>$amount2*$groupsinglepanarate,
'chart_double_pana'=>0,
'chart_double_pana_rate'=>0,
'chart_double_pana_amt'=>0,
'chart_double_pana_win_amt'=>0,
'triple'=>0,
'triple_rate'=>0,
'triple_amt'=>0,
'triple_win_amt'=>0,
'jodi'=>0,
'jodi_rate'=>0,
'jodi_amt'=>0,
'jodi_win_amt'=>0,
'win_amount'=>$total_amount,
'cust_id'=>$customer_id,
'tran_id'=>$tranid
);

if($total_amount>0){
$result=$this->Requirment->passbookupdate($data1,$data2);


$this->db->insert('win_rec_tbl',$data3);

}
}
                         }else if(in_array($number,$doublepana)){
                                   $this->db->select('username');
                                       $this->db->from('users');
                                       $this->db->where('mode',2);
                          $cust_user_id=$this->db->get();
$total_amount=0;
foreach($cust_user_id->result() as $rowty ){
                          $customer_id= $rowty->username;

                        $amount1=$this->result_calculation->doublepanaamount($customer_id,$category,$type,$number,$date);

                         $amount2=$this->result_calculation->doublegrouppanaamount($customer_id,$category,$type,$number,$date);

                         $amount3=$this->result_calculation->aakdaamount($customer_id,$category,$type,$aakda,$date);

                       $user_com= $this->Requirment->getComission($customer_id);

foreach($user_com->result() as $row){

$acom=$row->acom;
$pcom=$row->pcom;
$cpcom=$row->cpcom;
$cdpcomm=$row->cdpcomm;
$part=$row->part;
$akdarate=$row->sindig;
$singlepanarate=$row->sinpan;
$doublepanarate=$row->douan;
$triplepanarate=$row->trapan;
$groupsinglepanarate=$row->gropan;
$groupdoublepanarate=$row->gropan2;
$jodirate=$row->jodig;
}


$total_amount=$amount1*$doublepanarate+$amount2*$groupdoublepanarate+$amount3*$akdarate;



$query= $this->Requirment->get_user_data_login($customer_id);
$userdetail= $query->row();

$tranid=rand(111111,999999);

         $data1=array(
         'cust_id'=>(string)$customer_id,
         'previous_bal'=>$userdetail->amount,
         'widral_amt'=>0,
         'credit_amt'=>$total_amount,
         'final_bal'=>$userdetail->amount+$total_amount,
         'remark'=>'for'.$category.'-'.$type.'win',
         'tran_time'=>(string)$date3,
         'tran_id'=>$tranid
         ); 

         $data2=array('customerid'=>$customer_id,
                      'final_bal'=>$userdetail->amount+$total_amount
                    );
         
		 $data3=array(
'game_name'=>$category,
'cat_name'=>$type,
'time'=>$date3,
'panano'=>$number,
'aakda'=>$aakda,
'aakda_rate'=>$akdarate,
'akdaa_amt'=>$amount3,
'aakda_amt_win'=>$amount3*$akdarate,
'single_pana'=>0,
'single_pana_rate'=>0,
'single_pana_amt'=>0,
'single_pana_win_amt'=>0,
'double_pana'=>$number,
'double_pana_rate'=>$doublepanarate,
'double_pana_amt'=>$amount1,
'double_pana_win_amt'=>$amount1*$doublepanarate,
'chart_single_pana'=>0,
'chart_single_pana_rate'=>0,
'chart_single_pana_amt'=>0,
'chart_single_pana_win_amt'=>0,
'chart_double_pana'=>$number,
'chart_double_pana_rate'=>$groupdoublepanarate,
'chart_double_pana_amt'=>$amount2,
'chart_double_pana_win_amt'=>$amount2*$groupdoublepanarate,
'triple'=>0,
'triple_rate'=>0,
'triple_amt'=>0,
'triple_win_amt'=>0,
'jodi'=>0,
'jodi_rate'=>0,
'jodi_amt'=>0,
'jodi_win_amt'=>0,
'win_amount'=>$total_amount,
'cust_id'=>$customer_id,
'tran_id'=>$tranid
);

if($total_amount>0){
$result=$this->Requirment->passbookupdate($data1,$data2);


$this->db->insert('win_rec_tbl',$data3);

}
}


                         }else if(in_array($number,$triplepana)){

                                     $this->db->select('username');
                                       $this->db->from('users');
                                       $this->db->where('mode',2);
                          $cust_user_id=$this->db->get();
$total_amount=0;
foreach($cust_user_id->result() as $rowui ){
                          $customer_id= $rowui->username;

                        $amount1=$this->result_calculation->triplepanaamount($customer_id,$category,$type,$number,$date);

                        

                         $amount3=$this->result_calculation->aakdaamount($customer_id,$category,$type,$aakda,$date);

                       $user_com= $this->Requirment->getComission($customer_id);

foreach($user_com->result() as $row){

$acom=$row->acom;
$pcom=$row->pcom;
$cpcom=$row->cpcom;
$cdpcomm=$row->cdpcomm;
$part=$row->part;
$akdarate=$row->sindig;
$singlepanarate=$row->sinpan;
$doublepanarate=$row->douan;
$triplepanarate=$row->trapan;
$groupsinglepanarate=$row->gropan;
$groupdoublepanarate=$row->gropan2;
$jodirate=$row->jodig;
}


$total_amount=$amount1*$triplepanarate+$amount3*$akdarate;



$query= $this->Requirment->get_user_data_login($customer_id);
$userdetail= $query->row();

$tranid=rand(111111,999999);

         $data1=array(
         'cust_id'=>(string)$customer_id,
         'previous_bal'=>$userdetail->amount,
         'widral_amt'=>0,
         'credit_amt'=>$total_amount,
         'final_bal'=>$userdetail->amount+$total_amount,
         'remark'=>'for'.$category.'-'.$type.'win',
         'tran_time'=>(string)$date3,
         'tran_id'=>$tranid
         ); 

         $data2=array('customerid'=>$customer_id,
                      'final_bal'=>$userdetail->amount+$total_amount
                    );
         $data3=array(
'game_name'=>$category,
'cat_name'=>$type,
'time'=>$date3,
'panano'=>$number,
'aakda'=>$aakda,
'aakda_rate'=>$akdarate,
'akdaa_amt'=>$amount3,
'aakda_amt_win'=>$amount3*$akdarate,
'single_pana'=>$number,
'single_pana_rate'=>0,
'single_pana_amt'=>0,
'single_pana_win_amt'=>0,
'double_pana'=>0,
'double_pana_rate'=>0,
'double_pana_amt'=>0,
'double_pana_win_amt'=>0,
'chart_single_pana'=>0,
'chart_single_pana_rate'=>0,
'chart_single_pana_amt'=>0,
'chart_single_pana_win_amt'=>0,
'chart_double_pana'=>0,
'chart_double_pana_rate'=>0,
'chart_double_pana_amt'=>0,
'chart_double_pana_win_amt'=>0,
'triple'=>$number,
'triple_rate'=>$triplepanarate,
'triple_amt'=>$amount1,
'triple_win_amt'=>$amount1*$triplepanarate,
'jodi'=>0,
'jodi_rate'=>0,
'jodi_amt'=>0,
'jodi_win_amt'=>0,
'win_amount'=>$total_amount,
'cust_id'=>$customer_id,
'tran_id'=>$tranid
);

if($total_amount>0){
$result=$this->Requirment->passbookupdate($data1,$data2);


$this->db->insert('win_rec_tbl',$data3);

}
}

                         }


                            break;

                           case 'close':
                           $this->load->model('result_calculation');
                             $this->load->model('Requirment');
                            $singlepana=array(
	 128,129,120,130,140,123,124,125,126,127,
     290,246,247,248,258,259,278,279,289,280,
     235,579,589,670,680,690,457,467,468,478,
     569,137,138,139,149,159,150,160,134,135,
     380,345,256,267,268,340,350,360,370,678,
     679,689,789,780,790,890,567,568,578,146,
     147,148,158,168,169,179,170,180,145,470,
     390,346,347,348,349,359,369,379,389,236,
     156,157,167,230,178,250,189,270,190,489,
     480,490,356,357,358,368,378,450,460,245,
     237,238,239,249,240,269,260,234,136,560,
     570,580,590,456,367,458,459,469,479,257);


                            $doublepana=array(100,200,300,400,500,600,700,800,900,226,
							                  335,336,355,338,339,448,223,288,225,668,
											  344,499,445,446,366,466,377,440,388,488,
											  119,110,166,112,113,114,115,116,117,118,
											  399,660,599,455,447,449,477,556,449,677,
											  667,559,334,155,228,229,220,122,277,133,
											  224,144,299,588,688,779,699,799,880,557,
											  558,577,550,255,337,266,177,330,188,788,
											  233,199,244,669,778,770,889,899,566,990,
											  );

                            $triplepana=array(111,222,333,444,555,666,777,888,999,000);

                         if(in_array($number,$singlepana)){
                                       $this->db->select('username');
                                       $this->db->from('users');
                                       $this->db->where('mode',2);
                          $cust_user_id=$this->db->get();

foreach($cust_user_id->result() as $rowgt ){
                          $customer_id= $rowgt->username;

                        $amount1=$this->result_calculation->singlepanaamount($customer_id,$category,$type,$number,$date);

                         $amount2=$this->result_calculation->singlegrouppanaamount($customer_id,$category,$type,$number,$date);

                         $amount3=$this->result_calculation->aakdaamount($customer_id,$category,$type,$aakda,$date);

						
                           $this->db->select('aakda');
                         $this->db->from('result_tbl');
                         $this->db->where('game_name',$category);
                         $this->db->where('cat_name','open');
                          $this->db->like('date',$date);
                         $bazardata=$this->db->get();
                         $bazaraakda=$bazardata->row();
if(!empty($bazaraakda)){

                             $jodiaakda=(string)$bazaraakda->aakda.$aakda;


                         $amount4=$this->result_calculation->jodiamount($customer_id,$category,$type,$jodiaakda,$date);
                       
}else{
	$jodiaakda=0;
	$amount4=0;
	
}


$user_com= $this->Requirment->getComission($customer_id);
foreach($user_com->result() as $row){

$acom=$row->acom;
$pcom=$row->pcom;
$cpcom=$row->cpcom;
$cdpcomm=$row->cdpcomm;
$part=$row->part;
$akdarate=$row->sindig;
$singlepanarate=$row->sinpan;
$doublepanarate=$row->douan;
$triplepanarate=$row->trapan;
$groupsinglepanarate=$row->gropan;
$groupdoublepanarate=$row->gropan2;
$jodirate=$row->jodig;
}


$total_amount=$amount1*$singlepanarate+$amount2*$groupsinglepanarate+$amount3*$akdarate+$amount4*$jodirate;



$query= $this->Requirment->get_user_data_login($customer_id);
$userdetail= $query->row();

$tranid=rand(111111,999999);

         $data1=array(
         'cust_id'=>(string)$customer_id,
         'previous_bal'=>$userdetail->amount,
         'widral_amt'=>0,
         'credit_amt'=>$total_amount,
         'final_bal'=>$userdetail->amount+$total_amount,
         'remark'=>'for'.$category.'-'.$type.'win',
         'tran_time'=>(string)$date3,
         'tran_id'=>$tranid
         ); 

         $data2=array('customerid'=>$customer_id,
                      'final_bal'=>$userdetail->amount+$total_amount
                    );
         $data3=array(
'game_name'=>$category,
'cat_name'=>$type,
'time'=>$date3,
'panano'=>$number,
'aakda'=>$aakda,
'aakda_rate'=>$akdarate,
'akdaa_amt'=>$amount3,
'aakda_amt_win'=>$amount3*$akdarate,
'single_pana'=>$number,
'single_pana_rate'=>$singlepanarate,
'single_pana_amt'=>$amount1,
'single_pana_win_amt'=>$amount1*$singlepanarate,
'double_pana'=>0,
'double_pana_rate'=>0,
'double_pana_amt'=>0,
'double_pana_win_amt'=>0,
'chart_single_pana'=>$number,
'chart_single_pana_rate'=>$groupsinglepanarate,
'chart_single_pana_amt'=>$amount2,
'chart_single_pana_win_amt'=>$amount2*$groupsinglepanarate,
'chart_double_pana'=>0,
'chart_double_pana_rate'=>0,
'chart_double_pana_amt'=>0,
'chart_double_pana_win_amt'=>0,
'triple'=>0,
'triple_rate'=>0,
'triple_amt'=>0,
'triple_win_amt'=>0,
'jodi'=>$jodiaakda,
'jodi_rate'=>$jodirate,
'jodi_amt'=>$amount4,
'jodi_win_amt'=>$amount4*$jodirate,
'win_amount'=>$total_amount,
'cust_id'=>$customer_id,
'tran_id'=>$tranid
);

if($total_amount>0){
$result=$this->Requirment->passbookupdate($data1,$data2);


$this->db->insert('win_rec_tbl',$data3);

}
}
                         }else if(in_array($number,$doublepana)){
                                   $this->db->select('username');
                                       $this->db->from('users');
                                       $this->db->where('mode',2);
                          $cust_user_id=$this->db->get();
$jodiaakda='';
$total_amount=0;
foreach($cust_user_id->result() as $rowfg ){
                          $customer_id= $rowfg->username;

                        $amount1=$this->result_calculation->doublepanaamount($customer_id,$category,$type,$number,$date);

                         $amount2=$this->result_calculation->doublegrouppanaamount($customer_id,$category,$type,$number,$date);

                         $amount3=$this->result_calculation->aakdaamount($customer_id,$category,$type,$aakda,$date);
                         $this->db->select('aakda');
                         $this->db->from('result_tbl');
                         $this->db->where('game_name',$category);
                         $this->db->where('cat_name','open');
                          $this->db->like('date',$date);
                         $bazardata=$this->db->get();
                         $bazaraakda=$bazardata->row();
if(!empty($bazaraakda)){

                             $jodiaakda=(string)$bazaraakda->aakda.$aakda;


                         $amount4=$this->result_calculation->jodiamount($customer_id,$category,$type,$jodiaakda,$date);

}else{
	$jodiaakda=0;
	$amount4=0;
	
}

                       $user_com= $this->Requirment->getComission($customer_id);

foreach($user_com->result() as $row){

$acom=$row->acom;
$pcom=$row->pcom;
$cpcom=$row->cpcom;
$cdpcomm=$row->cdpcomm;
$part=$row->part;
$akdarate=$row->sindig;
$singlepanarate=$row->sinpan;
$doublepanarate=$row->douan;
$triplepanarate=$row->trapan;
$groupsinglepanarate=$row->gropan;
$groupdoublepanarate=$row->gropan2;
$jodirate=$row->jodig;

}


$total_amount=$amount1*$doublepanarate+$amount2*$groupdoublepanarate+$amount3*$akdarate+$amount4*$jodirate;



$query= $this->Requirment->get_user_data_login($customer_id);
$userdetail= $query->row();

$tranid=rand(111111,999999);

         $data1=array(
         'cust_id'=>(string)$customer_id,
         'previous_bal'=>$userdetail->amount,
         'widral_amt'=>0,
         'credit_amt'=>$total_amount,
         'final_bal'=>$userdetail->amount+$total_amount,
         'remark'=>'for'.$category.'-'.$type.'PURCHASE',
         'tran_time'=>(string)$date3,
         'tran_id'=>$tranid
         ); 

         $data2=array('customerid'=>$customer_id,
                      'final_bal'=>$userdetail->amount+$total_amount
                    );
          $data3=array(
'game_name'=>$category,
'cat_name'=>$type,
'time'=>$date3,
'panano'=>$number,
'aakda'=>$aakda,
'aakda_rate'=>$akdarate,
'akdaa_amt'=>$amount3,
'aakda_amt_win'=>$amount3*$akdarate,
'single_pana'=>0,
'single_pana_rate'=>0,
'single_pana_amt'=>0,
'single_pana_win_amt'=>0,
'double_pana'=>$number,
'double_pana_rate'=>$doublepanarate,
'double_pana_amt'=>$amount1,
'double_pana_win_amt'=>$amount1*$doublepanarate,
'chart_single_pana'=>0,
'chart_single_pana_rate'=>0,
'chart_single_pana_amt'=>0,
'chart_single_pana_win_amt'=>0,
'chart_double_pana'=>$number,
'chart_double_pana_rate'=>$groupdoublepanarate,
'chart_double_pana_amt'=>$amount2,
'chart_double_pana_win_amt'=>$amount2*$groupdoublepanarate,
'triple'=>0,
'triple_rate'=>0,
'triple_amt'=>0,
'triple_win_amt'=>0,
'jodi'=>$jodiaakda,
'jodi_rate'=>$jodirate,
'jodi_amt'=>$amount4,
'jodi_win_amt'=>$amount4*$jodirate,
'win_amount'=>$total_amount,
'cust_id'=>$customer_id,
'tran_id'=>$tranid
);

if($total_amount>0){
$result=$this->Requirment->passbookupdate($data1,$data2);


$this->db->insert('win_rec_tbl',$data3);

}
}


                         }else if(in_array($number,$triplepana)){

$this->db->select('username');
                                       $this->db->from('users');
                                       $this->db->where('mode',2);
                          $cust_user_id=$this->db->get();

foreach($cust_user_id->result() as $rowjk ){
                          $customer_id= $rowjk->username;

                        $amount1=$this->result_calculation->triplepanaamount($customer_id,$category,$type,$number,$date);

                        

                         $amount3=$this->result_calculation->aakdaamount($customer_id,$category,$type,$aakda,$date);

                          $this->db->select('aakda');
                         $this->db->from('result_tbl');
                         $this->db->where('game_name',$category);
                         $this->db->where('cat_name','open');
                          $this->db->like('date',$date);
                         $bazardata=$this->db->get();
                         $bazaraakda=$bazardata->row();

if(!empty($bazaraakda)){
                             $jodiaakda=(string)$bazaraakda->aakda.$aakda;



                         $amount4=$this->result_calculation->jodiamount($customer_id,$category,$type,$jodiaakda,$date);
}else{
	$jodiaakda=0;
	$amount4=0;
	
}
                       $user_com= $this->Requirment->getComission($customer_id);

foreach($user_com->result() as $row){

$acom=$row->acom;
$pcom=$row->pcom;
$cpcom=$row->cpcom;
$cdpcomm=$row->cdpcomm;
$part=$row->part;
$akdarate=$row->sindig;
$singlepanarate=$row->sinpan;
$doublepanarate=$row->douan;
$triplepanarate=$row->trapan;
$groupsinglepanarate=$row->gropan;
$groupdoublepanarate=$row->gropan2;
$jodirate=$row->jodig;
}


$total_amount=$amount1*$triplepanarate+$amount3*$akdarate+$amount4*$jodirate;



$query= $this->Requirment->get_user_data_login($customer_id);
$userdetail= $query->row();

$tranid=rand(111111,999999);

         $data1=array(
         'cust_id'=>(string)$customer_id,
         'previous_bal'=>$userdetail->amount,
         'widral_amt'=>0,
         'credit_amt'=>$total_amount,
         'final_bal'=>$userdetail->amount+$total_amount,
         'remark'=>'for'.$category.'-'.$type.'win',
         'tran_time'=>(string)$date3,
         'tran_id'=>$tranid
         ); 

         $data2=array('customerid'=>$customer_id,
                      'final_bal'=>$userdetail->amount+$total_amount
                    );
        $data3=array(
'game_name'=>$category,
'cat_name'=>$type,
'time'=>$date3,
'panano'=>$number,
'aakda'=>$aakda,
'aakda_rate'=>$akdarate,
'akdaa_amt'=>$amount3,
'aakda_amt_win'=>$amount3*$akdarate,
'single_pana'=>$number,
'single_pana_rate'=>0,
'single_pana_amt'=>0,
'single_pana_win_amt'=>0,
'double_pana'=>0,
'double_pana_rate'=>0,
'double_pana_amt'=>0,
'double_pana_win_amt'=>0,
'chart_single_pana'=>0,
'chart_single_pana_rate'=>0,
'chart_single_pana_amt'=>0,
'chart_single_pana_win_amt'=>0,
'chart_double_pana'=>0,
'chart_double_pana_rate'=>0,
'chart_double_pana_amt'=>0,
'chart_double_pana_win_amt'=>0,
'triple'=>$number,
'triple_rate'=>$triplepanarate,
'triple_amt'=>$amount1,
'triple_win_amt'=>$amount1*$triplepanarate,
'jodi'=>$jodiaakda,
'jodi_rate'=>$jodirate,
'jodi_amt'=>$amount4,
'jodi_win_amt'=>$amount4*$jodirate,
'win_amount'=>$total_amount,
'cust_id'=>$customer_id,
'tran_id'=>$tranid
);

if($total_amount>0){
$result=$this->Requirment->passbookupdate($data1,$data2);


$this->db->insert('win_rec_tbl',$data3);

}
}

                         }



                            break;
                          default:
                           
                            break;
                        }
                        $data=array(
                              
                              'game_name'=>$category,
                              'cat_name'=>$type,
                              'panano'=>$number,
                              'aakda'=>$aakda

                        );

                        
                        $this->db->insert('result_tbl',$data);

                        redirect('Admin/resultchart');
                        }
                
    

  $res['bazarALL']=$this->Requirment->bazarAll();
  $this->load->view('adminarea/head');  
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user); 
  $this->load->view('adminarea/openresult',$res);
  $this->load->view('adminarea/footer');
  }
  public function winrec(){


  $this->load->view('adminarea/head');  
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user);
  //$this->windata(); 
  $this->load->view('adminarea/winrec');
  $this->load->view('adminarea/footer');
  }
  public function windata(){

        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
       
        $this->load->model('Admin_modal', 'adminuser');
        $PayAjaxData = $this->adminuser->winrecorddata();

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;

foreach ($result as $row)
{
 
   $responce->rows[$i]['id']=$row->id;
            $responce->rows[$i]['cell']=array($row->game_name,$row->cust_id,
                $row->time, $row->cat_name,$row->panano,$row->aakda,$row->aakda_rate,$row->akdaa_amt,$row->aakda_amt_win,
				$row->single_pana,$row->single_pana_rate,$row->single_pana_amt,$row->single_pana_win_amt,
				$row->double_pana,$row->double_pana_rate,$row->double_pana_amt,$row->double_pana_win_amt,
				$row->chart_single_pana,$row->chart_single_pana_rate,$row->chart_single_pana_amt,$row->chart_single_pana_win_amt,
				$row->chart_double_pana,$row->chart_double_pana_rate,$row->chart_double_pana_amt,$row->chart_double_pana_win_amt,
				$row->triple,$row->triple_rate,$row->triple_amt,$row->triple_win_amt,
				$row->jodi,$row->jodi_rate,$row->jodi_amt,$row->jodi_win_amt,
				$row->win_amount,);
  $i++;
}
echo json_encode($responce);


    
}
 public function passbookdata(){

        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
       
        $this->load->model('Admin_modal', 'adminuser');
        $PayAjaxData = $this->adminuser->passbookrecorddata();

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;

foreach ($result as $row)
{
 
   $responce->rows[$i]['id']=$row->id;
            $responce->rows[$i]['cell']=array($row->cust_id,$row->previous_bal,
                $row->widral_amt, $row->credit_amt,$row->final_bal,$row->remark,$row->tran_time,);
  $i++;
}
echo json_encode($responce);


    
}
public function passbook(){


  $this->load->view('adminarea/head');  
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user);
  //$this->passbookdata(); 
  $this->load->view('adminarea/passbook');
  $this->load->view('adminarea/footer');
  }
  public function allbazarsalereport(){
  $res['bazarALL']=$this->Requirment->bazarAll();
  $res['categoryALL']=$this->Requirment->categoryAll();
  $res['b']=$this->Requirment->getBazarTime();
  $this->load->helper('user_data_helper');
  $res['c']= $this->Requirment->getComission('test');
 $this->load->view('adminarea/head');  
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user);
  //$this->passbookdata(); 
$res['userid']= $this->Admin_modal->getcustomer(2);
  $this->load->view('adminarea/allbazarsalereport',$res);
  $this->load->view('adminarea/footer');
}
public function  bazarsalereport(){
  $res['bazarALL']=$this->Requirment->bazarAll();
  $res['categoryALL']=$this->Requirment->categoryAll();
  $res['b']=$this->Requirment->getBazarTime();
  $this->load->helper('user_data_helper');
  $res['c']= $this->Requirment->getComission('test');
 $this->load->view('adminarea/head');  
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user);
  //$this->passbookdata(); 
   $res['userid']= $this->Admin_modal->getcustomer(2);
  $this->load->view('adminarea/bazarsalereport',$res);
  $this->load->view('adminarea/footer');
}

  public function lbtr(){

  


  $res['bazarALL']=$this->Requirment->bazarAll();
  $res['categoryALL']=$this->Requirment->categoryAll();
  $res['b']=$this->Requirment->getBazarTime();
  $this->load->view('adminarea/head');  
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user);
  //$this->passbookdata(); 
  $this->load->view('adminarea/lbtr',$res);
  $this->load->view('adminarea/footer');
  }

public function lbtrdata(){
$this->load->helper('user_data_helper');
$data['h']=$this->Admin_modal->getcustomer(2);
$q = $_POST['id'];


$data['k']=explode('@',$q);

$this->load->view('adminarea/getuser3',$data);

}

public function dbtr(){


  $this->load->view('adminarea/head');  
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user);
  //$this->passbookdata(); 
  $this->load->view('adminarea/dbtr');
  $this->load->view('adminarea/footer');
  }
public function dbtrdata(){
$this->load->helper('user_data_helper');
$data['h']=$this->Admin_modal->getcustomer(2);
$q = $_POST['id'];

$data['k']=explode('@',$q);
//$data=array('date'=>$date,'date1'=>$date1);
$this->load->view('adminarea/getuser4',$data);

}
public function fulldbtr(){


  $this->load->view('adminarea/head');  
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user);
  //$this->passbookdata(); 
  $this->load->view('adminarea/fulldatewise');
  $this->load->view('adminarea/footer');
  }
public function fulldbtrdata(){
$this->load->helper('user_data_helper');
$data['h']=$this->Admin_modal->getcustomer(2);
$q = $_POST['id'];

$data['k']=explode('@',$q);
//$data=array('date'=>$date,'date1'=>$date1);
$this->load->view('adminarea/getuser5',$data);

}
public function balancesheet(){


  $this->load->view('adminarea/head');  
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user);
  //$this->passbookdata(); 
  $this->load->view('adminarea/balancesheet');
  $this->load->view('adminarea/footer');
  }
  public function fulldatewise(){


  $this->load->view('adminarea/head');  
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user);
  //$this->passbookdata(); 
  $this->load->view('adminarea/fulldatewise');
  $this->load->view('adminarea/footer');
  }
  public function purchaseHistory(){
  $res['bazarALL']=$this->Requirment->bazarAll();
  $res['categoryALL']=$this->Requirment->categoryAll();
  $res['b']=$this->Requirment->getBazarTime();
  $this->load->helper('user_data_helper');
  $this->load->view('adminarea/head'); 
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user); 

  $this->load->view('adminarea/playhistory',$res);
  $this->load->view('adminarea/footer');
}
public function aakdapurchaseHistory(){
  $res['bazarALL']=$this->Requirment->bazarAll();
  $res['categoryALL']=$this->Requirment->categoryAll();
  $res['b']=$this->Requirment->getBazarTime();
  $this->load->helper('user_data_helper');
  $this->load->view('adminarea/head'); 
  
  
  $query=$this->Requirment->getBazarTime();
  $search_data=$this->input->post(search_record);
  if(isset($search_data)){
    $date4=$this->input->post('todate');
	$date4=date('Y-m-d',strtotime($date4));
	$bazar_name=$this->input->post('category');
	 $category=$this->input->post('type');
	 
	  $res['f']=$this->Requirment->getAakdaData2($date4,$bazar_name,$category); 
  }else{
	  
	 $bazardetail = $query->row();
	date_default_timezone_set('Asia/Kolkata');
	
		$date4=date("Y-m-d", time());
	 $res['f']=$this->Requirment->getAakdaData2($date4,$bazardetail->bazar_name,$bazardetail->category); 
	  
	  
  }
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user); 
     
  $this->load->view('adminarea/aakdaplayhistory',$res);
  $this->load->view('adminarea/footer');
}
 public function aakdadata(){

        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
       
        $this->load->model('Admin_modal', 'adminuser');
        $this->load->model('Requirment');
        $bazarresult=$this->Requirment->getBazarTime();
        $bazz=$bazarresult->row();
        $bazar=$bazz->bazar_name; 
        $category=$bazz->category;
        $PayAjaxData = $this->adminuser->aakdadata($bazar, $category);

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;

foreach ($result as $row)
{
 
   $responce->rows[$i]['id']=$row->id;
            $responce->rows[$i]['cell']=array($row->customer_id,$row->date,$row->bazar,
                $row->bazar_type, $row->single0,$row->single1,$row->single2,$row->single3,$row->single4,$row->single5,$row->single6,$row->single7,$row->single8,$row->single9,$row->total);
  $i++;
}
echo json_encode($responce);


    
}
 public function aakdadata2(){

        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
       
        $this->load->model('Admin_modal', 'adminuser');
        $this->load->model('Requirment');
        $bazarresult=$this->Requirment->getBazarTime();
        $bazz=$bazarresult->row();
        $bazar=$bazz->bazar_name; 
        $category=$bazz->category;
        $PayAjaxData = $this->adminuser->aakdadata2($bazar, $category);

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;
$K=1;
foreach ($result as $row)
{
 
   $responce->rows[$i]['id']=$K++;
            $responce->rows[$i]['cell']=array($bazar,
                $category, $row->single0,$row->single1,$row->single2,$row->single3,$row->single4,$row->single5,$row->single6,$row->single7,$row->single8,$row->single9,$row->total);
  $i++;
}
echo json_encode($responce);


    
}

public function triplepurchaseHistory(){
  $res['bazarALL']=$this->Requirment->bazarAll();
  $res['categoryALL']=$this->Requirment->categoryAll();
  $res['b']=$this->Requirment->getBazarTime();
  $this->load->helper('user_data_helper');
  $this->load->view('adminarea/head'); 
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user); 
     
  $this->load->view('adminarea/tripleplayhistory',$res);
  $this->load->view('adminarea/footer');
}
public function tripledata(){

        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
       
        $this->load->model('Admin_modal', 'adminuser');
        $this->load->model('Requirment');
        $bazarresult=$this->Requirment->getBazarTime();
        $bazz=$bazarresult->row();
        $bazar=$bazz->bazar_name; 
        $category=$bazz->category;
        $PayAjaxData = $this->adminuser->tripledata($bazar, $category);

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;

foreach ($result as $row)
{
 
   $responce->rows[$i]['id']=$row->id;
            $responce->rows[$i]['cell']=array($row->customer_id,$row->date,$row->bazar,
                $row->bazar_type, $row->num_777,$row->num_444,$row->num_111,$row->num_888,$row->num_555,$row->num_222,$row->num_999,$row->num_666,$row->num_333,$row->num_000,$row->total);
  $i++;
}
echo json_encode($responce);


    
}
public function panapurchaseHistory(){
  $res['bazarALL']=$this->Requirment->bazarAll();
  $res['categoryALL']=$this->Requirment->categoryAll();
  $res['b']=$this->Requirment->getBazarTime();
  $this->load->helper('user_data_helper');
  $this->load->view('adminarea/head'); 
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user); 
     
  $this->load->view('adminarea/panapurchaseHistory',$res);
  $this->load->view('adminarea/footer');
}
 public function panadata(){

        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
       
        $this->load->model('Admin_modal', 'adminuser');
        $this->load->model('Requirment');
        $bazarresult=$this->Requirment->getBazarTime();
        $bazz=$bazarresult->row();
        $bazar=$bazz->bazar_name; 
        $category=$bazz->category;
        $PayAjaxData = $this->adminuser->panadata($bazar, $category);

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;

foreach ($result as $row)
{
 
   $responce->rows[$i]['id']=$row->id;
            $responce->rows[$i]['cell']=array($row->customer_id,$row->date,$row->bazar,
                $row->bazar_type, $row->game_name,$row->pana,$row->amount);
  $i++;
}
echo json_encode($responce);


    
}


public function jodipurchaseHistory(){
  $res['bazarALL']=$this->Requirment->bazarAll();
  $res['categoryALL']=$this->Requirment->categoryAll();
  $res['b']=$this->Requirment->getBazarTime();
  $this->load->helper('user_data_helper');
  $this->load->view('adminarea/head'); 
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user); 
     
  $this->load->view('adminarea/jodipurchaseHistory',$res);
  $this->load->view('adminarea/footer');
}

public function jodidata(){

        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction


        if(!$sidx) $sidx =1;
       
        $this->load->model('Admin_modal', 'adminuser');
        $this->load->model('Requirment');
        $bazarresult=$this->Requirment->getBazarTime();
        $bazz=$bazarresult->row();
        $bazar=$bazz->bazar_name; 
        $category=$bazz->category;
        $PayAjaxData = $this->adminuser->jodidata($bazar, $category);

        $result = $PayAjaxData['sqlresult'];
        $row = $PayAjaxData['sqlresult'];
        $count = $PayAjaxData['rowcount'];

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages) $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        $responce = new StdClass;
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        
        $i=0;

foreach ($result as $row)
{
 
   $responce->rows[$i]['id']=$row->id;
            $responce->rows[$i]['cell']=array($row->customer_id,$row->date,$row->bazar,
                $row->bazar_type,$row->jodi,$row->amount);
  $i++;
}
echo json_encode($responce);


    
}
public function pana220purchaseHistory(){
  $res['bazarALL']=$this->Requirment->bazarAll();
  $res['categoryALL']=$this->Requirment->categoryAll();
  $res['b']=$this->Requirment->getBazarTime();
  $this->load->helper('user_data_helper');
  $this->load->view('adminarea/head'); 
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user); 
     
  $this->load->view('adminarea/pana220purchaseHistory',$res);
  $this->load->view('adminarea/footer');
}
public function grouplogrecord(){
  $res['bazarALL']=$this->Requirment->bazarAll();
  $res['categoryALL']=$this->Requirment->categoryAll();
  $res['b']=$this->Requirment->getBazarTime();
  $this->load->helper('user_data_helper');
  $this->load->view('adminarea/head'); 
  $user['u']= $this->Requirment->get_user_data_login($_SESSION['madhur_admin']);
  $this->load->view('adminarea/nav',$user); 
     //$this->groupdata();
  $this->load->view('adminarea/grouploghistory',$res);
  $this->load->view('adminarea/footer');
}
}


?>