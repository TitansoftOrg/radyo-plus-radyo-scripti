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
?><title>Top 10 | <?php echo $sitebilgi['title']; ?></title>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Top 10
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Ana Sayfa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-tasks"></i> Top 10
                            </li>
                        </ol>
                    </div>
                </div>
				<div class="table table-responsive">
<table id="exanple" class="table table-striped table-bordered">
      <tr>
		<th width="2%">#</th>
		<th width="8%"><b>Kapak</b></th>
        <td><b>Sanatçı</b></td>
		<td><b>Şarkı</b></td>
        <th width="2%"><b><center><i class="fa fa-pencil-square-o"></center></i></b></th>
      </tr>
<?php
if ($topliste){
  foreach ($topliste as $row){
    
?><tr>		<td><?php echo $row['sira']?></td>
			<td><img src='upload/top10/<?php echo $row['album']?>' width='50' height='25'></td>
			<td><?php echo $row['sanatci']?></td>
			<td><?php echo $row['sarki']?></td>
			<td><?php
		   if($bilgiler["yetki"] == 1){
	echo '
		  <form name="form1" action="top10-duzenle.php" method="POST">
			<input type="hidden" name="id" value="'.$row["id"].'">
			<input type="hidden" name="sira" value="'.$row["sira"].'">
			<input type="hidden" name="album" value="'.$row["album"].'">
			<input type="hidden" name="sarki" value="'.$row["sarki"].'">
			<input type="hidden" name="sanatci" value="'.$row["sanatci"].'">
			<input type="hidden" name="embed" value="'.$row["embed"].'">
			<button class="btn btn-primary btn-xs" type="submit" name="duzenle"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
		   </form>';}		  
		    if($bilgiler["yetki"] != 1){
	echo '<button class="btn btn-primary btn-xs" disabled><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>';
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