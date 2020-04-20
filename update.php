<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: clogin.php");
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
        <a class="logo" href="companywelcome.php">POOL CAMPUS</a>        
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
            <style type="text/css">* {
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
	resize: none;
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
                .wrapper {
       padding: 0rem 0 2rem 0;
    position: relative;
    z-index: 1;
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
                                    <a href="companyprofile.php" class="dropdown-item">edit profile</a>
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
        <section>
            <ol class="breadcrumb"> 
                <li>
                    <a href="index.html">Home</a>
                </li>                 
                <li class="active">register</li>                 
            </ol>
        </section>  
		<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
                                <section id="main" class="wrapper"> 
            <div class="inner">
                <div class="main">
                    <center style="text-align: center;
    flex-direction: row;
    align-content: space-around;
    flex-wrap: nowrap;
    align-items: flex-start;">
                        <table>
                            <tbody>
                                <tr>
                                    <td align="left"><span id="MainContent_lblorg">Organisation</span><span class="markred">*</span></td>
                                    <td align="left">
                                        <input name="ctl00$MainContent$txtorg" type="text" id="MainContent_txtorg">
                                        <span id="MainContent_RequiredFieldValidator" style="color:Red;visibility:hidden;">Cannot Be Empty</span>
                                    </td>
                                    <td align="left"> <span id="MainContent_lblddlj">Organisation Type</span> <span class="markred">*</span></td>
                                    <td align="left">
                                        <select name="ctl00$MainContent$ddlorg_type" id="MainContent_ddlorg_type" class="TextinputText">
                                            <option selected="selected" value="0">Select</option>
                                            <option value="1">CENTRAL GOVT</option>
                                            <option value="2">STATE GOVT</option>
                                            <option value="3">PSU</option>
                                            <option value="4">LOCAL BODIES</option>
                                            <option value="5">PROPERIERSHIP</option>
                                            <option value="6">PARTNERSHIP</option>
                                            <option value="7">HUF</option>
                                            <option value="8">PVT.LTD.COMPANY</option>
                                            <option value="9">GOVT.COMPANY</option>
                                            <option value="10">SOCIETY</option>
                                            <option value="11">CLUB</option>
                                            <option value="12">NGO</option>
                                            <option value="13">TRUST</option>
                                            <option value="14">OTHER</option>
                                        </select>
                                        <span id="MainContent_RequiredFieldValidator16" style="color:Red;visibility:hidden;">Cannot Be Empty</span>
                                    </td>
                                </tr>
                                <tr>
</tr>
                                <tr>
                                    <td align="left"><span id="MainContent_lblsec">Sector</span><span class="markred">*</span></td>
                                    <td align="left">
                                        <select name="ctl00$MainContent$ddlsec" onchange="javascript:setTimeout('__doPostBack(\'ctl00$MainContent$ddlsec\',\'\')', 0)" id="MainContent_ddlsec" class="TextinputText" style="width:142px;">
                                            <option selected="selected" value="0">Select</option>
                                            <option value="1">ACCOUNTING</option>
                                            <option value="2">ADVERTISING</option>
                                            <option value="3">AGRICULTURE </option>
                                            <option value="4">AIR CONDIONERS</option>
                                            <option value="5">ANIMAATION</option>
                                            <option value="6">ARCHITECTURE</option>
                                            <option value="7">AUTOMOBILE</option>
                                            <option value="8">AVIATION</option>
                                            <option value="9">BANKING</option>
                                            <option value="10">BPO,CALL CENTER,ITES</option>
                                            <option value="11">BROADCASTING</option>
                                            <option value="12">CREAMICS</option>
                                            <option value="13">CHEMICALS,PLASTIC,RUBBER</option>
                                            <option value="14">CONSTRUCTION</option>
                                            <option value="15">CONSUMER ELECTRONICS,APPLIANCES,DURABLES</option>
                                            <option value="16">COURIER,TRANSPORTATION,FREIGHT</option>
                                            <option value="17">DAIRY</option>
                                            <option value="18">EDUCATION,TEACHING,TRAINNING</option>
                                            <option value="19">ELECTRICALS</option>
                                            <option value="20">EVENT MANAGEMENT</option>
                                            <option value="21">EXPORT/IMPORT</option>
                                            <option value="22">FACILITY MANAGEMENT</option>
                                            <option value="23">FERTILIZERS,PESTICIDES</option>
                                            <option value="24">FINANCIAL SERVICES</option>
                                            <option value="25">FMCG,FOOD,BEVERAGE</option>
                                            <option value="26">FOOD PROCESSING</option>
                                            <option value="27">GEMS,JEWELLARY</option>
                                            <option value="28">GLASS INSURANCE</option>
                                            <option value="29">INTERNET</option>
                                            <option value="30">IRON&amp;STEEL</option>
                                            <option value="31">IT-HARDWARE</option>
                                            <option value="32">IT-SOFTWARE</option>
                                            <option value="33">LEATHER</option>
                                            <option value="34">LEGAL</option>
                                            <option value="35">MEDIA,ENTERAINMENT</option>
                                            <option value="36">MEDICAL,HEALTHCARE,HOSPITAL</option>
                                            <option value="37">MINING</option>
                                            <option value="38">NGO,SOCIAL SERVICE</option>
                                            <option value="39">OIL&amp;GAS,ENERGY,POWER</option>
                                            <option value="40">PHARMA</option>
                                            <option value="41">PRINTING</option>
                                            <option value="42">PUBLISHING</option>
                                            <option value="43">REAL ESTATE,PROPERTY</option>
                                            <option value="44">RETAIL,WHOLESALE</option>
                                            <option value="45">SUGAR</option>
                                            <option value="46">TELECOM,ISP</option>
                                            <option value="47">TEXTILES,GARMENTS,ACCESSORIES</option>
                                            <option value="48">TRAVEL,HOSTELS,RESTAURANTS,AIRLINES,RAILWAYS</option>
                                            <option value="49">TYRES</option>
                                            <option value="50">OTHER</option>
                                        </select>
                                        <span id="MainContent_RequiredFieldValidator7" style="color:Red;visibility:hidden;">Cannot Be Empty</span>
                                        <span id="MainContent_RequiredFieldValidator8" style="visibility:hidden;">Please enter sector!</span>
                                    </td>
                                    <td align="left"><span id="MainContent_lblregs">Employer Registered With:</span><span class="markred">*</span></td>
                                    <td align="left">
                                        <select name="ctl00$MainContent$ddlregs" id="MainContent_ddlregs" class="TextinputText" style="width:142px;">
                                            <option value="0">Select</option>
                                            <option value="1">Labour Identification Number</option>
                                            <option value="2">Ministry of Corporate Affairs</option>
                                            <option value="3">Micro, Small &amp; Medium Enterprises</option>
                                            <option value="4">Other</option>
                                        </select>
                                        <span id="MainContent_RequiredFieldValidator6" style="color:Red;visibility:hidden;">Cannot Be Empty</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left"><span id="MainContent_lblreg">Registration Number</span><span class="markred">*</span></td>
                                    <td align="left">
                                        <input name="ctl00$MainContent$txtreg" type="text" maxlength="18" id="MainContent_txtreg">
                                        <span id="MainContent_RequiredFieldValidator9" style="color:Red;visibility:hidden;">Cannot Be Empty</span>
                                    </td>
                                    <td align="left">Office Address<span class="markred">*</span></td>
                                    <td align="left">
                                        <textarea name="ctl00$MainContent$txtoffadd" rows="3" cols="20" id="MainContent_txtoffadd" style="height:80px;width:250px;"></textarea>
                                        <span id="MainContent_Requiredfieldvalidator4" style="color:Red;visibility:hidden;">Cannot Be Empty</span>
                                    </td>
                                </tr>
                                <tr>
</tr>
                                <tr>
</tr>
                                <tr>
</tr>
                                <tr>
</tr>
                                <tr>
                                    <td colspan="4"><b>AUTHORIZED/CONTACT PERSON</b><span id="MainContent_lblper" style="font-size:Larger;"></span></td>
                                </tr>
                                <tr>
</tr>
                                <tr>
                                    <td align="left"><span id="MainContent_lblName">Name</span><span class="markred">*</span></td>
                                    <td align="left">
                                        <input name="ctl00$MainContent$TextBox1" type="text" id="MainContent_TextBox1" onkeypress="return lettersOnly(event)">
                                        <span id="MainContent_RequiredFieldValidator2" style="color:Red;visibility:hidden;">Cannot Be Empty</span>
                                    </td>
                                    <td align="left"><span id="MainContent_lblm">Mobile</span><span class="markred">*</span></td>
                                    <td align="left">
                                        <input name="ctl00$MainContent$txtm" type="text" maxlength="10" id="MainContent_txtm" onkeypress="return validate(event)">
                                        <span id="MainContent_RequiredFieldValidator17" style="color:Red;visibility:hidden;">Cannot Be Empty</span>
                                    </td>
                                </tr>
                                <tr>
</tr>
                                <tr>
                                    <td align="left"><span id="MainContent_lble">Email</span><span class="markred">*</span></td>
                                    <td align="left">
                                        <input name="ctl00$MainContent$txte" type="text" id="MainContent_txte">
                                        <span id="MainContent_RequiredFieldValidator3" style="color:Red;visibility:hidden;">Cannot Be Empty</span>
                                        <br>
                                        <span id="MainContent_RegularExpressionValidator1" style="color:Red;visibility:hidden;">Invalid E-mail</span>
                                    </td>
                                    <td align="left"><span id="MainContent_lblland">Landline no.</span></td>
                                    <td align="left">
                                        <input name="ctl00$MainContent$txtland" type="text" maxlength="12" id="MainContent_txtland">
                                    </td>
                                </tr>
                                <tr>
</tr>
                                <tr>
                                    <td align="left"><span id="MainContent_lblurl">Website URL (optional)</span></td>
                                    <td align="left">
                                        <input name="ctl00$MainContent$txturl" type="text" id="MainContent_txturl">
                                    </td>
                                    <td align="left"><span id="MainContent_lblpro">Profile/Details Of Organization</span><span class="markred">*</span></td>
                                    <td align="left">
                                        <textarea name="ctl00$MainContent$txtpro" rows="2" cols="20" id="MainContent_txtpro" style="height:50px;width:215px;"></textarea>
                                        <span id="MainContent_RequiredFieldValidator1" style="color:Red;visibility:hidden;">Cannot Be Empty</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" colspan="3"><span id="MainContent_lblcv">Please Upload Copy of employer/organization registration OR request for employer/organisation registration on letter Head</span></td>
                                    <td align="left">
                                        <input type="file" name="ctl00$MainContent$FileUpload" id="MainContent_FileUpload">
                                        <br>
                                        <span id="MainContent_lblmsg" style="color:Red;"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" colspan="4">
                                        <input type="submit" name="ctl00$MainContent$btnsub" value="SUBMIT" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$MainContent$btnsub&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="MainContent_btnsub">
                                        <span id="MainContent_lblz" style="text-align:right"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </center>
                </div>
            </div>             
        </section>                     
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

