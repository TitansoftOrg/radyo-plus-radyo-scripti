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
?><title>İstek Paneli | <?php echo $sitebilgi['title']; ?></title>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            İstek Paneli
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-list"></i> İstek Paneli
                            </li>
                        </ol>
                    </div>
					
                </div>
                <!-- /.row -->
		<div class="table table-responsive">
	<table id="exanple" class="table table-striped table-bordered">
      <tr>
        <td width="15%"><b>İsim</b></td>
        <td width="15%"><b>Email</b></td>
		<td width="34%"><b>İstek</b></td>
        <td width="24%"><b>Yorum</b></td>
        <td width="10%"><b>Tarih</b></td>
        <td width="2%"><b>Sil</b></td>
      </tr>
	  
<?php
if ($yorumlar){
  foreach ($yorumlar as $row){


?>	
<tr>
          <td><?php echo $row['isim'] ?></td>
          <td><?php echo $row['email'] ?></td>
		  <td><?php echo $row['istek'] ?></td>
          <td><?php echo $row['yorum'] ?></td>
          <td><?php echo $row['tarih'] ?></td>
          <td>
		  
		  <?php
		  
		  if($bilgiler["yetki"] == 1){
	echo '<form name="form2" action="istek-paneli.php" method="POST">
			<input type="hidden" name="id" value="'.$row["id"].'">
			<button class="btn btn-danger" name="isteksil" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		  </form>';
}
 if($bilgiler["yetki"] != 1){
	echo '<button class="btn btn-danger" disabled><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		  </form>';
}
		  ?>
		  </td>
        </tr>
		<?php
  }
}
?>
    </table>
            <!-- /.container-fluid -->
<?php

if($bilgiler["yetki"] != 1){
    echo "*Bu alanda düzenleme yetkiniz bulunmadığı için sadece görüntüleyebilirsiniz!";
}

?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    

</body>

</html>
