<?php

include_once 'db.php';

class Serie extends DB{
    
    function obtenerDatos(){
        $query = $this->connect()->query('SELECT * FROM x001');
        return $query;
    }

}

?>