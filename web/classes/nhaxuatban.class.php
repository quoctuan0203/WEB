<?php 
class nhaxuatban extends DB{
	function getAll_NXB(){
		return $this->query("select * from nhaxuatban");
	}
	function getTacGia($manxb){
		$arr = array(":T"=> "$manxb");
		$sql ="select * from sach where manxb = :T ";
		return $this->query($sql, $arr);
	}
	function insertNhaXuatBan($tennxb){
		$arr = array(":T"=>"$tennxb");
		$sql="insert into nhaxuatban( tennxb) ";
		$sql .=" values(:T)";
		$stm = $this->query($sql, $arr);
	}
}
?>