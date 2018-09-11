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
?><title>Haber Yorumları | <?php echo $sitebilgi['title']; ?></title>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Haber Yorumları
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-comment"></i> Haber Yorumları
                            </li>
                        </ol>
                    </div>
					
                </div>
                <!-- /.row -->
		<div class="table table-responsive">
	<table id="exanple" class="table table-striped table-bordered">
      <tr>
        <td width="15%"><b>İsim</b></td>
		<td width="20%"><b>Yorum</b></td>
        <td width="38%"><b>Haber</b></td>
        <td width="1%"><b>Onay</b></td>
		<td width="5%"><b>Tarih</b></td>
		<td width="2%"><b>Düzenle</b></td>
		<td width="2%"><b>Onayla</b></td>
        <td width="2%"><b>Sil</b></td>
      </tr>
<?php
if ($yorumlistele){
  foreach ($yorumlistele as $row){
    ?>
		<tr>
          <td><?php echo $row['isim'] ?></td>
		  <td><?php echo $row['yorum'] ?></td>
          <td><?php echo $row['baslik'] ?></td>
          <td>
		  <?php
	if ($row['onay']=="1") {
		$durumu = '<font color="green"><i class="glyphicon glyphicon-ok"></i></font>';
	}else if($row['onay']=="0"){
		$durumu = '<font color="red"><i class="glyphicon glyphicon-remove"></i></font>';
	}
	?>
	<center><?php echo $durumu ?></center></td>
		  <td><?php echo $row['tarihi'] ?></td>
		  <td><center>
		  <?php
		if($bilgiler["yetki"] != 0){
		echo '<form name="form2" action="haber-yorumu-duzenle.php" method="POST">
			<input type="hidden" name="idsi" value="'.$row["idsi"].'">
			<input type="hidden" name="isim" value="'.$row["isim"].'">
			<input type="hidden" name="email" value="'.$row["email"].'">
			<input type="hidden" name="yorum" value="'.$row["yorum"].'">
			<input type="hidden" name="onay" value="'.$row["onay"].'">
			<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
		   </form>';
		  }  
 if($bilgiler["yetki"] == 0){
	echo '<button class="btn btn-primary" disabled><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
		  </form>';
}
		  ?></center></td>
		  <td><center><?php
		  if($row["onay"] == 0){
		  if($bilgiler["yetki"] != 0){
	echo '<form name="form2" action="haber-yorumu-onayla.php" method="POST">
			<input type="hidden" name="idsi" value="'.$row["idsi"].'">
			<input type="hidden" name="onay" value="'.$row["onay"].'">
			<button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
		   </form>';
		  } } ?>
<?php
		  if($row["onay"] == 1){
		  if($bilgiler["yetki"] != 0){
	echo '<form name="form2" action="haber-yorumu-kaldir.php" method="POST">
			<input type="hidden" name="idsi" value="'.$row["idsi"].'">
			<input type="hidden" name="onay" value="'.$row["onay"].'">
			<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		   </form>';
		  } } ?>		  <?php 
	if($row["onay"] == 0){
	if($bilgiler["yetki"] == 0){
	echo '<button class="btn btn-success" disabled><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
		  </form>';
	}}
		  ?> <?php 
	if($row["onay"] == 1){
	if($bilgiler["yetki"] == 0){
	echo '<button class="btn btn-warning" disabled><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		  </form>';
	}}
		  ?></center></td>
          <td><center><?php
		  
		  if($bilgiler["yetki"] != 0){
	echo '<form name="form2" action="haber-yorumu-sil.php" method="POST">
			<input type="hidden" name="idsi" value="'.$row["idsi"].'">
			<button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
		   </form>';
}
 if($bilgiler["yetki"] == 0){
	echo '<button class="btn btn-danger" disabled><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
		  </form>';
}
		  ?></center></td>
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
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    

</body>

</html>
