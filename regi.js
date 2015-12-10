$(document).ready(function(){
     $("#reg_username").focusin(function(){
         $("#regadvisor").html("<ul class=\"alert alert-warning\">" +
             "<li>Must be 6-10 character in length</li>" +
             "<li>Must begin with a letter</li> " +
             "<li>May contain only letters and digits</li>" +
             "</ul>");
     }).focusout(function(){
        $("#regadvisor").html("");
    });
    $("#reg_pass").focusin(function(){
        $("#regadvisor").html("<ul class=\"alert alert-warning\">" +
            "<li>Must be 6-10 characters in length</li>" +
            "<li>May contain only letters, digits, and _</li>" +
            "<li>Must contain uppercase, lowercase, and a number</li>" +
            "</ul>");
    }).focusout(function(){
         $("#regadvisor").html("");
    });
     $("#reg_pass_repeat").focusin(function(){
         $("#regadvisor").html("<ul class=\"alert alert-warning\">" +
             "<li>Passwords must match</li>" +
             "<li>Password is case-sensitive</li>" +
             "</ul>");
     }).focusout(function(){
        $("#regadvisor").html("");});
});
