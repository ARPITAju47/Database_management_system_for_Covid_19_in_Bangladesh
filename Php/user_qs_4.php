<?php
 include("config.php");
 $a=$_GET['subject'];
 ?>
<html>
    <head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="style.css">
        <title></title>
        <h1></br></h1>
        <h1></br></h1>
        <h2 class='head'>Available Doctors</h2>
    </head>
    <body>
    <table border="2" cellspacing="7" class="table">
               <tr>
                <th>Doc_id</th>
                <th>Doc_name</th>
                <th>Email</th>
                <th>Availability</th>
            </tr>
            <?php
            $cnt=0;
            $result=mysqli_query($mysqli,"SELECT DISTINCT Doc_id,Doc_name,Email,Availability from Doctor where Hos_id=$a ")  or die( mysqli_error($mysqli));
            while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "
    <tr>
     <td>".$res['Doc_id']."</td>
     <td>".$res['Doc_name']."</td>
     <td>".$res['Email']."</td>
     <td>".$res['Availability']."</td>
     </tr>";
    
    }
     ?>
</table>
