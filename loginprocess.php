

<?php 

$username1=$_POST['username1'] ;
$password1=$_POST['password1'] ;
 $password1 =md5($password1);
 
include'connection.php';
$sql="select *from register where Username='$username1'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
 

  
if ($username1==$row['Username']&&$password1==$row['Password'])

    {	
    	echo "<script> window.alert('  correct username and password'); </script>";
    	echo "<script> window.location='user_profile.php';</script>)";


}



else{
	echo "<script> window.alert(' incorrect username and password'); </script>";
	//echo "<script> window.location='homepage.php';</script>)";
}
?>