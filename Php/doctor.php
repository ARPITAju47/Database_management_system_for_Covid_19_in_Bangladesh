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

</style>
        <title></title>
    </head>

    <!--Doctor Table-->


<center><h1>Doctor</h2></center>

<table border="2" cellspacing="7" class='table'>
       <tr>
        <th>Doc_id</th>
        <th>Doc_name</th>
        <th>Doc_phn</th>
        <th>Email</th>
        <th>Availability</th>
        <th>Hos_id</th>
        <th colspan="2">Operation</th>

    </tr>
    <?php
    $result=mysqli_query($mysqli,"SELECT * from Doctor ORDER BY Doc_id ASC")  or die( mysqli_error($mysqli)) ;
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "
<tr>
<td>".$res['Doc_id']."</td>
<td>".$res['Doc_name']."</td>
<td>".$res['Doc_phn']."</td>
<td>".$res['Email']."</td>
<td>".$res['Availability']."</td>
<td>".$res['Hos_id']."</td>


<td><a href='edit3.php?Doc_id=$res[Doc_id]&Doc_name=$res[Doc_name]&Doc_phn=$res[Doc_phn]&Email=$res[Email]&Availability=$res[Availability]&Hos_id=$res[Hos_id]'>Edit</td>
<td><a href='delete3.php?Doc_id=$res[Doc_id]'>Delete</td>

</tr>";
}
?>
</table>
<form action="edit31.php" method='post'>
<input type="submit" name="Submit" value="Insert">   
</form>
<p> </p>
        <div class="text-center"> 
         <form method='get' action="login-dev2.php">
         <input type='submit' name='Submit' value="Return">
         </form>