
<html>
<head>
    <title>Register page</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class = "header" >
        <h2>Personal Expense Management</h2>
    </div>
    <div class='loginreg'>
    <h2>Register your details</h2>
    <form  method="post" action="regadd.php">
        <fieldset>
        Name:
        <input type='text' placeholder='Your full name' name='name' class='loginfield' required>
    </fieldset>
        <fieldset>
        Userid:
        <input type="text" placeholder="Give a username to your account" name='uid' class='loginfield' required>
    </fieldset>
        <fieldset>
        Set password:
        <input type='password' placeholder='Set password here' name='password' class='loginfield' required>
        </fieldset>
        <fieldset>
        Confirm password:
        <input type='password' placeholder='Re enter your password' name='password1' class='loginfield' required>
    </fieldset>
        <input type="submit" name ="regbut" value="Register" class='but'/>
    </form>
    </div>

</body>
</html>
