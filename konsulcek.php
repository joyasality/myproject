<?php
include "include/inc.koneksidb.php";

$ip = $_SERVER['REMOTE_ADDR'];
$kd_tanya = $_REQUEST['kd_tanya'];

$jawab = $_POST['jawaban'];
if ($jawab == 'ya') {
	mysql_query("INSERT INTO tmp_yes VALUES('$ip','$kd_tanya')");
	echo "<meta http-equiv='refresh' content='0; url=?hal=konsul'>";
} else {
	mysql_query("INSERT into tmp_no VALUES('$ip','$kd_tanya')");
	echo "<meta http-equiv='refresh' content='0; url=?hal=konsul'>";
}
?>