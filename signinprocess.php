

<?php 
session_start();



 
 $fname=$_POST['fname'];
 $username1=$_POST['username1'];
 $password1=$_POST['password1'];
 

 $password1= md5($password1);



include'connection.php';

$sql="insert into register(Fname,Username,Password)values('$fname','$username1','$password1')";
//$_SESSION['email']= $email;//user is defined  varable for uname


$result=mysqli_query($conn,$sql);

if(!$result){
	
	
	echo "<script> window.alert('Data not inserted')</script>";

	
    echo "<script> window.location='home.php'; </script>)";
}


else{
	echo "<script> window.alert('you have register successfully registered now login to see your profile')</script>";
	echo "<script> window.location='user_profile1.php'; </script>";
}

?> 
