<?php
 require_once("practica3.php");
 // crear el objeto para instanciar la clase persona
 $ObjetoPersona = new Persona();
 $ObjetoPersona->setNombre("Ramiro");
 $ObjetoPersona->setApellidos("Perez Gómez");
 echo "Nombre: ".$ObjetoPersona->getNombre()."<br/>";
 echo "Apellidos: ".$ObjetoPersona->getApellidos()."<br/>";
 echo "Genero: ".Persona::Persona_Hombre."<br/>";


?>