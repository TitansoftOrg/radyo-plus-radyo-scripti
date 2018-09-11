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
if($bilgiler["yetki"] != 1){
   header("Location: kategoriler.php");
   die("Buraya erişme yetkin yok!");
}
$id=$_POST['id'];
$query = $db->delete('kategoriler')
            ->where('id', $id)
            ->done();
   
if ( $query ){
  echo '<meta http-equiv="refresh" content="0;URL=kategoriler.php">';
}else {
	echo "Kategori silinemedi bir hata oluştu.";
}
?>

