<?php
   // untuk memanggil file koneksi
   //header("Content-type: text/css");
   //include "query.php";
   include "td5.html";
   $server = "localhost";
   $username = "root";
   $password = "gisservicepower2012";
   $database = "project_IPLT";
   mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");  

   $tampil2 = mysql_query("SELECT  format((
			((`TrkPemda` * `RitPHrTrkPemda`) + ( `TrkSwasta` * `RitPHrTrkSwasta` ) )),2) AS vol, count( * ) AS jml FROM DaftIPLT GROUP BY vol
   			ORDER BY vol +0 DESC");
   $t= mysql_query("SELECT count(*) as jml from DaftIPLT");
   $t1 = mysql_fetch_array($t);
?>
<table border='1' width='500px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #CCCCCC'>
		<th>perkiraan vol. penyedotan tinja per hari (m3)</th>
		<th id='u'>jml. IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1;
	while ($am2=mysql_fetch_array($tampil2)) {
		if($i==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td class>".$am2[vol]."</td>
				<td class='b'>".$am2[jml]."</td>
			</tr>";
		$i++;
	}
		echo "<tr>
				<td style='font-weight:bold;'>Total IPLT</td>
				<td style='font-weight:bold;'>$t1[jml]</td>
			 </tr>";
?>
</table>