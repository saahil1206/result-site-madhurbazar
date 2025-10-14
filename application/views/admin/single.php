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
  <div class="card-header" style="text-align:center;" >
		  <form method="POST" action="<?php echo base_url();?>Adminsingle/index">				
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
    <span style="font-size:22px;color: #342e36;font-weight: 800;"><br><span style=" background-color:#f5f0ee;font-size:22px;color:black;">&#8377;</span>&nbsp; SINGLE - PANA</span></div>
    <div class="row justify-content-center gutters">
      <div class="col-12">
        <hr>
      
          <div class="sing1">
            <tr>
              <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;1&nbsp;</span> </td>
              &nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
              <td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp0Amt" name="sp0Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" class="nc-ch single_patti_box"></td>
              <br>
              <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
              <br>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
                <td align="center" ><span>128</span><input autocomplete="false" id="sp_1_0" name="sp_1_0" class="numinput numbersdata" maxlength="9" type="text" class="nc-ch single_patti_box"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
                <td align="center" ><span>290</span><input
                autocomplete="false"
                id="sp_1_1" name="sp_1_1" class="numinput numbersdata" maxlength="6"
              type="text" class="nc-ch single_patti_box"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
              <td align="center" ><span>579</span><input
              autocomplete="false"
              id="sp_1_2" name="sp_1_2" class="numinput numbersdata" maxlength="6"
            type="text"class="nc-ch single_patti_box"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
            <td align="center" ><span>137</span><input
            autocomplete="false"
            id="sp_1_3" name="sp_1_3" class="numinput numbersdata" maxlength="6"
          type="text" class="nc-ch single_patti_box"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
          <td align="center" ><span>380</span><input
          autocomplete="false"
          id="sp_1_4" name="sp_1_4" class="numinput numbersdata" maxlength="6"
        type="text"class="nc-ch single_patti_box"></td>
      </div>
      <div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
        <td align="center" ><span>678</span><input
        autocomplete="false"
        id="sp_1_5" name="sp_1_5" class="numinput numbersdata" maxlength="6"
      type="text"class="nc-ch single_patti_box"></td>
    </div>
    <div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
      <td align="center" ><span>146</span><input
      autocomplete="false"
      id="sp_1_6" name="sp_1_6" class="numinput numbersdata" maxlength="6"
    type="text"class="nc-ch single_patti_box"></td>
  </div>
  <div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
    <td align="center" ><span>470</span><input
    autocomplete="false"
    id="sp_1_7" name="sp_1_7" class="numinput numbersdata" maxlength="6"
  type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
  <td align="center" ><span>236</span><input
  autocomplete="false"
  id="sp_1_8" name="sp_1_8" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>489</span><input
autocomplete="false"
id="sp_1_9" name="sp_1_9" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>245</span><input
autocomplete="false"
id="sp_1_10" name="sp_1_10" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>560</span><input
autocomplete="false"
id="sp_1_11" name="sp_1_11" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
</tr>
</div>
<hr>
<div class="sing1">
<tr>
<td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;2&nbsp;</span> </td>
&nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
<td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp1Amt" name="sp1Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" class="nc-ch single_patti_box"></td>

<br>
<span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
<br>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>129</span><input autocomplete="false" id="sp_2_0" name="sp_2_0" class="numinput numbersdata" maxlength="6" type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>246</span><input
autocomplete="false"
id="sp_2_1" name="sp_2_1" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>589</span><input
input
autocomplete="false"
id="sp_2_2" name="sp_2_2" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>138</span><input
autocomplete="false"
id="sp_2_3" name="sp_2_3" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>345</span><input
autocomplete="false"
id="sp_2_4" name="sp_2_4" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>679</span><input
autocomplete="false"
id="sp_2_5" name="sp_2_5" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>147</span><input
autocomplete="false"
id="sp_2_6" name="sp_2_6" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>390</span><input
autocomplete="false"
id="sp_2_7" name="sp_2_7" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>156</span><input
autocomplete="false"
id="sp_2_8" name="sp_2_8" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>480</span><input
autocomplete="false"
id="sp_2_9" name="sp_2_9" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>237</span><input
autocomplete="false"
id="sp_2_10" name="sp_2_10" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>570</span><input
autocomplete="false"
id="sp_2_11" name="sp_2_11" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>

