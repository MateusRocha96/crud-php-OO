<?php

namespace App\Model;

class Conexao{

	private static $instance;
	public static function getCon(){
		if(!isset(self::$instance)):
			self::$instance = new \PDO('mysql:host=localhost;port=3308;dbname=pdo;charset=utf8','root','');
		endif;
			return self::$instance;

			
	}

}