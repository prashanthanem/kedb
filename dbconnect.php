<?php
$connection = @mysql_connect('us-cdbr-iron-east-03.cleardb.net', 'b28e25d5c88e60',"9a07b9bf");
if (!$connection){
    die("Database Connection Failed" . @mysql_error($connection));
}
$select_db = @mysql_select_db('heroku_e8fbe5e3a9873d3',$connection);
if (!$select_db){
    die("Database Selection Failed" . @mysql_error($connection));
}
?>