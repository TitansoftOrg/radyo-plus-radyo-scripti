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
?><title>Programlar | <?php echo $sitebilgi['title']; ?></title>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Programlar
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-calendar"></i> Programlar
                            </li>
                        </ol>
                    </div>
					
                </div>
                <!-- /.row -->

			<div class="table table-responsive">
	<table id="exanple" class="table table-striped table-bordered">
      <tr>
        <td width="80%"><b>Program adı</b></td>
        <td width="10%"><b><center>Düzenle</center></b></td>
        <td width="10%"><b><center>Sil</center></b></td>
      </tr>
<?php
if ($programlar){
  foreach ($programlar as $row){
    ?>
			<tr>
          <td><?php echo $row['progadi'] ?></td>
          <td><center>
		   <?php
		   if($bilgiler["yetki"] == 1){
	echo '
		  <form name="form1" action="program-duzenle.php" method="POST">
			<input type="hidden" name="id" value="'.$row["id"].'">
			<input type="hidden" name="progadi" value="'.$row["progadi"].'">
			<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
		   </form>	';}
		   if($bilgiler["yetki"] != 1){
		   echo '		   <button class="btn btn-primary" disabled><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>';}
		  ?></center>
		  </td>
		  <td><center>
		  <?php
		   if($bilgiler["yetki"] == 1){
	echo '<form name="form2" action="program-sil.php" method="POST">
			<input type="hidden" name="id" value="'.$row["id"].'">
			<button class="btn btn-danger" name="programsil" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
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
			
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    

</body>

</html>