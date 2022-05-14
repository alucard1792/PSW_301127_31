<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$host = "localhost:3306";
$username = "root";
$password = "12345678";
$database_name = "bdunad31";
$templateBody = "";
$counter = 0;
// Get connection object and set the charset
$conn = mysqli_connect($host, $username, $password, $database_name);
if(! $conn ) {
    die('Could not connect: ' . mysql_error());
}
$conn->set_charset("utf8");
$res = mysqli_query($conn, "select * from productos");

while ($row = mysqli_fetch_array($res)) {
    $templateBody .= "<tr>".
                        "<td>".$row['cod']."</td>".
                        "<td>".$row['nombre']."</td>".
                        "<td>".$row['marca']."</td>".
                        "<td>".$row['precio']."</td>".
                        "<td>".$row['cantidad']."</td>".
                    "</tr>";
    $counter += intval($row['cantidad']);                
}

$html = file_get_contents_curl("http://localhost/PSW_301127_31/fase3/php/template.php");

$html = str_replace("{0}", $templateBody, $html);
$html = str_replace("{1}", $counter, $html);

$pdf = new DOMPDF();
 
$pdf->set_paper("letter", "portrait");
 
$pdf->load_html(utf8_decode($html));
 
$pdf->render();
 

$pdf->stream('reporte.pdf');

function file_get_contents_curl($url) {
	$crl = curl_init();
	$timeout = 5;
	curl_setopt($crl, CURLOPT_URL, $url);
	curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
	$ret = curl_exec($crl);
	curl_close($crl);
	return $ret;
}

