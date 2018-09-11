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
?><title>Yayın Akışı Düzenle | <?php echo $sitebilgi['title']; ?></title> <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Yayın Akışı Düzenle
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
							<li><i class="fa fa-headphones"></i> <a href="yayin-akisi.php">Yayın Akışı</a></li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Yayın Akışı Düzenle
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
					<div class="col-md-12">
					
					<div class="col-md-6">
					<div class="form-group">
					<label>Yayın Günü</label>
					<select name="gun" value="<?php echo $_POST['gun']; ?>" class="form-control" aria-describedby="sizing-addon2">
						<option hidden selected value="<?php echo $_POST['gun']; ?>"><?php echo $_POST['gun']; ?></option>
						<option value="Pazartesi">Pazartesi</option>
						<option value="Salı">Salı</option>
						<option value="Çarşamba">Çarşamba</option>
						<option value="Perşembe">Perşembe</option>
						<option value="Cuma">Cuma</option>
						<option value="Cumartesi">Cumartesi</option>
						<option value="Pazar">Pazar</option>
					</select>

					</div>
		</div>
	
	
	<div class="col-md-3">
					<div class="form-group">
					<label>Yayın başlangıcı (00:00 gibi)</label>
					<input type="text" class="form-control" value="<?php echo $_POST['baslangic']; ?>" name="baslangic">
		</div>
	</div> 
	<div class="col-md-3">
					<div class="form-group">
					<label>Yayın bitişi (01:00 gibi)</label>
					<input type="text" class="form-control" value="<?php echo $_POST['bitis']; ?>" name="bitis">
		</div>
	</div> 
	<div class="col-md-6">
<label>Sunulacak Program</label>
					<select name="program" class="form-control" aria-describedby="sizing-addon2">
					<option hidden selected value="<?php echo $_POST['program'] ?>"><?php echo $_POST['program'] ?></option>
					<?php
if ($programlar){
  foreach ($programlar as $row){
    
			echo '<option value="'.$row['progadi'].'">'.$row['progadi'].'</option>';
									
									
  }
}
?>
</select>
	</div> 
	
	<div class="col-md-6">
<label>Yayıncı</label>
					<select name="yayinci" class="form-control" aria-describedby="sizing-addon2">
					<option hidden selected value="<?php echo $_POST['yayinci'] ?>"><?php echo $_POST['yayinci'] ?></option>
					<?php
if ($authme){
  foreach ($authme as $row){
    
			echo '<option value="'.$row['ad'].'&nbsp;'.$row['soyad'].'">'.$row['ad'].' '.$row['soyad'].'</option>';
									
									
  }
}
?>
</select>
	</div> 
	
	
	<div class="col-md-12">
		<div class="form-group">
		<label><font color="#FFF">Kaydet</font></label>
			<button type="submit" name="yayinduzenle" class="btn btn-primary btn-block">Kaydet</button>
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