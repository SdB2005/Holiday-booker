<?php

class UserManager {
  public static function getAllUsers(){
    global $con;

    $stmt = $con->prepare("SELECT * FROM user");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public static function login(string $email, string $password){
    global $con;

    $stmt = $con->prepare("SELECT * FROM user WHERE user_email = ?");
    $stmt->bindValue(1, $email);
    $stmt->execute();
    $result = $stmt->fetchObject();

    if ($result && password_verify($password, $result->password))
    {
      $_SESSION["logged_in"] = true;
      return true;
    } else {
      $authError = "Password is incorrect!";
      return false;
    }
  }
}