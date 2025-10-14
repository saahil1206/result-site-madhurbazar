<?php
foreach ($bazar->result() as $row)
{
$bazar_name=$row->bazar_name;
}
?>
<style>
    
.numinput{
width: 64px;
border-radius: 4px;
border-color: black;
margin: 0 1px 8px 1px;
padding: 5px 0px 6px 9px;
font-weight:bold;
    }
.numAmt {
      width:82px;
border-radius: 4px;
border-color: black;
margin: 0 1px 8px 1px;
padding: 5px 0px 6px 9px;
font-weight:bold;
    }
.sing1 span {

width: 36px;
height: 35px;
display: inline-block;
text-align: center;
border-radius: 4px;
line-height: 35px;
font-size: 14px;
background-color: #342e36;
color: white;
font-weight:bold;
}
.all{
border-radius: 4px;
border-color: black;
padding: 1px 1px 1px 1px;
height: 40px;
font-weight:bold;
width:50px;
}

.numberCircle {
    width: 40px;
    line-height: 40px;
    border-radius: 50%;
    text-align: center;
    font-size: 18px;
    margin-bottom: 4px;
}
</style>
             
</style>

<div class="content-wrapper">
  <div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="card">
        <div class="card-header" style="background-color:#342e36;margin-top:-50px;">
          <div class="card-title" style="color:#f5f0ee;font-size: 18px;font-weight: bold;text-align: center;text-transform: uppercase;"><i class="icon-folder-video"></i> &nbsp; <?php echo $bazar_name; ?> - <?php if($bazarType=='otc') { echo 'OPEN TO CLOSE ';} else { echo $bazarType;} ?></div>
        </div>
      </div>
    </div>
  </div>
    <br> 
  <div class="row justify-content-center gutters">
    <span style="font-size:22px;color: #342e36;font-weight: 800;"><span style=" background-color:#f5f0ee;font-size:22px;color:black;">&#8377;</span>&nbsp; SP MOTOR PANA</span></div>
    
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >
   <br>    <div class="widget-box" style="border: 2px solid purple;background-color: #e59711;padding:20px;margin top:20px;">
<div class="row justify-content-center gutters">
                  <form class="form-inline" method="POST" action="<?php  echo base_url(); ?>SpMotor/index" >
                    <div class="form-group">
                      <label for="inputPassword6" style="font-size: 20px;font-weight: bold;">AAKDA NO.</label>
                      
                      <input type="text" id="inputPassword6" required name="aakdano" class="form-control mx-sm-5" aria-describedby="passwordHelpInline">
                      
                    </div>
                    <div class="form-group">
                      <label for="inputPassword6" style="font-size: 20px;font-weight: bold;">AMOUNT</label>
                      <input type="text" id="inputPassword6" required name="panaamount" class="form-control mx-sm-5" aria-describedby="passwordHelpInline">
                      
                    </div>
                
                    <div class="form-group">
                      <div class="btn-group mr-2" role="group" aria-label="First group">
                       <button  onclick="ClearAllControls()"  value="Clear" type="reset" 
                       class="btn btn-info btn-lg" style="font-size: 15px;float: right; margin-right: 20px;"><i class="icon-reply"></i> &nbsp;Clear</button>
                       
                        <button  onclick="ClearAllControls()" name="buy" value="Clear" type="submit"  class="btn btn-primary btn-lg" 
                        style="font-size: 15px;"><i class="icon-verified_user"></i> &nbsp;Buy</button>
                    </div>
                   
                  </div>
                    

                  </form>
              </div>    
                </div>
        
</div></div>
</div>
</div>

</tr>
</div>

</div>

