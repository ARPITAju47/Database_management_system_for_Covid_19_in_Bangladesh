<?php
include("config.php");
if(isset($_POST['Submit'])){
    $Pat_id=$_POST['Pat_id'];
    $Ward_id=$_POST['Ward_id'];
    $Hos_id=$_POST['Hos_id'];
                $Status=$_POST['Status'];
                $Vaccine=$_POST['Vaccine'];
                
                $result=mysqli_query($mysqli, "INSERT into covid_ward values('$Pat_id', '$Ward_id', '$Hos_id', '$Status', '$Vaccine')");
                if($result){
                    header("location:covid_ward.php");
                }
                else{
                    echo "Failed";
                }
            }
?>