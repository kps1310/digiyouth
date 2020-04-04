<?php

// getting req. variables for connection string from env vars
$localhost = 'localhost';
$DBNAME = 'youthexm_ydp';
$USERNAME = 'youthexm';
$PASSWORD = 'fitnesslove@409';
$DBPORT='3306';

$db=mysqli_connect($localhost,$USERNAME,$PASSWORD,$DBNAME);
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
