<?php

class Lenguajemodels extends Conectar{

    public function get_lenguaje(){
        
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "SELECT * FROM tm_lenguaje WHERE est = 1";
        $sql = $conectar->prepare($sql);
        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

}