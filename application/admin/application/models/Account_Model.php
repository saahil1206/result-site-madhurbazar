<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account_Model extends CI_Model{
	
function __construct(){
	parent::__construct();
}

public function getAccountType(){
	
	 $query = $this->db->get('game_group');
 
     return $query;
}



public function getUserName(){

    $query = $this->db->get('game_user_account');
 
     return $query;	
}
public function getstockist2($id){
    
$this->db->select('*');
$this->db->from('game_user_personal');
$this->db->join('game_user_account', 'game_user_account.game_user_id = game_user_personal.id');
$this->db->join('game_user_commission', 'game_user_commission.game_user_id = game_user_personal.id');

$this->db->where('game_user_account.game_group_id',3);
$this->db->where('game_user_personal.id', $id);
$query = $this->db->get();
return $query;

}

public function getstockist($id){
    
$this->db->select('*');
$this->db->from('game_user_personal');
$this->db->join('game_customer_createdby', 'game_customer_createdby.userid = game_user_personal.id');
$this->db->join('game_user_account', 'game_user_account.game_user_id = game_user_personal.id');
$this->db->join('game_user_commission', 'game_user_commission.game_user_id = game_user_personal.id');

$this->db->where('game_user_account.game_group_id',3);
$this->db->where('game_customer_createdby.createdby', $id);
$query = $this->db->get();
return $query;

}
public function getagent2($id){
    
$this->db->select('*');
$this->db->from('game_user_personal');
$this->db->join('game_user_account', 'game_user_account.game_user_id = game_user_personal.id');
$this->db->join('game_user_commission', 'game_user_commission.game_user_id = game_user_personal.id');

$this->db->where('game_user_account.game_group_id',4);
$this->db->where('game_user_personal.id', $id);
$query = $this->db->get();
return $query;

}

public function getagent($id){
    
$this->db->select('*');
$this->db->from('game_user_personal');
$this->db->join('game_customer_createdby', 'game_customer_createdby.userid = game_user_personal.id');
$this->db->join('game_user_account', 'game_user_account.game_user_id = game_user_personal.id');
$this->db->join('game_user_commission', 'game_user_commission.game_user_id = game_user_personal.id');

$this->db->where('game_user_account.game_group_id',4);
$this->db->where('game_customer_createdby.createdby', $id);
$query = $this->db->get();
return $query;

}


public function getplayer($id){
    
$this->db->select('*');
$this->db->from('game_user_personal');
$this->db->join('game_customer_createdby', 'game_customer_createdby.userid = game_user_personal.id');
$this->db->join('game_user_account', 'game_user_account.game_user_id = game_user_personal.id');
$this->db->join('game_user_commission', 'game_user_commission.game_user_id = game_user_personal.id');

$this->db->where('game_user_account.game_group_id',5);
$this->db->where('game_customer_createdby.createdby', $id);
$query = $this->db->get();
return $query;

}
public function getplayerwinbydate($id,$datefrom,$dateto){
    $ids=$this->getUserid2($id); 
    
    $this->db->select_sum('total_aakda_amount','total_aakda_amount');
    $this->db->select_sum('aakda_total_com','aakda_total_com');
    
    $this->db->select_sum('aakda_total_wamount','aakda_total_wamount');
    $this->db->select_sum('aakda_win_amount','aakda_win_amount');
     $this->db->select_sum('pana_total_amount','pana_total_amount');
    $this->db->select_sum('pana_total_com','pana_total_com');
    
        $this->db->select_sum('single_pana_amount','single_pana_amount');
        $this->db->select_sum('single_pana_win_amount','single_pana_win_amount');
        
             $this->db->select_sum('double_pana_amount','double_pana_amount');
        $this->db->select_sum('double_pana_win_amount','double_pana_win_amount');
        
             $this->db->select_sum('triple_pana_amount','triple_pana_amount');
        $this->db->select_sum('triple_pana_win_amount','triple_pana_win_amount');
        $this->db->select_sum('jodi_total_amount','jodi_total_amount');
     $this->db->select_sum('jodi_amount','jodi_amount');
    $this->db->select_sum('jodi_win_amount','jodi_win_amount');
    
     $this->db->select_sum('total_com','total_com');
     $this->db->select_sum('total_win','total_win');
    $this->db->select_sum('before_patnership','before_patnership');
    
    
     $this->db->select_sum('after_patnership','after_patnership');
     $this->db->select_sum('nettopay','nettopay');
    
    $this->db->where_in('customer_id',$ids);
     $this->db->where('date >=', $datefrom);
   $this->db->where('date <=', $dateto);
    $query = $this->db->get('game_win_record');
    $row2= $query->row();
    return $row2; 
    
}
 public function getuserpercentage($userid){
     $data=array();
     $accesslevel=$this->getAccessLevel2($userid);
         $this->db->select('*');
         $this->db->from('game_user_commission');
         $this->db->where('game_user_id',$userid);
         $query = $this->db->get();
         $row2= $query->row();
         $percentage=$row2->partnership;
       
     if($accesslevel==3){
         
            $data['masterpercentage']=$percentage;
            $data['agentpercentage']=null;
            $data['playerpercentage']=null;
    
    
     }else if ($accesslevel==4){
           $this->db->select('*');
           $this->db->from('game_customer_createdby');
           $this->db->join('game_user_commission', 'game_user_commission.game_user_id = game_customer_createdby.createdby');
           $this->db->where('game_customer_createdby.userid',$userid);
           $query = $this->db->get();
            $row3= $query->row();
            $data['masterpercentage']=$row3->partnership;
            $data['agentpercentage']=$percentage;
            $data['playerpercentage']=null;
     }else if($accesslevel==5){
            //$data['masterpercentage']=$row3->partnership;
            //$data['agentpercentage']=$percentage;
            //$data['playerpercentage']=$percentage;
            $this->db->select('*');
           $this->db->from('game_customer_createdby');
          // $this->db->join('game_user_commission', 'game_user_commission.game_user_id = game_customer_createdby.createdby');
           
           $this->db->where('userid',$userid);
           $query = $this->db->get();
            $row3= $query->row();
            $createdby=$row3->createdby;
           
            $customeraccesslevel=$this->getAccessLevel2($createdby);
            if($customeraccesslevel==1){
            $data['masterpercentage']=$percentage;
            $data['agentpercentage']=null;
            $data['playerpercentage']=$percentage;
            
            }else if($customeraccesslevel==3){
                 $this->db->select('*');
                 $this->db->from('game_user_commission');
                 $this->db->where('game_user_id',$createdby);
                 $query = $this->db->get();
                 $row3= $query->row();
                 $percentage2=$row3->partnership;
                 
            $data['masterpercentage']=$percentage2;
            $data['agentpercentage']=null;
            $data['playerpercentage']=$percentage;
                
            }else if($customeraccesslevel==4){
                
                   $this->db->select('*');
                 $this->db->from('game_user_commission');
                 $this->db->where('game_user_id',$createdby);
                 $query = $this->db->get();
                 $row3= $query->row();
                 $percentage2=$row3->partnership;
                 
                 $this->db->select('*');
           $this->db->from('game_customer_createdby');
           $this->db->join('game_user_commission', 'game_user_commission.game_user_id = game_customer_createdby.createdby');
           
           $this->db->where('game_customer_createdby.userid',$createdby);
           $query2 = $this->db->get();
            $row4= $query2->row();
            $percentage3=$row4->partnership;     
                 $data['masterpercentage']=$percentage3;
                 $data['agentpercentage']=$percentage2;
                 $data['playerpercentage']=$percentage;
            }
            //return $data;
            //$data['masterpercentage']=$row3->partnership;
            
     }
     
     return $data;
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
             if($this->getAccessLevel2($valid)==4){
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
      $count=count($dataid);
      if($count>0){
         return $dataid; 
      }else{
          return $useridd;
      }
     // return $dataid;
      
  }
public function getplayerwin($id){
     
    $ids=$this->getUserid2($id);
  
    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d", time());
    $this->db->select_sum('total_aakda_amount','total_aakda_amount');
    $this->db->select_sum('aakda_total_com','aakda_total_com');
    
    $this->db->select_sum('aakda_total_wamount','aakda_total_wamount');
    $this->db->select_sum('aakda_win_amount','aakda_win_amount');
     $this->db->select_sum('pana_total_amount','pana_total_amount');
    $this->db->select_sum('pana_total_com','pana_total_com');
    
        $this->db->select_sum('single_pana_amount','single_pana_amount');
        $this->db->select_sum('single_pana_win_amount','single_pana_win_amount');
        
             $this->db->select_sum('double_pana_amount','double_pana_amount');
        $this->db->select_sum('double_pana_win_amount','double_pana_win_amount');
        
             $this->db->select_sum('triple_pana_amount','triple_pana_amount');
        $this->db->select_sum('triple_pana_win_amount','triple_pana_win_amount');
        $this->db->select_sum('jodi_total_amount','jodi_total_amount');
     $this->db->select_sum('jodi_amount','jodi_amount');
    $this->db->select_sum('jodi_win_amount','jodi_win_amount');
    
     $this->db->select_sum('total_com','total_com');
     $this->db->select_sum('total_win','total_win');
    $this->db->select_sum('before_patnership','before_patnership');
    
    
     $this->db->select_sum('after_patnership','after_patnership');
     $this->db->select_sum('nettopay','nettopay');
    
    $this->db->where_in('customer_id',$ids);
    $this->db->where('date',$date);
    $query = $this->db->get('game_win_record');
    $row2= $query->row();
    return $row2;
    
}
public function getAccountCommission($id){
    $this->db->where('game_user_id',$id);
    $query = $this->db->get('game_user_commission');
    $row = $query->row();
    return $row;	
}
public function addUserPersonaL($data){
 $this->db->insert('game_user_personal',$data);
 $insert_id = $this->db->insert_id();

   return  $insert_id;	

}

public function addUserAccount($data){
 $this->db->insert('game_user_account',$data);
 

   return true;

}
public function addUserCommission($data){
 $this->db->insert('game_user_commission',$data);
 

   return true;

}

public function addUserMaster($data){
 $this->db->insert('game_customer_createdby',$data);
 

   return true;

}

public function addUserpassbook($data){
 $this->db->insert('user_passbook',$data);
 

   return true;

}

public function addUserGame($data){
 $this->db->insert('game_user_bazar',$data);
 

   return true;

}
public function allUserbyAccount($id){
$this->db->select('*');
$this->db->from('game_user_personal');
$this->db->join('game_customer_createdby', 'game_customer_createdby.userid = game_user_personal.id');

$this->db->where('game_customer_createdby.createdby', $id);
$query = $this->db->get();
return $query;
}
public function allUserbyAccount2(){
  $this->db->select('*');
  //$this->db->where('game_customer_createdby.createdby', $id);
  $this->db->from('game_user_personal');
  //$this->db->join('game_customer_createdby', 'game_customer_createdby.userid = game_user_personal.id');
  $this->db->join('game_user_account', 'game_user_account.game_user_id = game_user_personal.id');
  
  $this->db->where('game_user_account.game_group_id!=',1);
  $query = $this->db->get();
  return $query;
  }
public function allUserAccount($id){
$this->db->select('*');
$this->db->from('game_user_personal');
$this->db->join('game_customer_createdby', 'game_customer_createdby.userid = game_user_personal.id');
//$this->db->where('createdby', $id);
$this->db->join('game_user_account', 'game_user_account.game_user_id = game_user_personal.id');
$this->db->join('game_group', 'game_group.group_id = game_user_account.game_group_id');

$this->db->where('game_customer_createdby.createdby', $id)->where('game_user_personal.deleted_at', NULL);
$query = $this->db->get();
return $query;
}
public function allUserCommission($id){
$this->db->select('*');
$this->db->from('game_user_personal');
$this->db->join('game_customer_createdby', 'game_customer_createdby.userid = game_user_personal.id');
//$this->db->where('createdby', $id);
$this->db->join('game_user_commission', 'game_user_commission.game_user_id = game_user_personal.id');
//$this->db->join('game_group', 'game_group.id = game_user_account.game_group_id');

$this->db->where('game_customer_createdby.createdby', $id);
$query = $this->db->get();
return $query;
}

}