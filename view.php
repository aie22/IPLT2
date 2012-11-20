<?php
   // untuk memanggil file koneksi
	//header("Content-type: text/css");
   include "query.php";
   include "td.html";
   $objConnect = mysql_connect("localhost","root","") or die(mysql_error());
   $objDB = mysql_select_db("proyek30juta"); 
   
   // mendefinisikan nilai limit
   //$lim = 20;

   // mendefinisikan halaman pertama, jika tidak ada klik halaman maka diisi 0
   //$hal	= $_GET['hal'] ? $_GET['hal'] : 0;

   // query untuk mendapatkan jumlah seluruh row 
   
   $tampil2=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.NmProp = 'Aceh' 
						order by DaftIPLT.KdIdIPLT");
   $tampil3=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.NmProp = 'Sumatera Utara' 
						order by DaftIPLT.KdIdIPLT");
   $tampil4=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.NmProp = 'Sumatera Barat' 
						order by DaftIPLT.KdIdIPLT");
   //$am2=mysql_fetch_array($tampil2);
   //$res = mysql_query($sql) or die (mysql_error()); 
   //$jml = mysql_num_rows($res);

   // menghitung maksimal halaman
   //$max = ceil($jml/$lim);

   // melakukan query limit
   //$sqlLimit = "SELECT * FROM report_JAKBAR LIMIT $hal, $lim"; 
?>
<table <table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000; text-align: center'>
		<th style='text-align: center; font-size: 20px'>DAFTAR IPLT SELURUH INDONESIA</th>
	</tr>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>101 PROVINSI ACEH</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am2=mysql_fetch_array($tampil2)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am2[KdIdIPLT]."</td>
				<td>".$am2[NmIPLT]."</td>
				<td>".$am2[NmKabKotLkp]."</td>
				<td>".$am2[KondFskIPLT]."</td>
				<td>".$am2[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>102 PROVINSI SUMATERA UTARA</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am3=mysql_fetch_array($tampil3)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am3[KdIdIPLT]."</td>
				<td>".$am3[NmIPLT]."</td>
				<td>".$am3[NmKabKotLkp]."</td>
				<td>".$am3[KondFskIPLT]."</td>
				<td>".$am3[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>103 PROVINSI SUMATERA BARAT</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am4=mysql_fetch_array($tampil4)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am4[KdIdIPLT]."</td>
				<td>".$am4[NmIPLT]."</td>
				<td>".$am4[NmKabKotLkp]."</td>
				<td>".$am4[KondFskIPLT]."</td>
				<td>".$am4[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>104 PROVINSI SUMATERA SELATAN</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am5=mysql_fetch_array($tampil5)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am5[KdIdIPLT]."</td>
				<td>".$am5[NmIPLT]."</td>
				<td>".$am5[NmKabKotLkp]."</td>
				<td>".$am5[KondFskIPLT]."</td>
				<td>".$am5[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>105 PROVINSI LAMPUNG</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am6=mysql_fetch_array($tampil6)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am6[KdIdIPLT]."</td>
				<td>".$am6[NmIPLT]."</td>
				<td>".$am6[NmKabKotLkp]."</td>
				<td>".$am6[KondFskIPLT]."</td>
				<td>".$am6[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>106 PROVINSI BENGKULU</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am7=mysql_fetch_array($tampil7)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am7[KdIdIPLT]."</td>
				<td>".$am7[NmIPLT]."</td>
				<td>".$am7[NmKabKotLkp]."</td>
				<td>".$am7[KondFskIPLT]."</td>
				<td>".$am7[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>107 PROVINSI JAMBI</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am8=mysql_fetch_array($tampil8)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am8[KdIdIPLT]."</td>
				<td>".$am8[NmIPLT]."</td>
				<td>".$am8[NmKabKotLkp]."</td>
				<td>".$am8[KondFskIPLT]."</td>
				<td>".$am8[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>108 PROVINSI RIAU</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am9=mysql_fetch_array($tampil9)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am9[KdIdIPLT]."</td>
				<td>".$am9[NmIPLT]."</td>
				<td>".$am9[NmKabKotLkp]."</td>
				<td>".$am9[KondFskIPLT]."</td>
				<td>".$am9[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>109 PROVINSI KEPULAUAN RIAU</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am10=mysql_fetch_array($tampil10)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am10[KdIdIPLT]."</td>
				<td>".$am10[NmIPLT]."</td>
				<td>".$am10[NmKabKotLkp]."</td>
				<td>".$am10[KondFskIPLT]."</td>
				<td>".$am10[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>110 PROVINSI KEPULAUAN BANGKA BELITUNG</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am11=mysql_fetch_array($tampil11)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am11[KdIdIPLT]."</td>
				<td>".$am11[NmIPLT]."</td>
				<td>".$am11[NmKabKotLkp]."</td>
				<td>".$am11[KondFskIPLT]."</td>
				<td>".$am11[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>201 PROVINSI JAKARTA</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am12=mysql_fetch_array($tampil12)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am12[KdIdIPLT]."</td>
				<td>".$am12[NmIPLT]."</td>
				<td>".$am12[NmKabKotLkp]."</td>
				<td>".$am12[KondFskIPLT]."</td>
				<td>".$am12[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>202 PROVINSI BANTEN</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am13=mysql_fetch_array($tampil13)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am13[KdIdIPLT]."</td>
				<td>".$am13[NmIPLT]."</td>
				<td>".$am13[NmKabKotLkp]."</td>
				<td>".$am13[KondFskIPLT]."</td>
				<td>".$am13[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>203 PROVINSI JAWA BARAT</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am14=mysql_fetch_array($tampil14)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am14[KdIdIPLT]."</td>
				<td>".$am14[NmIPLT]."</td>
				<td>".$am14[NmKabKotLkp]."</td>
				<td>".$am14[KondFskIPLT]."</td>
				<td>".$am14[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>204 PROVINSI JAWA TENGAH</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am15=mysql_fetch_array($tampil15)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class ='x'>".$am15[KdIdIPLT]."</td>
				<td>".$am15[NmIPLT]."</td>
				<td>".$am15[NmKabKotLkp]."</td>
				<td>".$am15[KondFskIPLT]."</td>
				<td>".$am15[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>205 PROVINSI YOGYAKARTA</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am29=mysql_fetch_array($tampil29)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class ='x'>".$am29[KdIdIPLT]."</td>
				<td>".$am29[NmIPLT]."</td>
				<td>".$am29[NmKabKotLkp]."</td>
				<td>".$am29[KondFskIPLT]."</td>
				<td>".$am29[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>206 PROVINSI JAWA TIMUR</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am16=mysql_fetch_array($tampil16)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am16[KdIdIPLT]."</td>
				<td>".$am16[NmIPLT]."</td>
				<td>".$am16[NmKabKotLkp]."</td>
				<td>".$am16[KondFskIPLT]."</td>
				<td>".$am16[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>301 PROVINSI BALI</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am17=mysql_fetch_array($tampil17)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am17[KdIdIPLT]."</td>
				<td>".$am17[NmIPLT]."</td>
				<td>".$am17[NmKabKotLkp]."</td>
				<td>".$am17[KondFskIPLT]."</td>
				<td>".$am17[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>302 PROVINSI NUSA TENGGARA BARAT</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am18=mysql_fetch_array($tampil18)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am18[KdIdIPLT]."</td>
				<td>".$am18[NmIPLT]."</td>
				<td>".$am18[NmKabKotLkp]."</td>
				<td>".$am18[KondFskIPLT]."</td>
				<td>".$am18[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>303 PROVINSI NUSA TENGGARA TIMUR</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am19=mysql_fetch_array($tampil19)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am19[KdIdIPLT]."</td>
				<td>".$am19[NmIPLT]."</td>
				<td>".$am19[NmKabKotLkp]."</td>
				<td>".$am19[KondFskIPLT]."</td>
				<td>".$am19[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>401 PROVINSI KALIMANTAN BARAT</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am20=mysql_fetch_array($tampil20)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am20[KdIdIPLT]."</td>
				<td>".$am20[NmIPLT]."</td>
				<td>".$am20[NmKabKotLkp]."</td>
				<td>".$am20[KondFskIPLT]."</td>
				<td>".$am20[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<?php
