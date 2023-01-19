<?php
 include("config.php");
 $a1=$_GET['subject'];
 $a=explode("-",$a1);
 $l=$a[0];
 $h=$a[1];
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
        <h1 class='head'>Overall result for <?php echo "$a1";?> age range</h1>
    <body>
    <h2 class='head'>Gender : Male</h1>

    <?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='Male' and Age>=$l and Age<=$h")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Covid_19 Patients : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='Male' and Age>=$l and Age<=$h and Status='Recovered'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Cured Patients : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='Male' and Age>=$l and Age<=$h and Status='In treatment'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Patients under treatment: ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='Male' and Age>=$l and Age<=$h and Status='Died'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Died Patients : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='Male' and Age>=$l and Age<=$h and Vaccine='Done'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Given vaccines : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='Male' and Age>=$l and Age<=$h and Vaccine='Waiting'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total neeeded vaccines : ". $res['count']."</h3>";
}
?>


<h1></br</h1>
<h2 class='head'>Gender : Female</h1>

    <?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='Female' and Age>=$l and Age<=$h")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Covid_19 Patients : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='Female' and Age>=$l and Age<=$h and Status='Recovered'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Cured Patients : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='Female' and Age>=$l and Age<=$h and Status='In treatment'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Patients under treatment: ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='Female' and Age>=$l and Age<=$h and Status='Died'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Died Patients : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='Female' and Age>=$l and Age<=$h and Vaccine='Done'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Given vaccines : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Patient using(Pat_id) where Gender='Female' and Age>=$l and Age<=$h and Vaccine='Waiting'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total neeeded vaccines : ". $res['count']."</h3>";
}
?>