<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Report_Model extends CI_Model{
	
function __construct(){
	parent::__construct();
}

public function getTicket($userId){
    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d", time());
    $this->db->where('customer_id',$userId);
    $this->db->where('date',$date);
    $query = $this->db->get('game_ticket');

    return $query;

}

public function ticketdetails($ticketid){
    $this->db->where('ticket_number',$ticketid);
    $query = $this->db->get('game_win_record');

    return $query;
}


public function getPassbook($userId){
    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d", time());
    $this->db->where('game_user_id',$userId);
    $this->db->where('date',$date);
    $query = $this->db->get('user_passbook');

    return $query;

}


public function getAdminPassbook($userId){

    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d", time());
    $this->db->select('*');
    $this->db->from('user_passbook');
    $this->db->where('user_passbook.date',$date);
    $this->db->join('game_customer_createdby', 'game_customer_createdby.userid = user_passbook.game_user_id');
    $this->db->join('game_user_personal', 'game_user_personal.id = user_passbook.game_user_id');
    $this->db->where('game_customer_createdby.createdby', $userId);
    
    $query = $this->db->get();

    return $query;

}

public function getAdminPassbooksearch($userid,$fromdate,$todate){
    $this->db->select('*');
    $this->db->from('user_passbook');
    $this->db->join('game_customer_createdby', 'game_customer_createdby.userid = user_passbook.game_user_id');
    $this->db->join('game_user_personal', 'game_user_personal.id = user_passbook.game_user_id');
   
    $this->db->where('date >=', $fromdate);
   $this->db->where('date <=', $todate);
   $this->db->where('game_customer_createdby.createdby', $userid);
   $query = $this->db->get();

   return $query;
}
public function getAdminPassbooksearch2($userid,$fromdate,$todate){
    $this->db->select('*');
    $this->db->from('user_passbook');
   // $this->db->join('game_customer_createdby', 'game_customer_createdby.userid = user_passbook.game_user_id');
    $this->db->join('game_user_personal', 'game_user_personal.id = user_passbook.game_user_id');
   
    $this->db->where('date >=', $fromdate);
   $this->db->where('date <=', $todate);
   $this->db->where('game_user_personal.id', $userid);
   $query = $this->db->get();

   return $query;

}
public function getAdminPassbooksearchall($userid,$fromdate,$todate){
    $this->db->select('*');
    $this->db->from('user_passbook');
   // $this->db->join('game_customer_createdby', 'game_customer_createdby.userid = user_passbook.game_user_id');
    $this->db->join('game_user_personal', 'game_user_personal.id = user_passbook.game_user_id');
   
    $this->db->where('date >=', $fromdate);
   $this->db->where('date <=', $todate);
   //$this->db->where('game_user_personal.id', $userid);
   $query = $this->db->get();

   return $query;

}
public function getAdminPassbook2($userId){

    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d", time());
    $this->db->select('*');
    $this->db->from('user_passbook');
   $this->db->where('user_passbook.date',$date);
    //$this->db->join('game_customer_createdby', 'game_customer_createdby.userid = user_passbook.game_user_id');
    $this->db->join('game_user_personal', 'game_user_personal.id = user_passbook.game_user_id');
    $this->db->where('user_passbook.game_user_id', $userId);
    
    $query = $this->db->get();

    return $query;

}
public function getAdminTicket(){
    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d", time());
    $this->db->select('*');
    $this->db->from('game_ticket');
   
    $this->db->join('game_user_personal', 'game_user_personal.id = game_ticket.customer_id');  
    $this->db->where('game_ticket.date',$date);
    $query = $this->db->get();
    return $query;
}
 public function getAccessLevel2($userid){
      $this->db->where('game_user_id',$userid);
      $query = $this->db->get('game_user_account');
      $row2= $query->row();
      return  $row2->game_group_id;
  }
  
  public function getUserid2($useridd){
      $accesstry=$this->getAccessLevel2($useridd);
     
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

public function getAdminTicket2($userId){
    
    
    $ids=$this->getUserid2($userId);
    //print_r($ids);
   array_push($ids,$userId);
  
    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d", time());
    $this->db->select('*');
    $this->db->from('game_ticket');
   
    $this->db->join('game_user_personal', 'game_user_personal.id = game_ticket.customer_id');  
    $this->db->where('game_ticket.date',$date);
        
    $this->db->where_in('game_ticket.customer_id',$ids);
   
    $query = $this->db->get();
    return $query;
}
public function gameDataByBazar($ticketid,$gameid,$customer_id){

    
    if($gameid=='AAKDA-001'){
     $sql="select sum(single0) as value1,sum(single1) as value2,sum(single2) as value3,sum(single3) as value4,
      sum(single4) as value5,
      sum(single5) as value6,
      sum(single6) as value7,
      sum(single7) as value8,
      sum(single8) as value9,
      sum(single9) as value10,
      sum(total) as value11
       from game_single_digit where  tran_id='".$ticketid."' and customer_id='".$customer_id."'";

       $query = $this->db->query($sql);

      return $query;

     } else if ($gameid=='SINGLE-002') {
    $this->db->where('tran_id',$ticketid);
    $query = $this->db->get('single_pana');

     } else if ($gameid=='DOUBLE-003') {
    $this->db->where('tran_id',$ticketid);
    $query = $this->db->get('double_pana');

     } else if ($gameid=='TRIPLE-001') {
    $this->db->where('tran_id',$ticketid);
    $query = $this->db->get('game_tripple_pana');

     } else if ($gameid=='JODI-004') {
    $this->db->where('tran_id',$ticketid);
    $query = $this->db->get('jodi');

     }
    return $query;
}

public function gameDataByBazarAdmin($gamename,$date,$bazar,$category){

    
    if($gamename=='aakda'){
     $sql="select sum(single0) as value1,sum(single1) as value2,sum(single2) as value3,
     sum(single3) as value4,
      sum(single4) as value5,
      sum(single5) as value6,
      sum(single6) as value7,
      sum(single7) as value8,
      sum(single8) as value9,
      sum(single9) as value10,
      sum(total) as value11
       from game_single_digit where  date='".$date."' and bazar='".$bazar."' and bazar_type='".$category."'";



      $query = $this->db->query($sql);

      return $query;

     }
}

public function gameDataByBazarAdmin22($gamename,$date,$bazar,$category){

    
    if($gamename=='aakda'){
     $sql="select sum(single0*masterpercent/100) as value1,sum(single1*masterpercent/100) as value2,sum(single2*masterpercent/100) as value3,
     sum(single3*masterpercent/100) as value4,
      sum(single4*masterpercent/100) as value5,
      sum(single5*masterpercent/100) as value6,
      sum(single6*masterpercent/100) as value7,
      sum(single7*masterpercent/100) as value8,
      sum(single8*masterpercent/100) as value9,
      sum(single9*masterpercent/100) as value10,
      sum(total*masterpercent/100) as value11
       from game_single_digit where  date='".$date."' and bazar='".$bazar."' and bazar_type='".$category."'";



      $query = $this->db->query($sql);

      return $query;

     }
}
public function gameDataByBazarAdmin2($gamename,$date,$bazar,$category,$username){

       $ids= $this->getUserid($username);
       $this->db->select_sum('single0','value1');
       $this->db->select_sum('single1','value2');
       $this->db->select_sum('single2','value3');
       $this->db->select_sum('single3','value4');
       $this->db->select_sum('single4','value5');
       $this->db->select_sum('single5','value6');
       $this->db->select_sum('single6','value7');
       $this->db->select_sum('single7','value8');
       $this->db->select_sum('single8','value9');
       $this->db->select_sum('single9','value10');
       $this->db->select_sum('total','value11');
       
       $this->db->where('date',$date);
       if($bazar!='SelectAll'){
       $this->db->where('bazar',$bazar);
       }
       if($category!='SelectAll'){
       $this->db->where('bazar_type',$category);
       }
        
       $this->db->where_in('customer_id',$ids);
        
       $query = $this->db->get('game_single_digit');
       return $query;  
        
     

}


public function ret($nuber,$ticketid,$gameid,$customer_id){

   
 if ($gameid=='SINGLE-002') {
    $this->db->where('tran_id',$ticketid);
    $this->db->where('customer_id',$customer_id);
   // $this->db->where('customer_id',$customer_id);
    
    $query = $this->db->get('single_pana');
     $row2= $query->row();
     return  $row2->$nuber;
      //echo  $row2->$nuber;
    //exit;
     }elseif ($gameid=='DOUBLE-003') {

         $this->db->where('tran_id',$ticketid);
    $this->db->where('customer_id',$customer_id);
   // $this->db->where('customer_id',$customer_id);
    
    $query = $this->db->get('double_pana');
     $row2= $query->row();
     return  $row2->$nuber;
     }elseif ($gameid=='JODI-004') {
        $this->db->where('tran_id',$ticketid);
    $this->db->where('coustomer_id',$customer_id);
   // $this->db->where('customer_id',$customer_id);
    
    $query = $this->db->get('jodi');
     $row2= $query->row();
      return  $row2->$nuber;
     }
}

public function retAdmin($number,$gamename,$date,$bazar,$category){

 $percent='masterpercent';
   
 if ($gamename=='single') {
    
     
   
      $this->db->select_sum($number,'total');
    $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
   // $this->db->where('customer_id',$customer_id);
  
    $query = $this->db->get('single_pana');
    
     $row2= $query->row();
    
     $this->db->select_sum('('.$number.'*'.$percent.')','total');
    $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
   // $this->db->where('customer_id',$customer_id);
    
    $query = $this->db->get('single_pana');
     $row3= $query->row();
     
    
     return  $row2->total.'<hr>'.$row3->total/100;
    
     }elseif ($gamename=='double') {
         $this->db->select_sum($number,'total');
        $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
   // $this->db->where('customer_id',$customer_id);
    
    $query = $this->db->get('double_pana');
     $row2= $query->row();
     
         $this->db->select_sum('('.$number.'*'.$percent.')','total');
        $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
   // $this->db->where('customer_id',$customer_id);
    
    $query = $this->db->get('double_pana');
     $row3= $query->row();
     return  $row2->total.'<hr>'.$row3->total/100;
     }elseif ($gamename=='jodi') {
          $this->db->select_sum($number,'total');
       $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
   // $this->db->where('customer_id',$customer_id);
    
    $query = $this->db->get('jodi');
     $row2= $query->row();
     
          $this->db->select_sum('('.$number.'*'.$percent.')','total');
       $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
   // $this->db->where('customer_id',$customer_id);
    
    $query = $this->db->get('jodi');
     $row3= $query->row();
     return  $row2->total.'<hr>'.$row3->total/100;
     }
}
public function retAdmin_t($number,$gamename,$date,$bazar,$category){

 $percent='masterpercent';
   
 if ($gamename=='single') {
    
     
   
      $this->db->select_sum($number,'total');
    $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
   // $this->db->where('customer_id',$customer_id);
  
    $query = $this->db->get('single_pana');
    
     $row2= $query->row();
    
     $this->db->select_sum('('.$number.'*'.$percent.')','total');
    $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
   // $this->db->where('customer_id',$customer_id);
    
    $query = $this->db->get('single_pana');
     $row3= $query->row();
     
    
     return  $row2->total;
    
     }elseif ($gamename=='double') {
         $this->db->select_sum($number,'total');
        $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
   // $this->db->where('customer_id',$customer_id);
    
    $query = $this->db->get('double_pana');
     $row2= $query->row();
     
         $this->db->select_sum('('.$number.'*'.$percent.')','total');
        $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
   // $this->db->where('customer_id',$customer_id);
    
    $query = $this->db->get('double_pana');
     $row3= $query->row();
     return  $row2->total;
     }elseif ($gamename=='jodi') {
          $this->db->select_sum($number,'total');
       $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
   // $this->db->where('customer_id',$customer_id);
    
    $query = $this->db->get('jodi');
     $row2= $query->row();
     
          $this->db->select_sum('('.$number.'*'.$percent.')','total');
       $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
   // $this->db->where('customer_id',$customer_id);
    
    $query = $this->db->get('jodi');
     $row3= $query->row();
     return  $row2->total;
     }
}
public function retAdmin2($number,$gamename,$date,$bazar,$category,$username){

  $ids= $this->getUserid($username); 
 if ($gamename=='single') {
     $this->db->select_sum($number);
    $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
    $this->db->where_in('customer_id',$ids);
    
    $query = $this->db->get('single_pana');
     $row2= $query->row();
     return  $row2->$number;
      //echo  $row2->$nuber;
    //exit;
     }elseif ($gamename=='double') {
         $this->db->select_sum($number);
        $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
    $this->db->where_in('customer_id',$ids);
    
    $query = $this->db->get('double_pana');
     $row2= $query->row();
     return  $row2->$number;
     }elseif ($gamename=='jodi') {
          $this->db->select_sum($number);
       $this->db->where('date',$date);
    $this->db->where('bazar',$bazar);
    $this->db->where('bazar_type',$category);
    $this->db->where_in('coustomer_id',$ids);
    
    $query = $this->db->get('jodi');
     $row2= $query->row();
      return  $row2->$number;
     }
}

public function rettripledata($ticketid,$gameid,$customer_id){

    
    if($gameid=='TRIPLE-004'){
$sql="select sum(num_777) as value1,sum(num_444) as value2,sum(num_111) as value3,sum(  num_888) as value4,
      sum(num_555) as value5,
      sum(num_222) as value6,
      sum(num_999) as value7,
      sum(num_666) as value8,
      sum(num_333) as value9,
      sum(num_000) as value10,
      sum(total) as value11
       from game_tripple_pana where tran_id='".$ticketid."' and customer_id='".$customer_id."'";

       $query = $this->db->query($sql);

      return $query;
      }
  }
public function rettripledataAdmin22($gamename,$date,$bazar,$category){

    
  
$sql="select sum(num_777*masterpercent/100) as value1,sum(num_444*masterpercent/100) as value2,sum(num_111*masterpercent/100) as value3,sum(num_888*masterpercent/100) as value4,
      sum(num_555*masterpercent/100) as value5,
      sum(num_222*masterpercent/100) as value6,
      sum(num_999*masterpercent/100) as value7,
      sum(num_666*masterpercent/100) as value8,
      sum(num_333*masterpercent/100) as value9,
      sum(num_000*masterpercent/100) as value10,
      sum(total*masterpercent/100) as value11
       from game_tripple_pana where  date='".$date."' and bazar='".$bazar."' and bazar_type='".$category."'";
    
       $query = $this->db->query($sql);

      return $query;
      
  }
public function rettripledataAdmin($gamename,$date,$bazar,$category){

    
  
$sql="select sum(num_777) as value1,sum(num_444) as value2,sum(num_111) as value3,sum(  num_888) as value4,
      sum(num_555) as value5,
      sum(num_222) as value6,
      sum(num_999) as value7,
      sum(num_666) as value8,
      sum(num_333) as value9,
      sum(num_000) as value10,
      sum(total) as value11
       from game_tripple_pana where  date='".$date."' and bazar='".$bazar."' and bazar_type='".$category."'";
    
       $query = $this->db->query($sql);

      return $query;
      
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
  public function agentid($useridd){
       $this->db->where('createdby',$useridd);
          $query = $this->db->get('game_customer_createdby');
          foreach($query->result() as $row){
             $dataid[]=$row->userid;
          }
          return $dataid;
  }

  public function rettripledataAdmin2($gamename,$date,$bazar,$category,$username){
       $ids= $this->getUserid($username);
       $this->db->select_sum('num_777','value1');
       $this->db->select_sum('num_444','value2');
       $this->db->select_sum('num_111','value3');
       $this->db->select_sum('num_888','value4');
       $this->db->select_sum('num_555','value5');
       $this->db->select_sum('num_222','value6');
       $this->db->select_sum('num_999','value7');
       $this->db->select_sum('num_666','value8');
       $this->db->select_sum('num_333','value9');
       $this->db->select_sum('num_000','value10');
       $this->db->select_sum('total','value11');
       
       $this->db->where('date',$date);
       if($bazar!='SelectAll'){
       $this->db->where('bazar',$bazar);
       }
       if($category!='SelectAll'){
       $this->db->where('bazar_type',$category);
       }
        
       $this->db->where_in('customer_id',$ids);
        
       $query = $this->db->get('game_tripple_pana');
       return $query;  
    
      
  }
  
  
    public function getTicketSearched2($fromdate,$todate,$bazarname,$categoryname,$customer_id){
      if($customer_id!='selectall'){
    //echo $customer_id;
    //exit;
    $ids=$this->getUserid2($customer_id);
   
      }
         
   $this->db->where('date >=', $fromdate);
   $this->db->where('date <=', $todate);
    if($bazarname!='selectall'){
     $this->db->where('game_id',$bazarname);
    }
    if($categoryname!='selectall'){ 
    $this->db->where('game_type',$categoryname);
   // $this->db->where('customer_id',$customer_id);
    }
    
    
    if($customer_id!='selectall'){
     $this->db->where_in('customer_id',$ids);
    }
    
    $query = $this->db->get('game_ticket');
    return $query;
}

  public function getTicketSearched($fromdate,$todate,$bazarname,$categoryname,$customer_id){
     
   $this->db->where('date >=', $fromdate);
   $this->db->where('date <=', $todate);
    if($bazarname!='selectall'){
     $this->db->where('game_id',$bazarname);
    }
    if($categoryname!='selectall'){ 
    $this->db->where('game_type',$categoryname);
   // $this->db->where('customer_id',$customer_id);
    }
    $this->db->where('customer_id',$customer_id);
   
    
    $query = $this->db->get('game_ticket');
    return $query;
}


}