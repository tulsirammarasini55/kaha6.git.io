<?php
$server="localhost";
$username="root";
$password="";
$dbname="kaha6.com";

$conn= mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
	echo "Error in database connection";
}
?>			