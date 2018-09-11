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
?><title>Hesap Ayarları | <?php echo $sitebilgi['title']; ?></title>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Hesap Ayarları
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-gear"></i> Hesap Ayarları
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

 <form action="hesap-ayarlari.php" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-2"></div>
					<div class="col-md-8">
					<div class="col-md-6">
					<div class="form-group">
					<label>Kullanıcı Adı</label>
					<input type="text" class="form-control" placeholder="Kullanıcı Adı" name="username" value="<?=$bilgiler["username"];?>">
		</div>
	</div> 
<div class="col-md-6">
										<div class="form-group">
											<label>E-mail</label>
											<input type="text" class="form-control" placeholder="E-mail" name="email" value="<?=$bilgiler["email"];?>">
											
										</div>
									</div> 
<div class="col-md-6">
										<div class="form-group">
											<label>İsim</label>
											<input type="text" class="form-control" placeholder="İsim" name="ad" value="<?=$bilgiler["ad"];?>">
											
										</div>
									</div> 
<div class="col-md-6">
										<div class="form-group">
											<label>Soyisim</label>
											<input type="text" class="form-control" placeholder="Soyisim" name="soyad" value="<?=$bilgiler["soyad"];?>">
											
										</div>
									</div> 
<div class="col-md-6">
										<div class="form-group">
											<label>Doğum Tarihi</label>
											<input type="date" class="form-control" placeholder="Doğum Tarihi" name="dogum" value="<?=$bilgiler["dogum"];?>" required>
											
										</div>
									</div> 
<div class="col-md-3">
										<div class="form-group">
											<label>Göreve Başlama</label>
											<input type="text" class="form-control" placeholder="12:00" name="gorevbasla" value="<?=$bilgiler["gorevbasla"];?>">
											
										</div>
									</div> 
<div class="col-md-3">
										<div class="form-group">
											<label>Görevi Bitirme</label>
											<input type="text" class="form-control" placeholder="18:00" name="gorevbitir" value="<?=$bilgiler["gorevbitir"];?>">
											
										</div>
									</div> 
<div class="col-md-6">
										<div class="form-group">
											<label>Profil Resmi</label>
											<input type="file" name="profilresmi">
											
										</div>
									</div> 
<div class="col-md-6">
										<div class="form-group">
											<label>Hakkında</label>
											<input type="text" class="form-control" placeholder="Hakkında" name="hakkinda" value="<?=$bilgiler["hakkinda"];?>">
											
										</div>
									</div> 
<div class="col-md-3">
										<div class="form-group">
											<label>Facebook</label>
											<input type="text" class="form-control" placeholder="Facebook" name="facebook" value="<?=$bilgiler["facebook"];?>">
											
										</div>
									</div> 

<div class="col-md-3">
										<div class="form-group">
											<label>Twitter</label>
											<input type="text" class="form-control" placeholder="Twitter" name="twitter" value="<?=$bilgiler["twitter"];?>">
											
										</div>
									</div> 
<div class="col-md-3">
										<div class="form-group">
											<label>Google+</label>
											<input type="text" class="form-control" placeholder="Google+" name="googleplus" value="<?=$bilgiler["googleplus"];?>">
											
										</div>
									</div> 
									<div class="col-md-3">
										<div class="form-group">
											<label>Cinsiyet</label>
										   <select name="cinsiyet" class="form-control" value="<?=$bilgiler['cinsiyet'];?>">" aria-describedby="sizing-addon2">
									<option value="Erkek">Erkek</option>
									<option value="Kadın">Kadın</option>
									<option value="Diğer">Diğer</option>
									</select>
											
										</div>
									</div> 


<div class="col-md-6">
										<div class="form-group">
											<label>Skype</label>
											<input type="text" class="form-control" placeholder="Skype" name="skype" value="<?=$bilgiler["skype"];?>">
											
										</div>
									</div>  
									 <div class="col-md-6">
										<div class="form-group">
										<label><font color="#FFF">Kaydet</font></label>
											<button type="submit" name="hesapayarlari" class="btn btn-primary btn-block">Güncelle</button>
										</div>
									</div>
</div>
		</form>							
		</div>
	</div>
</div>
</body>
</html>