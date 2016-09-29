<?php

require_once("connection.php");

$queryMatches = 'SELECT * FROM Event
                 WHERE evt_interest = :evt_interest_p';

try
{
$statement1 = $db->prepare($queryMatches);
$statement1->bindValue(':evt_interest_p',$stu_int);
$statement1->execute();
$event = $statement1->fetch();
$evnt_info = $event['evt_description'];
$evnt_name = $event['evt_name'];
$evnt_int = $event['evt_interest'];
$statement1->closeCursor();
}
 catch (PDOException $e)
  {
    $error = $e->getMessage();
    echo $error;
  }

if ($evnt_int != $stu_int)
{
  echo "User has no matching interests.";
}
else
{
    echo "\n\n   User may be interested in the " . $evnt_name . " event.";
    echo $evt_info;
}

?>
