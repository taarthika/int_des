<?php
$uname = $_GET["username"];
if ($uname == "kitchen")
include "kitchen.html";
else if($uname == "living room")
include "livingroom.html";
else if($uname == "home decor")
include "homedecor.html";
else if($uname == "outdoor dining")
include "outdoor.html";
else if($uname == "study area")
include "study.html";
else 
echo 'Sorry!! pictures unavailable.....we will get back to you soon!!'
?>