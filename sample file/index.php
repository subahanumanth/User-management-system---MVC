<?php
$url = $_GET['url'];
$url = explode('/',$url);
print_r($url);
if (isset($url[0])) {
    require("./model/post.php");
    require("./controller/".$url[0].".php");
    $controller = new $url[0]();
}

if(isset($url[1])) {
  $controller->{$url[1]}();
}

?>
