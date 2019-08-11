<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 

    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Login Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class = "header" >
        <h2>Personal Expense Management</h2>
        
</div>
    <div class='loginreg'>
        <h2>Login or Register</h2>
    <form method="post" action="validate.php" >
        <fieldset>
                Username:
                <input type="text" name="username" id="username" class='loginfield' required>
        </fieldset>
        <fieldset>
                Password:
                <input name="password" type="password" id="password" class='loginfield' required>
        </fieldset>

                <input type="submit" value="Login" class='but'/>
                <input type="reset" value="Clear" class='but'/>
    </form>
   <a href='registerpage.php'><br>Click here to register!</a>
</div>
       
</body>
</html>