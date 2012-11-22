<?php
   // untuk memanggil file koneksi
	//header("Content-type: text/css");
   include "td3.html";
   include "query5.php";
   $server = "localhost";
	$username = "root";
	$password = "gisservicepower2012";
	$database = "project_IPLT";
	mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka"); 
?>	
<table border='1' width='700px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #CCCCCC'>
		<th>Kondisi Operasional IPLT</th>
		<th>Kondisi Fisik IPLT</th>
		<th>jml. IPLT</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman	
		echo 
			"<tr >
				<td>beroperasi</td>
				<td>baik</td>
				<td class='x'>$a1[jml]</td>
			</tr>
			<tr>
				<td>beroperasi</td>
				<td>rusak ringan / kurang terpelihara</td>
				<td class='x'>$a2[jml]</td>
			</tr>
			<tr >
				<td>beroperasi</td>
				<td>rusak / bocor / tdk terpelihara</td>
				<td class='x'>$a3[jml]</td>
			</tr>
			<tr >
				<td>beroperasi</td>
				<td>rusak berat</td>
				<td class='x'>$a4[jml]</td>
			</tr>
			<tr >
				<td>beroperasi</td>
				<td>sedang dalam rehabilitasi</td>
				<td class='x'>$a5[jml]</td>
			</tr>
			<tr >
				<td>beroperasi</td>
				<td>sedang proses konstruksi</td>
				<td class='x'>$a6[jml]</td>
			</tr>
			<tr >
				<td>beroperasi</td>
				<td>dibongkar jadi kantor</td>
				<td class='x'>$a7[jml]</td>
			</tr>
			<tr >
				<td>beroperasi</td>
				<td>tidak diketahui</td>
				<td class='x'>$a8[jml]</td>
			</tr>
			<tr >
				<td>dioperasikan tidak sebagaimana mestinya</td>
				<td>baik</td>
				<td class='x'>$aa1[jml]</td>
			</tr>
			<tr >
				<td>dioperasikan tidak sebagaimana mestinya</td>
				<td>rusak ringan / kurang terpelihara</td>
				<td class='x'>$aa2[jml]</td>
			</tr>
			<tr >
				<td>dioperasikan tidak sebagaimana mestinya</td>
				<td>rusak / bocor / tdk terpelihara</td>
				<td class='x'>$aa3[jml]</td>
			</tr>
			<tr >
				<td>dioperasikan tidak sebagaimana mestinya</td>
				<td>rusak berat</td>
				<td class='x'>$aa4[jml]</td>
			</tr>
			<tr >
				<td>dioperasikan tidak sebagaimana mestinya</td>
				<td>sedang dalam rehabilitasi</td>
				<td class='x'>$aa5[jml]</td>
			</tr>
			<tr >
				<td>dioperasikan tidak sebagaimana mestinya</td>
				<td>sedang proses konstruksi</td>
				<td class='x'>$aa6[jml]</td>
			</tr>
			<tr >
				<td>dioperasikan tidak sebagaimana mestinya</td>
				<td>dibongkar jadi kantor</td>
				<td class='x'>$aa7[jml]</td>
			</tr>
			<tr >
				<td>dioperasikan tidak sebagaimana mestinya</td>
				<td>tidak diketahui</td>
				<td class='x'>$aa8[jml]</td>
			</tr>
			<tr >
				<td>belum dioperasikan</td>
				<td>baik</td>
				<td class='x'>$aaa1[jml]</td>
			</tr>
			<tr >
				<td>belum dioperasikan</td>
				<td>rusak ringan / kurang terpelihara</td>
				<td class='x'>$aaa2[jml]</td>
			</tr>
			<tr >
				<td>belum dioperasikan</td>
				<td>rusak / bocor / tdk terpelihara</td>
				<td class='x'>$aaa3[jml]</td>
			</tr>
			<tr >
				<td>belum dioperasikan</td>
				<td>rusak berat</td>
				<td class='x'>$aaa4[jml]</td>
			</tr>
			<tr >
				<td>belum dioperasikan</td>
				<td>sedang dalam rehabilitasi</td>
				<td class='x'>$aaa5[jml]</td>
			</tr>
			<tr >
				<td>belum dioperasikan</td>
				<td>sedang proses konstruksi</td>
				<td class='x'>$aaa6[jml]</td>
			</tr>
			<tr >
				<td>belum dioperasikan</td>
				<td>dibongkar jadi kantor</td>
				<td class='x'>$aaa7[jml]</td>
			</tr>
			<tr >
				<td>belum dioperasikan</td>
				<td>tidak diketahui</td>
				<td class='x'>$aaa8[jml]</td>
			</tr>
			<tr >
				<td>tidak (tidak lagi) dioperasikan</td>
				<td>baik</td>
				<td class='x'>$aaaa1[jml]</td>
			</tr>
			<tr >
				<td>tidak (tidak lagi) dioperasikan</td>
				<td>rusak ringan / kurang terpelihara</td>
				<td class='x'>$aaaa2[jml]</td>
			</tr>
			<tr >
				<td>tidak (tidak lagi) dioperasikan</td>
				<td>rusak / bocor / tdk terpelihara</td>
				<td class='x'>$aaaa3[jml]</td>
			</tr>
			<tr >
				<td>tidak (tidak lagi) dioperasikan</td>
				<td>rusak berat</td>
				<td class='x'>$aaaa4[jml]</td>
			</tr>
			<tr >
				<td>tidak (tidak lagi) dioperasikan</td>
				<td>sedang dalam rehabilitasi</td>
				<td class='x'>$aaaa5[jml]</td>
			</tr>
			<tr >
				<td>tidak (tidak lagi) dioperasikan</td>
				<td>sedang proses konstruksi</td>
				<td class='x'>$aaaa6[jml]</td>
			</tr>
			<tr >
				<td>tidak (tidak lagi) dioperasikan</td>
				<td>dibongkar jadi kantor</td>
				<td class='x'>$aaaa7[jml]</td>
			</tr>
			<tr >
				<td>tidak (tidak lagi) dioperasikan</td>
				<td>tidak diketahui</td>
				<td class='x'>$aaaa8[jml]</td>
			</tr>
			<tr >
				<td>tidak diketahui</td>
				<td>baik</td>
				<td class='x'>$aaaaa1[jml]</td>
			</tr>
			<tr >
				<td>tidak diketahui</td>
				<td>rusak ringan / kurang terpelihara</td>
				<td class='x'>$aaaaa2[jml]</td>
			</tr>
			<tr >
				<td>tidak diketahui</td>
				<td>rusak / bocor / tdk terpelihara</td>
				<td class='x'>$aaaaa3[jml]</td>
			</tr>
			<tr >
				<td>tidak diketahui</td>
				<td>rusak berat</td>
				<td class='x'>$aaaaa4[jml]</td>
			</tr>
			<tr >
				<td>tidak diketahui</td>
				<td>sedang dalam rehabilitasi</td>
				<td class='x'>$aaaaa5[jml]</td>
			</tr>
			<tr >
				<td>tidak diketahui</td>
				<td>sedang proses konstruksi</td>
				<td class='x'>$aaaaa6[jml]</td>
			</tr>
			<tr >
				<td>tidak diketahui</td>
				<td>dibongkar jadi kantor</td>
				<td class='x'>$aaaaa7[jml]</td>
			</tr>
			<tr >
				<td>tidak diketahui</td>
				<td>tidak diketahui</td>
				<td class='x'>$aaaaa8[jml]</td>
			</tr>";
?>
</table>