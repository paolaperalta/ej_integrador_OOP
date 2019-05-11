<?php

class Curso
{
  private $nombre;
  private $codigoCurso;
  //agrego en Parte E:
  private $profesorAdjunto;
  private $profesorTitular;
  private $cupoMaximo;
  private $alumnosInscriptos = array(); //para saber si puedo seguir inscribiendo gente necesito saber dos cosas, cual es el cupo maximo y cuanta gente tengo inscripta. por eso alunos inscriptos tiene que ser del tipo array asi lo puedo contabilizar




  public function __construct(
    string $nombre,
    int $codigoCurso,
    int $cupoMaximo
    )

  {
    $this->nombre = $nombre;
    $this->codigoCurso = $codigoCurso;
    $this->cupoMaximo = $cupoMaximo;
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
      return $this->codigoCurso;
  }

  public function setCodigoCurso($codigoCurso)
  {
      $this->codigoCurso = $codigoCurso;
  }


  public function getProfesorAdjunto()
  {
      return $this->profesorAdjunto;
  }

  public function setProfesorAdjunto($profesorAdjunto)
  {
      $this->profesorAdjunto = $profesorAdjunto;
  }


  public function getProfesorTitular()
  {
      return $this->profesorTitular;
  }

  public function setProfesorTitular($profesorTitular)
  {
      $this->profesorTitular = $profesorTitular;
  }


  public function getCupoMaximo()
  {
      return $this->cupoMaximo;
  }

  public function setCupoMaximo($cupoMaximo)
  {
      $this->cupoMaximo = $cupoMaximo;
  }


  public function getAlumnosInscriptos()
  {
      return $this->alumnosInscriptos;
  }

  public function setAlumnosInscriptos($alumnosInscriptos)
  {
      $this->alumnosInscriptos = $alumnosInscriptos;
  }

  //Parte G - creo un metodo (funcion) que permita agregar un alumno a la lista. El método devolverá true si el alumno puede agregarse o false en caso de que no haya cupo disponible.
  public function agregarUnAlumno(Alumno $unAlumno): string
  {
      $cupoCurso = $this->getCupoMaximo();

      if(count($this->alumnosInscriptos) < $cupoCurso) {
          foreach($this->getAlumnosInscriptos() as $alumno) {
              if($alumno->getCodigoAlumno() == $unAlumno->getCodigoAlumno()) {
                  flashMessage('El Alumno ya existe en este curso');
                  return false;
              }
          }
          $this->alumnosInscriptos[] = $unAlumno;
          return true;
      } else {
          return false;
      }
  }









}
