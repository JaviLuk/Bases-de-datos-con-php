<?php
    //Incluimos el primer fichero y seleccionamos la bd
    include "Ej1_0_conexionBD.php";

    mysqli_select_db($link, 'BD1_TEMA4_FJMG');

    //Las búsquedas se encuentran comentadas para poder visualizarlas una a una

    //Esta primera búsqueda nos devuelve 1 única columna y tupla
/*
    $resultado=mysqli_query($link,"SELECT * FROM Usuario");
    

    while($tupla = mysqli_fetch_row($resultado)) {
        echo $tupla[0]. "\n " ;
        }
*/

    //Esta búsqueda nos devuelve varias columnas y tuplas
/*
        $resultado=mysqli_query($link,"SELECT * FROM Usuario WHERE Apellido='Martín'");
    

        while($tupla = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo $tupla['Nombre']. " " .$tupla['Apellido'];
            }

*/
    //En caso de fallo nos devuelve cuál es el error
    echo mysqli_error($link)."\n";
?>