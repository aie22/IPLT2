<?php echo"<div><h2><img src='$f[folder]/images/agenda.png' /></h2></div>"; ?>
                  <ul id="listsidebar">
                  <?php
                  include "config/koneksi.php";
                  include "config/tanggalan.php";
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