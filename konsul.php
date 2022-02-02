<?php
include "include/inc.koneksidb.php";

$qtanya = mysql_query("SELECT * FROM tmp_yes");
$jtanya = mysql_num_rows($qtanya);
$ip = $_SERVER['REMOTE_ADDR'];

echo "<table width='100%' border='0' cellpadding='2' cellspacing='1'>";
echo "<form method='POST' action='?hal=konsulcek'>";
echo "<tr bgcolor='#DBEAF5'><td>JAWABLAH PERTANYAAN BERIKUT INI !</td></tr>";
if ($jtanya >= 1) {
$qsoal = mysql_query("SELECT * FROM tanya WHERE kd_tanya NOT IN(SELECT kd_tanya FROM tmp_yes WHERE noip='$ip') AND NOT kd_tanya IN(SELECT kd_tanya FROM tmp_no WHERE noip='$ip') GROUP BY kd_tanya LIMIT 1");
$tanya = mysql_fetch_array($qsoal);	
} else {
$qsoal = mysql_query("SELECT * FROM tanya LIMIT 1");
$tanya = mysql_fetch_array($qsoal);
}
$qno = mysql_query("SELECT * FROM tmp_no");
$jno = mysql_num_rows($qno);

$qt = mysql_query("SELECT * FROM tanya");
$jt = mysql_num_rows($qt);

if ($jt == $jtanya+$jno) {
echo "<meta http-equiv='refresh' content='0; url=?hal=hasil'>";
exit;
}

echo "<tr><td><input type='hidden' name='kd_tanya' value='$tanya[kd_tanya]'>Apakah pasangan Anda $tanya[tanya] ?</td></tr>";
echo "<tr><td><input type='radio' name='jawaban' value='ya' checked>YA &nbsp <input type='radio' name='jawaban' value='tidak'>TIDAK</td></tr>";
echo "<tr bgcolor='#DBEAF5'><td><input type='submit' name='jawab' value='JAWAB'></td></tr>";
echo "</form>";
echo "</table>";
?>