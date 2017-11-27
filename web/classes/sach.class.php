<?php
class sach extends DB{
	function getAll(){
		return $this->query("select * from sach");
	}
	function getSach($masach){
		$arr = array(":M" => "$masach");
		$sql = "select * from sach where masach = :M";
		return $this->query($sql,$arr);
	}
	function getsach_tl($matheloai){
		$arr = array(":TL" => "$matheloai");
		$sql = "select * from sach where matheloai = :TL";
		return $this -> query($sql,$arr);
	}
	function getsach_tg($matacgia){
		$arr = array(":M" => "$matacgia");
		$sql = "SELECT masach
				FROM sachtacgia 
				WHERE  matacgia= :M";
		return $this -> query($sql,$arr);	
	}
	function gettenTG_Sach($masach){
		$arr = array(":M" => "$masach");
		$sql = "SELECT tentacgia 
				FROM tacgia 
				WHERE tacgia.matacgia IN  (SELECT matacgia 
											FROM sachtacgia 
											WHERE sachtacgia.masach= :M )";
		return $this -> query($sql,$arr);									
	}
	function getnxb_sach($manxb){
		$arr = array(":N" => "$manxb");
		$sql = "select * from nhaxuatban where manxb = :N";
		return $this -> query($sql,$arr);
	}
}
?>