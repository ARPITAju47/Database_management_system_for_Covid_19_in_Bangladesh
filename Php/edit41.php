<!DOCTYPE html>
<?php
 include("config.php");
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
    <form action="function4.php" method="POST">
    <table width="50%" border="0">
 <tbody>
 <tr>
            <td>Pat_id</td>
            <td><input type="number" name="Pat_id"></td>
            </tr>
            <tr>
            <td>Admit_date</td>
            <td><input type="text" name="Admit_date"></td>
            </tr>
            <tr>
            <td>Doc_id</td>
            <td><input type="number" name="Doc_id"></td>
            </tr>
            <tr>
            <td>Room_no</td>
            <td><input type="number" name="Room_no"></td>
            </tr>
            <tr>
            <td></td>
            <<td><input type="submit" name="Submit"></td>  
        </form>

 </tr>
        </tbody></table>
        </form>

  
    </body>

    </html>