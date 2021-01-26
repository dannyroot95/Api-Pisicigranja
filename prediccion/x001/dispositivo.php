<?php

include_once 'db.php';

class Serie extends DB{
    
    function obtenerDatos(){
        $query = $this->connect()->query('SELECT * FROM pyPrediction');
        return $query;
    }

}

?>