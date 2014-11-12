<?php


include_once('samochodWyscigowyInterface.php');
include_once('samochod.php');


class SamochodWyscigowy extends Samochod implements SamochodWyscigowyInterface{
	

	// private $silnik;
	// private $predkoscMaksymalna;
	// private $przyspieszenie;

	// public function SamochodWyscigowy(Silnik $a){
	// 	$this->silnik=$a;
	// 	$this->predkoscMaksymalna=$a->getMoc()*3;
	// 	//$this->predkoscMaksymalna=$this->silnik->getMoc()*3;
	// 	$this->przyspieszenie=$a->getMoc()/10;

	// }
	// public function getPredkoscMaksymalna(){
	// 	return $this->predkoscMaksymalna;
	// }

	// public function getPrzyspieszenie(){
	// 	return $this->przyspieszenie;//zwraca wartosc ZMIENNEJ!!!!!
	// }

	// public function setSilnik(Silnik $a){
	// 	$this->silnik=$a;
	// }

	private $silnik;
	//private $predkoscMaksymalna;
	//private $przyspieszenie;

	public function SamochodWyscigowy(Silnik $a){
		$this->silnik=$a;
		// $this->predkoscMaksymalna=$a->getMoc()*3;
		// //$this->predkoscMaksymalna=$this->silnik->getMoc()*3;
		// $this->przyspieszenie=$a->getMoc()/10;

	}
	public function getPredkoscMaksymalna(){
		return $this->silnik->getMoc()*3;
	}

	public function getPrzyspieszenie(){
		return $this->silnik->getMoc()/10;//zwraca wartosc ZMIENNEJ!!!!!
	}

	public function setSilnik(Silnik $a){
		$this->silnik=$a;
	}


}









?>