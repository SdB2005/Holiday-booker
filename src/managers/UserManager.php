<?php

class UserManager {
  public static function getAllUsers(){
    global $con;

    $stmt = $con->prepare("SELECT * FROM user");
    $stmt->execute();
    return $stmt->fetchAll();
  }
}