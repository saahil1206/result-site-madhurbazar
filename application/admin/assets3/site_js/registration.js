function AddNewMember()
{
	var obj=document.AddNewMemberForm;
	var cnt=0;
	var msg="Sorry, we cannot complete your request.\nKindly provide us the missing or incorrect information enclosed below.\n\n";
 	var error=false;
		 
	if(obj.mem_name.value=='') { msg+="- Please enter name.\n";  error=true; } 
	if(obj.mem_l_name.value=='') { msg+="- Please enter surname.\n";  error=true; } 
	
	if(obj.dob_day.value=='') { msg+="- Please enter member dob day.\n";  error=true; } 
	if(obj.dob_month.value=='') { msg+="- Please enter member dob month.\n";  error=true; } 
	if(obj.dob_year.value=='') { msg+="- Please enter member dob year.\n";  error=true; }
	
	if(obj.mem_address.value=='') { msg+="- Please enter member address.\n";  error=true; }
	if(obj.mem_zip.value=='') { msg+="- Please enter member zip code.\n";  error=true; }
 
	if(obj.mem_country.value=='') { msg+="- Please select member country.\n";  error=true; }
	if(obj.mem_state.value=='') { msg+="- Please enter member state.\n";  error=true; }
	
	if(obj.mem_email.value=='') { msg+="- Please enter member email.\n";  error=true; }
	if(obj.mem_email.value!='') { if(EailExp(obj.mem_email.value)==false) { msg+="- Please enter valid email address.\n"; }}
	if(obj.c_mem_email.value=='') { msg+="- Please enter member confirm email address.\n";  error=true; }
	
	if(obj.mem_email.value!='' && obj.c_mem_email.value!='')
	{
		if(obj.mem_email.value!=obj.c_mem_email.value!='')	
		{
			msg+="- Confirm email address must be same as email address.\n";  error=true;
		}		
	}
	 
	if(obj.mem_login_id.value=='') { msg+="- Please enter member login Id.\n";  error=true; }
	if(obj.password.value=='') { msg+="- Please enter password\n";  error=true; }
	if(obj.c_password.value=='') { msg+="- Please enter member confirm password.\n";  error=true; }
	
	
	if(obj.is_refer.value=='Yes') {
	if(obj.mem_team.value=='')  { msg+="- Please enter member Placement Position.\n";  error=true; }
	if(obj.mem_placment.value=='')  { msg+="- Please enter Refer Id.\n";  error=true; }
	}
	 
	 
	if(obj.mem_security_question.value=='') { msg+="- Please select security question.\n";  error=true; }
	if(obj.mem_security_answer.value=='') { msg+="- Answer is required.\n";  error=true; }
	
	if(obj.registration_charges.value=='') { msg+="- Please select registration fee.\n";  error=true; }	 
	if(error==true) {
		ErrorDisplay(msg,true);
		return false;
	} 
	else
	{
		ErrorDisplay(msg,false);
		
		RegisterNewMemberPost();
	}	
}

function ScrollTop()
{
	jQuery('body,html').animate({scrollTop: 0}, 800);
}


function RegisterNewMemberPost()
{	 
		$.ajax({
		url: "registration_details_save.php",
		type: "POST",
		beforeSend:function(req) 
		{	
			IsAjaxCall(true);
		},
		data: $(document.AddNewMemberForm).serialize(),
		success: function(response) 
		{			
			 
			if(response!="")
			{				 
				if(response=="Success")
				{
					IsAjaxCall(false);					 
					window.location="registration_thanks.php";
				}
				else
				{
					ErrorDisplay(response,true);
					IsAjaxCall(false);
					ScrollTop();
				}
			}
		} ,
		error:function(req,status,error)
		{			 
			 
			 IsAjaxCall(false);
		}
	}); 
}
 

function EailExp(email)
{
	var str=email;
	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	if (filter.test(str)) { return true; }
	else {	return false; }
}

