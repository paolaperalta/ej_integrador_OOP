<?php

//la hacemos abstract porque va a ser una clase padre y no se va a poder instanciar
abstract class Profesor
{//cambio los atributos de private a protected por ser ahora una clase abstracta
  protected $nombre;
  protected $apellido;
  protected $antiguedad = 0;
  protected $codigoProfesor;




  public function __construct(
    string $nombre,
    string $apellido,
    int $codigoProfesor
    )

  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->codigoProfesor = $codigoProfesor;

  }

  public function getNombre()
  {
      return $this->nombre;
  }

  public function setNombre($nombre)
  {
      $this->nombre = $nombre;
  }

  public function getApellido()
  {
      return $this->apellido;
  }

  public function setApellido($apellido)
  {
      $this->apellido = $apellido;
  }

  public function getAntiguedad()
  {
      return $this->antiguedad;
  }

  public function setAntiguedad($antiguedad)
  {
      $this->antiguedad = $antiguedad;
  }

  public function getCodigoProfesor()
  {
      return $this->codigoProfesor;
  }

  public function setCodigoProfesor ($codigoProfesor)
  {
      $this->codigoProfesor = $codigoProfesor;
  }

}