</tr>
</div>
<hr>
<div class="sing1">
<tr>
<td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;3&nbsp;</span> </td>
&nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
<td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp2Amt" name="sp2Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" class="nc-ch single_patti_box"></td>

<br>
<span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
<br>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>120</span><input autocomplete="false" id="sp_3_0" name="sp_3_0" class="numinput numbersdata" maxlength="6" type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>247</span><input
autocomplete="false"
id="sp_3_1" name="sp_3_1" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>670</span><input
autocomplete="false"
id="sp_3_2" name="sp_3_2" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>139</span><input
autocomplete="false"
id="sp_3_3" name="sp_3_3" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>256</span><input
autocomplete="false"
id="sp_3_4" name="sp_3_4" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>689</span><input
autocomplete="false"
id="sp_3_5" name="sp_3_5" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>148</span><input
autocomplete="false"
id="sp_3_6" name="sp_3_6" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>346</span><input
autocomplete="false"
id="sp_3_7" name="sp_3_7" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>157</span><input
autocomplete="false"
id="sp_3_8" name="sp_3_8" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>490</span><input
autocomplete="false"
id="sp_3_9" name="sp_3_9" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>238</span><input
autocomplete="false"
id="sp_3_10" name="sp_3_10" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>580</span><input
autocomplete="false"
id="sp_3_11" name="sp_3_11" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>

</tr>
</div>
<hr>
<div class="sing1">
<tr>
<td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;4&nbsp;</span> </td>
&nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
<td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp3Amt" name="sp3Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" class="nc-ch single_patti_box"></td>

<br>
<span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
<br>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>130</span><input autocomplete="false" id="sp_4_0" name="sp_4_0" class="numinput numbersdata" maxlength="6" type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>248</span><input
autocomplete="false"
id="sp_4_1" name="sp_4_1" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>680</span><input
autocomplete="false"
id="sp_4_2" name="sp_4_2" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>149</span><input
autocomplete="false"
id="sp_4_3" name="sp_4_3" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>257</span><input
autocomplete="false"
id="sp_4_4" name="sp_4_4" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>789</span><input
autocomplete="false"
id="sp_4_5" name="sp_4_5" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>158</span><input
autocomplete="false"
id="sp_4_6" name="sp_4_6" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>347</span><input
autocomplete="false"
id="sp_4_7" name="sp_4_7" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>167</span><input
autocomplete="false"
id="sp_4_8" name="sp_4_8" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>356</span><input
autocomplete="false"
id="sp_4_9" name="sp_4_9" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>239</span><input
autocomplete="false"
id="sp_4_10" name="sp_4_10" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>590</span><input
autocomplete="false"
id="sp_4_11" name="sp_4_11" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>

</tr>
</div>

<hr>
<div class="sing1">
<tr>
<td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;5&nbsp;</span> </td>
&nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
<td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp4Amt" name="sp4Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" class="nc-ch single_patti_box"></td>

<br>
<span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
<br>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>140</span><input autocomplete="false" id="sp_5_0" name="sp_5_0" class="numinput numbersdata" maxlength="6" type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>258</span><input
autocomplete="false"
id="sp_5_1" name="sp_5_1" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>690</span><input
autocomplete="false"
id="sp_5_2" name="sp_5_2" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>159</span><input
autocomplete="false"
id="sp_5_3" name="sp_5_3" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>267</span><input
autocomplete="false"
id="sp_5_4" name="sp_5_4" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>780</span><input
autocomplete="false"
id="sp_5_5" name="sp_5_5" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>168</span><input
autocomplete="false"
id="sp_5_6" name="sp_5_6" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>348</span><input
autocomplete="false"
id="sp_5_7" name="sp_5_7" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>230</span><input
autocomplete="false"
id="sp_5_8" name="sp_5_8" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>357</span><input
autocomplete="false"
id="sp_5_9" name="sp_5_9" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>249</span><input
autocomplete="false"
id="sp_5_10" name="sp_5_10" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>456</span><input
autocomplete="false"
id="sp_5_11" name="sp_5_11" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>

