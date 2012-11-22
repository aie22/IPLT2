<?php
   // untuk memanggil file koneksi
	//header("Content-type: text/css");
   include "td2.html";
   include "query3.php";
   $server = "localhost";
	$username = "root";
	$password = "gisservicepower2012";
	$database = "project_IPLT";
	mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka"); 
   
   // mendefinisikan nilai limit
   //$lim = 20;

   // mendefinisikan halaman pertama, jika tidak ada klik halaman maka diisi 0
   //$hal	= $_GET['hal'] ? $_GET['hal'] : 0;

   // query untuk mendapatkan jumlah seluruh row 
   
   $tampil=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						order by KdProp");
   $b1=mysql_fetch_array($a1);
   //$am2=mysql_fetch_array($tampil2);
   //$res = mysql_query($sql) or die (mysql_error()); 
   //$jml = mysql_num_rows($res);

   // menghitung maksimal halaman
   //$max = ceil($jml/$lim);

   // melakukan query limit
   //$sqlLimit = "SELECT * FROM report_JAKBAR LIMIT $hal, $lim"; 
?>
<table border='0' width='700px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse; text-align: center'>
		<th style='text-align: left; font-size: 20px'>Rekap Kondisi Operasi IPLT per Provinsi</th>
	</tr>
</table>	
<table border='1' width='700px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #CCCCCC'>
		<th>Nama Provinsi</th>
		<th>Jumlah IPLT</th>
		<th>beroperasi</th>
		<th>dioperasikan tidak sebagaimana mestinya</th>
		<th>belum dioperasikan</th>
		<th>tidak (tidak lagi) dioperasikan</th>
		<th>kondisi tidak diketahui</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
	$am1=mysql_fetch_array($tampil);
		echo 
			"<tr >
				<td class='x'>$am1[NmProp]</td>";
			
		echo "
				<td>".$a21[jumlah]."</td>
				<td>".$b1[beroperasi]."</td>
				<td>".$a4[beroperasi]."</td>
				<td>".$a6[beroperasi]."</td>
				<td>".$a8[beroperasi]."</td>
				<td>".$a16[beroperasi]."</td>
			</tr>";

			
		echo "
			<tr >
				<td class='x'>$b21[NmProp]</td>
				<td>".$b3[jumlah]."</td>
				<td>".$b5[beroperasi]."</td>
				<td>".$b7[beroperasi]."</td>
				<td>".$b9[beroperasi]."</td>
				<td>".$b11[beroperasi]."</td>
				<td>".$b19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$c21[NmProp]</td>
				<td>".$c3[jumlah]."</td>
				<td>".$c5[beroperasi]."</td>
				<td>".$c7[beroperasi]."</td>
				<td>".$c9[beroperasi]."</td>
				<td>".$c11[beroperasi]."</td>
				<td>".$c19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$d21[NmProp]</td>
				<td>".$d3[jumlah]."</td>
				<td>".$d5[beroperasi]."</td>
				<td>".$d7[beroperasi]."</td>
				<td>".$d9[beroperasi]."</td>
				<td>".$d11[beroperasi]."</td>
				<td>".$d19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$e21[NmProp]</td>
				<td>".$e3[jumlah]."</td>
				<td>".$e5[beroperasi]."</td>
				<td>".$e7[beroperasi]."</td>
				<td>".$e9[beroperasi]."</td>
				<td>".$e11[beroperasi]."</td>
				<td>".$e19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$f21[NmProp]</td>
				<td>".$f3[jumlah]."</td>
				<td>".$f5[beroperasi]."</td>
				<td>".$f7[beroperasi]."</td>
				<td>".$f9[beroperasi]."</td>
				<td>".$f11[beroperasi]."</td>
				<td>".$f19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$g21[NmProp]</td>
				<td>".$g3[jumlah]."</td>
				<td>".$g5[beroperasi]."</td>
				<td>".$g7[beroperasi]."</td>
				<td>".$g9[beroperasi]."</td>
				<td>".$g11[beroperasi]."</td>
				<td>".$g19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$h21[NmProp]</td>
				<td>".$h3[jumlah]."</td>
				<td>".$h5[beroperasi]."</td>
				<td>".$h7[beroperasi]."</td>
				<td>".$h9[beroperasi]."</td>
				<td>".$h11[beroperasi]."</td>
				<td>".$h19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$i21[NmProp]</td>
				<td>".$i3[jumlah]."</td>
				<td>".$i5[beroperasi]."</td>
				<td>".$i7[beroperasi]."</td>
				<td>".$i9[beroperasi]."</td>
				<td>".$i11[beroperasi]."</td>
				<td>".$i19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$j21[NmProp]</td>
				<td>".$j3[jumlah]."</td>
				<td>".$j5[beroperasi]."</td>
				<td>".$j7[beroperasi]."</td>
				<td>".$j9[beroperasi]."</td>
				<td>".$j11[beroperasi]."</td>
				<td>".$j19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$l21[NmProp]</td>
				<td>".$l3[jumlah]."</td>
				<td>".$l5[beroperasi]."</td>
				<td>".$l7[beroperasi]."</td>
				<td>".$l9[beroperasi]."</td>
				<td>".$l11[beroperasi]."</td>
				<td>".$l19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$m21[NmProp]</td>
				<td>".$m3[jumlah]."</td>
				<td>".$m5[beroperasi]."</td>
				<td>".$m7[beroperasi]."</td>
				<td>".$m9[beroperasi]."</td>
				<td>".$m11[beroperasi]."</td>
				<td>".$m19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$n21[NmProp]</td>
				<td>".$n3[jumlah]."</td>
				<td>".$n5[beroperasi]."</td>
				<td>".$n7[beroperasi]."</td>
				<td>".$n9[beroperasi]."</td>
				<td>".$n11[beroperasi]."</td>
				<td>".$n19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$o21[NmProp]</td>
				<td>".$o3[jumlah]."</td>
				<td>".$o5[beroperasi]."</td>
				<td>".$o7[beroperasi]."</td>
				<td>".$o9[beroperasi]."</td>
				<td>".$o11[beroperasi]."</td>
				<td>".$o19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$p21[NmProp]</td>
				<td>".$p3[jumlah]."</td>
				<td>".$p5[beroperasi]."</td>
				<td>".$p7[beroperasi]."</td>
				<td>".$p9[beroperasi]."</td>
				<td>".$p11[beroperasi]."</td>
				<td>".$p19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$q21[NmProp]</td>
				<td>".$q3[jumlah]."</td>
				<td>".$q5[beroperasi]."</td>
				<td>".$q7[beroperasi]."</td>
				<td>".$q9[beroperasi]."</td>
				<td>".$q11[beroperasi]."</td>
				<td>".$q19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$r21[NmProp]</td>
				<td>".$r3[jumlah]."</td>
				<td>".$r5[beroperasi]."</td>
				<td>".$r7[beroperasi]."</td>
				<td>".$r9[beroperasi]."</td>
				<td>".$r11[beroperasi]."</td>
				<td>".$r19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$s21[NmProp]</td>
				<td>".$s3[jumlah]."</td>
				<td>".$s5[beroperasi]."</td>
				<td>".$s7[beroperasi]."</td>
				<td>".$s9[beroperasi]."</td>
				<td>".$s11[beroperasi]."</td>
				<td>".$s19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$t21[NmProp]</td>
				<td>".$t3[jumlah]."</td>
				<td>".$t5[beroperasi]."</td>
				<td>".$t7[beroperasi]."</td>
				<td>".$t9[beroperasi]."</td>
				<td>".$t11[beroperasi]."</td>
				<td>".$t19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$u21[NmProp]</td>
				<td>".$u3[jumlah]."</td>
				<td>".$u5[beroperasi]."</td>
				<td>".$u7[beroperasi]."</td>
				<td>".$u9[beroperasi]."</td>
				<td>".$u11[beroperasi]."</td>
				<td>".$u19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$v21[NmProp]</td>
				<td>".$v3[jumlah]."</td>
				<td>".$v5[beroperasi]."</td>
				<td>".$v7[beroperasi]."</td>
				<td>".$v9[beroperasi]."</td>
				<td>".$v11[beroperasi]."</td>
				<td>".$v19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$w21[NmProp]</td>
				<td>".$w3[jumlah]."</td>
				<td>".$w5[beroperasi]."</td>
				<td>".$w7[beroperasi]."</td>
				<td>".$w9[beroperasi]."</td>
				<td>".$w11[beroperasi]."</td>
				<td>".$w19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$x21[NmProp]</td>
				<td>".$x3[jumlah]."</td>
				<td>".$x5[beroperasi]."</td>
				<td>".$x7[beroperasi]."</td>
				<td>".$x9[beroperasi]."</td>
				<td>".$x11[beroperasi]."</td>
				<td>".$x19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$y21[NmProp]</td>
				<td>".$y3[jumlah]."</td>
				<td>".$y5[beroperasi]."</td>
				<td>".$y7[beroperasi]."</td>
				<td>".$y9[beroperasi]."</td>
				<td>".$y11[beroperasi]."</td>
				<td>".$y19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$z21[NmProp]</td>
				<td>".$z3[jumlah]."</td>
				<td>".$z5[beroperasi]."</td>
				<td>".$z7[beroperasi]."</td>
				<td>".$z9[beroperasi]."</td>
				<td>".$z11[beroperasi]."</td>
				<td>".$z19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$az21[NmProp]</td>
				<td>".$az3[jumlah]."</td>
				<td>".$az5[beroperasi]."</td>
				<td>".$az7[beroperasi]."</td>
				<td>".$az9[beroperasi]."</td>
				<td>".$az11[beroperasi]."</td>
				<td>".$az19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$baz21[NmProp]</td>
				<td>".$baz3[jumlah]."</td>
				<td>".$baz5[beroperasi]."</td>
				<td>".$baz7[beroperasi]."</td>
				<td>".$baz9[beroperasi]."</td>
				<td>".$baz11[beroperasi]."</td>
				<td>".$baz19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$cbaz21[NmProp]</td>
				<td>".$cbaz3[jumlah]."</td>
				<td>".$cbaz5[beroperasi]."</td>
				<td>".$cbaz7[beroperasi]."</td>
				<td>".$cbaz9[beroperasi]."</td>
				<td>".$cbaz11[beroperasi]."</td>
				<td>".$cbaz19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$dcbaz21[NmProp]</td>
				<td>".$dcbaz3[jumlah]."</td>
				<td>".$dcbaz5[beroperasi]."</td>
				<td>".$dcbaz7[beroperasi]."</td>
				<td>".$dcbaz9[beroperasi]."</td>
				<td>".$dcbaz11[beroperasi]."</td>
				<td>".$dcbaz19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$edcbaz21[NmProp]</td>
				<td>".$edcbaz3[jumlah]."</td>
				<td>".$edcbaz5[beroperasi]."</td>
				<td>".$edcbaz7[beroperasi]."</td>
				<td>".$edcbaz9[beroperasi]."</td>
				<td>".$edcbaz11[beroperasi]."</td>
				<td>".$edcbaz19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$fedcbaz21[NmProp]</td>
				<td>".$fedcbaz3[jumlah]."</td>
				<td>".$fedcbaz5[beroperasi]."</td>
				<td>".$fedcbaz7[beroperasi]."</td>
				<td>".$fedcbaz9[beroperasi]."</td>
				<td>".$fedcbaz11[beroperasi]."</td>
				<td>".$fedcbaz19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$gfedcbaz21[NmProp]</td>
				<td>".$gfedcbaz3[jumlah]."</td>
				<td>".$gfedcbaz5[beroperasi]."</td>
				<td>".$gfedcbaz7[beroperasi]."</td>
				<td>".$gfedcbaz9[beroperasi]."</td>
				<td>".$gfedcbaz11[beroperasi]."</td>
				<td>".$gfedcbaz19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$hgfedcbaz21[NmProp]</td>
				<td>".$hgfedcbaz3[jumlah]."</td>
				<td>".$hgfedcbaz5[beroperasi]."</td>
				<td>".$hgfedcbaz7[beroperasi]."</td>
				<td>".$hgfedcbaz9[beroperasi]."</td>
				<td>".$hgfedcbaz11[beroperasi]."</td>
				<td>".$hgfedcbaz19[beroperasi]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x' style ='border-collapse: collapse; background-color: #CCCCCC; border:0px;'> </td>
				<td style='font-weight: bold;'>".$xxx1[IPLT]."</td>
				<td style='font-weight: bold;'>".$yyy1[beroperasi]."</td>
				<td style='font-weight: bold;'>".$zzz1[beroperasi]."</td>
				<td style='font-weight: bold;'>".$www1[beroperasi]."</td>
				<td style='font-weight: bold;'>".$aaa1[beroperasi]."</td>
				<td style='font-weight: bold;'>".$eee1[beroperasi]."</td>
			</tr>";
?>
</table>