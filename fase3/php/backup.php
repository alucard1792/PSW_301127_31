<?php 
$host = "localhost:3306";
$username = "root";
$password = "12345678";
$database_name = "bdunad31";
/*
// Get connection object and set the charset
$conn = mysqli_connect($host, $username, $password, $database_name);
if(! $conn ) {
    die('Could not connect: ' . mysql_error());
}
$conn->set_charset("utf8");
*/


$return_var = NULL;
$output = NULL;
$command = "C:/xampp/mysql/bin/mysqldump -u root -h localhost -p12345678 bdunad31 > " . getcwd() . "/bk.sql";
exec($command, $output, $return_var);

$attachment_location = getcwd() . "/bk.sql";
if (file_exists($attachment_location)) {
    header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
    header("Cache-Control: public"); // needed for internet explorer
    header("Content-Type: text/plain");
    header("Content-Transfer-Encoding: Binary");
    header("Content-Length:".filesize($attachment_location));
    header("Content-Disposition: attachment; filename=bk.sql");
    readfile($attachment_location);
    die();        
} else {
    die("Error: Archivo no encontrado");
} 

?>
