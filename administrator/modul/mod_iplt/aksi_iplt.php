<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";
include "../../../config/timezone.php";
include "../../../config/fungsi_thumb.php";
include "../../../config/fungsi_seo.php";

$inyong=$_GET['inyong'];
$act=$_GET['act'];
// Hapus IPLT
if ($inyong=='iplt' AND $act=='hapus'){
  $data=mysql_fetch_array(mysql_query("SELECT PetaLokasi, GaleriFoto, GaleriFoto2, GaleriFoto3, GaleriFoto4, GaleriFoto5, GaleriFoto6, GaleriFoto7, GaleriFoto8, GaleriFoto9, GaleriFoto10, PetaLokasi2, LapSurveyKons FROM DaftIPLT WHERE id='$_GET[id]'"));
  if ($data['GaleriFoto']!=''){
     mysql_query("DELETE FROM DaftIPLT WHERE id='$_GET[id]'");
     unlink("../../../foto_iplt/$_GET[namafile]");   
  }
  else{
     mysql_query("DELETE FROM DaftIPLT WHERE id='$_GET[id]'");
  }
  header('location:../../media.php?inyong='.$inyong);
}

// Input IPLT
elseif ($inyong=='iplt' AND $act=='input'){ 
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file   = $_FILES['fupload']['name'][0];
  $nama_file2   = $_FILES['fupload']['name'][1];
  $nama_file3   = $_FILES['fupload']['name'][2];
  $nama_file4   = $_FILES['fupload']['name'][3];
  $nama_file5   = $_FILES['fupload']['name'][4];
  $nama_file6   = $_FILES['fupload']['name'][5];
  $nama_file7   = $_FILES['fupload']['name'][6];
  $nama_file8   = $_FILES['fupload']['name'][7];
  $nama_file9   = $_FILES['fupload']['name'][8];
  $nama_file10   = $_FILES['fupload']['name'][9];
  $nama_file11   = $_FILES['fupload']['name'][10];
  $nama_file12   = $_FILES['fupload']['name'][11];
  $nama_file13   = $_FILES['fupload']['name'][12];
  $tema_seo      = seo_title($_POST['NmIPLT']);
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
  
  $file_extension = strtolower(substr(strrchr($nama_file,"."),1));

  switch($file_extension){
    case "pdf": $ctype="application/pdf"; break;
    case "exe": $ctype="application/octet-stream"; break;
    case "zip": $ctype="application/zip"; break;
    case "rar": $ctype="application/rar"; break;
    case "doc": $ctype="application/msword"; break;
    case "xls": $ctype="application/vnd.ms-excel"; break;
    case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
    case "gif": $ctype="image/gif"; break;
    case "png": $ctype="image/png"; break;
    case "jpeg":
    case "jpg": $ctype="image/jpg"; break;
    default: $ctype="application/proses";
  }

  if ($file_extension=='php'){
   echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PHP');
        window.location=('../../media.php?inyong=download')</script>";
  }
  else{
    UploadIPLT($nama_file);
    mysql_query("INSERT INTO DaftIPLT(KdIdIPLT,
                                    NmIPLT,
                                    tema_seo,
                                    KdKab,
                                    ThnBang,
                                    SDanaPemb,
                                    TekOlah,
                                    Pengelola,
                                    KondFskIPLT,
                                    KondOpIPLT,
                                    TrkPemda,
                                    RitPHrTrkPemda,
                                    KapTrkPemda,
                                    TrkSwasta,
                                    RitPHrTrkSwasta,
                                    KapTrkSwasta,
                                    PetaLokasi,
                                    GaleriFoto,
                                    GaleriFoto2,
                                    GaleriFoto3,
                                    GaleriFoto4,
                                    GaleriFoto5,
                                    GaleriFoto6,
                                    GaleriFoto7,
                                    GaleriFoto8,
                                    GaleriFoto9,
                                    GaleriFoto10,
                                    PetaLokasi2,
                                    LapSurveyKons) 
                            VALUES('$_POST[KdIdIPLT]',
                                    '$_POST[NmIPLT]',
                                    '$tema_seo',
                                   '$_POST[KdKab]',
                                   '$_POST[ThnBang]',
                                   '$_POST[SDanaPemb]',
                                   '$_POST[TekOlah]',
                                   '$_POST[Pengelola]',
                                   '$_POST[KondFskIPLT]',
                                   '$_POST[KondOpIPLT]',
                                   '$_POST[TrkPemda]',
                                   '$_POST[RitPHrTrkPemda]',
                                   '$_POST[KapTrkPemda]',
                                   '$_POST[TrkSwasta]',
                                   '$_POST[RitPHrTrkSwasta]',
                                   '$_POST[KapTrkSwasta]',
                                   '$nama_file',
                                   '$nama_file2',
                                   '$nama_file3',
                                   '$nama_file4',
                                   '$nama_file5',
                                   '$nama_file6',
                                   '$nama_file7',
                                   '$nama_file8',
                                   '$nama_file9',
                                   '$nama_file10',
                                   '$nama_file11',
                                   '$nama_file12',
                                   '$nama_file13')");
  header('location:../../media.php?inyong='.$inyong);
  }
  }
}

