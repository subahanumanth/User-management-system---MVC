<?php
class controller {
  public function __construct() {
    echo "Main Controller";
    $this->view = new view();
  }
}
