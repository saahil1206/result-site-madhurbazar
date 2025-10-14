<style>
.numinput {
width: 72px;
border-radius: 4px;
border-color: black;
margin: 0 1px 8px 1px;
padding: 5px 0px 6px 9px;
font-weight:bold;
font-size: 15px;
}
.numAmt {
width:50px;
border-radius: 4px;
border-color: black;
margin: 0 1px 8px 1px;
padding: 5px 0px 6px 9px;
font-weight:bold;
font-size: 15px;
text-align: center;
}
.sing1 span {
width: 42px;
height: 35px;
display: inline-block;
text-align: center;
border-radius: 4px;
line-height: 35px;
font-size: 15px;
background-color: #342e36;
color: white;
font-weight:bold;
margin: 0 2px 0px 2px;
}
</style>
<?php
foreach ($bazar->result() as $row)
{
$bazar_name=$row->bazar_name;
}
?>


<div class="row gutters">
					







<div class="content-wrapper">
  <div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="card">
        <div class="card-header" style="background-color:#342e36;margin-top:-50px;">
          <div class="card-title" style="color:white;font-size: 18px;font-weight: bold;text-align: center;text-transform: uppercase;"><i class="icon-folder-video"></i> &nbsp; <?php echo $bazar_name; ?> - <?php if($bazarType=='otc') { echo 'OPEN TO CLOSE ';} else { echo $bazarType;} ?></div>
        </div>
      </div>
    </div>
  </div>
  <div class="card-header" style="text-align:center;" >
			<form method="POST" action="<?php  echo base_url(); ?>Adminaakda/index">			
					<div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
											<div class="form-group">
											
												<select class="form-control selectpicker" name="client" data-live-search="true">
													<option data-tokens="<?php  echo $_SESSION['userid']; ?>" value="<?php  echo $_SESSION['userid']; ?>"><?php  echo $_SESSION['username']; ?></option>
					<?php

