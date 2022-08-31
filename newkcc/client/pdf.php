<?php 
session_start();
use Dompdf\Dompdf;
require 'vendor/autoload.php';
$dompdf = new Dompdf();

ob_start();
?>
<?php include('temp.php'); ?>
<?php
$html = ob_get_clean();
//$codeHTML = utf8_encode($html);

$dompdf->loadHtml($html);

$dompdf->setPaper('p','A4','landscape');
$dompdf->set_option('defaultFont','Courier'); 
ini_set('memory_limit','120M');

$dompdf->render();
$serial = $_SESSION['login_user'];
$time = time();
$name = $serial.''.$time;
$dompdf->stream($name.'.pdf');
?>

