<?php

use PHPUnit_Framework_TestCase as PHPUnit;
use SwPlan\Personagem\Habilidades;

class testCriacaoDePersonagem extends PHPUnit
{
    public function setUp()
    {
        $this->habilidades = new Habilidades([11,10,11,10,11,10]);
    }
    
    public function testDeveRetornarModificadorDoAtributo()
    {
        $this->assertEquals(-2, $this->habilidades->getModificador(6), 'Modificador de 6 Errado!');
        $this->assertEquals(-2, $this->habilidades->getModificador(7), 'Modificador de 7 Errado!');
        $this->assertEquals(-1, $this->habilidades->getModificador(8), 'Modificador de 8 Errado!');
        $this->assertEquals(-1, $this->habilidades->getModificador(9), 'Modificador de 9 Errado!');
        $this->assertEquals(0, $this->habilidades->getModificador(10), 'Modificador de 10 Errado!');
        $this->assertEquals(0, $this->habilidades->getModificador(11), 'Modificador de 11 Errado!');
        $this->assertEquals(1, $this->habilidades->getModificador(12), 'Modificador de 12 Errado!');
        $this->assertEquals(1, $this->habilidades->getModificador(13), 'Modificador de 13 Errado!');
        $this->assertEquals(2, $this->habilidades->getModificador(14), 'Modificador de 14 Errado!');
        $this->assertEquals(2, $this->habilidades->getModificador(15), 'Modificador de 15 Errado!');
        $this->assertEquals(3, $this->habilidades->getModificador(16), 'Modificador de 16 Errado!');
        $this->assertEquals(3, $this->habilidades->getModificador(17), 'Modificador de 17 Errado!');
        $this->assertEquals(4, $this->habilidades->getModificador(18), 'Modificador de 18 Errado!');
    }
    
    public function tearDown()
    {
        # code...
    }
}   
