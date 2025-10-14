function CallAjaxGetData(URL,ReplaceDivId)
{   
	    $.ajax({
        url: URL,
        type: 'GET',
        
		beforeSend:function(req) 
		{	
			IsAjaxCall(true);
		},
        success: function (data) 
		{ 
		   $("#"+ReplaceDivId).html(""); 
		   $("#"+ReplaceDivId).html(data);  
		  
        },
		complete:function(req,status)
		{
			 IsAjaxCall(false);
		},
		error:function(req,status,error)
		{			 
			 IsAjaxCall(false);
		}
    });
}

function ChangeMenu(MenuId)
{
	ShowSelectedMenu(MenuId);
	var Url = "inner_left_menu.php?MenuId="+MenuId;
		$.ajax({
        url: Url,
        type: 'GET',  
        success: function (data) 
		{ 
		   $("#left_menu_area").html(""); 
		   $("#left_menu_area").html(data);
		   if(MenuId == 2)
		   {
		   	 GetSubPageContent(MenuId,3);
		   }
		   else if(MenuId == 3)
		   {
			   GetSubPageContent(MenuId,4);
		   }
		   else
		   {
			  GetSubPageContent(MenuId,1);
		   }
		  
        } 
    }); 
}

function ShowSelectedMenu(MenuId)
{ 
	var Url = "GetTopMenu.php?MenuId="+MenuId; 
	$.ajax({
        url: Url,
        type: 'GET',  
        success: function (data) 
		{ 
		   $("#TopNavigationMenu").html(""); 
		   $("#TopNavigationMenu").html(data);  
		  
        } 
    }); 
	 
	ChangeBreadcrumMenu(MenuId,0)
} 

function GetSubPageContent(MenuId,SubMenuId)
{
    $('.x-navigation-open').removeClass('x-navigation-open');
	ChangeBreadcrumMenu(MenuId,SubMenuId);
	
	var FileName = GetFileNameBySubMenuId(MenuId,SubMenuId);	 
	var Url = "ajax_script/"+FileName;
	CallAjaxGetData(Url,"content_area");	
}

function ChangeBreadcrumMenu(MenuId,SubMenuId)
{	
	 
	var Url = "breadcrum.php?MenuId="+MenuId+"&SubMenuId="+SubMenuId; 
	$.ajax({
        url: Url,
        type: 'GET',  
        success: function (data) 
		{ 		  
		  $("#div_breadcrum").html(""); 
		   $("#div_breadcrum").html(data);  
		  
        } 
    }); 
	
}

function GetQueryString(PageNumber)
{	
	PageUrl = "ajax_script/member_list.php"+PageNumber;
	CallAjaxGetData(PageUrl,"content_area");
}

function GetMemberTree(memberId)
{
	PageUrl = "ajax_script/member_downline_tree.php?mem_id="+memberId;
	CallAjaxGetData(PageUrl,"content_area");	
}

function GetMyDirectDownLineMember(string)
{
	PageUrl = "ajax_script/my_direct_downline.php?"+string;	 
	CallAjaxGetData(PageUrl,"content_area");
}

function GetFileNameBySubMenuId(MenuId,SubMenuId)
{
	var FileName = ""; 
	if(MenuId ==2)
	{
		FileName = GetMemberFileName(SubMenuId);
	}
	else if(MenuId ==3)
	{
		FileName = GetMyAccountFileName(SubMenuId);
	}
	else if(MenuId ==4)
	{
		FileName = GetMyInvestmentFileName(SubMenuId);
	}
	else if(MenuId ==5)
	{
		FileName = GetMyBettingHistoryFileName(SubMenuId);
	}
	else if(MenuId ==6)
	{
		FileName = GetMyProfileFileName(SubMenuId);
	}
	else if(MenuId ==7)
	{
		FileName = GetInPlayCricketFileName(SubMenuId);
	} 
	else if(MenuId ==8)
	{
		FileName = GetInComeFileName(SubMenuId);
	} 
	else if(MenuId ==11)
	{
		FileName = GetMessageFileName(SubMenuId);
	} 
	else if(MenuId ==12)
	{
		FileName = GeteZspendFileName(SubMenuId);
	}
	else if(MenuId ==13)
	{
		FileName = PaymentOptions(SubMenuId);
	}
	
	
	return FileName;
}


