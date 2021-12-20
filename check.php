<?php
/* $curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://otp.thaibulksms.com/v2/otp/verify',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => array('key' => '1718101194630469','secret' => 'secert','9746ff8d7a19cb6c3e725716c7393b8c' => 'token_form_response','pin' => 'code otp'),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response; */

?>

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
    <h1>Verify (OTP)</h1>

    <div class="card">


    <form action="checkdata.php" method="POST">
        <img src="./man (1).png" alt="">
        
       <div>
        <label for="">Verify(OTP):</label>
        <input type="text" name="otp" placeholder="OTP" id="otp" >
         </div>
         <div >
        <input  class="btn" type="submit" value="Login" ></input>
        

       </div>
    </form>
    
</div>
</body>
</html>