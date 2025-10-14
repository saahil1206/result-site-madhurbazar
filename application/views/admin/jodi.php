<?php
foreach ($bazar->result() as $row)
{
$bazar_name=$row->bazar_name;
}
?>
<style>
.numinput {
text-align: left;
border-radius: 4px;
border-color: black;
margin: 0 1px 8px 1px;
padding: 5px 0px 6px 9px;
font-weight:bold;
font-size: 15px;
}
.numAmt {
width:82px;
border-radius: 4px;
border-color: black;
margin: 0 1px 8px 1px;
padding: 5px 0px 6px 9px;
font-weight:bold;
font-size: 15px;
text-align: left;
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
.all{
border-radius: 4px;
border-color: black;
padding: 1px 1px 1px 1px;
height: 40px;
font-weight:bold;
width:100px;
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
   <form method="post" action="<?php  echo base_url(); ?>Adminjodi/index">
  <div class="card-header" style="text-align:center;" >
						
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
    <span style="font-size:22px;color: #342e36;font-weight: 800;"><br><span style=" background-color:#f5f0ee;font-size:22px;color:black;">&#8377;</span>&nbsp; JODI</span></div>
      <div class="col-12">
        <hr>
       
          <div class="sing1">
            <tr>
              <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;1&nbsp;</span> </td>
              &nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
              <td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp0Amt" name="sp0Amt" class="numAmt" disabled="disabled" type="text" style="width: 72px;"></td>
              <br>
              <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
              <br>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>01</span><input autocomplete="false" id="sp_1_0" name="sp_1_0" class="numinput numbersdata" maxlength="6" type="text"style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>11</span><input autocomplete="false" id="sp_1_1" name="sp_1_1" class="numinput numbersdata" maxlength="6" type="text" style="width: 72px;" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>21</span><input autocomplete="false" id="sp_1_2" name="sp_1_2" class="numinput numbersdata" maxlength="6" type="text"style="width: 72px;" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>31</span><input autocomplete="false" id="sp_1_3" name="sp_1_3" class="numinput numbersdata" maxlength="6" type="text"style="width: 72px;" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>41</span><input autocomplete="false" id="sp_1_4" name="sp_1_4" class="numinput numbersdata" maxlength="6" type="text" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>51</span><input autocomplete="false" id="sp_1_5" name="sp_1_5" class="numinput numbersdata" maxlength="6" type="text" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>61</span><input autocomplete="false" id="sp_1_6" name="sp_1_6" class="numinput numbersdata" maxlength="6" type="text"  style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>71</span><input autocomplete="false" id="sp_1_7" name="sp_1_7" class="numinput numbersdata" maxlength="6" type="text" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>81</span><input autocomplete="false" id="sp_1_8" name="sp_1_8" class="numinput numbersdata" maxlength="6" type="text" style="width: 70px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>91</span><input autocomplete="false" id="sp_1_9" name="sp_1_9" class="numinput numbersdata" maxlength="6" type="text" style="width: 72px;"></td>
              </div>
            </tr>
          </div>
          <hr>
          <div class="sing1">
            <tr>
              <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;2&nbsp;</span> </td>
              &nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
              <td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp1Amt" name="sp1Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" style="width: 72px;"></td>
              <br>
              <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
              <br>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>02</span><input autocomplete="false" id="sp_2_0" name="sp_2_0" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>12</span><input autocomplete="false" id="sp_2_1" name="sp_2_1" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>22</span><input autocomplete="false" id="sp_2_2" name="sp_2_2" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>32</span><input autocomplete="false" id="sp_2_3" name="sp_2_3" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>42</span><input autocomplete="false" id="sp_2_4" name="sp_2_4" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>52</span><input autocomplete="false" id="sp_2_5" name="sp_2_5" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>62</span><input autocomplete="false" id="sp_2_6" name="sp_2_6" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>72</span><input autocomplete="false" id="sp_2_7" name="sp_2_7" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>82</span><input autocomplete="false" id="sp_2_8" name="sp_2_8" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>92</span><input autocomplete="false" id="sp_2_9" name="sp_2_9" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
            </tr>
          </div>
          <hr>
          <div class="sing1">
            <tr>
              <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;3&nbsp;</span> </td>
              &nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
              <td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp2Amt" name="sp2Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" style="width: 72px;"></td>
              <br>
              <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
              <br>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>03</span><input autocomplete="false" id="sp_3_0" name="sp_3_0" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>13</span><input autocomplete="false" id="sp_3_1" name="sp_3_1" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>23</span><input autocomplete="false" id="sp_3_2" name="sp_3_2" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>33</span><input autocomplete="false" id="sp_3_3" name="sp_3_3" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>43</span><input autocomplete="false" id="sp_3_4" name="sp_3_4" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>53</span><input autocomplete="false" id="sp_3_5" name="sp_3_5" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>63</span><input autocomplete="false" id="sp_3_6" name="sp_3_6" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>73</span><input autocomplete="false" id="sp_3_7" name="sp_3_7" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>83</span><input autocomplete="false" id="sp_3_8" name="sp_3_8" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>93</span><input autocomplete="false" id="sp_3_9" name="sp_3_9" class="numinput numbersdata" style="width: 72px;"></td>
              </div>
            </tr>
          </div>
          <hr>
          <div class="sing1">
            <tr>
              <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;4&nbsp;</span> </td>
              &nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
              <td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp3Amt" name="sp3Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" style="width: 72px;"></td>
              <br>
              <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
              <br>
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <td align="center" ><span>04</span><input autocomplete="false" id="sp_4_0" name="sp_4_0" class="numinput numbersdata" style="width: 72px;"></td>
              </div> <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>14</span><input autocomplete="false" id="sp_4_1" name="sp_4_1" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>24</span><input autocomplete="false" id="sp_4_2" name="sp_4_2" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>34</span><input autocomplete="false" id="sp_4_3" name="sp_4_3" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>44</span><input autocomplete="false" id="sp_4_4" name="sp_4_4" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>54</span><input autocomplete="false" id="sp_4_5" name="sp_4_5" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>64</span><input autocomplete="false" id="sp_4_6" name="sp_4_6" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>74</span><input autocomplete="false" id="sp_4_7" name="sp_4_7" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>84</span><input autocomplete="false" id="sp_4_8" name="sp_4_8" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>94</span><input autocomplete="false" id="sp_4_9" name="sp_4_9" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
          </tr>
        </div>
        <hr>
        <div class="sing1">
          <tr>
            <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;5&nbsp;</span> </td>
            &nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
            <td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp4Amt" name="sp4Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" style="width: 72px;"></td>
            <br>
            <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
            <br>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>05</span><input autocomplete="false" id="sp_5_0" name="sp_5_0" class="numinput numbersdata" style="width: 72px;"></td>
            </div> <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>15</span><input autocomplete="false" id="sp_5_1" name="sp_5_1" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>25</span><input autocomplete="false" id="sp_5_2" name="sp_5_2" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>35</span><input autocomplete="false" id="sp_5_3" name="sp_5_3" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>45</span><input autocomplete="false" id="sp_5_4" name="sp_5_4" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>55</span><input autocomplete="false" id="sp_5_5" name="sp_5_5" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>65</span><input autocomplete="false" id="sp_5_6" name="sp_5_6" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>75</span><input autocomplete="false" id="sp_5_7" name="sp_5_7" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>85</span><input autocomplete="false" id="sp_5_8" name="sp_5_8" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>95</span><input autocomplete="false" id="sp_5_9" name="sp_5_9" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
        </tr>
      </div>
      <hr>
      <div class="sing1">
        <tr>
          <tr>
            <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;6&nbsp;</span> </td>
            &nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
            <td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp5Amt" name="sp5Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" style="width: 72px;"></td>
            <br>
            <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
            <br>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>06</span><input autocomplete="false" id="sp_6_0" name="sp_6_0" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>16</span><input autocomplete="false" id="sp_6_1" name="sp_6_1" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>26</span><input autocomplete="false" id="sp_6_2" name="sp_6_2" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>36</span><input autocomplete="false" id="sp_6_3" name="sp_6_3" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>46</span><input autocomplete="false" id="sp_6_4" name="sp_6_4" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>56</span><input autocomplete="false" id="sp_6_5" name="sp_6_5" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>66</span><input autocomplete="false" id="sp_6_6" name="sp_6_6" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>76</span><input autocomplete="false" id="sp_6_7" name="sp_6_7" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>86</span><input autocomplete="false" id="sp_6_8" name="sp_6_8" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>96</span><input autocomplete="false" id="sp_6_9" name="sp_6_9" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
          </tr>
        </div>
        <hr>
        <div class="sing1">
          <tr>
            <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;7&nbsp;</span> </td>
            &nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
            <td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp6Amt" name="sp6Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" style="width: 72px;"></td>
            <br>
            <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
            <br>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
              <td align="center" ><span>07</span><input autocomplete="false" id="sp_7_0" name="sp_7_0" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>17</span><input autocomplete="false" id="sp_7_1" name="sp_7_1" class="numinput numbersdata" style="width: 72px;"></td>
            </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>27</span><input autocomplete="false" id="sp_7_2" name="sp_7_2" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>37</span><input autocomplete="false" id="sp_7_3" name="sp_7_3" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>47</span><input autocomplete="false" id="sp_7_4" name="sp_7_4" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>57</span><input autocomplete="false" id="sp_7_5" name="sp_7_5" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>67</span><input autocomplete="false" id="sp_7_6" name="sp_7_6" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>77</span><input autocomplete="false" id="sp_7_7" name="sp_7_7" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>87</span><input autocomplete="false" id="sp_7_8" name="sp_7_8" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>97</span><input autocomplete="false" id="sp_7_9" name="sp_7_9" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
        </tr>
      </div>
      <hr>
      <div class="sing1">
        <tr>
          <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;8&nbsp;</span> </td>
          &nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
          <td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp7Amt" name="sp7Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" style="width: 72px;"></td>
          <br>
          <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
          <br>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
            <td align="center" ><span>08</span><input autocomplete="false" id="sp_8_0" name="sp_8_0" class="numinput numbersdata" style="width: 72px;"></td>
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>18</span><input autocomplete="false" id="sp_8_1" name="sp_8_1" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>28</span><input autocomplete="false" id="sp_8_2" name="sp_8_2" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>38</span><input autocomplete="false" id="sp_8_3" name="sp_8_3" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>48</span><input autocomplete="false" id="sp_8_4" name="sp_8_4" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>58</span><input autocomplete="false" id="sp_8_5" name="sp_8_5" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>68</span><input autocomplete="false" id="sp_8_6" name="sp_8_6" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>78</span><input autocomplete="false" id="sp_8_7" name="sp_8_7" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>88</span><input autocomplete="false" id="sp_8_8" name="sp_8_8" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>98</span><input autocomplete="false" id="sp_8_9" name="sp_8_9" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
      </tr>
    </div>
    <hr>
    <div class="sing1">
      <tr>
        <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;9&nbsp;</span> </td>
        &nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
        <td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp8Amt" name="sp8Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" style="width: 72px;"></td>
        <br>
        <br>
        <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
        <br>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>09</span><input autocomplete="false" id="sp_9_0" name="sp_9_0" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>19</span><input autocomplete="false" id="sp_9_1" name="sp_9_1" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>29</span><input autocomplete="false" id="sp_9_2" name="sp_9_2" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>39</span><input autocomplete="false" id="sp_9_3" name="sp_9_3" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>49</span><input autocomplete="false" id="sp_9_4" name="sp_9_4" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>59</span><input autocomplete="false" id="sp_9_5" name="sp_9_5" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>69</span><input autocomplete="false" id="sp_9_6" name="sp_9_6" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>79</span><input autocomplete="false" id="sp_9_7" name="sp_9_7" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>89</span><input autocomplete="false" id="sp_9_8" name="sp_9_8" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>99</span><input autocomplete="false" id="sp_9_9" name="sp_9_9" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
      </tr>
    </div>
    <hr>
    <div class="sing1">
      <tr>
        <td align="center" style="padding:120px;"><span type="button" href="#"  style="background-color: #ff9900;font-size: 20px;" > &nbsp;0&nbsp;</span> </td>
        &nbsp; <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8680;</span>
        <td align="center"> <span type="button" href="#" style=" background-color: #eb0e24;color:white;width: 60px;font-size: 18px;"> Total </span><input id="sp9Amt" name="sp9Amt" class="numAmt" disabled="disabled" style="text-align:center;" type="text" style="width: 72px;"></td>
        <br>
        <br>
        <span style=" background-color:#f5f0ee;font-size:30px;color:black;">&#8681;</span>
        <br>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>00</span><input autocomplete="false" id="sp_0_0" name="sp_0_0" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>10</span><input autocomplete="false" id="sp_0_1" name="sp_0_1" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>20</span><input autocomplete="false" id="sp_0_2" name="sp_0_2" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>30</span><input autocomplete="false" id="sp_0_3" name="sp_0_3" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>40</span><input autocomplete="false" id="sp_0_4" name="sp_0_4" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>50</span><input autocomplete="false" id="sp_0_5" name="sp_0_5" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>60</span><input autocomplete="false" id="sp_0_6" name="sp_0_6" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>70</span><input autocomplete="false" id="sp_0_7" name="sp_0_7" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>80</span><input autocomplete="false" id="sp_0_8" name="sp_0_8" class="numinput numbersdata" style="width: 72px;"></td>
        </div>
        <div class="btn-group btn-group-lg" role="group" aria-label="First group">
          <td align="center" ><span>90</span><input autocomplete="false" id="sp_0_9" name="sp_0_9" class="numinput numbersdata" style="width: 72px;"></td>
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
          <!-- <td></td>&nbsp;&nbsp;&nbsp;  <span style="font-size:25px;color:black;background-color: #f5f0ee;">&#8680;</span> -->
          <input style="width:110px" id="totalAmt" name="totalAmt" class="numAmt" readonly="true" type="hidden">
        </div>
        <div class="row justify-content-center gutters">
          <td><label style="color:#342e36; font-weight:bold;font-size:18px;text-transform: uppercase;padding-top: 8px;"> Total Points </label></td>&nbsp;<span style="font-size:25px;background-color: #f5f0ee;color:#342e36;">&#8680;</span> &nbsp;<span style ="font-size: 20px;font-weight:900;text-decoration: underline;color:#ff8c1a;background-color: #f5f0ee;" id="joditotalAmt"></span>
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
var pattiIndexes = [1,2,3,4,5,6,7,8,9,10];
jQuery.each(pattiIndexes, function(colIndex, n) {
jQuery('#sp_' + rowIndex + '_' + colIndex).val(jQuery('#all_box').val());
});
});
doCalculations();
});
/* purchase column script */
jQuery('.column_box').on('keyup', function(){
var idSplit = jQuery(this).attr('id').split('_');
var pattiIndexes = [1,2,3,4,5,6,7,8,9,10];
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
var sp0Total = Number($('#sp_1_0').val()) + Number($('#sp_1_1').val()) + Number($('#sp_1_2').val()) + Number($('#sp_1_3').val()) + Number($('#sp_1_4').val()) + Number($('#sp_1_5').val()) + Number($('#sp_1_6').val()) + Number($('#sp_1_7').val()) + Number($('#sp_1_8').val()) + Number($('#sp_1_9').val());
$('#sp0Amt').val(Number(sp0Total));
var sp1Total = Number($('#sp_2_0').val()) + Number($('#sp_2_1').val()) + Number($('#sp_2_2').val()) + Number($('#sp_2_3').val()) + Number($('#sp_2_4').val()) + Number($('#sp_2_5').val()) + Number($('#sp_2_6').val()) + Number($('#sp_2_7').val()) + Number($('#sp_2_8').val()) + Number($('#sp_2_9').val());
$('#sp1Amt').val(Number(sp1Total));
var sp2Total = Number($('#sp_3_0').val()) + Number($('#sp_3_1').val()) + Number($('#sp_3_2').val()) + Number($('#sp_3_3').val()) + Number($('#sp_3_4').val()) + Number($('#sp_3_5').val()) + Number($('#sp_3_6').val()) + Number($('#sp_3_7').val()) + Number($('#sp_3_8').val()) + Number($('#sp_3_9').val());
$('#sp2Amt').val(Number(sp2Total));
var sp3Total = Number($('#sp_4_0').val()) + Number($('#sp_4_1').val()) + Number($('#sp_4_2').val()) + Number($('#sp_4_3').val()) + Number($('#sp_4_4').val()) + Number($('#sp_4_5').val()) + Number($('#sp_4_6').val()) + Number($('#sp_4_7').val()) + Number($('#sp_4_8').val()) + Number($('#sp_4_9').val());
$('#sp3Amt').val(Number(sp3Total));
var sp4Total = Number($('#sp_5_0').val()) + Number($('#sp_5_1').val()) + Number($('#sp_5_2').val()) + Number($('#sp_5_3').val()) + Number($('#sp_5_4').val()) + Number($('#sp_5_5').val()) + Number($('#sp_5_6').val()) + Number($('#sp_5_7').val()) + Number($('#sp_5_8').val()) + Number($('#sp_5_9').val());
$('#sp4Amt').val(Number(sp4Total));
var sp5Total = Number($('#sp_6_0').val()) + Number($('#sp_6_1').val()) + Number($('#sp_6_2').val()) + Number($('#sp_6_3').val()) + Number($('#sp_6_4').val()) + Number($('#sp_6_5').val()) + Number($('#sp_6_6').val()) + Number($('#sp_6_7').val()) + Number($('#sp_6_8').val()) + Number($('#sp_6_9').val());
$('#sp5Amt').val(Number(sp5Total));
var sp6Total = Number($('#sp_7_0').val()) + Number($('#sp_7_1').val()) + Number($('#sp_7_2').val()) + Number($('#sp_7_3').val()) + Number($('#sp_7_4').val()) + Number($('#sp_7_5').val()) + Number($('#sp_7_6').val()) + Number($('#sp_7_7').val()) + Number($('#sp_7_8').val()) + Number($('#sp_7_9').val());
$('#sp6Amt').val(Number(sp6Total));
var sp7Total = Number($('#sp_8_0').val()) + Number($('#sp_8_1').val()) + Number($('#sp_8_2').val()) + Number($('#sp_8_3').val()) + Number($('#sp_8_4').val()) + Number($('#sp_8_5').val()) + Number($('#sp_8_6').val()) + Number($('#sp_8_7').val()) + Number($('#sp_8_8').val()) + Number($('#sp_8_9').val());
$('#sp7Amt').val(Number(sp7Total));
var sp8Total = Number($('#sp_9_0').val()) + Number($('#sp_9_1').val()) + Number($('#sp_9_2').val()) + Number($('#sp_9_3').val()) + Number($('#sp_9_4').val()) + Number($('#sp_9_5').val()) + Number($('#sp_9_6').val()) + Number($('#sp_9_7').val()) + Number($('#sp_9_8').val()) + Number($('#sp_9_9').val());
$('#sp8Amt').val(Number(sp8Total));
var sp9Total = Number($('#sp_0_0').val()) + Number($('#sp_0_1').val()) + Number($('#sp_0_2').val()) + Number($('#sp_0_3').val()) + Number($('#sp_0_4').val()) + Number($('#sp_0_5').val()) + Number($('#sp_0_6').val()) + Number($('#sp_0_7').val()) + Number($('#sp_0_8').val()) + Number($('#sp_0_9').val());
$('#sp9Amt').val(Number(sp9Total));
$('#totalAmt').val(Number($('#sp0Amt').val()) + Number($('#sp1Amt').val()) + Number($('#sp2Amt').val()) + Number($('#sp3Amt').val()) + Number($('#sp4Amt').val()) + Number($('#sp5Amt').val()) + Number($('#sp6Amt').val()) + Number($('#sp7Amt').val()) + Number($('#sp8Amt').val()) + Number($('#sp9Amt').val())  );
$('#joditotalAmt').html(Number($('#sp0Amt').val()) + Number($('#sp1Amt').val()) + Number($('#sp2Amt').val()) + Number($('#sp3Amt').val()) + Number($('#sp4Amt').val()) + Number($('#sp5Amt').val()) + Number($('#sp6Amt').val()) + Number($('#sp7Amt').val()) + Number($('#sp8Amt').val()) + Number($('#sp9Amt').val())  );

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