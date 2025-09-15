<?php
    include "../vendor/adodb/adodb-php/adodb.inc.php";

    function conexion(){
        //definir el driver de conexion
        $conector=NewADOConnection('mysql');

        //credenciales
        $host="localhost";
        $user="root";
        $pass="";
        $bd="cineapp";

        //abrir la conexion
        $conector->Connect($host,$user,$pass,$bd);
        return $conector;
    }
?>