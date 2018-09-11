<?php
require_once "../dj-kabini/BasicDB.php";
require_once "../dj-kabini/baglan.php";
require_once "../dj-kabini/fonksiyon.php";
?>
<!DOCTYPE html>
<html lang="tr">
<?php include "../sayfalar/header.php"; ?>
<title>Ana Sayfa | <?=$sitebilgi['title'];?></title>
	<section id="slider">
		<div id="home-carousel" class="carousel slide" data-ride="carousel">			
			<div class="carousel-inner">
			<?php
if ($slider){
  foreach ($slider as $row) { ?>
			<div class="item active" style="background-image: url(<?php echo '/upload/haber/anasayfa/'.$row["gorsel"].''; ?>)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-sm-7">
								<h1><?php echo $row['kategori'] ?></h1>
								<h2><a href="<?php echo $row['id']; ?>/<?php echo seo($row['baslik']); ?>.html" target="_blank"><font color="#fff"><?php echo $row['baslik'] ?></font></a></h2>
							</div>
						</div>
					</div>					
				</div>
				<?php	}}?>
			<?php
if ($slayt){
 
 foreach ($slayt as $row) {
    ?>
				<div class="item" style="background-image: url(<?php echo '/upload/haber/anasayfa/'.$row["gorsel"].''; ?>)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-sm-7">
								<h1><?php echo $row['kategori'] ?></h1>
								<h2><a href="<?php echo $row['id']; ?>/<?php echo seo($row['baslik']); ?>.html" target="_blank"><font color="#fff"><?php echo $row['baslik'] ?></font></a></h2>
							</div>
						</div>
					</div>					
				</div>
				<?php 
				
  }
}
?>
				<a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
			</div>		
		</div> <!--/#home-carousel--> 
    </section>
	<!-- /SLIDER -->

	<!-- ABOUT US -->
	
	<section id="about-us">
		<div class="container-fluid">
		
			<div class="row">
			
				<div class="col-sm-5">
					<h2>Top 10</h2>
					
          <table class="table">
		  
            <thead>
              <tr>
                <th width="1%">#</th>
                <th>Sanatçı</th>
                <th>Şarkı</th>
				<th width="1%"></th>
              </tr>
            </thead>
            <tbody>
              

					<?php
				if ($topliste1){
					foreach ($topliste1 as $row) {
					?>	<tr><td><?php echo $row['sira']; ?></td>
						<td><?php echo $row['sanatci']; ?></td>
						<td><?php echo $row['sarki']; ?></td>
						<td><a class="btn btn-default btn-xs" data-toggle="modal" data-target="#<?php echo $row['sira'] ?>"><i class="fa fa-chevron-right"></i></a></td></tr>
						<div class="modal fade" id="<?php echo $row['sira'] ?>" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">#<?php echo $row['sira'] ?> <?php echo $row['sanatci'] ?> - <?php echo $row['sarki'] ?></h4>
        </div>
        <div class="modal-body">
          <p><iframe width="100%" height="336" src="https://www.youtube.com/embed/<?php echo $row['embed'] ?>" frameborder="0" allowfullscreen></iframe></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
        </div>
		</div>
		</div>
		</div>
				<?php }} ?>
				
				</tbody>
				</table></div>
				
				
		<div class="col-sm-3 our-office">
					<div id="office-carousel" class="carousel slide" data-ride="carousel">			
						<div class="carousel-inner">
							<?php
				if ($topliste3){
					foreach ($topliste3 as $row){
					?>
							<div class="item active">
								<a data-toggle="modal" data-target="#<?php echo $row['sira'] ?>"><img src="upload/top10/thumb/<?php echo $row['album'] ?>" alt="<?php echo $row['sanatci'] ?> - <?php echo $row['sarki'] ?>"></a>
				</div> <?php }} ?>
				<?php
