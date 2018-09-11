<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/sweetalert-master/dist/sweetalert.css">
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="/sweetalert-master/dist/sweetalert.min.js"></script>
<?php
error_reporting(0)
?>
<?php
//Veritabanı
$yorumlar = $db->query("SELECT * FROM yorumlar WHERE durum = 'istek' ", PDO::FETCH_ASSOC);
$iletisim = $db->query("SELECT * FROM yorumlar WHERE durum = 'iletisim' ", PDO::FETCH_ASSOC);
$programlar = $db->query("SELECT * FROM programlar", PDO::FETCH_ASSOC);
$kategoriler = $db->query("SELECT * FROM kategoriler", PDO::FETCH_ASSOC);
$topliste = $db->query("SELECT * FROM topliste ORDER BY sira ASC",  PDO::FETCH_ASSOC);
$topliste1 = $db->query("SELECT * FROM topliste ORDER BY sira ASC LIMIT 0,4",  PDO::FETCH_ASSOC);
$topliste2 = $db->query("SELECT * FROM topliste ORDER BY sira ASC LIMIT 4,6",  PDO::FETCH_ASSOC);
$topliste3 = $db->query("SELECT * FROM topliste ORDER BY sira ASC LIMIT 0,1",  PDO::FETCH_ASSOC);
$topliste4 = $db->query("SELECT * FROM topliste ORDER BY sira ASC LIMIT 1,9",  PDO::FETCH_ASSOC);
$uye_id = $_SESSION['id'];
$bilgiler = $db->select('authme')
			->where('id', $uye_id)
			->run(TRUE);

$sidebarid = $_GET['id'];		
$sidebarduzen = $db->select('sidebar')
			->where('id', $sidebarid)
			->run(TRUE);
			
			$djid = $_POST['id'];
			$djbilgi = $db->select('authme')
			->where('id', $djid)
			->run(TRUE);
			
			$topbilgi = $db->select('topliste')
			->where('id', $djid)
			->run(TRUE);
			
			
$haber_id = $_GET['id'];
$haberoku = $db->select('haberler')
			->where('id', $haber_id)
			->run(TRUE);

			function etiket($s) {
 $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','/',':',"'",'"','!');
 $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','-','',"",'','');
 $s = str_replace($tr,$eng,$s);
 $s = strtolower($s);
 $s = preg_replace('/\s+/', '-', $s);
 $s = preg_replace('|-+|', ' ', $s);
 $s = trim($s, '-');
 return $s;
}
			
$Gelen = etiket($_GET["seoetiket"]);
$Ara   = $db->prepare("SELECT * FROM haberler WHERE seoetiket LIKE ?");
$Ara->execute(array('%'.$Gelen.'%'));
$Liste   = $Ara->fetchAll(PDO::FETCH_ASSOC);

$yazarara = etiket($_GET["seoyazar"]);
$sorgular   = $db->prepare("SELECT * FROM haberler WHERE seoyazar LIKE ?");
$sorgular->execute(array('%'.$yazarara.'%'));
$sorgucek   = $sorgular->fetchAll(PDO::FETCH_ASSOC);

$arama = etiket($_GET["seobaslik"]);
$bul   = $db->prepare("SELECT * FROM haberler WHERE seobaslik LIKE ?");
$bul->execute(array('%'.$arama.'%'));
$bulgetir   = $bul->fetchAll(PDO::FETCH_ASSOC);

$kategoriara = etiket($_GET["seokategori"]);
$sorgukategori   = $db->prepare("SELECT * FROM haberler WHERE seokategori LIKE ?");
$sorgukategori->execute(array('%'.$kategoriara.'%'));
$kategoricek   = $sorgukategori->fetchAll(PDO::FETCH_ASSOC);

$haberyorum = $db->select('haberyorum')
->where('haber', $haber_id)
->where('onay', '1')
->run();

$haberyorumlari = $db->select('haberyorum')
->run();

$yorumlistele = $db->select('haberyorum')
				->join('haberler', '%s.id = %s.haber', 'left')
				->run();

