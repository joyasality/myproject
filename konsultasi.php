<?php
include "include/inc.koneksidb.php";

$nama1 = $_REQUEST['nama'];
$nama2 = $_REQUEST['namadoi'];
$tgl1 = $_REQUEST['tanggal_lahir_kamu'];
$tgl2 = $_REQUEST['tanggal_lahir_doi'];
$ip = $_SERVER['REMOTE_ADDR'];

mysql_query("DELETE FROM tmp_pasien WHERE noip='$ip'");
mysql_query("DELETE FROM tmp_no WHERE noip='$ip'");
mysql_query("DELETE FROM tmp_yes WHERE noip='$ip'");
mysql_query("INSERT INTO tmp_pasien VALUES('$nama1','$tgl1','$nama2','$tgl2','$ip')");

echo "<meta http-equiv='refresh' content='0; url=?hal=konsul'>";
?>