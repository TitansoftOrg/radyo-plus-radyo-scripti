<?php
require_once "BasicDB.php";
require_once "baglan.php";
require_once "class.upload.php";
session_Start();
if($_SESSION["giris"] == false){
	header("Location: login.php");
    die("Burada olmaman gerekirdi!");
}
include "sayfalar/header.php";
require_once "fonksiyon.php";
include "sayfalar/menu.php";
?><title><?php echo $haberoku['baslik']; ?> Haberini Düzenle | <?php echo $sitebilgi['title']; ?></title>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Haber Düzenle
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Ana Sayfa</a>
                            </li>
							<li><i class="fa fa-folder-open"></i> <a href="haberler.php">Haberler</a></li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Haber Düzenle
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<?php
if($bilgiler["yetki"] == 0){
    die("Buraya erişme yetkin yok!");
}
?>

<script src="ckeditor/ckeditor.js"></script>
 <form action="" method="post" enctype="multipart/form-data">
 <input type="hidden" name="id" value="<?php echo $haberoku['id'] ?>">
	<div class="row">
					<div class="col-md-12">
					
					<div class="col-md-12">
					<div class="form-group">
											<label>Başlık</label>
										 <input type="text" class="form-control" value="<?php echo $haberoku['baslik'] ?>" name="baslik">
										</div>
		</div>
	
	
	<div class="col-md-12">
					<div class="form-group">
					<label>Haber Görseli</label>
					<input type="file" name="gorsel">
		</div>
	</div> 
	<div class="col-md-12">
					<div class="form-group">
					<label>Haber içeriği</label>
						<textarea type="text" name="icerik" id="editor" class="ckeditor form-control" rows="8" required><?php echo $haberoku['icerik'] ?></textarea>
				        
						<script>
				            CKEDITOR.replace('editor');
				            config.extraPlugins = 'uploadimage';
				        </script>				
						</div>
	</div> 
	<div class="col-md-6">
<label>Kategori</label>
					<select name="kategori" class="form-control" aria-describedby="sizing-addon2">
					<option hidden selected value="<?php echo $haberoku['kategori'] ?>"><?php echo $haberoku['kategori'] ?></option>
					<?php
if ($kategoriler){
  foreach ($kategoriler as $row){
    
			echo '<option value="'.$row['kate'].'">'.$row['kate'].'</option>';
									
									
  }
}
?>
</select>
	</div> 
	<div class="col-md-6">
<label>Yazar</label>
					<select name="yazar" class="form-control" aria-describedby="sizing-addon2">
					<option hidden selected value="<?php echo $haberoku['yazar'] ?>"><?php echo $haberoku['yazar'] ?></option>
					<?php
if ($authme){
  foreach ($authme as $row){
    
			echo '<option value="'.$row['ad'].' '.$row['soyad'].'">'.$row['ad'].' '.$row['soyad'].'</option>';
									
									
  }
}
?>
</select>
	</div> 
<div class="col-md-6">
					<div class="form-group">
					<label>Anahtar Kelimeler</label>
					<input type="text" class="form-control" value="<?php echo $haberoku['keywords'] ?>" name="keywords">
		</div>
	</div> 
	
	<div class="col-md-6">
					<div class="form-group">
					<label>Etiketler</label>
					<input type="text" class="form-control" value="<?php echo $haberoku['etiketler'] ?>" name="etiketler">
		</div>
	</div> 
	
	
	<div class="col-md-12">
		<div class="form-group">
		<label><font color="#FFF">Kaydet</font></label>
			<input type="hidden" name="seoetiket" value="<?php echo seo($haberduzenle['etiketler']); ?>">
			<button type="submit" name="haberduzenle" class="btn btn-primary btn-block">Kaydet</button>
		</div>
	</div>
	
	</form>
</div>
									
		</div>

	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    

</body>

</html>
<head>
