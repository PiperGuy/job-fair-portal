<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: slogin.php");
  exit;
}
?>
<!DOCTYPE HTML>

<head> 
    <title>welcome</title>     
    <meta charset="utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" /> 
    <meta name="description" content="" /> 
    <meta name="keywords" content="" /> 
    <link rel="stylesheet" href="assets/css/main.css" /> 
</head> 
<body class="is-preload"> 
    <!-- Header -->     
    <header id="header"> 
        <a class="logo" href="welcome.php">POOL CAMPUS</a>        
    </header>     
    <!-- Nav -->    
    <!-- Heading -->     
    <div id="heading">
  
        <h1>Welcome to job fair portal.</h1>
  
    </div>     
    <!-- Main -->     
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap All in One Navbar</title>
            <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <style type="text/css">body {
    background: #eeeeee;
}
.navbar .dropdown-menu li a {
    color: #000;
}
.form-inline {
    display: inline-block;
}

.navbar-header.col {
    padding: 0 !important;
}

.navbar {
    background: #fff;
    padding-left: 16px;
    padding-right: 16px;
    border-bottom: 1px solid #d6d6d6;
    box-shadow: 0 0 4px rgba(0,0,0,.1);
}

.nav-link img {
    border-radius: 50%;
    width: 36px;
    height: 36px;
    margin: -8px 0;
    float: left;
    margin-right: 10px;
}

.navbar .navbar-brand {
    color: #555;
    padding-left: 0;
    padding-right: 50px;
    font-family: 'Merienda One', sans-serif;
}

.navbar .navbar-brand i {
    font-size: 20px;
    margin-right: 5px;
}

.search-box {
    position: relative;
}

.search-box input {
    box-shadow: none;
    padding-right: 35px;
    border-radius: 3px !important;
}

.search-box .input-group-addon {
    min-width: 35px;
    border: none;
    background: transparent;
    position: absolute;
    right: 0;
    z-index: 9;
    padding: 7px;
    height: 100%;
}

.search-box i {
    color: #a0a5b1;
    font-size: 19px;
}

.navbar .nav-item i {
    font-size: 18px;
}

.navbar .dropdown-item i {
    font-size: 16px;
    min-width: 22px;
}

.navbar .nav-item.open > a {
    background: none !important;
}

.navbar .dropdown-menu {
    border-radius: 1px;
    border-color: #e5e5e5;
    box-shadow: 0 2px 8px rgba(0,0,0,.05);
}

.navbar .dropdown-menu li a {
    color: #777;
    padding: 8px 20px;
    line-height: normal;
}

.navbar .dropdown-menu li a:hover,
.navbar .dropdown-menu li a:active {
    color: #333;
}

.navbar .dropdown-item .material-icons {
    font-size: 21px;
    line-height: 16px;
    vertical-align: middle;
    margin-top: -2px;
}

.navbar .badge {
    background: #f44336;
    font-size: 11px;
    border-radius: 20px;
    position: absolute;
    min-width: 10px;
    padding: 4px 6px 0;
    min-height: 18px;
    top: 5px;
}

.navbar ul.nav li a.notifications,
.navbar ul.nav li a.messages {
    position: relative;
    margin-right: 10px;
}

.navbar ul.nav li a.messages {
    margin-right: 20px;
}

.navbar a.notifications .badge {
    margin-left: -8px;
}

.navbar a.messages .badge {
    margin-left: -4px;
}

.navbar .active a,
.navbar .active a:hover,
.navbar .active a:focus {
    background: transparent !important;
}

@media (min-width: 1200px){
    .form-inline .input-group {
        width: 300px;
        margin-left: 30px;
    }
}

@media (max-width: 1199px){
    .form-inline {
        display: block;
        margin-bottom: 10px;
    }

    .input-group {
        width: 100%;
    }
}</style>
        </head>         
        <body>
            <nav class="navbar navbar-default navbar-expand-xl navbar-light">
                <div class="navbar-header d-flex col"> 
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                        <span class="navbar-toggler-icon"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collection of nav links, forms, and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Search</a>
                        </li>
                    </ul>
                    <form class="navbar-form form-inline">
                        <div class="input-group search-box"> 
</div>
                    </form>
                    <ul class="nav navbar-nav navbar-right ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Hi, <b><?php echo $_SESSION['username']; ?></b><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" class="dropdown-item">change password</a>
                                </li>
                                <li>
                                    <a href="editprofilestudents.html" class="dropdown-item">edit profile</a>
                                </li>
                                <li class="divider dropdown-divider"></li>
                                <li>
                                    <p><a href="slogout.php" class="btn btn-danger">log out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </body>
		<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
                <header class="special"> 
                    <h2></h2>
                    <h2 spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="3" medium-editor-index="55bcfe8f-8b41-b825-6bbc-53f291b9ec96" data-placeholder="Type your text" data-medium-focused="true">About Job Fair</h2> 
                    <p></p>
                    <p data-wow-duration="1200ms" data-wow-delay="500ms">Skill and knowledge are the driving forces behind this economic social and industrial development of any country. Productivity of industries can be increased and the efficiency of establishments enhanced by utilizing the service of the appropriately skilled personnel.</p>
                    <p data-wow-duration="1200ms" data-wow-delay="500ms">The end goal of Industrial Training Department is to ensure employ.ment to successful candidates. Interaction between job seekers and job seekers is apt solution to this goal. A common platform for the needy skilled persons and industrialists who are in search of skilled man power will definitely enhance the job assurance of ITI bachelors. One of the solutions for a common platform is to conduct “Job Fairs”.</p>
                    <p></p> 
                </header>                 
                <div class="highlights"> 
                    <section> 
                        <div class="content"> 
                            <header> 
                                <h3><a href="studentsprofile.php"><b>Edit Profile</b></a></h3> 
                            </header>                             
                            <p>complete the registration process to find the companies for which you are eligible. Click on the above link.</p> 
                        </div>                         
                    </section>                     
                    <section> 
                        <div class="content"> 
                            <header> 
                                <h3><a href="cr.html"><b>Search companies</b></a></h3> 
                            </header>                             
                            <p>Companies which are participating in  the pool campus 2018 organised by Vivekanada Institute of Technology helps the students to find availability of jobs. Click on the above link.</p> 
                        </div>                         
                    </section>                     
                    <section> 
                        <div class="content">
                            <header> 
                                <h3><a href="jobfairlist.html"><b>Apply for Companies</b></a><br></h3> 
                            </header>                             
                            <p>You will ba able to apply for the companies. Click on the above link.</p>
                        </div>                         
                    </section>                  
                </div>                     
        <footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>Contact Address:</h3>
							<p>Vivekananda Institute of Technology<br>Kumbalagodu, Kengeri<br>Bengaluru-560 074.<br>Mobile: 9845773437<br>Office: 080 -2843 7696, 28437036<br>Fax : 080-28437944</p>
						</section>
						<section>
							
						</section>
						<section>
							<h4>Contact us:</h4>
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
					</div>
				</div>
			</footer>            
        <!-- Scripts -->         
        <script src="assets/js/jquery.min.js"></script>         
        <script src="assets/js/browser.min.js"></script>         
        <script src="assets/js/breakpoints.min.js"></script>         
        <script src="assets/js/util.js"></script>         
        <script src="assets/js/main.js"></script>         