</tr>
</div>

<hr>
<div class="sing1">
<tr>
<td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;6&nbsp;</span> </td>
&nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
<td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp5Amt" name="sp5Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" class="nc-ch single_patti_box"></td>

<br>
<span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
<br>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>123</span><input autocomplete="false" id="sp_6_0" name="sp_6_0" class="numinput numbersdata" maxlength="6" type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>259</span><input
autocomplete="false"
id="sp_6_1" name="sp_6_1" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>457</span><input
autocomplete="false"
id="sp_6_2" name="sp_6_2" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>150</span><input
autocomplete="false"
id="sp_6_3" name="sp_6_3" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>268</span><input
autocomplete="false"
id="sp_6_4" name="sp_6_4" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>790</span><input
autocomplete="false"
id="sp_6_5" name="sp_6_5" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>169</span><input
autocomplete="false"
id="sp_6_6" name="sp_6_6" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>349</span><input
autocomplete="false"
id="sp_6_7" name="sp_6_7" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>178</span><input
autocomplete="false"
id="sp_6_8" name="sp_6_8" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>358</span><input
autocomplete="false"
id="sp_6_9" name="sp_6_9" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>240</span><input
autocomplete="false"
id="sp_6_10" name="sp_6_10" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>367</span><input
autocomplete="false"
id="sp_6_11" name="sp_6_11" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>

</tr>
</div>
<hr>
<div class="sing1">
<tr>
<td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;7&nbsp;</span> </td>
&nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
<td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp6Amt" name="sp6Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" class="nc-ch single_patti_box"></td>

<br>
<span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
<br>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>124</span><input autocomplete="false" id="sp_7_0" name="sp_7_0" class="numinput numbersdata" maxlength="6" type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>278</span><input
autocomplete="false"
id="sp_7_1" name="sp_7_1" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>467</span><input
autocomplete="false"
id="sp_7_2" name="sp_7_2" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>160</span><input
autocomplete="false"
id="sp_7_3" name="sp_7_3" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>340</span><input
autocomplete="false"
id="sp_7_4" name="sp_7_4" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>890</span><input
autocomplete="false"
id="sp_7_5" name="sp_7_5" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>179</span><input
autocomplete="false"
id="sp_7_6" name="sp_7_6" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>359</span><input
autocomplete="false"
id="sp_7_7" name="sp_7_7" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>250</span><input
autocomplete="false"
id="sp_7_8" name="sp_7_8" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>368</span><input
autocomplete="false"
id="sp_7_9" name="sp_7_9" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>269</span><input
autocomplete="false"
id="sp_7_10" name="sp_7_10" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>458</span><input
autocomplete="false"
id="sp_7_11" name="sp_7_11" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>

</tr>
</div>
<hr> <div class="sing1">
<tr>
<td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;8&nbsp;</span> </td>
&nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
<td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp7Amt" name="sp7Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text"></td>

<br>
<span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
<br>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>125</span><input autocomplete="false" id="sp_8_0" name="sp_8_0" class="numinput numbersdata" maxlength="6" type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>279</span><input
autocomplete="false"
id="sp_8_1" name="sp_8_1" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>468</span><input
autocomplete="false"
id="sp_8_2" name="sp_8_2" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>134</span><input
autocomplete="false"
id="sp_8_3" name="sp_8_3" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>350</span><input
autocomplete="false"
id="sp_8_4" name="sp_8_4" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>567</span><input
autocomplete="false"
id="sp_8_5" name="sp_8_5" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>170</span><input
autocomplete="false"
id="sp_8_6" name="sp_8_6" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>369</span><input
autocomplete="false"
id="sp_8_7" name="sp_8_7" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>189</span><input
autocomplete="false"
id="sp_8_8" name="sp_8_8" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>378</span><input
autocomplete="false"
id="sp_8_9" name="sp_8_9" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>260</span><input
autocomplete="false"
id="sp_8_10" name="sp_8_10" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>459</span><input
autocomplete="false"
id="sp_8_11" name="sp_8_11" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>

