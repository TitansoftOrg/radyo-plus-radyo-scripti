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
?><title>DJ Ekle | <?php echo $sitebilgi['title']; ?></title>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            DJ Ekle
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-gear"></i> DJ Ekle
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
 <form action="dj-ekle.php" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-2"></div>
					<div class="col-md-8">
					<div class="col-md-6">
					<div class="form-group">
					<label>Kullanıcı Adı</label>
					<input type="text" class="form-control" placeholder="Kullanıcı Adı" name="username">
		</div>
	</div> 
	<div class="col-md-6">
										<div class="form-group">
											<label>Şifre</label>
											<input type="password" class="form-control" placeholder="Şifre" name="password">
											
										</div>
										</div>
<div class="col-md-6">
										<div class="form-group">
											<label>E-mail</label>
											<input type="text" class="form-control" placeholder="E-mail" name="email">
											
										</div>
										
									</div> 
<div class="col-md-6">
										<div class="form-group">
											<label>İsim</label>
											<input type="text" class="form-control" placeholder="İsim" name="ad" required>
											
										</div>
									</div> 
<div class="col-md-6">
										<div class="form-group">
											<label>Soyisim</label>
											<input type="text" class="form-control" placeholder="Soyisim" name="soyad">
											
										</div>
									</div> 
<div class="col-md-6">
										<div class="form-group">
											<label>Doğum Tarihi</label>
											<input type="date" class="form-control" placeholder="Doğum Tarihi" name="dogum" required>
											
										</div>
									</div> 
<div class="col-md-3">
										<div class="form-group">
											<label>Göreve Başlama</label>
											<input type="text" class="form-control" placeholder="12:00" name="gorevbasla">
											
										</div>
									</div> 
<div class="col-md-3">
										<div class="form-group">
											<label>Görevi Bitirme</label>
											<input type="text" class="form-control" placeholder="18:00" name="gorevbitir">
											
										</div>
									</div> 
									<div class="col-md-6">
										<div class="form-group">
											<label>Hakkında</label>
											<input type="text" class="form-control" placeholder="Hakkında" name="hakkinda">
											
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
											<input type="text" class="form-control" placeholder="Facebook" name="facebook">
											
										</div>
									</div> 

<div class="col-md-3">
										<div class="form-group">
											<label>Twitter</label>
											<input type="text" class="form-control" placeholder="Twitter" name="twitter">
											
										</div>
									</div> 
<div class="col-md-3">
										<div class="form-group">
											<label>Google+</label>
											<input type="text" class="form-control" placeholder="Google+" name="googleplus">
											
										</div>
									</div> 
									<div class="col-md-3">
										<div class="form-group">
											<label>Cinsiyet</label>
										   <select name="cinsiyet" class="form-control" aria-describedby="sizing-addon2">
									<option value="Erkek">Erkek</option>
									<option value="Kadın">Kadın</option>
									<option value="Diğer">Diğer</option>
									</select>
											
										</div>
									</div> 


<div class="col-md-3">
										<div class="form-group">
											<label>Skype</label>
											<input type="text" class="form-control" placeholder="Skype" name="skype">
											
										</div>
									</div>  
									<div class="col-md-3">
										<div class="form-group">
											<label>Yetkiler</label>
										   <select name="yetki" class="form-control" aria-describedby="sizing-addon2">
									<option value="0">Yayıncı</option>
									<option value="1">Yönetici</option>
									<option value="2">Haber Editörü</option>
									</select>
											
										</div>
									</div> 
									 <div class="col-md-12">
										<div class="form-group">
										<label><font color="#FFF">Kaydet</font></label>
											<button type="submit" name="djekle" class="btn btn-primary btn-block">Kaydet</button>
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