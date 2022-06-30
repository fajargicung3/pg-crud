<?php 
$host = 'localhost';
$port = '5432';
$dbname = 'postgres';
$username = 'fajna01';
$password = 'fajna01';
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$username} password={$password}";
$conn = pg_connect($connection_string);
if(!$conn) {
  echo "Error : Unable to open database\n";
}
?>
