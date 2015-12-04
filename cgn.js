/**
 * Created by cjs2599 on 11/8/15.
 */





$(document).ready(function () {

    // validator for registration attempt
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
                                            formAlert = ("VALID");
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


    $()


    // show/hide front page articles on click
    $("#newgames, #videos, #galleries").click( function () {
       $(this).children("p").toggle("hidden");
    });





});