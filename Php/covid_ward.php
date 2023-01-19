
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
    <!--Covid_ward Table-->


<center><h1>Covid_ward</h1></center>
        
        <table border="2" cellspacing="7" class='table'>
               <tr>
                 <th>Pat_id</th>
                <th>Ward_id</th>
                <th>Hos_id</th>
                <th>Status</th>
                <th>Vaccine</th>
                <th colspan="2">Operation</th>

            </tr>
            <?php
            $result=mysqli_query($mysqli,"SELECT * from Covid_ward ORDER BY Pat_id ASC")  or die( mysqli_error($mysqli)) ;
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "
    <tr>
    <td>".$res['Pat_id']."</td>
    <td>".$res['Ward_id']."</td>
    <td>".$res['Hos_id']."</td>
     <td>".$res['Status']."</td>
     <td>".$res['Vaccine']."</td>
     <td><a href='edit5.php?Pat_id=$res[Pat_id]&Hos_id=$res[Hos_id]&Ward_id=$res[Ward_id]&Status=$res[Status]&Vaccine=$res[Vaccine]'>Edit</td>
     <td><a href='delete5.php?Pat_id=$res[Pat_id]'>Delete</td>

     </tr>";
}
?>
</table>
<form  action="edit51.php" method='post'>
        <input type="submit" name="Submit" value="Insert">   
        </form>
        <p> </p>
        <div class="text-center"> 
         <form method='get' action="login-dev2.php">
         <input type='submit' name='Submit' value="Return">
         </form>
</body>
    </html>