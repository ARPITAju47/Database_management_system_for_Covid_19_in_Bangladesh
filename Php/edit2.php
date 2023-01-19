<?php
include("config.php");
error_reporting(0);
$Pat_id=$_GET['Pat_id'];
$Pat_add=$_GET['Pat_add'];
$Name=$_GET['Name'];
$Pat_phn=$_GET['Pat_phn'];
$Gender=$_GET['Gender'];
$Blood_grp=$_GET['Blood_grp'];
$Age=$_GET['Age'];
?>
<html>
<head>
<title></title>
<style>
body {background-color: black;
    text-align: center;}
    h1   {
    width: 25%;
    
    text-align:center;
    color: white;
    padding: 13px 40px;
    border-radius: 12px;
}
h1   {
    background-color: #9980FA;
    width: 25%;
    text-align:center;
    color: #3500D3;
    border: 2px solid white; 
}
p    {color: red;}
table {
    margin-left: auto;
    margin-right: auto;
  text-align:center;
  background-color: #3500D3;
  color: white;
  font-size: 26px;
  }
  input {
    text-align:center; 
  width: 100%;
  box-sizing: border-box;
  border: 4px solid;
  border-radius: 20px;
  font-size: 26px;
  background-color: black;
 color: #9980FA;
  
}
th {
  height: 70px;
}

</style>
</head>
<body>
    <h3></br></h3>
    <h3></br></h3>
    <h3></br></h3>
<center><h1>Patient</h1></center>
        
        <form action="" method="GET">
    <table width="50%" border="0">
 <tbody>
 <tr>
            <td>Pat_id</td>
            <td><input type="number" value= "<?php echo "$Pat_id" ?>" name="Pat_id"></td>
            </tr>
            <tr>
            <td>Pat_add</td>
            <td><input type="text" value= "<?php echo "$Pat_add" ?>" name="Pat_add"></td>
            </tr>
            <tr>
            <td>Name</td>
            <td><input type="text" value= "<?php echo "$Name" ?>" name="Name"></td>
            </tr>
            <tr>
            <td>Pat_phn</td>
            <td><input type="number" value= "<?php echo "$Pat_phn" ?>" name="Pat_phn"></td>
            </tr>
            <tr>
            <td>Gender</td>
            <td><input type="text" value= "<?php echo "$Gender" ?>" name="Gender"></td>
            </tr>
            <tr>
            <td>Blood_grp</td>
            <td><input type="text" value= "<?php echo "$Blood_grp" ?>" name="Blood_grp"></td>
            </tr>
            <tr>
            <td>Age</td>
            <td><input type="number" value= "<?php echo "$Age" ?>" name="Age"></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="submit" name="Submit"></td>   
        
 </tr>
        </tbody></table>
        </form>
        </body>
        </html>

        <?php
    
        if($_GET['Submit']){
            $Pat__id=$_GET['Pat_id'];
            $Pat__add=$_GET['Pat_add'];
            $Name_=$_GET['Name'];
            $Pat__phn=$_GET['Pat_phn'];
            $Gender_=$_GET['Gender'];
            $Blood__grp=$_GET['Blood_grp'];
            $Age_=$_GET['Age'];
            $query="UPDATE Patient SET Pat_id='$Pat__id', Pat_add='$Pat__add', Name='$Name_',Pat_phn='$Pat__phn', Gender='$Gender_', Blood_grp='$Blood__grp', Age='$Age_' where Pat_id='$Pat__id'";
            $result=mysqli_query($mysqli,$query);
            if($result){
                echo "<script>alert('Record Updated')</script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; url=http://localhost/php/patient.php">
                <?php
            }
            else{
                echo "Failed to update record";

            }
        }
        ?>