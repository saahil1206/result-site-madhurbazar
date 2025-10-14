<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="Lucky Games">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Title -->
    <title>sattaa-matka</title>
    <!-- *************
    ************ Common Css Files *************
    ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/style.css')?>">
    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables/dataTables.bs4.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables/dataTables.bs4-custom.css');?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bs-select/bs-select.css');?>" >
    <!-- *************
    ************ Vendor Css Files *************
    
    ************ -->

    <!-- Bootstrap Select CSS-->
<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>

  
  </head>
  <body>
    <!-- *************
    ************ Header section start *************
    ************* -->
    <!-- Header start -->
  <header class="header" style="background-color:#342e36;">
      <div class="container-fluid">
        <!-- Row start -->
        <div class="row gutters">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
            <a href="<?php echo base_url('Admin/index');?>" style="height:80px;width:120px;">
                <B STYLE="font-size:50px;color:yellow;">SM</B>
            </a>
          </div>
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
            <!-- Header actions start -->
            <ul class="header-actions" style="margin-top: 24px;">
            

              <li class="dropdown d-none d-sm-block">
                <?php
if($_SESSION['access_level']==1){
?>
                <a class="badge badge-pill badge-danger" style="font-size:14px;font-size: 14px;color: white;">BLOCK</a>
                <?php
              }
              ?>
              </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <li class="dropdown d-none d-block">
              <?php
if($_SESSION['access_level']!=1and $_SESSION['access_level']!=7){
              ?>
              
                <a class="badge badge-pill badge-info"style="font-size: 14px;color: white;">Balance : <?php echo $balance ?> </a>
             <?php

}
?>
             
              </li>
              <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                  
                  <span class="avatar"style="background-color: white;color:black;">LG<span class="status busy"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                  <div class="header-profile-actions">
                    <div class="header-user-profile">
                      <h5 style="text-transform: uppercase;font-size:18px;"><?php echo $username; ?></h5>
                      <?php
                      if($_SESSION['access_level']==1){
                      ?>
                      <p class="badge badge-pill badge-danger" style="font-size:14px;font-size: 14px;color: white;">Admin</p>
                      
                      <?php
                      }else if($_SESSION['access_level']==3){
                      ?>
                      <p class="badge badge-pill badge-danger" style="font-size:14px;font-size: 14px;color: white;">Dealer</p>
                       <?php
                      }else if($_SESSION['access_level']==4){
                      ?>
                       <p class="badge badge-pill badge-danger" style="font-size:14px;font-size: 14px;color: white;">Agent</p>
                       <?php
                      }else if($_SESSION['access_level']==7){
                      ?>
                       <p class="badge badge-pill badge-danger" style="font-size:14px;font-size: 14px;color: white;">R-OPERATOR</p>
                       <?php
                      }
                      ?>
                      
                    </div>
                     <?php
                      if($_SESSION['access_level']==1){
                      ?>
<a href="<?php echo base_url('AdminMaster/index');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-activity"></i>M Sale Report</a>
<a href="<?php echo base_url('AdminAgent/index');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-activity"></i>A Sale Report</a>
                    
<a href="<?php echo base_url('AdminPlayer/index');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-activity"></i>P Sale Report</a>
 
                      <?php
                      }else if($_SESSION['access_level']==3){
                      ?>
<a href="<?php echo base_url('AdminAgent/index');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-activity"></i>A Sale Report</a>
                    
<a href="<?php echo base_url('AdminPlayer/index');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-activity"></i>P Sale Report</a>
<?php
                      }else if($_SESSION['access_level']==4){
                      ?>
                   <a href="<?php echo base_url('AdminPlayer/index');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-activity"></i>P Sale Report</a>

<?php

}
 if($_SESSION['access_level']!=7){
?>
                    <a href="<?php echo base_url('admin/profile');?>" style=" font-size:15px;font-weight:bold;color:blue;"  ><i class="icon-user1"></i> My Profile</a>
                    <a href="<?php echo base_url('AdminPlReport/index');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-settings1"></i> P/L Report</a>
                    <a href="<?php echo base_url('AdminGameReport/index');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-activity"></i> Game Report</a>
                    <a href="<?php echo base_url('AdminBalanceReport/index');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-activity"></i> Balance Report</a>
  <?PHP
  
 }
  ?>
                    <a href="<?php echo base_url('Login/logOut');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-log-out1"></i> Sign Out</a>
                  </div>
                </div>
              </li>
            </ul>
            <!-- Header actions end -->
          </div>
        </div>
        <!-- Row end -->
      </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <ul class="nav justify-content-center">
 <?php

