<?php
// DATABASE CONNECTION FILE
// Because this file has only PHP content there is NO closing tag.
// It is safer without the closing PHP tag it can interfere with process
// (ex. URL redirects)

$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'daviddentistry';
$connection = mysqli_connect($host, $user, $password, $database);
