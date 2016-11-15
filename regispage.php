<!DOCTYPE html>
<html lang="en">

<head>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="js/jquery.js"></script>

    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <title>Gaming World</title>

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <script type="text/javascript" src="regi.js"></script>
    <link rel="stylesheet" href="regisPopover.css">
    <script type="text/javascript" src="cgn.js"></script>
     <script type="text/javascript">
        var xhr;
        if (window.ActiveXObject) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        } else if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        }
       var formAlert;
        function callServer() {
            var username = document.getElementById("reg_user").value;

            var reg1 = /\S+/;

            if (!reg1.test(username)) {
                alert("Invalid username");
                return;
            }
            var url = "usernamecheck.php?username=" + escape(username);
            xhr.open("GET", url, true);
            xhr.send();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    if (xhr.responseText == 1) {
                        formAlert = "The Username had alrady been registered.";
                        
                        document.getElementById("reg_user").value = ""; 
                        $("#advisor").html('<div class="alert alert-danger">'+formAlert+'</div>');
                    }

                }
            }
            }
            
    </script>


</head>

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">


                        </div>

                    </div>
                    <h1 id="title">Central Gaming Network</h1>
                    <div class="col-sm-8">

                        <div class="shop-menu pull-right">

                            <ul class="nav navbar-nav">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->




       



        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.html" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Game<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <span id="playstation1"><li><a href="regispage.php?page=playstation">PLAYSTATION</a></li></span>
                                            <span id="xbox1"><li><a href="regispage.php?page=XBOX">XBOX</a></li></span>
                                           
                                        <span id="nintendo1"><li><a href="regispage.php?page=nintendo">Nintendo</a></li></span>
                                                                         <span id="pc1"><li><a href="regispage.php?page=pc">PC</a></li></span>
                                           
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact</a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->



    <section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="#"  id="loginForm" method="POST">
							<input name="username" id="login_user" type="text" value="" placeholder="Name" />
							<input name="pass" id="login_pass" type="password" value="" placeholder="Password" />
							<span id="advisors"></span>
							<input type="button" name = "submit" class="loginb" id="loginButton" value="Log In" />
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="#" id="regForm" method = "POST">
							<input name="username" id="reg_user" type="text" value="" placeholder = "Enter your user name" onchange="callServer();" />
							<input name="pass" id="reg_pass" type="password" value="" placeholder="Password"/ />
							<input name="pass_repeat" id="reg_pass_repeat" type="password" placeholder ="Confirm Password" value="" />
                            <span id="advisor"></span>
							<input type="button" name="submit" class="btn btn-block" id="regButton" value="Register" />
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

    <footer id="footer">
        <!--Footer-->
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>More Sites</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="http://www.ign.com">IGN</a></li>
                                <li><a href="http://www.gamespot.com">Gamespot</a></li>
                                <li><a href="http://www.polygon.com">Polygon</a></li>
                                <li><a href="http://www.metacritic.com/game">Metacritic</a></li>
                                <li><a href="http://www.escapistmagazine.com">Escapist</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Game</h2>
                            <ul class="nav nav-pills nav-stacked">
                                  <span id="playstation3"><li><a href="regispage.php?page=playstation">PLAYSTATION</a></li></span>
                                </li></span>
                                            <span id="xbox3"><li><a href="regispage.php?page=XBOX">XBOX</a></li></span>
                                           
                                        <span id="nintendo3"><li><a href="regispage.php?page=nintendo">Nintendo</a></li></span>
                                        <span id="pc3"><li><a href="regispage.php?page=pc">PC</a></li></span>
                                    

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>More</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Contact US</a></li>
                                <li><a href="#">Site Map</a></li>

                            </ul>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2015 Chris &amp; Chen. All rights reserved.</p>

                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->




</body>

</html>