<?php

require("libs/controller.php");
require("libs/view.php");
require("libs/model.php");


$url = explode('/',$_GET['url']);
print_r($url);

$file  = "controller/".$url[0].".php";
if (file_exists($file)) {
  require($file);
} else {
  require "controller/error.php";
  $controller = new error1();
}
if (isset($url[0])) {
  $obj = new $url[0]();
}
if (isset($url[1])) {
    $obj->{$url[1]}();
}
