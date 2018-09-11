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
?><title>DJ Düzenle | <?php echo $sitebilgi['title']; ?></title>
<div id="page-wrapper">
			<div class="container-fluid">
			<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					DJ Düzenle
                </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
							<li><i class="fa fa-users"></i> <a href="dj-listesi.php">DJ Listesi</a></li>
                            <li class="active">
                                <i class="fa fa-edit"></i> DJ Düzenle
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
 <form action="" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
	<div class="row">
		<div class="col-md-2"></div>
					<div class="col-md-8">
					<div class="col-md-6">
					<div class="form-group">
					<label>Kullanıcı Adı</label>
					<input type="text" class="form-control" value="<?php echo $_POST['username']; ?>" name="username">
		</div>
	</div> 
	<div class="col-md-6">
		<div class="form-group">
			<label>Şifre</label>
			<input type="password" class="form-control" value="<?php echo $_POST['password']; ?>" name="password">
			
		</div>
	</div>
	
	<div class="col-md-6">
		<div class="form-group">
			<label>E-mail</label>
			<input type="text" class="form-control" value="<?php echo $_POST['email']; ?>" name="email">
			
		</div>
	</div>
	
	<div class="col-md-6">
		<div class="form-group">
			<label>İsim</label>
			<input type="text" class="form-control" value="<?php echo $_POST['ad']; ?>" name="ad">
			
		</div>
	</div> 
	
	<div class="col-md-6">
		<div class="form-group">
			<label>Soyisim</label>
			<input type="text" class="form-control" value="<?php echo $_POST['soyad']; ?>" name="soyad">
			
		</div>
	</div> 
	
	<div class="col-md-6">
		<div class="form-group">
			<label>Doğum Tarihi</label>
			<input type="date" class="form-control" value="<?php echo $_POST['dogum']; ?>" name="dogum" required>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="form-group">
			<label>Göreve Başlama</label>
			<input type="text" class="form-control" value="<?php echo $_POST['gorevbasla']; ?>" name="gorevbasla">
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="form-group">
			<label>Görevi Bitirme</label>
			<input type="text" class="form-control" value="<?php echo $_POST['gorevbitir']; ?>" name="gorevbitir">
		</div>
	</div> 
	
	<div class="col-md-6">
		<div class="form-group">
			<label>Hakkında</label>
			<input type="text" class="form-control" value="<?php echo $_POST['hakkinda']; ?>" name="hakkinda">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Profil Resmi</label>
			<input type="file" name="profilresmi">
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="form-group">
			<label>Facebook</label>
			<input type="text" class="form-control" value="<?php echo $_POST['facebook']; ?>" name="facebook">
		</div>
	</div> 

	<div class="col-md-3">
		<div class="form-group">
			<label>Twitter</label>
			<input type="text" class="form-control" value="<?php echo $_POST['twitter']; ?>" name="twitter">
			
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="form-group">
			<label>Google+</label>
			<input type="text" class="form-control" value="<?php echo $_POST['googleplus']; ?>" name="googleplus">
			
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="form-group">
			<label>Cinsiyet</label>
		   <select name="cinsiyet" class="form-control" aria-describedby="sizing-addon2" required>
				<option hidden selected value="<?php echo $_POST['cinsiyet']; ?>"><?php echo $_POST['cinsiyet'];?></option>
				<option value="Erkek">Erkek</option>
				<option value="Kadın">Kadın</option>
				<option value="Diğer">Diğer</option>
			</select>
		</div>
	</div> 


	<div class="col-md-3">
		<div class="form-group">
			<label>Skype</label>
			<input type="text" class="form-control" value="<?php echo $_POST['skype']; ?>" name="skype">
		</div>
	</div>  
	<div class="col-md-3">
	<?php
	if ($_POST['yetki']=="0") {
		$aktif = "Yayıncı";
	}else if($_POST['yetki']=="1"){
		$aktif = "Yönetici";
	}else if($_POST['yetki']=="2"){
		$aktif = "Haber Editörü";
	}
	?>	
		<div class="form-group">
			<label>Yetkiler</label>
			<select name="yetki" class="form-control" aria-describedby="sizing-addon2">
			<option hidden selected value="<?php echo $_POST['yetki'];?>"><?php echo $aktif; ?></option>
			<option value="0">Yayıncı</option>
			<option value="1">Yönetici</option>
			<option value="2">Haber Editörü</option>
			</select>
		</div>
	</div> 
	<div class="col-md-12">
		<div class="form-group">
		<label><font color="#FFF">Kaydet</font></label>
			<button type="submit" name="djduzenle" class="btn btn-primary btn-block">Kaydet</button>
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