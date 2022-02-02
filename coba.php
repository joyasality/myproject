<?php
include "include/inc.koneksidb.php";

$qtmp = mysql_query("SELECT * FROM tmp_pasien");
$tmp = mysql_fetch_array($qtmp);
$waktu1 = $tmp[tgl_1];
$waktu2 = $tmp[tgl_2];

$waktu = $waktu2 - $waktu1;
if ($waktu < 0 ) {
	$komentar = 'tahun lebih dewasa dari Anda';
	$w = $waktu*-1; 
	} else {
	if ($waktu > 0) {
	$komentar = 'tahun lebih muda dari Anda';
	$w = $waktu;
	} else {
	$komentar = 'sebaya dengan Anda';
	}}
 
echo "$tmp[nama_2] $w $komentar";
?>