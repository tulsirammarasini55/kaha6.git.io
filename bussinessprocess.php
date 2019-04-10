<?php
session_start();
      if(isset($_POST['submit'])
      {


$district=$_POST['district'];
$palika=$_POST['palika'];
$toll=$_POST['toll'];
$ward_no=$_POST['ward_no'];

 $bname=$_POST['bname'];
 $btype=$_POST['btype'];
 $bcatograized=$_POST['bcatograized'];



     include'connection.php';
      $sql="insert into personel_details(District,Palika, Toll,WardNo)values('$district','$palika','$toll','$ward_no')";

           $sql1="insert into bussiness_details(BussinessName,BussinessTypes, BussinessCatograized)values('$bname','$btype','$bcatograized')";



           $result=mysqli_query($conn,$sql);
           $result1=mysqli_query($conn,$sql1);
           if(!$result && !$result1){
	        echo "<script> window.alert('Data not inserted')</script>";
    //echo "<script> window.location='home.php'; </script>)";
               }
          else{
	              // vcecho "<script> window.alert('you have register successfully registered now login to see your profile')</script>";
	         echo "<script> window.location='viewsite.php'; </script>";
            } 
}
?> 
