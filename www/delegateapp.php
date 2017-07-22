<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>KIIT International MUN | Delegate Applications</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="KIIT International MUN 2015 shall be the third edition of what is now one of the world's largest student run simulations. To be held between 30th October to 1st November in Bhubaneswar, India it has a delegate turnout of 1800+ from more then 20 countries around the world.">
<meta name="keywords" content="kiitmun, kiit, kalinga institute, Bhubaneswar, mun, technology, model united nations, prashant kumar dey, sushant sagar, ksac">
<meta name="author" content="KIIT International MUN 2015">
<?php
include ( 'metaheader.php');
?>
<link rel="shortcut icon" type="image/x-icon" href="style/images/favicon.png" />
<link href="style/css/bootstrap.css" rel="stylesheet">
<link href="style/css/settings.css" rel="stylesheet">
<link href="style/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link href="style/css/color/green.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="style/type/fontello.css" rel="stylesheet">
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if lt IE 9]>
<script src="style/js/html5shiv.js"></script>
<![endif]-->
</head>
<body data-spy="scroll" data-target=".nav-collapse" data-offset="100">
<div class="body-wrapper">
  <div id="header" class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container"> <a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".nav-collapse"><i class='icon-menu-1'></i></a> <a class="brand" href="index.php"><img src="style/images/logo.png" alt="" /></a>
        <div class="nav-collapse pull-right collapse">
          <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown"> <a href="#about" class="dropdown-toggle js-activated">About Us</a>
              <ul class="dropdown-menu">
                <li><a href="about.php">KIIT International MUN 2015</a></li>
                <li><a href="previous.php">Previous Editions</a></li>
				<li><a href="society.php">KIIT MUN Society</a></li>
				<li><a href="university.php">KIIT University</a></li>
				<li><a href="kiss.php">KISS</a></li>
				<li><a href="india.php">Incredible India</a></li>
				<li><a href="temples.php">The Land of Temples</a></li>
              </ul>
            </li>
			<li><a href="index.php#committees">Committees</a></li>
			<li class="dropdown"> <a href="#application" class="dropdown-toggle js-activated">Applications</a>
				<ul class="dropdown-menu">
					<li><a href="applications.php">Application Procedure</a></li>
					<li><a href="delegateapp.php">Delegate Application</a></li>
					<li><a href="pressapp.php">Int. Press Application</a></li>
					<li><a href="caapp.php">CAMPUS AMBASSADOR </a></li>
				</ul>
			</li>
			<li class="dropdown"> <a href="#" class="dropdown-toggle js-activated">Information</a>
              <ul class="dropdown-menu">
				<li><a href="fee.php">Fees and Accommodation</a></li>
				<li><a href="scholarship.php">Scholarship Opportunities</a></li>
				<li><a href="awards.php">Awards</a></li>
				<li><a href="travel.php">Travel Plans</a></li>
				<li><a href="visa.php">Visa Information</a></li>
			  </ul></li>
            <li><a href="team.php">The Secretariat</a></li>
			<li><a href="partners.php">Partners</a></li>
			<li><a href="sponsors.php">Sponsors</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="contact.php">Contact Us</a></li></ul>
        </div>
        <!-- .nav-collapse --> 
      </div>
      <!-- .container --> 
    </div>
    <!-- .navbav-inner --> 
  </div>
   <!-- .navbar -->
  <div class="dark-wrapper offset">
    <div class="section-head">
      <div class="container">
        <h1>DELEGATE APPLICATIONS </h1>
      </div>
      <!-- /.container --> 
    </div>
    <!-- /.section-head -->
    <div class="container inner">
	 <div class="row">
	 <p>ALL DELEGATES AND ESPECIALLY DELEGATES OF NON-INDIAN ORIGIN ARE REQUESTED TO GO THROUGH <a href="applications.html">THE APPLICATION PROCEDURES PAGE</a> BEFORE APPLYING.</p>
	 
	 <p>Dates: 30th October-1st November, 2015.<br />
		To view committees <a href="index.php#committees">click here</a><br />
		To view country matrices, <a href="https://docs.google.com/spreadsheets/d/1Scv1RxldGgCLd5y7JkrbUn0mxgk8m1-ZeVqZX9XboA0/edit?usp=sharing">click here</a>.</p>

	<p><b>The following committees have optional double delegations, all others are single delegate committees:<br />
		UNGA DISEC; UNGA SPECPOL ; UNGA SOCHUM ; UNDP; UNODC; UNEP; UNESCO.<br />
		<u>All allotments mailed in due course after you fill up this form are provisional and shall be confirmed only after the payment of Delegate Fees of 1000 INR for Indian Nationals and USD 60 for International Delegates.
		Accommodation fees are over and above the Delegate Fees and amount to 600 INR for Indian Nationals and USD 25 for International Delegates.</u></b></p>
	</div><!--/.row--->
	<hr />
	<div class="row">
		<div class="span2"></div>
		<div class="span8">
		<i><center><small>For assistance with the form, get in touch with us on +91-9692549623 or mail us at <a href="mailto:contact@kiitmun.org">contact@kiitmun.org</a></small></center><br />
		</i><form role="form" id="delegate_form" method="POST" action="delappsub.php" autocomplete="true">
			
			<div id="message" style="color:#e03215;"></div><br/>
			<div class="form-group">
				<b>Name<span style="color:#e03215;">*</span></b>
				<input name="name" placeholder="Your Name" class="form-control" required type="text"/>
				<br>
								
				<b>Email Address<span style="color:#e03215;">*</span></b>
				<input name="email" placeholder="Email Id" type="email" class="form-control" required/>
				<br>
						
				<b>Contact No.<span style="color:#e03215;">*</span></b>
				<input name="contact" placeholder="Mobile no. (10 digit)" type="text" maxlength="10" class="form-control" required/>
				<br>
				
				<b><span>Gender</span></b><br>
				<select name="gender" class="form-control" required>
				<option selected value="m">Male</option>
				<option value="f">Female</option>
				<option value="o">Other</option>
				</select>
				<br>
				
				<b>Address<span style="color:#e03215;">*</span></b>
				<input name="address" placeholder="Address" type="text" class="form-control" required/>
				<br>
				
				<b>Nationality <span style="color:#e03215;">*</span></b>
				<input name="nation" placeholder="Nationality" type="text" class="form-control" required/>
				<br>
					
				<b>Name of Institute<span style="color:#e03215;">*</span></b>
				<input name="college" placeholder="School / College" type="text" class="form-control" required/>
				<br>
						
				<b>Course/Stream<span style="color:#e03215;">*</span></b>
				<input name="course" placeholder="Course/Stream" type="text" class="form-control" required/>
				<br>	
				
				<b>Year of Study/Class<span style="color:#e03215;">*</span></b>
				<input name="syear" placeholder="Year of Study" type="text" class="form-control" required/>
				<br>
				
				<b>Your MUN CV (FORMAT: Sl No.- Name of MUN- Committee- Country- Awards)<span style="color:#e03215;">*</span></b>
				<textarea type="text" class="form-control" name="cv" required></textarea><br />
				
				<b><span>Accommodation Required?<span style="color:#e03215;">*</span></span></b><br>
				<select name="accom" class="form-control" required>
					<option value="no" selected>No</option>
					<option value="yes">Yes</option>
				</select>
				<br /><br />

				<input id="seconddel" name="seconddel" type="hidden" value="hide">
				<button type="button" id="add-del" class="btn btn-danger" >Add second delegate &nbsp;(optional)</button><br />
			</div>
			
			<div class="form-group" id="secdelegate">
			<hr /> <center><h4>Details of second delgate</h4></center><br />
				<b>Name<span style="color:#e03215;">*</span></b>
				<input name="secname" placeholder="Name of second delegate" class="form-control" required type="text"/>
				<br>
								
				<b>Email Address<span style="color:#e03215;">*</span></b>
				<input name="secemail" placeholder="Email Id of second delegate" type="email" class="form-control" required/>
				<br>
						
				<b>Contact No.<span style="color:#e03215;">*</span></b>
				<input name="seccontact" placeholder="Mobile no. (10 digit) of second delegate" type="text" maxlength="10" class="form-control" required/>
				<br>
				
				<b><span>Gender</span></b><br>
				<select name="secgender" class="form-control" required>
				<option selected value="m">Male</option>
				<option value="f">Female</option>
				<option value="o">Other</option>
				</select>
				<br>
				
				<b>Address<span style="color:#e03215;">*</span></b>
				<input name="secaddress" placeholder="Address" type="text" class="form-control" required/>
				<br>
				
				<b>Nationality <span style="color:#e03215;">*</span></b>
				<input name="secnation" placeholder="Nationality of second delegate" type="text" class="form-control" required/>
				<br>
				
				<b>Name of Institute<span style="color:#e03215;">*</span></b>
				<input name="seccollege" placeholder="School / College of second delegate" type="text" class="form-control" required/>
				<br>
						
				<b>Course/Stream<span style="color:#e03215;">*</span></b>
				<input name="seccourse" placeholder="Course/Stream of second delegate" type="text" class="form-control" required/>
				<br>	
				
				<b>Year of Study/Class<span style="color:#e03215;">*</span></b>
				<input name="secsyear" placeholder="Year of Study of second delegate" type="text" class="form-control" required/>
				<br>	
				
				<b>Second delegate&apos;s MUN CV (FORMAT: Sl No.- Name of MUN- Committee- Country- Awards)<span style="color:#e03215;">*</span></b>
				<textarea type="text" class="form-control" name="seccv" required></textarea><br />
				
				<b><span>Accommodation Required?(for second delegate)<span style="color:#e03215;">*</span></span></b><br>
				<select name="secaccom" class="form-control" required>
					<option value="no" selected>No</option>
					<option value="yes">Yes</option>
				</select>
				<br /><br />
				
				<button type="button" id="rem-del" class="btn btn-danger">Remove second delegate</button><hr />
			</div>
			
			
			<div class="form-group">
			<br />
			<b><span>Council Preference 1 <span style="color:#e03215;">*</span></span></b><br>
			<select  name="preference1" class="form-control" required>
				<option value="UNDP" selected>UNDP</option>
				<option value="UNGA" >UNGA</option>
				<option value="UNEP" >UNEP</option>
				<option value="UNODC" >UNODC</option>
				<option value="UNESCO" >UNESCO</option>
				<option value="UNGA-DISEC" >UNGA-DISEC</option>
				<option value="UNGA-SPECPOL" >UNGA-SPECPOL</option>
				<option value="ECOSOC" >ECOSOC</option>
				<option value="WHO" >WHO</option>
				<option value="UNHRC" >UNHRC</option>
				<option value="CCC" >Continuous Crisis Commitee</option>
				<option value="UNSC" >UNSC</option>
				<option value="IP" >International Press</option>
				<option value="AC" >Ambassadors Committee</option>
			</select><br />
			
			<b>Country Preference 1 for Council Preference 1<span style="color:#e03215;">*</span></b>
			<input name="count11" placeholder="Country Preference 1" class="form-control" required type="text"/>
			<br>
				
			<b>Country Preference 2 for Council Preference 1<span style="color:#e03215;">*</span></b>
			<input name="count12" placeholder="Country Preference 2" class="form-control" required type="text"/>
			<br>
				
			<b><span>Council Preference 2 <span style="color:#e03215;">*</span></span></b><br>
			<select  name="preference2" class="form-control" required>
				<option value="UNDP" selected>UNDP</option>
				<option value="UNGA" >UNGA</option>
				<option value="UNEP" >UNEP</option>
				<option value="UNODC" >UNODC</option>
				<option value="UNESCO" >UNESCO</option>
				<option value="UNGA-DISEC" >UNGA-DISEC</option>
				<option value="UNGA-SPECPOL" >UNGA-SPECPOL</option>
				<option value="ECOSOC" >ECOSOC</option>
				<option value="WHO" >WHO</option>
				<option value="UNHRC" >UNHRC</option>
				<option value="CCC" >Continuous Crisis Commitee</option>
				<option value="UNSC" >UNSC</option>
				<option value="IP" >International Press</option>
				<option value="AC" >Ambassadors Committee</option>
			</select><br />
				
			<b>Country Preference 1 for Council Preference 2<span style="color:#e03215;">*</span></b>
			<input name="count21" placeholder="Country Preference 1" class="form-control" required type="text"/>
			<br>
				
			<b>Country Preference 2 for Council Preference 2<span style="color:#e03215;">*</span></b>
			<input name="count22" placeholder="Country Preference 2" class="form-control" required type="text"/>
			<br>
			
			<b><span>Council Preference 3 <span style="color:#e03215;">*</span></span></b><br>
			<select  name="preference3" class="form-control" required>
				<option value="UNDP" selected>UNDP</option>
				<option value="UNGA" >UNGA</option>
				<option value="UNEP" >UNEP</option>
				<option value="UNODC" >UNODC</option>
				<option value="UNESCO" >UNESCO</option>
				<option value="UNGA-DISEC" >UNGA-DISEC</option>
				<option value="UNGA-SPECPOL" >UNGA-SPECPOL</option>
				<option value="ECOSOC" >ECOSOC</option>
				<option value="WHO" >WHO</option>
				<option value="UNHRC" >UNHRC</option>
				<option value="CCC" >Continuous Crisis Commitee</option>
				<option value="UNSC" >UNSC</option>
				<option value="IP" >International Press</option>
				<option value="AC" >Ambassadors Committee</option>
			</select><br />
			
			<b>Country Preference 1 for Council Preference 3<span style="color:#e03215;">*</span></b>
			<input name="count31" placeholder="Country Preference 1" class="form-control" required type="text"/>
			<br>
				
			<b>Country Preference 2 for Council Preference 3<span style="color:#e03215;">*</span></b>
			<input name="count32" placeholder="Country Preference 2" class="form-control" required type="text"/>
			<br>
			
			</div>
			
			
			<div class="form-group">
			<br />
				<b><span>You heard about KIIT International MUN through? (Choose Any)<span style="color:#e03215;">*</span></span></b><br>
				<select id="heard" name="heard" class="form-control" required>
				<option value="Social Networking Sites" selected >Social Networking Sites</option>
				<option value="Print Media">Print Media</option>
				<option value="Electronic Media">Electronic Media</option>
				<option value="Campus Ambassador">Campus Ambassador</option>
				<option value="Friends">Friends</option>
				</select>
				<br />
				<input id="hear" name="hear" type="hidden" value="nonca">
				
				<div id="ca">
				<b>Kindly provide the name of the campus ambassador.<span style="color:#e03215;">*</span></b>
				<input  name="ca" placeholder="Name of Campus ambassador you heard from." type="text" class="form-control" required/>
				<br /></div>
				
				<b>Let us know in 50 words your motivation to be a part of KIIT International MUN 2015 as a delegate.<span style="color:#e03215;">*</span></b>
				<textarea name="motivate" placeholder="Your motivation to be a part of KIIT International MUN 2015 as a delegate" type="text" class="form-control"></textarea>

				<br><br>
				<button id="submit-btn" type="submit" class="btn btn-success">Apply</button>
				<button type="reset" class="btn btn-warning">Reset</button>
			</div>
		</form>
		</div>
		<div class="span2"></div>
	 </div><!-- /row-->    
	</div><!-- /.container --> 
  </div> <!-- /.dark-wrapper -->
 
    
 <footer class="light-wrapper text-center">
    <div class="container inner">
      <p>Copyright &copy; KIIT International MUN 2015 | All rights reserved.<br>Developed by: KIIT International MUN Web Team</p>
      <ul class="social gray">
        <li><a href="https://www.twitter.com/kiitmun"><i class="icon-s-twitter"></i></a></li>
        <li><a href="https://www.facebook.com/kiitmun"><i class="icon-s-facebook"></i></a></li>
        <li><a href="https://plus.google.com/+kiitmun"><i class="icon-s-gplus"></i></a></li>
        <li><a href="https://www.instagram.com/instakiitmun"><i class="icon-s-instagram"></i></a></li>
        <li><a href="https://in.linkedin.com/in/kiitmun"><i class="icon-s-linkedin"></i></a></li>
      </ul>
      <!-- /.social --> 
    </div>
    <!-- /.container -->
  </footer>
  <!-- /footer -->
  
