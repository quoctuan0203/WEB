<?php 
	include "config/config.php";
  include ROOT."/include/autoload.php";
 ?>
<script src="jquery-3.2.1.min.js"></script>
<style type="text/css">
	.label{
	color: #0431B4;
	font-weight:bold;
	font-size:19px;	}
	.error{
	color:#F00;
}

</style>
<script type="text/javascript" language="javascript">
$(document).ready(function()
	{
	$('#Test').submit(function(){
	var flag = true;
	var tentg    = $.trim($('#tentg').val());
	if(tentg=='')
	{
		$('#tensach_error').text('Tên sách không được trống');
		flag=false;
	}
	else  $('#tensach_error').text('');
	return flag;
	});
		});

</script>
<form method="post" id="Test" name="Test" enctype="multipart/form-data" action="capnhatsach.php"  > 	
	<label class="label"><u>Tên sách:</u> </label>
	</br>
	<input name="tensach" id="tensach" type="text" size="60" placeholder="Nhập tên sách" />
	<label id="tensach_error" class="error"></label>
	</br>
	<label class="label"><u>Mô tả:</u> </label>
	</br>
	<textarea name="mota" id="mota"  size="60" placeholder="Nhập mô tả" rows="5" cols="62" maxlength="200"></textarea>  
	<label id="tensach_error" class="error"></label>
	</br>
	<label class="label"><u>Giá gốc:</u> </label>
	</br>
	<input name="giagoc" id="giagoc" type="text" size="60" placeholder="Nhập giá gốc" />
	<label id="giagoc_error" class="error"></label>
	</br>
	<label class="label"><u>Giá giảm:</u> </label>
	</br>
	<input name="giagiam" id="giagiam" type="text" size="60" placeholder="Nhập giá giảm" />
	<label id="giagiam_error" class="error"></label>
	</br>
	<label class="label"><u>Mã thể loại:</u> </label>
	</br>
	<?php
			$a= new Theloai();
			$b=$a->getAll_TL(); ?>
	<select name="listtheloat">
		<?php
			foreach ($b as $value) { ?>
				<option value="<?php echo $value['matheloai']; ?>"> <?php echo $value['matheloai']; ?></option>
			<?php } ?>
		?>
	</select>
	
	
	</br>
	<input name="ok" id="submit" type="submit" value="Submit"  class="nut"  />
</form>
   <h1>Danh mục sách </h1>
<?php

	$obj=new Sach();
	$data=$obj->getAll();
	
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"."Mã sách"."</th>";
	echo "<th>"."Tên sách"."</th>";
	echo "<th>"."Mô tả"."</th>";
	echo "<th>"."Giá gốc"."</th>";
	echo "<th>"."Giá giảm"."</th>";
	echo "<th>"."Hình ảnh"."</th>";
	echo "<th>"."Mã nhà xuất bản"."</th>";
	echo "<th>"."Mã thể loại"."</th></tr>";
	foreach ($data as $value) {
		
		echo "<tr><td>".$value["masach"]."</td>";
		echo "<td>".$value["tensach"]."</td>";
		echo "<td>".$value["mota"]."</td>";
		echo "<td>".$value["giagoc"]."</td>";
		echo "<td>".$value["giagiam"]."</td>";
		echo "<td><img src='products-images/".$value["urlhinh"]."'/></td>";
		echo "<td>".$value["manxb"]."</td>";
		echo "<td>".$value["matheloai"]."</td></tr>";
		
	}
	echo "</table>";
if (isset($_POST["ok"]))
	{
		$tentg=isset($_POST["tentg"])?$_POST["tentg"]:false;
		if($tentg !=false)
		{$obj->insertTacGia($tentg);
		header("location:capnhattacgia.php");}
	}
?>
