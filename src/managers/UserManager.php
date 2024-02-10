<?php

class UserManager
{
  public static function getAllUsers()
  {
    global $con;

    $stmt = $con->prepare("SELECT * FROM user");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public static function login(string $email, string $password)
  {
    global $con;

    $stmt = $con->prepare("SELECT * FROM user WHERE user_email = ?");
    $stmt->bindValue(1, $email);
    $stmt->execute();
    $result = $stmt->fetchObject();

    if ($result && password_verify($password, $result->user_password)) {
      $_SESSION["logged_in"] = true;
      session_start();
      return true;
    } else {
      $authError = "Password is incorrect!";
      return false;
    }
  }

  public static function userExists($email)
  {
    global $con;

    $stmt = $con->prepare("SELECT * FROM user WHERE user_email = ?");
    $stmt->bindValue(1, $email);
    $stmt->execute();
    return $stmt->fetchObject();
  }

  public static function register(string $firstname, string $lastname, string $gender, int $country, string $email, string $password)
  {
    global $con;

    $stmt = $con->prepare("SELECT * FROM user WHERE user_email = ?");
    $stmt->bindValue(1, $email);
    $stmt->execute();
    $userExists = $stmt->fetchObject();

    if (!$userExists) {
      $stmt = $con->prepare("INSERT INTO user (user_firstname, user_lastname, user_gender, country_id, user_email, user_password) VALUES(?,?,?,?,?,?)");
      $stmt->bindValue(1, $firstname);
      $stmt->bindValue(2, $lastname);
      $stmt->bindValue(3, $gender);
      $stmt->bindValue(4, $country);
      $stmt->bindValue(5, $email);
      $stmt->bindValue(6, password_hash($password, PASSWORD_DEFAULT));
      $stmt->execute();
    } else {
      return false;
    }
  }
}
