<?php
require_once "BasicDB.php";
require_once "baglan.php"; 

session_Start();
if($_SESSION["giris"] == false){
	header("Location: login.php");
    die("Burada olmaman gerekirdi!");
}
$uye_id = $_SESSION['id'];
$bilgiler = $db->select('authme')
			->where('id', $uye_id)
			->run(TRUE);
if($bilgiler["yetki"] == 0){
	header("Location: haberler.php");
   die("Buraya erişme yetkin yok!");
}
$id=$_POST['id'];
$query = $db->delete('haberler')
            ->where('id', $id)
            ->done();
   
if ( $query ){
  echo '<meta http-equiv="refresh" content="0;URL=haberler.php">';
}else {
	echo "Haber silinemedi bir hata oluştu.";
}
?>

