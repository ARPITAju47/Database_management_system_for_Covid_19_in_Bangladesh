
<!--insert form 1-->
<!DOCTYPE html>
<?php
 include("config.php");
 ?>
<html>
    <head>
        
    <meta charset="utf-8">
    <style>
body {background-color: black;
    text-align: center;}
h2   {
    width: 100%;
    background-color: #240090;
    text-align: left;
}
p    {color: red;}
.table {
    margin-left: auto;
    margin-right: auto;
  text-align:center;
  background-color: white;
  }
  input[type=submit] {
    text-align:center; 
  width: 25%;
  box-sizing: border-box;
  border: 4px solid;
  border-radius: 4px;
  font-size: 16px;
  background-color: black;
 color: #f368e0;
  
}
button{
    background-color: #3500d3; /* Green */
  border: 2px solid #240090 ;
  color: white;
  padding: 14px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 12px;
  font-size: 25px;
  width: 50%;
  cursor: pointer; 
  box-shadow: 0 9px #999;
}
button:hover {
  background-color: #9980FA; /* Green */
  color: 190061;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

}
button:active {
  background-color: #0C0032;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


</style>
        <h2>REGIONAL COVID_19 TRACKING  SYSTEM >> Homepage >> Login as ADMIN >> Tables</h3>
</head>
<h1 style="color:white">Tables in our database</h1>
        <div class="text-center"> 
         <form method='get' action="hospital.php">
         <button type='submit'>Hospital Table</button> 
        </form>
        <p> </p>
         <div class="text-center"> 
         <form method='get' action="patient.php">
         <button type='submit'>Patient Table</button>
         </form>
         <p> </p>
         <div class="text-center"> 
         <form method='get' action="doctor.php">
         <button type='submit'>Doctor Table</button>
         </form>
         <p> </p>
         <div class="text-center"> 
         <form method='get' action="mdical_info.php">
         <button type='submit'>Medical Info Table</button>
         </form>
         <p> </p>
         <div class="text-center"> 
         <form method='get' action="covid_ward.php">
         <button type='submit'>Covid Ward Table</button>
         </form>
         <p> </p>
         <div class="text-center"> 
         <form method='get' action="page1.php">
         <button type='submit'>Return</button>
         </form>
</div>






