<?php

class Coche
{
	private $velocidad = 100;
	private $color = "blanco";


	function __get($propiedad)
	{
		if (property_exists($this, $propiedad)) {
			return $this->$propiedad;
		}
	}
	function __set($propiedad, $valor)
	{
		if (property_exists($this, $propiedad)) {
			$this->$propiedad = $valor;
		}
	}
}

$seat = new Coche();
//set mágico (modificar el valor de una propiedad)
$seat->velocidad = 30;
$seat->tipo = "gasolina";
echo '<pre>';
print_r($seat);
echo '</pre>';

//get mágico (obtener propiedades)
echo $seat->velocidad;
echo '<br>';
echo $seat->color;
echo '<br>';
