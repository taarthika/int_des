<?php
    $uname = $_POST["username"];
    $upass = $_POST["password"];
    $uemail = $_POST["email"];
    $uphone = $_POST["phone"];
    $info = json_decode(file_get_contents("users.json"),true);
    $user = array();
    $user["name"] = $uname;
    $user["pass"] = $upass;
    $user["details"]["email"] = $uemail;
    $user["details"]["phone"] = $uphone;
    $info[] = $user;
   
    echo file_put_contents("users.json",json_encode($info));
    header("location:http://localhost/int_des1/login.html");
    
?>