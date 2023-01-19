<?php
 include("config.php");
 $a=$_GET['subject'];
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
        <h1 class='head'>Overall result for <?php echo "$a";?></h1>
    <body>
    <?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Hospital using(Hos_id) where District='$a'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Covid_19 Patients : ". $res['count']."</h3>";
}
?>
    <?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Hospital using(Hos_id) where Status='In treatment' and District='$a'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Currently in treatment : ". $res['count']."</h3>";
}
?>
 <?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Hospital using(Hos_id) where Status='Recovered' and District='$a'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Number of recoveries : ". $res['count']."</h3>";
}
?>
 <?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Hospital using(Hos_id) where Status='Died' and District='$a'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Number of Deaths : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Hospital using(Hos_id) where Vaccine='Done' and District='$a'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Number of taken Vaccine : ". $res['count']."</h3>";
}
?>

  <?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward inner join Hospital using(Hos_id) where Vaccine='waiting' and District='$a'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Number of needed Vaccine : ". $res['count']."</h3>";
}
?>          
            </body>