<?php 
class tacgia extends DB{
	function getAll_TG(){
		return $this->query("select * from tacgia");
	}
	function getTacGia($matacgia){
		$arr = array(":T"=> "$matacgia");
		$sql ="select * from sach where matacgia = :T ";
		return $this->query($sql, $arr);
	}
	function insertTacGia($tentacgia){
		$arr = array(":T"=>"$tentacgia");
		$sql="insert into tacgia( tentacgia) ";
		$sql .=" values(:T)";
		$stm = $this->query($sql, $arr);
		//$stm->execute($arr);

		//return 
	}
	function delTacGia($matacgia){
		$sql="delete from tacgia where matacgia='$matacgia'";
		$stm = $this->query($sql, $arr);
		header("location:capnhattacgia.php");
		//$stm->execute($arr);

		//return 
	}
}
?>