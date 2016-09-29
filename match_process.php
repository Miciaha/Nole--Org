<?php

$stu_fsu_id_v = $_POST['fsu_id'];

if
(
empty($stu_fsu_id_v)
)
{
  include("index.php");
}

else{
require_once('connection.php');

$queryID = 'SELECT * FROM student
            WHERE fsu_id = :fsu_id';
try
{
  $statement = $db->prepare($queryID);
  $statement->bindValue(':fsu_id',$stu_fsu_id_v);
  $statement->execute();
  $student_a = $statement->fetch();
  $student_id = $student_a['fsu_id'];
  $stu_int = $student_a['stu_interest'];
  $stu_name = $student_a['stu_fname'] . " " . $student_a['stu_lname'];
  $statement->closeCursor();

}

  catch(PDOException $e)
    {
      $error = $e->getMessage();
      echo $error;
    }

}

if ($student_id === $stu_fsu_id_v){

  echo "The user " . $stu_name . " is interested in " . $stu_int;
  include("matches.php");

}

else if (empty($stu_fsu_id_v)){
  echo "Please enter an FSU ID.";
}
else{
  echo "It appears that your FSU ID could not be identified. Please fill out the form below to register.";
  include("add_student.php");
}


?>
