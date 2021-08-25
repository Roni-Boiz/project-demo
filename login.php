<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="navigationBar">
        
    </div>
    
    <div class="signin">
        <h3 class="title1">Sign In</h3>
        <div class="box">
        </div>
        <form action="login.php" method = "post">

            <div class="element">
                <label>Username : </label>
                <input type="text" placeholder="Username" name = "username" autofocus>
            </div>
            <div class="element">
                <label>Password : </label>
                <input type="password" placeholder="Enter Password" name ="password">
            </div>
            <div class="element">
                <input type="submit" value="Submit" name= "login" class="submit">
            </div>
        </form>
    </div>
</body>
</html>
