<?php
@$hal = @$_REQUEST['hal'];
if ($hal == "daftar") {
	if(file_exists ("daftar.php")) {
		include "daftar.php";
	}
	else {
		echo "FILE PROGRAM DAFTAR TIDAK ADA";
	}
}
elseif ($hal == "about") {
	if(file_exists ("tentang.php")) {
		include "tentang.php";
	}
	else {
		echo "FILE PROGRAM KETERANGAN TIDAK ADA";
	}
}
elseif ($hal == "pembuat") {
	if(file_exists ("pembuat.php")) {
		include "pembuat.php";
	}
	else {
		echo "FILE SAYA TIDAK ADA";
	}
}
elseif ($hal == "tanya") {
	if(file_exists ("konsultasi.php")) {
		include "konsultasi.php";
	}
	else {
		echo "FILE KONSULTASI TIDAK ADA";
	}
}
elseif ($hal == "ramal") {
	if(file_exists ("ramal.php")) {
		include "ramal.php";
	}
	else {
		echo "FILE DAFTAR NAMA TIDAK ADA";
	}
}
elseif ($hal == "ramalan") {
	if(file_exists ("ramalan.php")) {
		include "ramalan.php";
	}
	else {
		echo "FILE RAMALAN TIDAK ADA";
	}
}
elseif ($hal == "") {
	if(file_exists ("awal.php")) {
		include "awal.php";
	}
	else {
		echo "FILE INDEX TIDAK ADA";
	}
}
elseif ($hal == "konsul") {
	if(file_exists ("konsul.php")) {
		include "konsul.php";
	}
	else {
		echo "FILE KONSUL TIDAK ADA";
	}
}
elseif ($hal == "konsulcek") {
	if(file_exists ("konsulcek.php")) {
		include "konsulcek.php";
	}
	else {
		echo "FILE KONSULCEK TIDAK ADA";
	}
}
elseif ($hal == "hasil") {
	if(file_exists ("hasil.php")) {
		include "hasil.php";
	}
	else {
		echo "FILE HASIL TIDAK ADA";
	}
}
elseif ($hal == "tanda_cinta") {
	if(file_exists ("tanda_cinta.php")) {
		include "tanda_cinta.php";
	}
	else {
		echo "FILE TANDA CINTA TIDAK ADA";
	}
}
elseif ($hal == "referensi") {
	if(file_exists ("referensi.php")) {
		include "referensi.php";
	}
	else {
		echo "FILE REFERENSI TIDAK ADA";
	}
}
elseif ($hal == "zodiak") {
	if(file_exists ("zodiak.php")) {
		include "zodiak.php";
	}
	else {
		echo "FILE ZODIAK TIDAK ADA";
	}
}
