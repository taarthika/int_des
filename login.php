<?php
    $uname = $_POST["username"];
    $upass = $_POST["password"];
    $info = json_decode(file_get_contents("users.json"),true);
    $valid = false;
    $dat = array();
    foreach($info as $data) {
    if($data["name"] == $uname && $data["pass"] == $upass){
        $valid = true;
        $dat["email"] = $data["details"]["email"];
        $dat["phone"] = $data["details"]["phone"];
        break;
    }
    else
        $valid = false;
    }
    if($valid)
    header("Location:http://localhost/int_des1/index1.html");
    else
    echo "Invalid user!!Please Register";
    
?>