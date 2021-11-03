<?php
//Las clases de testing son subclases de TestCase:
class EmpleadoPermanenteTest extends \PHPUnit\Framework\TestCase
{
	public function crear( $nombre="Fulano", $apellido="De Tal", $dni=35070625, $salario=1000, \DateTime $fechaIngreso = null)
	{
            $ep = new\app\EmpleadoPermanente($nombre, $apellido, $dni, $salario, $fechaIngreso);
            return $ep;
        }

        public function testCalcularComision()
           {
        $ep = new \App\EmpleadoPermanente(10, 2020/10/20);
        $this->assertEquals(20, $r->EmpleadoPermanente());
    }
     }