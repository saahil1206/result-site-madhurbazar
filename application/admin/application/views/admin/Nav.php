<style type="text/css">
	.games
	{
		background-color: #4F52BA;
		/*border-radius: 25px;*/
		border-color: 2ps solid #000;
		color: white;
		padding: 10px;
	}

	.games_link
	{
		color: white;
	}

	.games_link:hover
	{
		color: white;
	}

	.inputlenght
	{
	    width: 68px;
	}
	.inputlenght1
	{
	    width: 100px;
	}
</style>
<div class="main-container">
<?php
		foreach ($bazar->result() as $row)
    {
$bazar_name=$row->bazar_name;
	}
	?>
	<style>
	
.alert-danger {
  background: #FAE6E6;
  padding: .5em 1em 2em 2em;
  margin: 0 0 0 0;
  box-shadow: inset 6px 0 #CC0000;
  width:100%;
}
.alert-success {
  background: #a8e6c5;
  padding: .5em 1em 2em 2em;
  margin: 0 0 0 0;
  box-shadow: inset 6px 0 #CC0000;
  width:100%;
}
h4 {
  font-size: 1.0em;
  font-weight: 700;
  color: black;
  letter-spacing: 0.02em;
  margin-top: 1em;
  margin-left: 2em;
  margin-bottom: .5em;
}

.alert_text {
  margin-left: 3em;
  margin-bottom: .5em;
}	
	
	
	
	</style>
				<!-- Content wrapper start -->
				<div class="content-wrapper">


			<div class="row gutters">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-body p-0">
                  <div class="invoice-container">

                    <div class="invoice-header">
                      <!-- Row start -->
                      <div class="row gutters">

					  <div style="background-color:white; font-size:10px; color:red;">
            <?php echo validation_errors(); ?>
            <?php if(!empty($messagedanger)){ 
                ?>
                <div class ="alert-danger">
    <h4>Ticket Not Purchased</h4>
    <div class="alert_text"><?php  echo $messagedanger; ?>.</div>
  </div>
          
            
         <?php   
            }?>
            </div>
            <div style="background-color:white;width:100%; font-size:10px;color:green;">
            <?php if(!empty($messagesuccess)){
            ?>
           <div class ="alert-success">
    <h4>Ticket  Purchased</h4>
    <div class="alert_text"><?php  echo $messagesuccess; ?>.</div>
  </div>  
           
            <?php
            }?>
            </div>
                  <!--      <div class="col-lg-12 col-md-12 col-sm-12">
                        	<a href="<?php base_url();?>User/index"><button class="btn btn-lg btn-default" style="float:right">Back</button></a>
                          
                        </div>   -->
                      </div>
                      <!-- Row end -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
			</div>