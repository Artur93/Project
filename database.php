<?php

$host = "localhost";
$user = "root";
$dbpasswd = "vertrigo";
$database = "addressbook";

$connect = mysql_connect($host, $user,$dbpasswd);
$select = mysql_select_db($database);

 ?>