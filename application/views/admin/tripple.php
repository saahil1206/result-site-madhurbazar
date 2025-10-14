<style>
.numinput {
width: 85px;
height: 40px;
text-align: left;
border-radius: 4px;
border-color: black;
margin: 0 1px 8px 1px;
padding: 5px 0px 6px 9px;
font-weight:bold;
font-size: 15px;
}
.numAmt {
border-radius: 4px;
border-color: black;
margin: 0 1px 8px 1px;
padding: 5px 0px 6px 9px;
font-weight:bold;
font-size: 15px;
}
.sing1 span {
width: 40px;
height: 40px;
display: inline-block;
text-align: center;
border-radius: 4px;
line-height: 35px;
font-size: 16px;
background-color: #342e36;
color: white;
font-weight:bold;
}
.awesome{
width: 120px;
height: 40px;
padding: 2px;
display: inline-block;
text-align: center;
border-radius: 4px;
line-height: 35px;
font-size: 14px;
background-color: #342e36;
color: white;
font-weight:bold;
}
.head{
border-radius: 4px;
border-color: black;
padding: 1px 1px 1px 1px;
height: 34px;
font-weight:bold;
width: 70px;
}
.all{
border-radius: 4px;
border-color: black;
width: 50px;
height: 35px;
text-align: center;
font-size: 14px;
font-weight:bold;
}
.pana{
width: 70px;
height: 38px;
font-size: 18px;
font-weight: bold;
line-height: 30px;
text-align: center;
border-radius: 4px;
background-color: #342e36;
color: white;
}
.add{
width: 37px;
height: 37px;
font-size: 18px;
font-weight: bold;
text-align: center;
border-radius: 4px;
background-color: #428bca;
color: white;
}
</style>
<?php
foreach ($bazar->result() as $row)
{
$bazar_name=$row->bazar_name;
}
?>
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
  <form method="post" action="<?php echo base_url();?>Admintriple/index">
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
  <div class="row justify-content-center gutters" style="margin-top: -400px;">
    <span style="font-size:22px;color: #342e36;font-weight: 800;"><br><span style=" background-color:#f5f0ee;font-size:22px;color:black;">&#8377;</span>&nbsp; TRIPLE - PANA</span></div>
    
    <div class="row gutters">
      <div class="col-12">
        <hr>
        <div class="sing1">
          
          
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;1&nbsp;</span> </td>&nbsp;
                <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>&nbsp;
                <td align="center"> <span type="button" href="#" style=" background-color: #668cff;color:#1a0000;margin-right: 6px;"> 777 </span>
                <input id="single0" autofocus name="single0" autocomplete="off"  size="5"  maxlength="6" type="text" class="numinput"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;2&nbsp;</span> </td>&nbsp;
                <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>&nbsp;
                <td align="center"> <span type="button" href="#" style=" background-color: #668cff;color:#1a0000;margin-right: 6px;"> 444</span><input id="single1" name="single1" autocomplete="false" size="5"  maxlength="6" type="text"class="numinput"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </tr>
            </div>
            
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;3&nbsp;</span> </td>&nbsp;
                <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>&nbsp;
                <td align="center"> <span type="button" href="#" style=" background-color: #668cff;color:#1a0000;margin-right: 6px;"> 111</span><input id="single2" name="single2" autocomplete="false" size="5"   maxlength="6" type="text"class="numinput"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;4&nbsp;</span> </td>&nbsp;
                <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>&nbsp;
                <td align="center"> <span type="button" href="#" style=" background-color: #668cff;color:#1a0000;margin-right: 6px;"> 888</span><input id="single3" name="single3" autocomplete="false" size="5"   maxlength="6" type="text"class="numinput"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;5&nbsp;</span> </td>&nbsp;
                <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>&nbsp;
                <td align="center"> <span type="button" href="#" style=" background-color: #668cff;color:#1a0000;margin-right: 6px;"> 555</span><input id="single4" name="single4" autocomplete="false" size="5"    maxlength="6" type="text" type="text"class="numinput"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;6&nbsp;</span> </td>&nbsp;
                <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>&nbsp;
                <td align="center"> <span type="button" href="#" style=" background-color: #668cff;color:#1a0000;margin-right: 6px;"> 222</span><input id="single5" name="single5" autocomplete="false" size="5"    maxlength="6" type="text" type="text"class="numinput"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;7&nbsp;</span> </td>&nbsp;
                <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>&nbsp;
                <td align="center"> <span type="button" href="#" style=" background-color: #668cff;color:#1a0000;margin-right: 6px;"> 999</span><input id="single6" name="single6" autocomplete="false" size="5"    maxlength="6" type="text"type="text"class="numinput"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;8&nbsp;</span> </td>&nbsp;
                <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>&nbsp;
                <td align="center"> <span type="button" href="#" style=" background-color: #668cff;color:#1a0000;margin-right: 6px;"> 666</span><input id="single7" name="single7" autocomplete="false" size="5"    maxlength="6" type="text"type="text"class="numinput"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;9&nbsp;</span> </td>&nbsp;
                <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>&nbsp;
                <td align="center"> <span type="button" href="#" style=" background-color: #668cff;color:#1a0000;margin-right: 6px;"> 333</span><input id="single8" name="single8" autocomplete="false" size="5"    maxlength="6" type="text"class="numinput"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </tr>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <tr>
                <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;0&nbsp;</span> </td>&nbsp;
                <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>&nbsp;
                <td align="center"> <span type="button" href="#" style=" background-color: #668cff;color:#1a0000;margin-right: 6px;"> 000</span><input id="single9" name="single9" autocomplete="false" size="5"    maxlength="6" type="text"class="numinput"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </tr>
            </div>
          </tr>
          <hr>
          <tr height="5px">
            <td ><input type="hidden" value="<?php  echo $gameid; ?>" name="bazar"></td>
            <td colspan="1"><input type="hidden"  value="<?php  echo $bazarType; ?>" name="bazar_cat"></td>
            <td ><!--<input type="hidden" value="<?php  echo $_SESSION['userid']; ?>" name="client"> --></td>
            
            
            <div class="row justify-content-center gutters">
              <td></td>&nbsp;&nbsp;&nbsp;  <span style="font-size:25px;color:black;background-color: #f5f0ee;"></span>
              <input style="width:110px" id="totalAmt" name="totalAmt" class="numAmt" readonly="true" type="hidden">
            </div>
            <div class="row justify-content-center gutters">
              <td>
              <label style="color:#342e36; font-weight:bold;font-size:18px;text-transform: uppercase;padding-top: 8px;"> Total Points </label>
              </td>&nbsp;
              <span style="font-size:25px;background-color: #f5f0ee;color:#342e36;">&#8680;</span> &nbsp;
              <span style ="font-size: 20px;font-weight:900;text-decoration: underline;color:#ff8c1a;background-color: #f5f0ee;" id="trippletotalAmt"></span>
            </tr>
          </div> <br> <br>
          <div class="row justify-content-center gutters">
            <td colspan="1" style=" font-size:14px" align="right">
              <button  onclick="ClearAllControls()"  value="Clear" type="reset"  class="btn btn-danger btn-lg" style="font-size: 15px;float: right; margin-right: 20px;"><i class="icon-reply"></i> &nbsp;Clear</button>
              <button  id="submit" name="submit" type="submit" class="btn btn-warning btn-lg" style="font-size: 15px;float: right; margin-right: 20px;"><i class="icon-gift" align=center;></i>  &nbsp;Buy</button><br><br>
            </td>
          </tr>
        </div>
      </form>
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
//alert(singleTotal);
$('#singleAmt').val(singleTotal);
$('#totalAmt').val(singleTotal);
$('#trippletotalAmt').html(singleTotal);

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
</script>