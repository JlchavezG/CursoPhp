<?php
   class Persona 
   {
     // propiedades de la clase 
     private $nombre = null;
     private $apellidos = null;
     // constantes :
     const Persona_Hombre = "Hombre";
     const Persona_Mujer = "Mujer";
     // generar el constructor 
     function _construct(){
       echo "<b>Es el constructor de la clase Persona</b>";
     }
     /*
     function Persona(){
      echo "<b>Es el constructor de la clase Persona</b>";
     }
     */
     // Metodos de la clase 
     public function getNombre(){
       return $this->nombre;
     }
     public function setNombre($nombre){
       $this->nombre = $nombre; 
     }
     public function getApellidos(){
      return $this->apellidos;
     }
     public function setApellidos($apellidos){
      $this->apellidos = $apellidos;
     }
   }
?>