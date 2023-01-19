<!DOCTYPE html>
<html lan="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script src="login_dev.js"></script>
        <style>
             h1 {
                width: 300px;
                border: 2px solid #353b48;
       color: white;
       background-color: #70a1ff;
}
h3{
    border: 2px solid #353b48; 
}
body{
    background-color: black;
}
.box{
    background-color: #3500d3; 
    padding: 60px;
    color: black;

    width: 300px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    
    border-radius: 12px;
    text-align: center;
}

.box input[type = "text"], .box input[type= "password"]{
     border: 9;
     background: #190061;
     display: block;
     margin: 20px auto;
     text-align: center;
     border: 2px solid black;
     padding: 14px 10px;
     width: 100px;
     outline: none;
     color: #f5f6fa;
     border-radius: 24px;
     transition: 0.25s;
 }
.box input[type="text"],.box input[type="password"]{
     width : 280px;
     border-color: black;
     color: white;
 }
 .box input[type = "submit"]{
    border: 9;
    background-color: #f5f6fa;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 4px solid #3498db;
    padding : 8px 30px;
    font-size: 24px;
    outline: none;
    color : #190061;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
 }
 button{
        background-color: black; 
        color: white;
        font-size: 20px;
        padding: 10px 40px;
        width: 150px;
        margin-top: 530px;
        margin-left: 300px;
        border-radius: 510px;
        border: 3px solid #7f8c8d;
        cursor: pointer;
        box-shadow: 0 4px white;
    }
    button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
   </head>
   <h3 style="color: #57606f">REGIONAL COVID_19 TRACKING  SYSTEM >> Homepage >> Login as ADMIN</h3>

   <body >
       <form class='box' action="" method='post'>
           <center><h1 style="color: black">Login System</h1></center>
           <input type="text" name="" placeholder="Username" id="username">
           <input type="password" name="" placeholder="Password" id="password">
           <input type="submit" name="" placeholder="Login" onclick="validate()">
</form>
<div class="center"> 
         <form method='get' action="page1.php">
         <center><button type='submit'>Return</button></center>
         </form>
        
</div>
</div>
</body>
</html>