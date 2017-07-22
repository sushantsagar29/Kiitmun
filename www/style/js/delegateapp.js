/*-------------visibility = hidden only hides the elemnets from the screen but they remain in the dom
while setting display = none or using .hide() function ir removes the elements from the dom---------*/
//----------sushant sagar----------//

$(document).ready(function(){
$("#secdelegate").hide();
$("#seconddel").val("hide");
//var hidval = $("#seconddel").val();
//alert(hidval);
$("#ca").hide();
});

$("#add-del").click(function(){
	$("#secdelegate").show();
	$("#add-del").hide();
	$("#seconddel").val("show");
});

$("#rem-del").click(function(){
	$("#secdelegate").hide();
	$("#add-del").show();
	$("#seconddel").val("hide");
});

$('#heard').change(function(){ 
  
    if($(this).val() == 'Social Networking Sites'){
      function1();
    }
    if($(this).val() == 'Print Media'){
      function1();
    }
	if($(this).val() == 'Electronic Media'){
      function1();
    }
	if($(this).val() == 'Campus Ambassador'){
      function2();//for ca
    }
	if($(this).val() == 'Friends'){
      function1();
    }

});

function function1(){
	//for rest
	$("#ca").hide();
	$("#hear").val("nonca");
}

function function2(){
	//for ca
	$("#ca").show();
	$("#hear").val("ca");
}