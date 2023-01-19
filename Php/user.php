<?php
 include("config.php");
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

<h1 class='head'>Over all result for our Regional<h1>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward ")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Total Covid_19 Patients : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward where status='In treatment'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Currently in treatment Patients : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward where status='Recovered'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Recovered Patients : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward where status='Died'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Dead Patients : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward where Vaccine='Done'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Vaccine taken : ". $res['count']."</h3>";
}
?>
<?php
$result=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM Covid_ward where Vaccine='Waiting'")  or die( mysqli_error($mysqli));
while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<h3 class='head'>Vaccine needed : ". $res['count']."</h3>";
}
?>
        <h6></br></h6>
        <h2 class='head'>Top 5 hospital having maximum Covid recovery</h2>
    </head>
    <body>
    <table border="2" cellspacing="7" class="table">
               <tr>
                <th>Hos_id</th>
                <th>Hos_add</th>
                <th>Hos_phn</th>
                <th>Number_of_recoveries</th>
            </tr>
            <?php
    $b=0;
            $cnt=0;
            $result=mysqli_query($mysqli,"SELECT Hos_id,Hos_add,Hos_phn,count('Pat_id') as Number_of_recoveries from Covid_ward inner join Hospital using(Hos_id) where Covid_ward.Status='Recovered' group by Hos_id order by count(Pat_id) desc;")  or die( mysqli_error($mysqli));
            while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "
    <tr>
     <td>".$res['Hos_id']."</td>
     <td>".$res['Hos_add']."</td>
     <td>".$res['Hos_phn']."</td>
     <td>".$res['Number_of_recoveries']."</td>
    
     </tr>";
     $cnt++;
     if($cnt==5)break;
     
    }
   
     ?>
</table>

<h6></br></h6>

<h2 class='head'>Top 5 area having maximum Covid Patients</h2>

<table border="2" cellspacing="7" class="table">
               <tr>
               <th>District</th>
               <th>Hos_id</th>
                <th>Hos_add</th>
                <th>Hos_phn</th>
                <th>Number_of_Patients</th>
            </tr>
            <?php
            $cnt=0;
            $result=mysqli_query($mysqli,"SELECT District,Hos_id,Hos_add,Hos_phn,count('Pat_id') as Number_of_Patients from Covid_ward inner join Hospital using(Hos_id) group by District order by count(Pat_id) desc;")  or die( mysqli_error($mysqli));
            while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "
    <tr>
    <td>".$res['District']."</td>
     <td>".$res['Hos_id']."</td>
     <td>".$res['Hos_add']."</td>
     <td>".$res['Hos_phn']."</td>
     <td>".$res['Number_of_Patients']."</td>
     </tr>";
     $cnt++;
     if($cnt==5)break;
    }
     ?>
</table>


<h6></br></h6>

<h2 class='head'>Total number of patient taken Vaccine in each hospital</h2>

<table border="2" cellspacing="7" class="table">
               <tr>
               <th>Hos_id</th>
                <th>Hos_add</th>
                <th>Hos_phn</th>
                <th>Vaccine_Taken</th>
            </tr>
            <?php
            
            $result=mysqli_query($mysqli,"SELECT Hos_id,Hos_add,Hos_phn,count('Vaccine') as Vaccine_Taken from Covid_ward inner join Hospital using(Hos_id) where Covid_ward.Vaccine='Done' group by Hos_id")  or die( mysqli_error($mysqli));
            while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "
    <tr>
     <td>".$res['Hos_id']."</td>
     <td>".$res['Hos_add']."</td>
     <td>".$res['Hos_phn']."</td>
     <td>".$res['Vaccine_Taken']."</td>
     </tr>";
     
    }
     ?>
</table>

<h2 class='head'>Enter hospital id to see available doctors who works there</h2>

<form  name="form" action="user_qs_4.php" method="GET">
   
   <input text-align='center' type="number" name="subject" id="subject" placeholder="Hos_id">
  <input type="submit" Value="See Result">  
         
</form>

<h2 class='head'>Enter Doctor name to see other doctors who works there</h2>

<form  name="form" action="user_qs_5.php" method="GET">
   
   <input text-align='center' type="text" name="subject" id="subject" placeholder="Dotor_name">
  <input type="submit" Value="See Result">  
         
</form>

<h2 class='head'>Search result for an area </h2>

<form  name="form" action="user_qs_6.php" method="GET">
   
   <input text-align='center' type="text" name="subject" id="subject" placeholder="Area Name">
  <input type="submit" Value="Search">  
         
</form>

<h2 class='head'>Patient overview for a perticular Gender</h2>

<form  name="form" action="user_qs_8.php" method="GET">
   
   <input text-align='center' type="text" name="subject" id="subject" placeholder="Gender">
  <input type="submit" Value="Search">  
         
</form>
<h2 class='head'>Patient overview within a perticular age range</h2>

<form  name="form" action="user_qs_7.php" method="GET">
   
   <input text-align='center' type="text" name="subject" id="subject" placeholder="Age range">
  <input type="submit" Value="Search">  
         
</form>

