<?php
 include("config.php");

 $a=$_GET['subject'];
 ?>
<html>
    <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title></title>
        <h2 class='head'>Patient Details</h2>
    </head>
    <body>
    <table border="2" cellspacing="7" class="table">
               <tr>
                <th>Pat_id</th>
                <th>Pat_add</th>
                <th>Name</th>
                <th>Pat_phn</th>
                <th>Gender</th>
                <th>Blood_grp</th>
                <th>Age</th>
            </tr>
            <?php
            $result=mysqli_query($mysqli,"SELECT * from medical_info inner join patient using(Pat_id) where Doc_id= $a")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "
    <tr>
     <td>".$res['Pat_id']."</td>
     <td>".$res['Pat_add']."</td>
     <td>".$res['Name']."</td>
     <td>".$res['Pat_phn']."</td>
     <td>".$res['Gender']."</td>
     <td>".$res['Blood_grp']."</td>
     <td>".$res['Age']."</td>
     </tr>";
    }
     ?>
</table>


<h2 class='head'>Patients in Treatment<h2>
<table border="2" cellspacing="7" class="table">
               <tr>
                <th>Pat_id</th>
                <th>Hos_id</th>
                <th>Room_no</th>
                <th>Vaccine</th>   
            </tr>
            <?php
            $result=mysqli_query($mysqli,"SELECT * from medical_info inner join Covid_ward using(Pat_id) where Medical_info.Doc_id= $a and Covid_ward.Status='In treatment'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "
    <tr>
     <td>".$res['Pat_id']."</td>
     <td>".$res['Hos_id']."</td>
     <td>".$res['Room_no']."</td>
     <td>".$res['Vaccine']."</td>
     </tr>";
    }
     ?>
</table>


<h2 class='head'>Released Patients<h2>
<table border="2" cellspacing="7" class="table">
               <tr>
                <th>Pat_id</th>
                <th>Hos_id</th>
                <th>Room_no</th>
                <th>Vaccine</th>   
            </tr>
            <?php
            $result=mysqli_query($mysqli,"SELECT * from medical_info inner join Covid_ward using(Pat_id) where Medical_info.Doc_id= $a and Covid_ward.Status='Recovered'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "
    <tr>
     <td>".$res['Pat_id']."</td>
     <td>".$res['Hos_id']."</td>
     <td>".$res['Room_no']."</td>
     <td>".$res['Vaccine']."</td>
     </tr>";
    }
     ?>
</table>

<h2 class='head'>Died Patients<h2>
<table border="2" cellspacing="7" class="table">
               <tr>
                <th>Pat_id</th>
                <th>Hos_id</th>
                <th>Room_no</th>
                <th>Vaccine</th>   
            </tr>
            <?php
            $result=mysqli_query($mysqli,"SELECT * from medical_info inner join Covid_ward using(Pat_id) where Medical_info.Doc_id= $a and Covid_ward.Status='Died'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "
    <tr>
     <td>".$res['Pat_id']."</td>
     <td>".$res['Hos_id']."</td>
     <td>".$res['Room_no']."</td>
     <td>".$res['Vaccine']."</td>
     </tr>";
    }
     ?>
</table>


<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM medical_info inner join patient using(Pat_id) where Doc_id= $a")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Your total patients : ". $res['count']."</h3>";
}
?>

<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward  where Covid_ward.Status='In treatment' and Hos_id=any(SELECT Hos_id from Covid_ward inner join Medical_info using(Pat_id) where Doc_id=$a)")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Number of total current patients : ". $res['count']."</h3>";
}
?>

<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward  where Covid_ward.Status='Died' and Hos_id=any(SELECT Hos_id from Covid_ward inner join Medical_info using(Pat_id) where Doc_id=$a)")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Number of total Dead patients : ". $res['count']."</h3>";
}
?>

<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward  where Covid_ward.Vaccine='Done' and Hos_id=any(SELECT Hos_id from Covid_ward inner join Medical_info using(Pat_id) where Doc_id=$a)")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Vaccine given : ". $res['count']."</h3>";
}
?>

<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward  where Covid_ward.Vaccine='Waiting' and Hos_id=any(SELECT Hos_id from Covid_ward inner join Medical_info using(Pat_id) where Doc_id=$a)")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Vaccine needed : ". $res['count']."</h3>";
}
?>

</body>
</html>