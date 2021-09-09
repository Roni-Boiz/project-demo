<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In or Sign Up</title>
    <link rel="stylesheet" href="../../public/css/login.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      classorigin = "anonymous"
    />
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" 
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
    crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <div class="form-container">
            <div class="signin-signup">
                <form action= "loginSuccess" class="sign-in-form" method= "POST">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i id="icon" class="fas fa-user"></i>
                        <input id="form_name" type="text" placeholder="Username" name = "username">
                        <span class="error_form" id="name_error_message"></span>
                    </div>

                    <div class="input-field">
                        <i id="icon" class="fas fa-lock"></i>
                        <input id="form_password" type="password" placeholder="Password" name = "password">
                        <span class="error_form" id="password_error_message"></span>
                    </div>

                    <input type="submit" class="loginbtn btn solid" value="Log In">
                    <p class="social-text">Or Sign in with Social Platform</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                    
                </form>
                <form action="#" class="sign-up-form">
                    <h2 class="title">Sign Up</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="form_fname" class="fname" type="text" placeholder="First Name">
                        <span class="error_form" id="fname_error_message"></span>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="form_sname" class="lname" type="text" placeholder="Last Name">
                        <span class="error_form" id="sname_error_message"></span>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="form_email" type="email" placeholder="email">
                        <span class="error_form" id="email_error_message"></span>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="form_rpassword" type="text" placeholder="password">
                        <span class="error_form" id="rpassword_error_message"></span>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="form_retype_password" type="text" placeholder="Confirm Password">
                        <span class="error_form" id="retype_password_error_message"></span>
                    </div>

                    <input type="submit" class="btn solid" value="Sign Up"/>
                    <p class="social-text">Or Sign Up with Social Platform</p>

                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div> 
        
       <div class="panels-container">
           <div class="panel left-panel">
               <div class="content">
                   <h3>New Here?</h3>
                   <p>
                       Lorem ipsum dolor sit amet, consectetur 
                       adipisicing elit. Consequatur amet ipsum 
                       beatae odio obcaecati soluta placeat autem
                        veniam commodi nihil! Harum reprehenderit 
                        repudiandae nam a magni, ad dolorum 
                        dignissimos nemo!
                    </p>
                    <button class="btn transparent" id="sign-up-button">Sign Up</button>
               </div>
               <img src="../../public/img/login-img_t.png" alt="" class="image">
           </div>

           <div class="panel right-panel">
               <div class="content">
                   <h3>One of Us?</h3>
                   <p>
                       Lorem ipsum dolor sit amet, consectetur 
                       adipisicing elit. Consequatur amet ipsum 
                       beatae odio obcaecati soluta placeat autem
                        veniam commodi nihil! Harum reprehenderit 
                        repudiandae nam a magni, ad dolorum 
                        dignissimos nemo!
                    </p>
                    <button class="btn transparent" id="sign-in-button">Sign In</button>
               </div>
               <img src="../../public/img/signin-img_t.png" alt="" class="image">
           </div>
       </div>
    </div>

    
    <script type="text/javascript" src="../../public/js/login.js"></script>
</body>
</html>



<!-- <div class="signin">
        <h3 class="title1">Sign In</h3>
        <div class="box">
        </div>
        <form action="loginSuccess" method = "post">
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
    </div> -->