<?php

require("Persona.php");

$persona1 = new Docente("Julia","López",32, "Matemáticas");
$persona1->presentarse();
/* $persona1->nombre = "Julia";
$persona1->apellido = "Lopez";
$persona1->edad = 32; */

/* var_dump($persona1); */

$persona2 = new Estudiante("Mario","Sánchez",45, "2º bachiller");
$persona2->presentarse();
/* $persona2->nombre = "Mario";
$persona2->apellido = "Sanchez";
$persona2->edad =  45; */

/* var_dump($persona2); */
/* 
echo "Hola soy $persona1->nombre $persona1->apellido y tengo $persona1->edad años.\n";
echo "Hola soy $persona2->nombre $persona2->apellido y tengo $persona2->edad años.\n"; */