$am30=mysql_fetch_array($tampil30); 
	if ($am30[KdIdIPLT] != Null){  
	echo "<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>402 PROVINSI KALIMANTAN SELATAN</th>
	</tr>
	</table>	
	<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>";
	echo		"<th>Kondisi Operasi IPLT</th>";
	echo	"</tr> ";
    $i = 1;
	
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am30[KdIdIPLT]."</td>
				<td>".$am30[NmIPLT]."</td>
				<td>".$am30[NmKabKotLkp]."</td>
				<td>".$am30[KondFskIPLT]."</td>
				<td>".$am30[KondOpIPLT]."</td>
			</tr>";
		$i++;
		} else {
			echo " ";
		}
	
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>403 PROVINSI KALIMANTAN TENGAH</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am21=mysql_fetch_array($tampil21)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am21[KdIdIPLT]."</td>
				<td>".$am21[NmIPLT]."</td>
				<td>".$am21[NmKabKotLkp]."</td>
				<td>".$am21[KondFskIPLT]."</td>
				<td>".$am21[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>404 PROVINSI KALIMANTAN TIMUR</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am22=mysql_fetch_array($tampil22)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am22[KdIdIPLT]."</td>
				<td>".$am22[NmIPLT]."</td>
				<td>".$am22[NmKabKotLkp]."</td>
				<td>".$am22[KondFskIPLT]."</td>
				<td>".$am22[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>501 PROVINSI SULAWESI SELATAN</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am23=mysql_fetch_array($tampil23)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am23[KdIdIPLT]."</td>
				<td>".$am23[NmIPLT]."</td>
				<td>".$am23[NmKabKotLkp]."</td>
				<td>".$am23[KondFskIPLT]."</td>
				<td>".$am23[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<?php
