<?php
class Conexion {
	private $host =  "localhost";
	private $usuario =  "root";
	private $clave = "";
	private $bd = "crud_poo";
	private $conn;

	public function __construct()
	{
	    $this->conn = mysqli_connect($this->host, $this->usuario, $this->clave, $this->bd);
	    if (mysql_error())
	     {
	        printf("error en la conexion a la base de datos: %d", mysqli_connect_error());
	        exit();
	    }
	    else
	    {
	        print "conexion exitosa<br>";
	    }
	}
	public function consultaSimple($sql){
		mysqli_query($sql);
	}

	public function consultaRetorno($sql){
		$consulta = mysqli_query($sql);
		return $consulta;
	}


}

 ?>﻿