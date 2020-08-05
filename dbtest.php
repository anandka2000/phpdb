<?php
$dbhost = getenv ("MYSQL_SERVICE_HOST");
$dbport = getenv ("MYSQL_SERVICE_PORT");
$dbuser = 'root';
$dbpwd  = getenv ("MYSQL_ROOT_PASSWORD");
$dbname = getenv ("MYSQL_DATABASE");
$hname  = getenv ("HOSTNAME");

echo "dbhost is: ".$dbhost."<p>\n";
echo "dbport is: ".$dbport."<p>\n";
echo "dbname is: ".$dbname."<p>\n";
echo "hostname is: ".$hname."<p>\n";


$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwd);

if (!$connection) {
        echo "could not connect to database";
} else {
        echo "connected to database.<p>\n" ;
}

$dbconnection = mysqli_select_db ($connection, $dbname);

$query = "SELECT * from users";

$rs = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($rs)) {
        echo $row['user_id']." ".$row['username']."<p>\n";
}
mysqli_free_result($rs);

mysqli_close ($connection);

echo "<p>\n";
