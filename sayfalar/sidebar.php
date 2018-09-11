<div class="col-md-3">
					<?php
		   if($oge1["aktif"] == 1){ ?>
					<div class="sidebar-widget">
						<h4 class="sidebar-title"><?php echo $oge1["baslik"]; ?></h4>
						<?php if($oge1["id"] == 2){ 
	include "kategoriler.php"; 
	}else {
	 echo $oge1["icerigi"]; 
	 } ?>
                        </div>
						<?php } ?>
						<?php
		   if($oge2["aktif"] == 1){ ?>
					<div class="sidebar-widget">
						<h4 class="sidebar-title"><?php echo $oge2["baslik"]; ?></h4>
						<?php if($oge2["id"] == 2){ 
	include "kategoriler.php"; 
	}else {
	 echo $oge2["icerigi"]; 
	 } ?>
 </div>
						<?php } ?><?php
		   if($oge3["aktif"] == 1){ ?>
					<div class="sidebar-widget">
						<h4 class="sidebar-title"><?php echo $oge3["baslik"]; ?></h4>
						<?php if($oge3["id"] == 2){ 
	include "kategoriler.php"; 
	}else {
	 echo $oge3["icerigi"]; 
	 } ?>
  </div>
						<?php } ?><?php
		   if($oge4["aktif"] == 1){ ?>
					<div class="sidebar-widget">
						<h4 class="sidebar-title"><?php echo $oge4["baslik"]; ?></h4>
						<?php if($oge4["id"] == 2){ 
	include "kategoriler.php"; 
	}else {
	 echo $oge4["icerigi"]; 
	 } ?>
 </div>
						<?php } ?><?php
		   if($oge5["aktif"] == 1){ ?>
					<div class="sidebar-widget">
						<h4 class="sidebar-title"><?php echo $oge5["baslik"]; ?></h4>
						<?php if($oge5["id"] == 2){ 
	include "kategoriler.php"; 
	}else {
	 echo $oge5["icerigi"]; 
	 } ?>
</div>
						<?php } ?>
						</div>
				</div>
            </div>