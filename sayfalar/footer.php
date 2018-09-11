<footer id="footer">
		<div class="container">
			<div class="row">
			<link href="../js/player.css" type="text/css" rel="stylesheet">
	<script src="../js/player.js"></script>
	<script>
    $.kast({
		protocol: "<?=$sitebilgi['protokol']?>",
		host: "<?=$sitebilgi['radyourl']?>",
		<?php if(!empty($sitebilgi['port'])) { ?>port: "<?=$sitebilgi['port']?>",<?php } ?>
		theme: "<?=$sitebilgi['tema']?>",
		ui: "black",
		colors: "primary",
		autoUpdate: "true",
		eventName: "callback",
		startTemplate: "<?=$sitebilgi['boy']?>",
		position: "<?=$sitebilgi['konum']?>",
		autoPlay: <?=$sitebilgi['otoplay']?>,
		version: <?=$sitebilgi['versiyon']?>
		
	   
    })
</script>
				<div class="col-sm-6 col-sm-push-6 footer-social-icons">
					<span>Takip edin:</span>
					<?php if(!empty($sitebilgi['facebook'])) { ?><a href=""><a href="https://www.facebook.com/<?=$sitebilgi['facebook'] ?>"><i class="fa fa-facebook"></i></a><?php } ?>
					<?php if(!empty($sitebilgi['twitter'])) { ?><a href=""><a href="https://twitter.com/<?=$sitebilgi['twitter'] ?>"><i class="fa fa-twitter"></i></a><?php } ?>
					<?php if(!empty($sitebilgi['googleplus'])) { ?><a href=""><a href="https://plus.google.com/+<?=$sitebilgi['googleplus'] ?>"><i class="fa fa-google-plus"></i></a><?php } ?>
					<?php if(!empty($sitebilgi['instagram'])) { ?><a href=""><a href="https://www.instagram.com/<?=$sitebilgi['instagram'] ?>"><i class="fa fa-instagram"></i></a><?php } ?>
				</div>
				<!-- /SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-pull-6 copyright">
					<p>&copy; <?php echo date('Y'); ?> <a href="/ana-sayfa"><?=$sitebilgi['title']; ?></a>. Tüm hakkı saklıdır.</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- /FOOTER -->

	<!-- JS -->
	<script type="text/javascript" src="/js/jquery.min.js"></script><!-- jQuery -->
	<script type="text/javascript" src="/js/bootstrap.min.js"></script><!-- Bootstrap -->
	<script type="text/javascript" src="/js/jquery.parallax.js"></script><!-- Parallax -->
	<script type="text/javascript" src="/js/smoothscroll.js"></script><!-- Smooth Scroll -->
	<script type="text/javascript" src="/js/masonry.pkgd.min.js"></script><!-- masonry -->
	<script type="text/javascript" src="/js/jquery.fitvids.js"></script><!-- fitvids -->
	<script type="text/javascript" src="/js/owl.carousel.min.js"></script><!-- Owl-Carousel -->
	<script type="text/javascript" src="/js/jquery.counterup.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="/js/waypoints.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="/js/jquery.isotope.min.js"></script><!-- isotope -->
	<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script><!-- magnific-popup -->
	<script type="text/javascript" src="/js/scripts.js"></script><!-- Scripts -->

	<!-- Scroll-up -->
	<div class="scroll-up">
		<ul><li><a href="#header"><i class="fa fa-angle-up"></i></a></li></ul>
	</div>

	
	
