<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>KIIT Int. MUN | OC Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="OC Portal Kiit Int. MUN">
<meta name="keywords" content="kiitmun,sushant sagar">
<meta name="author" content="sushant sagar">
<link rel="shortcut icon" type="image/x-icon" href="style/images/favicon.png" />
<link href="style/css/bootstrap.css" rel="stylesheet">
<link href="style/css/settings.css" rel="stylesheet">
<link href="style/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link href="style/css/color/green.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="style/type/fontello.css" rel="stylesheet">
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
   <!-- .navbar --></div>
  <div class="dark-wrapper offset">
    <div class="section-head">
      <div class="container">
        <h1>OC Portal Homepage</h1>
      </div>
      <!-- /.container --> 
    </div>
    <!-- /.section-head -->
    <div class="container inner" style="text-align:left;">
 
	<div class="span2"></div>
	<div class="span8">
	<center><button><a href="addnews.php">Add news to the portal</a></button><center>
	<button><a href="portal.php">Go back</a></button><center><br><br>
	<table>
	<thead>
		<th>name</th>
		<th>email</th>
		<th>phone</th>
		<th>department</th>
	<thead>
	<tbody>
	<?php
		require_once 'connect.php';
		$query = 'SELECT  fname,lname,email,phno,dept FROM ocdetails ORDER BY dept desc';
		$sth = $dbh->prepare($query);
		$excute=$sth->execute();
		if(! $excute )
		{
			echo "<h3>Unable to fetch news from the internet.</h3>";
			exit;
		} 
			$result=$sth->fetchall();
			foreach($result as $row){
						echo'<tr>
								<td>'.$row['fname'].' '.$row['lname'].'</td>
								<td>'.$row['email'].'</td>
								<td>'.$row['phno'].'</td>
								<td>'.$row['dept'].'</td>
							</tr>';
					}
	?>
	</tbody>
	</table>
	</div>
	<div class="span2"></div>
	
	
    <!-- /.container --> 
  </div>
  <!-- /.dark-wrapper -->
  <footer class="light-wrapper text-center">
    <div class="container inner">
      <p>Copyright &copy; KIIT International MUN 2015 | All rights reserved.<br>Developed by: Sushant Sagar</p>
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
</html>