$katlistele = $db->select('haberler')
				->join('kategoriler', '%s.kate = %s.kategori', 'left')
				->limit(0, 9)
				->orderby('id', 'DESC')
				->run();				

$authme = $db->select('authme')
->run();

$homekadro = $db->select('authme')
->limit(0, 4)
->run();

$haberler = $db->query("SELECT * FROM haberler ORDER BY id DESC LIMIT 2",  PDO::FETCH_ASSOC);

$haberlerdevam = $db->select('haberler')
->orderby('id', 'desc')
->run();

$haberhome = $db->select('haberler')
			->orderby('id', 'DESC')
			->limit(0, 9)
			->run();
$haberadmin = $db->select('haberler')
			->orderby('id', 'DESC')
			->run();
			function seo($s) {
 $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',',"'",'"','!');
 $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','',"",'','');
 $s = str_replace($tr,$eng,$s);
 $s = strtolower($s);
 $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
 $s = preg_replace('/\s+/', '-', $s);
 $s = preg_replace('|-+|', '-', $s);
 $s = preg_replace('/#/', '', $s);
 $s = str_replace('.', '', $s);
 $s = trim($s, '-');
 return $s;
}


$slider = $db->select('haberler')
->orderby('id', 'DESC')
->limit(0, 1)
->run();

$slayt = $db->select('haberler')
->orderby('id', 'DESC')
->limit(1, 5)
->run();

$sitebilgi = $db->select('site')
->run(TRUE);

$reklambilgi = $db->select('reklam')
->run(TRUE);


$yayinakisi = $db->select('yayinakisi')
->run();

$sidebarliste = $db->select('sidebar')
			->orderby('sira', 'ASC')
			->run();

$sidebargoster = $db->select('sidebar')
->WHERE('aktif', '1')
->orderby('sira', 'ASC')
->run();

$haberadi = $db->select('haberler')
->run();

$pazartesi = $db->select('yayinakisi')
->where('gun', 'Pazartesi')
->orderby('baslangic', 'ASC')
->run();

$sali = $db->select('yayinakisi')
->where('gun', 'Salı')
->orderby('baslangic', 'ASC')
->run();

$carsamba = $db->select('yayinakisi')
->where('gun', 'Çarşamba')
->orderby('baslangic', 'ASC')
->run();

$persembe = $db->select('yayinakisi')
->where('gun', 'Perşembe')
->orderby('baslangic', 'ASC')
->run();

$cuma = $db->select('yayinakisi')
->where('gun', 'Cuma')
->orderby('baslangic', 'ASC')
->run();

$cumartesi = $db->select('yayinakisi')
->where('gun', 'Cumartesi')
->orderby('baslangic', 'ASC')
->run();

$pazar = $db->select('yayinakisi')
->where('gun', 'Pazar')
->orderby('baslangic', 'ASC')
->run();

$oge1 = $db->select('sidebar')
->where('sira', '1')
->where('aktif', '1')
->run(TRUE);


$oge2 = $db->select('sidebar')
->where('sira', '2')
->where('aktif', '1')
->run(TRUE);


$oge3 = $db->select('sidebar')
->where('sira', '3')
->where('aktif', '1')
->run(TRUE);


$oge4 = $db->select('sidebar')
->where('sira', '4')
->where('aktif', '1')
->run(TRUE);


$oge5 = $db->select('sidebar')
->where('sira', '5')
->where('aktif', '1')
->run(TRUE);

