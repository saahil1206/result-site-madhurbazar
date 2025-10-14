function ValidateUser()
{	 
	 
	var UserName = $("#txtUserName").val();
	var Password = $("#txtPassword").val();
	
	$.ajax({
		url: "ajax_script/validate_user.php",
		type: "POST",
		beforeSend:function(req) 
		{	
			$("#loading_image").show();
			$("#btnLogin").hide();
			$("#error_message").hide();
		},
		data: { "UserName": UserName,"Password": Password},	
		success: function(response) 
		{			
		 	 
			$("#loading_image").hide();
			$("#btnLogin").show();
			 
			if(response=="404")
			{	 				 
				alert("Your username or password is wrong.");
				$("#error_message").html("Your username or password is wrong.");				
				$("#error_message").show();
				
				/*$('#error_message').each(function() {
    			var elem = $(this);
				setInterval(function() {
				if (elem.css('visibility') == 'hidden') {
					elem.css('visibility', 'visible');
				} else {
					elem.css('visibility', 'hidden');
				}    
				}, 500);
				});*/
			}
			else if(response=="201")
			{	 				 
				alert("Please wait site is on maintenance.");
				return false;
				 
			}
			else if(response=="100")
			{
				$("#error_message").html("");
				$("#error_message").hide();
				window.location="dashboard.php";
			}
			else if(response=="200")
			{
				$("#error_message").html("");
				$("#error_message").hide();
				window.location="dashboard.php";
			}
			
		} ,
		error:function(req,status,error)
		{			 
			$("#loading_image").hide();
			$("#btnLogin").show();	
			//ValidateUser();
		}
	}); 
}


function ValidateUserMobile()
{	 
	 
	var UserName = $("#txtUserNameMobile").val();
	var Password = $("#txtPasswordMobile").val();
	
	$.ajax({
		url: "ajax_script/validate_user.php",
		type: "POST",
		beforeSend:function(req) 
		{	
			$("#loading_image").show();
			$("#btnLogin").hide();
			$("#error_message").hide();
		},
		data: { "UserName": UserName,"Password": Password},	
		success: function(response) 
		{			
		 	 
			$("#loading_image").hide();
			$("#btnLogin").show();
			 
			if(response=="404")
			{	 				 
				$("#error_message").html("Your username or password is wrong.");				
				alert("Your username or password is wrong.");
				$("#error_message").show();
				
				/*$('#error_message').each(function() {
    			var elem = $(this);
				setInterval(function() {
				if (elem.css('visibility') == 'hidden') {
					elem.css('visibility', 'visible');
				} else {
					elem.css('visibility', 'hidden');
				}    
				}, 500);
				});*/
			}
			else if(response=="100")
			{
				$("#error_message").html("");
				$("#error_message").hide();
				window.location="dashboard.php";
			}
			else if(response=="200")
			{
				$("#error_message").html("");
				$("#error_message").hide();
				window.location="dashboard.php";
			}
			
		} ,
		error:function(req,status,error)
		{			 
			$("#loading_image").hide();
			$("#btnLogin").show();	
			ValidateUser();
		}
	}); 
}

