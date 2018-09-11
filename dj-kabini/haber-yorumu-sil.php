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
   header("Location: haber-yorumlari.php");
   die("Buraya erişme yetkin yok!");
}
$id=$_POST['idsi'];
$query = $db->delete('haberyorum')
            ->where('idsi', $id)
            ->done();
   
if ( $query ){
  echo '<meta http-equiv="refresh" content="0;URL=haber-yorumlari.php">';
}else {
	echo "Haber yorumu silinemedi bir hata oluştu.";
}
?>