<?php
$con = mysql_connect("localhost","abc","abc123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
if (mysql_query("CREATE DATABASE my_db",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }
mysql_select_db("my_db", $con);
$sql = "CREATE TABLE Data 
(
Name varchar(15),
Passward varchar(15),
Email varchar(20)
)";
mysql_query($sql,$con);
?>