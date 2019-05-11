<?php
require 'loader.php';


$DigitalHouseManager = new DigitalHouseManager();


$alumno1 = new Alumno ("Paola", "Peralta", 1733);
$alumno2 = new Alumno ("Gaby", "Peralta", 1734);
$alumno3 = new Alumno ("Nati", "Peralta", 1735);
$alumno4 = new Alumno ("Herni", "Peralta", 1736);
$curso1 = new Curso ("Fullstack", 12345, 3);

$DigitalHouseManager->altaCurso ("Fullstack", 666, "3");

$DigitalHouseManager->altaProfesorAdjunto ("Herni", "Sarasa", 1234, 9);

$DigitalHouseManager->altaProfesorTitular ("Dani", "Perez", 1222, "php");

$DigitalHouseManager->altaAlumno ("Paola", "Peralta", 876);

$DigitalHouseManager->inscribirAlumno(876, 666);

dd($DigitalHouseManager);




?>
