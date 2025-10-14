
<!-- *************
************ Main container start *************
************* -->

	<!-- Page header end -->
	<div class="content-wrapper">
		<!-- Row start -->
		<div class="row gutters">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
				<div class="card">
					<div class="card-body">
						<div class="account-settings">
							<div class="user-profile">
								<div class="user-avatar">
									<img src="<?php echo base_url('assets/img/l.jpg')?>" alt="Lucky Games" style="width:130px;height:110px"/>
								</div>
								<h5 style="text-transform: uppercase;font-size:18px;"><?php echo $username; ?></h5>
								 <?php
                      if($_SESSION['access_level']==1){
                      ?>
                      <p class="badge badge-pill badge-danger" style="font-size:14px;font-size: 14px;color: white;">Admin</p>
                      
                      <?php
                      }else if($_SESSION['access_level']==3){
                      ?>
                      <p class="badge badge-pill badge-danger" style="font-size:14px;font-size: 14px;color: white;">Master</p>
                       <?php
                      }else if($_SESSION['access_level']==4){
                      ?>
                       <p class="badge badge-pill badge-danger" style="font-size:14px;font-size: 14px;color: white;">Agent</p>
                       <?php
                      }else if($_SESSION['access_level']==5){
                      ?>
                       <p class="badge badge-pill badge-danger" style="font-size:14px;font-size: 14px;color: white;">Player</p>
                       <?php
                      }
                      ?>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-12">
				<div class="card">
					<div class="card-header" style="background-color:#342e36;">
						<div class="card-title" style="color:white;font-size: 15px;font-weight: 20px;">Update Profile</div>
					</div>
					 <?php if(!empty($success_sms)){ ?>
						<div class="alert alert-warning" id="alert1">
					      <?= $success_sms; ?>
						</div>
						<?php }   ?>
						 <?php if(!empty($error_sms)){ ?>
						<div class="alert alert-danger" id="alert2">
					      <?= $error_sms; ?>
						</div>
						<?php }   ?>
					<div class="card-body">
						<form action="<?php echo base_url('Profile/updateProfile') ?>" method="post">
						<div class="row gutters">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="fullName" style=" font-size:15px;font-weight:bold;">Full Name</label>
									<input type="text" style="text-transform: uppercase;"class="form-control" id="fullName" value='<?php echo $username; ?>' readonly>
								</div>
								<div class="form-group">
									<label for="inputReadOnly" style=" font-size:15px;font-weight:bold;">User Name</label>
									<input class="form-control" id="inputReadOnly"  type="text"  readonly>
								</div>
								<div class="form-group">
									<label for="inputReadOnly" style=" font-size:15px;font-weight:bold;">Phone</label>
									<input class="form-control" id="inputReadOnly" type="text" readonly>
								</div>
								<div class="form-group">
									<label for="inputReadOnly" style=" font-size:15px;font-weight:bold;">City</label>
									<input class="form-control" id="inputReadOnly" type="text" placeholder="Enter City" readonly>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="inputReadOnly" style=" font-size:15px;font-weight:bold;">Account Type</label>
									<input class="form-control" id="inputReadOnly" type="text" readonly>
								</div>
								<div class="form-group">
									<label for="ciTy" style=" font-size:15px;font-weight:bold;">Old Password</label>
									<input type="password" class="form-control" id="oldpin" name="oldpin" placeholder="Enter Password">
								</div>
								<div class="form-group">
									<label for="sTate" style=" font-size:15px;font-weight:bold;">New Password</label>
									<input type="password" class="form-control" id="newpin" name="newpin" placeholder="Enter Password">
								</div>
								<div class="form-group">
									<label for="zIp" style=" font-size:15px;font-weight:bold;">Confirm Password</label>
									<input type="password" class="form-control" id="repin" name="repin" placeholder="Retype Password">
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="text-right">
									<button type="submit" id="submit2" name="submit2" class="btn btn-primary"><i class="icon-verified_user"></i>  &nbsp;Submit Form</button>
								</div>
								</div>
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Row end -->
	</div>
</div>
 <script>
window.setTimeout(function() {
$("#alert1").fadeTo(500, 0).slideUp(500, function(){
$(this).remove();
});
}, 1000);

window.setTimeout(function() {
$("#alert2").fadeTo(500, 0).slideUp(500, function(){
$(this).remove();
});
}, 1000);
</script>