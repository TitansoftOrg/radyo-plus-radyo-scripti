<?php
error_reporting(0);
require_once "BasicDB.php";
require_once "baglan.php";
session_start();
if($_SESSION["giris"] == true){
	header("Location: index.php");
    die("Burada olmaman gerekirdi!");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="login/log.js"></script>
<link rel="stylesheet" type="text/css" href="login/log.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="sweetalert-master/dist/sweetalert.css">
<script src="js/jquery.js"></script>
<script src="sweetalert-master/dist/sweetalert.min.js"></script>
    <title>Giriş yap</title>
	<style type="text/css">
	.yuvarla{ 
	border-radius: 100px;
    margin: -2px -6px -10px;
	}
	</style>
</head>
<body>
<?php 

//Giriş yap

if($_POST){
	session_start();
	$user=$_POST["username"];
	$pass=$_POST["password"];
	
	$cek = $db->prepare("SELECT * FROM authme WHERE username=? AND password=?");
	$cek->Execute(array($user,$pass));
	$girisyap = $cek->fetch();
	
	if($girisyap){
		$_SESSION["giris"] = "true";
		$_SESSION["id"] = $girisyap["id"];
		echo ' <meta http-equiv="refresh" content="0;URL=index.php">';

	}else {
		echo "<script>
$(function() {
sweetAlert('Hata...', 'Kullanıcı adı veya parola hatalı!!', 'error'); 
})
</script>";
	}
}
?>
<div class="container">
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"><img src="upload/img/admin.png" class="yuvarla" width="100px"></div>
            <div class="form-box">
                <form action="login.php" method="post">
                    <input name="username" type="text" id="username" placeholder="Kullanıcı Adı">
                    <input name="password" type="password" id="password" placeholder="Parola">
                    <button class="btn btn-info btn-block login" name="girisyap" type="submit">Giriş yap</button>
                </form>
            </div>
        </div>
        
</div>
