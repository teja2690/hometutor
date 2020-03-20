<!--******************************************************************************************************************************************************-->
<!--Home page code-->
<!--Author:uttam das-->
<!--Date:02/04/2018-->
<!--******************************************************************************************************************************************************-->

<?php
    session_start();
    $type=$_POST['type'];
	$email=$_POST['Email'];
	$pass=$_POST['Password'];
    echo $type;
    echo $email;
    echo $pass;

	$conn=mysqli_connect('localhost','root','') or die(mysql_error());
    // Selecting Database 
    $db = mysqli_select_db($conn, 'hometutor');
    
	$sql="SELECT * FROM signup1 WHERE email='$email' AND password='$pass' AND type='$type'";
    
    $results = mysqli_query($conn, $sql);
    if(mysqli_num_rows($results)>0)
	{
    if (mysqli_query($conn, $sql)) {
            echo "You are logged in ";
            
	        $_SESSION['sess_user']=$email;
	        if (strcmp($type,'student')==1) {
                /* Redirect browser */
                header("Location: tutorpage.php");
              } 
          else {
              /* Redirect browser */
	        header("Location: studentpage.php");
    
            }
           
          }
          else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
    }

?>
