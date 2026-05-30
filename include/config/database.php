<?php

function conectarDB():mysqli{
    $db = new mysqli("localhost","root","1234", "admin_restaurant");
    if($db -> connect_error){
        echo "Error de conexion: " . $db -> connect_error;
        exit;
    }
    return $db;
}