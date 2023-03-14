<?php
include "modelo.inc.php";
$sql="TRUNCATE TABLE factorial";
mysql_query($sql);
header("Location: index.php");
exit;
?>
