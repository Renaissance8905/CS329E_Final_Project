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



}




?>