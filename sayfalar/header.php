<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Main CSS file -->
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/css/owl.carousel.css" />
	<link rel="stylesheet" href="/css/magnific-popup.css" />
	<link rel="stylesheet" href="/css/font-awesome.css" />
	<link rel="stylesheet" href="/css/style.css" />
	<link rel="stylesheet" href="/css/responsive.css" />
	</head>
	
	
	
<?php require_once "../dj-kabini/fonksiyon.php"; ?>
<body>
<style type="text/css">
.hovergallery img
  {
         -webkit-transform:scale(1.0);
         -moz-transform:scale(0.8);
         -o-transform:scale(0.8);
         -webkit-transition-duration: 1.2s;
         -moz-transition-duration: 0.5s;
         -o-transition-duration: 0.5s;
          opacity: 0.7;
          margin: 0 10px 5px 0;
   }

    .hovergallery img:hover
    {
          -webkit-transform:scale(1.1);
          -moz-transform:scale(1.1);
          -o-transform:scale(1.1);
           box-shadow:0px 0px 30px gray;
          -webkit-box-shadow:0px 0px 30px gray;
          -moz-box-shadow:0px 0px 30px gray;
           opacity: 1;
    }
	
	</style>
	<header id="header">
		<nav class="navbar st-navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
					</button>
					<style type="text/css">
					.logodiv {
						margin-top: -6px;
					}
					</style>
					<div class="logodiv"><a class="logo" href="ana-sayfa"><img src="/upload/logo/<?php echo $sitebilgi['logo']; ?>" alt="<?php echo $sitebilgi['title'];?>" height="6%"></a></div>
				</div>

				<div class="collapse navbar-collapse" id="st-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
				    	<li><a href="/#header">Ana Sayfa</a></li>
				    	<li><a href="/#yayinakisi">Yayın Akışı</a></li>
				    	<li><a href="/#sonhaberler">Son Haberler</a></li>
				    	<li><a href="/#our-team">Kadro</a></li>
				    	<li><a href="/#contact">İletişim</a></li>
						<li><a data-toggle="modal" data-target="#istekparca">İstek Yap</a></li>
				    	<li><a href="/haberler">Haberler</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
	</header>
	<!-- /HEADER -->
	<div class="modal fade" id="istekparca" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">İstek Parça</h4>
        </div>
        <div class="modal-body">
          <p><form action="" class="contact-form" name="contact-form" method="post">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="isim" required="required" placeholder="İsim*">
							</div>
							<div class="col-sm-6">
								<input type="email" name="email" required="required" placeholder="E-posta*">
							</div>
							<div class="col-sm-12">
								<input type="text" name="istek" placeholder="İstek Parça">
							</div>
							<div class="col-sm-12">
								<textarea name="yorum" required="required" cols="30" rows="7" placeholder="Mesajınız*"></textarea>
							</div>
							<div class="col-sm-12">
								<input type="submit" name="iletisimkur" value="Mesaj Gönder" class="btn btn-send">
								<input type="hidden" name="tarih" value="<?php echo date('d.m.Y H:i:s'); ?>" />
								<input type="hidden" name="durum" value="istek" />
								
							</div>
						</div>
					</form></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
        </div>
		</div>
		</div>
		</div>