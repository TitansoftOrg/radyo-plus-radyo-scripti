<?php
require_once "BasicDB.php";
require_once "baglan.php";
session_Start();
if($_SESSION["giris"] == false){
	header("Location: login.php");
    die("Burada olmaman gerekirdi!");
}
include "sayfalar/header.php";
require_once "fonksiyon.php";
include "sayfalar/menu.php";
?>	
<title>Reklam Ayarları | <?php echo $sitebilgi['title']; ?></title>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Reklam Ayarları
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-usd"></i> Reklam Ayarları
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<?php
if($bilgiler["yetki"] != 1){
    die("Buraya erişme yetkin yok!");
}
?>
	 <form action="" method="post">
	 <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
	 
                                    <div class="row">
									<div class="col-md-2"></div>
                                        <div class="col-md-8">
                                        <div class="col-md-6">
                                           <div class="form-group">
					<label>Ana Sayfa 1</label>
						<textarea type="text" name="anasayfaust" class="ckeditor form-control" rows="8"><?php echo $reklambilgi['anasayfaust'] ?></textarea>	
						</div>
                                        </div>
										<div class="col-md-6">
                                           <div class="form-group">
					<label>Ana Sayfa 2</label>
						<textarea type="text" name="anasayfaalt" class="ckeditor form-control" rows="8"><?php echo $reklambilgi['anasayfaalt'] ?></textarea>
						</div>
                                        </div>
											<div class="col-md-6">
                                           <div class="form-group">
					<label>Haber Listesi</label>
						<textarea type="text" name="haberlistesi" class="ckeditor form-control" rows="8"><?php echo $reklambilgi['haberlistesi'] ?></textarea>			
						</div>
                                        </div>
										<div class="col-md-6">
                                           <div class="form-group">
					<label>Haber İçi</label>
						<textarea type="text" name="haberici" class="ckeditor form-control" rows="8"><?php echo $reklambilgi['haberici'] ?></textarea>			
						</div>
                                        </div>
										 
										 <div class="col-md-12">
                                            <div class="form-group">
											<label><font color="#FFF">Kaydet</font></label>
                                                <button type="submit" name="reklamayar" class="btn btn-primary btn-block">Güncelle</button>
                                            </div>
                                        </div>
</div>
												</div>
</form>
											</div>
										</div>
									</body>
									</html>