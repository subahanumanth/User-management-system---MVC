<?php
class post {
  public static function show () {
    require("connection.php");
    $conn = db::connection();
    $row = mysqli_query($conn, "select *from person");
    if(mysqli_num_rows($row) > 0) {
      while ($rows = mysqli_fetch_assoc($row)) {
        $list[] = $rows['age'];
      }
    }
    db::closeConnection($conn);
    return $list;
  }
}
 ?>
