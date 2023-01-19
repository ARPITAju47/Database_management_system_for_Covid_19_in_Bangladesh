<?php
 include("config.php");
 error_reporting(0);
 $Doc_id=$_GET['Doc_id'];
 $query="Delete from doctor where Doc_id='$Doc_id'";
 $data=mysqli_query($mysqli,$query);
 if($data){
     echo "<font color='green'> Record Has been deleted";
 }
 else{
    echo "<font color='red'> Deletation has been failed";

 }
 ?>