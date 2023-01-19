<?php
include("config.php");
error_reporting(0);
$Pat_id=$_GET['Pat_id'];
$Ward_id=$_GET['Ward_id'];
$Hos_id=$_GET['Hos_id'];
$Status=$_GET['Status'];
$Vaccine=$_GET['Vaccine'];
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
<center><h1>Covid_ward</h1></center>
        
        <form action="" method="GET">
    <table width="50%" border="0">
 <tbody>
 <tr>
            <td>Pat_id</td>
            <td><input type="number" value= "<?php echo "$Pat_id" ?>" name="Pat_id"></td>
            </tr>
            <tr>
            <td>Ward_id</td>
            <td><input type="number" value= "<?php echo "$Ward_id" ?>" name="Ward_id"></td>
            </tr>
            <tr>
            <td>Hos_id</td>
            <td><input type="number" value= "<?php echo "$Hos_id" ?>" name="Hos_id"></td>
            </tr>
            <tr>
            <td>Status</td>
            <td><input type="text" value= "<?php echo "$Status" ?>" name="Status"></td>
            </tr>
            <tr>
            <td>Vaccine</td>
            <td><input type="text" value= "<?php echo "$Vaccine" ?>" name="Vaccine"></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="submit" name="Submit"> </td>  

 </tr>
        </tbody></table>
        </form>
        </body>
        </html>

        <?php
        if($_GET['Submit']){
            $Pat__id=$_GET['Pat_id'];
            $Ward__id=$_GET['Ward_id'];
            $Hos__id=$_GET['Hos_id'];
            $Status_=$_GET['Status'];
            $Vaccine_=$_GET['Vaccine'];
            $query="UPDATE Covid_ward SET Pat_id='$Pat__id', Ward_id='$Ward__id',Hos_id='$Hos__id', Status='$Status_', Vaccine='$Vaccine_' where Pat_id='$Pat__id'";
            $result=mysqli_query($mysqli,$query);
            if($result){
                echo "<script>alert('Record Updated')</script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; url=http://localhost/php/covid_ward.php">
                <?php
            }
            else{
                echo "Failed to update record";

            }
        }
        ?>