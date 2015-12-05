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
        if (username.length > 5 && username.length < 11) {
            if (username[0].match(/[a-z]/i)) {
                if (~username.match(/^[a-z0-9]+$/i)) {
                    if (pass == pass_repeat) {
                        if (5 < pass.length && pass.length < 11) {
                            if (~pass.match(/^[a-z0-9_]+$/i)) {
                                if (pass.match(/[a-z]/)) {
                                    if (pass.match(/[A-Z]/)) {
                                        if (pass.match(/[0-9]/)) {

                                            // Send User Info for Processing
                                            $("#dismiss_regis").click();
                                            $("#resetSignin").click();
                                            $("#resetLogin").click();
                                            var params = "username="+encodeURI(username)+"&password="+encodeURI(pass)+"&c_password="+encodeURI(pass_repeat)+"&request=register";
                                            requestUser(params);
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

        $("#advisor").html('<div class="alert alert-danger">'+formAlert+'</div>')

    });


    // When Log-In Request is made. No client-side validation necessary
    $("#loginButton").click(function () {

        var logForm = document.getElementById("loginForm");
        var usr = logForm.username.value;
        var pass = logForm.pass.value;

        var params = "username="+encodeURI(usr)+"&password="+encodeURI(pass)+"&request=login";

        requestUser(params);

        $("#dismiss_regis").click();
        $("#resetSignin").click();
        $("#resetLogin").click();


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





});

