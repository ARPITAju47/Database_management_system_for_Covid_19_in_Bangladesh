<?php
include("config.php");
            if(isset($_POST['Submit'])){
                $Pat_id=$_POST['Pat_id'];
                $Name=$_POST['Name'];
                $Pat_add=$_POST['Pat_add'];
                $Pat_phn=$_POST['Pat_phn'];
                $Gender=$_POST['Gender'];
                $Blood_grp=$_POST['Blood_grp'];
                $Age=$_POST['Age'];
                $result=mysqli_query($mysqli, "INSERT into Patient values('$Pat_id', '$Name', '$Pat_add', '$Pat_phn', '$Gender', '$Blood_grp', '$Age')");
                if($result){
                    header("location:patient.php");
                }
                else{
                    echo "Failed";
                }
            }
            ?>