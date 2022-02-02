<?php
include "include/inc.koneksidb.php";

$ip = $_SERVER['REMOTE_ADDR'];
$qta = mysql_query("SELECT * FROM tanya");
$jta = mysql_num_rows($qta);
$qtmp = mysql_query("SELECT * FROM tmp_yes WHERE noip='$ip'");
$jtmp = mysql_num_rows($qtmp);
$qpasien = mysql_query("SELECT * FROM tmp_pasien WHERE noip='$ip'");
$pasien = mysql_fetch_array($qpasien);
$hasil = $jtmp/$jta*100;
echo "Hasilnya adalah....<br>";
echo "$pasien[nama_2] ";echo number_format($hasil,2); echo "% kadar cintanya sama $pasien[nama_1]<br>";
if ($hasil <= 50) {
    $saran = 'Tenang...! Mudah-mudahan aplikasinya yang error. Hubungi doi biar lebih jelas.'; }
if ($hasil > 50) {
    $saran = 'Horeee...! Kamu sudah berhasil mengambil hati dia. Kasih doi perhatian biar tambah lengket. SELAMAT !!!'; } 
echo "<br><strong>Saran : </strong>";
echo "<br>$saran<br>";
echo "<br><strong>Keterangan : </strong>";
include "coba.php";

?>
