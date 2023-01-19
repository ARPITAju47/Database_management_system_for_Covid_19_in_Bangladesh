<?php
include("config.php");
error_reporting(0);
$Pat_id=$_GET['Pat_id'];
$Admit_date=$_GET['Admit_date'];
$Doc_id=$_GET['Doc_id'];
$Room_no=$_GET['Room_no'];
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
<center><h1>Medical_info</h1></center>
        
        <form action="" method="GET">
    <table width="50%" border="0">
 <tbody>
 <tr>
            <td>Pat_id</td>
            <td><input type="number" value= "<?php echo "$Pat_id" ?>" name="Pat_id"></td>
            </tr>
            <tr>
            <td>Admit_date</td>
            <td><input type="text" value= "<?php echo "$Admit_date" ?>" name="Admit_date"></td>
            </tr>
            <tr>
            <td>Doc_id</td>
            <td><input type="number" value= "<?php echo "$Doc_id" ?>" name="Doc_id"></td>
            </tr>
            <tr>
            <td>Room_no</td>
            <td><input type="number" value= "<?php echo "$Room_no" ?>" name="Room_no"></td>
            </tr>
            <tr>
            <td></td>
            <<td><input type="submit" name="Submit"></td>  
        </form>
        </body>
        </html>

        <?php
        if($_GET['Submit']){
            $Pat__id=$_GET['Pat_id'];
            $Admit__date=$_GET['Admit_date'];
            $Doc__id=$_GET['Doc_id'];
            $Room__no=$_GET['Room_no'];
            $query="UPDATE Medical_info SET Doc_id='$Doc__id', Pat_id='$Pat__id',Admit_date='$Admit__date', Room_no='$Room__no' where Pat_id='$Pat__id'";
            $result=mysqli_query($mysqli,$query);
            if($result){
                echo "<script>alert('Record Updated')</script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; url=http://localhost/php/mdical_info.php">
                <?php
            }
            else{
                echo "Failed to update record";

            }
        }
        ?>