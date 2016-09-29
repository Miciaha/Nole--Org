<?php

$IP="local";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

if ($IP == "local")
{
  $dsn = 'mysql:host=localhost;port=3306;dbname=mydb';
  $username= 'root';
  $password = 'mysql';
}

else
{
  $dsn = 'mysql:host=localhost;port=3306;dbname=yourdbname';
	$username = 'yourusername';
	$password = 'yourpassword';
}

  try
  {
    $db = new PDO($dsn, $username, $password, $options);

  }
  catch (PDOException $e)
  {
    $error = $e->getMessage();
    include('error.php');
    exit();
  }
 ?>
