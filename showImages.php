<?php

try {
    $conexion = new PDO('mysql:host=localhost,port=3306;dbname=criptosquare','root','');
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO:ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO:ERRMODE_WARNING);

    $query = $conexion->query('SELECT')
}


?>