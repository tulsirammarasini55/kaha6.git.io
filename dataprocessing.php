<?php

$district=$_POST['district'];
$palika=$_POST['palika'];
$ward=$_POST['ward'];
$toll=$_POST['toll'];


include 'connection.php';

$sql="insert into address_details(District,Palika,WardNo,Path)values('$district','$palika' ,'$ward' ,'$toll')";
           $result=mysqli_query($conn,$sql);
           
           if(!$result)
           {
    
    
            echo "<script> window.alert('Data not inserted')</script>";

    
    //echo "<script> window.location='home.php'; </script>)";
               }


          else{
                   //echo "<script> window.alert('you have register successfully registered now login to see your profile')</script>";
             //echo "<script> window.location='user_profile.php'; </script>";
            } 



?>