function ErrorDisplay(Message,IsDisplay)
{
	 if(IsDisplay== true)
	 {
	 	SuccessDisplay('',false);
		$("#ErrorMessageParentDiv").show("slow");
	 	$("#divErrorMessage").html(nl2br(Message)); 
		ScrollTop();
	 }
	 else
	 {
		 $("#ErrorMessageParentDiv").hide();
		 $("#divErrorMessage").html(""); 
		 
	 }
}


function ValidateForgotPassword()
{	
	var obj=document.form_forgotPassword;
	var cnt=0;
	var msg="Sorry, we cannot complete your request.\nKindly provide us the missing or incorrect information enclosed below.\n\n";
 	var error=false;
		 
	if(obj.txtUserName.value=='') { msg+="- Please enter username.\n";  error=true; } 
	if(obj.txtEmail.value=='') { msg+="- Please enter email address.\n";  error=true; } 
	
	if(obj.txtEmail.value!='') { if(EailExp(obj.txtEmail.value)==false) { msg+="- Please enter valid email address.\n"; }}
	
	if(obj.mem_security_question.value=='') { msg+="- Please select security question.\n";  error=true; } 
	if(obj.mem_security_answer.value=='') { msg+="- Please enter security answer.\n";  error=true; }  
	 
	if(error==true) 
	{
		alert(msg);
		return false;
	} 
	else
	{
		ForgotPasswordPost();
	}	
	
}

function ForgotPasswordPost()
{
	var obj=document.form_forgotPassword;		
	
	var txtUserName = obj.txtUserName.value;
	var txtEmail = obj.txtEmail.value;
	var mem_security_question = obj.mem_security_question.value;
	var mem_security_answer = obj.mem_security_answer.value;
	
	redirect =	"ajax_forgot_password.php?txtUserName="+txtUserName+"&txtEmail="+txtEmail+"&mem_security_question="+mem_security_question+"&mem_security_answer="+mem_security_answer;		
	$.ajax(
	{		 
		url:redirect,
		type: "GET",
		beforeSend:function(req) 
		{	
			 
		},
		success:function(response)
		{ 
		   if(response == 100)
		   {
			   $("#error_message_forgot").html("You password details has beet sent in you registered email addres.");
			   $("#error_message_forgot").css({'color':'green'});
			   $("#error_message_forgot").css({'font-weight':'bold'});
			   $("#error_message_forgot").css({'font-size':'14px;'});
		   }
		   else
		   {
			  $("#error_message_forgot").html(response);
		   }
		},
		error:function(req,status,error)
		{			 
			 
		}
	 }
	);
} 
 
function IsRefer(value)
{
	if(value == "Yes")
	{
		$("#tr_placement").show("slow");	
	}
	else
	{
			$("#tr_placement").hide("slow");	
	}
}



function ForgotPasswordValidate()
{
	var obj=document.forgotPasswordForm;
	var cnt=0;
	var msg="Sorry, we cannot complete your request.\nKindly provide us the missing or incorrect information enclosed below.\n\n";
 	var error=false;
		 
	if(obj.mem_login_id.value=='') { msg+="- Please enter Login Id.\n";  error=true; }  
	
	if(obj.mem_email.value=='') { msg+="- Please enter your email address.\n";  error=true; }
	if(obj.mem_email.value!='') { if(EailExp(obj.mem_email.value)==false) { msg+="- Please enter valid email address.\n"; }} 
	 
	if(obj.mem_security_question.value=='') { msg+="- Please select security question.\n";  error=true; }
	if(obj.mem_security_answer.value=='') { msg+="- Answer is required.\n";  error=true; }
	
	 
	if(error==true) {
		 
		ErrorDisplay(msg,true);
		return false;
	} 
	else
	{
		ErrorDisplay(msg,false);
		CheckIsAllDetailsValid();
	}	
}



function CheckIsAllDetailsValid()
{	 
		$.ajax({
		url: "isValidUser.php",
		type: "POST",
		beforeSend:function(req) 
		{	
			IsAjaxCall(true);
		},
		data: $(document.forgotPasswordForm).serialize(),
		success: function(response) 
		{			
			 var obj = JSON.parse(response);
			 
			if(obj.validation!="")
			{				 
				if(obj.validation=="success")
				{
					IsAjaxCall(false);					 
					$("#otp_rows").show('slow');
					$("#mem_tel").val(obj.mobileNumber);
					$("#btnSubmit").hide('slow');					
				}
				else
				{
					ErrorDisplay(obj.message,true);
					IsAjaxCall(false);
					ScrollTop();
				}
			}
		} ,
		error:function(req,status,error)
		{			 
			 
			 IsAjaxCall(false);
		}
	}); 
}
 
 
 
