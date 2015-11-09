/**
 * Created by cjs2599 on 11/8/15.
 */





$(document).ready(function () {

    $("#regButton").click( function  () {
        var fields = document.getElementById("regForm");
        var username = $("#username").value;
        var pass = fields.pass.value;
        var pass_repeat = fields.pass_repeat.value;
        if (username.length > 5 && username.length < 11) {
            alert("userlength");
            if (username[0].match(/[a-z]/i)) {
                alert("user init match");
                if (~username.match(/^[a-z0-9]+$/i)) {
                    alert('user az match');
                    if (pass == pass_repeat) {
                        alert("passmatch");
                        if (5 < pass.length && pass.length < 11) {
                            alert("passlength ok");
                            if (~pass.match(/^[a-z0-9_]+$/i)) {
                                alert("pass not nonalnum");
                                if (pass.match(/[a-z]/)) {
                                    alert("pass has a lower");
                                    if (pass.match(/[A-Z]/)) {
                                        alert("pass has a upper");
                                        if (pass.match(/[0-9]/)) {
                                            alert("Passed Validation");
                                            return;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        alert("Invalid Input");
    });


});