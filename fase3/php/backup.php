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

/*
$db_user = "root";
$db_pwd = "12345678";
$db_name = "bdunad31";
$bkp_file_path = "C:/temp/data.sql";

// create backup
shell_exec("C:\xampp\mysql\bin\mysqldump -u{$db_user} -p{$db_pwd} {$db_name} > {$bkp_file_path}");
*/

/*
$table_name = "productos";
$backup_file  = "/tmp/employee.sql";
$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";

mysql_select_db('bdunad31');
$retval = mysql_query( $sql, $conn );
*/
/*
// Get All Table Names From the Database
$tables = array();
$sql = "SHOW TABLES";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_row($result)) {
    $tables[] = $row[0];
    echo $row[0];
}
*/
/*



    // Save the SQL script to a backup file
    $backup_file_name = $database_name . '_backup_' . time() . '.sql';
    $fileHandler = fopen($backup_file_name, 'w+');
    $number_of_lines = fwrite($fileHandler, $sqlScript);
    fclose($fileHandler); 

    // Download the SQL backup file to the browser
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($backup_file_name));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($backup_file_name));
    ob_clean();
    flush();
    readfile($backup_file_name);
    exec('rm ' . $backup_file_name); 
*/



?>
