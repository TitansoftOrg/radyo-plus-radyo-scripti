<ul>
<?php
if ($kategoriler){
  foreach ($kategoriler as $row){
    
?>
<li><a href="/kategori/<?php echo seo($row['kate']); ?>"><?php echo $row["kate"]; ?></a></li> <?php } } ?> </ul>