<?php
include("config.php");
error_reporting(0);
$Doc_id=$_GET['Doc_id'];
$Doc_name=$_GET['Doc_name'];
$Doc_phn=$_GET['Doc_phn'];
$Email=$_GET['Email'];
$Availability=$_GET['Availability'];
$Hos_id=$_GET['Hos_id'];
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
<center><h1>Doctor</h1></center>
        
        <form action="" method="GET">
    <table width="50%" border="0">
 <tbody>
 <tr>
            <td>Doc_id</td>
            <td><input type="number" value= "<?php echo "$Doc_id" ?>" name="Doc_id"></td>
            </tr>
            <tr>
            <td>Doc_name</td>
            <td><input type="text" value= "<?php echo "$Doc_name" ?>" name="Doc_name"></td>
            </tr>
            <tr>
            <td>Doc_phn</td>
            <td><input type="tel" pattern="[0-9]{11}" value= "<?php echo "$Doc_phn" ?>" name="Doc_phn"></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><input type="text" value= "<?php echo "$Email" ?>" name="Email"></td>
            </tr>
            <tr>
            <td>Availability</td>
            <td><input type="text" value= "<?php echo "$Availability" ?>" name="Availability"></td>
            </tr>
            <tr>
            <td>Hos_id</td>
            <td><input type="number" value= "<?php echo "$Hos_id" ?>" name="Hos_id"></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="submit" name="submit"></td>  
</tr></tbody></table> 
        
 
        </form>
        </body>
        </html>

        <?php
    
        if($_GET['submit']){
            echo  1;
            $Doc__id=$_GET['Doc_id'];
            $Doc__name=$_GET['Doc_name'];
            $Doc__phn=$_GET['Doc_phn'];
            $Email_=$_GET['Email'];
            $Availability_=$_GET['Availability'];
            $Hos__id=$_GET['Hos_id'];
            $query="UPDATE Doctor SET Doc_id='$Doc__id', Doc_name='$Doc__name',Doc_phn='$Doc__phn', Email='$Email_', Availability='$Availability_', Hos_id='$Hos__id' where Doc_id='$Doc__id'";
            $result=mysqli_query($mysqli,$query);
            if($result){
                echo "<script>alert('Record Updated')</script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; url=http://localhost/php/doctor.php">
                <?php
            }
            else{
                echo "Failed to update record";

            }
        }
        ?>