<?php

    //Introducimos como variables los datos de host, usuario y contraseña
    $host='localhost';
    $user='root';
    $pwd='Examen IAW';

    //Creamos la conexión
    $link=mysqli_connect($host, $user, $pwd);

    //En el caso de hubiera un fallo nos lo notificaría
    if (!$link) {
        die('Error de Conexión (' . mysqli_connect_error() . ') ' . mysqli_connect_error());
        }

    //En caso contrario nos mostraría un mensaje de éxito
    echo 'Conexión realizada satisfactoriamente ' . mysqli_get_host_info($link) . "\n";
?>