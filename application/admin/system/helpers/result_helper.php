<?php

defined('BASEPATH') OR exit('No direct script access allowed');


function getResult($id,$bazar_type,$date){
	
   $CI =& get_instance();
   $mod = $CI->load->model('Result_Model');
   
   $res=$CI->Result_Model->getResultByDate($id,$bazar_type,$date);
	
	return $res;
	
}

function getresult_time($date,$bazar){

     $CI =& get_instance();
     $mod = $CI->load->model('Result_Model');
   
     $result = $CI->Result_Model->getresult_time($date,$bazar);
    
 return $result;
    
}
function getRecent($id,$bazar_type,$date){
	
   $CI =& get_instance();
   $mod = $CI->load->model('Result_Model');
   
   $res=$CI->Result_Model->getRecent($id,$bazar_type,$date);
	
	return $res;
	
}

if ( ! function_exists('usercom'))
{
	function usercom($id){

		$CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Result_Model');

    // Call a function of the model
   $result= $CI->Result_Model->usercom($id);


    return $result;

	}
}


if ( ! function_exists('lotteryresult2'))
{
	function lotteryresult2($date,$madhurbazar){

		$CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Result_Model');

    // Call a function of the model
   $result= $CI->Result_Model->Getresult2($date,$madhurbazar);


    return $result;

	}
}
if ( ! function_exists('resultdata1'))
{
	function resultdata1($madhurbazar){

		$CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Result_Model');

    // Call a function of the model
   $result= $CI->Result_Model->getdata1($madhurbazar);


    return $result;

	}
}



function getBazarActiveData($id,$open,$customer_id){
	
   $CI =& get_instance();
   $mod = $CI->load->model('Bazar_Model');
   
   $res=$CI->Bazar_Model->getBazarActiveData($id,$open,$customer_id);
	
	return $res;
	
}
function getplayerwin($id){
    $CI =& get_instance();
   $mod = $CI->load->model('Bazar_Model');
   
   $res=$CI->Account_Model->getplayerwin($id);
	
	return $res; 
}
function getplayerwinbydate($id,$datefrom,$dateto){
    $CI =& get_instance();
   $mod = $CI->load->model('Bazar_Model');
   
   $res=$CI->Account_Model->getplayerwinbydate($id,$datefrom,$dateto);
	
	return $res; 
}

function getBazarActiveData2($id,$open){
	
   $CI =& get_instance();
   $mod = $CI->load->model('Bazar_Model');
   
   $res=$CI->Bazar_Model->getBazarActiveData2($id,$open);
	
	return $res;
	
}

function getBazarNameById($id){
	
   $CI =& get_instance();
   $mod = $CI->load->model('Bazar_Model');
   
   $res=$CI->Bazar_Model->getBazarNameById($id);
	
	return $res;
	
}

function getUserNameById($id){
   $CI =& get_instance();
   $mod = $CI->load->model('User_Model');
   $res=$CI->User_Model->getUserNameById($id);
	
	return $res;   
    
}



function gameDataByBazar($ticketid,$gameid,$userid){
 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->gameDataByBazar($ticketid,$gameid,$userid);
	
	return $res;

}
function gameDataByBazarAdmin($gamename,$date,$bazar,$category){

 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->gameDataByBazarAdmin($gamename,$date,$bazar,$category);
   
   return $res;


}
function gameDataByBazarAdmin22($gamename,$date,$bazar,$category){

 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->gameDataByBazarAdmin22($gamename,$date,$bazar,$category);
   
   return $res;


}
function gameDataByBazarAdmin2($gamename,$date,$bazar,$category,$username){

 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->gameDataByBazarAdmin2($gamename,$date,$bazar,$category,$username);
   
   return $res;


}

function rettripledata($ticketid,$gameid,$userid){
 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->rettripledata($ticketid,$gameid,$userid);
	
	return $res;

}

function rettripledataAdmin($gamename,$date,$bazar,$category){
 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->rettripledataAdmin($gamename,$date,$bazar,$category);
   
   return $res;

}
function rettripledataAdmin22($gamename,$date,$bazar,$category){
 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->rettripledataAdmin22($gamename,$date,$bazar,$category);
   
   return $res;

}
function rettripledataAdmin2($gamename,$date,$bazar,$category,$username){
 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->rettripledataAdmin2($gamename,$date,$bazar,$category,$username);
   
   return $res;

}


function ret($number,$ticketid,$gameid,$userid,$part=''){
 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->ret($number,$ticketid,$gameid,$userid);
	
 if($res>0){
     if($part!=''){
        $paertdata=$res*$part/100;
        $paertdata=$res-$paertdata;
     }else{
         $paertdata=$res;
     }
       $res='<font size="8" color="red">'.$res.'</font>'.'<hr>'.'<font size="8" color="red">'.$paertdata.'</font>';
      return $res; 
   }else{
       return $res;
   }

}
function retAdmin($number,$gamename,$date,$bazar,$category){
 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->retAdmin($number,$gamename,$date,$bazar,$category);
   
    if($res>0){
       $res='<font size="8" color="red">'.$res.'<font>';
      return $res; 
   }else{
       return $res;
   }

}
function retAdmin_t($number,$gamename,$date,$bazar,$category){
 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->retAdmin_t($number,$gamename,$date,$bazar,$category);
  
       return $res;
  

}
function retAdmin2($number,$gamename,$date,$bazar,$category,$username){
 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->retAdmin2($number,$gamename,$date,$bazar,$category,$username);
   
  if($res>0){
       $res='<font size="8" color="red">'.$res.'<font>';
      return $res; 
   }else{
       return $res;
   }

}
function ret2($number,$ticketid,$gameid,$userid,$part=''){
 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->ret($number,$ticketid,$gameid,$userid);
	
	if($res>0){
       if($part!=''){
        $paertdata=$res*$part/100;
        $paertdata=$res-$paertdata;
     }else{
         $paertdata=$res;
     }
      
       $res='<font size="8" color="red">'.$res.'</font>'.'<hr>'.'<font size="8" color="red">'.$paertdata.'</font>';
      return $res; 
   }else{
       return $res;
   }

}
function retAdmin_2($gamename,$date,$bazar,$category){
 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->retAdmin($gamename,$date,$bazar,$category);
   
   return $res;

}
function ret3($number,$ticketid,$gameid,$userid,$part=''){
 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->ret($number,$ticketid,$gameid,$userid);
   if($res>0){
      if($part!=''){
        $paertdata=$res*$part/100;
        $paertdata=$res-$paertdata;
     }else{
         $paertdata=$res;
     }
      
       $res='<font size="8" color="red">'.$res.'<font>'.'<hr>'.'<font size="8" color="red">'.$paertdata.'<font>';
      return $res; 
   }else{
       return $res;
   }	
	

}
function retAdmin_3($gamename,$date,$bazar,$category){
 $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->retAdmin_3($gamename,$date,$bazar,$category);
   
   return $res;

}
function ticketdetails($ticketid){
  $CI =& get_instance();
   $mod = $CI->load->model('Report_Model');
   $res=$CI->Report_Model->ticketdetails($ticketid);
   
   return $res;  
}
function bazarCheker($id){
   date_default_timezone_set("Asia/Kolkata");
   $todayDay=date("l");
   $todayDay=strtolower($todayDay);
   $CI =& get_instance();
   $mod = $CI->load->model('Result_Model');
   $res=$CI->Result_Model->bazarCheker($id,$todayDay);
   return $res;
}


?>