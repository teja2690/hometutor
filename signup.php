<!--******************************************************************************************************************************************************-->
<!--Home page code-->
<!--Author:Uttam Das-->
<!--Date:01/04/2018-->
<!--******************************************************************************************************************************************************-->

<?php
session_start();  
$type=$_POST['type'];
$name=$_POST['cname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
// Establishing connection with server..
 $conn = mysqli_connect('localhost','root');

// Selecting Database 
 $db = mysqli_select_db($conn,'hometutor');
 

	   $sql = "insert into signup1(type, name, email, mobile, password)values('$type', '$name', '$email',$mobile, '$password')";
       mysqli_query($conn,$sql);
       if (mysqli_query($conn, $sql)) {
	        $_SESSION['sess_user']=$email;
            echo "<script>
                  window.location.href='tutorpage.php';
                   alert('Congrats!You are registered');
                  </script>";

          }
          else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
		
 
//connection closed
mysqli_close ($conn);
?>