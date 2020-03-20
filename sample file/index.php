<?php
print_r($_SERVER);
$url = $_SERVER['PATH_INFO'];
$url = explode('/',$url);
print_r($url);
if (isset($url[1])) {
    require("./model/post.php");
    require("./controller/".$url[1].".php");
}

if(isset($url[2])) {
  $controller->{$url[2]}();
}

?>
