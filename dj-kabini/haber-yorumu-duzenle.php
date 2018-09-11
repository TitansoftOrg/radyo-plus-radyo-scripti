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
?><title>Haber Yorumu Düzenle | <?php echo $sitebilgi['title']; ?></title>
<link href="css/bootstrap2-toggle.min.css" rel="stylesheet">
<script src="js/bootstrap2-toggle.min.js"></script>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
				
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Haber Yorumu Düzenle
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
							<li><i class="fa fa-comment"></i> <a href="haber-yorumlari.php">Haber Yorumları</a></li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Haber Yorumu Düzenle
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<?php
if($bilgiler["yetki"] == 0){
    die("Buraya erişme yetkin yok!");
}
?>



 <form action="" method="POST">
	<input type="hidden" name="idsi" value="<?php echo $_POST['idsi'] ?>">
	<div class="row">
		<div class="col-md-2"></div>
					<div class="col-md-8">
					<div class="col-md-5">
					<div class="form-group">
					<label>İsim</label>
					<input type="text" class="form-control" value="<?php echo $_POST['isim']; ?>" name="isim">
		</div>
	</div>
		<div class="col-md-5">
					<div class="form-group">
					<label>E-mail</label>
					<input type="text" class="form-control" value="<?php echo $_POST['email']; ?>" name="email">
		</div>
	</div>
	<?php
	if ($_POST['onay']=="1") {
		$durum = "checked";
	}else if($_POST['onay']=="0"){
		$durum = "";
	}
	?>
	<div class="col-md-2">
					<div class="form-group">
					<label>Onaylı mı?</label><br />
					<input type="checkbox" data-toggle="toggle" data-height="34px" data-width="88px" data-on="Evet" data-off="Hayır" name="onay" <?php echo $durum; ?>></input>
		</div>
	</div>
	<div class="col-md-12">
					<div class="form-group">
					<label>Yorum</label>
					<textarea type="text" class="form-control" rows="8" name="yorum"><?php echo $_POST['yorum']; ?></textarea>
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
		<label><font color="#FFF">Kaydet</font></label>
			<button type="submit" name="habyorduzenle" class="btn btn-primary btn-block">Kaydet</button>
		</div>
		</div>
	</div>
	</div>  
	</form>
</div>
									
		</div>

	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>