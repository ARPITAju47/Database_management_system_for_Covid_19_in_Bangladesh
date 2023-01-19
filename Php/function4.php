<?php
include("config.php");
if(isset($_POST['Submit'])){
    $Pat_id=$_POST['Pat_id'];
    $Admit_date=$_POST['Admit_date'];
    $Doc_id=$_POST['Doc_id'];
                $Room_no=$_POST['Room_no'];
                
                
                $result=mysqli_query($mysqli, "INSERT into medical_info values('$Pat_id', '$Admit_date', '$Doc_id', '$Room_no')");
                if($result){
                    header("location:mdical_info.php");
                }
                else{
                    echo "Failed";
                }
            }
?>