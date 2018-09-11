<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<script src="login/dj.js"></script>
<link rel="stylesheet" type="text/css" href="login/log.css">
<link rel="stylesheet" type="text/css" href="login/dj.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable( {
		        "language": {
		            "lengthMenu": "_MENU_ Listede kaç adet gözüksün?",
		            "zeroRecords": "Bişey Bulamadım",
		            "info": "Şuan _PAGE_. sayfadasınız. Toplam _PAGES_ adet sayfa var.",
		            "infoEmpty": "No records available",
		            "infoFiltered": "(filtered from _MAX_ total records)",
		            "search": "Arama Yap",
		            "paginate": { "next": "Sonraki", "previous": "Önceki",
					"scrollX":        "200px",
					"scrollCollapse": true,
					"paging":         false
		 }
		        }
		    } );
		} );
		</script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">DJ Kabini</a>
            </div>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
				<?php $header_id = $_SESSION['id'];
$headerbilgi = $db->select('authme')
			->where('id', $header_id)
			->run(TRUE); ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$headerbilgi["ad"];?> <?=$headerbilgi["soyad"];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="hesap-ayarlari.php"><i class="fa fa-fw fa-gear"></i> Hesap Ayarları</a>
                        </li>
						<li>
                            <a href="sifre-degistir.php"><i class="fa fa-fw fa-lock"></i> Şifre Değiştir</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Çıkış Yap</a>
                        </li>
                    </ul>
                </li>
            </ul>