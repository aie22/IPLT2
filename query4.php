<?php
   $server = "localhost";
   $username = "root";
   $password = "gisservicepower2012";
   $database = "project_IPLT";
   mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");

   $sdana=mysql_query("SELECT  count(*) as jml from DaftIPLT where SDanaPemb = '' "); 
   $sdana1=mysql_query("SELECT  count(*) as jml from DaftIPLT where SDanaPemb = 'APBD Prov.' ");
   $sdana2=mysql_query("SELECT  count(*) as jml from DaftIPLT where SDanaPemb = 'APBN' ");
   $sdana3=mysql_query("SELECT  count(*) as jml from DaftIPLT where SDanaPemb = 'APBN+APBD' ");
   $sdana4=mysql_query("SELECT  count(*) as jml from DaftIPLT where SDanaPemb = 'APBN+Loan' ");
   $sdana5=mysql_query("SELECT  count(*) as jml from DaftIPLT where SDanaPemb = 'BRR' ");
   $sdana6=mysql_query("SELECT  count(*) as jml from DaftIPLT where SDanaPemb = 'JICA + Unicef' ");
   $sdana7=mysql_query("SELECT  count(*) as jml from DaftIPLT where SDanaPemb = 'Loan ADB' ");
   $sdana8=mysql_query("SELECT  count(*) as jml from DaftIPLT where SDanaPemb = 'P3KT/IBRD' ");

   $sdanaa = mysql_fetch_array($sdana);
   $sdanaaa = mysql_fetch_array($sdana1);
   $sdanaaaa = mysql_fetch_array($sdana2);
   $sdanaaaaa = mysql_fetch_array($sdana3);
   $sdanaaaaaa = mysql_fetch_array($sdana4);
   $sdanaaaaaaa = mysql_fetch_array($sdana5);
   $sdanaaaaaaaa = mysql_fetch_array($sdana6);
   $sdanaaaaaaaaa = mysql_fetch_array($sdana7);
   $sdanaaaaaaaaaa = mysql_fetch_array($sdana8);

   $a=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= ' ' and `KondFskIPLT` = 'baik ' ");
   $a1=mysql_fetch_array($a);

   $b=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= ' ' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $a2=mysql_fetch_array($b);

   $c=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= ' ' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $a3=mysql_fetch_array($c);

   $d=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= ' ' and `KondFskIPLT` = 'rusak berat ' ");
   $a4=mysql_fetch_array($d);

   $e=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= ' ' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $a5=mysql_fetch_array($e);

   $f=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= ' ' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $a6=mysql_fetch_array($f);

   $g=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= ' ' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $a7=mysql_fetch_array($g);

   $h=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= ' ' and `KondFskIPLT` = ' ' ");
   $a8=mysql_fetch_array($h);



   $aa=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBD Prov.' and `KondFskIPLT` = 'baik ' ");
   $aa1=mysql_fetch_array($aa);

   $bb=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBD Prov.' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $aa2=mysql_fetch_array($bb);

   $cc=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBD Prov.' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $aa3=mysql_fetch_array($cc);

   $dd=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBD Prov.' and `KondFskIPLT` = 'rusak berat ' ");
   $aa4=mysql_fetch_array($dd);

   $ee=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBD Prov.' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $aa5=mysql_fetch_array($ee);

   $ff=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBD Prov.' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $aa6=mysql_fetch_array($ff);

   $gg=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBD Prov.' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $aa7=mysql_fetch_array($gg);

   $hh=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBD Prov.' and `KondFskIPLT` = ' ' ");
   $aa8=mysql_fetch_array($hh);


   $aaa=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN' and `KondFskIPLT` = 'baik ' ");
   $aaa1=mysql_fetch_array($aaa);

   $bbb=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $aaa2=mysql_fetch_array($bbb);

   $ccc=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $aaa3=mysql_fetch_array($ccc);

   $ddd=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN' and `KondFskIPLT` = 'rusak berat ' ");
   $aaa4=mysql_fetch_array($ddd);

   $eee=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $aaa5=mysql_fetch_array($eee);

   $fff=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $aaa6=mysql_fetch_array($fff);

   $ggg=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $aaa7=mysql_fetch_array($ggg);

   $hhh=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN' and `KondFskIPLT` = ' ' ");
   $aaa8=mysql_fetch_array($hhh);


   $aaaa=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+APBD' and `KondFskIPLT` = 'baik ' ");
   $aaaa1=mysql_fetch_array($aaaa);

   $bbbb=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+APBD' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $aaaa2=mysql_fetch_array($bbbb);

   $cccc=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+APBD' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $aaaa3=mysql_fetch_array($cccc);

   $dddd=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+APBD' and `KondFskIPLT` = 'rusak berat ' ");
   $aaaa4=mysql_fetch_array($dddd);

   $eeee=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+APBD' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $aaaa5=mysql_fetch_array($eeee);

   $ffff=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+APBD' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $aaaa6=mysql_fetch_array($ffff);

   $gggg=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+APBD' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $aaaa7=mysql_fetch_array($gggg);

   $hhhh=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+APBD' and `KondFskIPLT` = ' ' ");
   $aaaa8=mysql_fetch_array($hhhh);


   $aaaaa=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+Loan' and `KondFskIPLT` = 'baik ' ");
   $aaaaa1=mysql_fetch_array($aaaaa);

   $bbbbb=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+Loan' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $aaaaa2=mysql_fetch_array($bbbbb);

   $ccccc=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+Loan' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $aaaaa3=mysql_fetch_array($ccccc);

   $ddddd=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+Loan' and `KondFskIPLT` = 'rusak berat ' ");
   $aaaaa4=mysql_fetch_array($ddddd);

   $eeeee=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+Loan' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $aaaaa5=mysql_fetch_array($eeeee);

   $fffff=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+Loan' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $aaaaa6=mysql_fetch_array($fffff);

   $ggggg=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+Loan' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $aaaaa7=mysql_fetch_array($ggggg);

   $hhhhh=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'APBN+Loan' and `KondFskIPLT` = ' ' ");
   $aaaaa8=mysql_fetch_array($hhhhh);



   $aaaaaa=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'BRR' and `KondFskIPLT` = 'baik ' ");
   $aaaaaa1=mysql_fetch_array($aaaaaa);

   $bbbbbb=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'BRR' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $aaaaaa2=mysql_fetch_array($bbbbbb);

   $cccccc=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'BRR' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $aaaaaa3=mysql_fetch_array($cccccc);

   $dddddd=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'BRR' and `KondFskIPLT` = 'rusak berat ' ");
   $aaaaaa4=mysql_fetch_array($dddddd);

   $eeeeee=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'BRR' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $aaaaaa5=mysql_fetch_array($eeeeee);

   $ffffff=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'BRR' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $aaaaaa6=mysql_fetch_array($ffffff);

   $gggggg=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'BRR' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $aaaaaa7=mysql_fetch_array($gggggg);

   $hhhhhh=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'BRR' and `KondFskIPLT` = ' ' ");
   $aaaaaa8=mysql_fetch_array($hhhhhh);


   $aaaaaaa=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'JICA + Unicef' and `KondFskIPLT` = 'baik ' ");
   $aaaaaaa1=mysql_fetch_array($aaaaaaa);

   $bbbbbbb=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'JICA + Unicef' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $aaaaaaa2=mysql_fetch_array($bbbbbbb);

   $ccccccc=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'JICA + Unicef' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $aaaaaaa3=mysql_fetch_array($ccccccc);

   $ddddddd=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'JICA + Unicef' and `KondFskIPLT` = 'rusak berat ' ");
   $aaaaaaa4=mysql_fetch_array($ddddddd);

   $eeeeeee=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'JICA + Unicef' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $aaaaaaa5=mysql_fetch_array($eeeeeee);

   $fffffff=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'JICA + Unicef' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $aaaaaaa6=mysql_fetch_array($fffffff);

   $ggggggg=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'JICA + Unicef' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $aaaaaaa7=mysql_fetch_array($ggggggg);

   $hhhhhhh=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'JICA + Unicef' and `KondFskIPLT` = ' ' ");
   $aaaaaaa8=mysql_fetch_array($hhhhhhh);


   $aaaaaaaa=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'Loan ADB' and `KondFskIPLT` = 'baik ' ");
   $aaaaaaaa1=mysql_fetch_array($aaaaaaaa);

   $bbbbbbbb=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'Loan ADB' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $aaaaaaaa2=mysql_fetch_array($bbbbbbbb);

   $cccccccc=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'Loan ADB' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $aaaaaaaa3=mysql_fetch_array($cccccccc);

   $dddddddd=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'Loan ADB' and `KondFskIPLT` = 'rusak berat ' ");
   $aaaaaaaa4=mysql_fetch_array($dddddddd);

   $eeeeeeee=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'Loan ADB' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $aaaaaaaa5=mysql_fetch_array($eeeeeeee);

   $ffffffff=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'Loan ADB' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $aaaaaaaa6=mysql_fetch_array($ffffffff);

   $gggggggg=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'Loan ADB' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $aaaaaaaa7=mysql_fetch_array($gggggggg);

   $hhhhhhhh=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'Loan ADB' and `KondFskIPLT` = ' ' ");
   $aaaaaaaa8=mysql_fetch_array($hhhhhhhh);


   $aaaaaaaaa=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'P3KT/IBRD' and `KondFskIPLT` = 'baik ' ");
   $aaaaaaaaa1=mysql_fetch_array($aaaaaaaaa);

   $bbbbbbbbb=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'P3KT/IBRD' and `KondFskIPLT` = 'rusak ringan / kurang terpelihara ' ");
   $aaaaaaaaa2=mysql_fetch_array($bbbbbbbbb);

   $ccccccccc=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'P3KT/IBRD' and `KondFskIPLT` = 'rusak / bocor / tdk terpelihara ' ");
   $aaaaaaaaa3=mysql_fetch_array($ccccccccc);

   $ddddddddd=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'P3KT/IBRD' and `KondFskIPLT` = 'rusak berat ' ");
   $aaaaaaaaa4=mysql_fetch_array($ddddddddd);

   $eeeeeeeee=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'P3KT/IBRD' and `KondFskIPLT` = 'sedang dalam rehabilitasi ' ");
   $aaaaaaaaa5=mysql_fetch_array($eeeeeeeee);

   $fffffffff=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'P3KT/IBRD' and `KondFskIPLT` = 'sedang proses konstruksi ' ");
   $aaaaaaaaa6=mysql_fetch_array($fffffffff);

   $ggggggggg=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'P3KT/IBRD' and `KondFskIPLT` = 'dibongkar jadi kantor ' ");
   $aaaaaaaaa7=mysql_fetch_array($ggggggggg);

   $hhhhhhhhh=mysql_query("SELECT Count(*) as jml From DaftIPLT where `SDanaPemb`= 'P3KT/IBRD' and `KondFskIPLT` = ' ' ");
   $aaaaaaaaa8=mysql_fetch_array($hhhhhhhhh);

?>   