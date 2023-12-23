<?php

class ModelsCursos extends Conectar{

    public function get_cursosDestacados(){
    
       $conexion = parent::Conexion();
       parent::set_names();

       $sql = "SELECT * FROM tm_curso WHERE cur_est = 1 AND cur_desta = 1 ";
       $sql = $conexion->prepare($sql);
       $sql->execute();

       return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_cursos(){
    
        $conexion = parent::Conexion();
        parent::set_names();
 
        $sql = "SELECT * FROM tm_curso WHERE cur_est = 1 AND cur_desta = 0 ";
        $sql = $conexion->prepare($sql);
        $sql->execute();
 
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
     }

     /* TODO:mostrar el curso por etiqueta */
    public function get_curso_x_etiqueta($item){
        
        $conectar = parent::Conexion();
        parent::set_names();
      
        $sql = "SELECT * FROM tm_curso_detalle WHERE cur_id = ? AND est = 1";
        $sql =  $conectar->prepare($sql);
        $sql->bindValue(1,$item);
        $sql->execute();

        return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);

    }

}