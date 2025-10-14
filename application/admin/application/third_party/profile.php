<?php include('header.php');?>
<!-- *************
************ Main container start *************
************* -->
<div class="main-container">
	<!-- Page header start -->
	<div class="page-header">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Profile</li>
			<li class="breadcrumb-item active">My Profile</li>
		</ol>
	</div>
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
									<img src="img/user2.png" alt="Lucky Games" />
								</div>
								<h5 class="user-name">Lucky Games</h5>
								<h6 class="user-email">lucky@wwwzzz.com</h6>
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
					<div class="card-body">
						<div class="row gutters">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="fullName" style=" font-size:15px;font-weight:bold;">Full Name</label>
									<input type="text" class="form-control" id="fullName" placeholder="Enter Full Name">
								</div>
								<div class="form-group">
									<label for="inputReadOnly" style=" font-size:15px;font-weight:bold;">User Name</label>
									<input class="form-control" id="inputReadOnly" type="text" readonly>
								</div>
								<div class="form-group">
									<label for="inputReadOnly" style=" font-size:15px;font-weight:bold;">Phone</label>
									<input class="form-control" id="inputReadOnly" type="text" placeholder="Enter Phone" readonly>
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
									<input type="text" class="form-control" id="" placeholder="Enter Password">
								</div>
								<div class="form-group">
									<label for="sTate" style=" font-size:15px;font-weight:bold;">New Password</label>
									<input type="text" class="form-control" id="" placeholder="Enter Password">
								</div>
								<div class="form-group">
									<label for="zIp" style=" font-size:15px;font-weight:bold;">Confirm Password</label>
									<input type="text" class="form-control" id="" placeholder="Retype Password">
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="text-right">
									<button type="button" id="submit2" name="submit2" class="btn btn-primary"><i class="icon-verified_user"></i>  &nbsp;Submit Form</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Row end -->
	</div>
</div>
<?php include('footer.php');?>