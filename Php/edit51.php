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
<center><h1>Covid_ward</h1></center>
    <form action="function5.php" method="POST">
    <table width="50%" border="0">
 <tbody>
 <tr>
            <td>Pat_id</td>
            <td><input type="number" name="Pat_id"></td>
            </tr>
            <tr>
            <td>Ward_id</td>
            <td><input type="number" name="Ward_id"></td>
            </tr>
            <tr>
            <td>Hos_id</td>
            <td><input type="number" name="Hos_id"></td>
            </tr>
            <tr>
            <td>Status</td>
            <td><input type="text" name="Status"></td>
            </tr>
            <tr>
            <td>Vaccine</td>
            <td><input type="text" name="Vaccine"></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="submit" name="Submit"> </td> 
</form> 

 </tr>
        </tbody></table>
        </form>

  
    </body>

    </html>