<?php
require_once "../dj-kabini/BasicDB.php";
require_once "../dj-kabini/baglan.php";
require_once "../dj-kabini/fonksiyon.php";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title><?=$kategoriara ?> kategorisindeki haberler | <?=$sitebilgi['title'];?></title>
<?php include "../sayfalar/header.php"; ?>
	<!-- PAGE HEADER -->
	<section id="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?=$kategoriara ?> kategorisindeki haberler</h1>
						<span class="st-border"></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /PAGE HEADER -->
	<!-- BLOG -->
	<section id="blog">
		<div class="container">
			<div class="row">
				 <div class="col-md-9">			
			<?php if($sorgukategori->rowCount() != "0"){ // Aranan kelimeye göre veri varsa
	foreach($kategoricek as $row){  ?>
		<div class="col-md-6">
					<div class="single-blog">
						<article>
	<div class="post-thumb"><div class="hovergallery"><a href="/<?php echo $row['id']; ?>/<?php echo seo($row['baslik']); ?>.html"><img class="img-responsive" src="<?php echo $row['gorsel']; ?>" alt="<?php echo $row['baslik']; ?>"></a></div></div>
	<h4 class="post-title"><a href="<?php echo $row['id']; ?>/<?php echo seo($row['baslik']); ?>.html"><?php echo $row['baslik']; ?></a></h4>
							<div class="post-meta text-uppercase">
								<span><?php echo $row['tarih']; ?></span>
								<span><a href="/kategori/<?php echo seo($row['kategori']); ?>"><?php echo $row['kategori']; ?></a></span>
								<span>Yazar <a href="/yazar/<?php echo seo($row['yazar']); ?>"><?php echo $row['yazar']; ?></a></span>
							</div>
							<div class="post-article">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae eum minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae
							</div>
							<a href="/<?php echo $row['id']; ?>/<?php echo seo($row['baslik']); ?>.html" class="btn btn-readmore">Devamını oku</a>
						</article>
					</div>
					</div>
			<?php } } ?>
				
				</div>
				
				<?php include "../sayfalar/sidebar.php"; ?>
				</div>
				<div class="col-md-9">
				<ul class="pagination">
						<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul></div>
				</div>
			</div>
		</div>
	</section>
	<!-- /BLOG -->

<?php include "../sayfalar/footer.php"; ?>
</body>
</html>