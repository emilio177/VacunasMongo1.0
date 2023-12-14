<?php

    require_once "../vendor/autoload.php";

#Conexion a la base de datos
    class Conexion{
        public function conectar(){
            try {
                $servidor = "127.0.0.1"; #IP lookback
                $usuario = "mongoadmin";
                $password = "123456";
                $baseDatos = "vacunas";
                $puerto = "27017"; #puerto default para la conexion

                $cadenaConexion = "mongodb://" . $usuario . ":" . 
                                                $password . "@" .
                                                $servidor . ":" .
                                                $puerto . "/" .
                                                $baseDatos;

                $cliente = new MongoDB\Client($cadenaConexion);
                return $cliente ->selectDatabase($baseDatos);
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }

    
    //$objeto = new Conexion();
    //var_dump($objeto->conectar());
?>