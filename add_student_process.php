<?php

error_reporting(E_ALL);

$stu_fname_v = $_POST['fName'];
$stu_lname_v = $_POST['lName'];
$stu_fsu_id_v = $_POST['fsuId'];
$stu_email_v = $_POST['email'];
$stu_interest_v = $_POST['interest'];
$stu_year_v = $_POST['year'];
$stu_major_v = $_POST['major'];


if(
empty($stu_fname_v)||
empty($stu_lname_v)||
empty($stu_fsu_id_v)||
empty($stu_email_v)||
empty($stu_interest_v)||
empty($stu_year_v)||
empty($stu_major_v)
)
{
  $error = "All fields require data. Check all fields and try again.";
  include('error.php');
}

else
{
  require_once('connection.php');

  $query = "INSERT INTO student
  (stu_fname,stu_lname,fsu_id,stu_email,stu_major,stu_year,stu_interest)
  VALUES
  (:stu_fname_p,:stu_lname_p,:stu_fsu_id_p,:stu_email_p,:stu_major_p,:stu_year_p,:stu_interest_p)";

try
{
  $statement = $db->prepare($query);
  $statement->bindParam(':stu_fname_p',$stu_fname_v);
  $statement->bindParam(':stu_lname_p',$stu_lname_v);
  $statement->bindParam(':stu_fsu_id_p',$stu_fsu_id_v);
  $statement->bindParam(':stu_email_p',$stu_email_v);
  $statement->bindParam(':stu_interest_p',$stu_interest_v);
  $statement->bindParam(':stu_year_p',$stu_year_v);
  $statement->bindParam(':stu_major_p',$stu_major_v);
  $statement->execute();
  $statement->closeCursor();

  header('Location: index.php'); //redirect
}
  catch (PDOException $e)
    {
      $error = $e->getMessage();
      echo $error;

    }

}


 ?>
