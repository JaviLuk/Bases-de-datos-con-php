<?php
    //Incluismos el fichero primero y seleccionamos la base de datos
    include "Ej1_0_conexionBD.php";

    mysqli_select_db($link, 'BD1_TEMA4_FJMG');

    //Insertamos en cada tabla los valores
    mysqli_query($link, "INSERT INTO Usuario (Nombre, Apellido) VALUES('Javi', 'Martín')");
    mysqli_query($link, "INSERT INTO Usuario (Nombre, Apellido) VALUES('Juan Manuel', 'Lachica')");
    mysqli_query($link, "INSERT INTO Usuario (Nombre, Apellido) VALUES('Sergio', 'Gamero')");
    mysqli_query($link, "INSERT INTO Usuario (Nombre, Apellido) VALUES('Pablo', 'de la Santísima Trinidad...')");

    mysqli_query($link, "INSERT INTO Curso (Nombre) VALUES('IAW')");
    mysqli_query($link, "INSERT INTO Curso (Nombre) VALUES('ASGBD')");
    mysqli_query($link, "INSERT INTO Curso (Nombre) VALUES('ASO')");
    mysqli_query($link, "INSERT INTO Curso (Nombre) VALUES('SRI')");

    mysqli_query($link, "INSERT INTO Edificio (Número) VALUES('1')");
    mysqli_query($link, "INSERT INTO Edificio (Número) VALUES('2')");
    mysqli_query($link, "INSERT INTO Edificio (Número) VALUES('3')");
    mysqli_query($link, "INSERT INTO Edificio (Número) VALUES('4')");

    mysqli_query($link, "INSERT INTO Aula (Número) VALUES(1)");
    mysqli_query($link, "INSERT INTO Aula (Número) VALUES(2)");
    mysqli_query($link, "INSERT INTO Aula (Número) VALUES(3)");
    mysqli_query($link, "INSERT INTO Aula (Número) VALUES(4)");

    //En caso de fallo nos mostrá el error
    echo mysqli_error($link)."\n";
    
?>