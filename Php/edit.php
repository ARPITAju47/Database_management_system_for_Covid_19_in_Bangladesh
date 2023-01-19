<?php
include("config.php");
error_reporting(0);
$Hos_id=$_GET['Hos_id'];
$Hos_name=$_GET['Hos_name'];
$Hos_add=$_GET['Hos_add'];
$District=$_GET['District'];
$Hos_phn=$_GET['Hos_phn'];
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
<center><h1>Hospital</h1></center>
        
        <form action="" method="GET">
    <table width="50%" border="0">
 <tbody>
 <tr>
            <td>Hos_id</td>
            <td><input type="number" value="<?php echo "$Hos_id" ?>" name="Hos_id"></td>
            </tr>
            <tr>
            <td>Hos_name</td>
            <td><input type="text" value="<?php echo "$Hos_name" ?>" name="Hos_name"></td>
            </tr>
            <tr>
            <td>Hos_add</td>
            <td><input type="text" value="<?php echo "$Hos_add" ?>" name="Hos_add"></td>
            </tr>
            <tr>
            <td>District</td>
            <td><input type="text" value="<?php echo "$District" ?>" name="District"></td>
            </tr>
            <tr>
            <td>Hos_phn</td>
            <td><input type="number" value="<?php echo "$Hos_phn" ?>" name="Hos_phn"></td>
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
            $Hos__id=$_GET['Hos_id'];
            $Hos__name=$_GET['Hos_name'];
            $Hos__add=$_GET['Hos_add'];
            $District_=$_GET['District'];
            $Hos__phn=$_GET['Hos_phn'];
            $query="UPDATE Hospital SET Hos_id='$Hos__id',Hos_name='$Hos__name', Hos_add='$Hos__add', District='$District_',Hos_phn='$Hos__phn' where Hos_id='$Hos__id'";
            $result=mysqli_query($mysqli,$query);
            if($result){
                echo "<script>alert('Record Updated')</script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; url=http://localhost/php/hospital.php">
                <?php
            }
            else{
                echo "Failed to update record";

            }
        }
        ?>