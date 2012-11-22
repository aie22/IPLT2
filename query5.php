<?php
   $server = "localhost";
   $username = "root";
   $password = "gisservicepower2012";
   $database = "project_IPLT";
   mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka"); 

   $a=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'beroperasi' and `KondFskIPLT` = 'baik ' ");
   $a1=mysql_fetch_array($a);

   $b=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'beroperasi' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $a2=mysql_fetch_array($b);

   $c=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'beroperasi' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $a3=mysql_fetch_array($c);

   $d=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'beroperasi' and `KondFskIPLT` = 'rusak berat ' ");
   $a4=mysql_fetch_array($d);

   $e=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'beroperasi' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $a5=mysql_fetch_array($e);

   $f=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'beroperasi' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $a6=mysql_fetch_array($f);

   $g=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'beroperasi' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $a7=mysql_fetch_array($g);

   $h=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'beroperasi' and `KondFskIPLT` = ' ' ");
   $a8=mysql_fetch_array($h);


   $aa=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'dioperasikan tidak sebagaimana mestinya' and `KondFskIPLT` = 'baik ' ");
   $aa1=mysql_fetch_array($aa);

   $bb=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'dioperasikan tidak sebagaimana mestinya' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $aa2=mysql_fetch_array($bb);

   $cc=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'dioperasikan tidak sebagaimana mestinya' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $aa3=mysql_fetch_array($cc);

   $dd=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'dioperasikan tidak sebagaimana mestinya' and `KondFskIPLT` = 'rusak berat ' ");
   $aa4=mysql_fetch_array($dd);

   $ee=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'dioperasikan tidak sebagaimana mestinya' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $aa5=mysql_fetch_array($ee);

   $ff=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'dioperasikan tidak sebagaimana mestinya' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $aa6=mysql_fetch_array($ff);

   $gg=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'dioperasikan tidak sebagaimana mestinya' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $aa7=mysql_fetch_array($gg);

   $hh=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'dioperasikan tidak sebagaimana mestinya' and `KondFskIPLT` = ' ' ");
   $aa8=mysql_fetch_array($hh);


   $aaa=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'belum dioperasikan' and `KondFskIPLT` = 'baik ' ");
   $aaa1=mysql_fetch_array($aaa);

   $bbb=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'belum dioperasikan' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $aaa2=mysql_fetch_array($bbb);

   $ccc=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'belum dioperasikan' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $aaa3=mysql_fetch_array($ccc);

   $ddd=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'belum dioperasikan' and `KondFskIPLT` = 'rusak berat ' ");
   $aaa4=mysql_fetch_array($ddd);

   $eee=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'belum dioperasikan' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $aaa5=mysql_fetch_array($eee);

   $fff=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'belum dioperasikan' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $aaa6=mysql_fetch_array($fff);

   $ggg=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'belum dioperasikan' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $aaa7=mysql_fetch_array($ggg);

   $hhh=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'belum dioperasikan' and `KondFskIPLT` = ' ' ");
   $aaa8=mysql_fetch_array($hhh);


   $aaaa=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'tidak (tidak lagi) dioperasikan' and `KondFskIPLT` = 'baik ' ");
   $aaaa1=mysql_fetch_array($aaaa);

   $bbbb=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'tidak (tidak lagi) dioperasikan' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $aaaa2=mysql_fetch_array($bbbb);

   $cccc=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'tidak (tidak lagi) dioperasikan' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $aaaa3=mysql_fetch_array($cccc);

   $dddd=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'tidak (tidak lagi) dioperasikan' and `KondFskIPLT` = 'rusak berat ' ");
   $aaaa4=mysql_fetch_array($dddd);

   $eeee=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'tidak (tidak lagi) dioperasikan' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $aaaa5=mysql_fetch_array($eeee);

   $ffff=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'tidak (tidak lagi) dioperasikan' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $aaaa6=mysql_fetch_array($ffff);

   $gggg=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'tidak (tidak lagi) dioperasikan' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $aaaa7=mysql_fetch_array($gggg);

   $hhhh=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= 'tidak (tidak lagi) dioperasikan' and `KondFskIPLT` = ' ' ");
   $aaaa8=mysql_fetch_array($hhhh);


   $aaaaa=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= ' ' and `KondFskIPLT` = 'baik ' ");
   $aaaaa1=mysql_fetch_array($aaaaa);

   $bbbbb=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= ' ' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $aaaaa2=mysql_fetch_array($bbbbb);

   $ccccc=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= ' ' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $aaaaa3=mysql_fetch_array($ccccc);

   $ddddd=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= ' ' and `KondFskIPLT` = 'rusak berat ' ");
   $aaaaa4=mysql_fetch_array($ddddd);

   $eeeee=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= ' ' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $aaaaa5=mysql_fetch_array($eeeee);

   $fffff=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= ' ' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $aaaaa6=mysql_fetch_array($fffff);

   $ggggg=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= ' ' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $aaaaa7=mysql_fetch_array($ggggg);

   $hhhhh=mysql_query("SELECT Count(*) as jml From DaftIPLT where `KondOpIPLT`= ' ' and `KondFskIPLT` = ' ' ");
   $aaaaa8=mysql_fetch_array($hhhhh);

?>   