<?php
 include("config.php");
 error_reporting(0);
 $Pat_id=$_GET['Pat_id'];
 $query="Delete from patient where Pat_id='$Pat_id'";
 $data=mysqli_query($mysqli,$query);
 if($data){
     echo "<font color='green'> Record Has been deleted";
 }
 else{
    echo "<font color='red'> Deletation has been failed";

 }
 ?>