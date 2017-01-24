<?php

	include_once('Conexion.php');
	class Estudiantes{

		#Atributos
		private $id;
		private $cedula;
		private $nombre;
		private $apellido;
		private $telefono;
		private $edad;
		private $promedio;
		private $fecha;

		private $con;
		
		#Metodos

		public function __construct()
		{
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function crear(){
			$sql = "SELECT * from estudiantes where cedula='{$this->cedula}'";
			$resultado = $this->con->consultaRetorno($sql2);
			
			$sql = "INSERT INTO estudiantes (cedula, nombre, apellido, telefono, edad, promedio, fecha) VALUE (
				'{$this->cedula}','{$this->nombre},'{$this->apellido}','{$this->telefono}','{$this->edad}','{$this->promedio}',NOW())";
			$this->con->consultaSimple($sql);
		}
	}

?>