if($_SESSION['access_level']!=7){
?>    
    <li class="nav-item">
      <a class="nav-link dropdown-toggle" href="<?php echo base_url('Account/index');?>" id="doctoRs" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: white;font-size: 15px;">
        <i class="icon-users nav-icon"></i>
        Clients
      </a>
      <ul class="dropdown-menu"  aria-labelledby="doctoRs" style="font-size: 15px;font-weight: bold;">
        <li >
          <a class="dropdown-item" href="<?php echo base_url('Account/index');?>" style="font-size: 14px;font-weight: bold;color:#ff8c1a;" >
              <i class="icon-log-out"></i>&nbsp;Client  Records</a>
        </li>
        <li>
          <a class="dropdown-item" href="<?php echo base_url('Account/userCommission');?>" style="font-size: 14px;font-weight: bold;color:#ff8c1a;">  
          <i class="icon-log-out"></i>&nbsp;Comm.Records</a>
        </li>
                <?php
}
if($_SESSION['access_level']==1){
?>
              


         <?php
}
         ?>
              </ul>
            </li>
            <?php

if($_SESSION['access_level']==1){
?>          
            <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Bazar/index');?>"style="color: white;font-size: 15px;">
        <i class="icon-gift nav-icon"></i>
        Bazaar
      </a>
    </li>

    <?php
    
}
    ?>
            <li class="nav-item">
                
      <a class="nav-link dropdown-toggle" href="#" id="formsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: white;font-size: 15px;">
        <i class="icon-edit1 nav-icon"></i>
        Result
      </a>
       
      <ul class="dropdown-menu" aria-labelledby="doctoRs">
               <?php

if($_SESSION['access_level']==1 or $_SESSION['access_level']==7 ){
?>      
               <li>
          <a class="dropdown-item" href="<?php echo base_url('GameResult/index');?>"style="font-size: 14px;font-weight: bold;color:blue;"><i class="icon-log-out">
              
          </i>&nbsp;New Result</a>
        </li>
        
        <?php
 
}
 ?>
   <?php

if($_SESSION['access_level']==1  ){
?>  
  <li>
          <a class="dropdown-item" href="<?php echo base_url('GameResult/notice');?>"style="font-size: 14px;font-weight: bold;color:blue;"><i class="icon-log-out"></i>&nbsp;
          Notice </a>
        </li>
  <li>
          <a class="dropdown-item" href="<?php echo base_url('GameResult/lucky');?>"style="font-size: 14px;font-weight: bold;color:blue;"><i class="icon-log-out"></i>&nbsp;
          Lucky Number</a>
        </li>

  <?php
 
}
 ?>        
               <li>
          <a class="dropdown-item" href="<?php echo base_url('GameResult/result');?>" style="font-size: 14px;font-weight: bold;color:blue;">
              <i class="icon-log-out"></i>&nbsp;Results Records</a>
        </li>
       
   <?php

if($_SESSION['access_level']!=7  ){
?>           
               <li>
          <a class="dropdown-item"  href="<?php echo base_url('BatController/index');?>" style="font-size: 14px;font-weight: bold;color:blue;"> 
          <i class="icon-log-out"></i>&nbsp;Bat Records</a>
        </li>
<?php

}
?>
          </ul>
    </li>
  </ul>
    </div> 
    </header>
  
</div>
     