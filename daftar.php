<HTML>
<HEAD>
<TITLE>FORM DAFTAR</TITLE>
<script language="JavaScript" src="validasi.js" type="text/javascript"></script>
<script language="javascript">
	function konfirmasi(msg,url){
		var pesan = confirm(msg);
		if (pesan==true)
		self.location=url;
		else
		return false;
	}
</script>

<script type="text/javascript" src="include/datepickercontrol.js"></script>
<link type="text/css" rel="stylesheet" href="include/datepickercontrol.css">
<HEAD>
<BODY>
<?PHP
echo "<form action='?hal=tanya' name='daftar' method='POST' target='_self'>";
echo "<table width='100%' border='0' cellpadding='2' cellspacing='1' bgcolor='#DBEAF5'>";
echo "<tr><td colspan='2'>SILAHKAN ISI DULU FORM DIBAWAH INI !</td></tr>";
echo "<tr bgcolor='white'><td width='30%'>Nama Kamu</td><td><input type='text' name='nama' size='30' maxlength='30'></td></tr>";

echo "<tr bgcolor='white'><td>Tanggal Lahir Kamu</td>";
echo "<td><input type='text' id='DPC_calendar1b_YYYY-MM-DD' name='tanggal_lahir_kamu' size='9' maxlength='9' value='1980-01-01'> (Thn-Bln-Tgl)";
echo "</td></tr>";

echo "<tr bgcolor='white'><td>Nama Doi Kamu</td><td><input type='text' name='namadoi' size='30' maxlength='30'></td></tr>";

echo "<tr bgcolor='white'><td>Tanggal Lahir Doi Kamu</td>";
echo "<td><input type='text' id='DPC_calendar2b_YYYY-MM-DD' name='tanggal_lahir_doi' size='9' maxlength='9' value='1980-01-01'> (Thn-Bln-Tgl)";
echo "</td></tr>";

echo "<tr><td align='right'><input type='reset' name='reset' value='RESET'></td><td align='center'><input type='submit' name='pasien' value='NEXT'></td></tr>";
echo "</table>";
echo "</form>";
?>
	  <script language="JavaScript" type="text/javascript">
		  var frmvalidator  = new Validator("daftar");
		  frmvalidator.addValidation("nama","req","Nama harus di isi!");		  		  
		  frmvalidator.addValidation("tanggal_lahir_kamu","req","TTL harus di isi!");
		  frmvalidator.addValidation("namadoi","req","Nama pasangan harus di isi!");		  		  
		  frmvalidator.addValidation("tanggal_lahir_doi","req","TTL harus di isi!");
	  </script>
</BODY>
</HTML>