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
?><title>Sağ Menü Ayarları | <?php echo $sitebilgi['title']; ?></title>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Sağ Menü Ayarları
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-menu-hamburger"></i> Sağ Menü Ayarları
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<div class="table table-responsive">
<table id="exanple" class="table table-striped table-bordered">
      <tr>
		<td width="1%"><b>#</b></td>
        <td><b>Menü Adı</b></td>
		<td><b>Durum</b></td>
		<td><b>Aktif/Pasif</b></td>
        <td width="2%"><b>Düzenle</b></td>
      </tr>
	 
<?php
if ($sidebarliste){
  foreach ($sidebarliste as $row){
    
?>
 <?php
	if ($row['aktif']=="1") {
		$durumyaz = "Aktif";
	}else if($row['aktif']=="0"){
		$durumyaz = "Pasif";
	}
	?>	
<tr>
          <td><?php echo $row['sira']?></td>
		  <td><?php echo $row['baslik']?></td>
		  <td><?php echo $durumyaz; ?></td>
		  <td width="10%"><center><?php
		  if($row["aktif"] == 0){
		  if($bilgiler["yetki"] != 0){
	echo '<form name="form2" action="sidebar-aktiflestir.php" method="POST">
			<input type="hidden" name="id" value="'.$row["id"].'">
			<input type="hidden" name="aktif" value="'.$row["aktif"].'">
			<button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Aktifleştir</button>
		   </form>';
		  } } ?>
<?php
		  if($row["aktif"] == 1){
		  if($bilgiler["yetki"] != 0){
	echo '<form name="form2" action="sidebar-pasiflestir.php" method="POST">
			<input type="hidden" name="id" value="'.$row["id"].'">
			<input type="hidden" name="aktif" value="'.$row["aktif"].'">
			<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Pasifleştir</button>
		   </form>';
		  } } ?>		  <?php 
	if($row["aktif"] == 0){
	if($bilgiler["yetki"] == 0){
	echo '<button class="btn btn-success" disabled><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
		  </form>';
	}}
		  ?> <?php 
	if($row["aktif"] == 1){
	if($bilgiler["yetki"] == 0){
	echo '<button class="btn btn-warning" disabled><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		  </form>';
	}}
		  ?></center></td>
          <td><?php
		   if($bilgiler["yetki"] == 1){
	echo '<a href="sidebar-duzenle.php?id='.$row['id'].'"><button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></a> ';}		  
		    if($bilgiler["yetki"] != 1){
	echo '<button class="btn btn-primary" disabled><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>';
			}
			?>
		  </td>
        </tr>
	<?php
	
  }
}
?>
    </table>
	<?php

if($bilgiler["yetki"] == 0){
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