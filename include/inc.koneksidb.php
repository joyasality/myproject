<?php
$my['host']	= "localhost";
$my['user']	= "root";
$my['pass']	= "";
$my['dbs']	= "pakarcinta";

$koneksi	= mysql_connect($my['host'], 
							$my['user'], 
							$my['pass']);
if (!$koneksi) {
  echo "Koneksi Gagal!";
  mysql_error();
}
mysql_select_db($my['dbs'])
	 or die ("Database tidak ada".mysql_error());

?>