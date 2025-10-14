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
   
    <!-- *************
    ************ Vendor Css Files *************
    ************ -->
    <!-- Data Tables -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables/dataTables.bs4.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables/dataTables.bs4-custom.css');?>" />
    <!-- Bootstrap Select CSS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bs-select/bs-select.css');?>">
  </head>
  <body >
    <!-- *************
    ************ Header section start *************
    ************* -->
    <!-- Header start -->
      <header class="header" style="background-color:#342e36;">
      <div class="container-fluid">
        <!-- Row start -->
      <div class="row gutters">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="margin-top:5px;">
            <a href="<?php echo base_url('User/index');?>" class="logo" style="height:80px;width:120px;font-size:50px;color:yellow;">SM</a>
          </div>
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
            <!-- Header actions start -->
            <ul class="header-actions" style="margin-top: 20px;">
              
              <li class="dropdown d-none d-block">
                <a class="badge badge-pill badge-info"style="font-size: 14px;color: white;">Balance : <?php echo $balance ?></a>
              </li>
              <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                  
                  <span class="avatar"style="background-color: white;color:black;">LG<span class="status busy"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                  <div class="header-profile-actions">
                    <div class="header-user-profile">
                      <h5 style="font-size:18px;text-transform: uppercase;"><?php echo $username; ?></h5>
                      <p class="badge badge-pill badge-danger" style="font-size:14px;font-size: 14px;color: white;">Player</p>
                    </div>
                   <a href="<?php echo base_url('Profile/index');?>" style=" font-size:15px;font-weight:bold;color:blue;"  ><i class="icon-user1"></i> My Profile</a>
                    <a href="<?php echo base_url('PlReport/index');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-settings1"></i> P/L Report</a>
                    <a href="<?php echo base_url('GameReport/index');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-activity"></i> Game Report</a>
                    <a href="<?php echo base_url('BalanceReport/index');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-activity"></i> Balance Report</a>
                    <a href="<?php echo base_url('Login/logOut');?>" style=" font-size:15px;font-weight:bold;color:blue;"><i class="icon-log-out1"></i> Sign Out</a>
                  </div>
                </div>
              </li>
            </ul>
            <!-- Header actions end -->
          </div>
        </div>
        <!-- Row end -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <ul class="nav justify-content-center">
    
    
             
            <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('User/index');?>"style="color: white;font-size: 20px;">
        <i class="icon-gift nav-icon"></i>
        Dashboard
      </a>
    </li>

 
            
  </ul>
      </div>
    </header>
    <!-- Header end -->
    <!-- *************
    