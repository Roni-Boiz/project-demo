<?php session_start(); ?>

<?php require_once('inc/connection.php') ?>

<?php

    if(isset($_POST['login']))
    {  
        
        $errors = array();

        if(!isset($_POST['username']) || strlen(trim($_POST['username']))< 1 )
        {
            $errors[] = 'Username is invalid';
        }

        if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 )
        {
            $errors[] = 'Password is invalid';
        }

        if (empty($errors)){

            $username = mysqli_real_escape_string($connection, $_POST ['username']);

            $password = mysqli_real_escape_string($connection, $_POST ['password']);

            $hPassword = sha1($password);

            $query = "SELECT * FROM  user_account 
            WHERE username = '{$username}'
            AND Password = '{$hPassword}'
            LIMIT 1";

            $resultSet = mysqli_query($connection, $query);

            if ($resultSet) {

                 if ( mysqli_num_rows ($resultSet) == 1) 
                {
                    $user = mysqli_fetch_assoc($resultSet);
                    $_SESSION['user_id'] = $user['id'] ;
                    $_SESSION['username'] = $user['username'];

                    header('Location: user.php');
                } else {
                    $errors[] = 'Invalid Username Password';
                }
            } else {
                $errors[] = 'Database query failed';
            }
        }
    }

?>




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

<?php mysqli_close($connection); ?>