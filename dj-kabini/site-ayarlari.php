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
?>	
<title>Site Ayarları | <?php echo $sitebilgi['title']; ?></title>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Site Ayarları
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-gear"></i> Site Ayarları
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
	 <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Site Başlığı</label>
                                                <input type="text" class="form-control" placeholder="Site Başlığı" name="title" value="<?=$sitebilgi["title"];?>">
												
                                            </div>
                                        </div>
										 
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Adres</label>
                                                <input type="text" class="form-control" placeholder="Adres" name="adres" value="<?=$sitebilgi["adres"];?>">
												
                                            </div>
											</div>
											<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Logo</label>
                                                <input type="file" name="logo">
												
                                            </div>
                                        </div>
											<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telefon</label>
                                                <input type="text" class="form-control" placeholder="Telefon" name="telefon" value="<?=$sitebilgi["telefon"];?>">
												
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>E-posta</label>
                                                <input type="text" class="form-control" placeholder="E-posta" name="eposta" value="<?=$sitebilgi["eposta"];?>">
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control" placeholder="Facebook" name="facebook" value="<?=$sitebilgi["facebook"];?>">
												
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <input type="text" class="form-control" placeholder="Twitter" name="twitter" value="<?=$sitebilgi["twitter"];?>">
												
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Google+</label>
                                                <input type="text" class="form-control" placeholder="Google+" name="googleplus" value="<?=$sitebilgi["googleplus"];?>">
												
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text" class="form-control" placeholder="Instagram" name="instagram" value="<?=$sitebilgi["instagram"];?>">
												
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Listelenecek Haber Sayısı *Haberler sayfasında</label>
                                                 <select name="haberliste" class="form-control" aria-describedby="sizing-addon2">
												<option hidden selected value="<?php echo $sitebilgi['haberliste'] ?>"><?php echo $sitebilgi["haberliste"]; ?></option>
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
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												</select>
												
                                            </div>
                                        </div>
                                        </div>
										<div class="col-md-12">
										<hr><h2><center>Radyo ayarları</center></h2>
										</div> <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Radyo Linki</label>
                                                <input type="text" class="form-control" placeholder="Radyo Linki" name="radyourl" value="<?=$sitebilgi["radyourl"];?>">
												
                                            </div>
											</div> <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Radyo Portu *yoksa boş bırakın*</label>
                                                <input type="text" class="form-control" placeholder="Radyo Portu" name="port" value="<?=$sitebilgi["port"];?>">
												
                                            </div>
										</div>
										<div class="col-md-6">
		<div class="form-group">
		<?php
	if ($sitebilgi['protokol']=="http") {
		$prot = "http://";
	}else if($sitebilgi['protokol']=="https"){
		$prot = "https://";
	}
	?>
			<label>Protokol</label>
		   <select name="protokol" class="form-control" aria-describedby="sizing-addon2">
				<option hidden selected value="<?php echo $sitebilgi['protokol'] ?>"><?php echo $prot; ?></option>
				<option value="http">http://</option>
				<option value="https">https://</option>
			</select>
		</div>
	</div> 
	<div class="col-md-3">
		<div class="form-group">
		<?php
	if ($sitebilgi['versiyon']=="1") {
		$vers = "1.x.x";
	}else if($sitebilgi['versiyon']=="2"){
		$vers = "2.x.x";
	}
	?>	
			<label>Shoutcast Versiyonu</label>
		   <select name="versiyon" class="form-control" aria-describedby="sizing-addon2">
				<option hidden selected value="<?php echo $sitebilgi['versiyon']; ?>"><?php echo $vers; ?></option>
				<option value="1">1.x.x</option>
				<option value="2">2.x.x</option>
			</select>
		</div>
	</div> 
	<div class="col-md-3">
		<div class="form-group">
		<?php
	if ($sitebilgi['tema']=="dark") {
		$tem = "Siyah";
	}else if($sitebilgi['tema']=="light"){
		$tem = "Beyaz";
	}
	?>	
			<label>Player Teması</label>
		   <select name="tema" class="form-control" aria-describedby="sizing-addon2">
				<option hidden selected value="<?php echo $sitebilgi['tema']; ?>"><?php echo $tem;?></option>
				<option value="dark">Siyah</option>
				<option value="light">Beyaz</option>
				
			</select>
		</div>
	</div> 
	<div class="col-md-4">
		<div class="form-group">
		<?php
	if ($sitebilgi['boy']=="minimized") {
		$boyu = "Küçük";
	}else if($sitebilgi['boy']=="maximized"){
		$boyu = "Büyük";
	}
	?>
			<label>Player boyutu *site ilk açıldığında*</label>
		   <select name="boy" class="form-control" aria-describedby="sizing-addon2">
				<option hidden selected value="<?php echo $sitebilgi['boy'] ?>"><?php echo $boyu; ?></option>
				<option value="minimized">Küçük</option>
				<option value="maximized">Büyük</option>
			</select>
		</div>
	</div> 
	<div class="col-md-4">
		<div class="form-group">
		<?php
	if ($sitebilgi['konum']=="left") {
		$konumu = "Sol";
	}else if($sitebilgi['konum']=="right"){
		$konumu = "Sağ";
	}
	?>
			<label>Player Konumu</label>
		   <select name="konum" class="form-control" aria-describedby="sizing-addon2">
				<option hidden selected value="<?php echo $sitebilgi['konum'] ?>"><?php echo $konumu; ?></option>
				<option value="left">Sol</option>
				<option value="right">Sağ</option>
			</select>
		</div>
	</div> 
	<div class="col-md-4">
		<div class="form-group">
		<?php
	if ($sitebilgi['otoplay']=="true") {
		$play = "Açık";
	}else if($sitebilgi['otoplay']=="false"){
		$play = "Kapalı";
	}
	?>
			<label>Otomatik Oynat</label>
		   <select name="otoplay" class="form-control" aria-describedby="sizing-addon2">
				<option hidden selected value="<?php echo $sitebilgi['otoplay'] ?>"><?php echo $play; ?></option>
				<option value="true">Açık</option>
				<option value="false">Kapalı</option>
			</select>
		</div>
	</div> 
										 <div class="col-md-12">
                                            <div class="form-group">
											<label><font color="#FFF">Kaydet</font></label>
                                                <button type="submit" name="siteayar" class="btn btn-primary btn-block">Güncelle</button>
                                            </div>
                                        </div>

												</div>
</form>
											</div>
										</div>
									</body>
									</html>