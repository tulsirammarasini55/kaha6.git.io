<?php
$conn =mysqli_connect('localhost','root');
mysqli_select_db($conn, 'ajax');
$fname=$_POST['fname'];
$username1=$_POST['username1'];
$password1=$_POST['password1'];

extract($_POST);
if(isset($_POST['submit']))
{
	$q="insert into register(Fname, Username, Password) values('$fname',
	'$username', $password')";
	$query =mysqli_query($conn,$q);
	header('location:index.php');
}
?>