?>
<?php
//Kategori Ekleme
if (isset($_POST['kategoriekle'])){
$kategoriekle = @$_POST["kate"];
$kategoriekle = $db->insert('kategoriler')
            ->set(array(
                 'kate' => $kategoriekle
            ));
   

if ($kategoriekle){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Kategori eklendi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>";

}
}
?>
<?php
//Yayın Ekle
if (isset($_POST['yayinekle'])){
$gun = $_POST["gun"];
$baslangic = $_POST["baslangic"];
$bitis = $_POST["bitis"];
$yayinci = $_POST["yayinci"];
$program = $_POST["program"];


$yayinekle= $db->insert('yayinakisi')
            ->set(array(
                 'gun' => $gun,
				 'baslangic' => $baslangic,
				 'bitis' => $bitis,
				 'yayinci' => $yayinci,
				 'program' => $program
            ));
if ($yayinekle){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Yayın eklendi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>";

}
}
?>
<?php
//Haber Ekle
if (isset($_POST['haberekle'])){
	
$gorsel = new Upload($_FILES['gorsel']);
$gorsel->allowed = array ( 'image/*' );
   if ( $gorsel->uploaded ) {
	$gorsel->file_new_name_body = seo($_POST['baslik']);
   $gorsel->Process('upload/haber');
   }
   $gorsel->allowed = array ( 'image/*' );
   $gorsel->image_resize = true; 
   $gorsel->image_ratio_crop = true; 
   $gorsel->image_x = 850; 
   $gorsel->image_y = 480;
   if ( $gorsel->uploaded ) {
	   $gorsel->file_new_name_body = seo($_POST['baslik']);
   $gorsel->Process('upload/haber/thumb');
   }
   $gorsel->allowed = array ( 'image/*' );
   $gorsel->image_resize = true; 
   $gorsel->image_ratio_crop = true; 
   $gorsel->image_x = 800; 
   $gorsel->image_y = 600;
   if ( $gorsel->uploaded ) {
	   $gorsel->file_new_name_body = seo($_POST['baslik']);
   $gorsel->Process('upload/haber/anasayfa');
   }
   
$baslik = $_POST["baslik"];
$etiketler = $_POST["etiketler"];
$keywords = $_POST["keywords"];
$icerik = $_POST["icerik"];
$kategori = $_POST["kategori"];
$yazar = $_POST["yazar"];
$tarih = $_POST["tarih"];
$seoetiket = etiket($_POST["etiketler"]);
$seoyazar = etiket($_POST["yazar"]);
$seokategori = etiket($_POST["kategori"]);
$seobaslik = etiket($_POST["baslik"]);


$haberekle = $db->insert('haberler')
            ->set(array(
                 'baslik' => $baslik,
				 'gorsel' => $gorsel->file_dst_name == '' ? "gorsel-yok.jpg" : $gorsel->file_dst_name,
				 'etiketler' => $etiketler,
				 'keywords' => $keywords,
				 'icerik' => $icerik,
				 'kategori' => $kategori,
				 'yazar' => $yazar,
				 'tarih' => $tarih,
				 'seoetiket' => $seoetiket,
				 'seoyazar' => $seoyazar,
				 'seokategori' => $seokategori,
				 'seobaslik' => $seobaslik
            ));
if ($haberekle){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Haber eklendi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>";

}
}
?>
<?php
//DJ Ekle
if (isset($_POST['djekle'])){
	$profilresmi = new Upload($_FILES['profilresmi']);
$profilresmi->allowed = array ( 'image/*' );
   if ( $profilresmi->uploaded ) {
	   $profilresmi->file_new_name_body = seo($_POST['ad']);
   $profilresmi->Process('upload/profil-resmi');
   }
   $profilresmi->allowed = array ( 'image/*' );
   $profilresmi->image_resize = true; 
   $profilresmi->image_ratio_crop = true; 
   $profilresmi->image_x = 668; 
   $profilresmi->image_y = 899;
   if ( $profilresmi->uploaded ) {
	   $profilresmi->file_new_name_body = seo($_POST['ad']);
   $profilresmi->Process('upload/profil-resmi/thumb');
   }
$username = @$_POST["username"];
$password= @$_POST["password"];
$ad = @$_POST["ad"];
$soyad = @$_POST["soyad"];
$dogum = @$_POST["dogum"];
$gorevbasla = @$_POST["gorevbasla"];
$gorevbitir = @$_POST["gorevbitir"];
$hakkinda = @$_POST["hakkinda"];
$facebook = @$_POST["facebook"];
$twitter = @$_POST["twitter"];
$googleplus = @$_POST["googleplus"];
$skype = @$_POST["skype"];
$email = @$_POST["email"];
$cinsiyet = @$_POST['cinsiyet'];
$yetki = @$_POST['yetki'];

$djekle = $db->insert('authme')
            ->set(array(
                 'username' => $username,
				 'password' => $password,
				 'ad' => $ad,
				 'soyad' => $soyad,
				 'dogum' => $dogum,
				 'gorevbasla' => $gorevbasla,
				 'gorevbitir' => $gorevbitir,
				 'profilresmi' => $profilresmi->file_dst_name == '' ? "gorsel-yok.png" : $profilresmi->file_dst_name,
				 'hakkinda' => $hakkinda,
				 'facebook' => $facebook,
				 'twitter' => $twitter,
				 'googleplus' => $googleplus,
				 'skype' => $skype,
				 'email' => $email,
				 'cinsiyet' => $cinsiyet,
				 'yetki' => $yetki
            ));
   

if ($djekle){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Yeni DJ Eklendi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>";

}
}
?>
<?php
//Site Ayarları
if (isset($_POST['siteayar'])){
	$logo = new Upload($_FILES['logo']);
	$logo->allowed = array ( 'image/*' );
	$logo->allowed = array ( 'image/*' );
   if ( $logo->uploaded ) {
	   $logo->file_new_name_body = seo($_POST['title']);
   $logo->Process('upload/logo');
   }
$title = $_POST["title"];
$radyourl = $_POST["radyourl"];
$adres = $_POST["adres"];
$telefon = $_POST["telefon"];
$eposta = $_POST["eposta"];
$facebook = $_POST["facebook"];
$twitter = $_POST["twitter"];
$googleplus = $_POST["googleplus"];
$instagram = $_POST["instagram"];
$port = $_POST["port"];
$versiyon = $_POST["versiyon"];
$protokol = $_POST["protokol"];
$tema = $_POST["tema"];
$boy = $_POST["boy"];
$konum = $_POST["konum"];
$otoplay = $_POST["otoplay"];
$haberliste = $_POST["haberliste"];
$siteayar = $db->update('site')
            ->set(array(
                 'title' => $title,
				 'logo' => $logo->file_dst_name == '' ? $sitebilgi["logo"] : $logo->file_dst_name,
				 'radyourl' => $radyourl,
				 'adres' => $adres,
				 'telefon' => $telefon,
				 'eposta' => $eposta,
				 'facebook' => $facebook,
				 'twitter' => $twitter,
				 'googleplus' => $googleplus,
				 'instagram' => $instagram,
				 'port' => $port,
				 'versiyon' => $versiyon,
				 'protokol' => $protokol,
				 'tema' => $tema,
				 'konum' => $konum,
				 'boy' => $boy,
				 'otoplay' => $otoplay,
				 'haberliste' => $haberliste,
            ));
   


if ($siteayar){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Site bilgileri güncellendi.',
  timer: 4000,
  showCancelButton: false,
  showConfirmButton: false,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>
<meta http-equiv='refresh' content='2;URL=site-ayarlari.php'>";

}
}
?>
<?php
//Reklam Ayarları
if (isset($_POST['reklamayar'])){
$anasayfaust = $_POST["anasayfaust"];
$anasayfaalt = $_POST["anasayfaalt"];
$haberlistesi = $_POST["haberlistesi"];
$haberici = $_POST["haberici"];


$reklamayar = $db->update('reklam')
            ->set(array(
                 'anasayfaust' => $anasayfaust,
				 'anasayfaalt' => $anasayfaalt,
				 'haberlistesi' => $haberlistesi,
				 'haberici' => $haberici
            ));
if ($reklamayar){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Reklam ayarları güncellendi.',
  timer: 4000,
  showCancelButton: false,
  showConfirmButton: false,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>
<meta http-equiv='refresh' content='2;URL=reklam-ayarlari.php'>";

}
}
?>
<?php
//Sağ Menü düzenleme
if (isset($_POST['sagmenu'])){
$baslik = $_POST["baslik"];
$sira = $_POST["sira"];
$aktif = $_POST["aktif"];
$icerigi = $_POST["icerigi"];


$sagmenu = $db->update('sidebar')
			->where('id', $_GET['id'])
            ->set(array(
                 'baslik' => $baslik,
				 'sira' => $sira,
				 'aktif' => $aktif == 'on' ? "1" : "0",
				 'icerigi' => $icerigi
            ));
if ($sagmenu){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Sağ Menü güncellendi.',
  timer: 4000,
  showCancelButton: false,
  showConfirmButton: false,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>
<meta http-equiv='refresh' content='2;URL=sidebar-duzenle.php?id=".$_GET['id']."'>";

}
}
?>
<?php
//Yayın akışı düzenleme
if (isset($_POST['yayinduzenle'])){
$gun = $_POST["gun"];
$baslangic = $_POST["baslangic"];
$bitis = $_POST["bitis"];
$yayinci = $_POST["yayinci"];
$program = $_POST["program"];


$yayinduzenle = $db->update('yayinakisi')
			->where('id', $_POST['id'])
            ->set(array(
                 'gun' => $gun,
				 'baslangic' => $baslangic,
				 'bitis' => $bitis,
				 'yayinci' => $yayinci,
				 'program' => $program
            ));
if ($yayinduzenle){
echo "<script>
swal({
  title: 'Başarılı!',
  text: '".$_POST['program']." Yayını güncellendi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
    }
  }
)
</script>";

}
}
?>
<?php
//Program Düzenle
if (isset($_POST['programduzenle'])){
$id = $_POST["id"];
$progadi = @$_POST["progadi"];

$programduzenle= $db->update('programlar')
            ->where('id', $id)
			->set(array(
			
                 'progadi' => $progadi
            ));
   

if ($programduzenle){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Program güncellendi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>";

}
}
?>
<?php
if (isset($_POST['programekle'])){
$progadi = @$_POST["progadi"];

$programekle = $db->insert('programlar')
            ->set(array(
                 'progadi' => $progadi
            ));
   

if ($programekle){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Program eklendi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>";

}
}
?>
<?php
//Kategori düzenle
if (isset($_POST['katduzenle'])){
$id = $_POST["idsi"];
$kate = @$_POST["kate"];

$katduzenle = $db->update('kategoriler')
            ->where('idsi', $id)
			->set(array(
			
                 'kate' => $kate
            ));
   

if ($katduzenle){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Kategori güncellendi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>";

}
}
?>
<?php
//Haber Yorumu düzenle
if (isset($_POST['habyorduzenle'])){
$id = $_POST["idsi"];
$isim = @$_POST["isim"];
$email = @$_POST["email"];
$yorum = @$_POST["yorum"];
$onay = @$_POST["onay"];

$habyorduzenle = $db->update('haberyorum')
            ->where('idsi', $id)
			->set(array(
			'isim' => $isim,
			'email' => $email,
			'yorum' => $yorum,
			'onay' => $onay == 'on' ? "1" : "0",
            ));
   

if ($habyorduzenle){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Yorum düzenlendi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>";

}
}
?>
<?php
//Top10 düzenle
if (isset($_POST['toplistduzenle'])){
	$album = new Upload($_FILES['album']);
	$album->allowed = array ( 'image/*' );
	$album->allowed = array ( 'image/*' );
   if ( $album->uploaded ) {
	   $album->file_new_name_body = seo($_POST['sarki']);
   $album->Process('upload/top10');
   }
   $album->allowed = array ( 'image/*' );
   $album->image_resize = true; 
   $album->image_ratio_crop = true; 
   $album->image_x = 636; 
   $album->image_y = 636;
   if ( $album->uploaded ) {
	   $album->file_new_name_body = seo($_POST['sarki']);
   $album->Process('upload/top10/thumb');
   }
$id = @$_POST["id"];
$sanatci = @$_POST["sanatci"];
$sarki = @$_POST["sarki"];
$embed = @$_POST["embed"];
$sira = @$_POST["sira"];

$toplistduzenle = $db->update('topliste')
			->where('id', $id)
			->set(array(
                 'sanatci' => $sanatci,
				 'sarki' => $sarki,
				 'embed' => $embed,
				 'sira' => $sira,
				 'album' => $album->file_dst_name == '' ? $topbilgi["album"] : $album->file_dst_name,
            ));
}

