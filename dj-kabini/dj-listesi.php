<?php
require_once "BasicDB.php";
require_once "baglan.php";
session_Start();
if($_SESSION["giris"] == false){
	header("Location: login.php");
    die("Burada olmaman gerekirdi!");
}
include "sayfalar/header.php";
require_once "fonksiyon.php";
include "sayfalar/menu.php";
?><title>DJ Listesi | <?php echo $sitebilgi['title']; ?></title>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            DJ Listesi
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i> DJ Listesi
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<div class="table table-responsive">
	<table id="exanple" class="table table-striped table-bordered">
      <tr>
        <td><b>Kullanıcı adı</b></td>
        <td><b>Ad</b></td>
		<td><b>Soyad</b></td>
        <td><b>E-mail</b></td>
        <td><b><center>Düzenle</center></b></td>
        <td><b><center>Sil</center></b></td>
      </tr>
<?php
if ($authme){
  foreach ($authme as $row){
?>
		<tr>
          <td><?php echo $row['username'] ?></td>
          <td><?php echo $row['ad'] ?></td>
		  <td><?php echo $row['soyad'] ?></td>
          <td><?php echo $row['email'] ?></td>
          <td><center>
		  <?php
		   if($bilgiler["yetki"] == 1){
	echo '
		  <form name="form1" action="dj-duzenle.php" method="POST">
			<input type="hidden" name="id" value="'.$row["id"].'">
			<input type="hidden" name="username" value="'.$row["username"].'">
			<input type="hidden" name="password" value="'.$row["password"].'">
			<input type="hidden" name="ad" value="'.$row["ad"].'">
			<input type="hidden" name="soyad" value="'.$row["soyad"].'">
			<input type="hidden" name="email" value="'.$row["email"].'">
			<input type="hidden" name="facebook" value="'.$row["facebook"].'">
			<input type="hidden" name="twitter" value="'.$row["twitter"].'">
			<input type="hidden" name="googleplus" value="'.$row["googleplus"].'">
			<input type="hidden" name="hakkinda" value="'.$row["hakkinda"].'">
			<input type="hidden" name="profilresmi" value="'.$row["profilresmi"].'">
			<input type="hidden" name="dogum" value="'.$row["dogum"].'">
			<input type="hidden" name="gorevbasla" value="'.$row["gorevbasla"].'">
			<input type="hidden" name="gorevbitir" value="'.$row["gorevbitir"].'">
			<input type="hidden" name="cinsiyet" value="'.$row["cinsiyet"].'">
			<input type="hidden" name="skype" value="'.$row["skype"].'">
			<input type="hidden" name="yetki" value="'.$row["yetki"].'">
			<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
		   </form>	';}	  
		  
		   if($bilgiler["yetki"] != 1){
		   echo '	<button class="btn btn-primary" disabled><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> ';}
		   ?></center>
		  </td>
          <td><center>
		  <?php
		   if($bilgiler["yetki"] == 1){
	echo '
		  <form name="form2" action="dj-sil.php" method="POST">
			<input type="hidden" name="id" value="'.$row["id"].'">
			<button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		   </form>';}
		   if($bilgiler["yetki"] != 1){
		   echo '<button class="btn btn-danger" disabled><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>';}
		   ?></center>
		  </td>
        </tr>
		<?php
  }
}

?>	
    </table>
	<?php

if($bilgiler["yetki"] != 1){
    echo "*Bu alanda düzenleme yetkiniz bulunmadığı için sadece görüntüleyebilirsiniz!";
}

?>
            </div></div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    

</body>

</html>