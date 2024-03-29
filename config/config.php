<?php 
//initialize session
session_start();

//database connection
$dsn = 'mysql:dbname=holidaybooker;=localhost';
$user = 'root';
$password = '';

$con = new PDO($dsn, $user, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//autoloader
spl_autoload_register(function ($className) {
  $classFile = str_replace('\\', '/', $className) . '.php';
  
  // Check if the class file exists in Managers
  if (file_exists('../src/managers/' . $classFile)) {
  require ('../src/managers/' . $classFile);
  } 
  });
?>