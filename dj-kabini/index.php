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
?><title>Ana Sayfa | <?php echo $sitebilgi['title']; ?></title>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Ana Sayfa
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Ana Sayfa
                            </li>
                        </ol>
                    </div>
					
                </div>
                <!-- /.row -->
<center>
        <div class="col-lg-12" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?=$bilgiler["ad"];?> <?=$bilgiler["soyad"];?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="<?=$bilgiler["ad"];?> <?=$bilgiler["soyad"];?>" src="<?php echo 'upload/profil-resmi/'.$bilgiler["profilresmi"].'';?>" class="img-circle img-responsive"> </div>
                
                <?php
	if ($bilgiler['yetki']=="0") {
		$aktif = "Yayıncı";
	}else if($bilgiler['yetki']=="1"){
		$aktif = "Yönetici";
	}else if($bilgiler['yetki']=="2"){
		$aktif = "Haber Editörü";
	}
	?>	
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Görev:</td>
                        <td><?php echo $aktif; ?></td>
                      </tr>
                      <tr>
                        <td>Doğum Tarihi:</td>
                        <td><?=$bilgiler["dogum"];?></td>
                      </tr>
                      <tr>
                        <td>Görev Saatleri</td>
                        <td><?=$bilgiler["gorevbasla"];?> - <?=$bilgiler["gorevbitir"];?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Cinsiyet</td>
                        <td><?=$bilgiler["cinsiyet"];?></td>
                      </tr>
                        <tr>
                        <td>Skype</td>
                        <td><?=$bilgiler["skype"];?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:<?=$bilgiler["email"];?>"><?=$bilgiler["email"];?></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div></center>
			
			
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    

</body>

</html>