<?php
 $usr = $_GET[username];
require_once("dbconn.php");
$connect = conn();
 $table = "fp_users";
$r = mysqli_query($connect, "SELECT * from $table WHERE username = $usr");
$count =  mysqli_num_rows($r);  
if ($count != 0){
    $results = "1";
    echo $results;
}
$r -> free();
?>