</div>
<!--/.body-wrapper--> 
<script src="style/js/jquery.js"></script> 
<script src="style/js/delegateapp.js"></script> <!--custom js to implement button ckick to add form-->
<script src="style/js/bootstrap.min.js"></script> 
<script src="style/js/twitter-bootstrap-hover-dropdown.min.js"></script> 
<script src="style/js/jquery.themepunch.plugins.min.js"></script> 
<script src="style/js/jquery.themepunch.revolution.min.js"></script> 
<script src="style/js/jquery.themepunch.showbizpro.min.js"></script> 
<script src="style/js/jquery.fitvids.js"></script> 
<script src="style/js/jquery.slickforms.js"></script> 
<script src="style/js/jquery.isotope.min.js"></script> 
<script src="style/js/google-code-prettify/prettify.js"></script> 
<script src="style/js/jquery.easytabs.min.js"></script> 
<script src="style/js/jquery.jribbble-0.11.0.ugly.js"></script> 
<script src="style/js/view.min9df2.js?auto"></script> 
<script src="style/js/scripts.js"></script>

<script type="text/javascript" src="switcher/switchstylesheet.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
	$(".changecolor").switchstylesheet( { seperator:"color"} );
});
</script>
</body>
<script type="text/javascript">
 $(document).ready(function(){
 $('#submit-btn').click(function(){
	var url = $(this).attr('action');
	var data = $('#delegate_form').serialize();
	var check=$.ajax({
	type:"post",
	url:"delvalidate.php",
	data:data,
	contentType:"application/x-www-form-urlencoded",
	success: function(responseData, textStatus , jqXHR){
		if(responseData == "OK") {
			$('form').submit();
			}
		else{
			$('#message').html(responseData);
			}
	},
	error:function(textStatus, errorThrown){console.log(errorThrown);}
 });
 return false;
 });
	 
 });//end of document ready
 </script>
</html>