<?php
include "include/inc.koneksidb.php";

if ($_GET['id'] == ''){
$qzodiak = mysql_query("SELECT * FROM tbl_zodiak");
echo "<h3>Pilih Zodiak sesuai tanggal lahir kamu</h3>";
echo "<table width='100%' border='0'>";
echo "<form method='GET' action=''>";
while ($zodiak = mysql_fetch_array($qzodiak)) {
echo "<tr><td width='20%'><a href='?hal=zodiak&id=$zodiak[kd_zodiak]'>$zodiak[nm_zodiak]</a></td><td>$zodiak[tanggal]</td></tr>";
}
echo "</form>";
echo "</table>";
} else {
$id = $_GET['id'];
$qzodiak = mysql_query("SELECT * FROM tbl_zodiak WHERE kd_zodiak='".$_GET['id']."'");
$zo = mysql_fetch_array($qzodiak);
$qz = mysql_query("SELECT * FROM tbl_zodiak ORDER BY RAND() LIMIT 1");
$z = mysql_fetch_array($qz);
echo "<font color='blue'><strong>$zo[nm_zodiak] ($zo[tanggal])</strong></font><br>";
echo "<strong>Umum</strong><br>";
echo "$z[umum]<br>";
echo "<strong>Rezeki</strong><br>";
echo "$z[rezeki]<br>";
echo "<strong>Asmara</strong><br>";
echo "$z[asmara]<br>";
echo "<strong>Hari Baik</strong><br>";
echo "$z[hr_baik]<br>";
echo "<strong>Fisik</strong><br>";
echo "$z[fisik]<br>";
echo "<strong>Warna Keberuntungan</strong><br>";
echo "$z[warna]<br>";
}
?>