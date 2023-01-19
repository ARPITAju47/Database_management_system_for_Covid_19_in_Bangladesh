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
    <!--Medical_info Table-->


<center><h1>Medical_info</h1></center>
        <table border="2" cellspacing="7" class='table'>
               <tr>
                <th>Pat_id</th>
                <th>Admit_date</th>
                <th>Doc_id</th>
                <th>Room_no</th>
                <th colspan="2">Operation</th>

            </tr>
            <?php
            $result=mysqli_query($mysqli,"SELECT * from Medical_info ORDER BY Pat_id ASC")  or die( mysqli_error($mysqli)) ;
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "
    <tr>
    <td>".$res['Pat_id']."</td>
    <td>".$res['Admit_date']."</td>
     <td>".$res['Doc_id']."</td>
     <td>".$res['Room_no']."</td>
     <td><a href='edit4.php?Pat_id=$res[Pat_id]&Admit_date=$res[Admit_date]&Doc_id=$res[Doc_id]&Room_no=$res[Room_no]'>Edit</td>
     <td><a href='delete4.php?Pat_id=$res[Pat_id]'>Delete</td>

     </tr>";
}
?>
</table>
<form  action="edit41.php" method='post'>
        <input type="submit" name="Submit" value="Insert">   
        </form>
        <p> </p>
        <div class="text-center"> 
         <form method='get' action="login-dev2.php">
         <input type='submit' name='Submit' value="Return">
         </form>