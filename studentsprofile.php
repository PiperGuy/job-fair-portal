<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE HTML> 
<html lang="en">
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
            
            <style>
* {
    box-sizing: border-box;
}

input[type=text],input[type=date],input[type=number],input[type=email] ,select, textarea{
    padding: 6px;
	margin-top: 6px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
textarea{
    height: 100px !important;
    margin-top: 0px;
    margin-bottom: 0px;
	resize: horizontal;
}
label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 0px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
form{
    margin: 0 auto;
    width: 70%;
}
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.submit{
	width:10%;
	margin:0 auto;
}
<!-- ------------------------------------- -->
 select,.university{
     padding: 5px 30px;
    border-radius: 6px;
    outline: 0px;
 }
 h4{
text-align: center;
    border: 1px solid grey;
    color: #333;
    padding: 10px 3px;

 }
 table{
	border: 1px solid grey;
 }
</style>
            <style type="text/css">body {
    background: #eeeeee;
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
                            <a href="welcome.php" class="nav-link">Home</a>
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
                                    <p><a href="logout.php" class="btn btn-danger">log out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </body>
    <body>
<div class="container">
<form action="/action_page.php">
    <div class="row">
	<div class="col-lg-12">
		<div class="col-lg-6">
		 <div class="col-lg-5"> 
			<label for="fname">Name</label>
		 </div>
         <div class="col-lg-7">
			 <input type="text" id="name" name="name" placeholder="Your name..">
		 </div>
       </div>
	   <div class="col-lg-6">
	    <div class="col-lg-5"> 
			 <label for="fname">Father Name</label>
		 </div>
         <div class="col-lg-7">
			 <input type="text" id="fname" name="fathername" placeholder="Your Fathername..">
		 </div>
       </div>
	</div>
    </div>
	<div class="row">
	<div class="col-lg-12">
	   <div class="col-lg-6">
		<div class="col-lg-5"> 
			 <label for="usn">USN</label>
		 </div>
         <div class="col-lg-7">
			  <input type="text" id="usn" name="usn" placeholder="Your USN..">
		 </div>
      </div>
	  <div class="col-lg-6">
	  <div class="col-lg-5"> 
			 <label for="gender">Gender</label>
		 </div>
         <div class="col-lg-7">
			  <select id="gender" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
		 </div>
      </div>
	</div>
    </div>
	<div class="row">
	<div class="col-lg-12">
		<div class="col-lg-6">
		<div class="col-lg-5"> 
			<label for="dob">Date Of Birth</label>
		 </div>
         <div class="col-lg-7">
           <input type="date" id="dob" name="dob" placeholder="Your DOB..">
		 </div>
        </div>
	  <div class="col-lg-6">
	  <div class="col-lg-5"> 
            <label for="Mobile no.">Mobile No.</label>
		 </div>
         <div class="col-lg-7">
		   <input type="number" id="mob" name="mob" placeholder="Your number..">
		 </div>
      </div>
	</div>
    </div>
		<div class="row">
	<div class="col-lg-12">
		<div class="col-lg-6">
		<div class="col-lg-5"> 
			  <label for="email">Email</label>
		 </div>
         <div class="col-lg-7">
		   <input type="email" id="email" name="email" placeholder="Your Mail..">
		 </div>
      </div>
	  <div class="col-lg-6">
	  <div class="col-lg-5"> 
            <label for="address">Address</label>
		 </div>
         <div class="col-lg-7">
        <textarea id="address" name="address" placeholder="Your Address.." style="height:200px"></textarea>
		 </div>
      </div>
	</div>
    </div>
  </form>                                     
  <div class="table-responsive">          
  <table class="table">
  <h4>Qualification(Please Enter Highest Qualification to Lowest Qualification)</h4>
    <thead>
      <tr>
        <th>Qualification</th>
        <th>Board/Institues/University</th>
        <th>Year of Passing</th>
        <th>%Marks</th>
        <th>Specialization</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
			</select>
		</td>
        <td><input class="university" type="text" name="universityName" value=""></td>
        <td>
			<select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
			</select>
		</td>
        <td><select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
			</select>
		</td>
        <td>
		<select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
		</select>
		</td>
      </tr>
	  <tr>
        <td><select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
			</select>
		</td>
        <td><input class="university" type="text" name="universityName" value=""></td>
        <td>
			<select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
			</select>
		</td>
        <td><select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
			</select>
		</td>
        <td>
		<select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
		</select>
		</td>
      </tr>
	  <tr>
        <td><select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
			</select>
		</td>
        <td><input class="university" type="text" name="universityName" value=""></td>
        <td>
			<select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
			</select>
		</td>
        <td><select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
			</select>
		</td>
        <td>
		<select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
		</select>
		</td>
      </tr>
	  	  <tr>
        <td><select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
			</select>
		</td>
        <td><input class="university" type="text" name="universityName" value=""></td>
        <td>
			<select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
			</select>
		</td>
        <td><select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
			</select>
		</td>
        <td>
		<select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
		</select>
		</td>
      </tr>
    </tbody>
  </table>
  </div>
      <div class="submit">
      <input type="submit" value="Submit">
    </div>
</div>

</body>
                   
        <!-- Footer -->         
        <footer id="footer"> 
            <div class="inner"> 
                <div class="content"> 
                    <img src="http://vitb.ac.in/wp-content/uploads/2017/02/VKITLOGO-FOOTER.png" />
                    <section> 
                        <h3 spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="1" medium-editor-index="0c760635-4348-eb00-cd9c-0dd9a400cc6a" data-placeholder="Type your text" data-medium-focused="true">CONTACT INFO:</h3>
                        
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
=</html>
