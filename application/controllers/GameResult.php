<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GameResult extends CI_Controller {
    
    
       function __construct(){
		
        parent::__construct();
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->load->model('Login_Model');
		$this->load->model('Bazar_Model');
		$this->load->helper('security');
		$this->load->helper('result');
		$this->load->library(array('session'));	
		$customer_logged_in=$this->session->userdata('customer_logged_in');
		
	
		$access_level=$this->session->userdata('access_level');
		
	if(!$customer_logged_in  ){
            redirect('Login/index');
    }
    if($access_level!=1 and $access_level!=2 and $access_level!=4 and $access_level!=3 and $access_level!=7){
            redirect('Login/logOut');
    }
		
	
    }
    public function lucky(){
        $submit=$this->input->post('updatelucky');
		if(isset($submit)){
		   $aakda= $this->input->post('aakda');
		   $pana= $this->input->post('pana');
		   $jodi= $this->input->post('jodi');
		   $motor= $this->input->post('motor');
		   
		   $data=array(
		       'aakda'=>$aakda,
		       'pana'=>$pana,
		       'jodi'=>$jodi,
		       'motor'=>$motor
		       
		       );
		       
		       $this->db->update('lucky_number',$data);
		    
		} 
        $userId=$this->session->userdata('userid');
		$this->load->model('Model_home');
		$data['gussing']=$this->Model_home->getluckynumber();
		$this->load->model('User_Model');
		$data['balance']=$this->User_Model->userAccount($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
	//	$data['gussing']=$this->Model_home->getluckynumber();
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/lucky',$data);
		$this->load->view('admin/footer'); 
    }
public function search_top_bottom(){

    $bazar_id = $_POST['bazar_id'];
    $bazar_type = $_POST['bazar_type'];
    $date = $_POST['date'];
    $data['bazar_id'] = $bazar_id;
    $data['bazar_type'] = $bazar_type;
    $data['date'] = $date;
    $this->load->view('admin/top_bottom_data',$data);
//echo $q;
  }  
    public function gettop_bottom_data(){
    $data['b']=$this->Bazar_Model->getBazarData();
    $this->load->view('admin/topbottom_pop', $data);
//echo $q;
  }  
    public function index(){
       
	
		$submit=$this->input->post('submit');
		if(isset($submit)){
			$this->form_validation->set_rules('date','date', 'required');
			$this->form_validation->set_rules('number','number', 'required');
			$this->form_validation->set_rules('bazar','bazar', 'required');
			$this->form_validation->set_rules('cat','cat', 'required');

			
			 if ($this->form_validation->run() != false)
			{

		    $date=$this->input->post('date');
			   //echo $date;
			   //exit;
			$status=$this->Bazar_Model->checkBazarTime($this->input->post('bazar'),$this->input->post('cat'));
		    	//$status=TRUE;
		    	
	
			  //if($status===true){
			     		
			   $date=$this->input->post('date');
			   //echo $date;
			   $number=$this->input->post('number');
			   $bazar=$this->input->post('bazar');
			   $category=$this->input->post('cat');

			   $numData=str_split($number);
			   $aakdaarr=array_sum($numData);
               date_default_timezone_set("Asia/Kolkata");

               $after =  date("Y/m/d H:i:s", strtotime("+30 minutes"));
               	$num=strtotime($date);
			    $num=strtotime("+1 day",$num);
			    $date2 = date('y-m-d',$num);
                $time ="10:00:00";

//$time1 = $date2.' '.$time;

               $date1 = date('Y-m-d H:i:s', strtotime("$date2 $time"));
			   $aakdasecondarrr=str_split($aakdaarr);
			   $aakdacount=count($aakdasecondarrr);
			   if($aakdacount==2){
                $aakda=$aakdasecondarrr[1];
			   }else{
				$aakda=$aakdaarr;
			   }
			   $resultData = array('bazar_id' =>$bazar, 
								   'result_type' =>$category, 
								   'result_pana'=>$number,
								   'result_AAkda'=>$aakda,
								   'result_date'=>$date,
								   'after_time'=>$after,
								   'showtime'=>$date1,
								   'createdby'=>$_SESSION['username']
								   
			
				);
				    $this->load->model('Result_Model');
					$this->Result_Model->updateTicketResult($date,$bazar,$category,$number,$aakda);
					
					
			//print_r( $resultData);	
			  //exit;
				$reportresult=$this->db->insert('game_result',$resultData);
				$dataupdate=array(
				    'visiability'=>1
				    );
				    $this->db->where('id',$bazar);
			     $this->db->update('game_bazar',$dataupdate);
				$dataupdate2=array(
				    'visiability'=>0
				    );
				    $this->db->where('id!=',$bazar);
				$this->db->update('game_bazar',$dataupdate2);
				
			    if($reportresult){
			        $this->session->set_flashdata('message_success', 'result entered ');
                 redirect('GameResult/index');
				}

			//  }
			 // $this->session->set_flashdata('message_successr', 'failed bazar time is left ');
			}	

		}
		
		$search=$this->input->post('search');
        if($search){
            $date=$this->input->post('date');
            $bazar=$this->input->post('bazar');
            $category=$this->input->post('category');
           

            
            $data['date']=$date;
            $data['category']=$category;
            $data['bazar']=$bazar;


        }

        $userId=$this->session->userdata('userid');
		$this->load->model('Bazar_Model');
		if($_SESSION['access_level']==7){
		    	$data['b']=$this->Bazar_Model->getBazar($userId);
		}else{
		     $data['b']=$this->Bazar_Model->getBazarData();  
		}
		
		$this->load->model('User_Model');
		$data['balance']=$this->User_Model->userAccount($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/result',$data);
		$this->load->view('admin/footer');
     
    } 
    public function result(){
        $search=$this->input->post('resultserach');
       if($search){
          
           
            $fromdate=$this->input->post('fromdate');
             $todate=$this->input->post('todate');
            $bazar=$this->input->post('bazar');
            $category=$this->input->post('category');
          
       	$this->load->model('Result_Model');
		$data['resultdata']=$this->Result_Model->getResultDatasearched($fromdate,$todate,$bazar,$category);

        }else{
        $this->load->model('Result_Model');
		$data['resultdata']=$this->Result_Model->getResultData();
        }

		$userId=$this->session->userdata('userid');
		//$this->load->model('Bazar_Model');
		$data['b']=$this->Bazar_Model->getBazarData();
		$this->load->model('User_Model');
	
		$data['balance']=$this->User_Model->userAccount($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/resultrecord',$data);
		$this->load->view('admin/footer');
	}
	
	public function revoke(){
	    $result_id = $this->uri->segment(3);
	    $this->db->where('id', $result_id);
        $this->db->delete('game_result');
        //print_r($this->db->last_query()); 
        //exit;
        redirect('GameResult/result');
	    
	}
    
}