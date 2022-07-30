<?php 
   class Estudiante {
     private $Nombre;
     private $Apellidos;
     private $Edad;

   public function constructor($Nombre, $Apellidos, $Edad){
     $this->Nombre = $Nombre;
     $this->Apellidos = $Apellidos;
     $this->Edad = $Edad;
   }
   public function getNombre(){
     return $this->Nombre;
   }
   public function getApellidos(){
    return $this->Apellidos;
   }
   public function getEdad(){
    return $this->Edad;
   }
}
$objetoEstudiante = new Estudiante('Angel','Illescas Palacios', 23);
echo $objetoEstudiante->getNombre(); // Angel 
echo $objetoEstudiante->getApellidos(); //  Illescas Palacios
echo $objetoEstudiante->getEdad();  //  23

$objetoEstudianteUno = new Estdiante('Samantha','Campero Mondragon', 45);
echo $objetoEstudianteUno->getNombre();  // Samantha
echo $objetoEstudianteUno->getApellidos(); //  Campero Mondragon
echo $objetoEstudianteUno->getEdad();  //   45

$objetoEstudianteDos = new Estdiante('Jose Antonio','Ulises Fernandez ', 20);
echo $objetoEstudianteDos->getNombre();  // Samantha
echo $objetoEstudianteDos->getApellidos(); //  Campero Mondragon
echo $objetoEstudianteDos->getEdad();  //   45

?>

