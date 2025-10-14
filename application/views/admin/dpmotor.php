<?php
foreach ($bazar->result() as $row)
{
$bazar_name=$row->bazar_name;
}
?>
<style>
.numinput{
width: 72px;
border-radius: 4px;
border-color: black;
margin: 0 1px 8px 1px;
padding: 5px 0px 6px 9px;
font-weight:bold;
font-size: 15px;
}
.numAmt {
width:86px;
border-radius: 4px;
border-color: black;
margin: 0 1px 8px 1px;
padding: 5px 0px 6px 9px;
font-weight:bold;
font-size: 15px;
}
.sing1 span {
width: 40px;
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
    <span style="font-size:22px;color: #342e36;font-weight: 800;"><span style=" background-color:#f5f0ee;font-size:22px;color:black;">&#8377;</span>&nbsp; DP MOTOR PANA</span> </div>
     <br> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >
   <br>       <div class="widget-box" style="border: 2px solid purple;background-color: #e59711;padding:20px;margin top:20px;">
<div class="row justify-content-center gutters">
                  <form class="form-inline">
                    <div class="form-group">
                      <label for="inputPassword6" style="font-size: 18px;margin-right:20px;font-weight: bold;">PANA NO.</label>
                      
                      <input id="" style="width:84px;margin-right: 15px;" name="" type="text"  class="numinput numbersdata" autocomplete="false" maxlength="6">
                      
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="form-group">
                            <label for="inputPassword6" style="font-size: 18px;margin-right:20px;font-weight: bold;">AMOUNT.</label>
                      
                      <input id="" style="width:84px;margin-right: 15px;" name="" type="text"  class="numinput numbersdata" autocomplete="false" maxlength="6">
                    </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="form-group">
                      <div class="btn-group mr-2" role="group" aria-label="First group">
                       <button  onclick="ClearAllControls()"  value="Clear" type="reset"  class="btn btn-info" style="font-size: 15px;float: right; margin-right: 20px;"><i class="icon-reply"></i> &nbsp;Clear</button>
                                                                  <button  id="submit" name="submit" type="submit" class="btn btn-primary" style="font-size: 15px;float: right; margin-right: 20px;"><i class="icon-gift" align=center;></i>  &nbsp;Buy</button>
                    </div>
                   
                  </div>
                    

                  </form>
              </div>    
                </div>
                <div class="row justify-content-center gutters">
             <div class="btn-group btn-group-lg" role="group" aria-label="First group"  style="margin-bottom: 20px;margin-top: 20px;"><span style ="font-size: 22px;font-weight:600;color:#d54e80; ">TOTAL POINTS - </span>&nbsp;<span style ="font-size: 30px;font-weight:900;text-decoration: underline;color:#2688c9 ">10000</span></div></div>

    <div class="row gutters">
      <div class="col-12">
        <hr>
        <form method="post" action="<?php echo base_url();?>Double/index">
          
          <div class="sing1">
            <tr>
              <td align="center" style="padding:120px;"><label class="numberCircle" type="button" href="#"  style="background-color: #ff9900; color:white;font-size: 20px;font-weight: bold;" > &nbsp;1&nbsp; </label> &nbsp; </td>
              <br>
              <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
              <br>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>100</span><input autocomplete="false" id="dp_1_0" name="dp_1_0" class="numinput" maxlength="6" type="text" readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>335</span><input autocomplete="false" id="dp_1_1" name="dp_1_1" class="numinput" maxlength="6" type="text" readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>344</span><input autocomplete="false" id="dp_1_2" name="dp_1_2" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>119</span><input autocomplete="false" id="dp_1_3" name="dp_1_3" class="numinput" maxlength="6" type="text"input autocomplete="false" id="dp_1_0" name="dp_1_0" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>399</span><input autocomplete="false" id="dp_1_4" name="dp_1_4" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>155</span><input autocomplete="false" id="dp_1_5" name="dp_1_5" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>588</span><input autocomplete="false" id="dp_1_6" name="dp_1_6" class="numinput" maxlength="6" type="text" readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>227</span><input autocomplete="false" id="dp_1_7" name="dp_1_7" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>669</span><input autocomplete="false" id="dp_1_8" name="dp_1_8" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
            </tr>
          </div>
          <hr>
          <div class="sing1">
            <tr>
              <td align="center" style="padding:120px;"><label class="numberCircle" type="button" href="#"  style="background-color: #ff9900; color:white;font-size: 20px;font-weight: bold;" > &nbsp;2&nbsp; </label> &nbsp;</td>
             
              <br>
              <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
              <br>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>200</span><input autocomplete="false" id="dp_2_0" name="dp_2_0" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>336</span><input autocomplete="false" id="dp_2_1" name="dp_2_1" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>499</span><input autocomplete="false" id="dp_2_2" name="dp_2_2" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>110</span><input autocomplete="false" id="dp_2_3" name="dp_2_3" class="numinput" maxlength="6" type="text" readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>660</span><input autocomplete="false" id="dp_2_4" name="dp_2_4" class="numinput" maxlength="6" type="text" readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>228</span><input autocomplete="false" id="dp_2_5" name="dp_2_5" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>688</span><input autocomplete="false" id="dp_2_6" name="dp_2_6" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>225</span><input autocomplete="false" id="dp_2_7" name="dp_2_7" class="numinput" maxlength="6" type="text" readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>778</span><input autocomplete="false" id="dp_2_8" name="dp_2_8" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
            </tr>
          </div>
          <hr>
          <div class="sing1">
            <tr>
              <td align="center" style="padding:120px;"><label class="numberCircle" type="button" href="#"  style="background-color: #ff9900; color:white;font-size: 20px;font-weight: bold;" > &nbsp;3&nbsp; </label> &nbsp;</td>
             
              <br>
              <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
              <br>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>300</span><input autocomplete="false" id="dp_3_0" name="dp_3_0" class="numinput" maxlength="6" type="text"   readonly></td>
                
                
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>355</span><input autocomplete="false" id="dp_3_1" name="dp_3_1" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>445</span><input autocomplete="false" id="dp_3_2" name="dp_3_2" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>166</span><input autocomplete="false" id="dp_3_3" name="dp_3_3" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>599</span><input autocomplete="false" id="dp_3_4" name="dp_3_4" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>229</span><input autocomplete="false" id="dp_3_5" name="dp_3_5" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>779</span><input autocomplete="false" id="dp_3_6" name="dp_3_6" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>337</span><input autocomplete="false" id="dp_3_7" name="dp_3_7" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>788</span><input autocomplete="false" id="dp_3_8" name="dp_3_8" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
            </tr>
          </div>
          <hr>
          <div class="sing1">
            <tr>
              <td align="center" style="padding:120px;"><label class="numberCircle" type="button" href="#"  style="background-color: #ff9900; color:white;font-size: 20px;font-weight: bold;" > &nbsp;4&nbsp; </label> &nbsp; </td>
             
              <br>
              <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
              <br>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>400</span><input autocomplete="false" id="dp_4_0" name="dp_4_0" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>338</span><input autocomplete="false" id="dp_4_1" name="dp_4_1" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>446</span><input autocomplete="false" id="dp_4_2" name="dp_4_2" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>112</span><input autocomplete="false" id="dp_4_3" name="dp_4_3" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>455</span><input autocomplete="false" id="dp_4_4" name="dp_4_4" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>220</span><input autocomplete="false" id="dp_4_5" name="dp_4_5" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>699</span><input autocomplete="false" id="dp_4_6" name="dp_4_6" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>266</span><input autocomplete="false" id="dp_4_7" name="dp_4_7" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>770</span><input autocomplete="false" id="dp_4_8" name="dp_4_8" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
            </tr>
          </div>
          <hr>
          <div class="sing1">
            <tr>
              <td align="center" style="padding:120px;"><label class="numberCircle" type="button" href="#"  style="background-color: #ff9900; color:white;font-size: 20px;font-weight: bold;" > &nbsp;5&nbsp; </label> &nbsp;</td>
             
              <br>
              <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
              <br>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>500</span><input autocomplete="false" id="dp_5_0" name="dp_5_0" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>339</span><input autocomplete="false" id="dp_5_1" name="dp_5_1" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>366</span><input autocomplete="false" id="dp_5_2" name="dp_5_2" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>113</span><input autocomplete="false" id="dp_5_3" name="dp_5_3" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>447</span><input autocomplete="false" id="dp_5_4" name="dp_5_4" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>122</span><input autocomplete="false" id="dp_5_5" name="dp_5_5" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>799</span><input autocomplete="false" id="dp_5_6" name="dp_5_6" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>177</span><input autocomplete="false" id="dp_5_7" name="dp_5_7" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>889</span><input autocomplete="false" id="dp_5_8" name="dp_5_8" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
            </tr>
          </div>
          <hr>
          <div class="sing1">
            <tr>
              <td align="center" style="padding:120px;"><label class="numberCircle" type="button" href="#"  style="background-color: #ff9900; color:white;font-size: 20px;font-weight: bold;" > &nbsp;6&nbsp; </label> &nbsp;</td>
             
              <br>
              <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
              <br>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>600</span><input autocomplete="false" id="dp_6_0" name="dp_6_0" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>448</span><input autocomplete="false" id="dp_6_1" name="dp_6_1" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>466</span><input autocomplete="false" id="dp_6_2" name="dp_6_2" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>114</span><input autocomplete="false" id="dp_6_3" name="dp_6_3" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>556</span><input autocomplete="false" id="dp_6_4" name="dp_6_4" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>277</span><input autocomplete="false" id="dp_6_5" name="dp_6_5" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>880</span><input autocomplete="false" id="dp_6_6" name="dp_6_6" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>330</span><input autocomplete="false" id="dp_6_7" name="dp_6_7" class="numinput" maxlength="6" type="text"  readonly></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>899</span><input autocomplete="false" id="dp_6_8" name="dp_6_8" class="numinput" maxlength="6" type="text"   readonly></td>
              </div>
            </tr>
          </div>
          <hr>
          <div class="sing1">
            <tr>
              <td align="center" style="padding:120px;"><label class="numberCircle" type="button" href="#"  style="background-color: #ff9900; color:white;font-size: 20px;font-weight: bold;" > &nbsp;7&nbsp; </label> &nbsp; </td>
              
              <br>
              <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
              <br>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>700</span><input autocomplete="false" id="dp_7_0" name="dp_7_0" class="numinput" maxlength="6" type="text"  readonly></td></div>
                <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                  <td align="center" ><span>223</span><input autocomplete="false" id="dp_7_1" name="dp_7_1" class="numinput" maxlength="6" type="text"  readonly></td></div>
                  <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                    <td align="center" ><span>377</span><input autocomplete="false" id="dp_7_2" name="dp_7_2" class="numinput" maxlength="6" type="text"  readonly></td></div>
                    <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                      <td align="center"><span>115</span><input autocomplete="false" id="dp_7_3" name="dp_7_3" class="numinput" maxlength="6" type="text"  readonly></td></div>
                      <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                        <td align="center" ><span>449</span><input autocomplete="false" id="dp_7_4" name="dp_7_4" class="numinput" maxlength="6" type="text"  readonly></td></div>
                        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                          <td align="center" ><span>133</span><input autocomplete="false" id="dp_7_5" name="dp_7_5" class="numinput" maxlength="6" type="text"  readonly></td></div>
                          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                            <td align="center" ><span>557</span><input autocomplete="false" id="dp_7_6" name="dp_7_6" class="numinput" maxlength="6" type="text"  readonly></td></div>
                            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                              <td align="center" ><span>188</span><input autocomplete="false" id="dp_7_7" name="dp_7_7" class="numinput" maxlength="6" type="text"  readonly></td></div>
                              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                <td align="center" ><span>566</span><input autocomplete="false" id="dp_7_8" name="dp_7_8" class="numinput" maxlength="6" type="text"  readonly></td>
                              </div>
                            </tr>
                          </div>
                          <hr> <div class="sing1">
                            <tr>
                              <td align="center" style="padding:120px;"><label class="numberCircle" type="button" href="#"  style="background-color: #ff9900; color:white;font-size: 20px;font-weight: bold;" > &nbsp;8&nbsp; </label> &nbsp;</td>
                             
                              <br>
                              <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
                              <br>
                              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                <td align="center" ><span>800</span><input autocomplete="false" id="dp_8_0" name="dp_8_0" class="numinput" maxlength="6" type="text"  readonly></td></div>
                                <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                  <td align="center" ><span>288</span><input autocomplete="false" id="dp_8_1" name="dp_8_1" class="numinput" maxlength="6" type="text"  readonly></td></div>
                                  <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                    <td align="center" ><span>440</span><input autocomplete="false" id="dp_8_2" name="dp_8_2" class="numinput" maxlength="6" type="text"  readonly></td></div>
                                    <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                      <td align="center" ><span>116</span><input autocomplete="false" id="dp_8_3" name="dp_8_3" class="numinput" maxlength="6" type="text"  readonly></td></div>
                                      <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                        <td align="center" ><span>477</span><input autocomplete="false" id="dp_8_4" name="dp_8_4" class="numinput" maxlength="6" type="text"  readonly></td></div>
                                        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                          <td align="center" ><span>224</span><input autocomplete="false" id="dp_8_5" name="dp_8_5" class="numinput" maxlength="6" type="text"  readonly></td></div>
                                          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                            <td align="center" ><span>558</span><input autocomplete="false" id="dp_8_6" name="dp_8_6" class="numinput" maxlength="6" type="text"  readonly></td></div>
                                            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                              <td align="center" ><span>233</span><input autocomplete="false" id="dp_8_7" name="dp_8_7" class="numinput" maxlength="6" type="text"  readonly></td></div>
                                              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                <td align="center" ><span>990</span><input autocomplete="false" id="dp_8_8" name="dp_8_8" class="numinput" maxlength="6" type="text"  readonly></td></div>
                                              </tr>
                                            </div>
                                            <hr>
                                            <div class="sing1">
                                              <tr>
                                                <td align="center" style="padding:120px;"><label class="numberCircle" type="button" href="#"  style="background-color: #ff9900; color:white;font-size: 20px;font-weight: bold;" > &nbsp;9&nbsp; </label> &nbsp;</td>
                                               
                                                <br>
                                                <span style=" background-color:#f5f0ee;font-size:30px;color:black;padding-bottom: : 15px;">&#8681;</span>
                                                <br>
                                                <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                  <td align="center" ><span>900</span><input autocomplete="false" id="dp_9_0" name="dp_9_0" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                  <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                    <td align="center" ><span>225</span><input autocomplete="false" id="dp_9_1" name="dp_9_1" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                    <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                      <td align="center" ><span>388</span><input autocomplete="false" id="dp_9_2" name="dp_9_2" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                      <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                        <td align="center" ><span>117</span><input autocomplete="false" id="dp_9_3" name="dp_9_3" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                          <td align="center" ><span>559</span><input autocomplete="false" id="dp_9_4" name="dp_9_4" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                            <td align="center" ><span>144</span><input autocomplete="false" id="dp_9_5" name="dp_9_5" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                              <td align="center" ><span>577</span><input autocomplete="false" id="dp_9_6" name="dp_9_6" class="numinput" maxlength="6" type="text" readonly ></td></div>
                                                              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                                <td align="center" ><span>199</span><input autocomplete="false" id="dp_9_7" name="dp_9_7" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                                <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                                  <td align="center" ><span>667</span><input autocomplete="false" id="dp_9_8" name="dp_9_8" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                                </tr><hr>
                                                                <div class="sing1">
                                              <tr>
                                                <td align="center" style="padding:120px;"><label class="numberCircle" type="button" href="#"  style="background-color: #ff9900; color:white;font-size: 20px;font-weight: bold;" > &nbsp;0&nbsp; </label> &nbsp; </td>
                                                
                                                <br>
                                                <span style=" background-color:#f5f0ee;font-size:30px;color:black;padding-bottom: : 15px;">&#8681;</span>
                                                <br>
                                                <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                  <td align="center" ><span>226</span><input autocomplete="false" id="dp_0_0" name="dp_0_0" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                  <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                    <td align="center" ><span>668</span><input autocomplete="false" id="dp_0_1" name="dp_0_1" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                    <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                      <td align="center" ><span>488</span><input autocomplete="false" id="dp_0_2" name="dp_0_2" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                      <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                        <td align="center" ><span>118</span><input autocomplete="false" id="dp_0_3" name="dp_0_3" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                          <td align="center" ><span>334</span><input autocomplete="false" id="dp_0_4" name="dp_0_4" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                            <td align="center" ><span>299</span><input autocomplete="false" id="dp_0_5" name="dp_0_5" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                              <td align="center" ><span>550</span><input autocomplete="false" id="dp_0_6" name="dp_0_6" class="numinput" maxlength="6" type="text" readonly ></td></div>
                                                              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                                <td align="center" ><span>244</span><input autocomplete="false" id="dp_0_7" name="dp_0_7" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                                <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                                                                  <td align="center" ><span>677</span><input autocomplete="false" id="dp_0_8" name="dp_0_8" class="numinput" maxlength="6" type="text" readonly></td></div>
                                                                </tr>
                                                                <hr>
                                                         
                                                                </div>
                                                           
                                                    
                                                            </tr>
                                                          </div>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <script type="text/javascript">
                                              setInterval(displaylefttime,1000);
                                              var current_date=new Date(1492420814000);
                                              function displaylefttime(){
                                              var inputdrawstatus = document.getElementById("inputdrawstatus").value;
                                              var targetdate_array = inputdrawstatus.split("-");
                                              var targetdate_array = inputdrawstatus.split("-");
                                              var target_date = new Date(targetdate_array[0],targetdate_array[1],targetdate_array[2],targetdate_array[3],targetdate_array[4]).getTime();
                                              var days, hours, minutes, seconds;
                                              var countdown = document.getElementById("t1");
                                              var countdown2 = document.getElementById("t2");
                                              current_date.setSeconds(current_date.getSeconds()+1);
                                              var curhours = current_date.getHours();
                                              var curminutes = current_date.getMinutes();
                                              var curseconds = current_date.getSeconds();
                                              var seconds_left = (target_date - current_date) / 1000;
                                              days = parseInt(seconds_left / 86400);
                                              seconds_left = seconds_left % 86400;
                                              hours = parseInt(seconds_left / 3600);
                                              seconds_left = seconds_left % 3600;
                                              minutes = parseInt(seconds_left / 60);
                                              seconds = parseInt(seconds_left % 60);
                                              if(curseconds<=9){
                                              curseconds = '0'+curseconds;
                                              }
                                              if(curminutes<=9){
                                              curminutes = '0'+curminutes;
                                              }
                                              if(curhours>12){
                                              curhours = curhours-12;
                                              }
                                              if(curhours<=9){
                                              curhours = '0'+curhours;
                                              }
                                              if(seconds<=9){
                                              seconds = '0'+seconds;
                                              }
                                              if(minutes<=9){
                                              minutes = '0'+minutes;
                                              }
                                              if(hours<=9){
                                              hours = '0'+hours;
                                              }
                                              if(minutes == '00' && hours == '00' && seconds == '00'){
                                              window.location.reload(true);
                                              }
                                              // format countdown string + set tag value
                                              document.getElementById('getclockwithdate').innerHTML=curhours+":"+curminutes+":"+curseconds;
                                              if (countdown) {
                                              countdown.innerHTML = hours + ":" + minutes + ":" + seconds;
                                              }
                                              if (countdown2) {
                                              countdown2.innerHTML = hours + ":" + minutes + ":" + seconds;
                                              }
                                              //alert(countdowninnerHTML);
                                              }
                                              jQuery(document).ready(function () {
                                              jQuery('.dropdown.type a').on('click', function () {
                                              jQuery('#type').val(jQuery(this).attr('data_value'));
                                              jQuery('.dropdown.type').find('.dropdown-toggle').html(jQuery(this).text() + ' <span class="caret"></span>');
                                              });
                                              /* purchase all box script */
                                              jQuery('#all_box').on('keyup', function() {
                                              var pattiRows = [1,2,3,4,5,6,7,8,9,0];
                                              jQuery.each(pattiRows, function(n, rowIndex) {
                                              jQuery('#dp_col_'+rowIndex).val(jQuery('#all_box').val());
                                              var pattiIndexes = [1,2,3,4,5,6,7,8,9,10, 11, 12];
                                              jQuery.each(pattiIndexes, function(colIndex, n) {
                                              jQuery('#dp_' + rowIndex + '_' + colIndex).val(jQuery('#all_box').val());
                                              });
                                              });
                                              doCalculations();
                                              });
                                              /* purchase column script */
                                              jQuery('.column_box').on('keyup', function(){
                                              var idSplit = jQuery(this).attr('id').split('_');
                                              var pattiIndexes = [1,2,3,4,5,6,7,8,9,10, 11, 12];
                                              jQuery.each(pattiIndexes, function(m, rowIndex) {
                                              jQuery('#dp_' + idSplit[2] + '_' + m).val(jQuery('#dp_col_'+idSplit[2]).val());
                                              });
                                              doCalculations();
                                              });
                                              
                                              jQuery('#dp_row_0').on('keyup', function(){
                                              
                                              jQuery('#dp_1_0').val(jQuery('#dp_row_0').val());
                                              jQuery('#dp_2_0').val(jQuery('#dp_row_0').val());
                                              jQuery('#dp_3_0').val(jQuery('#dp_row_0').val());
                                              jQuery('#dp_4_0').val(jQuery('#dp_row_0').val());
                                              jQuery('#dp_5_0').val(jQuery('#dp_row_0').val());
                                              jQuery('#dp_6_0').val(jQuery('#dp_row_0').val());
                                              jQuery('#dp_7_0').val(jQuery('#dp_row_0').val());
                                              jQuery('#dp_8_0').val(jQuery('#dp_row_0').val());
                                              jQuery('#dp_9_0').val(jQuery('#dp_row_0').val());
                                              jQuery('#dp_0_0').val(jQuery('#dp_row_0').val());
                                              
                                              doCalculations();
                                              });
                                              
                                              jQuery('#dp_row_1').on('keyup', function(){
                                              
                                              jQuery('#dp_1_1').val(jQuery('#dp_row_1').val());
                                              jQuery('#dp_2_1').val(jQuery('#dp_row_1').val());
                                              jQuery('#dp_3_1').val(jQuery('#dp_row_1').val());
                                              jQuery('#dp_4_1').val(jQuery('#dp_row_1').val());
                                              jQuery('#dp_5_1').val(jQuery('#dp_row_1').val());
                                              jQuery('#dp_6_1').val(jQuery('#dp_row_1').val());
                                              jQuery('#dp_7_1').val(jQuery('#dp_row_1').val());
                                              jQuery('#dp_8_1').val(jQuery('#dp_row_1').val());
                                              jQuery('#dp_9_1').val(jQuery('#dp_row_1').val());
                                              jQuery('#dp_0_1').val(jQuery('#dp_row_1').val());
                                              
                                              doCalculations();
                                              });
                                              jQuery('#dp_row_2').on('keyup', function(){
                                              
                                              jQuery('#dp_1_2').val(jQuery('#dp_row_2').val());
                                              jQuery('#dp_2_2').val(jQuery('#dp_row_2').val());
                                              jQuery('#dp_3_2').val(jQuery('#dp_row_2').val());
                                              jQuery('#dp_4_2').val(jQuery('#dp_row_2').val());
                                              jQuery('#dp_5_2').val(jQuery('#dp_row_2').val());
                                              jQuery('#dp_6_2').val(jQuery('#dp_row_2').val());
                                              jQuery('#dp_7_2').val(jQuery('#dp_row_2').val());
                                              jQuery('#dp_8_2').val(jQuery('#dp_row_2').val());
                                              jQuery('#dp_9_2').val(jQuery('#dp_row_2').val());
                                              jQuery('#dp_0_2').val(jQuery('#dp_row_2').val());
                                              
                                              doCalculations();
                                              });
                                              
                                              jQuery('#dp_row_3').on('keyup', function(){
                                              
                                              jQuery('#dp_1_3').val(jQuery('#dp_row_3').val());
                                              jQuery('#dp_2_3').val(jQuery('#dp_row_3').val());
                                              jQuery('#dp_3_3').val(jQuery('#dp_row_3').val());
                                              jQuery('#dp_4_3').val(jQuery('#dp_row_3').val());
                                              jQuery('#dp_5_3').val(jQuery('#dp_row_3').val());
                                              jQuery('#dp_6_3').val(jQuery('#dp_row_3').val());
                                              jQuery('#dp_7_3').val(jQuery('#dp_row_3').val());
                                              jQuery('#dp_8_3').val(jQuery('#dp_row_3').val());
                                              jQuery('#dp_9_3').val(jQuery('#dp_row_3').val());
                                              jQuery('#dp_0_3').val(jQuery('#dp_row_3').val());
                                              
                                              doCalculations();
                                              });
                                              
                                              jQuery('#dp_row_4').on('keyup', function(){
                                              
                                              jQuery('#dp_1_4').val(jQuery('#dp_row_4').val());
                                              jQuery('#dp_2_4').val(jQuery('#dp_row_4').val());
                                              jQuery('#dp_3_4').val(jQuery('#dp_row_4').val());
                                              jQuery('#dp_4_4').val(jQuery('#dp_row_4').val());
                                              jQuery('#dp_5_4').val(jQuery('#dp_row_4').val());
                                              jQuery('#dp_6_4').val(jQuery('#dp_row_4').val());
                                              jQuery('#dp_7_4').val(jQuery('#dp_row_4').val());
                                              jQuery('#dp_8_4').val(jQuery('#dp_row_4').val());
                                              jQuery('#dp_9_4').val(jQuery('#dp_row_4').val());
                                              jQuery('#dp_0_4').val(jQuery('#dp_row_4').val());
                                              
                                              doCalculations();
                                              });
                                              
                                              jQuery('#dp_row_5').on('keyup', function(){
                                              
                                              jQuery('#dp_1_5').val(jQuery('#dp_row_5').val());
                                              jQuery('#dp_2_5').val(jQuery('#dp_row_5').val());
                                              jQuery('#dp_3_5').val(jQuery('#dp_row_5').val());
                                              jQuery('#dp_4_5').val(jQuery('#dp_row_5').val());
                                              jQuery('#dp_5_5').val(jQuery('#dp_row_5').val());
                                              jQuery('#dp_6_5').val(jQuery('#dp_row_5').val());
                                              jQuery('#dp_7_5').val(jQuery('#dp_row_5').val());
                                              jQuery('#dp_8_5').val(jQuery('#dp_row_5').val());
                                              jQuery('#dp_9_5').val(jQuery('#dp_row_5').val());
                                              jQuery('#dp_0_5').val(jQuery('#dp_row_5').val());
                                              
                                              doCalculations();
                                              });
                                              
                                              jQuery('#dp_row_6').on('keyup', function(){
                                              
                                              jQuery('#dp_1_6').val(jQuery('#dp_row_6').val());
                                              jQuery('#dp_2_6').val(jQuery('#dp_row_6').val());
                                              jQuery('#dp_3_6').val(jQuery('#dp_row_6').val());
                                              jQuery('#dp_4_6').val(jQuery('#dp_row_6').val());
                                              jQuery('#dp_5_6').val(jQuery('#dp_row_6').val());
                                              jQuery('#dp_6_6').val(jQuery('#dp_row_6').val());
                                              jQuery('#dp_7_6').val(jQuery('#dp_row_6').val());
                                              jQuery('#dp_8_6').val(jQuery('#dp_row_6').val());
                                              jQuery('#dp_9_6').val(jQuery('#dp_row_6').val());
                                              jQuery('#dp_0_6').val(jQuery('#dp_row_6').val());
                                              
                                              doCalculations();
                                              });
                                              
                                              jQuery('#dp_row_7').on('keyup', function(){
                                              
                                              jQuery('#dp_1_7').val(jQuery('#dp_row_7').val());
                                              jQuery('#dp_2_7').val(jQuery('#dp_row_7').val());
                                              jQuery('#dp_3_7').val(jQuery('#dp_row_7').val());
                                              jQuery('#dp_4_7').val(jQuery('#dp_row_7').val());
                                              jQuery('#dp_5_7').val(jQuery('#dp_row_7').val());
                                              jQuery('#dp_6_7').val(jQuery('#dp_row_7').val());
                                              jQuery('#dp_7_7').val(jQuery('#dp_row_7').val());
                                              jQuery('#dp_8_7').val(jQuery('#dp_row_7').val());
                                              jQuery('#dp_9_7').val(jQuery('#dp_row_7').val());
                                              jQuery('#dp_0_7').val(jQuery('#dp_row_7').val());
                                              
                                              doCalculations();
                                              });
                                              
                                              jQuery('#dp_row_8').on('keyup', function(){
                                              
                                              jQuery('#dp_1_8').val(jQuery('#dp_row_8').val());
                                              jQuery('#dp_2_8').val(jQuery('#dp_row_8').val());
                                              jQuery('#dp_3_8').val(jQuery('#dp_row_8').val());
                                              jQuery('#dp_4_8').val(jQuery('#dp_row_8').val());
                                              jQuery('#dp_5_8').val(jQuery('#dp_row_8').val());
                                              jQuery('#dp_6_8').val(jQuery('#dp_row_8').val());
                                              jQuery('#dp_7_8').val(jQuery('#dp_row_8').val());
                                              jQuery('#dp_8_8').val(jQuery('#dp_row_8').val());
                                              jQuery('#dp_9_8').val(jQuery('#dp_row_8').val());
                                              jQuery('#dp_0_8').val(jQuery('#dp_row_8').val());
                                              
                                              doCalculations();
                                              });
                                              
                                              
                                              
                                              $('.numinput').keyup(function() { doCalculations();  });
                                              
                                              
                                              });
                                              
                                              
                                              
                                              
                                              function purchase() {
                                              var isLogin = "true";
                                              if (isLogin == 'false') {
                                              jQuery('.login_button').click();
                                              return false;
                                              } else if (jQuery('#category').val() == '') {
                                              jQuery('.dropdown.category').css('border', '1px solid red');
                                              jQuery('html,body').animate({
                                              scrollTop: jQuery(".dropdown.category").offset().top
                                              },
                                              'slow');
                                              return false;
                                              } else if (jQuery('#type').val() == '') {
                                              jQuery('.dropdown.type').css('border', '1px solid red');
                                              jQuery('html,body').animate({
                                              scrollTop: jQuery(".dropdown.type").offset().top
                                              },
                                              'slow');
                                              return false;
                                              } else if (jQuery('#totalAmt').val() == '') {
                                              jQuery('.numinput').css('border', '1px solid red');
                                              return false;
                                              }
                                              jQuery('#star3dp').submit();
                                              }
                                              var V = 'curslot';
                                              function ClearAllControls() {
                                              for (i = 0; i < document.forms["star3dp"].length; i++) {
                                              field_type = document.forms["star3dp"][i].type.toLowerCase();
                                              switch (field_type) {
                                              case "text":
                                              case "password":
                                              case "textarea":
                                              case "hidden":
                                              document.forms["star3dp"][i].value = "";
                                              break;
                                              case "radio":
                                              case "checkbox":
                                              if (document.forms["star3dp"][i].checked) {
                                              document.forms["star3dp"][i].checked = false;
                                              }
                                              break;
                                              case "select-one":
                                              case "select-multi":
                                              document.forms["star3dp"][i].selectedIndex = -1;
                                              break;
                                              default:
                                              break;
                                              }
                                              }
                                              }
                                              function checkCount(bx) {
                                              var cnt = 0;
                                              }
                                              function doCalculations() {
                                              var dp0Total = Number($('#dp_1_0').val()) + Number($('#dp_1_1').val()) + Number($('#dp_1_2').val()) + Number($('#dp_1_3').val()) + Number($('#dp_1_4').val()) + Number($('#dp_1_5').val()) + Number($('#dp_1_6').val()) + Number($('#dp_1_7').val()) + Number($('#dp_1_8').val()) ;
                                              //    $('#dp0Qty').val(dp0Total);
                                              //alert(dp0Total);

                                              $('#dp0Amt').val(Number(dp0Total) * Number(1.00));
                                              var dp1Total = Number($('#dp_2_0').val()) + Number($('#dp_2_1').val()) + Number($('#dp_2_2').val()) + Number($('#dp_2_3').val()) + Number($('#dp_2_4').val()) + Number($('#dp_2_5').val()) + Number($('#dp_2_6').val()) + Number($('#dp_2_7').val()) + Number($('#dp_2_8').val());
                                              //  $('#dp1Qty').val(dp1Total);
                                              $('#dp1Amt').val(Number(dp1Total) * Number(1.00));
                                              var dp2Total = Number($('#dp_3_0').val()) + Number($('#dp_3_1').val()) + Number($('#dp_3_2').val()) + Number($('#dp_3_3').val()) + Number($('#dp_3_4').val()) + Number($('#dp_3_5').val()) + Number($('#dp_3_6').val()) + Number($('#dp_3_7').val()) + Number($('#dp_3_8').val()) ;
                                              $('#dp2Qty').val(dp2Total);
                                              $('#dp2Amt').val(Number(dp2Total) * Number(1.00));
                                              var dp3Total = Number($('#dp_4_0').val()) + Number($('#dp_4_1').val()) + Number($('#dp_4_2').val()) + Number($('#dp_4_3').val()) + Number($('#dp_4_4').val()) + Number($('#dp_4_5').val()) + Number($('#dp_4_6').val()) + Number($('#dp_4_7').val()) + Number($('#dp_4_8').val()) ;
                                              $('#dp3Qty').val(dp3Total);
                                              $('#dp3Amt').val(Number(dp3Total) * Number(1.00));
                                              var dp4Total = Number($('#dp_5_0').val()) + Number($('#dp_5_1').val()) + Number($('#dp_5_2').val()) + Number($('#dp_5_3').val()) + Number($('#dp_5_4').val()) + Number($('#dp_5_5').val()) + Number($('#dp_5_6').val()) + Number($('#dp_5_7').val()) + Number($('#dp_5_8').val()) ;
                                              $('#dp4Qty').val(dp4Total);
                                              $('#dp4Amt').val(Number(dp4Total) * Number(1.00));
                                              var dp5Total = Number($('#dp_6_0').val()) + Number($('#dp_6_1').val()) + Number($('#dp_6_2').val()) + Number($('#dp_6_3').val()) + Number($('#dp_6_4').val()) + Number($('#dp_6_5').val()) + Number($('#dp_6_6').val()) + Number($('#dp_6_7').val()) + Number($('#dp_6_8').val()) ;
                                              $('#dp5Qty').val(dp5Total);
                                              $('#dp5Amt').val(Number(dp5Total) * Number(1.00));
                                              var dp6Total = Number($('#dp_7_0').val()) + Number($('#dp_7_1').val()) + Number($('#dp_7_2').val()) + Number($('#dp_7_3').val()) + Number($('#dp_7_4').val()) + Number($('#dp_7_5').val()) + Number($('#dp_7_6').val()) + Number($('#dp_7_7').val()) + Number($('#dp_7_8').val());
                                              $('#dp6Qty').val(dp6Total);
                                              $('#dp6Amt').val(Number(dp6Total) * Number(1.00));
                                              var dp7Total = Number($('#dp_8_0').val()) + Number($('#dp_8_1').val()) + Number($('#dp_8_2').val()) + Number($('#dp_8_3').val()) + Number($('#dp_8_4').val()) + Number($('#dp_8_5').val()) + Number($('#dp_8_6').val()) + Number($('#dp_8_7').val()) + Number($('#dp_8_8').val()) ;
                                              $('#dp7Qty').val(dp7Total);
                                              $('#dp7Amt').val(Number(dp7Total) * Number(1.00));
                                              var dp8Total = Number($('#dp_9_0').val()) + Number($('#dp_9_1').val()) + Number($('#dp_9_2').val()) + Number($('#dp_9_3').val()) + Number($('#dp_9_4').val()) + Number($('#dp_9_5').val()) + Number($('#dp_9_6').val()) + Number($('#dp_9_7').val()) + Number($('#dp_9_8').val()) ;
                                              $('#dp8Qty').val(dp8Total);
                                              $('#dp8Amt').val(Number(dp8Total) * Number(1.00));
                                              var dp9Total = Number($('#dp_0_0').val()) + Number($('#dp_0_1').val()) + Number($('#dp_0_2').val()) + Number($('#dp_0_3').val()) + Number($('#dp_0_4').val()) + Number($('#dp_0_5').val()) + Number($('#dp_0_6').val()) + Number($('#dp_0_7').val()) + Number($('#dp_0_8').val()) ;
                                              $('#dp9Qty').val(dp9Total);
                                              $('#dp9Amt').val(Number(dp9Total) * Number(1.00));
                                                
                                              $('#totalAmt').val(Number($('#dp0Amt').val()) + Number($('#dp1Amt').val()) + Number($('#dp2Amt').val()) + Number($('#dp3Amt').val()) + Number($('#dp4Amt').val()) + Number($('#dp5Amt').val()) + Number($('#dp6Amt').val()) + Number($('#dp7Amt').val()) + Number($('#dp8Amt').val())+ Number($('#dp9Amt').val()));
                                          
                                         $('#doubletotalAmt').html(Number($('#dp0Amt').val()) + Number($('#dp1Amt').val()) + Number($('#dp2Amt').val()) + Number($('#dp3Amt').val()) + Number($('#dp4Amt').val()) + Number($('#dp5Amt').val()) + Number($('#dp6Amt').val()) + Number($('#dp7Amt').val()) + Number($('#dp8Amt').val())+ Number($('#dp9Amt').val()));      
                                              
                                              }
                                              jQuery.fn.ForceNumericOnly =
                                              function () {
                                              return this.each(function () {
                                              $(this).keypress(function (e) {
                                              var key = e.Which || e.charCode || e.keyCode || 0;
                                              // allow backspace, tab, delete, arrows, numbers and keypad numbers ONLY
                                              return (
                                              key == 8 ||
                                              key == 9 ||
                                              key == 46 ||
                                              (key >= 37 && key <= 40) ||
                                              (key >= 48 && key <= 57) );
                                              });
                                              });
                                              };
                                              $('#tp0').ForceNumericOnly();
                                              $('#tp1').ForceNumericOnly();
                                              
                                              
                                              (function ($) {
                                              $.fn.formNavigation = function () {
                                              $(this).each(function () {
                                              $(this).find('input').on('keyup', function(e) {
                                              switch (e.which) {
                                              case 39:
                                              $(this).closest('td').next().find('input').focus(); break;
                                              case 37:
                                              $(this).closest('td').prev().find('input').focus(); break;
                                              case 40:
                                              $(this).closest('tr').next().children().eq($(this).closest('td').index()).find('input').focus(); break;
                                              case 38:
                                              $(this).closest('tr').prev().children().eq($(this).closest('td').index()).find('input').focus(); break;
                                              }
                                              });
                                              });
                                              };
                                              })(jQuery);
                                              $(document).ready(function () {
                                              $('#tablecalculator table').formNavigation();
                                              });
                                              jQuery('#date, #fromdate, #todate').datepicker({
                                              format: "yyyy-mm-dd",
                                              autoclose: true
                                              });
                                              jQuery( ".cross1" ).hide();
                                              jQuery( "#navbar-mobile" ).hide();
                                              jQuery( ".hamburger1" ).click(function() {
                                              jQuery( "#navbar-mobile" ).slideToggle( "slow", function() {
                                              jQuery( ".hamburger1" ).hide();
                                              jQuery( ".cross" ).show();
                                              });
                                              });
                                              jQuery( ".cross1" ).click(function() {
                                              jQuery( "#navbar-mobile" ).slideToggle( "slow", function() {
                                              jQuery( ".cross" ).hide();
                                              jQuery( ".hamburger1" ).show();
                                              });
                                              });
                                              </script>
                                              <script>
                                              function ClearAllControls() {
                                              for (i = 0; i < document.forms["star3dp"].length; i++) {
                                              field_type = document.forms["star3dp"][i].type.toLowerCase();
                                              switch (field_type) {
                                              case "text":
                                              case "password":
                                              case "textarea":
                                              case "hidden":
                                              document.forms["star3dp"][i].value = "";
                                              break;
                                              case "radio":
                                              case "checkbox":
                                              if (document.forms["star3dp"][i].checked) {
                                              document.forms["star3dp"][i].checked = false;
                                              }
                                              break;
                                              case "select-one":
                                              case "select-multi":
                                              document.forms["star3dp"][i].selectedIndex = -1;
                                              break;
                                              default:
                                              break;
                                              }
                                              }
                                              }
                                              
                                              </script>