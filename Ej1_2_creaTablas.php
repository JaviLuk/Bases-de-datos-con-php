<?php
    //Incluimos el primer fichero
    include "Ej1_0_conexionBD.php";

    //Seleccionamos la base de datos en la que vamos a trabajar
    mysqli_select_db($link, 'BD1_TEMA4_FJMG');

    //Creamos las tablas
    mysqli_query($link, "CREATE TABLE Usuario (Nombre varchar(15), Apellido varchar(15))");
    mysqli_query($link, "CREATE TABLE Curso (Nombre varchar(15))");
    mysqli_query($link, "CREATE TABLE Edificio (Número int(2))");
    mysqli_query($link, "CREATE TABLE Aula (Número int(2))");

    //En caso de error este comando nos lo mostrará
    echo mysqli_error($link)."\n";

?>