<?php
$connection = @mysql_connect('localhost', 'root',"kedbdb");
if (!$connection){
    die("Database Connection Failed" . @mysql_error($connection));
}
$select_db = @mysql_select_db('kedb',$connection);
if (!$select_db){
    die("Database Selection Failed" . @mysql_error($connection));
}
?>