function PaymentOptions(SubMenuId)
{
	var FileName = "";
	if(SubMenuId == 1)
	{
		FileName = "payment_options.php";
	}
	else if(SubMenuId == 2)
	{
		FileName = "member_downline_tree.php";
	}
	else if(SubMenuId == 3)
	{
		FileName = "my_direct_downline.php";
	}
	else if(SubMenuId == 4)
	{
		FileName = "member_list.php";
	}	
	return FileName;	
}

function GetMemberFileName(SubMenuId)
{
	 
	var FileName = "";
	if(SubMenuId == 1)
	{
		FileName = "add_member_step1.php";
	}
	else if(SubMenuId == 2)
	{
		FileName = "member_downline_tree.php";
	}
	else if(SubMenuId == 3)
	{
		FileName = "my_direct_downline.php";
	}
	else if(SubMenuId == 4)
	{
		FileName = "member_list.php";
	}	
	else if(SubMenuId == 5)
	{
		FileName = "referrer_member_list.php";
	}	
	else if(SubMenuId == 6)
	{
		FileName = "my_direct_members.php";
	}
	return FileName;	
}

function GetMyAccountFileName(SubMenuId)
{
	var FileName = "";
	if(SubMenuId == 1)
	{
		FileName = "current_month_history.php";
	}
	else if(SubMenuId == 2)
	{
		FileName = "searchby_day_account_history.php";
	}
	else if(SubMenuId == 3)
	{
		FileName = "by_month_account_history.php";
	}
	else if(SubMenuId == 4)
	{
		FileName = "fund_transfer.php";
	}
	else if(SubMenuId == 5)
	{
		FileName = "ajax_withdrawn.php";
	}
	else if(SubMenuId == 6)
	{
		FileName = "ajax_withdrawn_history.php";
	}	
	else if(SubMenuId == 7)
	{
		FileName = "ajax_money_in.php";
	}
	else if(SubMenuId == 8)
	{
		FileName = "today_history.php";
	}
	else if(SubMenuId == 9)
	{
		FileName = "bank_deposit_request_list.php";
	}
	
	else if(SubMenuId == 10)
	{
		FileName = "ajax_bitcoin_money_in.php";
	}
	
	else if(SubMenuId == 11)
	{
		FileName = "bitcoin_deposit_request_list.php";
	}
	else if(SubMenuId == 12)
	{
		FileName = "neteller_deposit_request_list.php";
	}
	else if(SubMenuId == 13)
	{
		FileName = "ajax_money_in_neteller.php";
	}
	
	else if(SubMenuId == 14)
	{
		FileName = "perfect_money_deposit_request_list.php";
	}
	else if(SubMenuId == 15)
	{
		FileName = "ajax_money_in_perfect_money.php";
	}
	else if(SubMenuId == 16)
	{
		FileName = "ajax_beneficiary_list.php";
	}
	else if(SubMenuId == 17)
	{
		FileName = "ajax_add_beneficiary.php";
	}
	else if(SubMenuId == 18)
	{
		FileName = "fund_transfer_exchange.php";
	}
	return FileName;	
}

function GetMyInvestmentFileName(SubMenuId)
{
	var FileName = "";
	if(SubMenuId == 1)
	{
		FileName = "ajax_shares_history.php";
	}
	else if(SubMenuId == 2)
	{
		FileName = "ajax_buy_new_shares.php";
	}
		return FileName;
}

function GeteZspendFileName(SubMenuId)
{
	if(SubMenuId == 1)
	{
		FileName = "ajax_ezspend.php";
	}
	 
	return FileName;
}
function GetMessageFileName(SubMenuId)
{
	if(SubMenuId == 1)
	{
		FileName = "messages_list.php";
	}
	else if(SubMenuId == 2)
	{
		FileName = "compose_new_message.php";
	}
	return FileName;
}


function GetInComeFileName(SubMenuId)
{
	if(SubMenuId == 1)
	{
		FileName = "binary_bonus_details.php";
	}
	else if(SubMenuId == 2)
	{
		FileName = "referer_bonus_details.php";
	}
	else if(SubMenuId == 3)
	{
		FileName = "roi_bonus_details.php";
	}  
	return FileName;
}