</tr>
</div>
<hr>
<div class="sing1">
<tr>
<td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;9&nbsp;</span> </td>
&nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
<td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp8Amt" name="sp8Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" class="nc-ch single_patti_box"></td>

<br>
<span style=" background-color:#f5f0ee;font-size:30px;color:black;padding-bottom: : 15px;">&#8681;</span>
<br>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>126</span><input autocomplete="false" id="sp_9_0" name="sp_9_0" class="numinput numbersdata" maxlength="6" type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>289</span><input
autocomplete="false"
id="sp_9_1" name="sp_9_1" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>478</span><input
autocomplete="false"
id="sp_9_2" name="sp_9_2" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>135</span><input
autocomplete="false"
id="sp_9_3" name="sp_9_3" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>360</span><input
autocomplete="false"
id="sp_9_4" name="sp_9_4" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>568</span><input
autocomplete="false"
id="sp_9_5" name="sp_9_5" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>180</span><input
autocomplete="false"
id="sp_9_6" name="sp_9_6" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>379</span><input
autocomplete="false"
id="sp_9_7" name="sp_9_7" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>270</span><input
autocomplete="false"
id="sp_9_8" name="sp_9_8" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>450</span><input
autocomplete="false"
id="sp_9_9" name="sp_9_9" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>234</span><input
autocomplete="false"
id="sp_9_10" name="sp_9_10" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>469</span><input
autocomplete="false"
id="sp_9_11" name="sp_9_11" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>

</tr>
</div>
<hr>
<div class="sing1">
<tr>
<td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;0&nbsp;</span> </td>

&nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
<td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp9Amt" name="sp9Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" class="nc-ch single_patti_box"></td>
<br>
<span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
<br>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>127</span><input autocomplete="false" id="sp_0_0" name="sp_0_0" class="numinput numbersdata" maxlength="6" type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>235</span><input
autocomplete="false"
id="sp_0_1" name="sp_0_1" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>569</span><input
autocomplete="false"
id="sp_0_2" name="sp_0_2" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>136</span><input
autocomplete="false"
id="sp_0_3" name="sp_0_3" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>370</span><input
autocomplete="false"
id="sp_0_4" name="sp_0_4" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>578</span><input
autocomplete="false"
id="sp_0_5" name="sp_0_5" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>145</span><input
autocomplete="false"
id="sp_0_6" name="sp_0_6" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>389</span><input
autocomplete="false"
id="sp_0_7" name="sp_0_7" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>190</span><input
autocomplete="false"
id="sp_0_8" name="sp_0_8" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>460</span><input
autocomplete="false"
id="sp_0_9" name="sp_0_9" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>280</span><input
autocomplete="false"
id="sp_0_10" name="sp_0_10" class="numinput numbersdata" maxlength="6"
type="text"class="nc-ch single_patti_box"></td>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="First group" style="margin-bottom: 7px;">
<td align="center" ><span>479</span><input
autocomplete="false"
id="sp_0_11" name="sp_0_11" class="numinput numbersdata" maxlength="6"
type="text" class="nc-ch single_patti_box"></td>
</div>

</tr>

<hr>
<tr height="5px">
<td ><input type="hidden" value="<?php  echo $gameid; ?>" name="bazar"></td>
<td colspan="1"><input type="hidden"  value="<?php  echo $bazarType; ?>" name="bazar_cat"></td>
<td ><!--<input type="hidden" value="<?php  echo $_SESSION['userid']; ?>" name="client"> --></td>

