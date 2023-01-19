<?php
include("config.php");
if(isset($_POST['Submit'])){
                $Doc_id=$_POST['Doc_id'];
                $Doc_name=$_POST['Doc_name'];
                $Doc_phn=$_POST['Doc_phn'];
                $Email=$_POST['Email'];
                $Availability=$_POST['Availability'];
                $Hos_id=$_POST['Hos_id'];
                
                $result=mysqli_query($mysqli, "INSERT into doctor values('$Doc_id', '$Doc_name', '$Doc_phn', '$Email', '$Availability', '$Hos_id')");
                if($result){
                    header("location:doctor.php");
                }
                else{
                    echo "Failed";
                }
            }
?>