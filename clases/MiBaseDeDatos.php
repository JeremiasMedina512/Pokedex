<?php

class MiBaseDeDatos
{

    public function __construct($host, $user, $pass, $db)
    {
        $this->conexion = new mysqli($host,$user,$pass,$db);
    }

    public function query($sql){
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function __destruct(){
        $this->conexion->close();
    }
}