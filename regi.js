$(document).ready(function(){
     $("input[name ='username']").focusin(function(){
         $("#username").html(" <li>Must be 6-10 character in length</li> <li>Must begin with a letter</li> <li>May contain only letters and digits</li>");
     });
    $("input[name ='username']").focusout(function(){
        $("#username").html("");
    });
    $("input[name ='pass']").focusin(function(){
        $("#pass").html("<li>Must be 6-10 characters in length</li><li>May contain only letters, digits, and _</li><li>Must contain uppercase, lowercase, and a number</li>");});
    $("input[name ='pass']").focusout(function(){
         $("#pass").html("");
    });
     $("input[name ='pass_repeat']").focusin(function(){
         $("#confirm").html("<li>Passwords must match</li><li>Password is case-sensitive</li>");});
    $("input[name ='pass_repeat']").focusout(function(){
        $("#confirm").html("");});
});