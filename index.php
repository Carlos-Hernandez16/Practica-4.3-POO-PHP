<?php
require_once 'Docente.php';
require_once 'Alumno.php';

/**
 * Script index.php
 * Datos del Alumno:
 * Nombre: Carlos Arturo Hernandez Nuñez
 * No. Control: 252310355
 * Fecha: 6 de mayo de 2026
 * Nombre de la actividad: Practica 4.3 - Programando usuarios de correo en PHP
 */

// REGISTROS ORIGINALES DEL DOCUMENTO
$docente1 = new Docente("Roberto", "Solis", "Robles", 45, "Sistemas", "M.C.", 15);
$docente2 = new Docente("Ana", "Lopez", "Martinez", 38, "Matematicas", "Dr.", 10);

$alumno1 = new Alumno("Alonso", "Lira", "Espinoza", 20, "Sistemas", 9.3, 5);
$alumno2 = new Alumno("Maria", "Gomez", "Perez", 19, "Matematicas", 8.7, 3);

// 1. LLAMADAS PARA MODIFICAR ATRIBUTOS (PUNTO 1 DE PRUEBAS)
// Modificamos datos de los objetos existentes usando los setters
$docente1->cambiarGradoAcademico("Dr."); // Roberto subio de grado
$docente2->cambiarDepartamento("Investigacion"); // Ana cambio de area
$alumno1->cambiarPromedio(9.8); // Alonso mejoro su promedio
$alumno2->cambiarSemestre(4); // Maria avanzo de semestre

// 2. CREACION DE 2 DOCENTES Y 2 ALUMNOS MAS (PUNTO 3 DE PRUEBAS)
$docente3 = new Docente("Carlos", "Hernandez", "Nuñez", 28, "Informatica", "Ing.", 2);
$docente4 = new Docente("Laura", "Estrada", "Villarreal", 42, "Sistemas", "M.C.", 12);

$alumno3 = new Alumno("Emiliano", "Garcia", "Ruiz", 21, "Informatica", 9.5, 6);
$alumno4 = new Alumno("Sofia", "Mendez", "Castro", 20, "Sistemas", 9.0, 4);

// 3. MOSTRAR EN PANTALLA (PUNTO 2 DE PRUEBAS)
echo "<h3>Usuarios originales (Con datos modificados)</h3>";
echo "ID: " . $docente1->obtenerId() . " | " . $docente1->obtenerNombreCompleto() . " | Depto: " . $docente1->obtenerDepartamento() . "<br>";
echo "ID: " . $docente2->obtenerId() . " | " . $docente2->obtenerNombreCompleto() . " | Depto: " . $docente2->obtenerDepartamento() . "<br>";
echo "ID: " . $alumno1->obtenerId() . " | " . $alumno1->obtenerNombreCompleto() . " | Edad: " . $alumno1->obtenerEdad() . "<br>";
echo "ID: " . $alumno2->obtenerId() . " | " . $alumno2->obtenerNombreCompleto() . " | Edad: " . $alumno2->obtenerEdad() . "<br>";

echo "<h3>Nuevos registros adicionales</h3>";
echo "ID: " . $docente3->obtenerId() . " | " . $docente3->obtenerNombreCompleto() . "<br>";
echo "ID: " . $docente4->obtenerId() . " | " . $docente4->obtenerNombreCompleto() . "<br>";
echo "ID: " . $alumno3->obtenerId() . " | " . $alumno3->obtenerNombreCompleto() . "<br>";
echo "ID: " . $alumno4->obtenerId() . " | " . $alumno4->obtenerNombreCompleto() . "<br>";
?>