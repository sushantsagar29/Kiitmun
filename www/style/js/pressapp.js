/*-------------visibility = hidden only hides the elemnets from the screen but they remain in the dom
while setting display = none or using .hide() function ir removes the elements from the dom---------*/
//----------sushant sagar----------//

$(document).ready(function(){
$("#editor1").hide();
$("#editor2").hide();
$("#reporter1").hide();
$("#repedi").hide();
//var hidval = $("#pos").val();
//alert(hidval);
$("#ca").hide();
});

 $('#position').change(function(){ 
  
    if($(this).val() == 'editor'){
      function1();//for editor
    }
    if($(this).val() == 'reporter'){
      function2();//for reporter
    }
	if($(this).val() == 'photographer'){
      function3();//for photographer
    }

});

function function1(){
	//for editor
	 $("#editor1").show();
	$("#editor2").show();
	$("#reporter1").hide();
	$("#repedi").show();
	$("#pos").val("editor");
}
function function2(){
	//for reporter
	$("#editor1").hide();
	$("#editor2").hide();
	$("#reporter1").show();
	$("#repedi").show();
	$("#pos").val("reporter");
}
function function3(){
	//for photographer
	$("#editor1").hide();
	$("#editor2").hide();
	$("#reporter1").hide();
	$("#repedi").hide();
	$("#pos").val("photographer");
}

$('#heard').change(function(){ 
  
    if($(this).val() == 'Social Networking Sites'){
      function11();
    }
    if($(this).val() == 'Print Media'){
      function11();
    }
	if($(this).val() == 'Electronic Media'){
      function11();
    }
	if($(this).val() == 'Campus Ambassador'){
      function12();//for ca
    }
	if($(this).val() == 'Friends'){
      function11();
    }

});

function function11(){
	//for rest
	$("#ca").hide();
	$("#hear").val("nonca");
}

function function12(){
	//for ca
	$("#ca").show();
	$("#hear").val("ca");
}