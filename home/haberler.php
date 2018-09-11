<?php
require_once "../dj-kabini/BasicDB.php";
require_once "../dj-kabini/baglan.php";
include "../sayfalar/header.php";
require_once "../dj-kabini/fonksiyon.php";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Haberler | <?=$sitebilgi['title'];?></title>
	<section id="page-header"></section>
	<section id="blog">
		<div class="container">
			<div class="row">
				 <div class="col-md-9">
				 <?php if(!empty($reklambilgi['haberlistesi'])) { ?><div class="col-md-12">
					<?php echo $reklambilgi['haberlistesi']; ?></div><?php } ?>
					<?php
					foreach ($sorguhaber as $row) {?>
					<div class="col-md-6">
					<div class="single-blog">
						<article>
							<div class="post-thumb"><div class="hovergallery"><a href="<?php echo $row['id']; ?>/<?php echo seo($row['baslik']); ?>.html"><img class="img-responsive" src="upload/haber/thumb/<?php echo $row['gorsel']; ?>" alt="<?php echo $row['baslik']; ?>"></a></div></div>
							<h4 class="post-title"><a href="<?php echo $row['id']; ?>/<?php echo seo($row['baslik']); ?>.html"><?php echo $row['baslik']; ?></a></h4>
							<div class="post-meta text-uppercase">
								<span><?php echo $row['tarih']; ?></span>
								<span><a href="/kategori/<?php echo seo($row['kategori']); ?>"><?php echo $row['kategori']; ?></a></span>
								<span>Yazar <a href="/yazar/<?php echo seo($row['yazar']); ?>"><?php echo $row['yazar']; ?></a></span>
							</div>
							<div class="post-article">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae eum minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae
							</div>
							<a href="<?php echo $row['id']; ?>/<?php echo seo($row['baslik']); ?>.html" class="btn btn-readmore">Devamını oku</a>
						</article>
					</div>
					</div>
<?php }?>
					
					
					
					
					<div class="col-md-9">
				<ul class="pagination">
						<?php $a = ceil($satir_sayisi/$sayfa_limiti);
echo '<ul class="pagination">';
for($b = 1 ; $b <= $a ; $b++){
echo '<li><a href="haberler?sayfa='. $b . ' ">' . $b . '</a></li>';
}echo '</ul>';	
				?>
					</ul></div>
				</div>
				
				<?php include "../sayfalar/sidebar.php"; ?>
				</div>
				
				</div>
			</div>
		</div>
	</section>
<?php include "../sayfalar/footer.php"; ?>
</body>
</html>