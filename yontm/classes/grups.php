<?php

class Grup{
 
	private $db;
 
public function __construct($database) {
	    $this->db = $database;
}
public function login($username, $password) {
 
	$query = $this->db->prepare("SELECT `sifre`, `id` FROM `ynt_admin` WHERE `kullanici` = ?");
	$query->bindValue(1, $username);
	
	try{
		
		$query->execute();
		$data 				= $query->fetch();
		$stored_password 	= $data['sifre'];
		$id 				= $data['id'];
		
		#hashing the supplied password and comparing it with the stored hashed password.
		if($stored_password === $password){
			return $id;	
		}else{
			return false;	
		}
 
	}catch(PDOException $e){
		die($e->getMessage());
	}
}

}
?>