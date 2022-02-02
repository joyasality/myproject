<HTML>
<HEAD>
<TITLE>FORM RAMAL</TITLE>

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

<HEAD>
<BODY>
<?php
echo "<form action='?hal=ramalan' name='daftar' method='POST' target='_self'>";
echo "<table width='100%' border='0' cellpadding='2' cellspacing='1' bgcolor='#DBEAF5'>";
echo "<tr><td colspan='2'>MASUKKAN NAMA KAMU DAN DOI KAMU</td></tr>";
echo "<tr bgcolor='white'><td width='30%'>Nama Kamu</td><td><input type='text' name='nama' size='30' maxlength='30'></td></tr>";
echo "<tr bgcolor='white'><td>Nama Doi Kamu</td><td><input type='text' name='namadoi' size='30' maxlength='30'></td></tr>";
echo "<tr><td colspan='2' align='center'><input type='submit' name='Ramal' value='RAMAL'></td></tr>";
echo "</table>";
echo "</form>";
?>
      <script language="JavaScript" type="text/javascript">
		  var frmvalidator  = new Validator("daftar");
		  frmvalidator.addValidation("nama","req","Nama harus di isi!");		  		  
		  frmvalidator.addValidation("namadoi","req","Nama pasangan kamu harus di isi!");
	  </script>
</BODY>
</HTML>