if ($topliste4){
 
  foreach ($topliste4 as $row) {
    ?>
							<div class="item">
								<a data-toggle="modal" data-target="#<?php echo $row['sira'] ?>"><img src="upload/top10/thumb/<?php echo $row['album'] ?>" alt="<?php echo $row['sanatci'] ?> - <?php echo $row['sarki'] ?>"></a>			
							</div>
							
<?php }} ?>
							
							<a class="office-carousel-left" href="#office-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
							<a class="office-carousel-right" href="#office-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						</div>		
					</div> <!--/#office-carousel--> 
				</div>
		
				<div class="col-sm-4">
				
				<table class="table">
            <thead>
              <tr>
                <th width="1%">#</th>
                <th>Sanatçı</th>
                <th>Şarkı</th>
				<th width="1%"></th>
              </tr>
            </thead>
            <tbody>
              

					<?php
				if ($topliste2){
					foreach ($topliste2 as $row) {
					?>	<tr><td><?php echo $row['sira']; ?></td>
						<td><?php echo $row['sanatci']; ?></td>
						<td><?php echo $row['sarki']; ?></td>
						<td><a class="btn btn-default btn-xs" data-toggle="modal" data-target="#<?php echo $row['sira'] ?>"><i class="fa fa-chevron-right"></i></a></td></tr>
						
  <div class="modal fade" id="<?php echo $row['sira'] ?>" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">#<?php echo $row['sira'] ?> <?php echo $row['sanatci'] ?> - <?php echo $row['sarki'] ?></h4>
        </div>
        <div class="modal-body">
          <p><iframe width="100%" height="336" src="https://www.youtube.com/embed/<?php echo $row['embed'] ?>" frameborder="0" allowfullscreen></iframe></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
        </div>
		</div>
				<?php }} ?>
				
				</tbody>
				</table>
				</div>
				
				
			</div>
			<?php if(!empty($reklambilgi['anasayfaust'])) { ?><br /><div class="col-md-1"></div><div class="col-md-10"><?php echo $reklambilgi['anasayfaust']; ?></div><?php } ?>
		</div>
		
	</section>
	<!-- /ABOUT US -->
	
	<!-- SERVICES -->
	
	<section id="yayinakisi">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="yayinakisi-title">
						<h1>Yayın Akışı</h1>
						<span class="st-border"></span>
					</div>
					
					<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#pazartesi">Pazartesi</a></li>
    <li><a data-toggle="tab" href="#sali">Salı</a></li>
    <li><a data-toggle="tab" href="#carsamba">Çarşamba</a></li>
	<li><a data-toggle="tab" href="#persembe">Perşembe</a></li>
	<li><a data-toggle="tab" href="#cuma">Cuma</a></li>
	<li><a data-toggle="tab" href="#cumartesi">Cumartesi</a></li>
	<li><a data-toggle="tab" href="#pazar">Pazar</a></li>
  </ul>
  
  <div class="tab-content clearfix">
        <div class="tab-pane active" id="pazartesi">
          <table class="table">
            <thead>
              <tr>
                <th>Saat</th>
                <th>Programcı</th>
                <th>Program Adı</th>
              </tr>
            </thead>
            <tbody>
              <?php
if ($pazartesi){
  foreach ($pazartesi as $row){
    
			echo '<tr>
          <td>'.$row['baslangic'].' - '.$row['bitis'].'</td>
		  <td>'.$row['yayinci'].'</td>
		  <td>'.$row['program'].'</td>
		  </tr>';
  }
}

?></tbody>
          </table>
        </div>
		
		<div class="tab-pane" id="sali">
          <table class="table">
            <thead>
              <tr>
                <th>Saat</th>
                <th>Programcı</th>
                <th>Program Adı</th>
              </tr>
            </thead>
            <tbody>
              <?php
if ($sali){
  foreach ($sali as $row){
    
			echo '<tr>
          <td>'.$row['baslangic'].' - '.$row['bitis'].'</td>
		  <td>'.$row['yayinci'].'</td>
		  <td>'.$row['program'].'</td>
		  </tr>';
  }
}

?></tbody>
          </table>
        </div>

		<div class="tab-pane" id="carsamba">
          <table class="table">
            <thead>
              <tr>
                <th>Saat</th>
                <th>Programcı</th>
                <th>Program Adı</th>
              </tr>
            </thead>
            <tbody>
              <?php
