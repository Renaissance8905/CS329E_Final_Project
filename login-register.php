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
$email = $_POST["email"];
$usr = sanitize($usr);
$pass = sanitize($pass);
$pass = md5($pass);
$cpass = md5($cpass);


/* I know, it's fake. We'll send a DLC patch later */
$games_played = rand(0, 100);

/* This works though! */
$register_moment = time();



if ($_POST["request"] == "register" && isset($_POST["username"])) {
    register($usr, $pass, $cpass, $email, $register_moment, $games_played);
}
elseif ($_POST["request"] == "login" && isset($_POST["username"])) {
    login($usr, $pass);
}
elseif ($_POST["request"] == "checklogin") {
    isLoggedIn();
}
elseif ($_POST["request"] == "logout") {
    logout();
}
elseif ($_POST["request"] == "checkuser") {
    isDupeUser($usr);
}
else {
    die("bad request");
}



function register ($usr, $pass, $cpass, $email, $register_moment, $games) {

    if ($pass != $cpass) {
        die("Mismatched passwords");
    }

    $table = "fp_users";

    $conn = conn();

    $stmt = mysqli_prepare($conn, "INSERT INTO $table (username, password, user_since, contact, games_played) VALUES (?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt, 'ssisi', $usr, $pass, $register_moment, $email, $games);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    login($usr, $pass);
}


function login ($usr, $pass) {
    $conn = conn();
    $table = "fp_users";

    $sql = "SELECT username, user_since, games_played, contact FROM $table WHERE username = \"$usr\" AND password = \"$pass\"";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = $result->fetch_row();
        $profile =  array("username"=>$row[0], "days_active"=>days_since($row[1]), "games_played"=>$row[2], "contact"=>$row[3]);
        $profile = (json_encode($profile));

        setcookie('loggedIn', $profile, time()+(86400*7), '/'); // Active 7 Days

        echo ($profile);

    } elseif (!mysqli_query($conn, $result)) {
        echo("INVALID");
        return;
    } else {
        echo ("ERROR: " . mysqli_error($conn)) . " :: " . mysqli_errno($conn);
        return;
    }

    $result->free();
    $conn->close();
    return;
}

function isLoggedIn () {
    if (isset($_COOKIE['loggedIn'])) {
        $c = $_COOKIE['loggedIn'];

        setcookie('loggedIn', $c, time()+(86400*7), '/'); // Refresh Cookie

        echo ($c);
    } else {
        echo("INVALID");
    }
    return;
}


function logout () {
    if (isset($_COOKIE['loggedIn'])) {
        setcookie('loggedIn', null, 0, '/');
        echo("LOGGED OUT");
    } else {
        echo("NO LOGIN FOUND");
    }
    return;
}

function isDupeUser ($usr) {
    $conn = conn();
    $table = "fp_users";
    $sql = "SELECT COUNT(*) FROM $table WHERE username = \"$usr\"";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_row();
    if ($row[0] > 0) {
        echo "USER EXISTS";
    } else {
        echo "VALID";
    }
    $result->free();
    $conn->close();
    return;

}

/* converts user start date to number of days ago that was, as int, rounded up */
function days_since($moment) {
    $now = time();
    return ceil(($now - $moment) / (60*60*24));
}

?>