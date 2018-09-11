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
?><title>Kategoriler | <?php echo $sitebilgi['title']; ?></title>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Kategoriler
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-list"></i> Kategoriler
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<div class="table table-responsive">
<table id="exanple" class="table table-striped table-bordered">
      <tr>
        <td><b>Kategori adı</b></td>
        <td width="2%"><b>Düzenle</b></td>
        <td width="2%"><b>Sil</b></td>
      </tr>
<?php
if ($kategoriler){
  foreach ($kategoriler as $row){
    
?><tr>
          <td><?php echo $row['kate']?></td>
          <td><?php
		   if($bilgiler["yetki"] != 0){
	echo '
		  <form name="form1" action="kategori-duzenle.php" method="POST">
			<input type="hidden" name="idsi" value="'.$row["idsi"].'">
			<input type="hidden" name="kate" value="'.$row["kate"].'">
			<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
		   </form>';}		  
		    if($bilgiler["yetki"] == 0){
	echo '<button class="btn btn-primary" disabled><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>';
			}
			?>
		  </td>
          <td>
		 <?php if($bilgiler["yetki"] != 0){
	echo '
		  <form name="form2" action="kategori-sil.php" method="POST">
			<input type="hidden" name="idsi" value="'.$row["idsi"].'">
			<button class="btn btn-danger" name="kategorisil" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		   </form>';}
		   if($bilgiler["yetki"] == 0){
	echo ' <button class="btn btn-danger" disabled><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		   ';} ?></td>
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