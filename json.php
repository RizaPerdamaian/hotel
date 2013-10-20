<?php

require ('config.php');

$sql = mysql_query("SELECT nama,alamat,spesifikasi,hotel_latitude,hotel_longitude from hotel");

while ($row = mysql_fetch_array($sql)) 
$cabang[] = $row;

$json = json_encode($cabang);

echo $json;
?>