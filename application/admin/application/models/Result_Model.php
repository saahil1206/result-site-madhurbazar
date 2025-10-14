<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Result_Model extends CI_Model{
	
function __construct(){
	parent::__construct();
}

public function getResultByDate($bazarid,$result_type,$date){
    $this->db->where('bazar_id', $bazarid);
    $this->db->where('result_type', $result_type);
    $this->db->where('result_date', $date);
    $query = $this->db->get('game_result');
    return $query;


}

public function getRecent($bazarid,$result_type,$date){
    $this->db->where('id', $bazarid);
    //$this->db->where('result_type', $result_type);
    //$this->db->where('result_date', $date);
    $query = $this->db->get('game_bazar');
     $row1 = $query->row_array();
     $result= $row1['visiability'];
    return $result;


}

 public function getresult_time($date,$bazar){
     
     //echo $date;
     //echo $bazar;
     
   $this->db->where('result_date', $date);

         $this->db->where('bazar_id',$bazar);

         $query = $this->db->get('game_result');
        // print_r($this->db->last_query()); 
        $resultdata=00000;
         foreach ($query->result() as $row)
         {    
              $resultdata=$row->after_time;
           
         }
        echo $resultdata;
        
         return $resultdata;

} 
     public function Getresult2($date,$bazar){

       
          
         $this->db->where('result_date', $date);

         $this->db->where('bazar_id',$bazar);
         $this->db->where('result_type','open');
         $query = $this->db->get('game_result');
         //$val2='';
         $row1 = $query->row_array();
       
        $this->db->where('result_date', $date);

         $this->db->where('bazar_id',$bazar);
         $this->db->where('result_type','close');
         $query = $this->db->get('game_result');
         //$val2='';
         $row2 = $query->row_array();
    
         $result=  $row1['result_pana'].'-'.$row1['result_AAkda'].$row2['result_AAkda'].'-'.$row2['result_pana'];
         
        return $result;

       }
 public function getluckynumber(){
      $qrt="select * from lucky_number";
     $query = $this->db->query($qrt);

          return $query;
 }       

  public function getdata1($bazar){
        $qrt="select * from game_result where bazar_id='".$bazar."' order by 	result_date asc limit 1";
        
         $query = $this->db->query($qrt);

         return $query;
       }

public function bazarCheker($id,$todayDay){
    $this->db->where('game_bazar_id',$id);
   
    //$this->db->where($todayDay,'on');
    $query = $this->db->get('game_bazar_day');
    $row=$query->row();
   // echo $row->$todayDay;
    //exit;
    if ($row->$todayDay == 'on' or $row->$todayDay == 1 ) {
    	return true;
    }else{
    	return false;
    }
}

public function getResultDatasearched($fromdate,$todate,$bazar,$category){
    
    //echo $bazar;
    
    if($category!='SelectAll'){
    $this->db->where('result_type', $category);
    }
    if($bazar!='SelectAll'){
    $this->db->where('bazar_id', $bazar);
    }
    
    $this->db->where('result_date >=', $fromdate);
    $this->db->where('result_date <=', $todate);
    $query = $this->db->get('game_result');
    
    return $query;
}
public function getResultData(){
    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d", time());
    $this->db->where('result_date', $date);
    $query = $this->db->get('game_result');
    return $query;
}
public function getcreditrefrence($id){
      $this->db->select('*');
      $this->db->from('game_user_account');
      $this->db->where('game_user_id',$id);
      $queryresult = $this->db->get();
      $row2 = $queryresult->row();
      $creditrefrence=$row2->creditrefrence;
    
    return $creditrefrence;
}
public function usercom($id){
     $this->db->select('*');
      $this->db->from('game_user_commission');
      $this->db->where('game_user_id',$id);
      $queryresult = $this->db->get();
      $row2 = $queryresult->row();
      $partnership=$row2->partnership;
    
    return 	$partnership;
}

public function updateTicketResult($date,$bazar,$category,$number,$aakda){
    $this->db->select('*');
    $this->db->from('game_ticket');
    $this->db->join('game_user_account','game_user_account.game_user_id = game_ticket.customer_id'); 
    $this->db->join('game_user_commission','game_user_commission.game_user_id = game_ticket.customer_id');  
    $this->db->join('game_user_personal','game_user_personal.id = game_ticket.customer_id');  
    $this->db->where('game_ticket.ticket_status',0);
    $this->db->where('game_ticket.date',$date);
    $this->db->where('game_ticket.game_id',$bazar);
    $this->db->where('game_ticket.game_type',$category);
    
    $query = $this->db->get();
    if($category=='open'){
    foreach($query->result() as $row){
        
      
        
        
        
        if($row->game_patti_type=='AAKDA-001'){
            
             $numb='single'.$aakda;
           $this->db->select_sum($numb,'totalsingle');
           $this->db->from('game_single_digit');
           $this->db->where('tran_id',$row->ticket_id);
           $queryresult=$this->db->get();
           $row2 = $queryresult->row();
           $totalaakda=$row2->totalsingle;
           
        $aakdatotal=$row->purchase_amount;   
        if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount*$row->aakda_com/100;
        }
        
     
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalaakda*$row->aakdarate+$akdatotalcom;
            $nettopay=($totalaakda*$row->aakdarate+$akdatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=($totalaakda*$row->aakdarate+$akdatotalcom)-(($totalaakda*$row->aakdarate+$akdatotalcom)*$row->partnership/100);
            $nettopay=($totalaakda*$row->aakdarate+$akdatotalcom)-(($totalaakda*$row->aakdarate+$akdatotalcom)*$row->partnership/100)-$row->purchase_amount;
        }
           
           $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'aakda_total_wamount'=>$totalaakda,
              'total_aakda_amount'=>$row->purchase_amount,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>$akdatotalcom,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>$totalaakda*$row->aakdarate,
              'pana_number'=>$number,
              'pana_total_amount'=>0,
              'pana_com'=>0,
              'pana_total_com'=>0,
              'single_pana_amount'=>0,
              'single_pana_rate'=>0,
              'single_pana_win_amount'=>0,
              'double_pana_amount'=>0,
              'double_pana_rate'=>0,
              'double_pana_win_amount'=>0,
              'triple_pana_amount'=>0,
              'triple_pana_rate'=>0,
              'triple_pana_win_amount'=>0,
               'jodi_rate'=>0,
              'jodi_amount'=>0,
              'jodi_number'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$akdatotalcom,
              'total_win'=>$totalaakda*$row->aakdarate,
              'before_patnership'=>($totalaakda*$row->aakdarate+$akdatotalcom),
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->aakdarate*$totalaakda,
                   'total_com'=>$akdatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   $credit=$row->aakdarate*$totalaakda;
                  
                   if($credit>0){
                   
                $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->aakdarate*$totalaakda;
                    
               // echo $creditrefrence;
               // exit;
                  
                  $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
          
                  
                   $this->db->insert('user_passbook',$passbookData);
                
                   $this->db->set('creditrefrence',$creditrefrence);
                   
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   
                   } 
                   
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
              
           

        
        }else if($row->game_patti_type=='JODI-004'){
            
        }else if($row->game_patti_type=='SINGLE-002'){
            $numb='n'.$number;
            $querycon = $this->db->field_exists($numb, 'single_pana');
if($querycon == TRUE)
{
            
           $this->db->select_sum($numb,'totalsingle');
           $this->db->from('single_pana');
           $this->db->where('tran_id',$row->ticket_id);
           $queryresult=$this->db->get();
           $row3 = $queryresult->row();
           $totalsingleamount=$row3->totalsingle;
           
        if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=($row->purchase_amount*$row->aakda_com/100);
        }
        
         if($row->pana_com==0){
            $panacom=0;
            $panatotalcom=0;
        }else{
            $panacom=$row->pana_com;
            $panatotalcom=($row->purchase_amount*$row->pana_com/100);
        }
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalsingleamount*$row->singlepanarate+$panatotalcom;
            $nettopay=($totalsingleamount*$row->singlepanarate+$panatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=$totalsingleamount*$row->singlepanarate+$panatotalcom-($totalsingleamount*$row->singlepanarate+$panatotalcom)*$row->partnership/100;
            $nettopay=$totalsingleamount*$row->singlepanarate+$panatotalcom-(($totalsingleamount*$row->singlepanarate+$panatotalcom)*$row->partnership/100)-$row->purchase_amount;
        }
           
           
           $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'total_aakda_amount'=>0,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>0,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>0,
              'pana_number'=>$number,
              'pana_total_amount'=>$row->purchase_amount,
              'pana_com'=>$panacom,
              'pana_total_com'=>$panatotalcom,
              'single_pana_amount'=>$totalsingleamount,
              'single_pana_rate'=>$row->singlepanarate,
              'single_pana_win_amount'=>$row->singlepanarate*$totalsingleamount,
              'double_pana_amount'=>0,
              'double_pana_rate'=>0,
              'double_pana_win_amount'=>0,
              'triple_pana_amount'=>0,
              'triple_pana_rate'=>0,
              'triple_pana_win_amount'=>0,
              'jodi_rate'=>0,
              'jodi_amount'=>0,
              'jodi_amount'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$panatotalcom,
              'total_win'=>$row->singlepanarate*$totalsingleamount,
              'before_patnership'=>$row->singlepanarate*$totalsingleamount+$akdatotalcom,
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->singlepanarate*$totalsingleamount,
                   'total_com'=>$panatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
                   
                $credit=$row->singlepanarate*$totalsingleamount;
                  
                   if($credit>0){
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->singlepanarate*$totalsingleamount;        
                  $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   
                   }      
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
              
           
}else{
    
    
    
    
    
    $totalsingleamount=0;
    if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount*$row->aakda_com/100;
        }
        
         if($row->pana_com==0){
            $panacom=0;
            $panatotalcom=0;
        }else{
            $panacom=$row->pana_com;
            $panatotalcom=$row->purchase_amount*$row->pana_com/100;
        }
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalsingleamount*$row->singlepanarate+$panatotalcom;
            $nettopay=($totalsingleamount*$row->singlepanarate+$panatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=$totalsingleamount*$row->singlepanarate+$panatotalcom-(($totalsingleamount*$row->singlepanarate+$panatotalcom)*$row->partnership/100);
            $nettopay=$totalsingleamount*$row->singlepanarate+$panatotalcom-((($totalsingleamount*$row->singlepanarate+$panatotalcom)*$row->partnership/100)-$row->purchase_amount);
        }
           
           
           $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'total_aakda_amount'=>0,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>0,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>0,
              'pana_number'=>$number,
              'pana_total_amount'=>$row->purchase_amount,
              'pana_com'=>$panacom,
              'pana_total_com'=>$panatotalcom,
              'single_pana_amount'=>$totalsingleamount,
              'single_pana_rate'=>$row->singlepanarate,
              'single_pana_win_amount'=>$row->singlepanarate*$totalsingleamount,
              'double_pana_amount'=>0,
              'double_pana_rate'=>0,
              'double_pana_win_amount'=>0,
              'triple_pana_amount'=>0,
              'triple_pana_rate'=>0,
              'triple_pana_win_amount'=>0,
              'jodi_rate'=>0,
              'jodi_number'=>0,
              'jodi_amount'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$panatotalcom,
              'total_win'=>$row->singlepanarate*$totalsingleamount,
              'before_patnership'=>$row->singlepanarate*$totalsingleamount+$akdatotalcom,
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->singlepanarate*$totalsingleamount,
                   'total_com'=>$panatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
                   
                $credit=$row->singlepanarate*$totalsingleamount;
                  
                   if($credit>0){
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->singlepanarate*$totalsingleamount;        
                  $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   
                   }      
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
}            
        }else if($row->game_patti_type=='DOUBLE-003'){
             $numb='n'.$number;
            $querycon2 = $this->db->field_exists($numb, 'double_pana');
if($querycon2 == TRUE)
{
            
           $this->db->select_sum($numb,'totalsingle');
           $this->db->from('double_pana');
           $this->db->where('tran_id',$row->ticket_id);
           $queryresult=$this->db->get();
           $row2 = $queryresult->row();
           $totalsingleamount=$row2->totalsingle;
           
           if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount*$row->aakda_com/100;
        }
        
         if($row->pana_com==0){
            $panacom=0;
            $panatotalcom=0;
        }else{
            $panacom=$row->pana_com;
            $panatotalcom=$row->purchase_amount*$row->pana_com/100;
        }
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalsingleamount*$row->doublepanarate+$panatotalcom;
            $nettopay=($totalsingleamount*$row->doublepanarate+$panatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=$totalsingleamount*$row->doublepanarate+$panatotalcom-(($totalsingleamount*$row->doublepanarate+$panatotalcom)*$row->partnership/100);
            $nettopay=$totalsingleamount*$row->doublepanarate+$panatotalcom-((($totalsingleamount*$row->doublepanarate+$panatotalcom)*$row->partnership/100)-$row->purchase_amount);
        }
           
         $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'total_aakda_amount'=>0,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>0,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>0,
              'pana_number'=>$number,
              'pana_total_amount'=>$row->purchase_amount,
              'pana_com'=>$panacom,
              'pana_total_com'=>$panatotalcom,
              
              'single_pana_amount'=>0,
              'single_pana_rate'=>0,
              'single_pana_win_amount'=>0,
              'double_pana_amount'=>$totalsingleamount,
              'double_pana_rate'=>$row->doublepanarate,
              'double_pana_win_amount'=>$row->doublepanarate*$totalsingleamount,
              'triple_pana_amount'=>0,
              'triple_pana_rate'=>0,
              'triple_pana_win_amount'=>0,
              'jodi_rate'=>0,
              'jodi_number'=>0,
              'jodi_amount'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$panatotalcom,
              'total_win'=>$row->doublepanarate*$totalsingleamount,
              'before_patnership'=>$row->doublepanarate*$totalsingleamount+$akdatotalcom,
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->doublepanarate*$totalsingleamount,
                   'total_com'=>$panatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
                   
                $credit=$row->doublepanarate*$totalsingleamount;
                  
                   if($credit>0){
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->doublepanarate*$totalsingleamount;        
                  $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   
                   }      
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
              
           
}else{
    $totalsingleamount=0;
       if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount*$row->aakda_com/100;
        }
        
         if($row->pana_com==0){
            $panacom=0;
            $panatotalcom=0;
        }else{
            $panacom=$row->pana_com;
            $panatotalcom=$row->purchase_amount*$row->pana_com/100;
        }
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalsingleamount*$row->doublepanarate+$panatotalcom;
            $nettopay=($totalsingleamount*$row->doublepanarate+$panatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=$totalsingleamount*$row->doublepanarate+$panatotalcom-(($totalsingleamount*$row->doublepanarate+$panatotalcom)*$row->partnership/100);
            $nettopay=$totalsingleamount*$row->doublepanarate+$panatotalcom-((($totalsingleamount*$row->doublepanarate+$panatotalcom)*$row->partnership/100)-$row->purchase_amount);
        }
           
         $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'total_aakda_amount'=>0,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>0,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>0,
              'pana_number'=>$number,
              'pana_total_amount'=>$row->purchase_amount,
              'pana_com'=>$panacom,
              'pana_total_com'=>$panatotalcom,
              
              'single_pana_amount'=>0,
              'single_pana_rate'=>0,
              'single_pana_win_amount'=>0,
              'double_pana_amount'=>$totalsingleamount,
              'double_pana_rate'=>$row->doublepanarate,
              'double_pana_win_amount'=>$row->doublepanarate*$totalsingleamount,
              'triple_pana_amount'=>0,
              'triple_pana_rate'=>0,
              'triple_pana_win_amount'=>0,
              'jodi_rate'=>0,
              'jodi_number'=>0,
              'jodi_amount'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$panatotalcom,
              'total_win'=>$row->doublepanarate*$totalsingleamount,
              'before_patnership'=>$row->doublepanarate*$totalsingleamount+$akdatotalcom,
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->doublepanarate*$totalsingleamount,
                   'total_com'=>$panatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
                   
                $credit=$row->doublepanarate*$totalsingleamount;
                  
                   if($credit>0){
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->doublepanarate*$totalsingleamount;        
                  $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   
                   }      
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
}            
            
        }else if($row->game_patti_type=='TRIPLE-004'){
              $numb='num_'.$number;
            $query = $this->db->field_exists($numb, 'game_tripple_pana');
if($query == TRUE)
{
            
           $this->db->select_sum($numb,'totalsingle');
           $this->db->from('game_tripple_pana');
           $this->db->where('tran_id',$row->ticket_id);
           $queryresult=$this->db->get();
           $row2 = $queryresult->row();
           $totalsingleamount=$row2->totalsingle;
               if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount*$row->aakda_com/100;
        }
        
         if($row->pana_com==0){
            $panacom=0;
            $panatotalcom=0;
        }else{
            $panacom=$row->pana_com;
            $panatotalcom=$row->purchase_amount*$row->pana_com/100;
        }
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalsingleamount*$row->triplepanarate+$panatotalcom;
            $nettopay=($totalsingleamount*$row->triplepanarate+$panatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=($totalsingleamount*$row->triplepanarate+$panatotalcom)-(($totalsingleamount*$row->triplepanarate+$panatotalcom)*$row->partnership/100);
            $nettopay=($totalsingleamount*$row->triplepanarate+$panatotalcom)-((($totalsingleamount*$row->triplepanarate+$panatotalcom)*$row->partnership/100)-$row->purchase_amount);
        }
           $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'total_aakda_amount'=>0,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>0,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>0,
              'pana_number'=>$number,
              'pana_total_amount'=>$row->purchase_amount,
              'pana_com'=>$panacom,
              'pana_total_com'=>$panatotalcom,
              'single_pana_amount'=>0,
              'single_pana_rate'=>0,
              'single_pana_win_amount'=>0,
              'double_pana_amount'=>0,
              'double_pana_rate'=>0,
              'double_pana_win_amount'=>0,
              'triple_pana_amount'=>$totalsingleamount,
              'triple_pana_rate'=>$row->triplepanarate,
              'triple_pana_win_amount'=>$row->triplepanarate*$totalsingleamount,
              'jodi_rate'=>0,
              'jodi_number'=>0,
              'jodi_amount'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$panatotalcom,
              'total_win'=>$row->triplepanarate*$totalsingleamount,
              'before_patnership'=>$row->triplepanarate*$totalsingleamount+$akdatotalcom,
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->triplepanarate*$totalsingleamount,
                   'total_com'=>$panatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
                   
                $credit=$row->triplepanarate*$totalsingleamount;
                  
                   if($credit>0){
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->triplepanarate*$totalsingleamount;        
                  $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   
                   }      
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
              
           
}else{
    
   
    $totalsingleamount=0;
        if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount/$row->aakda_com;
        }
        
         if($row->pana_com==0){
            $panacom=0;
            $panatotalcom=0;
        }else{
            $panacom=$row->pana_com;
            $panatotalcom=$row->purchase_amount/$row->pana_com;
        }
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalsingleamount*$row->triplepanarate+$panatotalcom;
            $nettopay=($totalsingleamount*$row->triplepanarate+$panatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=$totalsingleamount*$row->triplepanarate+$panatotalcom-(($totalsingleamount*$row->triplepanarate+$panatotalcom)*$row->partnership/100);
            $nettopay=$totalsingleamount*$row->triplepanarate+$panatotalcom-((($totalsingleamount*$row->triplepanarate+$panatotalcom)*$row->partnership/100)-$row->purchase_amount);
        }
      $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'total_aakda_amount'=>0,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>0,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>0,
              'pana_number'=>$number,
              'pana_total_amount'=>$row->purchase_amount,
              'pana_com'=>$panacom,
              'pana_total_com'=>$panatotalcom,
              'single_pana_amount'=>0,
              'single_pana_rate'=>0,
              'single_pana_win_amount'=>0,
              'double_pana_amount'=>0,
              'double_pana_rate'=>0,
              'double_pana_win_amount'=>0,
              'triple_pana_amount'=>$totalsingleamount,
              'triple_pana_rate'=>$row->triplepanarate,
              'triple_pana_win_amount'=>$row->triplepanarate*$totalsingleamount,
              'jodi_rate'=>0,
              'jodi_number'=>0,
              'jodi_amount'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$panatotalcom,
              'total_win'=>$row->triplepanarate*$totalsingleamount,
              'before_patnership'=>$row->triplepanarate*$totalsingleamount+$akdatotalcom,
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->triplepanarate*$totalsingleamount,
                   'total_com'=>$panatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
                   
                $credit=$row->triplepanarate*$totalsingleamount;
                  
                   if($credit>0){
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->triplepanarate*$totalsingleamount;        
                  $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   
                   }      
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
}            
            
        }
    
    
     }
    }else if($category=='close'){
        
      
        
        $this->db->select('*');
    $this->db->from('game_ticket');
    $this->db->join('game_user_account','game_user_account.game_user_id = game_ticket.customer_id'); 
    $this->db->join('game_user_commission','game_user_commission.game_user_id = game_ticket.customer_id');  
    $this->db->join('game_user_personal','game_user_personal.id = game_ticket.customer_id');  
    
    $this->db->where('game_ticket.date',$date);
    $this->db->where('game_ticket.game_id',$bazar);
    $this->db->where('game_ticket.game_type','open');
    $this->db->where('game_ticket.game_patti_type','JODI-004');
    
    $query2 = $this->db->get();
    
    
        foreach($query2->result() as $row){
            $this->db->where('result_date',$date);
            $this->db->where('bazar_id',$bazar);
            $this->db->where('result_type','open');
            $queryresult=$this->db->get('game_result');
            $row3 = $queryresult->row();
            $totalaakda=$row3->result_AAkda;
           
            $jodiNumber='n'.$totalaakda.$aakda;
            
              $this->db->select_sum($jodiNumber,'totaljodi');
           $this->db->from('jodi');
           $this->db->where('tran_id',$row->ticket_id);
           $queryresult=$this->db->get();
           $row2 = $queryresult->row();
           $totaljodiamount=$row2->totaljodi;
           $totalsingleamount=0;
           
        if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount*$row->aakda_com/100;
        }
        
         if($row->pana_com==0){
            $panacom=0;
            $panatotalcom=0;
        }else{
            $panacom=$row->pana_com;
            $panatotalcom=$row->purchase_amount*$row->pana_com/100;
        }
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totaljodiamount*$row->jodirate;
            $nettopay=($totaljodiamount*$row->jodirate)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=($totaljodiamount*$row->jodirate)-($totaljodiamount*$row->jodirate)*$row->partnership/100;
            $nettopay=($totaljodiamount*$row->jodirate)-(($totaljodiamount*$row->jodirate)*$row->partnership/100)-$row->purchase_amount;
        }
           
           $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'total_aakda_amount'=>0,
              'aakda_com'=>$row->aakda_com,
              'aakda_total_com'=>0,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>0,
              'pana_number'=>$number,
              'pana_total_amount'=>0,
              'pana_com'=>$panacom,
              'pana_total_com'=>0,
              'single_pana_amount'=>0,
              'single_pana_rate'=>0,
              'single_pana_win_amount'=>0,
              'double_pana_amount'=>0,
              'double_pana_rate'=>0,
              'double_pana_win_amount'=>0,
              'triple_pana_amount'=>0,
              'triple_pana_rate'=>0,
              'triple_pana_win_amount'=>0,
              'jodi_rate'=>$row->jodirate,
              'jodi_number'=>$jodiNumber,
              'jodi_total_amount'=>$row->purchase_amount,
              'jodi_amount'=>$totaljodiamount,
              'jodi_win_amount'=>$totaljodiamount*$row->jodirate,
              'total_com'=>0,
              'total_win'=>$totaljodiamount*$row->jodirate,
              'before_patnership'=>$totaljodiamount*$row->jodirate,
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$totaljodiamount*$row->jodirate,
                   'total_com'=>0,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
              $credit=$row->jodirate*$totalsingleamount;
                  
                   if($credit>0){
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->jodirate*$totalsingleamount;  
                  
         $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   } 
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails); 
                   
    }
    
    
  foreach($query->result() as $row){
       
    
        
        if($row->game_patti_type=='AAKDA-001'){
           
            
             $numb='single'.$aakda;
           $this->db->select_sum($numb,'totalsingle');
           $this->db->from('game_single_digit');
           $this->db->where('tran_id',$row->ticket_id);
           $queryresult=$this->db->get();
           $row2 = $queryresult->row();
           $totalaakda=$row2->totalsingle;
           
          $aakdatotal=$row->purchase_amount;   
        if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount*$row->aakda_com/100;
        }
        
     
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalaakda*$row->aakdarate+$akdatotalcom;
            $nettopay=($totalaakda*$row->aakdarate+$akdatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=($totalaakda*$row->aakdarate+$akdatotalcom)-($totalaakda*$row->aakdarate+$akdatotalcom)*$row->partnership/100;
            $nettopay=($totalaakda*$row->aakdarate+$akdatotalcom)-(($totalaakda*$row->aakdarate+$akdatotalcom)*$row->partnership/100)-$row->purchase_amount;
        }
        
            
           
           $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'aakda_total_wamount'=>$totalaakda,
              'total_aakda_amount'=>$row->purchase_amount,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>$akdatotalcom,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>$totalaakda*$row->aakdarate,
              'pana_number'=>$number,
              'pana_total_amount'=>0,
              'pana_com'=>0,
              'pana_total_com'=>0,
               'single_pana_amount'=>0,
              'single_pana_rate'=>0,
              'single_pana_win_amount'=>0,
              'double_pana_amount'=>0,
              'double_pana_rate'=>0,
              'double_pana_win_amount'=>0,
              'triple_pana_amount'=>0,
              'triple_pana_rate'=>0,
              'triple_pana_win_amount'=>0,
               'jodi_rate'=>0,
              'jodi_number'=>0,
              'jodi_amount'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$akdatotalcom,
              'total_win'=>$totalaakda*$row->aakdarate,
              'before_patnership'=>($totalaakda*$row->aakdarate+$akdatotalcom),
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->aakdarate*$totalaakda,
                   'total_com'=>$akdatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
             $credit=$row->aakdarate*$totalaakda;
                  
                   if($credit>0){
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->aakdarate*$totalaakda;  
                  
         $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   } 
                  
                   
                   
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
            
           
            
        }else if($row->game_patti_type=='SINGLE-002'){
            
             
            $numb='n'.$number;
            $query = $this->db->field_exists($numb, 'single_pana');
if($query == TRUE)
{
            
           $this->db->select_sum($numb,'totalsingle');
           $this->db->from('single_pana');
           $this->db->where('tran_id',$row->ticket_id);
           $queryresult=$this->db->get();
           $row2 = $queryresult->row();
           $totalsingleamount=$row2->totalsingle;
           
        if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount*$row->aakda_com/100;
        }
        
         if($row->pana_com==0){
            $panacom=0;
            $panatotalcom=0;
        }else{
            $panacom=$row->pana_com;
            $panatotalcom=$row->purchase_amount*$row->pana_com/100;
        }
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalsingleamount*$row->singlepanarate+$panatotalcom;
            $nettopay=($totalsingleamount*$row->singlepanarate+$panatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=($totalsingleamount*$row->singlepanarate+$panatotalcom)-($totalsingleamount*$row->singlepanarate+$panatotalcom)*$row->partnership/100;
            $nettopay=($totalsingleamount*$row->singlepanarate+$panatotalcom)-(($totalsingleamount*$row->singlepanarate+$panatotalcom)*$row->partnership/100)-$row->purchase_amount;
        }
           
           
           $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'total_aakda_amount'=>0,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>0,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>0,
              'pana_number'=>$number,
              'pana_total_amount'=>$row->purchase_amount,
              'pana_com'=>$panacom,
              'pana_total_com'=>$panatotalcom,
              'single_pana_amount'=>$totalsingleamount,
              'single_pana_rate'=>$row->singlepanarate,
              'single_pana_win_amount'=>$row->singlepanarate*$totalsingleamount,
              'double_pana_amount'=>0,
              'double_pana_rate'=>0,
              'double_pana_win_amount'=>0,
              'triple_pana_amount'=>0,
              'triple_pana_rate'=>0,
              'triple_pana_win_amount'=>0,
              'jodi_rate'=>0,
              'jodi_number'=>0,
              'jodi_amount'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$panatotalcom,
              'total_win'=>$row->singlepanarate*$totalsingleamount,
              'before_patnership'=>$row->singlepanarate*$totalsingleamount+$panatotalcom,
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->singlepanarate*$totalsingleamount,
                   'total_com'=>$panatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
                   
                $credit=$row->singlepanarate*$totalsingleamount;
                  
                   if($credit>0){
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->singlepanarate*$totalsingleamount;        
                  $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   
                   }      
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
              
           
}else{
    $totalsingleamount=0;
    if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount*$row->aakda_com/100;
        }
        
         if($row->pana_com==0){
            $panacom=0;
            $panatotalcom=0;
        }else{
            $panacom=$row->pana_com;
            $panatotalcom=$row->purchase_amount*$row->pana_com/100;
        }
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalsingleamount*$row->singlepanarate+$panatotalcom;
            $nettopay=($totalsingleamount*$row->singlepanarate+$panatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=($totalsingleamount*$row->singlepanarate+$panatotalcom)-($totalsingleamount*$row->singlepanarate+$panatotalcom)*$row->partnership/100;
            $nettopay=($totalsingleamount*$row->singlepanarate+$panatotalcom)-(($totalsingleamount*$row->singlepanarate+$panatotalcom)*$row->partnership/100)-$row->purchase_amount;
        }
           
           
           $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'total_aakda_amount'=>0,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>0,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>0,
              'pana_number'=>$number,
              'pana_total_amount'=>$row->purchase_amount,
              'pana_com'=>$panacom,
              'pana_total_com'=>$panatotalcom,
              'single_pana_amount'=>$totalsingleamount,
              'single_pana_rate'=>$row->singlepanarate,
              'single_pana_win_amount'=>$row->singlepanarate*$totalsingleamount,
              'double_pana_amount'=>0,
              'double_pana_rate'=>0,
              'double_pana_win_amount'=>0,
              'triple_pana_amount'=>0,
              'triple_pana_rate'=>0,
              'triple_pana_win_amount'=>0,
              'jodi_rate'=>0,
              'jodi_number'=>0,
              'jodi_amount'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$panatotalcom,
              'total_win'=>$row->singlepanarate*$totalsingleamount,
              'before_patnership'=>$row->singlepanarate*$totalsingleamount+$panatotalcom,
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->singlepanarate*$totalsingleamount,
                   'total_com'=>$panatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
                   
                $credit=$row->singlepanarate*$totalsingleamount;
                  
                   if($credit>0){
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->singlepanarate*$totalsingleamount;        
                  $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   
                   }      
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
}            
        }else if($row->game_patti_type=='DOUBLE-003'){
             $numb='n'.$number;
            $query = $this->db->field_exists($numb, 'double_pana');
if($query == TRUE)
{
            
           $this->db->select_sum($numb,'totalsingle');
           $this->db->from('double_pana');
           $this->db->where('tran_id',$row->ticket_id);
           $queryresult=$this->db->get();
           $row2 = $queryresult->row();
           $totalsingleamount=$row2->totalsingle;
           
              if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount*$row->aakda_com/100;
        }
        
         if($row->pana_com==0){
            $panacom=0;
            $panatotalcom=0;
        }else{
            $panacom=$row->pana_com;
            $panatotalcom=$row->purchase_amount*$row->pana_com/100;
        }
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalsingleamount*$row->doublepanarate+$panatotalcom;
            $nettopay=($totalsingleamount*$row->doublepanarate+$panatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=($totalsingleamount*$row->doublepanarate+$panatotalcom)-($totalsingleamount*$row->doublepanarate+$panatotalcom)*$row->partnership/100;
            $nettopay=($totalsingleamount*$row->doublepanarate+$panatotalcom)-(($totalsingleamount*$row->doublepanarate+$panatotalcom)*$row->partnership/100)-$row->purchase_amount;
        }
           
         $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'total_aakda_amount'=>0,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>0,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>0,
              'pana_number'=>$number,
              'pana_total_amount'=>$row->purchase_amount,
              'pana_com'=>$panacom,
              'pana_total_com'=>$panatotalcom,
              'single_pana_amount'=>0,
              'single_pana_rate'=>0,
              'single_pana_win_amount'=>0,
              'double_pana_amount'=>$totalsingleamount,
              'double_pana_rate'=>$row->doublepanarate,
              'double_pana_win_amount'=>$row->doublepanarate*$totalsingleamount,
              'triple_pana_amount'=>0,
              'triple_pana_rate'=>0,
              'triple_pana_win_amount'=>0,
              'jodi_rate'=>0,
              'jodi_number'=>0,
              'jodi_amount'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$panatotalcom,
              'total_win'=>$row->doublepanarate*$totalsingleamount,
              'before_patnership'=>$row->doublepanarate*$totalsingleamount+$akdatotalcom,
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->doublepanarate*$totalsingleamount,
                   'total_com'=>$panatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
                   
                $credit=$row->doublepanarate*$totalsingleamount;
                  
                   if($credit>0){
                      
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->doublepanarate*$totalsingleamount;     
           
                      
                       
                       
                       
                  $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   
                   }      
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
              
           
}else{
    $totalsingleamount=0;
     if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount*$row->aakda_com/100;
        }
        
         if($row->pana_com==0){
            $panacom=0;
            $panatotalcom=0;
        }else{
            $panacom=$row->pana_com;
            $panatotalcom=$row->purchase_amount*$row->pana_com/100;
        }
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalsingleamount*$row->doublepanarate+$panatotalcom;
            $nettopay=($totalsingleamount*$row->doublepanarate+$panatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=($totalsingleamount*$row->doublepanarate+$panatotalcom)-($totalsingleamount*$row->doublepanarate+$panatotalcom)*$row->partnership/100;
            $nettopay=($totalsingleamount*$row->doublepanarate+$panatotalcom)-(($totalsingleamount*$row->doublepanarate+$panatotalcom)*$row->partnership/100)-$row->purchase_amount;
        }
           
         $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'total_aakda_amount'=>0,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>0,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>0,
              'pana_number'=>$number,
              'pana_total_amount'=>$row->purchase_amount,
              'pana_com'=>$panacom,
              'pana_total_com'=>$panatotalcom,
              'single_pana_amount'=>0,
              'single_pana_rate'=>0,
              'single_pana_win_amount'=>0,
              'double_pana_amount'=>$totalsingleamount,
              'double_pana_rate'=>$row->doublepanarate,
              'double_pana_win_amount'=>$row->doublepanarate*$totalsingleamount,
              'triple_pana_amount'=>0,
              'triple_pana_rate'=>0,
              'triple_pana_win_amount'=>0,
              'jodi_rate'=>0,
              'jodi_number'=>0,
              'jodi_amount'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$panatotalcom,
              'total_win'=>$row->doublepanarate*$totalsingleamount,
              'before_patnership'=>$row->doublepanarate*$totalsingleamount+$akdatotalcom,
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->doublepanarate*$totalsingleamount,
                   'total_com'=>$panatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
                   
                $credit=$row->doublepanarate*$totalsingleamount;
                  
                   if($credit>0){
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->doublepanarate*$totalsingleamount;        
                  $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   
                   }      
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
}            
            
        }else if($row->game_patti_type=='TRIPLE-004'){
              $numb='num_'.$number;
            $query = $this->db->field_exists($numb, 'game_tripple_pana');
if($query == TRUE)
{
            
           $this->db->select_sum($numb,'totalsingle');
           $this->db->from('game_tripple_pana');
           $this->db->where('tran_id',$row->ticket_id);
           $queryresult=$this->db->get();
           $row2 = $queryresult->row();
           $totalsingleamount=$row2->totalsingle;
           
              if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount*$row->aakda_com/100;
        }
        
         if($row->pana_com==0){
            $panacom=0;
            $panatotalcom=0;
        }else{
            $panacom=$row->pana_com;
            $panatotalcom=$row->purchase_amount*$row->pana_com/100;
        }
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalsingleamount*$row->triplepanarate+$panatotalcom;
            $nettopay=($totalsingleamount*$row->triplepanarate+$panatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=($totalsingleamount*$row->triplepanarate+$panatotalcom)-($totalsingleamount*$row->triplepanarate+$panatotalcom)*$row->partnership/100;
            $nettopay=($totalsingleamount*$row->triplepanarate+$panatotalcom)-(($totalsingleamount*$row->triplepanarate+$panatotalcom)*$row->partnership/100)-$row->purchase_amount;
        }
           
         $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'total_aakda_amount'=>0,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>0,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>0,
              'pana_number'=>$number,
              'pana_total_amount'=>$row->purchase_amount,
              'pana_com'=>$panacom,
              'pana_total_com'=>$panatotalcom,
              'single_pana_amount'=>0,
              'single_pana_rate'=>0,
              'single_pana_win_amount'=>0,
              'double_pana_amount'=>0,
              'double_pana_rate'=>0,
              'double_pana_win_amount'=>0,
              'triple_pana_amount'=>$totalsingleamount,
              'triple_pana_rate'=>$row->triplepanarate,
              'triple_pana_win_amount'=>$row->triplepanarate*$totalsingleamount,
              'jodi_rate'=>0,
              'jodi_number'=>0,
              'jodi_amount'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$panatotalcom,
              'total_win'=>$row->triplepanarate*$totalsingleamount,
              'before_patnership'=>$row->triplepanarate*$totalsingleamount+$akdatotalcom,
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->triplepanarate*$totalsingleamount,
                   'total_com'=>$panatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
                   
                $credit=$row->triplepanarate*$totalsingleamount;
                  
                   if($credit>0){
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->triplepanarate*$totalsingleamount;        
                  $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   
                   }      
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
              
           
}else{
    $totalsingleamount=0;
       if($row->aakda_com==0){
            $akdacom=0;
            $akdatotalcom=0;
        }else{
            $akdacom=$row->aakda_com;
            $akdatotalcom=$row->purchase_amount*$row->aakda_com/100;
        }
        
         if($row->pana_com==0){
            $panacom=0;
            $panatotalcom=0;
        }else{
            $panacom=$row->pana_com;
            $panatotalcom=$row->purchase_amount*$row->pana_com/100;
        }
        
        if($row->partnership==0){
            $patnership=0;
            $after_patnership=$totalsingleamount*$row->triplepanarate+$panatotalcom;
            $nettopay=($totalsingleamount*$row->triplepanarate+$panatotalcom)-$row->purchase_amount;
        }else{
            $patnership=$row->partnership;
            $after_patnership=($totalsingleamount*$row->triplepanarate+$panatotalcom)-($totalsingleamount*$row->triplepanarate+$panatotalcom)*$row->partnership/100;
            $nettopay=($totalsingleamount*$row->triplepanarate+$panatotalcom)-(($totalsingleamount*$row->triplepanarate+$panatotalcom)*$row->partnership/100)-$row->purchase_amount;
        }
           
         $windetails=array(
              'customer_id'=>$row->customer_id,
              'bazar_id'=>$row->game_id,
              'category'=>$row->game_type,
              'date'=>$row->date,
              'ticket_number'=>$row->ticket_id,
              'aakda_number'=>$aakda,
              'total_aakda_amount'=>0,
              'aakda_com'=>$akdacom,
              'aakda_total_com'=>0,
              'aakda_rate'=>$row->aakdarate,
              'aakda_win_amount'=>0,
              'pana_number'=>$number,
              'pana_total_amount'=>$row->purchase_amount,
              'pana_com'=>$panacom,
              'pana_total_com'=>$panatotalcom,
                 'single_pana_amount'=>0,
              'single_pana_rate'=>0,
              'single_pana_win_amount'=>0,
              'double_pana_amount'=>0,
              'double_pana_rate'=>0,
              'double_pana_win_amount'=>0,
              'triple_pana_amount'=>$totalsingleamount,
              'triple_pana_rate'=>$row->triplepanarate,
              'triple_pana_win_amount'=>$row->triplepanarate*$totalsingleamount,
              'jodi_rate'=>0,
              'jodi_number'=>0,
              'jodi_amount'=>0,
              'jodi_win_amount'=>0,
              'total_com'=>$panatotalcom,
              'total_win'=>$row->triplepanarate*$totalsingleamount,
              'before_patnership'=>$row->triplepanarate*$totalsingleamount+$akdatotalcom,
              'patnership'=>$patnership,
              'after_patnership'=>$after_patnership,
              'nettopay'=>$nettopay
               );
               
               $ticketdetails=array(
                   'ticket_result_status'=>1,
                   'ticket_win_amount'=>$row->triplepanarate*$totalsingleamount,
                   'total_com'=>$panatotalcom,
                   'afterpatnership'=>$after_patnership,
                   'ticket_net_pay'=>$nettopay
                   );
                   
                   
                   
                   
                $credit=$row->triplepanarate*$totalsingleamount;
                  
                   if($credit>0){
           $creditrefrence=$this->getcreditrefrence($row->game_user_id)+$row->triplepanarate*$totalsingleamount;        
                  $passbookData = array(
              'game_user_id'=>$row->customer_id,
              'tran_id'=>$row->ticket_id,
              'datafrom'=>'null',
              'datato'=>'null',
              'debit'=>0,
              'credit'=>$credit,
              'closing'=>$creditrefrence,
              'description'=>'win amount',
              'date'=>$row->date,
              'createdby'=>(string)$_SESSION['username'],
  
          );
                  
                   $this->db->insert('user_passbook',$passbookData);
                   
                   $this->db->set('creditrefrence',$creditrefrence);
                   $this->db->where('game_user_id',$row->customer_id);
                   $this->db->update('game_user_account');
                   
                   }      
                   
                   
                   $this->db->insert('game_win_record',$windetails);
                   
                   $this->db->where('ticket_id',$row->ticket_id);
                   $this->db->update('game_ticket',$ticketdetails);
}            
            
        }
    
    
     }
    
        
    }
}

}

?>