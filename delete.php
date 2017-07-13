<?php
$id = $_GET['ID'];
require('dbconnect.php');
$query = "DELETE FROM `tracking` WHERE ID=$id";
$result = mysql_query($query);
if($result) { 
	echo "</br>";
	echo "<div class='row'>";
    echo "<div class='alert alert-success col-md-offset-4 col-md-4' role='alert'>Deleted Item Successfully...</div>";
	echo "</div>";
	echo "<script>window.location.href='index.php'</script>";
	}
?>