function GetMyBettingHistoryFileName(SubMenuId)
{
	var FileName = "";
	if(SubMenuId == 1)
	{
		FileName = "ajax_my_all_bet.php";
	}
	else if(SubMenuId == 2)
	{
		FileName = "ajax_my_unsettled_bet.php";
	}
	else if(SubMenuId == 3)
	{
		FileName = "ajax_even_odd_all_bet.php";
	}
	else if(SubMenuId == 4)
	{
		FileName = "ajax_even_unsettled_bet.php";
	}	
	else if(SubMenuId == 5)
	{
		FileName = "ajax_my_all_roulette_bet.php";
	}
	else if(SubMenuId == 6)
	{
		FileName = "ajax_roulette_unsettled_bet.php";
	}
	else if(SubMenuId == 7)
	{
		FileName = "ajax_roulette_history.php";
	}
	else if(SubMenuId == 8)
	{
		FileName = "ajax_my_downline_bets.php";
	}
	 
	 
	
	return FileName;
}

function GetMyProfileFileName(SubMenuId)
{
	var FileName = "";
	if(SubMenuId == 1)
	{
		FileName = "ajax_member_info.php";
	}
	else if(SubMenuId == 2)
	{
		FileName = "ajax_change_password.php";
	}
	else if(SubMenuId == 3)
	{
		FileName = "ajax_change_secure_code.php";
	}
	
	return FileName;	
}

function SuccessNotification(Message)
{
	notif({
  		msg: Message,
		position: "right",
		bgcolor: "#294447",
		color: "#fff"
	});
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

function ScrollTop()
{
	jQuery('body,html').animate({scrollTop: 0}, 800);
}

function SuccessDisplay(Message,IsDisplay)
{
	 if(IsDisplay== true)
	 {
	 	ErrorDisplay('',false);
		$("#SuccessMessageParentDiv").show("slow");
	 	$("#divSuccessMessage").html(nl2br(Message)); 
		ScrollTop();
	 }
	 else
	 {
		 $("#SuccessMessageParentDiv").hide();
		 $("#divSuccessMessage").html(""); 
	 }
}


 function nl2br (str, is_xhtml) {
     var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
     return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
  } 

function IsAjaxCall(isCall)
{
	 if(isCall)
	 {
	    $("body").find(".overlay").remove();
		$("body").prepend("<div class=\"overlay\"></div>");
		$(".overlay").css({
			"position": "absolute", 
			"width": $(document).width(), 
			"height": $(document).height(),
			"z-index": 1, 
			"background-color": "#ffffff"
		}).fadeTo(0, 0.8);

		 $("#content_area").css("opacity","0.6");
		 $("#content_area").css("background-color","#F7F7F7");
		 $('#loading_div').show();
	 }
	 else
	 {
		 
		$(".overlay").css({
			"position": "absolute", 
			"width": "0px", 
			"height": "0px",
			"z-index": 0, 
		}).fadeTo(0, 0.8);
		
		 $('#loading_div').hide();
		 $("#content_area").css("opacity","1");
		 $("#content_area").css("background-color","#ffffff");
	 }
}

function AjaxCallForBet(isCall)
{
	 if(isCall)
	 {
		$("body").prepend("<div class=\"overlay\"></div>");
		$(".overlay").css({
			"position": "absolute", 
			"width": $(document).width(), 
			"height": $(document).height(),
			"z-index": 99999, 
		}).fadeTo(0, 0.8);

		 $("#content_area").css("opacity","0.6");
		 $("#content_area").css("background-color","#F7F7F7");
		 //$('#loading_div').show();
	 }
	 else
	 {
		 
		$(".overlay").css({
			"position": "absolute", 
			"width": "0px", 
			"height": "0px",
			"z-index": 0, 
		}).fadeTo(0, 0.8);
		
		 //$('#loading_div').hide();
		 $("#content_area").css("opacity","1");
		 $("#content_area").css("background-color","#FFFFFF");
	 }
}

function startTime()
{
	var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
	var Weekdays = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]

	var today=new Date();
	var h=today.getUTCHours();
	var m=today.getUTCMinutes();
	var s=today.getUTCSeconds();	
	var WeekdayValue = today.getUTCDay();
	
	var Dat = today.getUTCDate();
	
	m = checkTime(m);
	s = checkTime(s);
	var ampm = (h >= 12) ? "PM" : "AM";
	//15:45:38 PM / Mon, Jun 1st, 2015
	
	var DateString = Weekdays[WeekdayValue]+", "+monthNames[(today.getUTCMonth())] + " " + Dat+""+nth(Dat) + ", " + today.getUTCFullYear()
	document.getElementById('DateTimeDiv').innerHTML = h+":"+m+":"+s+ " "+ampm+" / "+DateString+" GMT";
	var t = setTimeout(function(){startTime()},500);
}


