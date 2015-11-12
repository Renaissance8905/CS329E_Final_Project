/**
 * Created by cjs2599 on 11/8/15.
 */





$(document).ready(function () {


    // validator for registration attempt
    $("#regButton").click( function  () {
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
                                            return;
                                        } else {alert("Password must have at least one number");}
                                    } else {alert("Password must have at least one uppercase letter");}
                                } else {alert("Password must have at least one lowercase letter");}
                            } else {alert("Password can only contain letters, digits, and underscore ( _ )");}
                        } else {alert("Password should be between 6 and 10 characters");}
                    } else {alert("Passwords do not match");}
                } else {alert('Username can only contain letters and digits');}
            } else {alert("Username must begin with a letter");}
        } else {alert("Username should be between 6 and 10 characters");}
    });


    // show/hide front page articles on click
    $("#newgames, #videos, #galleries").click( function () {
       $(this).children("p").toggle("hidden");
    });





});