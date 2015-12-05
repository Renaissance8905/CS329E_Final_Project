<?php
/**
 * Created by PhpStorm.
 * User: cjs2599
 * Date: 12/4/15
 * Time: 6:54 PM
 */

require_once("login-register.php");

session_start();

if (isset($_COOKIE["loggedIn"])) {

    $user = json_decode($_COOKIE["loggedIn"]);
    $_SESSION["user"] = $user["username"];


}

?>