<td colspan="3" align="right" class="all-bazar-title">
<label style="color:#342e36; font-weight:bold;font-size:16px;text-transform: uppercase;margin-top: 15px;">All numbers :</label>
<input id="all_box" style="width:110px;" name="all_box" type="text"  class="numinput numbersdata" autocomplete="false" maxlength="6"> <label> </label>
</td><br><hr>
<div class="row justify-content-center gutters">
<td>
<input style="width:110px" id="totalAmt" name="totalAmt" class="numAmt" readonly="true" type="hidden"></td>
</div>
<div class="row justify-content-center gutters">
<td><label style="color:#342e36; font-weight:bold;font-size:18px;text-transform: uppercase;padding-top: 8px;"> Total Points </label></td>&nbsp;<span style="font-size:25px;background-color: #f5f0ee;color:#342e36;">&#8680;</span> &nbsp;<span style ="font-size: 20px;font-weight:900;text-decoration: underline;color:#ff8c1a;background-color: #f5f0ee;" id="singaltotalAmt" ></span>
</tr>
</div> <br> <br>
<div class="row justify-content-center gutters">
<td colspan="1" style=" font-size:14px" align="right">
<button  onclick="ClearAllControls()"  value="Clear" type="reset"  class="btn btn-danger btn-lg" style="font-size: 15px;float: right; margin-right: 20px;"><i class="icon-reply"></i> &nbsp;Clear</button>
<button  id="submit" name="submit" type="submit" class="btn btn-warning btn-lg" style="font-size: 15px;float: right; margin-right: 20px;"><i class="icon-gift" align=center;></i>  &nbsp;Buy</button><br><br>
</td>
</div>
</tr>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

