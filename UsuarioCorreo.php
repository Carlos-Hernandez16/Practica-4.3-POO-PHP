<?php
/**
 * Clase base abstracta UsuarioCorreo.
 * Modela los datos generales de un usuario institucional.
 * Datos del Alumno:
 * Nombre: Carlos Arturo Hernandez Nunez
 * No. Control: 252310355
 * Fecha: 6 de mayo de 2026
 * Nombre de la actividad: Practica 4.3 - Programando usuarios de correo en PHP
 */
abstract class UsuarioCorreo {
    // Propiedad estatica para generar IDs unicos
    private static $contadorID = 1;
    
    protected $id;
    protected $nombre;
    protected $apellidoPaterno;
    protected $apellidoMaterno;
    protected $edad;
    protected $departamento;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento) {
        $this->id = self::$contadorID++;
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->edad = $edad;
        $this->departamento = $departamento;
    }

    // Metodos modificadores (Setters)
    public function cambiarNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    public function cambiarEdad($nuevaEdad) {
        $this->edad = $nuevaEdad;
    }

    public function cambiarDepartamento($nuevoDepartamento) {
        $this->departamento = $nuevoDepartamento;
    }

    // Metodos de acceso (Getters)
    public function obtenerId() {
        return $this->id;
    }

    public function obtenerEdad() {
        return $this->edad;
    }

    public function obtenerDepartamento() {
        return $this->departamento;
    }

    // Metodo abstracto que debe ser implementado por las subclases
    abstract public function obtenerNombreCompleto();
}
?>