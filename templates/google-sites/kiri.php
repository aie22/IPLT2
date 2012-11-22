 <?php
 if ($_GET['module']=='IPLT'){
 ?>
			<!-- CONTENT -->
      
		  	
<div id="sites-chrome-main-wrapper">
<div id="sites-chrome-main-wrapper-inside">
<table id="sites-chrome-main" class="sites-layout-hbox" cellspacing="0" cellpadding="{scmCellpadding}" border="0">
<tr>
<td id="sites-chrome-sidebar-left" class="sites-layout-sidebar-left" style="display: none; width: 200px">
<div xmlns="http://www.w3.org/1999/xhtml" id="COMP_05306838038773043" class="sites-embed"><h4 class="sites-embed-title"></h4><div class="sites-embed-content sites-embed-content-sidebar-textbox"> </div></div>
</td>
<td id="sites-canvas-wrapper">
<div id="sites-canvas">
<div id="goog-ws-editor-toolbar-container"> </div>
<div xmlns="http://www.w3.org/1999/xhtml" id="title-crumbs" style="">
</div>
<h3 xmlns="http://www.w3.org/1999/xhtml" id="sites-page-title-header" style="" align="left">
<span id="sites-page-title" dir="ltr">Beranda</span>
</h3>
<div id="sites-canvas-main" class="sites-canvas-main">
<div id="sites-canvas-main-content">
<div xmlns="http://www.w3.org/1999/xhtml" class="sites-layout-name-three-column-hf sites-layout-vbox"><div class="sites-layout-tile sites-tile-name-header"><div dir="ltr"><div class="sites-embed-align-left-wrapping-off"><div class="sites-embed-border-on sites-embed" style="width:950px;"><h4 class="sites-embed-title">web page</h4><div class="sites-embed-content sites-embed-type-ggs-gadget"><iframe title="web page" width="950" height="30" scrolling="no" frameborder="0" id="66682813" name="66682813" allowtransparency="true" class="igm" src="//e50k0b9ndsjuakje6e4iajsd8rkv0ikm-a-sites-opensocial.googleusercontent.com/gadgets/ifr?url=http://hosting.gmodules.com/ig/gadgets/file/109085250123219261660/text-marquee-Gadget.xml&amp;container=enterprise&amp;view=default&amp;lang=en&amp;country=ALL&amp;sanitize=0&amp;v=3d2cb8fd1d625a01&amp;up_Text=departemen+pekerjaan+umum+-+direktorat+jenderal+cipta+karya+-+direktorat+pengembangan+penyehatan+lingkungan+permukiman+-+penyelenggaraan+prasarana+dan+sarana+pengembangan+penyehatan+lingkungan+permukiman+-+septik+tank+dengan+spesifikasi+teknik+yang+benar+menghindarkan+terjadinya+pencemaran+air+tanah+yang+berakibat+wabah+penyakit+-+septik+tank+membuat+lingkungan+lebih+sehat&amp;up_ScrollSpeed=3&amp;up_direction=left&amp;up_fontcolor=yellow&amp;up_bgcolor=green&amp;up_fontsize=1&amp;libs=core&amp;mid=215&amp;parent=https://sites.google.com/site/ipltpplp/#st=e%3DAIHE3cBzaNNCn8sgNLKXj8deqn92BV5ExVj0GsFaGZRVwrmiM12KTR2xJt1cmn1kZrK9DeAe1XlpfGn9%252BFm5zNyqf0YqmwQ2Ta6SkDgqshRZ9i57Pcw5tW3mE9aLbgKy%252FxGsWJNueC8s%26c%3Denterprise&amp;rpctoken=3823321461077320575"></iframe></div></div></div></div></div><table cellspacing="0" class="sites-layout-hbox"><tbody><tr><td class="sites-layout-tile sites-tile-name-content-1"><div dir="ltr"><span style="color:rgb(255,153,0)"><b><font size="5">Agenda</font></b></span><br />
<div>
<div style="display:block; margin:5px auto 5px 0; text-align:left; clear:both; display:block;">
<div class="sites-embed " style="sites-embed-full-width">
<div class="sites-embed-content-notitle">
<ul class="sites-announcement-snippet">
  <?php
                    $agenda=mysql_query("SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT 4");
                    while($a=mysql_fetch_array($agenda)){
                        $tgl_agenda = tgl_indo($a[tgl_mulai]);
                        $isi_agenda = strip_tags($a['isi_agenda']); // membuat paragraf pada isi berita dan mengabaikan tag html
                        $isi = substr($isi_agenda,0,200); // ambil sebanyak 220 karakter
                        $isi = substr($isi_agenda,0,strrpos($isi," ")); // potong per spasi kalimat
   
                       echo "<li class='news-text2'><span class='tanggal'>$tgl_agenda</span>
                             <br /><a href='agenda-$a[id_agenda]-$a[tema_seo].html'>$a[tema]</a></li>";
                    }
                  ?>
</ul>
<div class="sites-embed-showing-results">
                
                    Showing posts <strong>3</strong> 
                    <a href="/IPLT3/semua-agenda.html" dir="ltr">View more</a>
</div>
</div>
</div>
</div>
<br/><br/>
<script type="text/javascript">
        //<![CDATA[
          JOT_recentAnnouncementPreloadImages = function() {
            var loader = new gsites.util.ImagePreloader();
            loader.init('sites-canvas-main-content', 'sites-recentannouncements-thumbnails');
          };
          JOT_addListener('pageLoaded', JOT_recentAnnouncementPreloadImages);
          JOT_addListener('completeEditRender', JOT_recentAnnouncementPreloadImages);
        //]]>
</script>
<br /><br/><br/><br/>
<div class="sites-embed-align-left-wrapping-off"><div class="sites-embed-border-off sites-embed" style="width:650px;"><div id ="data" style="border:1px solid black;width:750px;height:700px;overflow:scroll;overflow-y:scroll;overflow-x:scroll;" class="sites-embed-content sites-embed-type-spreadsheet"><iframe src="" width="650" height="500" frameborder="0" id="414399318"><div style="border:1px solid black;width:150px;height:100px;overflow:scroll;overflow-y:scroll;overflow-x:hidden;">
<p style="height:250%;">
By using overflow-y, we can create scroll bars when the contents of this div are bigger/higher than the container. Also, by setting this paragraph to 250 percent, it is automatically 250 percent higher than the parent container - forcing an overflow. 
</p>
</div></iframe></div></div></div>
<div class="sites-embed-align-left-wrapping-off"><div class="sites-embed-border-off sites-embed" style="width:625px;"><div class="sites-embed-content sites-embed-type-ggs-gadget"><iframe title="Include gadget (iframe)" width="625" height="88" scrolling="no" frameborder="0" id="82249043" name="82249043" allowtransparency="true" class="igm" src="//mj89sp3sau2k7lj1eg3k40hkeppguj6j-a-sites-opensocial.googleusercontent.com/gadgets/ifr?url=http://www.gstatic.com/sites-gadgets/iframe/iframe.xml&amp;container=enterprise&amp;view=default&amp;lang=en&amp;country=ALL&amp;sanitize=0&amp;v=c88ff93d33099ac2&amp;libs=core&amp;mid=239&amp;parent=https://sites.google.com/site/ipltpplp/#up_scroll=auto&amp;up_iframeURL=https://docs.google.com/presentation/embed?id%3D16mY50T3AjG7hYRV46AUCYbtUb40HIoZ4H-xFu-F7T8Y%26start%3Dtrue%26loop%3Dtrue%26delayms%3D3000&amp;st=e%3DAIHE3cDAmcu%252FDnVpTbDPWha3cgxkowUFNPuomoFw3d%252B8CtaE2e1u0nupP59ww3KKBR%252BYKxxGTIwe0cUD3JjXft8X9R%252B1eNjGHyPXELMLKTW5zDfGlhLzREVBfuPkN3D%252BQgBazffgviVO%26c%3Denterprise&amp;rpctoken=6374496002327086188"></iframe></div></div></div></div></div></td><td class="sites-layout-tile sites-tile-name-content-2"><div dir="ltr"><div class="sites-embed-align-left-wrapping-off"><div class="sites-embed-border-off sites-embed" style="width:300px;"><div class="sites-embed-content sites-embed-type-ggs-gadget"><iframe width="300" height="275" scrolling="no" frameborder="0" id="1720699028" name="1720699028" allowtransparency="true" class="igm" src="//mj89sp3sau2k7lj1eg3k40hkeppguj6j-a-sites-opensocial.googleusercontent.com/gadgets/ifr?url=http://www.gstatic.com/sites-gadgets/iframe/iframe.xml&amp;container=enterprise&amp;view=default&amp;lang=en&amp;country=ALL&amp;sanitize=0&amp;v=c88ff93d33099ac2&amp;libs=core&amp;parent=https://sites.google.com/site/ipltpplp/#up_scroll=auto&amp;up_iframeURL=https://docs.google.com/presentation/embed?id%3D1n_pg8UtKnWfI7ua-7BAIwvN8933_oVezisOdI0fek4k%26start%3Dtrue%26loop%3Dtrue%26delayms%3D3000&amp;st=e%3DAIHE3cB0wSQbweknYiz1bR%252FkMBUIt1xM9xG7bAbaWwDcLKhwqdcYQ8gD%252FCe4yXeUQ0%252FPu3UKZGVlV3oItm4Bssb%252FZfzURSTuhIHcS8DWsfVVU4r9RB0ZD4TQy4eQlkSFk2FxFkMleEBb%26c%3Denterprise&amp;rpctoken=6971767177232633532"></iframe></div></div></div></div></td><td class="sites-layout-tile sites-tile-name-content-3"><div dir="ltr">
<div><font size="5"><b><span style="color:rgb(255,153,0)">Berita</span><br /></b></font>
<div style="display:block; margin:5px auto 5px 0; text-align:left; clear:both; display:block;">
<div class="sites-embed " style="sites-embed-full-width">
<div class="sites-embed-content-notitle">
<ul class="sites-announcement-snippet">
<li class="line-divider sites-embed-background sites-clear" dir="ltr">
  <?php
        $terkini2=mysql_query("SELECT * FROM berita WHERE headline='Y' ORDER BY id_berita DESC LIMIT 8");
        $no=1;
        while($t=mysql_fetch_array($terkini2)){      
        $tgl = tgl_indo($t[tanggal]);
        $isi_berita = strip_tags($t['isi_berita']); 
        $isi = substr($isi_berita,0,100); 
        $isi = substr($isi_berita,0,strrpos($isi," ")); 
        echo "
        <li>
        <a href='berita-$t[id_berita]-$t[judul_seo].html'>
        <img class=imgheadline src=foto_berita/$t[gambar] width='82px' height='40px' alt='' /></a>
        <h3><a href='berita-$t[id_berita]-$t[judul_seo].html'>&nbsp;$t[judul]</h3></a>
        <p><span class=tanggal>$t[hari], $tgl - $t[jam] WIB</span><br />$isi ...
        <a href='berita-$t[id_berita]-$t[judul_seo].html'> &raquo; selengkapnya...</a></p>
        </li>"; 
        $no++;} 
        ?>

</ul>
<div class="sites-embed-showing-results">
                
                    Showing posts <strong>1-2</strong> 
                    <a href="/IPLT3/kategori-228-berita.html" dir="ltr">View more »</a>
</div>
</div>
</div>
</div>
<script type="text/javascript">
        //<![CDATA[
          JOT_recentAnnouncementPreloadImages = function() {
            var loader = new gsites.util.ImagePreloader();
            loader.init('sites-canvas-main-content', 'sites-recentannouncements-thumbnails');
          };
          JOT_addListener('pageLoaded', JOT_recentAnnouncementPreloadImages);
          JOT_addListener('completeEditRender', JOT_recentAnnouncementPreloadImages);
        //]]>
</script>
</div></div></td></tr></tbody></table><div class="sites-layout-tile sites-tile-name-footer sites-layout-empty-tile"><div dir="ltr"><br /></div></div></div>
</div> 
<div id="jot-content" class="list-page sites-clear">
<div id="goog-ws-list-floatingBar">
<div class="sites-clear">
<div class="sites-list-showing-items">
                  Showing <span xmlns="http://www.w3.org/1999/xhtml" class="goog-ws-list-rowCount">0</span> items
                </div>
</div>
<table class="goog-ws-list-header" cellspacing="0">
<tr>
<th xmlns="http://www.w3.org/1999/xhtml" width="100%">beranda</th>
</tr>
<tr id="goog-ws-list-sort-row" class="goog-ws-list-sort-row">
<td xmlns="http://www.w3.org/1999/xhtml"><a class="sites-list-sort-button" href="javascript:;" id="sort_9395486147043715"><div class="sites-list-sortlabel-grey">Sort </div><div class="sites-list-sort-arrow goog-toolbar-menu-button-dropdown"> </div></a></td>
</tr>
</table>
</div>
<table id="goog-ws-list-table" class="sites-table goog-ws-list-table">
<tbody>
<tr xmlns="http://www.w3.org/1999/xhtml" id="sites-list-tr-placeholder"><th width="100%"></th></tr>
</tbody>
</table>
<div class="sites-list-showing-items">
              Showing <span xmlns="http://www.w3.org/1999/xhtml" class="goog-ws-list-rowCount">0</span> items
            </div>
</div>
</div> 
         
 <!-- Untuk menu kiri-->         
        <div id="tips">
         <!--<?php               
              $main=mysql_query("SELECT * FROM mainmenukiri  
                                 WHERE  aktif='Y'");
              while($r=mysql_fetch_array($main)){
	             //echo "<li><a href='$r[link]'><span>$r[nama_menu]</span></a>";
	             $sub=mysql_query("SELECT * FROM submenu, mainmenukiri  
                                 WHERE submenu.id_main =mainmenukiri.id_main 
                                 AND submenu.id_main=$r[id_main]");
               $jml=mysql_num_rows($sub);
                // apabila sub menu ditemukan
                if ($jml > 0){
                  echo "<div id='iconmenu'><ul>";
	                while($w=mysql_fetch_array($sub)){
					echo "<li><a href='$w[link_sub]'><span><img src='$f[folder]/icon/$w[icon]' border=0px width=23px height=23px> <div id='menus'>&nbsp; $w[nama_sub] </div></span></a></li>";
	                }           
	                echo "</ul></div>
                        </li>";
                }
                else{
                  echo "</li>";
                }
              }        
            ?>-->

                  
        </div><!-- / end untuk menu kiri-->  
        </div><!-- / end content-kiri untuk headline berita -->       
        <!-- SIDEBAR -->
		
		<!-- TAB untuk Berita banyumas & Direktori Banyumas -->         
        <!-- / end content-kanan untuk tabs-->
				
          <!-- / end content-kiri untuk berita sebelumnya dan galeri foto -->
          
          <div id="content-kanan">          
<!--<?php
  // Tampilkan 2 kategori beserta 5 berita dalam kategori tersebut (bagian kanan)          
  echo "<ul>";
   $main=mysql_query("SELECT * FROM kategori WHERE aktif='N' order by id_kategori limit 2,2"); //iki kategori bagian Kesenian budaya & APBD
   while($r=mysql_fetch_array($main)){
     echo "<br /><li><div id=kotakjudul>
                <span class=judulhead><a href='kategori-$r[id_kategori]-$r[kategori_seo].html'>$r[nama_kategori]</a></span>
              </div>
              <div id=kotakisi>
                <table cellpadding=2 width=100% border=0 cellspacing=4>
                <tbody>
                <div class='tips'>
             <ul>";
          $sub=mysql_query("SELECT * FROM kategori, berita  
                            WHERE kategori.id_kategori=berita.id_kategori 
                            AND berita.id_kategori=$r[id_kategori] order by id_berita desc limit 1,4");
          $sub2=mysql_query("SELECT * FROM kategori, berita  
                            WHERE kategori.id_kategori=berita.id_kategori 
                            AND berita.id_kategori=$r[id_kategori] order by id_berita desc limit 1");
          $t=mysql_fetch_array($sub2);
                if ($t['gambar']!=''){
			             echo "<span class=image><img src='foto_berita/small_$t[gambar]' width=110 border=0></span>";
		            }
                // Tampilkan hanya sebagian isi berita
                $isi_berita = htmlentities(strip_tags($t['isi_berita'])); // membuat paragraf pada isi berita dan mengabaikan tag html
                $isi = substr($isi_berita,0,120); // ambil sebanyak 120 karakter
                $isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat

                $judul = substr($t['judul'],0,30); // ambil sebanyak 35 karakter
                $judul = substr($t['judul'],0,strrpos($judul," ")); // potong per spasi kalimat
                echo "<li class='garisbawah'>
                      <span class=judulnya><a href='berita-$t[id_berita]-$t[judul_seo].html' title=\"$t[judul]\">$judul ...</a></span><br />
                      <span class=tanggal>$t[hari], $tgl</span><br /><br /> 
                      $isi ... <a href='berita-$t[id_berita]-$t[judul_seo].html' title=\"Klik untuk melihat detail beritanya\">Selengkapnya</a> 
                      </li>";	        
          while($w=mysql_fetch_array($sub)){
                $judul = substr($w['judul'],0,45); // ambil sebanyak 45 karakter
                $judul = substr($w['judul'],0,strrpos($judul," ")); // potong per spasi kalimat
              echo "<li class='garisbawah'><a href='berita-$w[id_berita]-$w[judul_seo].html' title=\"$w[judul]\">&#187; $judul ...</a></li>";
	         }
	       echo "</ul></div>
                </tbody>
                </table>
              </div>
            </li>";
  }        
echo "</ul>";
?> -->
          </div><!-- / end content-kanan untuk kategori berita, download, dan agenda -->
	    </div> <!-- / end content -->
<?php 
}
elseif ($_GET['module']=='detailberita'){
	echo "<div id='content'>          
           <div id='content-detail'>";            

	$detail=mysql_query("SELECT * FROM berita,users,kategori    
                      WHERE users.username=berita.username 
                      AND kategori.id_kategori=berita.id_kategori 
                      AND id_berita='$_GET[id]'");
	$d   = mysql_fetch_array($detail);
	$tgl = tgl_indo($d[tanggal]);
	$baca = $d[dibaca]+1;
	echo "<span class=tanggal><img src=$f[folder]/images/clock.gif> $d[hari], $tgl - $d[jam] WIB</span><br />";
	echo "<span class=judul>$d[judul]</span><br />";
	echo "<span class=posting>Diposting oleh : <b>$d[nama_lengkap]</b><br /> 
        Kategori: <a href=kategori-$d[id_kategori]-$d[kategori_seo].html><b>$d[nama_kategori]</b></a> 
        - Dibaca: <b>$baca</b> kali</span><br />";
  // Apabila ada gambar dalam berita, tampilkan   
 	if ($d[gambar]!=''){
		echo "<p><span class=image><img src='foto_berita/$d[gambar]' border=0></span></p>";
	}
 	//$isi_berita=nl2br($d[isi_berita]); // membuat paragraf pada isi berita
	echo "$d[isi_berita] <br />";	 		  
  
  // Tampilkan judul berita yang terkait (maks: 5) 
  echo "<img src=$f[folder]/images/berita_terkait.jpg><br /><ul>";
  // pisahkan kata per kalimat lalu hitung jumlah kata
  $pisah_kata  = explode(",",$d[tag]);
  $jml_katakan = (integer)count($pisah_kata);

  $jml_kata = $jml_katakan-1; 
  $ambil_id = substr($_GET[id],0,4);

  // Looping query sebanyak jml_kata
  $cari = "SELECT * FROM berita WHERE (id_berita<'$ambil_id') and (id_berita!='$ambil_id') and (" ;
    for ($i=0; $i<=$jml_kata; $i++){
      $cari .= "tag LIKE '%$pisah_kata[$i]%'";
      if ($i < $jml_kata ){
        $cari .= " OR ";
      }
    }
   $cari .= ") ORDER BY id_berita DESC LIMIT 5";
 
  $hasil  = mysql_query($cari);
  while($h=mysql_fetch_array($hasil)){
  		echo "<li><a href=berita-$h[id_berita]-$h[judul_seo].html>$h[judul]</a></li>";
  }      
	echo "</ul>";

  // Apabila detail berita dilihat, maka tambahkan berapa kali dibacanya
  mysql_query("UPDATE berita SET dibaca=$d[dibaca]+1 
              WHERE id_berita='$_GET[id]'"); 
         
    echo "</div>";
	        echo " <div id='fb-root'/></div>
				   <script src=' http://connect.facebook.net/en_US/all.js#appId=305465462871179&amp;xfbml=1'/></script>
			       <div class='fb-comments' data-href='http://www.kabarinyong.com' data-num-posts='2' data-width='650'></div>
				   </div>";            
}

// Modul berita per kategori
elseif ($_GET['module']=='detailkategori'){
	echo "<div id='content'>          
           <div id='content-detail'>";            
  // Tampilkan nama kategori
  $sq = mysql_query("SELECT nama_kategori from kategori where id_kategori='$_GET[id]'");
  $n = mysql_fetch_array($sq);
  echo "<span class=judul_head>&#187; Kategori : <b>$n[nama_kategori]</b></span><br /><br />";
  
  $p      = new Paging3;
  $batas  = 6;
  $posisi = $p->cariPosisi($batas);
  
  // Tampilkan daftar berita sesuai dengan kategori yang dipilih
 	$sql   = "SELECT * FROM berita WHERE id_kategori='$_GET[id]' 
            ORDER BY id_berita DESC LIMIT $posisi,$batas";		 

	$hasil = mysql_query($sql);
	$jumlah = mysql_num_rows($hasil);
	// Apabila ditemukan berita dalam kategori
	if ($jumlah > 0){
   while($r=mysql_fetch_array($hasil)){
		$tgl = tgl_indo($r[tanggal]);
		echo "<table><tr><td><span class=tanggal><img src=$f[folder]/images/clock.gif> $r[hari], $tgl - $r[jam] WIB</span><br />";
		echo "<span class=judul><a href=berita-$r[id_berita]-$r[judul_seo].html>$r[judul]</a></span><br />";
 		// Apabila ada gambar dalam berita, tampilkan
    if ($r[gambar]!=''){
			echo "<span class=image><img src='foto_berita/small_$r[gambar]' width=110 border=0></span>";
		}
    // Tampilkan hanya sebagian isi berita
    $isi_berita = htmlentities(strip_tags($r[isi_berita])); // membuat paragraf pada isi berita dan mengabaikan tag html
    $isi = substr($isi_berita,0,400); // ambil sebanyak 220 karakter
    $isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat
    echo "$isi ... <a href=berita-$r[id_berita]-$r[judul_seo].html>Selengkapnya</a>
          <br /></td></tr></table><hr color=#CCC noshade=noshade />";
	 }
	
  $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM berita WHERE id_kategori='$_GET[id]'"));
  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
  $linkHalaman = $p->navHalaman($_GET[halkategori], $jmlhalaman);

  echo "Hal: $linkHalaman";
  }
  else{
    echo "Belum ada berita pada kategori ini.";
  }
  echo "</div>
    </div>";            
}

// Modul detail agenda
elseif ($_GET['module']=='detailagenda'){
		  echo "<div id='content'>          
               <div id='content-detail'>";
               
	$detail=mysql_query("SELECT * FROM agenda 
                      WHERE id_agenda='$_GET[id]'");
	$d   = mysql_fetch_array($detail);
  $tgl_posting   = tgl_indo($d[tgl_posting]);
  $tgl_mulai   = tgl_indo($d[tgl_mulai]);
  $tgl_selesai = tgl_indo($d[tgl_selesai]);
  $isi_agenda=nl2br($d[isi_agenda]);
	
  echo "<span class=judul>$d[tema]</span><br />";
  echo "<span class=tanggal>Diposting tanggal: $tgl_posting</span><br /><br />";
	echo "<b>Topik</b>  : $isi_agenda <br />";
 	echo "<b>Tanggal</b> : $tgl_mulai s/d $tgl_selesai <br /><br />";
 	echo "<b>Tempat</b> : $d[tempat] <br /><br />";
 	echo "<b>Pukul</b> : $d[jam] <br /><br />";
 	echo "<b>Pengirim (Contact Person)</b> : $d[pengirim] <br />";
            
  echo "</div>
    </div>";            
}


// Modul hasil pencarian berita 
elseif ($_GET['module']=='hasilcari'){
		  echo "<div id='content'>          
               <div id='content-detail'>";
  echo "<span class=judul_head>&#187; <b>Hasil Pencarian</b></span><br />";
  // menghilangkan spasi di kiri dan kanannya
  $kata = trim($_POST['kata']);
  // mencegah XSS
  $kata = htmlentities(htmlspecialchars($kata), ENT_QUOTES);

  // pisahkan kata per kalimat lalu hitung jumlah kata
  $pisah_kata = explode(" ",$kata);
  $jml_katakan = (integer)count($pisah_kata);
  $jml_kata = $jml_katakan-1;

  $cari = "SELECT * FROM berita WHERE " ;
    for ($i=0; $i<=$jml_kata; $i++){
      $cari .= "judul OR isi_berita LIKE '%$pisah_kata[$i]%'";
      if ($i < $jml_kata ){
        $cari .= " OR ";
      }
    }
  $cari .= " ORDER BY id_berita DESC LIMIT 7";
  $hasil  = mysql_query($cari);
  $ketemu = mysql_num_rows($hasil);

  if ($ketemu > 0){
    echo "<p>Ditemukan <b>$ketemu</b> berita dengan kata <font style='background-color:#00FFFF'><b>$kata</b></font> : </p>"; 
    while($t=mysql_fetch_array($hasil)){
		echo "<table><tr><td><span class=judul><a href=berita-$t[id_berita]-$t[judul_seo].html>$t[judul]</a></span><br />";
      // Tampilkan hanya sebagian isi berita
      $isi_berita = htmlentities(strip_tags($t[isi_berita])); // membuat paragraf pada isi berita dan mengabaikan tag html
      $isi = substr($isi_berita,0,250); // ambil sebanyak 150 karakter
      $isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat

      echo "$isi ... <a href=berita-$t[id_berita]-$t[judul_seo].html>Selengkapnya</a>
            <br /></td></tr>
            </table><hr color=#CCC noshade=noshade />";
    }                                                          
  }
  else{
    echo "<p></p><p align=center>Tidak ditemukan berita dengan kata <b>$kata</b></p>";
  }

  echo "</div>
    </div>";            
}


// Modul hasil poling
elseif ($_GET['module']=='hasilpoling'){
 echo "<div id='content'>          
          <div id='content-detail'>";
 if (isset($_COOKIE["poling"])) {
   echo "Sorry, anda sudah pernah melakukan voting terhadap poling ini.";
 }
 else{
  // membuat cookie dengan nama poling
  // cookie akan secara otomatis terhapus dalam waktu 24 jam
  setcookie("poling", "sudah poling", time() + 3600 * 24);

  echo "<span class=judul_head>&#187; <b>Hasil Poling</b></span><br /><br />";

  $u=mysql_query("UPDATE poling SET rating=rating+1 WHERE id_poling='$_POST[pilihan]'");

  echo "<p align=center>Terimakasih atas partisipasi Anda mengikuti poling kami<br /><br />
        Hasil poling saat ini: </p><br />";
  
  echo "<table width=100% style='border: 1pt dashed #0000CC;padding: 10px;'>";

  $jml=mysql_query("SELECT SUM(rating) as jml_vote FROM poling WHERE aktif='Y'");
  $j=mysql_fetch_array($jml);
  
  $jml_vote=$j[jml_vote];
  
  $sql=mysql_query("SELECT * FROM poling WHERE aktif='Y' and status='Jawaban'");
  
  while ($s=mysql_fetch_array($sql)){
  	
  	$prosentase = sprintf("%2.1f",(($s[rating]/$jml_vote)*100));
  	$gbr_vote   = $prosentase * 3;

    echo "<tr><td width=120>$s[pilihan] ($s[rating]) </td><td> 
          <img src=$f[folder]/images/blue.png width=$gbr_vote height=18 border=0> $prosentase % 
          </td></tr>";  
  }
  echo "</table>
        <p>Jumlah Voting: <b>$jml_vote</b></p>";
 }
  echo "</div>
    </div>";            
}


// Modul hasil poling
elseif ($_GET['module']=='lihatpoling'){
  echo "<div id='content'>          
          <div id='content-detail'>";
  echo "<span class=judul_head>&#187; <b>Hasil Poling</b></span><br /><br />";

  echo "<p align=center>Terimakasih atas partisipasi Anda mengikuti poling kami<br /><br />
        Hasil poling saat ini: </p><br />";
  
  echo "<table width=100% style='border: 1pt dashed #0000CC;padding: 10px;'>";

  $jml=mysql_query("SELECT SUM(rating) as jml_vote FROM poling WHERE aktif='Y'");
  $j=mysql_fetch_array($jml);
  
  $jml_vote=$j[jml_vote];
  
  $sql=mysql_query("SELECT * FROM poling WHERE aktif='Y' and status='Jawaban'");
  
  while ($s=mysql_fetch_array($sql)){
  	
  	$prosentase = sprintf("%2.1f",(($s[rating]/$jml_vote)*100));
  	$gbr_vote   = $prosentase * 3;

    echo "<tr><td width=120>$s[pilihan] ($s[rating]) </td><td> 
          <img src=$f[folder]/images/blue.png width=$gbr_vote height=18 border=0> $prosentase % 
          </td></tr>";  
  }
  echo "</table>
        <p>Jumlah Voting: <b>$jml_vote</b></p>";
  echo "</div>
    </div>";            
}

// Modul profil
elseif ($_GET['module']=='profilkami'){
  echo "<div id='content'>          
          <div id='content-detail'>";
  echo "<span class=judul_head>&#187; <b>Profil</b></span><br /><br />"; 

	$profil = mysql_query("SELECT * FROM modul WHERE id_modul='37'");
	$r      = mysql_fetch_array($profil);

  echo "<tr><td class=isi>";
  if ($r[gambar]!=''){
		echo "<span class=image><img src='foto_banner/$r[gambar]'></span>";
	}
  echo "$r[static_content]";  
  echo "</div>
    </div>";            
}

// Modul halaman statis
elseif ($_GET['module']=='halamanstatis'){
		  echo "<div id='content'>          
               <div id='content-detail'>";
               
	$detail=mysql_query("SELECT * FROM halamanstatis 
                      WHERE id_halaman='$_GET[id]'");
	$d   = mysql_fetch_array($detail);
  $tgl_posting   = tgl_indo($d[tgl_posting]);
	
  echo "<span class=judul>$d[judul]</span><br />";
  echo "<span class=tanggal>Diposting tanggal: $tgl_posting</span><br /><br />";
  if ($d[gambar]!=''){
		echo "<span class=image><img src='foto_banner/$d[gambar]'></span>";
	}
	echo "$d[isi_halaman] <br />";
            
  echo "</div>
    </div>";            
}

// Modul semua berita
elseif ($_GET['module']=='semuaberita'){
  echo "<div id='content'>          
          <div id='content-detail'>";
  echo "<span class=judul_head>&#187; <b>Berita</b></span><br /><br />"; 
  $p      = new Paging2;
  $batas  = 12;
  $posisi = $p->cariPosisi($batas);
  // Tampilkan semua berita
  $sql=mysql_query("SELECT count(komentar.id_komentar) as jml, judul, judul_seo, jam, 
                       berita.id_berita, hari, tanggal, gambar, isi_berita    
                       from berita left join komentar 
                       on berita.id_berita=komentar.id_berita
                       and aktif='Y' 
                       group by berita.id_berita DESC LIMIT $posisi,$batas");
  while($r=mysql_fetch_array($sql)){
		$tgl = tgl_indo($r[tanggal]);
		echo "<table><tr><td>
          <span class=tanggal>$r[hari], $tgl - $r[jam] WIB</span><br />";
 		echo "<span class=judul><a href=berita-$r[id_berita]-$r[judul_seo].html>$r[judul]</a></span><br />";
      // Tampilkan hanya sebagian isi berita
      $isi_berita = htmlentities(strip_tags($r[isi_berita])); // membuat paragraf pada isi berita dan mengabaikan tag html
      $isi = substr($isi_berita,0,220); // ambil sebanyak 150 karakter
      $isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat

      echo "$isi ... <a href=berita-$r[id_berita]-$r[judul_seo].html>Selengkapnya</a> (<b>$r[jml] komentar</b>)
            </td></tr></table>
            <hr color=#CCC noshade=noshade />";
	 }
	
  $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM berita"));
  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
  $linkHalaman = $p->navHalaman($_GET[halberita], $jmlhalaman);

  echo "Hal: $linkHalaman <br /><br />";
  echo "</div>
    </div>";            
}

// Modul semua agenda
elseif ($_GET['module']=='semuaagenda'){
  echo "<div id='content'>          
          <div id='content-detail'>";
  echo "<span class=judul_head>&#187; <b>Agenda</b></span><br /><br />"; 
  $p      = new Paging4;
  $batas  = 6;
  $posisi = $p->cariPosisi($batas); 
  // Tampilkan semua agenda
 	$sql = mysql_query("SELECT * FROM agenda  
                      ORDER BY id_agenda DESC LIMIT $posisi,$batas");		 
  while($d=mysql_fetch_array($sql)){
    $tgl_posting = tgl_indo($d[tgl_posting]);
    $tgl_mulai   = tgl_indo($d[tgl_mulai]);
    $tgl_selesai = tgl_indo($d[tgl_selesai]);
    $isi_agenda  = nl2br($d[isi_agenda]);
	
    echo "<table>";
		echo "<tr><td colspan=2><span class=tanggal>$tgl_posting</span></td></tr>";
    echo "<tr><td colspan=2><span class=judul>$d[tema]</span></td></tr>";
	  echo "<tr><td valign=top><b>Topik</b>  </td><td> : $isi_agenda </td></tr>";
 	  echo "<tr><td><b>Tanggal</b> </td><td> : $tgl_mulai s/d $tgl_selesai </td></tr>";
 	  echo "<tr><td><b>Pukul</b> </td><td> : $d[jam] </td></tr>";
 	  echo "<tr><td><b>Tempat</b> </td><td> : $d[tempat] </td></tr>";
 	  echo "<tr><td><b>Pengirim</b> </td><td> : $d[pengirim] 
          </td></tr></table><hr color=#CCC noshade=noshade />";
	 }
	
  $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM agenda"));
  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
  $linkHalaman = $p->navHalaman($_GET[halagenda], $jmlhalaman);

  echo "Hal: $linkHalaman <br /><br />";
  echo "</div>
    </div>";            
}

// Modul semua download
elseif ($_GET['module']=='semuadownload'){
  echo "<div id='content'>          
          <div id='content-detail'>";
  echo "<span class=judul_head>&#187; <b>Bank Data</b></span><br /><br />"; 
  $p      = new Paging5;
  $batas  = 20;
  $posisi = $p->cariPosisi($batas);
  // Tampilkan semua download
 	$sql = mysql_query("SELECT * FROM download  
                      ORDER BY id_download DESC LIMIT $posisi,$batas");		 

  echo "<ul>";   
   while($d=mysql_fetch_array($sql)){
      echo "<li><a href='downlot.php?file=$d[nama_file]'>$d[judul]</a> ($d[hits])</li>";
	 }
  echo "</ul><hr color=#CCC noshade=noshade />";
	
  $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM download"));
  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
  $linkHalaman = $p->navHalaman($_GET[haldownload], $jmlhalaman);

  echo "Hal: $linkHalaman <br /><br />";
  echo "</div>
    </div>";            
}

// Modul semua album
elseif ($_GET['module']=='semuaalbum'){
  echo "<div id='content'>          
          <div id='content-detail'>";
  echo "<span class=judul_head>&#187; <b>Album Galeri Foto</b></span><br />"; 
  // Tentukan kolom
  $col = 5;

  $a = mysql_query("SELECT jdl_album, album.id_album, gbr_album, album_seo,  
                  COUNT(gallery.id_gallery) as jumlah 
                  FROM album LEFT JOIN gallery 
                  ON album.id_album=gallery.id_album 
                  WHERE album.aktif='Y'  
                  GROUP BY jdl_album");
  echo "<table><tr>";
  $cnt = 0;
  while ($w = mysql_fetch_array($a)) {
    if ($cnt >= $col) {
      echo "</tr><tr>";
      $cnt = 0;
  }
  $cnt++;

 echo "<td align=center valign=top><br />
    <a href=album-$w[id_album]-$w[album_seo].html>
    <img class='img2' src='img_album/kecil_$w[gbr_album]' border=0 width=120 height=90><br />
    $w[jdl_album]</a><br />($w[jumlah] Foto)<br /></td>";
}
echo "</tr></table>";
  echo "</div>
    </div>";            
}
// Modul galeri foto berdasarkan album
elseif ($_GET['module']=='detailalbum'){
  echo "<div id='content'>          
          <div id='content-detail'>";
  // Dapatkan judul album
  $j = mysql_fetch_array(mysql_query("SELECT jdl_album FROM album WHERE id_album='$_GET[id]'"));
  echo "<span class=judul_head>&#187; <a href=semua-album.html><b>Album Galeri Foto</b></a> &#187; <b>$j[jdl_album]</b></span><br />"; 
  $p      = new Paging6;
  $batas  = 10;
  $posisi = $p->cariPosisi($batas);

  // Tentukan kolom
  $col = 6;

  $g = mysql_query("SELECT * FROM gallery WHERE id_album='$_GET[id]' ORDER BY id_gallery DESC LIMIT $posisi,$batas");
  $ada = mysql_num_rows($g);
  
  if ($ada > 0) {
  echo "<table><tr>";
  $cnt = 0;
  while ($w = mysql_fetch_array($g)) {
    if ($cnt >= $col) {
      echo "</tr><tr>";
      $cnt = 0;
    }
    $cnt++;

    echo "<td align=center valign=top><br />
          <a id='galeri' href='img_galeri/$w[gbr_gallery]' title='$w[keterangan]'>
          <img alt='galeri' src='img_galeri/kecil_$w[gbr_gallery]' /></a><br />
          <a href=#><b>$w[jdl_gallery]</b></a></td>";
  }
  echo "</tr></table><br />";

  $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM gallery WHERE id_album='$_GET[id]'"));
  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
  $linkHalaman = $p->navHalaman($_GET[halgaleri], $jmlhalaman);

  echo "Hal: $linkHalaman <br /><br />";
  }else{
    echo "<p>Belum ada foto.</p>";
  }
  echo "</div>
    </div>";            
}

// Album Potret Banyumas
elseif ($_GET['module']=='semuaalbumpotretbanyumas'){
  echo "<div id='content'>          
          <div id='content-detail'>";
  echo "<span class=judul_head>&#187; <b>Album Potret Banyumas</b></span><br />"; 
  // Tentukan kolom
  $col = 6;

  $a = mysql_query("SELECT jdl_album, album_potretbanyumas.id_album, gbr_album, album_seo,  
                  COUNT(gallery_potretbanyumas.id_gallery) as jumlah 
                  FROM album_potretbanyumas LEFT JOIN gallery_potretbanyumas 
                  ON album_potretbanyumas.id_album=gallery_potretbanyumas.id_album 
                  WHERE album_potretbanyumas.aktif='Y'  
                  GROUP BY jdl_album");
  echo "<table><tr>";
  $cnt = 0;
  while ($pb = mysql_fetch_array($a)) {
    if ($cnt >= $col) {
      echo "</tr><tr>";
      $cnt = 0;
  }
  $cnt++;
 echo "<td align=center valign=top><br />
    <a href=albumpotretbanyumas-$pb[id_album]-$pb[album_seo].html>
    <img class='img2' src='img_potretbanyumas/kecil_$pb[gbr_album]' border=0 width=120 height=90><br />
    $pb[jdl_album]</a><br />($pb[jumlah] Foto)<br /></td>";
}
echo "</tr></table>";
  echo "</div>
    </div>";            
}
// Modul galeri foto berdasarkan album potret banyumas
elseif ($_GET['module']=='detailalbumpotretbanyumas'){
  echo "<div id='content'>          
          <div id='content-detail'>";
  // Dapatkan judul album
  $j = mysql_fetch_array(mysql_query("SELECT jdl_album FROM album_potretbanyumas WHERE id_album='$_GET[id]'"));
  echo "<span class=judul_head>&#187; <a href=semua-album-potretbanyumas.html><b>Album Potret Banyumas</b></a> &#187; <b>$j[jdl_album]</b></span><br />"; 
  $p      = new Paging6;
  $batas  = 10;
  $posisi = $p->cariPosisi($batas);

  // Tentukan kolom
  $col = 6;

  $g = mysql_query("SELECT * FROM gallery_potretbanyumas WHERE id_album='$_GET[id]' ORDER BY id_gallery DESC LIMIT $posisi,$batas");
  $ada = mysql_num_rows($g);
  
  if ($ada > 0) {
  echo "<table><tr>";
  $cnt = 0;
  while ($pb = mysql_fetch_array($g)) {
    if ($cnt >= $col) {
      echo "</tr><tr>";
      $cnt = 0;
    }
    $cnt++;

    echo "<td align=center valign=top><br />
          <a id='gal' href='potret_banyumas/$pb[gbr_gallery]' title='$pb[keterangan]'>
          <img alt='gal' src='potret_banyumas/kecil_$pb[gbr_gallery]' /></a><br />
          <a href=#><b>$pb[jdl_gallery]</b></a></td>";
  }
  echo "</tr></table><br />";

  $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM gallery_potretbanyumas WHERE id_album='$_GET[id]'"));
  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
  $linkHalaman = $p->navHalaman($_GET[halgaleri], $jmlhalaman);
  echo "Hal: $linkHalaman <br /><br />";
  }else{
    echo "<p>Belum ada foto.</p>";
  }
  echo "</div>
    </div>";            
}
//---End Semua Potret & Gallery Banyumas----
// Modul hubungi kami
elseif ($_GET['module']=='hubungikami'){
  echo "<div id='content'>          
          <div id='content-detail'>";
  echo "<span class=judul_head>&#187; <b>Hubungi Kami</b></span><br /><br />"; 
  echo "<b>Hubungi kami secara online dengan mengisi form dibawah ini:</b>
        <table width=100% style='border: 1pt dashed #0000CC;padding: 10px;'>
        <form action=hubungi-aksi.html method=POST>
        <tr><td>Nama</td><td> : <input type=text name=nama size=40></td></tr>
        <tr><td>Email</td><td> : <input type=text name=email size=40></td></tr>
        <tr><td>Subjek</td><td> : <input type=text name=subjek size=55></td></tr>
        <tr><td valign=top>Pesan</td><td> <textarea name=pesan  style='width: 315px; height: 100px;'></textarea></td></tr>
        <tr><td>&nbsp;</td><td><img src='captcha.php'></td></tr>
        <tr><td>&nbsp;</td><td>(Masukkan 6 kode diatas)<br /><input type=text name=kode size=6 maxlength=6><br /></td></tr>
        </td><td colspan=2><input type=submit name=submit value=Kirim></td></tr>
        </form></table><br />";
  echo "</div>
    </div>";            
}

// Modul hubungi aksi
elseif ($_GET['module']=='hubungiaksi'){
  echo "<div id='content'>          
          <div id='content-detail'>";
$nama=trim($_POST[nama]);
$email=trim($_POST[email]);
$subjek=trim($_POST[subjek]);
$pesan=trim($_POST[pesan]);

if (empty($nama)){
  echo "Anda belum mengisikan NAMA<br />
  	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
}
elseif (empty($email)){
  echo "Anda belum mengisikan EMAIL<br />
  	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
}
elseif (empty($subjek)){
  echo "Anda belum mengisikan SUBJEK<br />
  	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
}
elseif (empty($pesan)){
  echo "Anda belum mengisikan PESAN<br />
  	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
}
else{
	if(!empty($_POST['kode'])){
		if($_POST['kode']==$_SESSION['captcha_session']){

  mysql_query("INSERT INTO hubungi(nama,
                                   email,
                                   subjek,
                                   pesan,
                                   tanggal) 
                        VALUES('$_POST[nama]',
                               '$_POST[email]',
                               '$_POST[subjek]',
                               '$_POST[pesan]',
                               '$tgl_sekarang')");
  echo "<span class=posting>&#187; <b>Hubungi Kami</b></span><br /><br />"; 
  echo "<p align=center><b>Terimakasih telah menghubungi kami. <br /> Kami akan segera meresponnya.</b></p>";
		}else{
			echo "Kode yang Anda masukkan tidak cocok<br />
			      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
		}
	}else{
		echo "Anda belum memasukkan kode<br />
  	      <a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
	}
}
  echo "</div>
    </div>";            
}
?>      
