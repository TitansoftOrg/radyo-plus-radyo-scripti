  <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Ana Sayfa</a>
                    </li>
					 <li>
                        <a href="istek-paneli.php"><i class="fa fa-fw fa-list"></i> İstek Paneli</a>
                    </li><?php if($bilgiler["yetki"] == 1){ echo '<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#siteayarlari" class="collapsed" aria-expanded="false"><i class="fa fa-fw fa-gear"></i> Site Ayarları <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="siteayarlari" class="collapse" aria-expanded="false" style="height: 0px;">
                            <li>
							<a href="site-ayarlari.php"><i class="fa fa-fw fa-gear"></i> Site Ayarları</a></li>
							<li><a href="reklam-ayarlari.php"><i class="fa fa-fw fa-usd"></i> Reklam Ayarları</a></li>
							<li><a href="sidebar.php"><i class="glyphicon glyphicon-menu-hamburger"></i> Sağ Menü Ayarları</a></li></ul>'; } ?>
					
					 <li>
                        <a href="iletisim-kutusu.php"><i class="fa fa-fw fa-paper-plane"></i> İletişim Kutusu</a>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#yayin" class="collapsed" aria-expanded="false"><i class="fa fa-fw fa-headphones"></i> Yayın Akışı <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="yayin" class="collapse" aria-expanded="false" style="height: 0px;">
                            <li>
                                <a href="yayin-akisi.php"><i class="fa fa-headphones"></i> Yayın Akışı</a>
                            </li>
                            <?php if($bilgiler["yetki"] == 1){ echo '<li><a href="yayin-ekle.php"><i class="fa fa-plus-square"></i> Yayın Ekle</a>
                            </li>  '; } ?>
 <li>
                                <a href="programlar.php"><i class="fa fa-calendar"></i> Programlar</a>
                            </li>
							<?php if($bilgiler["yetki"] == 1){ echo '
                            <li>
                                <a href="program-ekle.php"><i class="fa fa-plus-square"></i> Program Ekle</a>
                            </li>  '; } ?>   							
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#haber" class="collapsed" aria-expanded="false"><i class="fa fa-fw fa-folder-open"></i> Haberler <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="haber" class="collapse" aria-expanded="false" style="height: 0px;">
                            <li>
                                <a href="haberler.php"><i class="fa fa-folder-open"></i> Haberler</a>
                            </li>
                           <?php if($bilgiler["yetki"] != 0){ echo ' <li>
                                <a href="haber-ekle.php"><i class="fa fa-plus-square"></i> Haber Ekle</a>
						   </li>   '; } ?>
<li>
                                <a href="kategoriler.php"><i class="fa fa-list"></i> Kategoriler</a>
                            </li> 
						 <?php if($bilgiler["yetki"] != 0){ echo ' <li>
                                <a href="kategori-ekle.php"><i class="fa fa-plus-square"></i> Kategori Ekle</a>
						 </li> 					'; } ?>	
				<li><a href="haber-yorumlari.php"><i class="fa fa-comment"></i> Haber Yorumları</a>	</li>					 
                        </ul>
                    </li>
					 <li>
                        <a href="dj-listesi.php"><i class="fa fa-fw fa-users"></i> DJ Listesi</a>
                    </li>
					<li><?php if($bilgiler["yetki"] == 1){ echo '
                        <a href="dj-ekle.php"><i class="glyphicon glyphicon-plus-sign"></i> DJ Ekle</a>
                    </li>'; } ?>
					<li>
					<a href="top10.php"><i class="glyphicon glyphicon-tasks"></i> Top 10</a>
                </ul>
            </div>
        </nav>