foreach ($Acount->result() as $row) {
	
								?>
													<option data-tokens="<?php echo $row->id; ?>" value="<?php echo $row->id; ?>"><?php echo $row->username;  ?></option>
												<?php
												
}
												
												?>								
														
												</select>
											</div>
										</div>
					</div>
  <div class="row justify-content-center gutters" style="margin-top: -10px;">
    <span style="font-size:22px;color: #342e36;font-weight: 800;"><br><span style=" background-color:#f5f0ee;font-size:22px;color:black;">&#8377;</span>&nbsp; AAKDA</span></div>
    <div class="row gutters">
      <div class="col-12">
        <hr>
        <div class="sing1">
          
          <div class="btn-group btn-group-sm" role="group" aria-label="First group">
              <tr>
                <td align="center" >
                <span>1</span>
                <input id="single0" autofocus name="single0" autocomplete="false"  maxlength="8" type="text" class="numinput"></td>
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" ><span>2</span><input id="single1" autofocus name="single1" autocomplete="false"  maxlength="8" type="text" class="numinput"></td>
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" ><span>3</span><input id="single2" autofocus name="single2" autocomplete="false"  maxlength="8" type="text" class="numinput"></td>
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" ><span>4</span><input id="single3" autofocus name="single3" autocomplete="false"  maxlength="8" type="text" class="numinput"></td>
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" ><span>5</span><input id="single4" autofocus name="single4" autocomplete="false"  maxlength="8" type="text" class="numinput"></td>
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" ><span>6</span><input id="single5" autofocus name="single5" autocomplete="false"  maxlength="8" type="text" class="numinput"></td>
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" ><span>7</span><input id="single6" autofocus name="single6" autocomplete="false"  maxlength="8" type="text" class="numinput"></td>
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" ><span>8</span><input id="single7" autofocus name="single7" autocomplete="false"  maxlength="8" type="text" class="numinput"></td>
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" ><span>9</span><input id="single8" autofocus name="single8" autocomplete="false"  maxlength="8" type="text" class="numinput"></td>
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" ><span>0</span><input id="single9" autofocus name="single9" autocomplete="false"  maxlength="8" type="text" class="numinput"></td>
              </tr>
            </div>
            <br>
            <hr><br>
            <tr height="5px">
              <td ><input type="hidden" value="<?php  echo $gameid; ?>" name="bazar"></td>
              <td colspan="1"><input type="hidden"  value="<?php  echo $bazarType; ?>" name="bazar_cat"></td>
              <td ><!-- <input type="hidden" value="<?php  echo $_SESSION['userid']; ?>" name="client"> --></td>
              <div class="row justify-content-center gutters">
                <td>
                <input style="width:110px" id="singleAmt" name="singleAmt" class="numAmt" readonly="true"type="hidden">
              </div>
              <div class="row justify-content-center gutters">
                <td>
                <label style="color:#342e36; font-weight:bold;font-size:18px;text-transform: uppercase;padding-top: 8px;"> Total Points </label>
                </td>&nbsp;
                <span style="font-size:25px;background-color: #f5f0ee;color:#342e36;">&#8680;</span> &nbsp;
                <span id="totalsingleAmt" style ="font-size: 20px;font-weight:900;text-decoration: underline;color:#ff8c1a;background-color: #f5f0ee;"></span>
              </tr>
            </div>
            <br> <br>
            <div class="row justify-content-center gutters">
              <td colspan="1" style=" font-size:14px" align="right">
                <button  onclick="ClearAllControls()"  value="Clear" type="reset"  class="btn btn-danger btn-lg" style="font-size: 15px;float: right; margin-right: 20px;"><i class="icon-reply"></i> &nbsp;Clear</button>
              <button  href="<?php echo base_url('User/game');?>" id="submit"  name="submit" type="submit" class="btn btn-warning btn-lg" style="font-size: 15px;float: right; margin-right: 20px;"><i class="icon-gift" align=center;></i>  &nbsp;Buy</button><br><br></td>
            </div> 
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script>
$('#sa_all').keyup(function () {
ions();
});
$('#single0').keyup(function() { doCalculations();  });
$('#single1').keyup(function() { doCalculations();  });
$('#single2').keyup(function() { doCalculations();  });
$('#single3').keyup(function() { doCalculations();  });
$('#single4').keyup(function() { doCalculations();  });
$('#single5').keyup(function() { doCalculations();  });
$('#single6').keyup(function() { doCalculations();  });
$('#single7').keyup(function() { doCalculations();  });
$('#single8').keyup(function() { doCalculations();  });
$('#single9').keyup(function() { doCalculations();  });
$('#sp').keyup(function() {
checkCount('#sp'); doCalculations();
});
//$('#sp').keydown(function() { checkCount('#sp'); });
function checkCount(bx) {
var cnt = 0;
}
function doCalculations()
{
var singleTotal = Number($('#single1').val()) + Number($('#single2').val()) + Number($('#single3').val()) + Number($('#single4').val()) + Number($('#single5').val()) + Number($('#single6').val()) + Number($('#single7').val()) + Number($('#single8').val()) + Number($('#single9').val()) + Number($('#single0').val());
$('#singleAmt').val(singleTotal);

$('#totalAmt').val(Number($('#singleAmt').val()));
$('#totalsingleAmt').html(Number($('#singleAmt').val()));
}
function ions() {
$('#single0').val(Number($('#sa_all').val()));
$('#single1').val(Number($('#sa_all').val()));
$('#single2').val(Number($('#sa_all').val()));
$('#single3').val(Number($('#sa_all').val()));
$('#single4').val(Number($('#sa_all').val()));
$('#single5').val(Number($('#sa_all').val()));
$('#single6').val(Number($('#sa_all').val()));
$('#single7').val(Number($('#sa_all').val()));
$('#single8').val(Number($('#sa_all').val()));
$('#single9').val(Number($('#sa_all').val()));
}
</script><!-- /Calendar -->
<script>
window.setTimeout(function() {
$("#alert").fadeTo(500, 0).slideUp(500, function(){
$(this).remove();
});
}, 7500);
</script>
<script>
$(".form-control").keypress(function(event) {
if ( event.which == 45 ) {
event.preventDefault();
}
});
</script>s