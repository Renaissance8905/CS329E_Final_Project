/**
 * Created by cjs2599 on 11/8/15.
 */



$(document).ready(function () {

    requestUser("request=checklogin");

    // When Registration attempt is made. Validate User/Pass format before sending request.
    $("#regButton").click( function  () {
        var formAlert;
        var fields = document.getElementById("regForm");
        var username = fields.username.value;
        var pass = fields.pass.value;
        var pass_repeat = fields.pass_repeat.value;
        var eml = fields.email.value;
        if (username.length > 5 && username.length < 11) {
            if (username[0].match(/[a-z]/i)) {
                if (~username.match(/^[a-z0-9]+$/i)) {
                    if (pass == pass_repeat) {
                        if (5 < pass.length && pass.length < 11) {
                            if (~pass.match(/^[a-z0-9_]+$/i)) {
                                if (pass.match(/[a-z]/)) {
                                    if (pass.match(/[A-Z]/)) {
                                        if (pass.match(/[0-9]/)) {

                                            // AJAX check for duplicate username
                                            checkDupeUser(username, pass, pass_repeat, eml);
                                            return;

                                        } else {formAlert = ("Password must have at least one number");}
                                    } else {formAlert = ("Password must have at least one uppercase letter");}
                                } else {formAlert = ("Password must have at least one lowercase letter");}
                            } else {formAlert = ("Password can only contain letters, digits, and underscore ( _ )");}
                        } else {formAlert = ("Password should be between 6 and 10 characters");}
                    } else {formAlert = ("Passwords do not match");}
                } else {formAlert = ('Username can only contain letters and digits');}
            } else {formAlert = ("Username must begin with a letter");}
        } else {formAlert = ("Username should be between 6 and 10 characters");}

        $("#regadvisor").html('<div class="alert alert-danger">'+formAlert+'</div>')

    });


    // When Log-In Request is made.
    $("#loginButton").click(function () {

        var formAlert;
        var logForm = document.getElementById("loginForm");
        var usr = logForm.username.value;
        var pass = logForm.pass.value;


        if (usr == "") {
            formAlert = ("Please enter a username");
            $("#loginadvisor").html('<div class="alert alert-warning">'+formAlert+'</div>');
        } else if (pass == "") {
            formAlert = ("Don't forget your password!");
            $("#loginadvisor").html('<div class="alert alert-warning">'+formAlert+'</div>');
        } else {

            // Passed client-side validation
            $("#loginadvisor").html('<div class="alert">Checking...</div>');


            var xhr;
            if (window.ActiveXObject) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
            else {
                xhr = new XMLHttpRequest();
            }

            var url = "login-register.php";
            var params = "username=" + encodeURI(usr) + "&password=" + encodeURI(pass) + "&request=login";


            xhr.open("POST", url, true);

            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.setRequestHeader("Content-length", params.length);
            xhr.setRequestHeader("Connection", "close");

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {

                    var resp = xhr.responseText;

                    if (resp != "INVALID") {

                        var userInfo = JSON.parse(resp);

                        var usrnm = userInfo["username"];
                        var days_active = userInfo["days_active"];
                        var games_played = userInfo["games_played"];
                        var contact = userInfo["contact"];

                        $("#loginadvisor").html('<div class="alert alert-success">Welcome back, ' + usrnm + '!</div>');


                        $("#regisButton").hide();
                        $("#profileButton").show();


                        $("#username_header").text(usrnm);
                        $("#games_played").text(games_played);
                        $("#days_active").text(days_active);
                        $("#contact_info").text(contact);

                        setTimeout(function () {
                            $("#dismiss_regis").click();
                        }, 1000);
                        $("#resetSignin").click();
                        $("#resetLogin").click();

                    } else {

                        $("#loginadvisor").html('<div class="alert alert-danger">Username Not Found</div>');
                    }

                }
                else if (xhr.readyState == 4) {
                    alert("ERROR: Status is " + xhr.status);
                }
            };
            xhr.send(params);
        }
    });


    $("#logoutButton").click(function () {
        var xhr;
        if (window.ActiveXObject) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
        else {
            xhr = new XMLHttpRequest();
        }

        var params = "request=logout";
        var url = "login-register.php";

        xhr.open("POST", url, true);

        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.setRequestHeader("Content-length", params.length);
        xhr.setRequestHeader("Connection", "close");

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {

                var resp = xhr.responseText;

                if (resp == "LOGGED OUT") {

                    $("#regisButton").show();
                    $("#profileButton").hide();
               

                    $("#username_header").text("");
                    $("#games_played").text("");
                    $("#days_active").text("");
                    $("#contact_info").text("");

                }

            }
            else if (xhr.readyState == 4) {
                alert("ERROR: Status is " + xhr.status);
            }
        };
        xhr.send(params);
    });




    // Async Request function for login/signup
    // Expects 'params' as "username=JohnDoe&password=1234"...
    function requestUser(params) {
        var xhr;
        if (window.ActiveXObject) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
        else {
            xhr = new XMLHttpRequest();
        }

        var url = "login-register.php";

        xhr.open("POST", url, true);

        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.setRequestHeader("Content-length", params.length);
        xhr.setRequestHeader("Connection", "close");

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {

                var resp = xhr.responseText;

                if (resp != "INVALID") {

                    $("#regisButton").hide();
                    $("#profileButton").show();
                   
                    var userInfo = JSON.parse(resp);

                    var usrnm = userInfo["username"];
                    var days_active = userInfo["days_active"];
                    var games_played = userInfo["games_played"];
                    var contact = userInfo["contact"];

                    $("#username_header").text(usrnm);
                    $("#games_played").text(games_played);
                    $("#days_active").text(days_active);
                    $("#contact_info").text(contact);
                }

            }
            else if (xhr.readyState == 4) {
                alert("ERROR: Status is " + xhr.status);
            }
        };
        xhr.send(params);
    }


    function checkDupeUser(username, pass, pass_repeat, eml) {
        var xhr;
        if (window.ActiveXObject) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
        else {
            xhr = new XMLHttpRequest();
        }

        var params = "username="+encodeURI(username)+"&request=checkuser";
        var url = "login-register.php";

        xhr.open("POST", url, true);

        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.setRequestHeader("Content-length", params.length);
        xhr.setRequestHeader("Connection", "close");

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var validate = xhr.responseText;

                if (validate == "VALID" ) {

                    // Send User Info for Processing
                    var params = "username="+encodeURI(username)+"&password="+encodeURI(pass)+"&c_password="+encodeURI(pass_repeat)+"&email="+encodeURI(eml)+"&request=register";
                    requestUser(params);
                    setTimeout(function() {$("#dismiss_regis").click();}, 1000);
                    $("#resetSignin").click();
                    $("#resetLogin").click();
                } else {
                    formAlert = ("Sorry, that username's been taken!");
                    $("#regadvisor").html('<div class="alert alert-danger">'+formAlert+'</div>')
                }
            }
            else if (xhr.readyState == 4) {
                alert ("ERROR: Status is " + xhr.status);
            }
        };
        xhr.send(params);


    }



});

