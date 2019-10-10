<?php

//classe
class Carro{

//atributos
private $modelo;
private $marca;
private $cor;
private $ano;
private $km;

public function setModelo($modeloparam){
$this -> modelo = $modeloparam;
}

public function getModelo(){
	echo $this -> modelo;

}
public function setMarca($marcaparam){
$this -> maraca = $marcaparam;
}

public function getMarca(){
	echo $this -> marca;

}

public function setCor ($corparam){

	$this -> cor = $corparam;
}
public function getCor (){
	echo $this -> cor;
}


public function setAno ($anoparam){
	$this -> ano = $anoparam;
}

public function getAno(){
	echo $this -> ano;
}

public function setKm ($kmparam){
	$this -> km = $kmparam;
}
public function getKm(){
	echo $this -> km;
}
}

?>