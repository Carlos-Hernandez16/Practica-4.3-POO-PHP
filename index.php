<?php
require_once 'Docente.php';
require_once 'Alumno.php';

/**
 * Script index.php.
 * Punto de entrada para ejecutar las pruebas y demostrar la herencia e instanciacion.
 * Datos del Alumno:
 * Nombre: Carlos Arturo Hernandez Nuñez
 * No. Control: 252310355
 * Fecha: 6 de mayo de 2026
 * Nombre de la actividad: Practica 4.3 - Programando usuarios de correo en PHP
 */

// Creacion de los objetos iniciales
$docente1 = new Docente("Roberto", "Solis", "Robles", 45, "Sistemas", "M.C.", 15);
$docente2 = new Docente("Ana", "Lopez", "Martinez", 38, "Matematicas", "Dr.", 10);

$alumno1 = new Alumno("Alonso", "Lira", "Espinoza", 20, "Sistemas", 9.3, 5);
$alumno2 = new Alumno("Maria", "Gomez", "Perez", 19, "Matematicas", 8.7, 3);

// Pruebas de modificacion con setters
$docente1->cambiarGradoAcademico("Dr.");
$alumno1->cambiarPromedio(9.8);
$alumno2->cambiarSemestre(4);

// Creacion de dos objetos adicionales
$docente3 = new Docente("Carlos", "Hernandez", "Nuñez", 28, "Informatica", "Ing.", 2);
$alumno3 = new Alumno("Emiliano", "Garcia", "Ruiz", 21, "Informatica", 9.5, 6);

// Impresion de resultados
echo "<h3>Registro de usuarios institucionales</h3>";

echo "ID: " . $docente1->obtenerId() . " | " . $docente1->obtenerNombreCompleto() . "<br>";
echo "ID: " . $docente2->obtenerId() . " | " . $docente2->obtenerNombreCompleto() . "<br>";
echo "ID: " . $docente3->obtenerId() . " | " . $docente3->obtenerNombreCompleto() . "<br><br>";

echo "ID: " . $alumno1->obtenerId() . " | " . $alumno1->obtenerNombreCompleto() . "<br>";
echo "ID: " . $alumno2->obtenerId() . " | " . $alumno2->obtenerNombreCompleto() . "<br>";
echo "ID: " . $alumno3->obtenerId() . " | " . $alumno3->obtenerNombreCompleto() . "<br>";
?>