if ($carsamba){
  foreach ($carsamba as $row){
    
			echo '<tr>
          <td>'.$row['baslangic'].' - '.$row['bitis'].'</td>
		  <td>'.$row['yayinci'].'</td>
		  <td>'.$row['program'].'</td>
		  </tr>';
  }
}

?></tbody>
          </table>
        </div>
		
		<div class="tab-pane" id="persembe">
          <table class="table">
            <thead>
              <tr>
                <th>Saat</th>
                <th>Programcı</th>
                <th>Program Adı</th>
              </tr>
            </thead>
            <tbody>
              <?php
if ($persembe){
  foreach ($persembe as $row){
    
			echo '<tr>
          <td>'.$row['baslangic'].' - '.$row['bitis'].'</td>
		  <td>'.$row['yayinci'].'</td>
		  <td>'.$row['program'].'</td>
		  </tr>';
  }
}

?></tbody>
          </table>
        </div>
		
		<div class="tab-pane" id="cuma">
          <table class="table">
            <thead>
              <tr>
                <th>Saat</th>
                <th>Programcı</th>
                <th>Program Adı</th>
              </tr>
            </thead>
            <tbody>
              <?php
if ($cuma){
  foreach ($cuma as $row){
    
			echo '<tr>
          <td>'.$row['baslangic'].' - '.$row['bitis'].'</td>
		  <td>'.$row['yayinci'].'</td>
		  <td>'.$row['program'].'</td>
		  </tr>';
  }
}

?></tbody>
          </table>
        </div>
		
		<div class="tab-pane" id="cumartesi">
          <table class="table">
            <thead>
              <tr>
                <th>Saat</th>
                <th>Programcı</th>
                <th>Program Adı</th>
              </tr>
            </thead>
            <tbody>
              <?php
if ($cumartesi){
  foreach ($cumartesi as $row){
    
			echo '<tr>
          <td>'.$row['baslangic'].' - '.$row['bitis'].'</td>
		  <td>'.$row['yayinci'].'</td>
		  <td>'.$row['program'].'</td>
		  </tr>';
  }
}

?></tbody>
          </table>
        </div>
		
		<div class="tab-pane" id="pazar">
          <table class="table">
            <thead>
              <tr>
                <th>Saat</th>
                <th>Programcı</th>
                <th>Program Adı</th>
              </tr>
            </thead>
            <tbody>
              <?php
if ($pazar){
  foreach ($pazar as $row){
    
			echo '<tr>
          <td>'.$row['baslangic'].' - '.$row['bitis'].'</td>
		  <td>'.$row['yayinci'].'</td>
		  <td>'.$row['program'].'</td>
		  </tr>';
  }
}

?></tbody>
          </table>
        </div>
		
    </div>
				</div>

	</section>
	<!-- /SERVICES -->


	<!-- OUR WORKS -->
	<section id="sonhaberler">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="yayinakisi-title">
						<h1>Son Haberler</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="portfolio-wrapper" >
					<div class="col-md-12">
						<ul class="filter">  			
							<li><a class="active" href="#" data-filter="*">Tümü</a></li>	
							<?php
							if ($katlistele){
							foreach ($katlistele as $row){ ?>
							<li><a href="#" data-filter=".<?php $veri = ''.$row["kategori"].'';
							echo str_replace(" ", "-", $veri); ?>"><?php echo $row['kategori'] ?></a></li>
							<?php }} ?>
							
						</ul>
						
					</div>
					<div class="portfolio-items">
						<?php
