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
?><title>Program Düzenle | <?php echo $sitebilgi['title']; ?></title>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
				
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Program Düzenle
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
							<li><i class="fa fa-calendar"></i> <a href="programlar.php">Programlar</a></li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Program Düzenle
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




 <form action="" method="POST">
	<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
	<div class="row">
		<div class="col-md-2"></div>
					<div class="col-md-8">
					<div class="col-md-12">
					<div class="form-group">
					<label>Program adı</label>
					<input type="text" class="form-control" value="<?php echo $_POST['progadi']; ?>" name="progadi">
		</div>
	</div>
		
	
	<div class="col-md-12">
		<div class="form-group">
		<label><font color="#FFF">Kaydet</font></label>
			<button type="submit" name="programduzenle" class="btn btn-primary btn-block">Kaydet</button>
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
    

    <!-- Bootstrap Core JavaScript -->
    

</body>

</html>