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
?><title>Kategori Ekle | <?php echo $sitebilgi['title']; ?></title>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Kategori Ekle
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-plus-square"></i> Kategori Ekle
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
 <form action="kategori-ekle.php" method="post">
	<div class="row">
		<div class="col-md-2"></div>
					<div class="col-md-8">
					<div class="col-md-12">
					<div class="form-group">
					<label>Kategori Adı</label>
					<input type="text" class="form-control" placeholder="Kategori Adı" name="kate" required>
		</div>
	</div> 
	
									 <div class="col-md-12">
										<div class="form-group">
										<label><font color="#FFF">Kaydet</font></label>
											<button type="submit" name="kategoriekle" class="btn btn-primary btn-block">Kaydet</button>
										</div>
									</div>
</div>
									
		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    

</body>

</html>