$am31=mysql_fetch_array($tampil31); 
	if ($am31[KdIdIPLT] != Null){  
	echo "<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>502 PROVINSI SULAWESI UTARA</th>
	</tr>
	</table>	
	<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>";
	echo		"<th>Kondisi Operasi IPLT</th>";
	echo	"</tr> ";
    $i = 1;
	
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am31[KdIdIPLT]."</td>
				<td>".$am31[NmIPLT]."</td>
				<td>".$am31[NmKabKotLkp]."</td>
				<td>".$am31[KondFskIPLT]."</td>
				<td>".$am31[KondOpIPLT]."</td>
			</tr>";
		$i++;
		} else {
			echo " ";
		}
	
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>503 PROVINSI SULAWESI TENGGARA</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am24=mysql_fetch_array($tampil24)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am24[KdIdIPLT]."</td>
				<td>".$am24[NmIPLT]."</td>
				<td>".$am24[NmKabKotLkp]."</td>
				<td>".$am24[KondFskIPLT]."</td>
				<td>".$am24[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>504 PROVINSI SULAWESI TENGAH</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am25=mysql_fetch_array($tampil25)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am25[KdIdIPLT]."</td>
				<td>".$am25[NmIPLT]."</td>
				<td>".$am25[NmKabKotLkp]."</td>
				<td>".$am25[KondFskIPLT]."</td>
				<td>".$am25[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>505 PROVINSI GORONTALO</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am26=mysql_fetch_array($tampil26)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am26[KdIdIPLT]."</td>
				<td>".$am26[NmIPLT]."</td>
				<td>".$am26[NmKabKotLkp]."</td>
				<td>".$am26[KondFskIPLT]."</td>
				<td>".$am26[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<?php
$am32=mysql_fetch_array($tampil32); 
	if ($am32[KdIdIPLT] != Null){  
	echo "<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>506 PROVINSI SULAWESI BARAT</th>
	</tr>
	</table>	
	<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>";
	echo		"<th>Kondisi Operasi IPLT</th>";
	echo	"</tr> ";
    $i = 1;
	
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am32[KdIdIPLT]."</td>
				<td>".$am32[NmIPLT]."</td>
				<td>".$am32[NmKabKotLkp]."</td>
				<td>".$am32[KondFskIPLT]."</td>
				<td>".$am32[KondOpIPLT]."</td>
			</tr>";
		$i++;
		} else {
			echo " ";
		}
	
?>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>601 PROVINSI MALUKU</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am27=mysql_fetch_array($tampil27)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am27[KdIdIPLT]."</td>
				<td>".$am27[NmIPLT]."</td>
				<td>".$am27[NmKabKotLkp]."</td>
				<td>".$am27[KondFskIPLT]."</td>
				<td>".$am27[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<?php
$am33=mysql_fetch_array($tampil33); 
	if ($am33[KdIdIPLT] != Null){  
	echo "<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>602 PROVINSI MALUKU UTARA</th>
	</tr>
	</table>	
	<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>";
	echo		"<th>Kondisi Operasi IPLT</th>";
	echo	"</tr> ";
    $i = 1;
	
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am33[KdIdIPLT]."</td>
				<td>".$am33[NmIPLT]."</td>
				<td>".$am33[NmKabKotLkp]."</td>
				<td>".$am33[KondFskIPLT]."</td>
				<td>".$am33[KondOpIPLT]."</td>
			</tr>";
		$i++;
		} else {
			echo " ";
		}
	
?>
</table>
</table>
<br/><br/>
<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>603 PROVINSI PAPUA</th>
	</tr>
</table>	
<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>
		<th>Kondisi Operasi IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am28=mysql_fetch_array($tampil28)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am28[KdIdIPLT]."</td>
				<td>".$am28[NmIPLT]."</td>
				<td>".$am28[NmKabKotLkp]."</td>
				<td>".$am28[KondFskIPLT]."</td>
				<td>".$am28[KondOpIPLT]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<br/><br/>
<?php
$am34=mysql_fetch_array($tampil34); 
	if ($am34[KdIdIPLT] != Null){  
	echo "<table <table border='0' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse'>
		<th style='text-align: left; font-size: 20px'>604 PROVINSI PAPUA BARAT</th>
	</tr>
	</table>	
	<table border='1' width='850px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #fbe000'>
		<th>Kd IPLT</th>
		<th>Nama IPLT</th>
		<th>Kota/Kabupaten</th>
		<th>Kondisi Fisik IPLT</th>";
	echo		"<th>Kondisi Operasi IPLT</th>";
	echo	"</tr> ";
    $i = 1;
	
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class='x'>".$am34[KdIdIPLT]."</td>
				<td>".$am34[NmIPLT]."</td>
				<td>".$am34[NmKabKotLkp]."</td>
				<td>".$am34[KondFskIPLT]."</td>
				<td>".$am34[KondOpIPLT]."</td>
			</tr>";
		$i++;
		} else {
			echo " ";
		}
	
?>
</table>