if ($toplistduzenle){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Top 10 güncellendi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>";

}
?>
<?php
//DJ Düzenle
if (isset($_POST['djduzenle'])){
	$profilresmi = new Upload($_FILES['profilresmi']);
	$profilresmi->allowed = array ( 'image/*' );
	$profilresmi->allowed = array ( 'image/*' );
   if ( $profilresmi->uploaded ) {
	   $profilresmi->file_new_name_body = seo($_POST['ad']);
   $profilresmi->Process('upload/profil-resmi');
   }
   $profilresmi->allowed = array ( 'image/*' );
   $profilresmi->image_resize = true; 
   $profilresmi->image_ratio_crop = true; 
   $profilresmi->image_x = 668; 
   $profilresmi->image_y = 899;
   if ( $profilresmi->uploaded ) {
	   $profilresmi->file_new_name_body = seo($_POST['ad']);
   $profilresmi->Process('upload/profil-resmi/thumb');
   }
$username = $_POST["username"];
$password = @$_POST["password"];
$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$dogum = $_POST["dogum"];
$gorevbasla = $_POST["gorevbasla"];
$gorevbitir = $_POST["gorevbitir"];
$hakkinda = $_POST["hakkinda"];
$facebook = $_POST["facebook"];
$twitter = $_POST["twitter"];
$googleplus = $_POST["googleplus"];
$skype = $_POST["skype"];
$email = $_POST["email"];
$cinsiyet = $_POST['cinsiyet'];
$yetki = $_POST['yetki'];


$djduzenle = $db->update('authme')
			->where('id', $_POST['id'])
            ->set(array(
                 'username' => $username,
				 'password' => $password,
				 'ad' => $ad,
				 'soyad' => $soyad,
				 'dogum' => $dogum,
				 'gorevbasla' => $gorevbasla,
				 'gorevbitir' => $gorevbitir,
				 'profilresmi' => $profilresmi->file_dst_name == '' ? $djbilgi["profilresmi"] : $profilresmi->file_dst_name,
				 'hakkinda' => $hakkinda,
				 'facebook' => $facebook,
				 'twitter' => $twitter,
				 'googleplus' => $googleplus,
				 'skype' => $skype,
				 'email' => $email,
				 'cinsiyet' => $cinsiyet,
				 'yetki' => $yetki
            ));
if ($djduzenle){
echo "<script>
swal({
  title: 'Başarılı!', //haklısın
  text: '".$_POST['ad']." ".$_POST['soyad']." isimli yayıncı güncellendi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
    }
  }
)
</script>";

}
}
?>
<?php
//Haber Düzenle 850*480 / 800*600
if (isset($_POST['haberduzenle'])){
$gorsel = new Upload($_FILES['gorsel']);
$gorsel->allowed = array ( 'image/*' );
   if ( $gorsel->uploaded ) {
	$gorsel->file_new_name_body = seo($haberoku['baslik']);
   $gorsel->Process('upload/haber');
   }
   $gorsel->allowed = array ( 'image/*' );
   $gorsel->image_resize = true; 
   $gorsel->image_ratio_crop = true; 
   $gorsel->image_x = 850; 
   $gorsel->image_y = 480;
   if ( $gorsel->uploaded ) {
	   $gorsel->file_new_name_body = seo($haberoku['baslik']);
   $gorsel->Process('upload/haber/thumb');
   }
   $gorsel->allowed = array ( 'image/*' );
   $gorsel->image_resize = true; 
   $gorsel->image_ratio_crop = true; 
   $gorsel->image_x = 800; 
   $gorsel->image_y = 600;
   if ( $gorsel->uploaded ) {
	   $gorsel->file_new_name_body = seo($haberoku['baslik']);
   $gorsel->Process('upload/haber/anasayfa');
   }

$baslik = $_POST["baslik"];
$etiketler = $_POST["etiketler"];
$keywords = $_POST["keywords"];
$icerik = $_POST["icerik"];
$kategori = $_POST["kategori"];
$yazar = $_POST["yazar"];
$seoetiket = etiket($_POST["etiketler"]);
$seoyazar = etiket($_POST["yazar"]);
$seokategori = etiket($_POST["kategori"]);
$seobaslik = etiket($_POST["baslik"]);


$haberduzenle = $db->update('haberler')
					->where('id', $_GET['id'])
					->set(array(
						'baslik' => $baslik,
						'gorsel' => $gorsel->file_dst_name == '' ? $haberoku["gorsel"] : $gorsel->file_dst_name,
						'etiketler' => $etiketler,
						'keywords' => $keywords,
						'icerik' => $icerik,
						'kategori' => $kategori,
						'yazar' => $yazar,
						'seoetiket' => $seoetiket,
						'seoyazar' => $seoyazar,
						'seokategori' => $seokategori,
						'seobaslik' => $seobaslik
						));
if ($haberduzenle){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Haber güncellendi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>";

}
}
?>
<?php
//Şifre güncelle
$id = $_SESSION['id'];
$sifre = $db->select('authme')
			->where('id', $id)
            ->run(true);

