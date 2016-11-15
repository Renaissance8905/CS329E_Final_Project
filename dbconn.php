<?php
/**
 * Created by PhpStorm.
 * User: cjs2599
 * Date: 12/3/15
 * Time: 7:57 PM
 */

function conn() {
    $host = "fall-2015.cs.utexas.edu";
    $user = "cjs2599";
    $pwd = getPass();
    $db = "cs329e_cjs2599";
    $port = "3306";

    $connect = mysqli_connect($host, $user, $pwd, $db, $port);

    if (empty($connect)) {
        die("mysqli_connect failed: " . mysqli_connect_errno());
    }
    return $connect;
}


function getPass() {
    $f = fopen("/u/cjs2599/pass.txt", "r");
    $p = fgets($f);
    $p = trim($p);
    fclose($f);
    return $p;
}

function sanitize($data) {
    $data = urldecode($data);
    $data = trim($data);
    $data = stripslashes($data);
    $data = html_entity_decode($data);
    $data = htmlspecialchars($data);
    return $data;
}


