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
	header("Location: iletisim-kutusu.php");
    die("Buraya erişme yetkin yok!");
}
$query = $db->prepare("DELETE FROM yorumlar WHERE id = :id");
$delete = $query->execute(array(
   'id' => $_GET['id']
));
?>
<meta http-equiv="refresh" content="0;URL=iletisim-kutusu.php">
