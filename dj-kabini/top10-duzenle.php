<?php
require_once "BasicDB.php";
require_once "baglan.php";
require_once "class.upload.php";
session_Start();
if($_SESSION["giris"] == false){
	header("Location: login.php");
    die("Burada olmaman gerekirdi!");
}
include "sayfalar/header.php";
require_once "fonksiyon.php";
include "sayfalar/menu.php";
?><title>Top 10 Düzenle | <?php echo $sitebilgi['title']; ?></title>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
				
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Top 10 Düzenle
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
							<li><i class="fa fa-tasks"></i> <a href="top10.php">Top 10</a></li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Top 10 Düzenle
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


 <form action="" method="POST" enctype="multipart/form-data">
 	<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
	<div class="col-md-12">
					
					
  <div class="col-md-2">
					<div class="form-group">
					<label>Sıra</label>
					<select name="sira" class="form-control" aria-describedby="sizing-addon2" required>
				<option hidden selected value="<?php echo $_POST['sira']; ?>"><?php echo $_POST['sira'];?></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		</div>
	</div>
					<div class="col-md-4">
					<div class="form-group">
					<label>Sanatçı</label>
					<input type="text" class="form-control" value="<?php echo $_POST['sanatci']; ?>" name="sanatci">
		</div>
	</div>
					<div class="col-md-3">
					<div class="form-group">
					<label>Şarkı</label>
					<input type="text" class="form-control" value="<?php echo $_POST['sarki']; ?>" name="sarki">
		</div>
	</div>
					<div class="col-md-3">
					<div class="form-group">
					<label>Youtube ID</label>
					<input type="text" class="form-control" value="<?php echo $_POST['embed']; ?>" name="embed">
		</div>
	</div>
					<div class="col-md-6">
					<div class="form-group">
					<label>Albüm Kapağı</label>
					<input type="file" name="album">
		</div>
</div>
	<div class="col-md-12">
		<div class="form-group">
		<label><font color="#FFF">Kaydet</font></label>
			<button type="submit" name="toplistduzenle" class="btn btn-primary btn-block">Kaydet</button>
		</div>
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