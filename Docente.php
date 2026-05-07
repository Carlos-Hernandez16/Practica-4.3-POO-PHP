<?php
require_once 'UsuarioCorreo.php';

/**
 * Clase Docente.
 * Hereda de UsuarioCorreo y gestiona informacion academica del docente.
 * Datos del Alumno:
 * Nombre: Carlos Arturo Hernandez Nuñez
 * No. Control: 252310355
 * Fecha: 6 de mayo de 2026
 * Nombre de la actividad: Practica 4.3 - Programando usuarios de correo en PHP
 */
class Docente extends UsuarioCorreo {
    private $gradoAcademico;
    private $antiguedad;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento, $gradoAcademico, $antiguedad) {
        parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
        $this->gradoAcademico = $gradoAcademico;
        $this->antiguedad = $antiguedad;
    }

    public function cambiarGradoAcademico($nuevoGrado) {
        $this->gradoAcademico = $nuevoGrado;
    }

    public function cambiarAntiguedad($nuevaAntiguedad) {
        $this->antiguedad = $nuevaAntiguedad;
    }

    // Sobrescritura del metodo heredado
    public function obtenerNombreCompleto() {
        return "{$this->gradoAcademico} {$this->nombre} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }
}
?>