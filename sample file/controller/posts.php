<?php
class posts {
  public function showAll () {
      echo "controller";
      $post = post::show ();
      require("./view/post.php");
  }
}
?>
