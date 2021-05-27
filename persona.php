<?php

class Persona
{
    //PROPIEDADES DEL OBJETO
    protected $nombre;
    protected $apellido;
    protected $edad;

    //METODOS DEL OBJETO
    public function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function presentarse()
    {
        echo "Hola soy $this->nombre $this->apellido y tengo $this->edad años.\n";
    }
};


class Docente extends Persona
{
    private $asignaturas;

    public function __construct($nombre, $apellido, $edad, $asignaturas)
    {
        parent::__construct($nombre, $apellido, $edad);
        $this->asignaturas = $asignaturas;
    }


    public function presentarse()
    {
        echo "Hola soy el Profesor $this->nombre $this->apellido, tengo $this->edad años y doy clases de $this->asignaturas\n";
    }
}


class Estudiante extends Persona
{
    private $curso;

    public function __construct($nombre, $apellido, $edad, $curso)
    {
        parent::__construct($nombre, $apellido, $edad, $curso);
        $this->curso = $curso;
    }
}
