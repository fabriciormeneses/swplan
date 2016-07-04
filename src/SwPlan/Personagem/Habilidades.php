<?php

namespace SwPlan\Personagem;

/**
* Estrutura Basica de Personagem 
*/
class Habilidades 
{
    private $for;
    private $des;
    private $con;
    private $int;
    private $sab;
    private $car;
    
    public function __construct(array $atributos)
    {
        $this->for = $atributos[0];
        $this->des = $atributos[1];
        $this->con = $atributos[2];
        $this->int = $atributos[3];
        $this->sab = $atributos[4];
        $this->car = $atributos[5];
    }

    public function getModificador($atributo)
    {
        $mod = floor(($atributo - 10)/2);
        return (int) $mod;
    }
}