</script>
<script type="text/javascript">
var categoryInfo = JSON.parse('{"id":1,"title":"BAZAR-KHATRI","opentime":"03:10 PM","closetime":"06:40 PM","weekdays":"7","bgcolor":"","status":"1","created_at":"2016-12-03 01:44:04","updated_at":"2017-04-16 15:04:35","single_win":"90.00","single_rate":"10.00","sp_win":"150.00","sp_rate":"1.00","dp_win":"300.00","dp_rate":"1.00","tp_win":"1000.00","tp_rate":"1.00","category_type":"opentoclose"}');
jQuery(document).ready( function () {
jQuery('.dropdown.type a').on('click', function() {
jQuery('#type').val(jQuery(this).attr('data_value'));
jQuery('.dropdown.type').find('.dropdown-toggle').html(jQuery(this).text() + ' <span class="caret"></span>');
});
/* purchase all box script */
jQuery('#all_box').on('keyup', function() {
var pattiRows = [1,2,3,4,5,6,7,8,9,0];
jQuery.each(pattiRows, function(n, rowIndex) {
jQuery('#sp_col_'+rowIndex).val(jQuery('#all_box').val());
var pattiIndexes = [1,2,3,4,5,6,7,8,9,10, 11, 12];
jQuery.each(pattiIndexes, function(colIndex, n) {
jQuery('#sp_' + rowIndex + '_' + colIndex).val(jQuery('#all_box').val());
});
});
doCalculations();
});
/* purchase column script */
jQuery('.column_box').on('keyup', function(){
var idSplit = jQuery(this).attr('id').split('_');
var pattiIndexes = [1,2,3,4,5,6,7,8,9,10, 11, 12];
jQuery.each(pattiIndexes, function(m, rowIndex) {
jQuery('#sp_' + idSplit[2] + '_' + m).val(jQuery('#sp_col_'+idSplit[2]).val());
});
doCalculations();
});

jQuery('.row_box').on('keyup', function(){
var idSplit = jQuery(this).attr('id').split('_');
//alert(idSplit);
var pattiIndexes = [1,2,3,4,5,6,7,8,9,0];
jQuery.each(pattiIndexes, function(m, rowIndex) {
//alert(m);
jQuery('#sp_' + m + '_' + idSplit[2]).val(jQuery('#sp_row_'+idSplit[2]).val());
});
doCalculations();
});
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
jQuery('#star3sp').submit();
}
var V = 'curslot';
function ClearAllControls()
{
for (i = 0; i < document.forms["star3sp"].length; i++)
{
field_type = document.forms["star3sp"][i].type.toLowerCase();
switch (field_type)
{
case "text":
case "password":
case "textarea":
case "hidden":
document.forms["star3sp"][i].value = "";
break;
case "radio":
case "checkbox":
if (document.forms["star3sp"][i].checked)
{
document.forms["star3sp"][i].checked = false;
}
break;
case "select-one":
case "select-multi":
document.forms["star3sp"][i].selectedIndex = -1;
break;
default:
break;
}
}
}
$('#single0').keyup(function() { doCalculations();  });
$('#single1').keyup(function() { doCalculations();  });
$('#single2').keyup(function() { doCalculations();  });
$('#single3').keyup(function() { doCalculations();  });
$('#single4').keyup(function() { doCalculations();  });
$('#single5').keyup(function() { doCalculations();  });
$('#single6').keyup(function() { doCalculations();  });
$('#single7').keyup(function() { doCalculations();  });
$('#single8').keyup(function() { doCalculations();  });
$('.numinput').keyup(function() { doCalculations();  });
$('#sp').keyup(function() {
checkCount('#sp'); doCalculations();
});
//$('#sp').keydown(function() { checkCount('#sp'); });
function checkCount(bx) {
var cnt = 0;
}
function doCalculations()
{

var sp0Total = Number($('#sp_1_0').val()) + Number($('#sp_1_1').val()) + Number($('#sp_1_2').val()) + Number($('#sp_1_3').val()) + Number($('#sp_1_4').val()) + Number($('#sp_1_5').val()) + Number($('#sp_1_6').val()) + Number($('#sp_1_7').val()) + Number($('#sp_1_8').val()) + Number($('#sp_1_9').val())+ Number($('#sp_1_10').val())+ Number($('#sp_1_11').val());
$('#sp0Amt').val(Number(sp0Total));
var sp1Total = Number($('#sp_2_0').val()) + Number($('#sp_2_1').val()) + Number($('#sp_2_2').val()) + Number($('#sp_2_3').val()) + Number($('#sp_2_4').val()) + Number($('#sp_2_5').val()) + Number($('#sp_2_6').val()) + Number($('#sp_2_7').val()) + Number($('#sp_2_8').val()) + Number($('#sp_2_9').val())+ Number($('#sp_2_10').val())+ Number($('#sp_2_11').val());
$('#sp1Amt').val(Number(sp1Total));
var sp2Total = Number($('#sp_3_0').val()) + Number($('#sp_3_1').val()) + Number($('#sp_3_2').val()) + Number($('#sp_3_3').val()) + Number($('#sp_3_4').val()) + Number($('#sp_3_5').val()) + Number($('#sp_3_6').val()) + Number($('#sp_3_7').val()) + Number($('#sp_3_8').val()) + Number($('#sp_3_9').val())+ Number($('#sp_3_10').val())+ Number($('#sp_3_11').val());
$('#sp2Amt').val(Number(sp2Total));
var sp3Total = Number($('#sp_4_0').val()) + Number($('#sp_4_1').val()) + Number($('#sp_4_2').val()) + Number($('#sp_4_3').val()) + Number($('#sp_4_4').val()) + Number($('#sp_4_5').val()) + Number($('#sp_4_6').val()) + Number($('#sp_4_7').val()) + Number($('#sp_4_8').val()) + Number($('#sp_4_9').val())+ Number($('#sp_4_10').val())+ Number($('#sp_4_11').val());
$('#sp3Amt').val(Number(sp3Total));
var sp4Total = Number($('#sp_5_0').val()) + Number($('#sp_5_1').val()) + Number($('#sp_5_2').val()) + Number($('#sp_5_3').val()) + Number($('#sp_5_4').val()) + Number($('#sp_5_5').val()) + Number($('#sp_5_6').val()) + Number($('#sp_5_7').val()) + Number($('#sp_5_8').val()) + Number($('#sp_5_9').val())+ Number($('#sp_5_10').val())+ Number($('#sp_5_11').val());
$('#sp4Amt').val(Number(sp4Total));
var sp5Total = Number($('#sp_6_0').val()) + Number($('#sp_6_1').val()) + Number($('#sp_6_2').val()) + Number($('#sp_6_3').val()) + Number($('#sp_6_4').val()) + Number($('#sp_6_5').val()) + Number($('#sp_6_6').val()) + Number($('#sp_6_7').val()) + Number($('#sp_6_8').val()) + Number($('#sp_6_9').val())+ Number($('#sp_6_10').val())+ Number($('#sp_6_11').val());
$('#sp5Amt').val(Number(sp5Total));
var sp6Total = Number($('#sp_7_0').val()) + Number($('#sp_7_1').val()) + Number($('#sp_7_2').val()) + Number($('#sp_7_3').val()) + Number($('#sp_7_4').val()) + Number($('#sp_7_5').val()) + Number($('#sp_7_6').val()) + Number($('#sp_7_7').val()) + Number($('#sp_7_8').val()) + Number($('#sp_7_9').val())+ Number($('#sp_7_10').val())+ Number($('#sp_7_11').val());
$('#sp6Amt').val(Number(sp6Total));
var sp7Total= Number($('#sp_8_0').val()) + Number($('#sp_8_1').val()) + Number($('#sp_8_2').val()) + Number($('#sp_8_3').val()) + Number($('#sp_8_4').val()) + Number($('#sp_8_5').val()) + Number($('#sp_8_6').val()) + Number($('#sp_8_7').val()) + Number($('#sp_8_8').val()) + Number($('#sp_8_9').val())+ Number($('#sp_8_10').val())+ Number($('#sp_8_11').val());
$('#sp7Amt').val(Number(sp7Total));
var sp8Total = Number($('#sp_9_0').val()) + Number($('#sp_9_1').val()) + Number($('#sp_9_2').val()) + Number($('#sp_9_3').val()) + Number($('#sp_9_4').val()) + Number($('#sp_9_5').val()) + Number($('#sp_9_6').val()) + Number($('#sp_9_7').val()) + Number($('#sp_9_8').val()) + Number($('#sp_9_9').val())+ Number($('#sp_9_10').val())+ Number($('#sp_9_11').val());
$('#sp8Amt').val(Number(sp8Total));
var sp9Total = Number($('#sp_0_0').val()) + Number($('#sp_0_1').val()) + Number($('#sp_0_2').val()) + Number($('#sp_0_3').val()) + Number($('#sp_0_4').val()) + Number($('#sp_0_5').val()) + Number($('#sp_0_6').val()) + Number($('#sp_0_7').val()) + Number($('#sp_0_8').val()) + Number($('#sp_0_9').val())+ Number($('#sp_0_10').val())+ Number($('#sp_0_11').val());
$('#sp9Amt').val(Number(sp9Total));

$('#totalAmt').val(Number($('#sp0Amt').val()) + Number($('#sp1Amt').val()) + Number($('#sp2Amt').val()) + Number($('#sp3Amt').val()) + Number($('#sp4Amt').val()) + Number($('#sp5Amt').val()) + Number($('#sp6Amt').val()) + Number($('#sp7Amt').val()) + Number($('#sp8Amt').val()) + Number($('#sp9Amt').val()) );

$('#singaltotalAmt').html(Number($('#sp0Amt').val()) + Number($('#sp1Amt').val()) + Number($('#sp2Amt').val()) + Number($('#sp3Amt').val()) + Number($('#sp4Amt').val()) + Number($('#sp5Amt').val()) + Number($('#sp6Amt').val()) + Number($('#sp7Amt').val()) + Number($('#sp8Amt').val()) + Number($('#sp9Amt').val()) );

}
jQuery.fn.ForceNumericOnly =
function()
{
return this.each(function()
{
$(this).keypress(function(e)
{
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
$('#single0').ForceNumericOnly();
$('#single1').ForceNumericOnly();
$('#single2').ForceNumericOnly();
$('#single3').ForceNumericOnly();
$('#single4').ForceNumericOnly();
$('#single5').ForceNumericOnly();
$('#single6').ForceNumericOnly();
$('#single7').ForceNumericOnly();
$('#single8').ForceNumericOnly();
$('#single9').ForceNumericOnly();
$('#sp').ForceNumericOnly();
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