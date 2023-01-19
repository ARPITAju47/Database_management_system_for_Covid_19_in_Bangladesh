<?php
include("config.php");
     if(isset($_POST['Submit'])){
         $Hos_id=$_POST['Hos_id'];
         $Hos_name=$_POST['Hos_name'];
         $Hos_add=$_POST['Hos_add'];
         $District=$_POST['District'];
         $Hos_phn=$_POST['Hos_phn'];
         $result=mysqli_query($mysqli, "INSERT into hospital values('$Hos_id', '$Hos_name', '$Hos_add', '$District', '$Hos_phn')");
         if($result){
             header("location:hospital.php");
         }
         else{
             echo "Failed";
         }
     }
?>