
<html>
<head>
<title>Connect</title>
</head>
<body>

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

$sql = "INSERT INTO users (Number, First_Name, Last_Name, Age) VALUES (2, 'Don', 'Perrin', 50);";
mysqli_query($con, $sql);
mysqli_close($db_handle);
?>
</body>
</html>