<!--insert form 1-->
<!DOCTYPE html>
<?php
 include("config.php");
 ?>
<html>
    <head>
    <meta charset="utf-8">
    <style>
body {background-color: #3500D3;
    text-align: center;}
h1   {
    width: 25%;
    background-color: #060032;
    text-align:center;
    color: white;
    padding: 13px 40px;
    border-radius: 12px;
}
p    {color: red;}
table {
    margin-left: auto;
    margin-right: auto;
  text-align:center;
  background-color: black;
  color: white;
  }
  input[type=submit] {
    text-align:center; 
  width: 20%;
  box-sizing: border-box;
  border: 4px solid;
  border-radius: 12px;
  font-size: 26px;
  background-color: black;
 color: white;
  
}


</style>
        <title></title>
    </head>
    <body>
        <!--Hospita Table-->
        <center><h1>Hospital</h1></center>
       
        <table border="2" cellspacing="7" class='table'>
               <tr>
                <th>Hos_id</th>
                <th>Hos_name</th>
                <th>Hos_add</th>
                <th>District</th>
                <th>Hos_phn</th>
                <th colspan="2">Operation</th>
            </tr>
           <?php
            $result=mysqli_query($mysqli,"SELECT * from hospital ORDER BY Hos_id ASC")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "
    <tr>
     <td>".$res['Hos_id']."</td>
     <td>".$res['Hos_name']."</td>
     <td>".$res['Hos_add']."</td>
     <td>".$res['District']."</td>
     <td>".$res['Hos_phn']."</td>
     <td><a href='edit.php?Hos_id=$res[Hos_id]&Hos_name=$res[Hos_name]&Hos_add=$res[Hos_add]&District=$res[District]&Hos_phn=$res[Hos_phn]'>Edit</td>
     <td><a href='delete.php?Hos_id=$res[Hos_id]'>Delete</td>
     </tr>";
    }
?>
</table>
<form  action="edit11.php" method='post'>
        <input type="submit" name="Submit" value="Insert">   
        </form>
        <p> </p>
        <div class="text-center"> 
         <form method='get' action="login-dev2.php">
         <input type='submit' name='Submit' value="Return">
         </form>
</body>
</html>