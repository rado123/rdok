<?php

namespace Brenc;

class a {
	protected $a1='ena';
	protected $a2='dve';

	public function __construct(){
		$this->a1='enka';
	}


	public function getA1(){
		return $a1;
	}
	public function setA1(string $a1){
		$this->a1=$a1;
		return $this;
	}
	public function getA2(){
		return $a2;
	}
	public function setA2(string $a2){
		$this->a2=$a2;
		return $this;
	}
	public function izpis(){
		echo "Klasa ". get_class($this).PHP_EOL;
		echo "a1=",$this->a1,PHP_EOL;
		echo "a2=",$this->a2,PHP_EOL;
		echo PHP_EOL;
	}
}


