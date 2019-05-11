<?php
  //Parte F
  class DigitalHouseManager {
    //atributos
    private $listaAlumos = array();
    private $listaProfesores = array();
    private $listaCursos = array();

  //metodos (getters y setters) // no eran necesarios todos solo el getter y por eso no termine
  public function getListaAlumnos(){
    return $this-> listaAlumos;
  }

  public function setListaAlumnos($listaAlumos)
  {
    $this -> listaAlumnos = $listaAlumos;
  }


  public function altaCurso ($nombre, $codigoCurso, $cupoMaximo)
  {
    $this->listaCursos[] = new Curso ($nombre, $codigoCurso, $cupoMaximo);
  }


  public function altaProfesorAdjunto ($nombre, $apellido, $codigoProfesor, $horasConsulta)
  {
    $this->listaProfesores[] = new ProfesorAdjunto ($nombre, $apellido, $codigoProfesor, $horasConsulta);
  }


  public function altaProfesorTitular ($nombre, $apellido, $codigoProfesor, $especialidad)
  {
    $this->listaProfesores[] = new ProfesorTitular ($nombre, $apellido, $codigoProfesor, $especialidad);
  }

  public function altaAlumno ($nombre, $apellido, $codigoAlumno)
  {
    $this->listaAlumnos[] = new Alumno ($nombre, $apellido, $codigoAlumno);
  }

  public function inscribirAlumno($codigoAlumno, $codigoCurso)
  {
      $alumnoEncontrado = null;
      $cursoEncontrado = null;

      $listaDeCursos = $this->listaCursos;

      foreach($this->listaAlumnos as $alumno) {
          if($alumno->getCodigoAlumno() == $codigoAlumno) {
              $alumnoEncontrado = $alumno;
          }
      }
      //se puede hacer de las dos maneras, con this->listaEtcetc o sin el this
      foreach ($listaDeCursos as $curso) {
          if($curso->getCodigoCurso() == $codigoCurso) {
              $cursoEncontrado = $curso;
          }
      }

      if($alumnoEncontrado !== null && $cursoEncontrado !== null) {
          if($cursoEncontrado->agregarUnAlumno($alumnoEncontrado)) {
              flashMessage('Alumno inscripto satisfactoriamente');
              return true;
          }

          flashMessage(get_class($cursoEncontrado));
          return false;

      }
    }

    public function asignarProfesores($codigoCurso, $codigoProfesorTitular, $codigoProfesorAdjunto)
    {

    }




}
