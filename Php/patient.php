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
<!--Patient Table-->


<center><h1>Patient</h1></center>
        
        <table border="2" cellspacing="7" class='table'>
               <tr>
                <th>Pat_id</th>
                <th>Pat_add</th>
                <th>Name</th>
                <th>Pat_phn</th>
                <th>Gender</th>
                <th>Blood_grp</th>
                <th>Age</th>
                <th colspan="2">Operation</th>
            </tr>
            <?php
            $result=mysqli_query($mysqli,"SELECT * from Patient ORDER BY Pat_id ASC") or die( mysqli_error($mysqli)) ;
while($res=mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "
    <tr>
     <td>".$res['Pat_id']."</td>
     <td>".$res['Pat_add']."</td>
     <td>".$res['Name']."</td>
     <td>".$res['Pat_phn']."</td>
     <td>".$res['Gender']."</td>
     <td>".$res['Blood_grp']."</td>
     <td>".$res['Age']."</td>
     
     <td><a href='edit2.php?Pat_id=$res[Pat_id]&Name=$res[Name]&Pat_add=$res[Pat_add]&Pat_phn=$res[Pat_phn]&Gender=$res[Gender]&Blood_grp=$res[Blood_grp]&Age=$res[Age]'>Edit</td>
     <td><a href='delete2.php?Pat_id=$res[Pat_id]'>Delete</td>
     </tr>";
}
?>
</table>
<form action="edit21.php" method='post' >
        <input type="submit" name="Submit" value="Insert">   
        </form>
        <p> </p>
        <div class="text-center"> 
         <form method='get' action="login-dev2.php">
         <input type='submit' name='Submit' value="Return">
         </form>

