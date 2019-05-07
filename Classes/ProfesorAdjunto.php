<?php

class ProfesorAdjunto extends Profesor
{

    private $horasConsulta;

    public function __construct(
        string $nombre,
        string $apellido,
        int $antiguedad = 0,
        int $codigoProfesor,
        int $horasConsulta
    )
    {
        parent::__construct($nombre, $apellido, $antiguedad, $codigoProfesor);
        $this->horasConsulta = $horasConsulta;
    }

    public function getHorasConsulta()
    {
        return $this->horasConsulta;
    }

    public function setHorasConsulta($horasConsulta)
    {
        $this->horasConsulta = $horasConsulta;
    }
} 
