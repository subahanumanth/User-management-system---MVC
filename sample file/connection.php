<?php
class db {
  public static function connection() {
    $connection = mysqli_connect("localhost", "root", "Hanu@1234", "Data");
    return $connection;
  }
  public static function closeConnection($conn) {
    $connection = mysqli_close($conn);
    return $connection;
  }
}
 ?>
