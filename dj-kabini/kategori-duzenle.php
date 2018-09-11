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
?><title>Kategori Düzenle | <?php echo $sitebilgi['title']; ?></title>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
				
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Kategori Düzenle
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
							<li><i class="fa fa-list"></i> <a href="kategoriler.php">Kategoriler</a></li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Kategori Düzenle
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
					<div class="col-md-12">
					<div class="form-group">
					<label>Kategori adı</label>
					<input type="text" class="form-control" value="<?php echo $_POST['kate']; ?>" name="kate">
		</div>
	</div>
		
	
	<div class="col-md-12">
		<div class="form-group">
		<label><font color="#FFF">Kaydet</font></label>
			<button type="submit" name="katduzenle" class="btn btn-primary btn-block">Kaydet</button>
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