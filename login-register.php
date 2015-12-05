<?php
/**
 * Created by PhpStorm.
 * User: cjs2599
 * Date: 12/3/15
 * Time: 7:27 PM
 */

require_once("dbconn.php");


$usr = $_POST["username"];
$pass = $_POST["password"];
$cpass = $_POST["c_password"];
$usr = sanitize($usr);
$pass = sanitize($pass);
$pass = md5($pass);
$cpass = md5($cpass);



if ($_POST["request"] = "register") {
    register($usr, $pass, $cpass);
}
elseif ($_POST["request"] = "login") {
    login($usr, $pass);
}
elseif ($_POST["request"] = "checklogin") {
    isLoggedIn();
}
else {
    die("bad request");
}



function register ($usr, $pass, $cpass) {

    if ($pass != $cpass) {
        die("Mismatched passwords");
    }

    $table = "fp_users";

    $conn = conn();

    $stmt = mysqli_prepare($conn, "INSERT INTO $table (username, password) VALUES (?,?)");
    mysqli_stmt_bind_param($stmt, 'ss', $usr, $pass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    login($usr, $pass);
    return;
}


function login ($usr, $pass) {
    $conn = conn();
    $table = "fp_users";

    $sql = "SELECT username, days_active, games_played, contact FROM $table WHERE username = \"$usr\"";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = $result->fetch_row();
        $profile =  array("username"=>$row[0], "days_active"=>$row[1], "games_played"=>$row[2], "contact"=>$row[3]);

        setcookie("loggedin", json_encode($profile), time()+(86400*7), "/"); // Active 7 Days
    } elseif (!mysqli_query($conn, $result)) {
        echo ("ERROR: " . mysqli_error($result)) . " :: " . mysqli_errno($result);
        return;
    } else {
        echo "login failed";
        return;
    }

    $result->free();
    $conn->close();

    isLoggedIn();
    return;
}

function isLoggedIn () {
    if (isset($_COOKIE["loggedin"])) {
        $profile = json_decode($_COOKIE["loggedin"]);
        setcookie("loggedIn", json_encode($profile), time()+(86400*7), "/"); // Refresh Cookie

        echo json_encode($profile);
        return;
    } else {
        echo("HOWDY DOODY FUCK YOU");
        return;
    }
}



?>