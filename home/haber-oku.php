<?php
require_once "../dj-kabini/BasicDB.php";
require_once "../dj-kabini/baglan.php";
require_once "../dj-kabini/fonksiyon.php";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<?php include "../sayfalar/header.php"; ?>
<title><?=$haberoku['baslik'];?> | <?=$sitebilgi['title'];?></title>
	
	<!-- PAGE HEADER -->
	<section id="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?=$haberoku["baslik"];?></h1>
						<span class="st-border"></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="single-blog">
						<article>
							<div class="post-thumb"><img class="img-responsive" src="/upload/haber/<?=$haberoku['gorsel']?>" alt="<?=$haberoku['baslik']?>"></div>
							<h4 class="post-title"><?=$haberoku['baslik']?></h4>
							<div class="post-meta text-uppercase">
								<span><?=$haberoku['tarih']?></span>
								<span><a href="/kategori/<?php echo seo($haberoku['kategori'])?>"><?=$haberoku['kategori']?></a></span>
								<span>Yazar : <a href="/yazar/<?php echo seo($haberoku['yazar'])?>"><?=$haberoku['yazar']?></a></span>
							</div>
							<div class="post-article">
					<?=$haberoku['icerik']?>
							</div>
						</article>
					</div>
					<?php if(!empty($reklambilgi['haberici'])) { ?>
					<?php echo $reklambilgi['haberici']; ?><?php } ?>
					<div class="sidebar-widget">
					<div class="tagcloud">
					<?php if(!empty($haberoku['etiketler'])) {
					$etiketler = $haberoku['etiketler'];
					$etiketler = explode(', ', $etiketler);
					foreach($etiketler as $anahtar => $deger ){ echo '<a href="/etiket/'.seo($deger).'">#'.$deger.'</a>'; } } ?></div></div>
					<hr>		
			<div class="container">
			<div class="row">
			<div class="col-sm-9">
			<h3>Yorumlar </h3>
			</div>
			</div>
			<?php
			if ($haberyorum){
			  foreach ($haberyorum as $row){
			?>
					<div class="col-sm-12">
					<div class="col-sm-1">
					<div class="thumbnail">
					<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
					</div>
					</div>
					<div class="col-sm-8">
					<div class="panel panel-default">
					<div class="panel-heading">
					<strong><?php echo $row['isim']; ?></strong> <span class="text-muted"><?php echo $row['tarih']; ?></span>
					</div>
					<div class="panel-body">
					<?php echo $row['yorum']; ?>
					</div>
					</div>
					</div>
					</div>
					<?php }}?>



				<div class="container">
					<div class="row">
					<div class="col-md-12">
					<div class="section-title">
						<h1>Yorum Bırak</h1>
						<span class="st-border"></span>
					</div>
				</div>
				<div class="col-sm-7 col-sm-offset-1"">
					<form action="" class="contact-form" name="contact-form" method="post">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="isim" required="required" placeholder="İsim*">
							</div>
							<div class="col-sm-6">
								<input type="email" name="email" required="required" placeholder="E-posta*">
							</div>
							<div class="col-sm-12">
								<textarea name="yorum" required="required" cols="30" rows="7" placeholder="Mesajınız*"></textarea>
							</div>
							<div class="col-sm-12">
								<input type="submit" name="yorumat" value="Yorum Gönder" class="btn btn-send">
								<input type="hidden" name="tarihi" value="<?php echo date('d.m.Y H:i:s'); ?>" />
								<input type="hidden" name="haber" value="<?php echo $haber_id ?>" />
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

				</div>
				</div>
				<?php include "../sayfalar/sidebar.php"; ?>
			</div>
		</div>
		
		
	</section>

	<?php include "../sayfalar/footer.php"; ?>

</body>
</html>