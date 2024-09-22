<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emp</title>
    <style>
        h1.sms
        {
            text-align: top;
            color: white;
            font-family: klavika;
            font-size: 40px;
            background-color: #3b5998;
            padding: 30px;
        }
        p.head
        {
            font-family:verdana;
            font-size: 20px;
        }
        form.mid
        { 
            text-align: center;
            background-color:white;
            margin-left: 700px;
            margin-right: 700px;
            margin-top:100px;
            padding: 20px;   
        }
        body
        {
            background-color:#f1f1f1;
        }
        p.foot
        {
            text-align: left;
            color: #3670bb;
            font-family: klavika;
            font-size: 20px;
            background-color: white;
            padding:20px;
        }
    </style>
</head>
<body>
    <h1 class="sms">     Welcome to School Management System </h1>
    <form class="mid"method="post" action="../Controllers/empController.php">
    <br>
    <br>
    <p class="head">  Log into Employee</p>
    <p style="font-family:verdana;">
    <input type="text" name="id" placeholder="Enter ID" style="font-size:14pt; width:300px; height:35px;">
    </p>
<p style="font-family:verdana;">
  <input type="password" name="pass" placeholder="Password" style="font-size:14pt; width:300px; height:35px;">
</p>
<?php
   		 if(isset($_SESSION['Error']))
   		 {
              echo $_SESSION['Error'];
   		    unset($_SESSION['Error']);
   		 }
   		  
   		 ?>
   <button name="empbtn" style="background-color:#4267b2; color:#ffffff; border:none; padding:10px 50px; font-size:16px; font-family:Helvetica Neue2;width:310px;">
    Log In
   </button>
   <br>
   <p style= color:#3670bb >Forget password?</p>
   <p style="text-align:center; margin: 10px 0;color:#ccd0d5;">————————  or  ————————</p>
   <button style="background-color:#42b72a; color:#ffffff; border:none; padding:10px 20px; font-size:16px; font-family:Helvetica Neue2;width:310px;">
    Create new account
   </button>
   <br><br><br><br><br>
    </form>
    <br><br><br><br><br><br><br><br><br><br>
    <p class="foot">Copy Right School Management @ 2018</p>

</body>
</html>