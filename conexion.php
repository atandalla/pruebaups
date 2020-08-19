<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=remotemysql.com;dbname=yEOttoeeI4','yEOttoeeI4','Xnlm0BCzme',$pdo_options);
			return self::$conexion;
		}		
	} 
?>