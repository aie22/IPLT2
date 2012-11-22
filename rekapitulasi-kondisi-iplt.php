<?php
   // untuk memanggil file koneksi
	//header("Content-type: text/css");
   include "td2.html";
   include "query2.php";
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
<table border='0' width='800px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px' align='center'>
	<tr align='center' style='border-collapse:collapse; text-align: center'>
		<th style='text-align: left; font-size: 20px'>Rekap Kondisi Fisik IPLT per Provinsi</th>
	</tr>
</table>	
<table border='1' width='800px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #CCCCCC'>
		<th>Nama Provinsi</th>
		<th>Jumlah IPLT</th>
		<th >baik</th>
		<th>rusak ringan / kurang terpelihara</th>
		<th>rusak / bocor / tdk terpelihara</th>
		<th>rusak berat</th>
		<th>sedang dalam rehabilitasi</th>
		<th>sedang proses konstruksi</th>
		<th>dibongkar jadi kantor</th>
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
				<td>".$b1[baik]."</td>
				<td>".$a4[baik]."</td>
				<td>".$a6[baik]."</td>
				<td>".$a8[baik]."</td>
				<td>".$a10[baik]."</td>
				<td>".$a12[baik]."</td>
				<td>".$a14[baik]."</td>
				<td>".$a16[baik]."</td>
			</tr>";

			
		echo "
			<tr >
				<td class='x'>$b21[NmProp]</td>
				<td>".$b3[jumlah]."</td>
				<td>".$b5[baik]."</td>
				<td>".$b7[baik]."</td>
				<td>".$b9[baik]."</td>
				<td>".$b11[baik]."</td>
				<td>".$b13[baik]."</td>
				<td>".$b15[baik]."</td>
				<td>".$b17[baik]."</td>
				<td>".$b19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$c21[NmProp]</td>
				<td>".$c3[jumlah]."</td>
				<td>".$c5[baik]."</td>
				<td>".$c7[baik]."</td>
				<td>".$c9[baik]."</td>
				<td>".$c11[baik]."</td>
				<td>".$c13[baik]."</td>
				<td>".$c15[baik]."</td>
				<td>".$c17[baik]."</td>
				<td>".$c19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$d21[NmProp]</td>
				<td>".$d3[jumlah]."</td>
				<td>".$d5[baik]."</td>
				<td>".$d7[baik]."</td>
				<td>".$d9[baik]."</td>
				<td>".$d11[baik]."</td>
				<td>".$d13[baik]."</td>
				<td>".$d15[baik]."</td>
				<td>".$d17[baik]."</td>
				<td>".$d19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$e21[NmProp]</td>
				<td>".$e3[jumlah]."</td>
				<td>".$e5[baik]."</td>
				<td>".$e7[baik]."</td>
				<td>".$e9[baik]."</td>
				<td>".$e11[baik]."</td>
				<td>".$e13[baik]."</td>
				<td>".$e15[baik]."</td>
				<td>".$e17[baik]."</td>
				<td>".$e19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$f21[NmProp]</td>
				<td>".$f3[jumlah]."</td>
				<td>".$f5[baik]."</td>
				<td>".$f7[baik]."</td>
				<td>".$f9[baik]."</td>
				<td>".$f11[baik]."</td>
				<td>".$f13[baik]."</td>
				<td>".$f15[baik]."</td>
				<td>".$f17[baik]."</td>
				<td>".$f19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$g21[NmProp]</td>
				<td>".$g3[jumlah]."</td>
				<td>".$g5[baik]."</td>
				<td>".$g7[baik]."</td>
				<td>".$g9[baik]."</td>
				<td>".$g11[baik]."</td>
				<td>".$g13[baik]."</td>
				<td>".$g15[baik]."</td>
				<td>".$g17[baik]."</td>
				<td>".$g19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$h21[NmProp]</td>
				<td>".$h3[jumlah]."</td>
				<td>".$h5[baik]."</td>
				<td>".$h7[baik]."</td>
				<td>".$h9[baik]."</td>
				<td>".$h11[baik]."</td>
				<td>".$h13[baik]."</td>
				<td>".$h15[baik]."</td>
				<td>".$h17[baik]."</td>
				<td>".$h19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$i21[NmProp]</td>
				<td>".$i3[jumlah]."</td>
				<td>".$i5[baik]."</td>
				<td>".$i7[baik]."</td>
				<td>".$i9[baik]."</td>
				<td>".$i11[baik]."</td>
				<td>".$i13[baik]."</td>
				<td>".$i15[baik]."</td>
				<td>".$i17[baik]."</td>
				<td>".$i19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$j21[NmProp]</td>
				<td>".$j3[jumlah]."</td>
				<td>".$j5[baik]."</td>
				<td>".$j7[baik]."</td>
				<td>".$j9[baik]."</td>
				<td>".$j11[baik]."</td>
				<td>".$j13[baik]."</td>
				<td>".$j15[baik]."</td>
				<td>".$j17[baik]."</td>
				<td>".$j19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$l21[NmProp]</td>
				<td>".$l3[jumlah]."</td>
				<td>".$l5[baik]."</td>
				<td>".$l7[baik]."</td>
				<td>".$l9[baik]."</td>
				<td>".$l11[baik]."</td>
				<td>".$l13[baik]."</td>
				<td>".$l15[baik]."</td>
				<td>".$l17[baik]."</td>
				<td>".$l19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$m21[NmProp]</td>
				<td>".$m3[jumlah]."</td>
				<td>".$m5[baik]."</td>
				<td>".$m7[baik]."</td>
				<td>".$m9[baik]."</td>
				<td>".$m11[baik]."</td>
				<td>".$m13[baik]."</td>
				<td>".$m15[baik]."</td>
				<td>".$m17[baik]."</td>
				<td>".$m19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$n21[NmProp]</td>
				<td>".$n3[jumlah]."</td>
				<td>".$n5[baik]."</td>
				<td>".$n7[baik]."</td>
				<td>".$n9[baik]."</td>
				<td>".$n11[baik]."</td>
				<td>".$n13[baik]."</td>
				<td>".$n15[baik]."</td>
				<td>".$n17[baik]."</td>
				<td>".$n19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$o21[NmProp]</td>
				<td>".$o3[jumlah]."</td>
				<td>".$o5[baik]."</td>
				<td>".$o7[baik]."</td>
				<td>".$o9[baik]."</td>
				<td>".$o11[baik]."</td>
				<td>".$o13[baik]."</td>
				<td>".$o15[baik]."</td>
				<td>".$o17[baik]."</td>
				<td>".$o19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$p21[NmProp]</td>
				<td>".$p3[jumlah]."</td>
				<td>".$p5[baik]."</td>
				<td>".$p7[baik]."</td>
				<td>".$p9[baik]."</td>
				<td>".$p11[baik]."</td>
				<td>".$p13[baik]."</td>
				<td>".$p15[baik]."</td>
				<td>".$p17[baik]."</td>
				<td>".$p19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$q21[NmProp]</td>
				<td>".$q3[jumlah]."</td>
				<td>".$q5[baik]."</td>
				<td>".$q7[baik]."</td>
				<td>".$q9[baik]."</td>
				<td>".$q11[baik]."</td>
				<td>".$q13[baik]."</td>
				<td>".$q15[baik]."</td>
				<td>".$q17[baik]."</td>
				<td>".$q19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$r21[NmProp]</td>
				<td>".$r3[jumlah]."</td>
				<td>".$r5[baik]."</td>
				<td>".$r7[baik]."</td>
				<td>".$r9[baik]."</td>
				<td>".$r11[baik]."</td>
				<td>".$r13[baik]."</td>
				<td>".$r15[baik]."</td>
				<td>".$r17[baik]."</td>
				<td>".$r19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$s21[NmProp]</td>
				<td>".$s3[jumlah]."</td>
				<td>".$s5[baik]."</td>
				<td>".$s7[baik]."</td>
				<td>".$s9[baik]."</td>
				<td>".$s11[baik]."</td>
				<td>".$s13[baik]."</td>
				<td>".$s15[baik]."</td>
				<td>".$s17[baik]."</td>
				<td>".$s19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$t21[NmProp]</td>
				<td>".$t3[jumlah]."</td>
				<td>".$t5[baik]."</td>
				<td>".$t7[baik]."</td>
				<td>".$t9[baik]."</td>
				<td>".$t11[baik]."</td>
				<td>".$t13[baik]."</td>
				<td>".$t15[baik]."</td>
				<td>".$t17[baik]."</td>
				<td>".$t19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$u21[NmProp]</td>
				<td>".$u3[jumlah]."</td>
				<td>".$u5[baik]."</td>
				<td>".$u7[baik]."</td>
				<td>".$u9[baik]."</td>
				<td>".$u11[baik]."</td>
				<td>".$u13[baik]."</td>
				<td>".$u15[baik]."</td>
				<td>".$u17[baik]."</td>
				<td>".$u19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$v21[NmProp]</td>
				<td>".$v3[jumlah]."</td>
				<td>".$v5[baik]."</td>
				<td>".$v7[baik]."</td>
				<td>".$v9[baik]."</td>
				<td>".$v11[baik]."</td>
				<td>".$v13[baik]."</td>
				<td>".$v15[baik]."</td>
				<td>".$v17[baik]."</td>
				<td>".$v19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$w21[NmProp]</td>
				<td>".$w3[jumlah]."</td>
				<td>".$w5[baik]."</td>
				<td>".$w7[baik]."</td>
				<td>".$w9[baik]."</td>
				<td>".$w11[baik]."</td>
				<td>".$w13[baik]."</td>
				<td>".$w15[baik]."</td>
				<td>".$w17[baik]."</td>
				<td>".$w19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$x21[NmProp]</td>
				<td>".$x3[jumlah]."</td>
				<td>".$x5[baik]."</td>
				<td>".$x7[baik]."</td>
				<td>".$x9[baik]."</td>
				<td>".$x11[baik]."</td>
				<td>".$x13[baik]."</td>
				<td>".$x15[baik]."</td>
				<td>".$x17[baik]."</td>
				<td>".$x19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$y21[NmProp]</td>
				<td>".$y3[jumlah]."</td>
				<td>".$y5[baik]."</td>
				<td>".$y7[baik]."</td>
				<td>".$y9[baik]."</td>
				<td>".$y11[baik]."</td>
				<td>".$y13[baik]."</td>
				<td>".$y15[baik]."</td>
				<td>".$y17[baik]."</td>
				<td>".$y19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$z21[NmProp]</td>
				<td>".$z3[jumlah]."</td>
				<td>".$z5[baik]."</td>
				<td>".$z7[baik]."</td>
				<td>".$z9[baik]."</td>
				<td>".$z11[baik]."</td>
				<td>".$z13[baik]."</td>
				<td>".$z15[baik]."</td>
				<td>".$z17[baik]."</td>
				<td>".$z19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$az21[NmProp]</td>
				<td>".$az3[jumlah]."</td>
				<td>".$az5[baik]."</td>
				<td>".$az7[baik]."</td>
				<td>".$az9[baik]."</td>
				<td>".$az11[baik]."</td>
				<td>".$az13[baik]."</td>
				<td>".$az15[baik]."</td>
				<td>".$az17[baik]."</td>
				<td>".$az19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$baz21[NmProp]</td>
				<td>".$baz3[jumlah]."</td>
				<td>".$baz5[baik]."</td>
				<td>".$baz7[baik]."</td>
				<td>".$baz9[baik]."</td>
				<td>".$baz11[baik]."</td>
				<td>".$baz13[baik]."</td>
				<td>".$baz15[baik]."</td>
				<td>".$baz17[baik]."</td>
				<td>".$baz19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$cbaz21[NmProp]</td>
				<td>".$cbaz3[jumlah]."</td>
				<td>".$cbaz5[baik]."</td>
				<td>".$cbaz7[baik]."</td>
				<td>".$cbaz9[baik]."</td>
				<td>".$cbaz11[baik]."</td>
				<td>".$cbaz13[baik]."</td>
				<td>".$cbaz15[baik]."</td>
				<td>".$cbaz17[baik]."</td>
				<td>".$cbaz19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$dcbaz21[NmProp]</td>
				<td>".$dcbaz3[jumlah]."</td>
				<td>".$dcbaz5[baik]."</td>
				<td>".$dcbaz7[baik]."</td>
				<td>".$dcbaz9[baik]."</td>
				<td>".$dcbaz11[baik]."</td>
				<td>".$dcbaz13[baik]."</td>
				<td>".$dcbaz15[baik]."</td>
				<td>".$dcbaz17[baik]."</td>
				<td>".$dcbaz19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$edcbaz21[NmProp]</td>
				<td>".$edcbaz3[jumlah]."</td>
				<td>".$edcbaz5[baik]."</td>
				<td>".$edcbaz7[baik]."</td>
				<td>".$edcbaz9[baik]."</td>
				<td>".$edcbaz11[baik]."</td>
				<td>".$edcbaz13[baik]."</td>
				<td>".$edcbaz15[baik]."</td>
				<td>".$edcbaz17[baik]."</td>
				<td>".$edcbaz19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$fedcbaz21[NmProp]</td>
				<td>".$fedcbaz3[jumlah]."</td>
				<td>".$fedcbaz5[baik]."</td>
				<td>".$fedcbaz7[baik]."</td>
				<td>".$fedcbaz9[baik]."</td>
				<td>".$fedcbaz11[baik]."</td>
				<td>".$fedcbaz13[baik]."</td>
				<td>".$fedcbaz15[baik]."</td>
				<td>".$fedcbaz17[baik]."</td>
				<td>".$fedcbaz19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$gfedcbaz21[NmProp]</td>
				<td>".$gfedcbaz3[jumlah]."</td>
				<td>".$gfedcbaz5[baik]."</td>
				<td>".$gfedcbaz7[baik]."</td>
				<td>".$gfedcbaz9[baik]."</td>
				<td>".$gfedcbaz11[baik]."</td>
				<td>".$gfedcbaz13[baik]."</td>
				<td>".$gfedcbaz15[baik]."</td>
				<td>".$gfedcbaz17[baik]."</td>
				<td>".$gfedcbaz19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x'>$hgfedcbaz21[NmProp]</td>
				<td>".$hgfedcbaz3[jumlah]."</td>
				<td>".$hgfedcbaz5[baik]."</td>
				<td>".$hgfedcbaz7[baik]."</td>
				<td>".$hgfedcbaz9[baik]."</td>
				<td>".$hgfedcbaz11[baik]."</td>
				<td>".$hgfedcbaz13[baik]."</td>
				<td>".$hgfedcbaz15[baik]."</td>
				<td>".$hgfedcbaz17[baik]."</td>
				<td>".$hgfedcbaz19[baik]."</td>
			</tr>";
		echo "
			<tr >
				<td class='x' style ='border-collapse: collapse; background-color: #CCCCCC; border:0px;'> </td>
				<td style='font-weight: bold;'>".$xxx1[IPLT]."</td>
				<td style='font-weight: bold;'>".$yyy1[baik]."</td>
				<td style='font-weight: bold;'>".$zzz1[baik]."</td>
				<td style='font-weight: bold;'>".$www1[baik]."</td>
				<td style='font-weight: bold;'>".$aaa1[baik]."</td>
				<td style='font-weight: bold;'>".$bbb1[baik]."</td>
				<td style='font-weight: bold;'>".$ccc1[baik]."</td>
				<td style='font-weight: bold;'>".$ddd1[baik]."</td>
				<td style='font-weight: bold;'>".$eee1[baik]."</td>
			</tr>";
?>
</table>