// Update IPLT
elseif ($inyong=='iplt' AND $act=='update'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file   = $_FILES['fupload']['name'];

  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE DaftIPLT SET 
                                    KdIdIPLT = '$_POST[KdIdIPLT]',
                                    NmIPLT   = '$_POST[NmIPLT]',
                                    tema_seo = '$_POST[tema_seo]',
                                    KdKab    = '$_POST[KdKab]',
                                    ThnBang  = '$_POST[ThnBang]',
                                    SDanaPemb = '$_POST[SDanaPemb]',
                                    TekOlah = '$_POST[TekOlah]',
                                    Pengelola = '$_POST[Pengelola]',
                                    KondFskIPLT = '$_POST[KondFskIPLT]',
                                    KondOpIPLT = '$_POST[KondOpIPLT]',
                                    TrkPemda = '$_POST[TrkPemda]',
                                    RitPHrTrkPemda = '$_POST[RitPHrTrkPemda]',
                                    KapTrkPemda = '$_POST[KapTrkPemda]',
                                    TrkSwasta = '$_POST[TrkSwasta]',
                                    RitPHrTrkSwasta = '$_POST[RitPHrTrkSwasta]',
                                    KapTrkSwasta = '$_POST[KapTrkSwasta]' 
                                    WHERE id  = '$_POST[id]' ");
  header('location:../../media.php?inyong='.$inyong);
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?inyong=banner')</script>";
    }
    else{  
    UploadIPLT($nama_file);
    mysql_query("UPDATE DaftIPLT        SET 
                                        KdIdIPLT = '$_POST[KdIdIPLT]',
                                        NmIPLT   = '$_POST[NmIPLT]',
                                        tema_seo = '$_POST[tema_seo]',
                                        KdKab    = '$_POST[KdKab]',
                                        ThnBang  = '$_POST[ThnBang]',
                                        SDanaPemb = '$_POST[SDanaPemb]',
                                        TekOlah = '$_POST[TekOlah]',
                                        Pengelola = '$_POST[Pengelola]',
                                        KondFskIPLT = '$_POST[KondFskIPLT]',
                                        KondOpIPLT = '$_POST[KondOpIPLT]',
                                        TrkPemda = '$_POST[TrkPemda]',
                                        RitPHrTrkPemda = '$_POST[RitPHrTrkPemda]',
                                        KapTrkPemda = '$_POST[KapTrkPemda]',
                                        TrkSwasta = '$_POST[TrkSwasta]',
                                        RitPHrTrkSwasta = '$_POST[RitPHrTrkSwasta]',
                                        KapTrkSwasta = '$_POST[KapTrkSwasta]',
                                        PetaLokasi = '$namafile',
                                        GaleriFoto = '$namafile2',
                                        GaleriFoto2 = '$namafile3',
                                        GaleriFoto3 = '$namafile4',
                                        GaleriFoto4 = '$namafile5',
                                        GaleriFoto5 = '$namafile6',
                                        GaleriFoto6 = '$namafile7',
                                        GaleriFoto7 = '$namafile8',
                                        GaleriFoto8 = '$namafile9',
                                        GaleriFoto9 = '$namafile10',
                                        GaleriFoto10 = '$namafile11',
                                        PetaLokasi2 = '$namafile12',
                                        LapSurveyKons = '$namafile13'
                                    WHERE id  = '$_POST[id]' ");
  header('location:../../media.php?inyong='.$inyong);
  }
  }
}
}
?>