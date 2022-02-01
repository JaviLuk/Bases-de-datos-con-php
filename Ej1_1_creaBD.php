<?php
    //Incluimos el fichero donde establecemos la conexión
    include "Ej1_0_conexionBD.php";

    //Creamos la base de datos
    $creacion="CREATE DATABASE  BD1_TEMA4_FJMG";
    $resultado=mysqli_query($link, $creacion);

    //En caso de fallo o de éxito nos mostrará el mensaje correspondiente
    if ($resultado) {
        echo "Operación realizada con éxito";
    } else {
        echo "Fallo en la creación de la base de datos";
    }
?>