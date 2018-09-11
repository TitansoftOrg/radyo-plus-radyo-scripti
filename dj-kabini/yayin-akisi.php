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
?>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<title>Yayın Akışı | <?php echo $sitebilgi['title']; ?></title>       
	   <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Yayın Akışı
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-headphones"></i> Yayın Akışı
                            </li>
                        </ol>
                    </div>
					
                </div>
                <!-- /.row -->
				
				
				<div class="table table-responsive">
<table id="exanple" class="table table-striped table-bordered">
                <thead>
                    <tr>
						<th>Gün</th>
                        <th>Yayın Saati</th>
						<th>Program Adı</th>
						<th>Yayıncı</th>
						<th><center>Düzenle</center></th>
						<th><center>Sil</center></th>
                    </tr>
                </thead>
                
                <tbody>
				 
				 <?php
if ($yayinakisi){
  foreach ($yayinakisi as $row){
	  ?>
                   <tr>
					  <td><?php echo $row['gun'] ?></td>
					  <td><?php echo $row['baslangic'] ?> - <?php echo  $row['bitis'] ?></td>
					  <td><?php echo $row['program'] ?></td>
					  <td><?php echo $row['yayinci'] ?></td>
					  <td><center>
					  <?php
		   if($bilgiler["yetki"] == 1){
	echo '
		  <form name="form1" action="duzenle.php" method="POST">
			<input type="hidden" name="id" value="'.$row["id"].'">
			<input type="hidden" name="gun" value="'.$row["gun"].'">
			<input type="hidden" name="baslangic" value="'.$row["baslangic"].'">
			<input type="hidden" name="bitis" value="'.$row["bitis"].'">
			<input type="hidden" name="program" value="'.$row["program"].'">
			<input type="hidden" name="yayinci" value="'.$row["yayinci"].'">
			<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
		   </form>	';}	  
		  if($bilgiler["yetki"] != 1){
	echo '<button class="btn btn-primary" disabled><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>';
			} ?></center>
		  </td>
					  <td><center>
					  <?php
		   if($bilgiler["yetki"] == 1){
	echo '
		  <form name="form2" action="yayin-sil.php" method="POST">
			<input type="hidden" name="id" value="'.$row["id"].'">
			<button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		   </form>';}
		   if($bilgiler["yetki"] != 1){
	echo '<button class="btn btn-danger" disabled><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>';
			} ?>
		  </td>
						</tr></center>
						<?php
  }
}?>
                </tbody>
            </table>
			
    </table>
	<?php

if($bilgiler["yetki"] != 1){
    echo "*Bu alanda düzenleme yetkiniz bulunmadığı için sadece görüntüleyebilirsiniz!";
}

?>
            <!-- /.container-fluid -->
</div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    

</body>

</html>
