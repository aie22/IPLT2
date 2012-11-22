<?php
   $server = "localhost";
    $username = "root";
    $password = "gisservicepower2012";
    $database = "project_IPLT";
    mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
    //Aceh

   	$a2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = 'Aceh' " );
   	$a21 = mysql_fetch_array($a2);
    $a1 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = 'Aceh' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $a3 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = 'Aceh' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $a4 = mysql_fetch_array($a3);
    $a5 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = 'Aceh' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $a6 = mysql_fetch_array($a5);
    $a7 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = 'Aceh' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $a8 = mysql_fetch_array($a7);
    $a15 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = 'Aceh' and DaftIPLT.KondOpIPLT = ' ' ");
    $a16 = mysql_fetch_array($a15);


    ////////////////////////////////////////////////////////////

    $k='Bali';
    $b=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k' ");
    $b21=mysql_fetch_array($b);
    $b2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k' " );
   	$b3 = mysql_fetch_array($b2);
    $b4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $b5 = mysql_fetch_array($b4);
    $b6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $b7 = mysql_fetch_array($b6);
    $b8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $b9 = mysql_fetch_array($b8);
    $b10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $b11 = mysql_fetch_array($b10);
    $b12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $b13 = mysql_fetch_array($b12);
    $b14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $b15 = mysql_fetch_array($b14);
    $b16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $b17 = mysql_fetch_array($b16);
    $b18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k' and DaftIPLT.KondOpIPLT = ' ' ");
    $b19 = mysql_fetch_array($b18);

    //////////////////////////////////////////////////////////////////////////////////////

    $k1='Banten';
    $c=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k1' ");
    $c21=mysql_fetch_array($c);
    $c2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k1' " );
   	$c3 = mysql_fetch_array($c2);
    $c4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k1' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $c5 = mysql_fetch_array($c4);
    $c6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k1' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $c7 = mysql_fetch_array($c6);
    $c8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k1' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $c9 = mysql_fetch_array($c8);
    $c10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k1' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $c11 = mysql_fetch_array($c10);
    $c12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k1' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $c13 = mysql_fetch_array($c12);
    $c14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k1' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $c15 = mysql_fetch_array($c14);
    $c16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k1' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $c17 = mysql_fetch_array($c16);
    $c18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k1' and DaftIPLT.KondOpIPLT = ' ' ");
    $c19 = mysql_fetch_array($c18);

    $k2='Bengkulu';
    $d=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k2' ");
    $d21=mysql_fetch_array($d);
    $d2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k2' " );
   	$d3 = mysql_fetch_array($d2);
    $d4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k2' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $d5 = mysql_fetch_array($d4);
    $d6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k2' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $d7 = mysql_fetch_array($d6);
    $d8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k2' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $d9 = mysql_fetch_array($d8);
    $d10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k2' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $d11 = mysql_fetch_array($d10);
    $d12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k2' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $d13 = mysql_fetch_array($d12);
    $d14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k2' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $d15 = mysql_fetch_array($d14);
    $d16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k2' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $d17 = mysql_fetch_array($d16);
    $d18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k2' and DaftIPLT.KondOpIPLT = ' ' ");
    $d19 = mysql_fetch_array($d18);

    $k3='Gorontalo';
    $e=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k3' ");
    $e21=mysql_fetch_array($e);
    $e2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k3' " );
   	$e3 = mysql_fetch_array($e2);
    $e4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k3' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $e5 = mysql_fetch_array($e4);
    $e6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k3' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $e7 = mysql_fetch_array($e6);
    $e8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k3' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $e9 = mysql_fetch_array($e8);
    $e10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k3' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $e11 = mysql_fetch_array($e10);
    $e12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k3' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $e13 = mysql_fetch_array($e12);
    $e14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k3' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $e15 = mysql_fetch_array($e14);
    $e16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k3' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $e17 = mysql_fetch_array($e16);
    $e18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k3' and DaftIPLT.KondOpIPLT = ' ' ");
    $e19 = mysql_fetch_array($e18);

    $k4='Jakarta';
    $f=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k4' ");
    $f21=mysql_fetch_array($f);
    $f2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k4' " );
   	$f3 = mysql_fetch_array($f2);
    $f4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k4' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $f5 = mysql_fetch_array($f4);
    $f6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k4' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $f7 = mysql_fetch_array($f6);
    $f8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k4' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $f9 = mysql_fetch_array($f8);
    $f10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k4' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $f11 = mysql_fetch_array($f10);
    $f12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k4' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $f13 = mysql_fetch_array($f12);
    $f14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k4' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $f15 = mysql_fetch_array($f14);
    $f16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k4' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $f17 = mysql_fetch_array($f16);
    $f18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k4' and DaftIPLT.KondOpIPLT = ' ' ");
    $f19 = mysql_fetch_array($f18);

    $k5='Jambi';
    $g=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k5' ");
    $g21=mysql_fetch_array($g);
    $g2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k5' " );
   	$g3 = mysql_fetch_array($g2);
    $g4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k5' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $g5 = mysql_fetch_array($g4);
    $g6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k5' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $g7 = mysql_fetch_array($g6);
    $g8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k5' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $g9 = mysql_fetch_array($g8);
    $g10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k5' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $g11 = mysql_fetch_array($g10);
    $g12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k5' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $g13 = mysql_fetch_array($g12);
    $g14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k5' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $g15 = mysql_fetch_array($g14);
    $g16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k5' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $g17 = mysql_fetch_array($g16);
    $g18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k5' and DaftIPLT.KondOpIPLT = ' ' ");
    $g19 = mysql_fetch_array($g18);


    $k6='Jawa Barat';
    $h=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k6' ");
    $h21=mysql_fetch_array($h);
    $h2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k6' " );
   	$h3 = mysql_fetch_array($h2);
    $h4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k6' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $h5 = mysql_fetch_array($h4);
    $h6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k6' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $h7 = mysql_fetch_array($h6);
    $h8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k6' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $h9 = mysql_fetch_array($h8);
    $h10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k6' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $h11 = mysql_fetch_array($h10);
    $h12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k6' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $h13 = mysql_fetch_array($h12);
    $h14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k6' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $h15 = mysql_fetch_array($h14);
    $h16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k6' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $h17 = mysql_fetch_array($h16);
    $h18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k6' and DaftIPLT.KondOpIPLT = ' ' ");
    $h19 = mysql_fetch_array($h18);


    $k7='Jawa Tengah';
    $i=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k7' ");
    $i21=mysql_fetch_array($i);
    $i2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k7' " );
   	$i3 = mysql_fetch_array($i2);
    $i4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k7' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $i5 = mysql_fetch_array($i4);
    $i6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k7' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $i7 = mysql_fetch_array($i6);
    $i8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k7' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $i9 = mysql_fetch_array($i8);
    $i10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k7' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $i11 = mysql_fetch_array($i10);
    $i12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k7' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $i13 = mysql_fetch_array($i12);
    $i14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k7' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $i15 = mysql_fetch_array($i14);
    $i16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k7' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $i17 = mysql_fetch_array($i16);
    $i18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k7' and DaftIPLT.KondOpIPLT = ' ' ");
    $i19 = mysql_fetch_array($i18);

    $k8='Jawa Timur';
    $j=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k8' ");
    $j21=mysql_fetch_array($j);
    $j2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k8' " );
   	$j3 = mysql_fetch_array($j2);
    $j4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k8' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $j5 = mysql_fetch_array($j4);
    $j6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k8' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $j7 = mysql_fetch_array($j6);
    $j8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k8' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $j9 = mysql_fetch_array($j8);
    $j10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k8' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $j11 = mysql_fetch_array($j10);
    $j12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k8' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $j13 = mysql_fetch_array($j12);
    $j14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k8' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $j15 = mysql_fetch_array($j14);
    $j16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k8' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $j17 = mysql_fetch_array($j16);
    $j18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k8' and DaftIPLT.KondOpIPLT = ' ' ");
    $j19 = mysql_fetch_array($j18);


    $k9='Kalimantan Barat';
    $l=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k9' ");
    $l21=mysql_fetch_array($l);
    $l2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k9' " );
   	$l3 = mysql_fetch_array($l2);
    $l4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k9' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $l5 = mysql_fetch_array($l4);
    $l6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k9' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $l7 = mysql_fetch_array($l6);
    $l8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k9' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $l9 = mysql_fetch_array($l8);
    $l10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k9' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $l11 = mysql_fetch_array($l10);
    $l12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k9' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $l13 = mysql_fetch_array($l12);
    $l14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k9' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $l15 = mysql_fetch_array($l14);
    $l16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k9' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $l17 = mysql_fetch_array($l16);
    $l18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k9' and DaftIPLT.KondOpIPLT = ' ' ");
    $l19 = mysql_fetch_array($l18);


    $k10='Kalimantan Selatan';
    $m=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k10' ");
    $m21=mysql_fetch_array($m);
    $m2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k10' " );
   	$m3 = mysql_fetch_array($m2);
    $m4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k10' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $m5 = mysql_fetch_array($m4);
    $m6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k10' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $m7 = mysql_fetch_array($m6);
    $m8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k10' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $m9 = mysql_fetch_array($m8);
    $m10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k10' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $m11 = mysql_fetch_array($m10);
    $m12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k10' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $m13 = mysql_fetch_array($m12);
    $m14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k10' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $m15 = mysql_fetch_array($m14);
    $m16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k10' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $m17 = mysql_fetch_array($m16);
    $m18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k10' and DaftIPLT.KondOpIPLT = ' ' ");
    $m19 = mysql_fetch_array($m18);


    $k11='Kalimantan Tengah';
    $n=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k11' ");
    $n21=mysql_fetch_array($n);
    $n2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k11' " );
   	$n3 = mysql_fetch_array($n2);
    $n4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k11' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $n5 = mysql_fetch_array($n4);
    $n6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k11' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $n7 = mysql_fetch_array($n6);
    $n8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k11' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $n9 = mysql_fetch_array($n8);
    $n10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k11' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $n11 = mysql_fetch_array($n10);
    $n12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k11' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $n13 = mysql_fetch_array($n12);
    $n14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k11' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $n15 = mysql_fetch_array($n14);
    $n16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k11' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $n17 = mysql_fetch_array($n16);
    $n18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k11' and DaftIPLT.KondOpIPLT = ' ' ");
    $n19 = mysql_fetch_array($n18);


    $k12='Kalimantan Timur';
    $o=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k12' ");
    $o21=mysql_fetch_array($o);
    $o2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k12' " );
   	$o3 = mysql_fetch_array($o2);
    $o4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k12' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $o5 = mysql_fetch_array($o4);
    $o6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k12' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $o7 = mysql_fetch_array($o6);
    $o8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k12' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $o9 = mysql_fetch_array($o8);
    $o10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k12' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $o11 = mysql_fetch_array($o10);
    $o12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k12' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $o13 = mysql_fetch_array($o12);
    $o14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k12' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $o15 = mysql_fetch_array($o14);
    $o16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k12' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $o17 = mysql_fetch_array($o16);
    $o18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k12' and DaftIPLT.KondOpIPLT = ' ' ");
    $o19 = mysql_fetch_array($o18);


    $k13='Kepulauan Bangka Belitung';
    $p=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k13' ");
    $p21=mysql_fetch_array($p);
    $p2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k13' " );
   	$p3 = mysql_fetch_array($p2);
    $p4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k13' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $p5 = mysql_fetch_array($p4);
    $p6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k13' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $p7 = mysql_fetch_array($p6);
    $p8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k13' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $p9 = mysql_fetch_array($p8);
    $p10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k13' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $p11 = mysql_fetch_array($p10);
    $p12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k13' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $p13 = mysql_fetch_array($p12);
    $p14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k13' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $p15 = mysql_fetch_array($p14);
    $p16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k13' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $p17 = mysql_fetch_array($p16);
    $p18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k13' and DaftIPLT.KondOpIPLT = ' ' ");
    $p19 = mysql_fetch_array($p18);

    $k14='Kepulauan Riau';
    $q=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k14' ");
    $q21=mysql_fetch_array($q);
    $q2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k14' " );
   	$q3 = mysql_fetch_array($q2);
    $q4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k14' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $q5 = mysql_fetch_array($q4);
    $q6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k14' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $q7 = mysql_fetch_array($q6);
    $q8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k14' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $q9 = mysql_fetch_array($q8);
    $q10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k14' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $q11 = mysql_fetch_array($q10);
    $q12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k14' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $q13 = mysql_fetch_array($q12);
    $q14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k14' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $q15 = mysql_fetch_array($q14);
    $q16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k14' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $q17 = mysql_fetch_array($q16);
    $q18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k14' and DaftIPLT.KondOpIPLT = ' ' ");
    $q19 = mysql_fetch_array($q18);


    $k15='Lampung';
    $r=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k15' ");
    $r21=mysql_fetch_array($r);
    $r2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k15' " );
   	$r3 = mysql_fetch_array($r2);
    $r4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k15' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $r5 = mysql_fetch_array($r4);
    $r6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k15' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $r7 = mysql_fetch_array($r6);
    $r8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k15' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $r9 = mysql_fetch_array($r8);
    $r10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k15' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $r11 = mysql_fetch_array($r10);
    $r12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k15' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $r13 = mysql_fetch_array($r12);
    $r14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k15' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $r15 = mysql_fetch_array($r14);
    $r16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k15' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $r17 = mysql_fetch_array($r16);
    $r18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k15' and DaftIPLT.KondOpIPLT = ' ' ");
    $r19 = mysql_fetch_array($r18);


    $k16='Maluku';
    $s=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k16' ");
    $s21=mysql_fetch_array($s);
    $s2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k16' " );
   	$s3 = mysql_fetch_array($s2);
    $s4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k16' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $s5 = mysql_fetch_array($s4);
    $s6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k16' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $s7 = mysql_fetch_array($s6);
    $s8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k16' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $s9 = mysql_fetch_array($s8);
    $s10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k16' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $s11 = mysql_fetch_array($s10);
    $s12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k16' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $s13 = mysql_fetch_array($s12);
    $s14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k16' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $s15 = mysql_fetch_array($s14);
    $s16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k16' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $s17 = mysql_fetch_array($s16);
    $s18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k16' and DaftIPLT.KondOpIPLT = ' ' ");
    $s19 = mysql_fetch_array($s18);


    $k17='Maluku Utara';
    $t=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k17' ");
    $t21=mysql_fetch_array($t);
    $t2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k17' " );
   	$t3 = mysql_fetch_array($t2);
    $t4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k17' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $t5 = mysql_fetch_array($t4);
    $t6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k17' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $t7 = mysql_fetch_array($t6);
    $t8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k17' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $t9 = mysql_fetch_array($t8);
    $t10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k17' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $t11 = mysql_fetch_array($t10);
    $t12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k17' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $t13 = mysql_fetch_array($t12);
    $t14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k17' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $t15 = mysql_fetch_array($t14);
    $t16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k17' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $t17 = mysql_fetch_array($t16);
    $t18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k17' and DaftIPLT.KondOpIPLT = ' ' ");
    $t19 = mysql_fetch_array($t18);


    $k18='Nusa Tenggara Barat';
    $u=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k18' ");
    $u21=mysql_fetch_array($u);
    $u2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k18' " );
   	$u3 = mysql_fetch_array($u2);
    $u4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k18' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $u5 = mysql_fetch_array($u4);
    $u6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k18' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $u7 = mysql_fetch_array($u6);
    $u8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k18' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $u9 = mysql_fetch_array($u8);
    $u10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k18' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $u11 = mysql_fetch_array($u10);
    $u12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k18' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $u13 = mysql_fetch_array($u12);
    $u14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k18' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $u15 = mysql_fetch_array($u14);
    $u16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k18' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $u17 = mysql_fetch_array($u16);
    $u18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k18' and DaftIPLT.KondOpIPLT = ' ' ");
    $u19 = mysql_fetch_array($u18);


    $k19='Nusa Tenggara Timur';
    $v=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k19' ");
    $v21=mysql_fetch_array($v);
    $v2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k19' " );
   	$v3 = mysql_fetch_array($v2);
    $v4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k19' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $v5 = mysql_fetch_array($v4);
    $v6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k19' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $v7 = mysql_fetch_array($v6);
    $v8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k19' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $v9 = mysql_fetch_array($v8);
    $v10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k19' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $v11 = mysql_fetch_array($v10);
    $v12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k19' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $v13 = mysql_fetch_array($v12);
    $v14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k19' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $v15 = mysql_fetch_array($v14);
    $v16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k19' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $v17 = mysql_fetch_array($v16);
    $v18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k19' and DaftIPLT.KondOpIPLT = ' ' ");
    $v19 = mysql_fetch_array($v18);


    $k20='Papua';
    $w=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k20' ");
    $w21=mysql_fetch_array($w);
    $w2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k20' " );
   	$w3 = mysql_fetch_array($w2);
    $w4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k20' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $w5 = mysql_fetch_array($w4);
    $w6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k20' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $w7 = mysql_fetch_array($w6);
    $w8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k20' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $w9 = mysql_fetch_array($w8);
    $w10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k20' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $w11 = mysql_fetch_array($w10);
    $w12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k20' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $w13 = mysql_fetch_array($w12);
    $w14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k20' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $w15 = mysql_fetch_array($w14);
    $w16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k20' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $w17 = mysql_fetch_array($w16);
    $w18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k20' and DaftIPLT.KondOpIPLT = ' ' ");
    $w19 = mysql_fetch_array($w18);


    $k21='Papua Barat';
    $x=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k21' ");
    $x21=mysql_fetch_array($x);
    $x2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k21' " );
   	$x3 = mysql_fetch_array($x2);
    $x4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k21' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $x5 = mysql_fetch_array($x4);
    $x6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k21' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $x7 = mysql_fetch_array($x6);
    $x8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k21' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $x9 = mysql_fetch_array($x8);
    $x10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k21' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $x11 = mysql_fetch_array($x10);
    $x12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k21' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $x13 = mysql_fetch_array($x12);
    $x14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k21' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $x15 = mysql_fetch_array($x14);
    $x16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k21' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $x17 = mysql_fetch_array($x16);
    $x18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k21' and DaftIPLT.KondOpIPLT = ' ' ");
    $x19 = mysql_fetch_array($x18);


    $k22='Riau';
    $y=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k22' ");
    $y21=mysql_fetch_array($y);
    $y2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k22' " );
   	$y3 = mysql_fetch_array($y2);
    $y4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k22' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $y5 = mysql_fetch_array($y4);
    $y6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k22' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $y7 = mysql_fetch_array($y6);
    $y8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k22' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $y9 = mysql_fetch_array($y8);
    $y10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k22' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $y11 = mysql_fetch_array($y10);
    $y12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k22' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $y13 = mysql_fetch_array($y12);
    $y14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k22' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $y15 = mysql_fetch_array($y14);
    $y16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k22' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $y17 = mysql_fetch_array($y16);
    $y18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k22' and DaftIPLT.KondOpIPLT = ' ' ");
    $y19 = mysql_fetch_array($y18);


    $k23='Sulawesi Barat';
    $z=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k23' ");
    $z21=mysql_fetch_array($z);
    $z2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k23' " );
   	$z3 = mysql_fetch_array($z2);
    $z4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k23' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $z5 = mysql_fetch_array($z4);
    $z6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k23' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $z7 = mysql_fetch_array($z6);
    $z8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k23' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $z9 = mysql_fetch_array($z8);
    $z10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k23' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $z11 = mysql_fetch_array($z10);
    $z12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k23' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $z13 = mysql_fetch_array($z12);
    $z14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k23' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $z15 = mysql_fetch_array($z14);
    $z16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k23' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $z17 = mysql_fetch_array($z16);
    $z18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k23' and DaftIPLT.KondOpIPLT = ' ' ");
    $z19 = mysql_fetch_array($z18);


    $k24='Sulawesi Selatan';
    $az=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k24' ");
    $az21=mysql_fetch_array($az);
    $az2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k24' " );
   	$az3 = mysql_fetch_array($az2);
    $az4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k24' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $az5 = mysql_fetch_array($az4);
    $az6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k24' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $az7 = mysql_fetch_array($az6);
    $az8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k24' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $az9 = mysql_fetch_array($az8);
    $az10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k24' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $az11 = mysql_fetch_array($az10);
    $az12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k24' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $az13 = mysql_fetch_array($az12);
    $az14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k24' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $az15 = mysql_fetch_array($az14);
    $az16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k24' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $az17 = mysql_fetch_array($az16);
    $az18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k24' and DaftIPLT.KondOpIPLT = ' ' ");
    $az19 = mysql_fetch_array($az18);


    $k25='Sulawesi Tengah';
    $baz=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k25' ");
    $baz21=mysql_fetch_array($baz);
    $baz2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k25' " );
   	$baz3 = mysql_fetch_array($baz2);
    $baz4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k25' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $baz5 = mysql_fetch_array($baz4);
    $baz6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k25' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $baz7 = mysql_fetch_array($baz6);
    $baz8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k25' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $baz9 = mysql_fetch_array($baz8);
    $baz10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k25' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $baz11 = mysql_fetch_array($baz10);
    $baz12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k25' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $baz13 = mysql_fetch_array($baz12);
    $baz14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k25' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $baz15 = mysql_fetch_array($baz14);
    $baz16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k25' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $baz17 = mysql_fetch_array($baz16);
    $baz18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k25' and DaftIPLT.KondOpIPLT = ' ' ");
    $baz19 = mysql_fetch_array($baz18);


    $k26='Sulawesi Tenggara';
    $cbaz=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k26' ");
    $cbaz21=mysql_fetch_array($cbaz);
    $cbaz2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k26' " );
   	$cbaz3 = mysql_fetch_array($cbaz2);
    $cbaz4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k26' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $cbaz5 = mysql_fetch_array($cbaz4);
    $cbaz6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k26' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $cbaz7 = mysql_fetch_array($cbaz6);
    $cbaz8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k26' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $cbaz9 = mysql_fetch_array($cbaz8);
    $cbaz10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k26' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $cbaz11 = mysql_fetch_array($cbaz10);
    $cbaz12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k26' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $cbaz13 = mysql_fetch_array($cbaz12);
    $cbaz14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k26' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $cbaz15 = mysql_fetch_array($cbaz14);
    $cbaz16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k26' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $cbaz17 = mysql_fetch_array($cbaz16);
    $cbaz18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k26' and DaftIPLT.KondOpIPLT = ' ' ");
    $cbaz19 = mysql_fetch_array($cbaz18);



    $k27='Sulawesi Utara';
    $dcbaz=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k27' ");
    $dcbaz21=mysql_fetch_array($dcbaz);
    $dcbaz2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k27' " );
   	$dcbaz3 = mysql_fetch_array($dcbaz2);
    $dcbaz4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k27' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $dcbaz5 = mysql_fetch_array($dcbaz4);
    $dcbaz6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k27' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $dcbaz7 = mysql_fetch_array($dcbaz6);
    $dcbaz8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k27' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $dcbaz9 = mysql_fetch_array($dcbaz8);
    $dcbaz10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k27' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $dcbaz11 = mysql_fetch_array($dcbaz10);
    $dcbaz12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k27' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $dcbaz13 = mysql_fetch_array($dcbaz12);
    $dcbaz14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k27' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $dcbaz15 = mysql_fetch_array($dcbaz14);
    $dcbaz16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k27' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $dcbaz17 = mysql_fetch_array($dcbaz16);
    $dcbaz18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k27' and DaftIPLT.KondOpIPLT = ' ' ");
    $dcbaz19 = mysql_fetch_array($dcbaz18);



    $k28='Sumatera Barat';
    $edcbaz=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k28' ");
    $edcbaz21=mysql_fetch_array($edcbaz);
    $edcbaz2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k28' " );
   	$edcbaz3 = mysql_fetch_array($edcbaz2);
    $edcbaz4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k28' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $edcbaz5 = mysql_fetch_array($edcbaz4);
    $edcbaz6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k28' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $edcbaz7 = mysql_fetch_array($edcbaz6);
    $edcbaz8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k28' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $edcbaz9 = mysql_fetch_array($edcbaz8);
    $edcbaz10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k28' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $edcbaz11 = mysql_fetch_array($edcbaz10);
    $edcbaz12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k28' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $edcbaz13 = mysql_fetch_array($edcbaz12);
    $edcbaz14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k28' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $edcbaz15 = mysql_fetch_array($edcbaz14);
    $edcbaz16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k28' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $edcbaz17 = mysql_fetch_array($edcbaz16);
    $edcbaz18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k28' and DaftIPLT.KondOpIPLT = ' ' ");
    $edcbaz19 = mysql_fetch_array($edcbaz18);


    $k29='Sumatera Selatan';
    $fedcbaz=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k29' ");
    $fedcbaz21=mysql_fetch_array($fedcbaz);
    $fedcbaz2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k29' " );
   	$fedcbaz3 = mysql_fetch_array($fedcbaz2);
    $fedcbaz4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k29' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $fedcbaz5 = mysql_fetch_array($fedcbaz4);
    $fedcbaz6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k29' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $fedcbaz7 = mysql_fetch_array($fedcbaz6);
    $fedcbaz8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k29' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $fedcbaz9 = mysql_fetch_array($fedcbaz8);
    $fedcbaz10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k29' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $fedcbaz11 = mysql_fetch_array($fedcbaz10);
    $fedcbaz12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k29' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $fedcbaz13 = mysql_fetch_array($fedcbaz12);
    $fedcbaz14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k29' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $fedcbaz15 = mysql_fetch_array($fedcbaz14);
    $fedcbaz16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k29' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $fedcbaz17 = mysql_fetch_array($fedcbaz16);
    $fedcbaz18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k29' and DaftIPLT.KondOpIPLT = ' ' ");
    $fedcbaz19 = mysql_fetch_array($fedcbaz18);


    $k30='Sumatera Utara';
    $gfedcbaz=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k30' ");
    $gfedcbaz21=mysql_fetch_array($gfedcbaz);
    $gfedcbaz2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k30' " );
   	$gfedcbaz3 = mysql_fetch_array($gfedcbaz2);
    $gfedcbaz4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k30' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $gfedcbaz5 = mysql_fetch_array($gfedcbaz4);
    $gfedcbaz6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k30' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $gfedcbaz7 = mysql_fetch_array($gfedcbaz6);
    $gfedcbaz8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k30' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $gfedcbaz9 = mysql_fetch_array($gfedcbaz8);
    $gfedcbaz10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k30' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $gfedcbaz11 = mysql_fetch_array($gfedcbaz10);
    $gfedcbaz12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k30' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $gfedcbaz13 = mysql_fetch_array($gfedcbaz12);
    $gfedcbaz14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k30' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $gfedcbaz15 = mysql_fetch_array($gfedcbaz14);
    $gfedcbaz16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k30' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $gfedcbaz17 = mysql_fetch_array($gfedcbaz16);
    $gfedcbaz18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k30' and DaftIPLT.KondOpIPLT = ' ' ");
    $gfedcbaz19 = mysql_fetch_array($gfedcbaz18);


    $k31='Yogyakarta';
    $hgfedcbaz=mysql_query("SELECT 
						NmProp  
						FROM DaftProv 
						where NmProp = '$k31' ");
    $hgfedcbaz21=mysql_fetch_array($hgfedcbaz);
    $hgfedcbaz2 = mysql_query("SELECT NmProp, COUNT( NmIPLT ) as jumlah
	FROM DaftIPLT, DaftProv, DaftKabKot
	Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k31' " );
   	$hgfedcbaz3 = mysql_fetch_array($hgfedcbaz2);
    $hgfedcbaz4 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k31' and DaftIPLT.KondOpIPLT = 'beroperasi' ");
    $hgfedcbaz5 = mysql_fetch_array($hgfedcbaz4);
    $hgfedcbaz6 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k31' and DaftIPLT.KondOpIPLT = 'dioperasikan tidak sebagaimana mestinya' ");
    $hgfedcbaz7 = mysql_fetch_array($hgfedcbaz6);
    $hgfedcbaz8 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k31' and DaftIPLT.KondOpIPLT = 'belum dioperasikan' ");
    $hgfedcbaz9 = mysql_fetch_array($hgfedcbaz8);
    $hgfedcbaz10 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k31' and DaftIPLT.KondOpIPLT = 'tidak (tidak lagi) dioperasikan' ");
    $hgfedcbaz11 = mysql_fetch_array($hgfedcbaz10);
    $hgfedcbaz12 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k31' and DaftIPLT.KondOpIPLT = 'sedang dalam rehabilitasi' ");
    $hgfedcbaz13 = mysql_fetch_array($hgfedcbaz12);
    $hgfedcbaz14 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k31' and DaftIPLT.KondOpIPLT = 'sedang proses konstruksi' ");
    $hgfedcbaz15 = mysql_fetch_array($hgfedcbaz14);
    $hgfedcbaz16 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k31' and DaftIPLT.KondOpIPLT = 'dibongkar jadi kantor' ");
    $hgfedcbaz17 = mysql_fetch_array($hgfedcbaz16);
    $hgfedcbaz18 =	mysql_query(" SELECT NmProp, COUNT( NmIPLT ) as beroperasi
    FROM DaftIPLT, DaftProv, DaftKabKot
    Where (DaftIPLT.KdKab = DaftKabKot.KdKab and DaftProv.KdProp = DaftKabKot.KdProp) and DaftProv.NmProp = '$k31' and DaftIPLT.KondOpIPLT = ' ' ");
    $hgfedcbaz19 = mysql_fetch_array($hgfedcbaz18);


    $xxx = mysql_query("SELECT NmIPLT, Count(NmIPLT) as IPLT FROM `DaftIPLT` WHERE 1");
    $xxx1 = mysql_fetch_array($xxx);
    $yyy = mysql_query("SELECT NmIPLT, Count(`KondOpIPLT`) as beroperasi FROM `DaftIPLT` WHERE KondOpIPLT ='beroperasi' ");
    $yyy1 = mysql_fetch_array($yyy);
    $zzz = mysql_query("SELECT NmIPLT, Count(`KondOpIPLT`) as beroperasi FROM `DaftIPLT` WHERE KondOpIPLT ='dioperasikan tidak sebagaimana mestinya' ");
    $zzz1 = mysql_fetch_array($zzz);
    $www = mysql_query("SELECT NmIPLT, Count(`KondOpIPLT`) as beroperasi FROM `DaftIPLT` WHERE KondOpIPLT ='belum dioperasikan' ");
    $www1 = mysql_fetch_array($www);
    $aaa = mysql_query("SELECT NmIPLT, Count(`KondOpIPLT`) as beroperasi FROM `DaftIPLT` WHERE KondOpIPLT ='tidak (tidak lagi) dioperasikan' ");
    $aaa1 = mysql_fetch_array($aaa);
    $bbb = mysql_query("SELECT NmIPLT, Count(`KondOpIPLT`) as beroperasi FROM `DaftIPLT` WHERE KondOpIPLT ='sedang dalam rehabilitasi' " );
    $bbb1 = mysql_fetch_array($bbb);
    $ccc = mysql_query("SELECT NmIPLT, Count(`KondOpIPLT`) as beroperasi FROM `DaftIPLT` WHERE KondOpIPLT ='sedang proses konstruksi' ");
    $ccc1 = mysql_fetch_array($ccc);
    $ddd = mysql_query("SELECT NmIPLT, Count(`KondOpIPLT`) as beroperasi FROM `DaftIPLT` WHERE KondOpIPLT ='dibongkar jadi kantor' ");
    $ddd1 = mysql_fetch_array($ddd);
    $eee = mysql_query("SELECT NmIPLT, Count(`KondOpIPLT`) as beroperasi FROM `DaftIPLT` WHERE KondOpIPLT =' ' ");
    $eee1 = mysql_fetch_array($eee);


?>