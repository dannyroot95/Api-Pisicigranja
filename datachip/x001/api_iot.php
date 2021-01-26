<?php

include_once 'dispositivo.php';

class ApiIot{


    function getAll(){
        $serie = new serie();
        $iot = array();
        $iot["data"] = array();

        $res = $serie->obtenerDatos();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "id" => $row['id'],
                    "temperatura" => $row['temperatura'],
                    "ph" => $row['ph'],
                    "turbidez" => $row['turbidez'],
                    "oxigeno" => $row['oxigeno'],
                );
                array_push($iot["data"], $item);
            }
        
            echo json_encode($iot);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
}

?>