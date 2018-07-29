<?php
$serverName="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bnak_db";
$link=mysqli_connect($serverName,$dbusername,$dbpassword)/* or die('the website is down for maintainance')*/;
mysqli_select_db($link,$dbname) or die(mysql_error());
?>