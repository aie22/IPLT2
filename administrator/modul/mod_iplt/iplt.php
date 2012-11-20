<?php    
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{

$aksi="modul/mod_iplt/aksi_iplt.php";
switch($_GET[act]){
  // Tampil Berita
  default:
    echo "<h2>IPLT</h2>
          <form method=get action='$_SERVER[PHP_SELF]'>
          <input type=hidden name=inyong value=iplt>
          <div id=paging>Masukkan Nama IPLT : <input type=text name='kata'> <input type=submit value=Cari></div>
          </form>
          <input type=button value='Tambah IPLT' onclick=\"window.location.href='?inyong=iplt&act=tambahiplt';\">";

    if (empty($_GET['kata'])){
    echo "<table>  
          <tr><th>no</th><th>kode iplt</th><th>nama iplt</th><th>aksi</th></tr>";

    $p      = new Paging11;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    if ($_SESSION[leveluser]=='admin'){
      $tampil = mysql_query("SELECT * FROM DaftIPLT ORDER BY id DESC LIMIT $posisi,$batas");
    }
    else{
      $tampil=mysql_query("SELECT * FROM DaftIPLT 
                           WHERE username='$_SESSION[namauser]'       
                           ORDER BY id DESC LIMIT $posisi,$batas");
    }
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      echo "<tr><td>$no</td>
                <td>$r[KdIdIPLT]</td>
                <td>$r[NmIPLT]</td>
                <td><a href=?inyong=iplt&act=editiplt&id=$r[id]><img src='icon/edit-kecil.png' border=0px width=15px height=16px title='edit'></a> | 
                    <a href=\"$aksi?inyong=iplt&act=hapus&id=$r[id]&namafile=$r[GaleriFoto]&namafile=$r[PetaLokasi]&namafile=$r[LapSurveyKons]\" onClick=\"return confirm('Apakah Anda benar-benar mau menghapusnya?')\"><img src='icon/delete-kecil.png' border=0px width=15px height=16px title='delete'></a></td>
            </tr>";
      $no++;
    }
    echo "</table>";

    if ($_SESSION[leveluser]=='admin'){
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM DaftIPLT"));
    }
    else{
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM DaftIPLT WHERE username='$_SESSION[namauser]'"));
    }  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

    echo "<div id=paging>$linkHalaman</div><br>";
 
    break;    
    }
    else{
    echo "<table>  
          <tr><th>no</th><th>kode iplt</th><th>nama iplt</th><th>aksi</th></tr>";

    $p      = new Paging91;
    $batas  = 1;
    $posisi = $p->cariPosisi($batas);

    if ($_SESSION[leveluser]=='admin'){
      $tampil = mysql_query("SELECT * FROM DaftIPLT WHERE NmIPLT LIKE '%$_GET[kata]%' ORDER BY id DESC LIMIT $posisi,$batas");
    }
    else{
      $tampil=mysql_query("SELECT * FROM DaftIPLT 
                           WHERE username='$_SESSION[namauser]'
                           AND NmIPLT LIKE '%$_GET[kata]%'       
                           ORDER BY id DESC LIMIT $posisi,$batas");
    }
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      $tgl_posting=tgl_indo($r[tanggal]);
      echo "<tr><td>$no</td>
                <td>$r[KdIdIPLT]</td>
                <td>$r[NmIPLT]</td>
                <td><a href=?inyong=iplt&act=editiplt&id=$r[id]><img src='icon/edit-kecil.png' border=0px width=15px height=16px title='edit'></a> | 
                    <a href=\"$aksi?inyong=iplt&act=hapus&id=$r[id]&namafile=$r[GaleriFoto]&namafile=$r[PetaLokasi]&namafile=$r[LapSurveyKons]\" onClick=\"return confirm('Apakah Anda benar-benar mau menghapusnya?')\"><img src='icon/delete-kecil.png' border=0px width=15px height=16px title='delete'></a></td>
            </tr>";
      $no++;
    }
    echo "</table>";

    if ($_SESSION[leveluser]=='admin'){
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM DaftIPLT WHERE NmIPLT LIKE '%$_GET[kata]%'"));
    }
    else{
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM DaftIPLT WHERE  NmIPLT LIKE '%$_GET[kata]%'"));
    }  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

    echo "<div id=paging>$linkHalaman</div><br>";
 
    break;    
    }

  
  case "tambahiplt":
    $prov=mysql_query("SELECT * from DaftProv order by NmProp");
    $prov2=mysql_fetch_array($prov);
    /*echo "<div id=paging>";*/
    echo "<h2>Tambah IPLT</h2>
          <form method=POST action='$aksi?inyong=iplt&act=input' enctype='multipart/form-data'>
          <table>";
    echo "<tr><td>Kd. Provinsi</td>  <td> : ";
    echo "<select id='KdProp' name='NmProp'>
            <option value='' selected>- Pilih Kode Provinsi -</option>";
            $tampil12=mysql_query("SELECT * FROM DaftProv ORDER BY KdProp");
            while($r12=mysql_fetch_array($tampil12)){
              echo "<option value=$r12[KdProp]>$r12[KdProp] - $r12[NmProp]</option>";
            }
    echo "</select>";   

    echo  "<tr><td>Kd. Id. IPLT</td>  <td> : 
          <select name='KdIdIPLT'>";  
            $tampil=mysql_query("SELECT KdIdIPLT from DaftIPLT order by CAST(KdIdIPLT as SIGNED) desc limit 1");
            while($r=mysql_fetch_array($tampil)){
            $x=1;
            $sumtotal=$x+($r['KdIdIPLT']);  
              echo "<option value=$sumtotal>$sumtotal</option>";

            }
    echo  "<tr><td width=70>Nama IPLT</td>     <td> : <input type=text name='NmIPLT' size=20></td></tr> "; 
    echo  "<tr><td>Kab/Kot</td>  <td> : ";
    echo  "<select  name='KdKab'>
            <option value='' selected>- Pilih Kab/Kot -</option>";
            $tampil15=mysql_query("SELECT * FROM DaftKabKot ORDER BY KdKab");
            while($r15=mysql_fetch_array($tampil15)){
            echo "<option value=$r15[KdKab]>$r15[NmKabKotLkp]</option>";
            }
    echo "</select></td></tr>";  
    echo "<tr><td>Nama Provinsi</td>  <td> : ";
    echo "<select id='NmProp' name='NmProp'>
            <option value='' selected>- Pilih Provinsi -</option>";
            $tampil10=mysql_query("SELECT * FROM DaftProv ORDER BY KdProp");
            while($r10=mysql_fetch_array($tampil10)){
              echo "<option value=$r10[KdProp]>$r10[NmProp]</option>";
            }      
    echo "</select></td></tr>
          <tr><td width=70>Tahun Pembangunan</td>     <td> : <input type=text name='ThnBang' size=8></td></tr> ";
    echo "<tr><td>Sumber Dana Pembangunan</td>  <td> : <select name='SDanaPemb'>";
    echo "<option value=''>Sumber Dana Tidak Diketahui</option>";      
          $tampil20=mysql_query("SELECT * FROM SumberDana");
          while ($r20=mysql_fetch_array($tampil20)){
            echo "<option value=$r20[SDanaPemb]>$r20[SDanaPemb]</option>";
          }   
    echo "</select></td></tr>";  
    echo "<tr><td>Sistem Pengolahan</td>  <td> : <select name='TekOlah'>";
    echo "<option value='' selected>Sistem Pengolahan Tidak Diketahui</option>";      
          $tampil21=mysql_query("SELECT * FROM Tekolah ORDER BY id");
          while ($r21=mysql_fetch_array($tampil21)){
            echo "<option value=$r21[TekOlah]>$r21[TekOlah]</option>";
          }   
    echo "</select></td></tr>";
    echo "<tr><td>Pengelola</td>  <td> : <select name='Pengelola'>";
    echo "<option value='' selected>Pengelola Tidak Diketahui</option>";      
          $tampil22=mysql_query("SELECT * FROM PengElola ORDER BY id");
          while ($r22=mysql_fetch_array($tampil22)){
            echo "<option value=$r22[Pengelola]>$r22[Pengelola]</option>";
          }   
    echo "</select></td></tr>";
    echo "<tr><td>Kondisi Fisik IPLT</td>  <td> : <select name='KondFskIPLT'>";
    echo "<option value='' selected>Kondisi Tidak Diketahui</option>";      
          $tampil23=mysql_query("SELECT * FROM KondFisik ORDER BY id");
          while ($r23=mysql_fetch_array($tampil23)){
            echo "<option value=$r23[KondFskIPLT]>$r23[KondFskIPLT]</option>";
          }   
    echo "</select></td></tr>";
    echo "<tr><td>Kondisi Op. IPLT</td>  <td> : <select name='KondOpIPLT'>";
    echo "<option value='' selected>Tidak Diketahui</option>";      
          $tampil24=mysql_query("SELECT * FROM KondOp ORDER BY id");
          while ($r24=mysql_fetch_array($tampil24)){
            echo "<option value=$r24[KondOpIPLT]>$r24[KondOpIPLT]</option>";
          }   
    echo "</select></td></tr>";
    echo  "<tr><td width=70>Jumlah Truk Pemda</td>     <td> : <input type=text name='TrkPemda' size=10></td></tr> "; 
    echo  "<tr><td width=70>Rata-rata Rit per Hari</td>     <td> : <input type=text name='RitPHrTrkPemda' size=10></td></tr> ";
    echo "<tr><td width=70>Kapasitas (m3)</td>     <td> : <input type=text name='KapTrkPemda' size=10 ></td></tr>";
    echo "<tr><td width=70>Jumlah Truk Swasta</td>     <td> : <input type=text name='TrkSwasta' size=10 ></td></tr>";
    echo "<tr><td width=70>Rata-rata Rit per Hari</td>     <td> : <input type=text name='RitPHrTrkSwasta' size=10 ></td></tr>";
    echo "<tr><td width=70>Kapasitas (m3)</td>     <td> : <input type=text name='KapTrkSwasta' size=10 ></td></tr>";
    echo " 
          <tr><td>Foto IPLT</td>    <td> : <input type=file name='fupload[]' size=30> *)</td></tr>
          <tr><td>Foto IPLT 2</td>    <td> : <input type=file name='fupload[]' size=30> *)</td></tr>
          <tr><td>Foto IPLT 3</td>    <td> : <input type=file name='fupload[]' size=30> *)</td></tr>
          <tr><td>Foto IPLT 4</td>    <td> : <input type=file name='fupload[]' size=30> *)</td></tr>
          <tr><td>Foto IPLT 5</td>    <td> : <input type=file name='fupload[]' size=30> *)</td></tr>
          <tr><td>Foto IPLT 6</td>    <td> : <input type=file name='fupload[]' size=30> *)</td></tr>
          <tr><td>Foto IPLT 7</td>    <td> : <input type=file name='fupload[]' size=30> *)</td></tr>
          <tr><td>Foto IPLT 8</td>    <td> : <input type=file name='fupload[]' size=30> *)</td></tr>
          <tr><td>Foto IPLT 9</td>    <td> : <input type=file name='fupload[]' size=30> *)</td></tr>
          <tr><td>Foto IPLT 10</td>    <td> : <input type=file name='fupload[]' size=30> *)</td></tr>
          <tr><td>Peta Lokasi</td>    <td> : <input type=file name='fupload[]' size=30> *)</td></tr>
          <tr><td>Peta Lokasi 2</td>    <td> : <input type=file name='fupload[]' size=30> *)</td></tr>
          <tr><td>Lap Survey Kons</td>    <td> : <input type=file name='fupload[]' size=30> *)</td></tr>
          <tr><td colspan=2>*) Tipe gambar harus JPG/JPEG, Tipe Doc harus EXCEL/WORD/PDF </td></tr>";
                                          

    echo "
          <tr><td colspan=2><input type=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
     break;
    
    
  case "editiplt":
    $edit = mysql_query("SELECT * FROM DaftIPLT WHERE id='$_GET[id]' ");
    $r    = mysql_fetch_array($edit);
    $tampil2=mysql_query("SELECT DaftProv.KdProp, DaftProv.NmProp FROM DaftIPLT, DaftKabKot, DaftProv WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab) AND (DaftKabKot.KdProp = DaftProv.KdProp)) AND DaftIPLT.NmIPLT = '$r[NmIPLT]' LIMIT 0 , 30 ");
    $r2   = mysql_fetch_array($tampil2);
    echo "<h2>Edit IPLT</h2>
          <table>
          <form method=POST style='width: 700px; height: 350px; enctype='multipart/form-data' action=$aksi?inyong=iplt&act=update>
          <input type=hidden name=id value=$r[id]>
          <table>
          <tr><td width=70>Kd. Provinsi</td>     <td> : <input type=text name='KdProp' size=8 value='$r2[KdProp]'></td></tr>    
          <tr><td width=70>Kd. Id. IPLT</td>     <td> : <input type=text name='KdIdIPLT' size=8 value='$r[KdIdIPLT]'></td></tr>
          <tr><td width=70>Nama IPLT</td>     <td> : <input type=text name='NmIPLT' size=20 value='$r[NmIPLT]'></td></tr>
          <tr><td>Kab/Kot</td>  <td> : <select name='KdKab'>";
 
          $tampil=mysql_query("SELECT * FROM DaftKabKot ORDER BY KdKab");
          if ($r[KdKab]==0){
            echo "<option value=0 selected>- Pilih  Kab/Kot -</option>";
          }   

          while($w=mysql_fetch_array($tampil)){
            if ($r[KdKab]==$w[KdKab]){
              echo "<option value=$w[KdKab] selected>$w[NmKabKotLkp]</option>";
            }
            else{
              echo "<option value=$w[KdKab]>$w[NmKabKotLkp]</option>";
            }
          }

    echo "</select></td></tr>";
    echo "<tr><td>Nama Provinsi</td>  <td> : <select name='NmProp'>";
          
          $tampil10=mysql_query("SELECT * FROM DaftProv ORDER BY KdProp");
          if ($r2[NmProp]==''){
            echo "<option value='' selected>- Pilih Provinsi -</option>";
          }   

          while($w9=mysql_fetch_array($tampil10)){
            if ($r2[NmProp]==$w9[NmProp]){
              echo "<option value=$w9[KdProp] selected>$w9[NmProp]</option>";
            }
            else{
              echo "<option value=$w9[KdProp]>$w9[NmProp]</option>";
            }
          }
    echo "<tr><td width=70>Tahun Pembangunan</td>     <td> : <input type=text name='ThnBang' size=8 value='$r[ThnBang]'></td></tr>";
    /*echo "<tr><td width=70>Sumber Dana Pembangunan</td>     <td> : <input type=text name='SDanaPemb' size=60 value='$r[SDanaPemb]'></td></tr>";*/
    echo "<tr><td>Sumber Dana Pembangunan</td>  <td> : <select name='SDanaPemb'>";
          
          $tampil3=mysql_query("SELECT * FROM SumberDana ORDER BY id");
          if ($r[SDanaPemb]==''){
            echo "<option value='Sumber Dana Tidak Diketahui' selected>- Sumber Dana Tidak Diketahui -</option>";
          }   

          while($w2=mysql_fetch_array($tampil3)){
            if ($r[SDanaPemb]==$w2[SDanaPemb]){
              echo "<option value=$w2[SDanaPemb] selected>$w2[SDanaPemb]</option>";
            }
            else{
              echo "<option value=$w2[SDanaPemb]>$w2[SDanaPemb]</option>";
            }
          }
    echo "</select></td></tr>";
    /*echo "<tr><td width=70>Sistem Pengolahan</td>     <td> : <input type=text name='TekOlah' size=100  value='$r[TekOlah]'></td></tr>";*/
    echo "<tr><td>Sistem Pengolahan</td>  <td> : <select name='TekOlah'>";
          
          $tampil4=mysql_query("SELECT * FROM Tekolah ORDER BY id");
          if ($r[TekOlah]==''){
            echo "<option value='Sistem Pengolahan Tidak Diketahui' selected>- Sistem Pengolahan Tidak Diketahui -</option>";
          }   

          while($w3=mysql_fetch_array($tampil4)){
            if ($r[TekOlah]==$w3[TekOlah]){
              echo "<option value=$w3[TekOlah] selected>$w3[TekOlah]</option>";
            }
            else{
              echo "<option value=$w3[TekOlah]>$w3[TekOlah]</option>";
            }
          }
    /*echo "<tr><td width=70>Pengelola</td>     <td> : <input type=text name='Pengelola' size=100  value='$r[Pengelola]'></td></tr>";*/
    echo "<tr><td>Pengelola</td>  <td> : <select name='Pengelola'>";
          
          $tampil5=mysql_query("SELECT * FROM PengElola ORDER BY id");
          if ($r[Pengelola]==''){
            echo "<option value='Pengelola Tidak Diketahui' selected>- Pengelola Tidak Diketahui -</option>";
          }   

          while($w4=mysql_fetch_array($tampil5)){
            if ($r[Pengelola]==$w4[Pengelola]){
              echo "<option value=$w4[Pengelola] selected>$w4[Pengelola]</option>";
            }
            else{
              echo "<option value=$w4[Pengelola]>$w4[Pengelola]</option>";
            }
          }
    echo "<tr><td>Kondisi Fisik IPLT</td>  <td> : <select name='KondFskIPLT'>";
          
          $tampil6=mysql_query("SELECT * FROM KondFisik ORDER BY id");
          if ($r[KondFskIPLT]==''){
            echo "<option value='Kondisi Tidak Diketahui' selected>- Kondisi Tidak Diketahui -</option>";
          }   

          while($w5=mysql_fetch_array($tampil6)){
            if ($r[KondFskIPLT]==$w5[KondFskIPLT]){
              echo "<option value=$w5[KondFskIPLT] selected>$w5[KondFskIPLT]</option>";
            }
            else{
              echo "<option value=$w5[KondFskIPLT]>$w5[KondFskIPLT]</option>";
            }
          }
    echo "<tr><td>Kondisi Op. IPLT</td>  <td> : <select name='KondOpIPLT'>";
          
          $tampil7=mysql_query("SELECT * FROM KondOp ORDER BY id");
          if ($r[KondOpIPLT]==''){
            echo "<option value='Tidak Diketahui' selected>- Tidak Diketahui -</option>";
          }   

          while($w6=mysql_fetch_array($tampil7)){
            if ($r[KondOpIPLT]==$w6[KondOpIPLT]){
              echo "<option value=$w6[KondOpIPLT] selected>$w6[KondOpIPLT]</option>";
            }
            else{
              echo "<option value=$w6[KondOpIPLT]>$w6[KondOpIPLT]</option>";
            }
          }
    echo "<tr><td width=70>Jumlah Truk Pemda</td>     <td> : <input type=text name='TrkPemda' size=10 value='$r[TrkPemda]'></td></tr>";
    echo "<tr><td width=70>Rata-rata Rit per Hari</td>     <td> : <input type=text name='RitPHrTrkPemda' size=10 value='$r[RitPHrTrkPemda]'></td></tr>";
    echo "<tr><td width=70>Kapasitas (m3)</td>     <td> : <input type=text name='KapTrkPemda' size=10 value='$r[KapTrkPemda]'></td></tr>";
    echo "<tr><td width=70>Jumlah Truk Swasta</td>     <td> : <input type=text name='TrkSwasta' size=10 value='$r[TrkSwasta]'></td></tr>";
    echo "<tr><td width=70>Rata-rata Rit per Hari</td>     <td> : <input type=text name='RitPHrTrkSwasta' size=10 value='$r[RitPHrTrkSwasta]'></td></tr>";
    echo "<tr><td width=70>Kapasitas (m3)</td>     <td> : <input type=text name='KapTrkSwasta' size=10 value='$r[KapTrkSwasta]'></td></tr>";
      echo "
          <tr><td>Foto Kondisi IPLT</td>       <td> :  ";
          if ($r[GaleriFoto]!=''){
              echo "<img src='../foto_iplt/small_$r[GaleriFoto]'>";
              echo "<img src='../foto_iplt/small_$r[GaleriFoto2]'>";
              echo "<img src='../foto_iplt/small_$r[GaleriFoto3]'>";  
          }
    echo "</td></tr>
          <tr><td>Ganti Foto IPLT</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td>Ganti Foto IPLT 2</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td>Ganti Foto IPLT 3</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td>Ganti Foto IPLT 4</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td>Ganti Foto IPLT 5</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td>Ganti Foto IPLT 6</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td>Ganti Foto IPLT 7</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td>Ganti Foto IPLT 8</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td>Ganti Foto IPLT 9</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td>Ganti Foto IPLT 10</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td>Ganti Peta Lokasi</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td>Ganti Peta Lokasi 2</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td>Ganti Lap Survey Kons</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td colspan=2>*) Apabila file tidak diubah, dikosongkan saja.</td></tr>";
    echo  "<tr><td colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
         </table></form></table>";
    break;  
}

}
?>
