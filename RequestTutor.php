<!--******************************************************************************************************************************************************-->
<!--request student code-->
<!--Author:Ajit Kumar BAitha-->
<!--Date:08/04/2018-->
<!--******************************************************************************************************************************************************-->

<?php
    session_start();
	$email=$_SESSION['sess_user'];
	
    

	$conn=mysqli_connect('localhost','root','') or die(mysql_error());
    // Selecting Database 
    $db = mysqli_select_db($conn, 'hometutor');
    
    $query="select station from completedetails where email1='$email'";
    $results = mysqli_query($conn, $query);
    $station=mysqli_fetch_array($results);
    $station1=$station['station'];
    
	$sql="SELECT * FROM complete_tutor_details WHERE tstation='$station1'"; 
    $results1 = mysqli_query($conn, $sql);
    
    $query2="select subject,qualification from completedetails where email1='$email'";
    $results2 = mysqli_query($conn, $query2);
    $subject=mysqli_fetch_array($results2);
    $subject1=$subject['subject'];
    $class1=$subject['qualification'];
    
    $sql5="SELECT CourseName,CourseFee FROM course WHERE CourseName='$subject1' AND CourseOfClass='$class1'"; 
    $results3 = mysqli_query($conn, $sql5);
    $CourseName=mysqli_fetch_array($results3);
    $course=$CourseName['CourseName'];
    $fee=$CourseName['CourseFee'];
    $_SESSION['sess_course']=$course;
    $_SESSION['sess_fee']=$fee;
    
    
     
  
         
?>

<!--******************************************************************************************************************************************************-->
<!--Objective:Code to implement home page portal-->
<!--Author:Ajit Kumar Baitha-->
<!--Date:25/03/2018-->
<!--******************************************************************************************************************************************************-->

<!DOCTYPE html>
<html lang="en">
<head>
<title><a href="studentpage.php">Home Tutor</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inspire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" 	href="css/chocolat.css" type="text/css" media="all">
<!--// css -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
	<!-- Popup-Box-JavaScript -->
	<script src="js/modernizr.custom.97074.js"></script>
	<script src="js/jquery.chocolat.js"></script>
	<script type="text/javascript">
		$(function() {
			$('.gallery-grids a').Chocolat();
		});
	</script>
	<!-- //Popup-Box-JavaScript -->
	<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			</script>
	<!-- //start-smoth-scrolling -->
		<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>	
<style>
.dropbtn {
    background-color: #333;
    color: #fff905;
    padding: 12px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    top: 4px;
    left: 1180px;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
		 <div class="dropdown">
         <button class="dropbtn"><?php echo $_SESSION['sess_user']; ?></button>
         <div class="dropdown-content">
         <a href="#">Payment History</a>
         <a href="changePassword.php">Change Password</a>
         <a href="index.html">Logout</a>
         </div>
         </div>
</head>
<body>
	
	<div class="logo-navigation-w3layouts">
		<div class="container">
		<div class="logo-w3">
			<a href="tutorpage.php"><h1><img src="images/logo.png" alt=" " /><span>Home Tutor</span></h1></a>
		</div>
		<div class="navigation agileits w3layouts">
			<nav class="navbar agileits w3layouts navbar-default">
				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
					</button>
				</div>
			</nav>
		</div>
		<div class="clearfix"></div>
		</div>
         </div>
        
	  <br><br>
 <div>
 
                       <center>   <table  id="tblMain" border="1" width="100%" style="cursor: pointer;">
                                        
                                       <tr>
                                        
                                        <th>Name</th> 
                                        <th>Qualification</th> 
                                        <th>subject</th> 
                                        <th>Address</th> 
                                        <th>Course</th>
                                        <th>Course Name</th>
                                        
                                        
                                        
                                        </tr>
                                        
                                        <?php
                                            while($StudentData=mysqli_fetch_array($results1))
                                           {
                                            
                                             echo "<tr>";
                                             echo "<td>".$StudentData['name']."</td>";
                                             echo "<td>".$StudentData['tqualification']."</td>";
                                             echo "<td>".$StudentData['tcourse']."</td>";
                                             echo "<td>".$StudentData['taddress']."</td>";
                                                      echo "<td>".$_SESSION['sess_course']."</td>";
                                                      echo "<td>".$_SESSION['sess_fee']."</td>";
                                             echo "</tr>";
                                           }
                                            
                                        ?>
                                        
                              </table></center>
    
	</div>

       
        
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<div class="contact-w3-agileits" id="contact">
		<div class="container">
			<div class="col-md-5 contact-left-w3ls">
				<h3>Contact info</h3>
				<div class="visit">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Visit us</h4>
						<h5>Room No. 65 , Raman Hostel , teliarganj , allahabad , india , 211004</h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="mail">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Mail us</h4>
						<h5><a href="mailto:info@example.com">ajitbaitha.mnnit@gmail.com</a></h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="call">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Call us</h4>
						<h5>+91 9035294372</h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="visit">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Work hours</h4>
						<h5>Mon-Sat 09:00 AM - 05:00PM</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-7 contact-right-w3l">
				<h3>Leave message</h3>
				<form action="#" method="post">
					<input type="text"  class="name" name="name" placeholder="First Name" required="">
					<input type="text"  class="name" name="name" placeholder="Last Name" required="">
					<input type="text"  class="name" name="name" placeholder="Email" required="">
					<input type="text"  class="name" name="name" placeholder="Subject" required="">
					<textarea placeholder="Your Message" required=""></textarea>
					<input type="submit" value="SEND MESSAGE">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	


</body>
</html>
