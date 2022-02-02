<?
	function HitungBobot($string){
		$len = strlen($string);
		$temp = ord($string[0]);
		for($i=1;$i<$len;$i++){
			$temp = $temp + (ord($string[$i]));
		}
		return($temp);
	}
	
	function Tukar(&$a, &$b){
		$temp = $a;
		$a = $b;
		$b = $temp;
	}
	
	function Ramalkan($nama_anda, $nama_pasangan){
		$a = HitungBobot(strtoupper($nama_anda));
		$b = HitungBobot(strtoupper($nama_pasangan));
		
		if($a < $b){
			Tukar($a, $b);
		}
		
		$hasil = sprintf("%2.2f", 100 - (($a - $b) * (100/$a)));
		return($hasil);
	}
	
	$nama_anda 		= $_POST['nama'];
	$nama_pasangan 	= $_POST['namadoi'];
	
	echo('Nama Anda : ' . $nama_anda . '<br/>');
	echo('Nama Pasangan Anda : ' . $nama_pasangan . '<br/>');
	echo('Hasil Ramalan : ' );
	echo(Ramalkan($nama_anda, $nama_pasangan) . ' %<br/>');
	echo "<br><strong>KETERANGAN : </strong>";
	$ramal = Ramalkan($nama_anda, $nama_pasangan);
	if ($ramal <= 50) {
	echo('TIDAK COCOK'); 
	}
	if ($ramal > 50) {
	echo('COCOK'); 
	}
?>