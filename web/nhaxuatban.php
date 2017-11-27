<?php
  $obj = new nhaxuatban();
  $data = $obj -> getAll_NXB();
  foreach($data as $arr){ 
?>
<li> <a href="nhaxuatban.php?manxv=<?php echo $arr['manxb']; ?>"><?php echo $arr['tennxb']; ?></a>  </li>
<?php } ?>