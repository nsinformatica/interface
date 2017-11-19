<?php 
interface Veiculo{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}
class Civic implements Veiculo{
	public function acelerar($velocidade){
		echo "O veiculo acelerou ateh  ". $velocidade . " Km/h";
	}
	public function frenar($velocidade)
	{
		echo "o veiculo frenou ateh " . $velocidade . " Km/h";
	}
	public function trocarMarcha($marcha)
	{
		echo "O veiculo engatou a marcha " . $marcha . " Km/h";
	}
}


$carro = new Civic();
$carro->trocarMarcha(1);
?> 