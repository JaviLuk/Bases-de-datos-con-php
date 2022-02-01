<?php
    //Incluimos el primer fichero y seleccionamos la bd
    include "Ej1_0_conexionBD.php";

    mysqli_select_db($link, 'BD1_TEMA4_FJMG');

    //Hacemos los borrados
    mysqli_query($link, "DELETE FROM Usuario  WHERE Apellido='Gamero'");
    mysqli_query($link, "DELETE FROM Curso  WHERE Nombre='ASGBD'");
    mysqli_query($link, "DELETE FROM Edificio  WHERE Número=1");
    mysqli_query($link, "DELETE FROM Aula  WHERE Número=1");

    //En caso de fallo nos mostrará el error
    echo mysqli_error($link)."\n";
?>