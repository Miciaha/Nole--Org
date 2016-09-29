<?php
require_once "connection.php";

//find out which PDO drivers are available
//print_r(PDO::getAvailableDrivers());

$attributes =
array("AUTOCOMMIT", "CLIENT_VERSION", "CONNECTION_STATUS", "SERVER_INFO", "SERVER_VERSION");

foreach ($attributes as $val)
{
		echo "<tr><th>$val:</th></tr>";
?>

<?php
		echo "<tr><td>" . $db->getAttribute(constant("PDO::ATTR_$val")) . "</td></tr>";
?>

  <?php
	}
    $db = null;
  ?>
