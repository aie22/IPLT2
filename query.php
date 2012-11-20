<?php

$objConnect = mysql_connect("localhost","root","") or die(mysql_error());
   $objDB = mysql_select_db("proyek30juta"); 

$tampil5=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '104' 
						order by DaftIPLT.KdIdIPLT");
$tampil6=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '105' 
						order by DaftIPLT.KdIdIPLT");
$tampil7=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '106' 
						order by DaftIPLT.KdIdIPLT");
$tampil8=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '107' 
						order by DaftIPLT.KdIdIPLT");
$tampil9=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '108' 
						order by DaftIPLT.KdIdIPLT");
$tampil10=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '109' 
						order by DaftIPLT.KdIdIPLT");
$tampil11=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '110' 
						order by DaftIPLT.KdIdIPLT");
$tampil12=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '201' 
						order by DaftIPLT.KdIdIPLT");
$tampil13=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '202' 
						order by DaftIPLT.KdIdIPLT");
$tampil14=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '203' 
						order by DaftIPLT.KdIdIPLT");
$tampil15=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '204' 
						order by DaftIPLT.KdIdIPLT");
$tampil16=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '206' 
						order by DaftIPLT.KdIdIPLT");
$tampil17=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '301' 
						order by DaftIPLT.KdIdIPLT");
$tampil18=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '302' 
						order by DaftIPLT.KdIdIPLT");
$tampil19=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '303' 
						order by DaftIPLT.KdIdIPLT");
$tampil20=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '401' 
						order by DaftIPLT.KdIdIPLT");
$tampil21=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '403' 
						order by DaftIPLT.KdIdIPLT");
$tampil22=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '404' 
						order by DaftIPLT.KdIdIPLT");
$tampil23=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '501' 
						order by DaftIPLT.KdIdIPLT");
$tampil24=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '503' 
						order by DaftIPLT.KdIdIPLT");
$tampil25=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '504' 
						order by DaftIPLT.KdIdIPLT");
$tampil26=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '505' 
						order by DaftIPLT.KdIdIPLT");
$tampil27=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '601' 
						order by DaftIPLT.KdIdIPLT");
$tampil28=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '603' 
						order by DaftIPLT.KdIdIPLT");
$tampil29=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '205' 
						order by DaftIPLT.KdIdIPLT");
$tampil30=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '402' 
						order by DaftIPLT.KdIdIPLT");
$tampil31=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '502' 
						order by DaftIPLT.KdIdIPLT");
$tampil32=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '506' 
						order by DaftIPLT.KdIdIPLT");
$tampil33=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '602' 
						order by DaftIPLT.KdIdIPLT");
$tampil34=mysql_query("SELECT 
						DaftIPLT.KdIdIPLT, 
						DaftIPLT.NmIPLT, 
						DaftIPLT.KondFskIPLT, 
						DaftIPLT.KondOpIPLT, 
						DaftKabKot.KdKab , 
						DaftKabKot.NmKabKotLkp  
						FROM DaftIPLT, 
						DaftKabKot, 
						DaftProv 
						WHERE ((DaftIPLT.KdKab = DaftKabKot.KdKab)
						AND (DaftProv.KdProp = DaftKabKot.KdProp))
						AND DaftProv.KdProp = '604' 
						order by DaftIPLT.KdIdIPLT");
?>