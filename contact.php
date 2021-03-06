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


    <title>Gaming World</title>
</head>

<body>
<header id="header">
    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                    </div>
                </div>
                <h1 id="title">Central Gaming Network</h1>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <div class="nav navbar-nav">
                                <span id="regisButton">
                                    <li><a href="#regis" role="button" class="link" data-toggle="modal"><i class="fa fa-lock"></i>Login</a></li>
                                </span>
                                <span id="profileButton" hidden="hidden">
                                    <li><a href="#profile" role="button" class="link" data-toggle="modal">My Account</a></li>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->
    <!--header-bottom-->
    <div class="header-bottom">
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
                            <li><a href="index.html">Home</a></li>
                            <li class="dropdown"><a href="index.html">Games<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="playstation.html">PLAYSTATION</a></li>
                                    <li><a href="xbox.html">XBOX</a></li>
                                    <li><a href="nintendo.html">NINTENDO</a></li>
                                    <li><a href="pc.html">PC</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.php" class="active">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
    <!--------------- BEGIN REGISTRATION POPOVER MODAL ------------------>
    <div id="regis" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" id="dismiss_regis" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#registration" data-toggle="tab">Register</a></li>
                            <li><a href="#signin" data-toggle="tab">Log In</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="registration" class="tab-pane fade active in">
                                <form id="regForm" action="" method="POST">
                                    <table id="registerTab" class="signinup center">
                                        <tr>
                                            <td>
                                                <label for="reg_user"><span class="glyphicon glyphicon-user"></span> Username:</label>
                                            </td>
                                            <td>
                                                <input name="username" id="reg_user" type="text" value="" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="reg_pass"><span class="glyphicon glyphicon-lock"></span> Password:</label>
                                            </td>
                                            <td>
                                                <input name="pass" id="reg_pass" type="password" value="" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="reg_pass_repeat"><span class="glyphicon glyphicon-lock"></span> Confirm Password:</label>
                                            </td>
                                            <td>
                                                <input name="pass_repeat" id="reg_pass_repeat" type="password" value="" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="email_addr"><span class="glyphicon glyphicon-envelope"></span> Email Address:(Optional)</label>
                                            </td>
                                            <td>
                                                <input name="email" id="email_addr" type="email" value="" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><span id="regadvisor"></span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="button" class="btn btn-primary btn-block loginb" id="regButton" value="Register" />
                                                <input type="reset" id="resetSignin" hidden="hidden" />
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>


                            <div id="signin" class="tab-pane fade">
                                <form id="loginForm" action="" method="POST">
                                    <table id="loginTab" class="signinup center">
                                        <tr>
                                            <td>
                                                <label for="login_user"><span class="glyphicon glyphicon-user"></span> Username:</label>
                                            </td>
                                            <td>
                                                <input name="username" id="login_user" type="text" value="" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="login_pass"><span class="glyphicon glyphicon-lock"></span> Password:</label>
                                            </td>
                                            <td>
                                                <input name="pass" id="login_pass" type="password" value="" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><span id="loginadvisor"></span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="button" class="btn btn-primary btn-block loginb" id="loginButton" value="Log In" />
                                                <input type="reset" id="resetLogin" hidden="hidden" />
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- END REGISTRATION POPOVER MODAL ------------------>
    <!--------------- BEGIN USER PROFILE POPOVER MODAL ---------------->
    <div id="profile" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="username_header"></h4>
                </div>
                <div class="modal-body">
                    <h4>Games Played: <span id="games_played"></span></h4>
                    <h4>Days Active: <span id="days_active"></span></h4>
                    <h4>Contact Info: <span id="contact_info"></span></h4>
                </div>
                <div class="modal-footer">
                    <button id="logoutButton" type="button" class="btn btn-danger" data-dismiss="modal">Log Out</button>
                </div>
            </div>
        </div>
    </div>
    <!--------------- END USER PROFILE POPOVER MODAL ------------------>
</header>
<!--/header-->



<!--------------------------------------------- MAIN MAIN MAIN --------------------------------------------->
<!--------------------------------------------- MAIN MAIN MAIN --------------------------------------------->
<!--------------------------------------------- MAIN MAIN MAIN --------------------------------------------->


<?php   
    if (isset($_POST['submit'])){
        thanks();
    }
            else{
                contact();
            }
function thanks(){
    if($_SERVER['REQUEST_METHOD'] == 'POST' ){
        require_once("dbconn.php");
        $name = $_POST["name"];
        $subject = $_POST['subject'];
        $comments = $_POST['comments'];
        $email = $_POST['email'];
        $table = "fp_contact";

        $conn = conn();

        $stmt = mysqli_prepare($conn, "INSERT INTO $table (username, subject, comments, email) VALUES (?,?,?,?)");
        mysqli_stmt_bind_param($stmt, 'ssss', $name, $subject,$comments,$email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

    }
    print <<<PAGE1
    <div id="contact-page" class="container">
          <h2>Thank you for contact us!</h2>
          </div>
PAGE1;
};
function contact(){

    $script = $_SERVER["PHP_SELF"];

   print<<<PAGE
   <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
                    <img src = feedback.jpg id = contactimg alt = "">
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">FeedBack</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" action = $script name="contact-form" method="post"
                        onsubmit = "return check();">
				            <div class="form-group col-md-6">
                            <span>*</span>
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
                            <span>*</span>
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
                            <span>*</span>
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
                            <span>*</span>
				                <textarea name="comments" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>    
                            <div><span id = "cadvisor"></span></div>
				            <div class="form-group col-md-12">
				                <input id = "conbutt" type="submit" name="submit" class="btn btn-primary pull-right" value="Submit" >
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>Ke Chen</p>
							<p>ckckchen1208@gmail.com</p>
							<br>
							<p>Chris Spradling</p>
							<p>cjspradling@gmail.com</p>
	    				</address>
	    				
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
    <script type = "text/javascript">
     document.getElementById("main-contact-form").onsubmit = check;
     function check(){
       var formAlert;
       var fields = document.getElementById("main-contact-form");
       var names = fields.name.value;
       var email = fields.email.value;
       var subject = fields.subject.value;
      var comments = fields.comments.value;
      if (names.length != 0){
          if (email.match(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/)){
              if (subject.length != 0){
                  if (comments.length != 0){
                      return;
                  }else {window.alert("Message cannot be empty");
                  return false;}
              }else{window.alert("Subject cannot be empty");
              return false;}
          }else{window.alert("Enter a valid email address");
          return false;}
      }else{window.alert("Name cannot be empty");
      return false;}
    
      };
</script>
PAGE;
}
?>
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
                                             <li><a href="playstation.html">PLAYSTATION</a>
                                          <li><a href="xbox.html">XBOX</a></li>
                                <li><a href="nintendo.html">Nintendo</a></li>                                 
                                             <li><a href="pc.html">PC</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>More</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="about.html">About us</a></li>
                                <li><a href="contact.php">Contact US</a></li>
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




</body>

</html>