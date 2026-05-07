<?php
require_once 'UsuarioCorreo.php';

/**
 * Clase Alumno.
 * Hereda de UsuarioCorreo y gestiona el rendimiento y avance del estudiante.
 * Datos del Alumno:
 * Nombre: Carlos Arturo Hernandez Nunez
 * No. Control: 252310355
 * Fecha: 6 de mayo de 2026
 * Nombre de la actividad: Practica 4.3 - Programando usuarios de correo en PHP
 */
class Alumno extends UsuarioCorreo {
    private $promedio;
    private $semestre;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento, $promedio, $semestre) {
        parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
        $this->promedio = $promedio;
        $this->semestre = $semestre;
    }

    public function cambiarPromedio($nuevoPromedio) {
        $this->promedio = $nuevoPromedio;
    }

    public function cambiarSemestre($nuevoSemestre) {
        $this->semestre = $nuevoSemestre;
    }

    // Sobrescritura del metodo heredado
    public function obtenerNombreCompleto() {
        return "Alumno {$this->nombre} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }
}
?>