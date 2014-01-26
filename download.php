<?php
$download = $_GET["download"];
header('Content-disposition: attachment; filename='.$download);
header('Content-type: application/audio');
readfile($download);
?>