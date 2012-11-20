<?php
   // untuk memanggil file koneksi
	//header("Content-type: text/css");
   include "td2.html";
   include "query4.php";
   $objConnect = mysql_connect("localhost","root","") or die(mysql_error());
   $objDB = mysql_select_db("proyek30juta"); 
   
   // mendefinisikan nilai limit
   //$lim = 20;

   // mendefinisikan halaman pertama, jika tidak ada klik halaman maka diisi 0
   //$hal	= $_GET['hal'] ? $_GET['hal'] : 0;

   // query untuk mendapatkan jumlah seluruh row 
   
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
		<th style='text-align: left; font-size: 20px'>Rekap Sumber Dana vs. Kondisi Fisik IPLT</th>
	</tr>
</table>	
<table border='1' width='700px' cellpadding='3' cellspacing='0' style='border-collapse:collapse; margin-left: 50px'>
	<tr align='center' style='border-collapse:collapse; background-color:  #CCCCCC'>
		<th>Sumber Dana</th>
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
		$am=mysql_query("SELECT SDanaPemb as a from SumberDana Where SDanaPemb = 'APBD Prov.' ");
		$amm=mysql_query("SELECT SDanaPemb as a from SumberDana Where SDanaPemb = 'APBN' ");
		$ammm=mysql_query("SELECT SDanaPemb as a from SumberDana Where SDanaPemb = 'APBN+APBD' ");
		$ammmm=mysql_query("SELECT SDanaPemb as a from SumberDana Where SDanaPemb = 'APBN+Loan' ");
		$ammmmm=mysql_query("SELECT SDanaPemb as a from SumberDana Where SDanaPemb = 'BRR' ");
		$ammmmmm=mysql_query("SELECT SDanaPemb as a from SumberDana Where SDanaPemb = 'JICA + Unicef' ");
		$ammmmmmm=mysql_query("SELECT SDanaPemb as a from SumberDana Where SDanaPemb = 'Loan ADB' ");
		$ammmmmmmm=mysql_query("SELECT SDanaPemb as a from SumberDana Where SDanaPemb = 'P3KT/IBRD' ");

		$am1 = mysql_fetch_array($am);
		$am2 = mysql_fetch_array($amm);
		$am3 = mysql_fetch_array($ammm);
		$am4 = mysql_fetch_array($ammmm);
		$am5 = mysql_fetch_array($ammmmm);
		$am6 = mysql_fetch_array($ammmmmm);
		$am7 = mysql_fetch_array($ammmmmmm);
		$am8 = mysql_fetch_array($ammmmmmmm);
		echo 
			"<tr >
				<td class='x'>tdk diketahui</td>";
			
		echo "
				<td>".$sdanaa[jml]."</td>
				<td>".$a1[jml]."</td>
				<td>".$a2[jml]."</td>
				<td>".$a3[jml]."</td>
				<td>".$a4[jml]."</td>
				<td>".$a5[jml]."</td>
				<td>".$a6[jml]."</td>
				<td>".$a7[jml]."</td>
				<td>".$a8[jml]."</td>
			</tr>";
		echo
			"<tr >
				<td class='x'>$am1[a]</td>
				<td>".$sdanaaa[jml]."</td>
				<td>".$aa1[jml]."</td>
				<td>".$aa2[jml]."</td>
				<td>".$aa3[jml]."</td>
				<td>".$aa4[jml]."</td>
				<td>".$aa5[jml]."</td>
				<td>".$aa6[jml]."</td>
				<td>".$aa7[jml]."</td>
				<td>".$aa8[jml]."</td>
			</tr>";
		echo
			"<tr >
				<td class='x'>$am2[a]</td>
				<td>".$sdanaaaa[jml]."</td>
				<td>".$aaa1[jml]."</td>
				<td>".$aaa2[jml]."</td>
				<td>".$aaa3[jml]."</td>
				<td>".$aaa4[jml]."</td>
				<td>".$aaa5[jml]."</td>
				<td>".$aaa6[jml]."</td>
				<td>".$aaa7[jml]."</td>
				<td>".$aaa8[jml]."</td>
			</tr>";
		echo
			"<tr >
				<td class='x'>$am3[a]</td>
				<td>".$sdanaaaaa[jml]."</td>
				<td>".$aaaa1[jml]."</td>
				<td>".$aaaa2[jml]."</td>
				<td>".$aaaa3[jml]."</td>
				<td>".$aaaa4[jml]."</td>
				<td>".$aaaa5[jml]."</td>
				<td>".$aaaa6[jml]."</td>
				<td>".$aaaa7[jml]."</td>
				<td>".$aaaa8[jml]."</td>
			</tr>";
		echo
			"<tr >
				<td class='x'>$am4[a]</td>
				<td>".$sdanaaaaaa[jml]."</td>
				<td>".$aaaaa1[jml]."</td>
				<td>".$aaaaa2[jml]."</td>
				<td>".$aaaaa3[jml]."</td>
				<td>".$aaaaa4[jml]."</td>
				<td>".$aaaaa5[jml]."</td>
				<td>".$aaaaa6[jml]."</td>
				<td>".$aaaaa7[jml]."</td>
				<td>".$aaaaa8[jml]."</td>
			</tr>";
		echo
			"<tr >
				<td class='x'>$am5[a]</td>
				<td>".$sdanaaaaaaa[jml]."</td>
				<td>".$aaaaaa1[jml]."</td>
				<td>".$aaaaaa2[jml]."</td>
				<td>".$aaaaaa3[jml]."</td>
				<td>".$aaaaaa4[jml]."</td>
				<td>".$aaaaaa5[jml]."</td>
				<td>".$aaaaaa6[jml]."</td>
				<td>".$aaaaaa7[jml]."</td>
				<td>".$aaaaaa8[jml]."</td>
			</tr>";
		echo
			"<tr >
				<td class='x'>$am6[a]</td>
				<td>".$sdanaaaaaaaa[jml]."</td>
				<td>".$aaaaaaa1[jml]."</td>
				<td>".$aaaaaaa2[jml]."</td>
				<td>".$aaaaaaa3[jml]."</td>
				<td>".$aaaaaaa4[jml]."</td>
				<td>".$aaaaaaa5[jml]."</td>
				<td>".$aaaaaaa6[jml]."</td>
				<td>".$aaaaaaa7[jml]."</td>
				<td>".$aaaaaaa8[jml]."</td>
			</tr>";
		echo
			"<tr >
				<td class='x'>$am7[a]</td>
				<td>".$sdanaaaaaaaaa[jml]."</td>
				<td>".$aaaaaaaa1[jml]."</td>
				<td>".$aaaaaaaa2[jml]."</td>
				<td>".$aaaaaaaa3[jml]."</td>
				<td>".$aaaaaaaa4[jml]."</td>
				<td>".$aaaaaaaa5[jml]."</td>
				<td>".$aaaaaaaa6[jml]."</td>
				<td>".$aaaaaaaa7[jml]."</td>
				<td>".$aaaaaaaa8[jml]."</td>
			</tr>";
		echo
			"<tr >
				<td class='x'>$am8[a]</td>
				<td>".$sdanaaaaaaaaaa[jml]."</td>
				<td>".$aaaaaaaaa1[jml]."</td>
				<td>".$aaaaaaaaa2[jml]."</td>
				<td>".$aaaaaaaaa3[jml]."</td>
				<td>".$aaaaaaaaa4[jml]."</td>
				<td>".$aaaaaaaaa5[jml]."</td>
				<td>".$aaaaaaaaa6[jml]."</td>
				<td>".$aaaaaaaaa7[jml]."</td>
				<td>".$aaaaaaaaa8[jml]."</td>
			</tr>";
		$x = mysql_query("SELECT count(NmIPLT) as k from DaftIPLT");
		$x1 = mysql_query("SELECT count(*) as k from DaftIPLT where KondFskIPLT='baik' ");
		$x2 = mysql_query("SELECT count(*) as k from DaftIPLT where KondFskIPLT='rusak ringan / kurang terpelihara' ");
		$x3 = mysql_query("SELECT count(*) as k from DaftIPLT where KondFskIPLT='rusak / bocor / tdk terpelihara' ");
		$x4 = mysql_query("SELECT count(*) as k from DaftIPLT where KondFskIPLT='rusak berat' ");
		$x5 = mysql_query("SELECT count(*) as k from DaftIPLT where KondFskIPLT='sedang dalam rehabilitasi' ");
		$x6 = mysql_query("SELECT count(*) as k from DaftIPLT where KondFskIPLT='sedang proses konstruksi' ");
		$x7 = mysql_query("SELECT count(*) as k from DaftIPLT where KondFskIPLT='dibongkar jadi kantor' ");
		$x8 = mysql_query("SELECT count(*) as k from DaftIPLT where KondFskIPLT=' ' ");

		$elect = mysql_fetch_array($x);
		$elect1 = mysql_fetch_array($x1);
		$elect2 = mysql_fetch_array($x2);
		$elect3 = mysql_fetch_array($x3);
		$elect4 = mysql_fetch_array($x4);
		$elect5 = mysql_fetch_array($x5);
		$elect6 = mysql_fetch_array($x6);
		$elect7 = mysql_fetch_array($x7);
		$elect8 = mysql_fetch_array($x8);
		echo
			"<tr >
				<td class='x' style ='border-collapse: collapse; background-color: #CCCCCC; border:0px;'> </td>
				<td style='font-weight: bold;'>".$elect[k]." </td>
				<td style='font-weight: bold;'>".$elect1[k]."</td>
				<td style='font-weight: bold;'>".$elect2[k]."</td>
				<td style='font-weight: bold;'>".$elect3[k]."</td>
				<td style='font-weight: bold;'>".$elect4[k]."</td>
				<td style='font-weight: bold;'>".$elect5[k]."</td>
				<td style='font-weight: bold;'>".$elect6[k]."</td>
				<td style='font-weight: bold;'>".$elect7[k]."</td>
				<td style='font-weight: bold;'>".$elect8[k]."</td>
			</tr>";
?>





