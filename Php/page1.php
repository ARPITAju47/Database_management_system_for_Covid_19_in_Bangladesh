
<html>   
<head>

<style>
    body {
        background-color: #ffcccc;
        background-size: cover;
       
    }
    h3 {
        background-color: #dfe4ea;
       color: #6F1E51;
}

    p {text-align: center;}
    button{
        background-color: #ffb8b8; 
        color: black;
        font-size: 24px;
        border-style: 2px solid;
  border-color: #EA2027;
        border-radius: 12px;
        width: 500px;
        cursor: pointer;
        box-shadow: 0 9px #e74c3c;
    }
    button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
    .center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 70px;
  padding-left: 50px;
}
    
input[type=submit] {
    text-align:center; 
  width: 15%;
  box-sizing: border-box;
  border: 4px solid;
  border-radius: 12px;
  font-size: 26px;
  background-color: black;
 color: white;

  
}
    
</style>

</head>
    <body> 
        
        <h3>REGIONAL COVID_19 TRACKING  SYSTEM >> Homepage</h3>
  <div align= center>
    <img style="padding-left: 50px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS60t8dq5Q3Gj0MGZoA3TkzsyXTjCEcE7Noxg&usqp=CAU" width=10% hight=10%>
  </div>
  <form class="center" method='get' action="login_dev.php">
         <button type='submit'>Login as ADMIN</button>
         </form>
  <div align= center>
    <img  style="padding-left: 50px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQX4Fx48oWJFcvyBU_0lfu0rdzLtNjpci5phQ&usqp=CAU"  width=10% hight=10% >
  </div>
  <form class="center" method='get' action="user.php">
         <button type='submit'>Login as USER</button>
         </form>
  <div align= center >
    <img  style="padding-left: 50px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSHTNU0Nc-_ptGFM8turyo1Y-zpehC-7h6qA&usqp=CAU"  width=10% hight=1% >
</div>

         
         <form class="center" method='get' action="login_dr.php">
         <button type='submit'>Login as DOCTOR</button>
         </form>
</div>
         <form class="right" method='get' action="page.php">
         <input type='submit' name='Submit' value="Return">
         </form>
    </body>
    
 </html>
  