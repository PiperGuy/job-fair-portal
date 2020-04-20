<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;      
                            header("location: studentwelcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<html> 
    <head> 
        <title>Log in</title>         
        <meta charset="utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" /> 
        <meta name="description" content="" /> 
        <meta name="keywords" content="" /> 
        <link rel="stylesheet" href="assets/css/main.css" /> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="components/pg.blocks/css/blocks.css">
        <link rel="stylesheet" href="components/pg.blocks/css/plugins.css">
        <link rel="stylesheet" href="components/pg.blocks/css/style-library-1.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    </head>     
    <body class="is-preload"> 
        <!-- Header -->         
        <header id="header"> 
            <a class="logo" href="index.html">POOL CAMPUS</a> 
            <nav> 
                <a href="#menu">Menu</a> 
            </nav>             
        </header>         
        <!-- Nav -->         
        <nav id="menu"> 
            <ul class="links"> 
                <li>
                    <a href="index.html">HOME</a>
                </li>                 
                <li>
                    <a href="sr.html">STUDENTS REGISTRATION</a>
                </li>                 
                <li>
                    <a href="cr.html">COMPANY REGISTRATION</a>
                </li>
                <li>
                    <a href="jobfairlist.html">LIST OF COMPANIES</a>
                </li>
                <li>
                    <a href="studentlogin.html">LOGIN</a>
                </li>   
                <li>
                    <a href="companylogin.html">LOGIN</a>
                </li> 
            </ul>             
        </nav>         
        <!-- Heading -->         
        <div id="heading">
</div>
        <section>
            <ol class="breadcrumb"> 
                <li>
                    <a href="index.html">Home</a>
                </li>                 
                <li class="active">Login</li>                 
            </ol>
        </section>         
        <!-- Main -->         
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Bootstrap Simple Login Form</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>                 
                <style type="text/css">.login-form {
    width: 340px;
    margin: 50px auto;
}

.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}

.login-form h2 {
    margin: 0 0 15px;
}

.form-control,
.btn {
    min-height: 38px;
    border-radius: 2px;
}

.btn {
    font-size: 15px;
    font-weight: bold;
    background-color: #f44336;
}</style>
            <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; margin: 0 auto}
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>      
        <!-- Footer -->         
        <footer id="footer"> 
            <div class="inner"> 
                <div class="content"> 
                    <img src="http://vitb.ac.in/wp-content/uploads/2017/02/VKITLOGO-FOOTER.png" />
                    <section> 
                        <h3><h4 spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="1" medium-editor-index="0c760635-4348-eb00-cd9c-0dd9a400cc6a" data-placeholder="Type your text" data-medium-focused="true">CONTACT INFO:</h4></h3> 
                        <p><p>Vivekananda Institute of Technology<br>Kumbalagodu, Kengeri<br>Bengaluru-560 074.<br>Mobile: 9845773437<br>Office: 080 -2843 7696, 28437036<br>Fax : 080-28437944</p></p> 
                    </section>                     
                    <section> 
                        <ul class="alt"> 
</ul>                         
                    </section>                     
                    <section> 
                        <ul class="plain"> 
                            <li>
                                <a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a>
                            </li>                             
                            <li>
                                <a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a>
                            </li>                             
                            <li>
                                <a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a>
                            </li>                             
                        </ul>
                    </section>                     
                </div>                 
                <div class="copyright"></div>                 
            </div>             
        </footer>         
        <!-- Scripts -->         
        <script src="assets/js/jquery.min.js"></script>         
        <script src="assets/js/browser.min.js"></script>         
        <script src="assets/js/breakpoints.min.js"></script>         
        <script src="assets/js/util.js"></script>         
        <script src="assets/js/main.js"></script>         
        <script type="text/javascript" src="components/pg.blocks/js/plugins.js"></script>
        <script type="text/javascript" src="components/pg.blocks/js/bskit-scripts.js"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    </body>     
</html>