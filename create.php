<?php
$dbhost = getenv ("MYSQL_SERVICE_HOST");
$dbport = getenv ("MYSQL_SERVICE_PORT");
$dbuser = 'root';
$dbpwd  = getenv ("MYSQL_ROOT_PASSWORD");
$dbname = getenv ("MYSQL_DATABASE");

echo "dbhost is: ".$dbhost."<p>\n";
echo "dbport is: ".$dbport."<p>\n";
echo "dbname is: ".$dbname."<p>\n";

$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwd);

if (!$connection) {
        echo "could not connect to database";
} else {
        echo "connected to database.<p>\n" ;
}

$dbconnection = mysqli_select_db ($connection, $dbname);

$query = "create table users (user_id int not null auto_increment, username varchar(200), PRIMARY KEY (user_id));";
$rs = mysqli_query($connection, $query);

$query = "insert into users  values (null, 'anand')";
$rs = mysqli_query($connection, $query);

$query = "insert into users values (null, 'ajay')";
$rs = mysqli_query($connection, $query);

$query = "insert into users values (null, 'uml')";
$rs = mysqli_query($connection, $query);

$query = "insert into users values (null, 'newuser')";
$rs = mysqli_query($connection, $query);


echo "records inserted successfully <p>\n";
mysqli_close ($connection);

?>
