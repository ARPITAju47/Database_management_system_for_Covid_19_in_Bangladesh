<?php
 include("config.php");
 error_reporting(0);
 $Hos_id=$_GET['Hos_id'];
 $query="Delete from hospital where Hos_id='$Hos_id'";
 $data=mysqli_query($mysqli,$query);
 if($data){
     echo "<font color='green'> Record Has been deleted";
 }
 else{
    echo "<font color='red'> Deletation has been failed";

 }
 ?>