<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>SMS OTP TEST</h1>

    <div class="card">


    <form action="sms.php" method="POST" >
        <img src="./man (1).png" alt="">
        <div>
        <label for="">Username:</label>
        <input type="text" name="username" placeholder="username" id="username"></div>
       <div>
        <label for="">Phone:</label>
        <input type="text" name="phone" placeholder="username" id="phone" >
         </div>
         <div >
       <a href="check.php"> <input  class="btn" type="submit" value="Login"></input></a>

       </div>
    </form>
    
</div>
</body>
</html>