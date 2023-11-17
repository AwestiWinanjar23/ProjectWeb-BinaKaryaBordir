<?php
$host= "localhost";
$user= "root";
$pass= "";
$db= "db_bkbordir";
$connect= mysqli_connect($host,$user,$pass,$db) or die ("error".mysqli_error($connect));