function nth(d) {
  if(d>3 && d<21) return 'th'; // thanks kennebec
  switch (d % 10) {
        case 1:  return "st";
        case 2:  return "nd";
        case 3:  return "rd";
        default: return "th";
    }
} 

function checkTime(i) 
{
	if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
	return i;
}

function checkemail(email)
{
	var str=email;
	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	if (filter.test(str)) { return true; }
	else {	return false; }
}

function GetMessageView(MessageId)
{
	    $.ajax({
        url: "ajax_script/message_view.php?message_id="+MessageId,
        type: 'GET',
        
		beforeSend:function(req) 
		{	
			IsAjaxCall(true);
		},
        success: function (data) 
		{ 
		   ChangeBreadcrumMenu(11,3);
		   $("#message_list_view").html(""); 
		   $("#message_list_view").html(data);  
		  
        },
		complete:function(req,status)
		{
			 IsAjaxCall(false);
		},
		error:function(req,status,error)
		{			 
			 IsAjaxCall(false);
		}
    });			
}

function GetReplyMessageView(MessageId)
{
	    var MessageSubject = $("#message_subject").val();
		var MessageText = $("#message_text").val();
		
		$.ajax({
        url: "ajax_script/reply_message.php?message_id="+MessageId,
        type: 'GET',
        
		beforeSend:function(req) 
		{	
			IsAjaxCall(true);
		},
		 
		
        success: function (data) 
		{ 		  
		   ChangeBreadcrumMenu(11,4);
		   $("#message_list_view").html(""); 
		   $("#message_list_view").html(data);  	  
        },
		complete:function(req,status)
		{
			 IsAjaxCall(false);
		},
		error:function(req,status,error)
		{			 
			 IsAjaxCall(false);
		}
    });			
}

function SaveReplyMessage(MessageId)
{
	    var MessageSubject = $("#message_subject").val();
		var MessageText = $("#message_text").val();
		
		$.ajax({
        url: "ajax_script/reply_text_message.php?message_id="+MessageId,
        type: "POST",
        
		beforeSend:function(req) 
		{	
			IsAjaxCall(true);
		},
		data: { "MessageSubject": MessageSubject,"MessageText": MessageText,"MessageId": MessageId},	
		
        success: function (data) 
		{ 		  
		   if(data==1000)
		   {
			   GetSubPageContent(11,1);
		   }		  
        },
		complete:function(req,status)
		{
			 IsAjaxCall(false);
		},
		error:function(req,status,error)
		{			 
			 IsAjaxCall(false);
		}
    });			
}

function ComposeNewMessage()
{
	    var MessageSubject = $("#message_subject").val();
		var MessageText = $("#message_text").val();
		var MessageTo = $("#message_to").val();
		 
		if(MessageTo!="")
		{
			$.ajax({
			url: "ajax_script/compose_new_message_save.php",
			type: "POST",
			
			beforeSend:function(req) 
			{	
				IsAjaxCall(true);
			},
			data: { "MessageSubject": MessageSubject,"MessageText": MessageText,"MessageTo": MessageTo},	
			
			success: function (data) 
			{ 		  
			   
			   if(data==1000)
			   {
				   GetSubPageContent(11,1);
			   }		  
			},
			complete:function(req,status)
			{
				 IsAjaxCall(false);
			},
			error:function(req,status,error)
			{			 
				 IsAjaxCall(false);
			}
		});	
		}
		else
		{
				alert("-Please select Message To");
				return false;
		}
}

function GetMatchLiveScore(EventId)
{
	   $.ajax({
        url: "ajax_script/live_score.php?EventId="+EventId,
        type: 'GET',
        
		beforeSend:function(req) 
		{	
			 
		}, 
        success: function (data) 
		{ 		  
		    
		   $("#display_score_div").html(""); 
		   $("#display_score_div").html(data);  
		   GetMatchLiveScore(EventId);
        },
		complete:function(req,status)
		{
			 
		},
		error:function(req,status,error)
		{			 
			 
		}
    });			
}


