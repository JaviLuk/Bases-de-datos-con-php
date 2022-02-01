<?php
    //Incluimos el primer fichero y seleccionamos la bd
    include "Ej1_0_conexionBD.php";

    mysqli_select_db($link, 'BD1_TEMA4_FJMG');

    //Hacemos las actualizaciones
    mysqli_query($link, "UPDATE Usuario SET Apellido='Macho' WHERE Apellido='de la Santísima'");
    mysqli_query($link, "UPDATE Curso SET Nombre='SAD' WHERE Nombre='SRI'");
    mysqli_query($link, "UPDATE Edificio SET Número=5 WHERE Número=3");
    mysqli_query($link, "UPDATE Aula SET Número=7 WHERE Número=4");

    //En caso de fallo nos mostrará los errores
    echo mysqli_error($link)."\n";
?>