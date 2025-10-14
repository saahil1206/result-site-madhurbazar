<!doctype html>
<html>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>sattaa-matka</title>
        <link href="<?php echo base_url('assets3/css/font-awesome.css');?>" type="text/css" rel="stylesheet">
        <link href="<?php echo base_url('assets3/css/bootstrap.css');?>" type="text/css" rel="stylesheet">
        <link href="<?php echo base_url('assets3/css/fb_stylece29.css?ver=1588145676');?>" type="text/css" rel="stylesheet">



        <script src="<?php echo base_url('assets3/../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets3/../ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');?>"></script>
        <script src="site_js/validate_userce29.js?ver=1588145676"></script>
        <style>
        body{
        background: url("<?php echo base_url('assets3/images/casino.png');?>") no-repeat 50%;
        background-size: cover;
        }
        .arcticmodal-container {
        }
        .arcticmodal-container {
        overflow: auto;
        margin: 0;
        padding: 0;
        border: 0;
        border-collapse: collapse;
        }
        .arcticmodal-container_i {
        height: 100%;
        margin: 0 auto;
        }
        .arcticmodal-container_i2 {
        padding: 0px 0 0!important;
        margin: 0;
        }
        .arcticmodal-container_i2 {
        padding: 24px;
        margin: 0;
        border: 0;
        vertical-align: middle;
        }
        .c-registration {
        padding: 1.375em;
        border-radius: 5px;
        background:;
        color: #fff;
        border:;
        }
        .c-registration_is-popup {
        position: relative;
        }
        .c-registration__content {
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        }
        .c-registration__title {
        margin: 0 0 .90909em;
        text-transform: uppercase;
        font-size: 1.375em;
        font-weight: 700;
        line-height: 1.2;
        color: #1f595e;
        }
        #popup_registration .reg_main_form>h2 {
        font-family: Roboto Condensed;
        font-size: 20px;
        font-weight: 700;
        color: #323946;
        }
        .c-registration__tab, .c-registration__tabs {
        text-align:center;
        }
        .c-registration__tab>img{
        margin: auto;
        display: block;
        max-width: 120px;
        }
        .c-registration__field {
        position: relative;
        -webkit-flex: 1 1 auto;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        margin: 0 .625em .9375em;
        }
        .c-registration__input {
        padding: 0 3.21429em;
        width: 100%;
        height: 3em;
        outline: none;
        border: 1px solid #a9a9a9;
        background-color: #fff;
        font-size: .875em;
        color: #287e83;
        }
        .c-registration__input {
        padding: 0 1.53846em;
        height: 3.23077em;
        border-radius: 2em;
        border-color: #d7d9db;
        font-size: .8125em;
        }
        .c-registration__input, .c-registration__input::-webkit-input-placeholder {
        font-weight: bold;
        color: black;
        }
        .c-registration__input, .c-registration__input::placeholder {
        font-weight: bold;
        color: black;
        }
        .blackbtn{
        display: table;
        padding: 0 15px;
        min-width: 200px;
        height: 38px;
        margin: 0 auto;
        outline: none;
        border-radius: 19px;
        background: #b79414;
        font-size: 15px;
        font-weight: bold;
        line-height: 34px;
        transition: background .2s ease-in-out;
        float:none;
        }
        .register_text{
        color:#fff;
        }
        .index_banner_bg_1 {
        text-align:center;
        }
        .index_h2{
        padding-top:5px;
        padding-bottom:10px;
        }
        td, th{
        background-color:transparent!important;
        border-width:0px!important;
        }
        input, select{
        padding: 0 1.53846em;
        height: 3.23077em;
        border-radius: 2em;
        border-color: #d7d9db;
        font-size: .8125em;
        color:#000;
        }
        @media only screen and (max-width: 768px)
        {
        .index_h2 {
        font-size:12px;
        padding-left:0px;
        }
        .c-registration_is-popup{
        width:20em;
        margin:auto;
        }
        .table-responsive{
        border-width:0px;
        }
        form table,form tbody,form tr,form td{
        display:block;
        }
        form td>div{
        height:auto!important;
        }
        form td>div>div{
        float:none!important;
        width:100%!important;
        text-align:center!important;
        }
        input, select{
        width:100%!important;
        }
        }
        </style>
    </head>
    <body>
        <div class="arcticmodal-container" style="">
            <table class="arcticmodal-container_i">
                <tbody>
                    <tr>
                       <td class="arcticmodal-container_i2">
                            <div id="popup_registration" class="c-registration c-registration_is-popup">
                                <span class="c-registration__close arcticmodal-close"></span>
                                <div class="c-registration__content  reg_main_form form_in">
                                    <h2 class="c-registration__title"></h2>
                                    <div id="popup_reg_container" class="register_body">
                                        <div class="c-registration__item">
                                            <div class="c-registration__tabs"><br><br>
                                                <div class="c-registration__tab active  c-registration__tab--full_reg">
                                                  <H1>  SM  </H1> 
                                                    </div><br>

                                            <h3 style="color:#fff">Login Here</h3></div>
                                        </div><br>
                                        <div class="msg" id="error_table" style="color:red; text-align:center; font-weight:bold;padding:5px;"></div>
                                        <div class="form-container sign-in-container">
                                            <form action="<?php echo base_url(); ?>Login/customerLogin" method="post" >
                                                <div class="active" style="font-size: 17px; font-weight: bold" >
                                                    <div colspan="2">
                                                        <div style="color:white;">
                                                            <?php echo validation_errors(); ?>
                                                            <?php if(!empty($messagedanger)){ echo $messagedanger; }?>
                                                        </div>
                                                        <div style="color:green;">
                                                            <?php if(!empty($messagesuccess)){ echo $messagesuccess; }?>
                                                        </div>
                                                    </div>
                                                    <input type="text" placeholder="USER NAME" name="userName" value="" class="textBoxStyle" style="width:280px;" ><br> <br>

                                                   <input type="password" placeholder="PASSWORD" name="passWord" class="textBoxStyle" style="width:280px;"
                                                  /></div>


                                                </div> 
                                                
                                                
                                        </div>
                                        <br><br>
                                        <button class="button blackbtn">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </td>
</tr>
</tbody>
</table>
</div>
</div>
 
<h5 style="text-align: center; font-size: 15px;color: white;">TO REGISTER sattaa-matka</h5>
<h6 style="text-align: center;text-decoration: underline; font-weight:bold; font-size: 17px;"><a href="" style="color:#b79414;">CLICK HERE</a></h6>
</div>
<br>
<div style="color:#fff; text-align:center; padding-bottom:5px;padding-top:20px; font-size:15px;"> sattaa-matka &copy;  All Right Reserved.</div>
<br><br><br><br>

</body>
</html>