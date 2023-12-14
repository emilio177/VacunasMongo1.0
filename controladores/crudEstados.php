<?php
    
    //Metodo CRUD
    class Crud extends Conexion{
        public function mostrarDatos(){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion -> estados;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th -> getMessage();
            }
        }

        //Aqui comienza CRUD de coleccion "Experiencia"
        public function obtenerDocumento($id) {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->estados;
                $datos = $coleccion->findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

            public function insertarDatos($datos){
                try {
                    $conexion = Conexion::conectar();
                    $coleccion = $conexion->estados;
                    $respuesta = $coleccion->insertOne($datos);
                    return $respuesta;
                } catch (\Throwable $th) {
                    return $th->getMessage();
                }
            }
        
            public function eliminar($id){
                try {
                    $conexion = Conexion::conectar();
                    $coleccion = $conexion->estados;
                    $respuesta = $coleccion->deleteOne(array("_id" => new MongoDB\BSON\ObjectId($id)));
                    return $respuesta;
                } catch (\Throwable $th) {
                    return $th->getMessage();
                }
            }

            public function actualizar($id,$datos){
                try {
                    $conexion = Conexion::conectar();
                    $coleccion = $conexion->estados;
                    $respuesta = $coleccion->updateOne(['_id' => new MongoDB\BSON\ObjectId($id)], ['$set' => $datos]);
                    return $respuesta;
                } catch (\Throwable $th) {
                    return $th->getMessage();
                }
            }
      

            //Funcion para los mensajes de alerta
            public function mensajesCrud($mensaje) {
                $msg = '';
    
                if ($mensaje == 'insert') {
                    $msg = 'swal("Excelente!", "Agregado con exito!", "success")';
                } else if ($mensaje == 'update') {
                    $msg = 'swal("Excelente!", "Actualizado con exito!", "info")';
                } else if ($mensaje == 'delete') {
                    $msg = 'swal("Excelente!", "Eliminado con exito!", "warning")';
                }
    
                return $msg;
            }

    }

?>