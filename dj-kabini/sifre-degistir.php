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
?><title>Şifre Değiştir | <?php echo $sitebilgi['title']; ?></title>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Şifre Değiştir
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-lock"></i> Şifre Değiştir
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

	 <form action="" method="post">
		<div class="row">
			
			<div class="col-md-4">
				<div class="form-group">
					<label>Eski Şifre</label>
					<input type="password" class="form-control" placeholder="Eski Şifre" name="eskisifre" required>
				</div>
			</div>
				
			<div class="col-md-4">
				<div class="form-group">
					<label>Yeni Şifre</label>
					<input type="password" class="form-control" placeholder="Yeni Şifre" name="yenisifre" required>
					
				</div>
			</div>

			 <div class="col-md-4">
				<div class="form-group">
				<label><font color="#FFF">Kaydet</font></label>
					<button type="submit" name="sifreguncelle" class="btn btn-primary btn-block">Güncelle</button>
				</div>
			</div>
										

        </div>
	</form>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    


    <!-- Bootstrap Core JavaScript -->
    

</body>

</html>