function SendForgotPasswordOTP()
{	 
	if($("#mem_tel").val()!="")
	{
		
			$.ajax({
			url: "send_otp.php",
			type: "POST",
			beforeSend:function(req) 
			{	
				IsAjaxCall(true);
			},
			data: $(document.forgotPasswordForm).serialize(),
			success: function(response) 
			{			
				  
				 SuccessDisplay('OTP Number Successfully Send to your mobile number.',true);
				 $("#btnSendOtp").hide();
				 $("#enter_otp_rows").show();
				 IsAjaxCall(false);
			} ,
			error:function(req,status,error)
			{			 
				 
				 IsAjaxCall(false);
			}
		}); 
	}
	else
	{
		alert("-There is something wrong. Please try again.")
	}
}

function ValidateOTP()
{	 
	if($("#otp_number").val()!="")
	{
		
			$.ajax({
			url: "validate_otp.php?optNumber="+$("#otp_number").val(),
			type: "GET",
			beforeSend:function(req) 
			{	
				IsAjaxCall(true);
			},			 
			success: function(response) 
			{			
				 var obj = JSON.parse(response);
				 if(obj.validation!="")
				{				 
					if(obj.validation=="success")
					{
						IsAjaxCall(false);					 
						window.location="change_password.php";			
					}
					else
					{
						ErrorDisplay(obj.message,true);
						IsAjaxCall(false);
						ScrollTop();
					}
				}
			} ,
			error:function(req,status,error)
			{			 
				 
				 IsAjaxCall(false);
			}
		}); 
	}
	else
	{
			ErrorDisplay("Please enter OTP Number.",true);
			IsAjaxCall(false);
			ScrollTop(); 
	}
}



function ChangePassword()
{
	 
	var obj=document.FormChangePassword; 
	var cnt=0;
	var msg="";
 	var error=false;
	
	
	if(obj.mem_password.value=='') { msg+="- Please enter New Password.\n";  error=true; } 
	if(obj.mem_c_password.value=='') { msg+="- Please enter confirm new Password.\n";  error=true; } 
	
	if(obj.mem_password.value.length<5 && obj.mem_password.value!='') 
	{
		 msg+="- Please enter atleast 5 characters in new password.\n";
		  error=true;
	} 
	
	if(obj.mem_password.value!=obj.mem_c_password.value)
	{
		 msg+="- New password and confirm new password must be same.\n"; error=true;
	} 
	
	if(obj.mem_password.value.length>12) 
	{
		 msg+="- Only 12 characters accept in new password.\n";
		  error=true;
	}
	
	if(error==true) {	
		ErrorDisplay(msg,true);
		return false;
	} 
	else 
	{
		ErrorDisplay('',false);
		$.ajax(
		{		 
			url:"update_password.php",
			type: "POST",
			data: $(document.FormChangePassword).serialize(),
			beforeSend:function(req) 
			{	
				IsAjaxCall(true);
			},		
			success:function(response)
			{ 
				 
				 var obj = JSON.parse(response);
				 if(obj.validation!="")
				{				 
					if(obj.validation=="success")
					{
						$("#mem_password").val("");
						$("#mem_c_password").val("");
						
						IsAjaxCall(false);					 
						SuccessDisplay(obj.message,true);
						
						setTimeout(SendHome, 5000);
					}
					else
					{
						ErrorDisplay(obj.message,true);
						IsAjaxCall(false);
						ScrollTop();
					}
				}
				
				IsAjaxCall(false);	 		
			},
			error:function(req,status,error)
			{			 
				 IsAjaxCall(false);
			}
		 }
		); 	
	} 
}

function SendHome()
{
	window.location="index.php";
}