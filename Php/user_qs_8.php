<?php
 include("config.php");
 $a1=$_GET['subject'];
 
 ?>
<html>
    <head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="style.css">
        <title></title>
        <style>
        
            body {
    text-align: center;
}
form {
    display: inline-block;
}
        
        </style>
    </head>
    <h8></br></h8>
        <h1 class='head'>Overall result for <?php echo "$a1";?></h1>
    <body>

    <?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='$a1'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Covid_19 Patients : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='$a1' and Status='Recovered'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Cured Patients : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='$a1' and Status='In treatment'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Patients under treatment: ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='$a1'  and Status='Died'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Died Patients : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='$a1' and Vaccine='Done'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Given vaccines : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='$a1' and Vaccine='Waiting'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total neeeded vaccines : ". $res['count']."</h3>";
}
?>