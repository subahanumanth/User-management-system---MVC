<?php
class help extends controller{
  public function __construct () {
    parent::__construct();
    echo "Controller Help";
  }
  public function other () {
    echo "Other Function";
    require ("model/help_model.php");
    $controller = new help_model();
  }
}
