<?php

class CountryManager {
  public static function getAll(){
    global $con;

    $stmt = $con->prepare("SELECT * FROM country");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
}