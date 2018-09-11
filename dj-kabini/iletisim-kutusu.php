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
?><title>İletişim Kutusu | <?php echo $sitebilgi['title']; ?></title>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            İletişim Kutusu
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-paper-plane"></i> İletişim Kutusu
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
		<td width="20%"><b>Başlık</b></td>
        <td width="38%"><b>Yorum</b></td>
        <td width="10%"><b>Tarih</b></td>
        <td width="2%"><b>Sil</b></td>
      </tr>
<?php
if ($iletisim){
  foreach ($iletisim as $row){
    ?>
		<tr>
          <td><?php echo $row['isim'] ?></td>
          <td><?php echo $row['email'] ?></td>
		  <td><?php echo $row['istek'] ?></td>
          <td><?php echo $row['yorum'] ?></td>
          <td><?php echo  $row['tarih'] ?></td>
          <td><?php
		  
		  if($bilgiler["yetki"] == 1){
	echo '<form name="form2" action="" method="POST">
			<input type="hidden" name="id" value="'.$row["id"].'">
			<button class="btn btn-danger" name="iletisimsil" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
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