if ($haberhome){
  foreach ($haberhome as $row){
	?>
						<div class="col-md-4 col-sm-6 work-grid  <?php $cekbabos = ''.$row["kategori"].'';
							echo str_replace(" ", "-", $cekbabos); ?> ">
							<div class="portfolio-content">
								<img class="img-responsive" src="<?php echo '/upload/haber/anasayfa/'.$row["gorsel"].''; ?>" alt="<?=$row["baslik"];?>">
								<div class="portfolio-overlay">
									<a href="<?php echo '/upload/haber/anasayfa/'.$row["gorsel"].''; ?>"><i class="fa fa-camera-retro"></i></a>
									<h6><a style="font-size:20px" href="<?php echo $row['id']; ?>/<?php echo seo($row['baslik']); ?>.html" target="_blank"><?php echo $row['baslik'] ?></a></h6>
									<p><a style="font-size:15px" href="yazar/<?php echo seo($row['yazar']); ?>" target="_blank"><?php echo $row['yazar'] ?></a></p>
								</div>
							</div>	
						</div>
<?php }} ?>
						
						
					</div>				
				</div>

			</div>
			<?php if(!empty($reklambilgi['anasayfaalt'])) { ?><br /><div class="col-md-1"></div><div class="col-md-10"><?php echo $reklambilgi['anasayfaalt']; ?></div><?php } ?>
		</div>
		
	</section>
	<!-- /OUR WORKS -->


	<!-- OUR TEAM -->
	<section id="our-team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="yayinakisi-title">
						<h1><?php echo $sitebilgi['title']?> Ekibi</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<?php
				if ($homekadro){
					foreach ($homekadro as $row) {
				?>
				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="<?php echo 'upload/profil-resmi/thumb/'.$row["profilresmi"].''; ?>" alt="">
							<div class="member-social">
								<?php if(!empty($row['facebook'])) { ?><a href="https://www.facebook.com/<?php echo $row['facebook'] ?>"><i class="fa fa-facebook"></i></a> <?php } ?>
								<?php if(!empty($row['twitter'])) { ?><a href="https://www.twitter.com/<?php echo $row['twitter'] ?>"><i class="fa fa-twitter"></i></a> <?php } ?>
								<?php if(!empty($row['googleplus'])) { ?><a href="https://plus.google.com/+<?php echo $row['googleplus'] ?>"><i class="fa fa-google-plus"></i></a> <?php } ?>
								<?php if(!empty($row['skype'])) { ?><a href="skype:<?php echo $row['skype'] ?>?userinfo"><i class="fa fa-skype"></i></a> <?php } ?>
							</div>
						</div>
						<div class="member-info">
							<h4><?php echo $row['ad'] ?> <?php echo $row['soyad'] ?></h4>
							<?php
	if ($row['yetki']=="0") {
		$aktif = "Yayıncı";
	}else if($row['yetki']=="1"){
		$aktif = "Yönetici";
	}else if($row['yetki']=="2"){
		$aktif = "Haber Editörü";
	}
	?>	
							<span><?php echo $aktif; ?></span>
						</div>
					</div>
				</div>
				<?php }} ?>
			</div>
		</div>
	</section>
	<!-- /OUR TEAM -->
	
	<!-- CONTACT -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>İletişim</h1>
						<span class="st-border"></span>
					</div>
				</div>
				<div class="col-sm-4 contact-info">
					<p class="contact-content">Aşağıdaki iletişim bilgileriyle bize kolayca ulaşabilirsiniz.</p>
					<p class="st-address"><i class="fa fa-map-marker"></i> <strong><?=$sitebilgi['adres']?></strong></p>
					<p class="st-phone"><i class="fa fa-mobile"></i> <strong><?=$sitebilgi['telefon']?></strong></p>
					<p class="st-email"><i class="fa fa-envelope-o"></i> <strong><?=$sitebilgi['eposta']?></strong></p>
				
				</div>
				<div class="col-sm-7 col-sm-offset-1">
					<form action="" class="contact-form" name="contact-form" method="post">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="isim" required="required" placeholder="İsim*">
							</div>
							<div class="col-sm-6">
								<input type="email" name="email" required="required" placeholder="E-posta*">
							</div>
							<div class="col-sm-12">
								<input type="text" name="istek" placeholder="Konu">
							</div>
							<div class="col-sm-12">
								<textarea name="yorum" required="required" cols="30" rows="7" placeholder="Mesajınız*"></textarea>
							</div>
							<div class="col-sm-12">
								<input type="submit" name="iletisimkur" value="Mesaj Gönder" class="btn btn-send">
								<input type="hidden" name="tarih" value="<?php echo date('d.m.Y H:i:s'); ?>" />
								<input type="hidden" name="durum" value="iletisim" />
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<?php include "../sayfalar/footer.php"; ?>

</body>
</html>