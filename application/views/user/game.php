
<style type="text/css">
	
.center {

margin: 0 auto;

}
.awesome {

font-family: futura;
font-style: ;

width:100%;

margin: 0 auto;
text-align: center;

color:#313131;
font-size:35px;
font-weight: bold;

-webkit-animation:colorchange 20s infinite alternate;


}
@-webkit-keyframes colorchange {
0% {

color: blue;
}

10% {

color: white;
}

20% {

color: black;
}

30% {

color: #d35400;
}

40% {

color: blue;
}

50% {

color: #34495e;
}

60% {

color: blue;
}

70% {

color: #2980b9;
}
80% {

color: #f1c40f;
}

90% {

color: #2980b9;
}

100% {

color: pink;
}
}
</style>
<div class="content-wrapper">
	<!-- Row start -->
	<div class="row gutters">
		<div class="col-xl-12">
			<div class="card plain">
				<div class="card-body">
					<!-- Row start -->
					<div class="row gutters">
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<a  href="<?php echo base_url();?>Aakda/index/<?php echo $bazarid;?>/<?php echo $bazarType;?>" class="hospital-list" style="background-color: white;text-align: center;border-color: black;border-style:solid;">
								
								<div class="hospital-details"  >
									<div class="hospital-location">
										<div class="btn-group " role="group" aria-label="First group" >
											
											<img src="<?php echo base_url('assets/img/4.png');?>" style="height:50px;width:100px;padding-top: 5px;margin-top: 10px;" class="hospital-thumb" alt="Hotel Booking">
											
										</div>
										<br><br>
									<div class="btn-group " role="group" aria-label="First group" >
										
										<h3 style="color:#342e36;">AAKDA</h3>
										
									</div>
										
									</div>
									
								
								</div>
							</a>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<a  href="<?php echo base_url();?>Single/index/<?php echo $bazarid;?>/<?php echo $bazarType;?>"class="hospital-list" style="background-color: white;text-align: center;border-color: black;border-style:solid;">
								
								<div class="hospital-details" >
									<div class="hospital-location">
										<div class="btn-group " role="group" aria-label="First group" >
											
											<img src="<?php echo base_url('assets/img/1.png');?>" style="height:80px;width:150px;" class="hospital-thumb" alt="Hotel Booking">
											
										</div>
										
									</div>
									
									<div class="btn-group " role="group" aria-label="First group" >
										
										<h3 style="color:#342e36;">SINGLE PANA</h3>
										
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<a  href="<?php echo base_url();?>Double/index/<?php echo $bazarid;?>/<?php echo $bazarType;?>" class="hospital-list" style="background-color: white;text-align: center;border-color: black;border-style:solid;">
								
								<div class="hospital-details" >
									<div class="hospital-location">
										<div class="btn-group " role="group" aria-label="First group" >
											
											<img src="<?php echo base_url('assets/img/2.png');?>" style="height:80px;width:150px;margin-top: 10px;" class="hospital-thumb" alt="Hotel Booking">
											
										</div>
										
									</div>
									
									<div class="btn-group " role="group" aria-label="First group" >
										
										<h3 style="color:#342e36;margin-top: -10px;">DOUBLE PANA</h3>
										
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<a href="<?php echo base_url();?>Tripple/index/<?php echo $bazarid;?>/<?php echo $bazarType;?>" class="hospital-list" style="background-color: white;text-align: center;border-color: black;border-style:solid;">
								
								<div class="hospital-details" >
									<div class="hospital-location">
										<div class="btn-group " role="group" aria-label="First group" >
											
											<img src="<?php echo base_url('assets/img/3.png');?>" style="height:80px;width:150px;margin-top: 10px;" class="hospital-thumb" alt="Hotel Booking">
											
										</div>
										
									</div>
									
									<div class="btn-group " role="group" aria-label="First group" >
										
										<h3 style="color:#342e36;margin-top: -10px;">TRIPLE PANA</h3>
										
									</div>
								</div>
							</a>
						</div>
						<?php if($bazarType!='close'){ ?>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<a href="<?php echo base_url();?>Jodi/index/<?php echo $bazarid;?>/<?php echo $bazarType;?>" class="hospital-list" style="background-color: white;text-align: center;border-color: black;border-style:solid;">
								
								<div class="hospital-details" >
									<div class="hospital-location">
										<div class="btn-group " role="group" aria-label="First group" >
											
											<img src="<?php echo base_url('assets/img/5.png');?>" style="height:80px;width:150px;" class="hospital-thumb" alt="Hotel Booking">
											
										</div>
										
									</div>
									
									<div class="btn-group " role="group" aria-label="First group" >
										
										<h3 style="color:#342e36;">JODI</h3>
										
									</div>
								</div>
							</a>
						</div>
						<?php  } ?>
						<!--
				 		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<a  href="<?php echo base_url();?>MultiPatti/index/<?php echo $bazarid;?>/<?php echo $bazarType;?>" class="hospital-list" style="background-color: white;text-align: center;border-color: black;border-style:solid;">
								
								<div class="hospital-details" >
									<div class="hospital-location">
										<div class="btn-group " role="group" aria-label="First group" >
											
											<img src="<?php echo base_url('assets/img/3.png');?>" style="height:80px;width:150px;margin-top: 10px;" class="hospital-thumb" alt="Hotel Booking">
											
										</div>
										
									</div>
									
									<div class="btn-group " role="group" aria-label="First group" >
										
										<h3 style="color:#342e36;margin-top: -10px;">MULTI PANA</h3>
										
									</div>
								</div>
							</a>
						</div>
					
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<a  href="<?php echo base_url();?>SpMotor/index/<?php echo $bazarid;?>/<?php echo $bazarType;?>" class="hospital-list" style="background-color: white;text-align: center;border-color: black;border-style:solid;">
								
								<div class="hospital-details" >
									<div class="hospital-location">
										<div class="btn-group " role="group" aria-label="First group" >
											
											<img src="<?php echo base_url('assets/img/2.png');?>" style="height:80px;width:150px;margin-top: 10px;" class="hospital-thumb" alt="Hotel Booking">
											
										</div>
										
									</div>
									
									<div class="btn-group " role="group" aria-label="First group" >
										
										<h3 style="color:#342e36;margin-top: -10px;">SP MOTOR</h3>
										
									</div>
								</div>
							</a>
						</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<a  href="<?php echo base_url();?>DpMotor/index/<?php echo $bazarid;?>/<?php echo $bazarType;?>" class="hospital-list" style="background-color: white;text-align: center;border-color: black;border-style:solid;">
								
								<div class="hospital-details" >
									<div class="hospital-location">
										<div class="btn-group " role="group" aria-label="First group" >
											
											<img src="<?php echo base_url('assets/img/1.png');?>" style="height:80px;width:150px;" class="hospital-thumb" alt="Hotel Booking">
											
										</div>
										
									</div>
									
									<div class="btn-group " role="group" aria-label="First group" >
										
										<h3 style="color:#342e36;">DP MOTOR</h3>
										
									</div>
								</div>
							</a>
						</div>
						<!--
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<a  href="<?php echo base_url();?>Jodifamily/index/<?php echo $bazarid;?>/<?php echo $bazarType;?>"class="hospital-list" style="background-color: white;text-align: center;border-color: black;border-style:solid;">
								
								<div class="hospital-details" >
									<div class="hospital-location">
										<div class="btn-group " role="group" aria-label="First group" >
											
											<img src="<?php echo base_url('assets/img/5.png');?>" style="height:80px;width:150px;" class="hospital-thumb" alt="Hotel Booking">
											
										</div>
										
									</div>
									
									<div class="btn-group " role="group" aria-label="First group" >
										
										<h3 style="color:#342e36;"> FAMILY</h3>
										
									</div>
								</div>
							</a>
						</div>
						-->
						<!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<a href="<?php echo base_url('User/game');?>" class="hospital-list" style="background-color: white;text-align: center;border-color: black;border-style:solid;">
								
								<div class="hospital-details" >
									<div class="hospital-location">
										<div class="btn-group " role="group" aria-label="First group" >
											
											<img src="<?php echo base_url('assets/img/5.png');?>" style="height:80px;width:150px;" class="hospital-thumb" alt="Hotel Booking">
											
										</div>
										
									</div>
									
									<div class="btn-group " role="group" aria-label="First group" >
										
										<h3 style="color:#342e36;">PANA FAMILY</h3>
										
									</div>
								</div>
							</a>
						</div> -->
						
					</div>
					
					<!-- Row end -->
				</div>
			</div>
		</div>
	</div>
	<!-- Row end -->
	
</div>
<!-- Content wrapper end -->
</div>
<!-- *************
	************ Main container end *************
************* -->
