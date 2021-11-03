<?php
abstract class EmpleadoTest extends \PHPUnit\Framework\TestCase
{
    //Cualquier método que comience con "test" será considerado
    //un test por phpUnit:


    public function testNombreApellido()
    {
        $this->expectException(\Exception::class);
        //Lanzará una excepción, porque la base no puede ser cero:
        $r = new \App\Rectangulo(0,4);
    }

     }