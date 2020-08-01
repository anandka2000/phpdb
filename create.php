<?php
$dbhost = getenv ("MYSQL_SERVICE_HOST");
$dbport = getenv ("MYSQL_SERVICE_PORT");
$dbuser = 'root';
$dbpwd  = getenv ("MYSQL_ROOT_PASSWORD");
$dbname = getenv ("MYSQL_DATABASE");

echo "dbhost is: ".$dbhost."<p>\n";
echo "dbport is: ".$dbport."<p>\n";
echo "dbname is: ".$dbname."<p>\n";


$connection = mysql_connect($dbhost.":".$dbport, $dbuser, $dbpwd);

if (!$connection) {
        echo "could not connect to database";
} else {
        echo "connected to database.<p>\n" ;
}

$dbconnection = mysql_select_db ($dbname);

$query = "create table users (user_id int not null auto_increment, username varchar(200), PRIMARY KEY (user_id));";
$rs = mysql_query($query);

$query = "insert into users values (null, 'anand');
$rs = mysql_query($query);

$query = "insert into users values (null. 'ajay');"
$rs = mysql_query($query);

echo "<p>\n";
mysql_close ();
