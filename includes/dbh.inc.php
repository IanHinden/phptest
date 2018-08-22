<?php

//Connect To Database
echo "Let's begin.";
$hostname='phpmyadmin.clv11adojqww.us-west-2.rds.amazonaws.com';
echo "Now log in.";
$username='phpMyAdmin';
$password='phpmyadmin';
$dbname='testingnewdb';
$usertable='users';
echo "I am logged in. Now connect!";

$con = mysqli_connect($hostname, $username, $password, $dbname);
if ($con-> connect_error) {
        die("Connection failed:" . $con-> connect_error);
}
echo "Connected properly";
?>