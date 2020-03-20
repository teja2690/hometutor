<!--******************************************************************************************************************************************************-->
<!--Objective:Code to implement home page portal-->
<!--Author:Tejbahadur-->
<!--Date:04/04/2018-->
<!--******************************************************************************************************************************************************-->
<?php
session_start();
$NAME=$_POST['cname'];
$DOB=$_POST['dob'];
$GENDER=$_POST['gender'];
$QUALIFICATION=$_POST['qualification'];
$SUBJECT=$_POST['course'];
$AADHAR=$_POST['aadhar'];	 
$STATION=$_POST['station'];
$ADDRESS=$_POST['comment'];
$email1=$_SESSION['sess_user'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hometutor');

$sql="INSERT INTO completedetails(studentName,dob,gender,qualification,subject,aadharNo,station,address,email1) values('$NAME','$DOB','$GENDER','$QUALIFICATION','$SUBJECT','$AADHAR','$STATION','$ADDRESS','$email1')"; 

     //  $results=mysqli_query($con,$sql);
       if (mysqli_query($con, $sql)) {
	        $_SESSION['sess_user']=$email1;
            echo "<script>
                   window.location.href='studentpage.php';
                   alert('successfully! Registration completed');
                  </script>";

          }
          else {
             echo "Error: " . $sql . "<br>" . mysqli_error($con);
          }
		
 
//connection closed
mysqli_close ($con);
?>