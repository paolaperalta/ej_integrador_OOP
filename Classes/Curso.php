<?php

class Curso
{
  private $nombre;
  private $codigoCurso;




  public function __construct(
    string $nombre,
    int $codigoCurso
    )

  {
    this->nombre = $nombre;
    this->codigoCurso = $codigoCurso;
  }

  public function getNombre()
  {
      return $this->nombre;
  }

  public function setNombre($nombre)
  {
      $this->nombre = $nombre;
  }

  public function getCodigoCurso()
  {
      return $this->CodigoCurso;
  }

  public function setCodigoCurso($codigoCurso)
  {
      $this->codigoCurso = $codigoCurso;
  }

}
