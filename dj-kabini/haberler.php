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
?><title>Haberler | <?php echo $sitebilgi['title']; ?></title>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Haberler
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-folder-open"></i> Haberler
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<div class="table table-responsive">
<table id="exanple" class="table table-striped table-bordered">
      <tr>
        <td><b>Başlık</b></td>
        <td><b>Kategori</b></td>
		<td><b>Etiketler</b></td>
		<td><b>Tarih</b></td>
        <td><b>Yazar</b></td>
        <td width="2%"><b>Düzenle</b></td>
        <td width="2%"><b>Sil</b></td>
      </tr>
	  
<?php
if ($haberadmin){
  foreach ($haberadmin as $row){
    ?>
		<tr>
          <td><?php echo $row['baslik']; ?></td>
          <td><?php echo $row['kategori']; ?></td>
		  <td><?php echo $row['etiketler'] ?></td>
		  <td><?php echo $row['tarih'] ?></td>
          <td><?php echo $row['yazar']?></td>
          <td>
		  <?php
		   if($bilgiler["yetki"] != 0){ ?>
			<a href="haber-duzenle.php?id=<?=$row['id']?>"><button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
</a>
		  </form>
<?php		  
		   }
		   
		   if($bilgiler["yetki"] == 0){
			   echo '<button class="btn btn-primary" disabled><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>';
		   }
		   ?>
		  </td>
	
          <td>
		  <?php if($bilgiler["yetki"] != 0){
	echo '<form name="form2" action="haber-sil.php" method="POST">
			<input type="hidden" name="id" value="'.$row["id"].'">
			<button class="btn btn-danger" name="habersil" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		  </form>';}
		  
		  if($bilgiler["yetki"] == 0){
			   echo '<button class="btn btn-danger" disabled><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>';
		   
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