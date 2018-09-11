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
?><title>Sağ Menü Düzenle | <?php echo $sitebilgi['title']; ?></title>
<link href="css/bootstrap2-toggle.min.css" rel="stylesheet">
<script src="js/bootstrap2-toggle.min.js"></script>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
				
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Sağ Menü Düzenle
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
							<li>
                                <i class="glyphicon glyphicon-menu-hamburger"></i>  <a href="sidebar.php">Sağ Menü Ayarları</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Sağ Menü Düzenle
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


<?php
	if ($sidebarduzen['aktif']=="1") {
		$durumyaz = "Aktif";
	}else if($sidebarduzen['aktif']=="0"){
		$durumyaz = "Pasif";
	}
	?>
 <form action="" method="POST">
	<div class="row">
		<div class="col-md-2"></div>
					<div class="col-md-8">
					<div class="col-md-6">
					<div class="form-group">
					<label>Menü Başlığı</label>
					<input type="text" class="form-control" value="<?php echo $sidebarduzen['baslik']; ?>" name="baslik">
		</div>
	</div>
		<div class="col-md-3">
		<label>Menü Sırası</label>
					<div class="form-group">
					<select name="sira" class="form-control" aria-describedby="sizing-addon2">
				<option hidden selected value="<?php echo $sidebarduzen['sira']; ?>"><?php echo $sidebarduzen['sira']; ?></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
	</div>
	</div>
	<div class="col-md-3">
	<?php
	if ($sidebarduzen['aktif']=="1") {
		$durum = "checked";
	}else if($sidebarduzen['aktif']=="0"){
		$durum = "";
	}
	?>
					<div class="form-group">
			<label>Aktif/Pasif</label>
			<input type="checkbox" data-toggle="toggle" data-height="34px" data-width="88px" data-on="Aktif" data-off="Pasif" name="aktif" <?php echo $durum; ?>></input>
		</div>
					
	</div>
	<div class="col-md-3"></div>
	  <div class="col-md-6">
                                           <div class="form-group">
					<label>Menü İçeriği</label>
						<textarea type="text" name="icerigi" class="ckeditor form-control" rows="8"><?php echo $sidebarduzen['icerigi'] ?></textarea>	
						</div>
                                        </div>
	<div class="col-md-12">
		<div class="form-group">
		<label><font color="#FFF">Kaydet</font></label>
			<button type="submit" name="sagmenu" class="btn btn-primary btn-block">Kaydet</button>
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