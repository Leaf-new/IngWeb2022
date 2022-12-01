<?php

//Configuracion de la base de datos, hacemos un try catch por si falla que no explote la aplicacion
//y tenemos la conexion en una variable llamada $db

try {
    $db = mysqli_connect(
        "localhost:3307",
        "root",
        "root",
        "futbol"
    );

} catch (mysqli_sql_exception $exception) {
    echo "<pre>";
    echo $exception->getMessage();
    echo "</pre>";
    exit();
}