$eskisifre = @$_POST['eskisifre'];

if($eskisifre==$sifre['password']) {
	
	$yenisifre = @$_POST['yenisifre'];
	$sifreguncelle = $db->update('authme')
				->where('id', $id)
				->set(array(
					 'password' => $yenisifre
				));
	
}elseif(@$_POST['yenisifre']) {
	echo "<script>
	swal({
	  title: 'Hata!',
	  text: ' Eski şifre hatalı girildi.',
	  showCancelButton: false,
	  showConfirmButton: true,
	  type: 'error'
	}).then(
	  function () {},
	  // handling the promise rejection
	  function (dismiss) {
		if (dismiss === 'timer') {
		}
	  }
	)
	</script>";
}
		 
if (@$sifreguncelle){
	echo "<script>
	swal({
	  title: 'Başarılı!',
	  text: 'Şifre güncellendi.',
	  showCancelButton: false,
	  showConfirmButton: true,
	  type: 'success'
	}).then(
	  function () {},
	  // handling the promise rejection
	  function (dismiss) {
		if (dismiss === 'timer') {
		}
	  }
	)
	</script>";
}

?>
<?php
//Hesap Ayarları
if (isset($_POST['hesapayarlari'])){
$profilresmi = new Upload($_FILES['profilresmi']);
$profilresmi->allowed = array ( 'image/*' );
$profilresmi->file_new_name_body = seo($bilgiler['ad']);
   if ( $profilresmi->uploaded ) {
   $profilresmi->Process('upload/profil-resmi');
   }
   $profilresmi->allowed = array ( 'image/*' );
   $profilresmi->image_resize = true; 
   $profilresmi->image_ratio_crop = true; 
   $profilresmi->image_x = 668; 
   $profilresmi->image_y = 899;
$profilresmi->file_new_name_body = seo($bilgiler['ad']);
   if ( $profilresmi->uploaded ) {
   $profilresmi->Process('upload/profil-resmi/thumb');
   }

$username = @$_POST["username"];
$ad = @$_POST["ad"];
$soyad = @$_POST["soyad"];
$dogum = @$_POST["dogum"];
$gorevbasla = @$_POST["gorevbasla"];
$gorevbitir = @$_POST["gorevbitir"];
$hakkinda = @$_POST["hakkinda"];
$facebook = @$_POST["facebook"];
$twitter = @$_POST["twitter"];
$googleplus = @$_POST["googleplus"];
$skype = @$_POST["skype"];
$email = @$_POST["email"];
$cinsiyet = @$_POST['cinsiyet'];
$id = $_SESSION["id"];
 
$hesapayarlari = $db->update('authme')
            ->where('id', $id)
            ->set(array(
                 'username' => $username,
				 'ad' => $ad,
				 'soyad' => $soyad,
				 'dogum' => $dogum,
				 'gorevbasla' => $gorevbasla,
				 'gorevbitir' => $gorevbitir,
				 'profilresmi' => $profilresmi->file_dst_name == '' ? $bilgiler["profilresmi"] : $profilresmi->file_dst_name,
				 'hakkinda' => $hakkinda,
				 'facebook' => $facebook,
				 'twitter' => $twitter,
				 'googleplus' => $googleplus,
				 'skype' => $skype,
				 'email' => $email,
				 'cinsiyet' => $cinsiyet
            ));
  

if ($hesapayarlari){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Hesap bilgileri güncellendi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>
<meta http-equiv='refresh' content='200;URL=hesap-ayarlari.php'>";

}
}
?>		
<?php
		//İletişim sil
		$id=$_POST['id'];
		$iletisimsil = $db->delete('yorumlar')
            ->where('id', $id)
            ->done();
		if (isset($_POST['iletisimsil'])){
		echo '<meta http-equiv="refresh" content="0;URL=iletisim-kutusu.php">';
		}
		?>
