<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: clogin.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
        <title>student registration</title>         
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
                    <a href="login.html">LOGIN</a>
                </li>                 
            </ul>             
        </nav>         
        <!-- Heading -->         
        <div id="heading">
            <h1>JOB FAIR-VKIT</h1>
        </div>
        <section>
            <ol class="breadcrumb"> 
                <li>
                    <a href="index.html">Home</a>
                </li>                 
                <li class="active">register</li>                 
            </ol>
        </section>         
        <!-- Main -->         
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
                <title>Bootstrap Sign up Form Horizontal</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>                 
                <style type="text/css">
body {
    color: #999;
    background: #f3f3f3;
    font-family: 'Roboto', sans-serif;
}

.form-control {
    border-color: #eee;
    min-height: 41px;
    box-shadow: none !important;
}

.form-control:focus {
    border-color: #5cd3b4;
}

.form-control,
.btn {
    border-radius: 3px;
}

.signup-form {
    width: 500px;
    margin: 0 auto;
    padding: 30px 0;
}

.signup-form h2 {
    color: #333;
    margin: 0 0 30px 0;
    display: inline-block;
    padding: 0 30px 10px 0;
    border-bottom: 3px solid #5cd3b4;
}

.signup-form form {
    color: #999;
    border-radius: 3px;
    margin-bottom: 15px;
    background: #fff;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}

.signup-form .form-group {
    margin-bottom: 20px;
}

.signup-form label {
    font-weight: normal;
    font-size: 13px;
}

.signup-form input[type="checkbox"] {
    margin-top: 2px;
}

.signup-form .btn {
    font-size: 16px;
    font-weight: bold;
    background: #fff;
    border: none;
    margin-top: 20px;
    min-width: 10px;
}

.signup-form .btn:hover,
.signup-form .btn:focus {
    background: #41cba9;
    outline: none !important;
}

.signup-form a {
    color: #5cd3b4;
    text-decoration: underline;
}

.signup-form a:hover {
    text-decoration: none;
}

.signup-form form a {
    color: #5cd3b4;
    text-decoration: none;
}

.signup-form form a:hover {
    text-decoration: underline;
}</style>
            <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; margin: 0 auto}
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="clogin.php">Login here</a>.</p>
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
                        <h3><h3 spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="1" medium-editor-index="0c760635-4348-eb00-cd9c-0dd9a400cc6a" data-placeholder="Type your text" data-medium-focused="true">CONTACT INFO:</h3></h3> 
                        <p><p>Vivekananda Institute of Technology<br>Kumbalagodu, Kengeri<br>Bengaluru-560 074.<br>Mobile: 9845773437<br>Office: 080 -2843 7696, 28437036<br>Fax : 080-28437944</p></p> 
                    </section>                     
                    <section> 
                        <ul class="alt"> 
</ul>                         
                    </section>                     
                    <section> 
                        <ul class="plain"> 
                            <span></span>
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