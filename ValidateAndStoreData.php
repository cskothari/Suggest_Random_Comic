<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email a random XKCD challenge</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div>
        <h1>Get Random Comic</h1>
        <form action="ValidateAndStoreData.php" method="POST" >
            <label >Enter Email:</label>
            <br>
            <input id="Username" class="txtbox" type="email" name="Username" placeholder="Email Id" required>
            <br><br>
            
            <label class="OTP-lbl">Enter OTP:</label>
            <br>
            <input class="txtbox" type="text" name="Input-OTP" placeholder="OTP">
            <br><br>
            
            <input class="button" type="submit" value="Send OTP" name="SendOTP">
            <input class="button" type="button" value="Verify OTP" name="getOTP-btn">
        </form>
        <p class="hidden">text hideen</p>
    </div>
</body>
</html>