<?php
		//İstek sil
		$id=$_POST['id'];
		$isteksil = $db->delete('yorumlar')
            ->where('id', $id)
            ->done();
		if (isset($_POST['isteksil'])){
		echo '<meta http-equiv="refresh" content="0;URL=istek-paneli.php">';
		}
		?>
<?php
		//İletişim
if (isset($_POST['iletisimkur'])){
$isim = @$_POST["isim"];
$email = @$_POST["email"];
$istek = @$_POST["istek"];
$yorum = @$_POST["yorum"];
$tarih = @$_POST["tarih"];
$durum = @$_POST["durum"];

$iletisimkur= $db->insert('yorumlar')
            ->set(array(
                 'isim' => $isim,
				 'email' => $email,
				 'istek' => $istek,
				 'yorum' => $yorum,
				 'tarih' => $tarih,
				 'durum' => $durum
            ));
   

if ($iletisimkur){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Mesajınız iletildi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>";

}
}
?>
<?php
		//Haber Yorumları
if (isset($_POST['yorumat'])){
$isim = @$_POST["isim"];
$email = @$_POST["email"];
$yorum = @$_POST["yorum"];
$haber = @$_POST["haber"];
$tarihi = @$_POST["tarihi"];
$onay = @$_POST["onay"];

$yorumat= $db->insert('haberyorum')
            ->set(array(
                 'isim' => $isim,
				 'email' => $email,
				 'yorum' => $yorum,
				 'haber' => $haber,
				 'tarihi' => $tarihi,
				 'onay' => 0
            ));
   

if ($yorumat){
echo "<script>
swal({
  title: 'Başarılı!',
  text: 'Mesajınız iletildi.',
  showCancelButton: false,
  showConfirmButton: true,
  type: 'success'
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
</script>";

}
}
?>

<?php
$sayfa = $_GET['sayfa'];
$sayfa_limiti = $sitebilgi['haberliste'];
if($sayfa == '' || $sayfa == 1)
{
	$sayfa1 = 0;
}else{
$sayfa1  = ($sayfa * $sayfa_limiti) - $sayfa_limiti;
}
$satir_sayisi = $db->query("SELECT * FROM haberler")->rowCount();
					$sayfasorgu = "SELECT * FROM haberler ORDER BY id DESC LIMIT " . $sayfa1 . "," . $sayfa_limiti;
					$sorguhaber = $db->query($sayfasorgu);
?>
