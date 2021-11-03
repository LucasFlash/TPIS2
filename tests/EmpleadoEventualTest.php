<?php
//Las clases de testing son subclases de TestCase:
class EmpleadoEventualTest extends \PHPUnit\Framework\TestCase
{
    //Cualquier método que comience con "test" será considerado
    //un test por phpUnit:

      public function crear($nombre="Fulano", $apellido="De Tal", $dni=35070625, $salario=1000, Array $montos = [200, 200, 200] ) 

     {
            $ee = new \app\EmpleadoEventual($nombre ,$apellido, $dni, $salario, $montos);
            return $ee;
        }


        public function testSePuedeCalcularComisionCorrectamente() {
        
     $c = $this->crear(3);
     $this->assertEquals(3, $c->calcularComision() );
    }
  }
    